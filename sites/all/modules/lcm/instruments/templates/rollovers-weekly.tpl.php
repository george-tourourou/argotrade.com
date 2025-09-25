<?php
global $language;
?>
<div class="full cfds rollovers-weekly">
    <div class="default-banner-promo default-banner-promo-h2 col-12">
        <div class="theme-content">
            <div class="text-area col-12">
                <h1 class="title white"><?= tt('translate_cfds_rollovers_weekly_title') ?></h1>
            </div>
        </div>
    </div>
    <div class="theme-content">
        <div class='full'>
            <div class="full ro-current-date">
                <p><?= $current_date ?></p>
            </div>
            <div class="full ro-text">
                <p>
                    <?= tt('translate_cfds_rollovers_weekly_be_advised') ?>
                </p>
            </div>
            <div class='full'>
                <!-- <?= $expiration_list ?> -->
                <?php mt4_table(expiration,rollovers); ?>
            </div>
            <div class='full notes'>
                <p><?= tt('translate_cfds_rollovers_weekly_note') ?></p>
                <span><?= tt('translate_cfds_rollovers_weekly_written_by') ?></span>
            </div>

        </div>
        <div class='col-xs-12 col-sm-12 col-md-5 col-lg-5 rightAreaContainer'>
            <img alt="" class="img-responsive center-block" src="/sites/default/files/webtrader-cosmos.png">
            <div class="page-instruments" style="margin: 0 0 10px; float:left;">
                <?php include_once "instruments-banner.php"; ?>
            </div>
        </div>
    </div>
</div>