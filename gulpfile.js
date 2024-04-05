// * ----------------------------------------
// * 設定
// * 作業用ディレクトリ
var baseDir = 'www/';

// * プラグイン読み込み
const path = require('path');                       // パス
const gulp = require('gulp');                       // gulp
const browserSync = require('browser-sync');        // 保存時にブラウザに反映
const connect = require('gulp-connect-php');        // phpの動作用
const plumber = require('gulp-plumber');            // エラー時の強制終了を回避
const notify = require('gulp-notify');              // エラーの通知
const watch = require('gulp-watch');                // ファイルの監視（追加ファイルも監視）
const changed = require('gulp-changed');            // 変更ファイルの特定
const cache = require('gulp-cached');               // キャッシュ
// const gulpPug = require('gulp-pug');                // [pug]
// const htmlbeautify = require('gulp-html-beautify'); // [pug]HTML整形
// const filter = require('gulp-filter');              // [pug]ファイルフィルター
// const gulpData = require('gulp-data');              // [pug]画像データの取得
// const imageSize = require('image-size');            // [pug]画像サイズの取得
// const rename = require('gulp-rename');              // [pug]拡張子をphpに変更用
const sass = require('gulp-dart-sass');             // [sass]
const csscomb = require('gulp-csscomb');            // [css]整形
const cleanCSS = require('gulp-clean-css');         // [css]圧縮
const cmq = require('gulp-combine-media-queries');  // [css]メディアクエリをまとめる
const uglify = require('gulp-uglify');              // [js]圧縮
const concat = require('gulp-concat');              // [js]1つのjsにまとめる
const imagemin = require('gulp-imagemin');          // [img]圧縮
// const mozjpeg = require('imagemin-mozjpeg');     // [img]jpg圧縮
// const pngquant = require('imagemin-pngquant');   // [img]png圧縮
const webp = require('gulp-webp');                  // [img]webp変換

// * ----------------------------------------
// * ブラウザの同期
function siteSync() {
  connect.server({
    base: 'www/',
    livereload: true,
    port: 5000,
  }, function () {
    browserSync.init({
      proxy: '127.0.0.1:5000',
      baseDir: 'www/',
      open: 'external',
      directory: true,
    });
  });
}

// * ----------------------------------------
// * ブラウザのリロード
const siteReload = (done) => {
  browserSync.reload();
  done();
}

// * ----------------------------------------
// * gulpPug
// const sourcePath = path.resolve(__dirname, 'www/');
// const pug = (done) => {
//   gulp.src([baseDir + '_src/pug/**/*.pug'])
//     .pipe(plumber({                                                   // plumberを咬ますとエラー時にgulpが止まらない
//       errorHandler: notify.onError('Error: <%= error.message %>')     // エラー通知
//     }))
//     .pipe(changed(baseDir + '/**/*.+(html|php)'))                     // 変更ファイルのみ出力対象にする
//     .pipe(filter(function (file) {                                    // _から始まるファイルを除外
//       return !/\/_/.test(file.path) && !/^_/.test(file.relative);
//     }))
//     .pipe(gulpData((file) => {
//       return {
//         imageSize: (src) => {
//           const filePath = src.startsWith('/')
//             ? path.resolve(sourcePath, src.slice(1))
//             : path.resolve(sourcePath, src);
//           return imageSize(filePath);
//         },
//       };
//     }))
//     .pipe(gulpPug({                                                   // コンパイル
//       doctype: 'html',
//       pretty: ' ',
//       basedir: baseDir,
//       filters: {                                                      // phpを可能にする
//         'php': text => {
//           text = '<?php ' + text + ' ?>';
//           return text;
//         }
//       }
//     }))
//     .pipe(rename({
//       extname: '.php'
//     }))
//     .pipe(cache('html-cache'))                                        // cssをキャッシュ
//     .pipe(gulp.dest(baseDir))                                         // baseDirに出力
//     .pipe(browserSync.stream())                                       // ブラウザに反映
//   done();
// }

// * ----------------------------------------
// * dartSass
const dartSass = (done) => {
  gulp.src([baseDir + '_src/sass/**/*.scss'])
    .pipe(plumber({                                                   // plumberを咬ますとエラー時にgulpが止まらない
      errorHandler: notify.onError('Error: <%= error.message %>')     // エラー通知
    }))
    .pipe(changed(baseDir + 'asset/css/'))                            // 変更ファイルのみ出力対象にする
    .pipe(sass())                                                     // コンパイル
    .pipe(cmq())                                                      // メディアクエリーをまとめる
    .pipe(csscomb())                                                  // cssを整形
    .pipe(cleanCSS({ format: 'keep-breaks' }))                     // cssを圧縮(!から始まるコメントは残す)
    // .pipe(cleanCSS())                                                 // cssを圧縮(!から始まるコメントは残す)
    .pipe(cache('css-cache'))                                         // cssをキャッシュ
    .pipe(gulp.dest(baseDir + 'asset/css/'))                          // baseDirに出力
    .pipe(browserSync.stream())                                       // ブラウザに反映
  done();
}

