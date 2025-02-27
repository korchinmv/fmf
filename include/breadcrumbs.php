<?php if (isset($arBreadCrumbs) && !empty($arBreadCrumbs)) {
    $currentUri = $_SERVER['REQUEST_URI'];
    $currentUri = parse_url($currentUri, PHP_URL_PATH);

    if (strpos($currentUri, '/th/') === 0) {
        $homeLink = '/th/';
    } else {
        $homeLink = '/';
    }

    $arBreadCrumbs = array_merge(
        [
            [
                'name' => 'Home',
                'link' => $homeLink
            ]
        ],
        $arBreadCrumbs
    );
?>
    <div class="wrap_container">
        <div class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
            <?php foreach($arBreadCrumbs as $key => $arBreadCrumbsItem) { ?>
                <div class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <?php
                        $isLast = (count($arBreadCrumbs) - 1) <= $key;
                    ?>
                    <?php if (!$isLast) { ?>
                    <a itemprop="item" href="<?= $arBreadCrumbsItem['link'] ?>">
                    <?php } ?>
                        <span itemprop="name"><?= $arBreadCrumbsItem['name'] ?></span>
                        <meta itemprop="position" content="<?= $key + 1 ?>" />
                    <?php if (!$isLast) { ?>
                    </a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
