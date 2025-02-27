<?php
$currentUri = $_SERVER['REQUEST_URI'];
$currentUri = parse_url($currentUri, PHP_URL_PATH);

if (strpos($currentUri, '/th/') === 0) {
    $linkToEn = substr($currentUri, 3);
    $linkToTh = $currentUri;
} else {
    $linkToTh = '/th' . $currentUri;
    $linkToEn = $currentUri;
}
?>

<div class="switch-lang">
  <img class="switch-lang-light" src="/img/switch-lang-light.svg" alt="">
  <img class="switch-lang-dark" src="/img/switch-lang.svg" alt="">
  <div class="case-lang">
    <div class="lang-wrapper">
      <div class="text-lang1 front-link">
        <a href="<?php echo $linkToTh; ?>">Th</a>
      </div>
      <div class="text-lang2 back-link">
        <a href="<?php echo $linkToEn; ?>">En</a>
      </div>
    </div>
  </div>
</div>
