<?php if(strstr($_SERVER['REQUEST_URI'], 'beauty')):?>
<div class="p-hero__reserve -beauty">
  <a target="_blank" rel="noopener noreferrer" href="https://page.line.me/954bntwp?openQrModal=true">
    <span class="text">LINEでご予約</span>
  </a>
</div>
<?php else: ?>
<div class="p-hero__reserve">
  <a target="_blank" rel="noopener noreferrer" href="https://aichiheart.reserve.ne.jp/sp/index.php?">
    <span class="text">初診のご予約</span>
  </a>
</div>
<?php endif; ?>