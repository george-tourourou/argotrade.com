<link rel="stylesheet" href="/sites/all/themes/argo/Content/CSS/Pages/instruments-new.css?v<?= rand()?>">


<?php
global $language;

$instrArray = explode('/', $_SERVER['REQUEST_URI']);
$instrArray = explode('?', $instrArray[3]);

$instrSymbol = strtolower($instrArray[0]);

?>


<div id="instrument-page" class="col-12">
    <div class="default-banner-promo default-banner-promo-h2 col-12">
        <div class="theme-content">
            <div class="text-area col-12">
                <h1 class="title white"><?= tt($dealing_data['description']) ?></h1>
				<!--<p class="paragraph">p here</p>-->
            </div>
        </div>
    </div>
    <div class="col-12 instrument-promo-zone">
        <div class="theme-content">
            <div class="col-12 instrument-description">
                <!--<div class="col-12">-->
                <div class="heading col-12">
                    <div class="col-12">
						<!--<h1 id="instrument-name"><?= tt($dealing_data['description']) ?></h1>
                        <h1 id="instrument-name"><?php echo drupal_set_title(); ?></h1>
                        <h2 id="instrument-ticker-name"><?= tt($dealing_data['description']) ?></h2>-->
                        <div class="mobile-line"></div>
                    </div>
                    <!--<div class="col-12">-->
                    <!--    <div class="col-5_12 border-element"></div>-->
                    <!--</div>-->
                </div>
                <!--</div>-->
            </div>
            <div class="col-12 instrument-details">
                <div class="cta-part col-4">
                    <div class="col-12 cta-btns">
                        <a id="instrument-sell" class="show-popup-warning  MarketingParameters" href="https://www.argotrade.com/<?= $language->prefix; ?>/live-registration">
                            <span><?= tt('translate_kw_sell')?></span>
                            <b data-value="sell"><span class="loading"></span></b>
                            <img alt="Down" src="/sites/all/themes/argo/Content/Images/Pages/instruments/down.svg" />
                        </a>
                        <a id="instrument-buy" class="show-popup-warning MarketingParameters" href="https://www.argotrade.com/<?= $language->prefix; ?>/live-registration">
                            <span><?= tt('translate_kw_buy')?></span>
                            <b data-value="buy"><span class="loading"></span></b>
                            <img alt="Up" src="/sites/all/themes/argo/Content/Images/Pages/instruments/up.svg" />
                        </a>
                    </div>
                    <div class="col-12 price-container">
                        <div id="instrument-price" class="col-12 negative">
                            <b data-value="buy"></b>
                            <i id="instrument-change" class="fa " aria-hidden="true"></i>
                            <span id="instrument-change" class="percentage" data-value="change"></span>
                        </div>
                        <div class="instrument-high-low col-12">
                            <!--                            <div class="col-12">-->
                            <span class="col-6 low-area"><?= tt('translate_kw_low') ?>:<span id="instrument-low" data-value="low"><span class="loading"></span></span></span>
                            <span class="col-6 high-area"><?= tt('translate_kw_high', array()) ?>:<span id="instrument-high" data-value="high"><span class="loading"></span></span></span>
                            <!--                            </div>-->
                            <!--<div class="col-12">
                                <p><?= tt('translate_note_additional_terms') ?>	</p>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="instrument-info col-7">
                    <h3 class="title"><?= tt('translate_instrument_info') ?></h3>
                    <div class="col-12 table">
                        <div class="col-6 left-side">
                            <div class="col-12 row-area">
                                <span><?= tt('translate_kw_spread_per_unit') ?></span>
                                <b class="spreads-val"><?= $dealing_data['spreadPerUnit'] ?> <?= $dealing_data['spreadPerUnitCurrency'] ?><span class="loading"></span></b>
                            </div>
                            <div class="col-12 row-area">
                                <span><?= tt('translate_kw_premium_buy')?></span>
                                <b class="premium-buy-val"><?= $dealing_data['overnightInterestBuy'] ?><span class="loading"></span></b>
                            </div>
                            <div class="col-12 row-area">
                                <span><?= tt('translate_kw_initial_margin') ?></span>
                                <b class="initial-margin-val"><?= $dealing_data['initialMargin'] ?><span class="loading"></span></b>
                            </div>
                            <div class="col-12 row-area">
                                <span><?= tt('translate_kw_expires_daily')?></span>
                                <b class="expires-daily-val"><?= $dealing_data['expiresDaily'] ?><span class="loading"></span></b>
                            </div>
                        </div>
                        <div class="col-6 right-side">
                            <div class="col-12 row-area">
                                <span><?= tt('translate_kw_leverage')?></span>
                                <b class="leverage-val"><?= $dealing_data['leverage'] ?><span class="loading"></span></b>
                            </div>
                            <div class="col-12 row-area">
                                <span><?= tt('translate_kw_premium_sell') ?></span>
                                <b class="premium-sell-val"><?= $dealing_data['overnightInterestSell'] ?><span class="loading"></span></b>
                            </div>
                            <div class="col-12 row-area">
                                <span><?= tt('translate_kw_maintenance_margin') ?></span>
                                <b class="maintenance-margin-val"><?= $dealing_data['maintenanceMargin'] ?><span class="loading"></span></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 trading-conditions">
                        <div class="spreads">
                            <span><?= tt('translate_kw_spread_per_unit') ?></span>
                            <b class="spreads-val"><?= $dealing_data['spreadPerUnit'] ?> <?= $dealing_data['spreadPerUnitCurrency'] ?></b>
                        </div>
                        <div class="leverage">
                            <span><?= tt('translate_kw_leverage')?></span>
                            <b class="leverage-val"><?= $dealing_data['leverage'] ?></b>
                        </div>
                        <div class="trading-hours">
                            <span><?= tt('translate_kw_trading_hours') ?></span>
                            <b class="trading-hours-val"><?= tt($dealing_data['tradingHours']) ?></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="theme-content chart-container">
        <div class="instruments-chart full">
            <div class="chart-title"><?= tt($dealing_data['description']) ?></div>
            <ul class="controls">
                <li><div class="chart_control"></div></li>
                <li class="chart_types">
                    <div class="chart_type l main">
                        <img id="chart-line" alt="Line Chart" src="/sites/all/themes/argo/Content/Images/Pages/instruments/line.svg" />
                        <img id="chart-line-active" class="d-none" alt="Line Chart" src="/sites/all/themes/argo/Content/Images/Pages/instruments/line-active.svg" />
                    </div>
                    <div class="chart_type c">
                        <img id="chart-candle"  class="d-none" alt="Candle Chart" src="/sites/all/themes/argo/Content/Images/Pages/instruments/candle.svg" />
                        <img id="chart-candle-active" alt="Candle Chart" src="/sites/all/themes/argo/Content/Images/Pages/instruments/candle-active.svg" />
                    </div>
                </li>
            </ul>
        </div>
        <div id='chartContainer' class='col-12' style="height: 400px; min-width: 310px">
            <div id="container"></div>
        </div>
    </div>
    <div class="theme-content">
        <div class="risk-search col-12">
            <div class="col-6 text-area">
                <!--<p class="paragraph"><?= tt('translate_note_additional')?></p>-->
                <p class="space"><br/></p>
                <p class="paragraph"><?= tt('translate_note_additional_terms')?></p>
            </div>
            <div class="col-6 search-area">
                <!--[variable:search-assets-token]-->
                <?php
                $block = module_invoke('instruments', 'block_view', 'instruments_search');
                print render($block['content']);
                ?>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="https://code.highcharts.com/stock/highstock.js"></script>

<script src="/sites/all/themes/trade/assets/js/instrument/instrument.js"></script>
<script src="/sites/all/themes/trade/assets/js/instrument/instruments.js"></script>
<script type="text/javascript" src="/sites/all/themes/trade/assets/js/instrument/page-js.js"></script>