// * ----------------------------------------
// * js
const jsVender = (done) => {
  gulp.src([baseDir + '_src/js/vender/*.js'])
    .pipe(plumber())                                                  // plumberを咬ますとエラー時にgulpが止まらない
    .pipe(changed(baseDir + 'asset/js/'))                             // 変更ファイルのみ出力対象にする
    .pipe(concat('vender.js'))                                        // 1つのjsにまとめる
    // .pipe(uglify({ output: { comments: /^!/ } }))                  // jsを圧縮(!から始まるコメントは残す)
    .pipe(uglify())                                                   // jsを圧縮
    .pipe(cache('js-cache'))                                          // jsをキャッシュ
    .pipe(gulp.dest(baseDir + 'asset/js/'))                           // baseDirに出力
    .pipe(browserSync.stream())                                       // ブラウザに反映
  done();
}

const jsApp = (done) => {
  gulp.src([baseDir + '_src/js/*.js'])
    .pipe(plumber())                                                  // plumberを咬ますとエラー時にgulpが止まらない
    .pipe(changed(baseDir + 'asset/js/'))                             // 変更ファイルのみ出力対象にする
    .pipe(concat('app.js'))                                           // 1つのjsにまとめる
    .pipe(uglify())                                                   // jsを圧縮
    .pipe(cache('js-cache'))                                          // jsをキャッシュ
    .pipe(gulp.dest(baseDir + 'asset/js/'))                           // baseDirに出力
    .pipe(browserSync.stream())                                       // ブラウザに反映
  done();
}

// * ----------------------------------------
// * img
const img = (done) => {
  gulp.src([baseDir + '_src/img/**/*.+(jpg|jpeg|png|gif|svg|ico)'])
    .pipe(plumber())                                                  // plumberを咬ますとエラー時にgulpが止まらない
    .pipe(changed(baseDir + 'asset/img/'))                            // 変更ファイルのみ出力対象にする
    .pipe(imagemin([                                                  // pngを圧縮
      // pngquant({ quality: [0.8, 0.9], speed: 1, }),
      // mozjpeg({ quality: 90 }),
      imagemin.svgo(),
      imagemin.optipng(),
      imagemin.gifsicle({ optimizationLevel: 3 }),
    ]))
    .pipe(webp({ quality: 95 }))                                      // webp変換
    .pipe(cache('img-cache'))                                         // imgをキャッシュ
    .pipe(gulp.dest(baseDir + 'asset/img/'))                          // baseDirに出力
    .pipe(browserSync.stream())                                       // ブラウザに反映
  done();
}

// * ----------------------------------------
// * doc（ファイルのコピーだけ）
const doc = (done) => {
  gulp.src([baseDir + '_src/doc/**/*.+(pdf)'])
    .pipe(changed(baseDir + 'asset/doc/'))                            // 変更ファイルのみ出力対象にする
    .pipe(cache('doc-cache'))                                         // docをキャッシュ
    .pipe(gulp.dest(baseDir + 'asset/doc/'))                          // baseDirに出力
    .pipe(browserSync.stream())                                       // ブラウザに反映
  done();
}

// * ----------------------------------------
// * video（ファイルのコピーだけ）
const video = (done) => {
  gulp.src([baseDir + '_src/video/**/*.+(mp4)'])
    .pipe(changed(baseDir + 'asset/video/'))                          // 変更ファイルのみ出力対象にする
    .pipe(cache('video-cache'))                                       // videoをキャッシュ
    .pipe(gulp.dest(baseDir + 'asset/video/'))                        // baseDirに出力
    .pipe(browserSync.stream())                                       // ブラウザに反映
  done();
}

// * ----------------------------------------
// * audio（ファイルのコピーだけ）
const audio = (done) => {
  gulp.src([baseDir + '_src/audio/**/*.+(mp3)'])
    .pipe(changed(baseDir + 'asset/audio/'))                          // 変更ファイルのみ出力対象にする
    .pipe(cache('audio-cache'))                                       // audioをキャッシュ
    .pipe(gulp.dest(baseDir + 'asset/audio/'))                        // baseDirに出力
    .pipe(browserSync.stream())                                       // ブラウザに反映
  done();
}

// * ----------------------------------------
// * タスク化
exports.siteSync = siteSync;
// exports.pug = pug;
exports.dartSass = dartSass;
exports.jsVender = jsVender;
exports.jsApp = jsApp;
exports.img = img;
exports.doc = doc;
exports.video = video;
exports.audio = audio;

// * ----------------------------------------
// * ファイルの監視
const watchFiles = (done) => {
  gulp.watch(baseDir + '**/*.+(html|php|htaccess|htpasswd)', siteReload);
  // gulp.watch(baseDir + '_src/pug/**/*.pug', pug);
  gulp.watch(baseDir + '_src/sass/**/*.scss', dartSass);
  gulp.watch(baseDir + '_src/js/vender/*.js', jsVender);
  gulp.watch(baseDir + '_src/js/*.js', jsApp);
  gulp.watch(baseDir + '_src/img/**/*.*', img);
  gulp.watch(baseDir + '_src/doc/**/*.*', doc);
  gulp.watch(baseDir + '_src/video/**/*.*', video);
  gulp.watch(baseDir + '_src/audio/**/*.*', audio);
  done();
};

// * ----------------------------------------
// * 実行
exports.default = gulp.series(
  gulp.parallel(
    siteSync,
    watchFiles,
    // pug,
    dartSass,
    jsVender,
    jsApp,
    img,
    doc,
    video,
    audio
  )
);

