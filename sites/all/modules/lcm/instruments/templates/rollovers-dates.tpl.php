<?php global $language; ?>
<div class='full cfds rollovers-dates'>
    <div class="default-banner-promo default-banner-promo-h2 col-12">
        <div class="theme-content">
            <div class="text-area col-12">
                <h1 class="title white"><?= tt('translate_cfds_rollovers_dates_title') ?></h1>
            </div>
        </div>
    </div>
    <div class="expiration-dates col-12">
        <div class="theme-content">
            <div class="col-12 info-area">
            <div class="col-6 col-12_12-laptop left-side">
                <h2 class="col-12 title"><?= tt('translate_cfds_rollovers_dates_description') ?></h2>
                <p class='paragraph'><b><?= tt('translate_cfds_rollovers_dates_note_that') ?></b></p>
                <ul class='full'>
                    <li><?= tt('translate_cfds_rollovers_dates_l1') ?></li>
                    <li><?= tt('translate_cfds_rollovers_dates_l2') ?></li>
                    <li><?= tt('translate_cfds_rollovers_dates_l3') ?></li>
                </ul>

                <p class="paragraph col-12"><b><?= tt('translate_kw_expiration_dates')?></b></p>
                <p><a class="" href="/<?php echo $language->prefix; ?>/cfds/rollovers-weekly"><?= tt('translate_kw_weekly_expiration_rollover')?></a></p>
                <p class="paragraph"><?= tt('translate_cfds_rollovers_dates_p1')?></p>
            </div>

            <div class="col-6 col-12_12-laptop right-side">
                <?php //echo $rollovers_table; ?>
            <table class="sticky-enabled tableheader-processed sticky-table">
                <thead>
                <tr>
                    <th>
                        <p><?= tt('translate_kw_instrument') ?></p>
                    </th>
                    <th>
                        <p><?= tt('translate_kw_rollover_date') ?></p>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php mt4_table(expiration,dates); ?>
                </tbody>
            </table>
            </div>
            </div>
            <div class="col-12 notes-area">
                <p class="paragraph"><?= tt('translate_cfds_rollovers_dates_note_p1')?></p>
                <p class="paragraph"><?= tt('translate_cfds_rollovers_dates_note_p2')?></p>
            </div>
        </div>
    </div>
</div>