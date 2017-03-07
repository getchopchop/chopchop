<header class="header u-clearfix u-fill-grey-darker" id="top">
    <div class="u-container u-clearfix">
        
        <div class="header__body">
            
            <div class="grid g-gutter-x-sm g-space g-center-y">
                <div class="g-col-xs-6 g-col-md-4 g-col-lg-3">
                    
                    <a href="#" title="<?php printData('company', 'name'); ?>" class="logo">
                        <img src="<?php echo getUrl('build/img/logo/logo.png'); ?>" class="u-img-responsive" width="100" height="100" alt="<?php printData('company', 'name'); ?>" />
                    </a>
                    
                </div>
                
                <div class="u-hidden-xs u-hidden-sm g-col-md-5 g-col-xl-6 js-search-lg">
                    <form id="search_mini_form" class="single-form single-form--lg js-search" action="" method="get">
                        <label for="search" class="u-visually-hidden">Search</label>
                        <div class="grid g-stretch-first g-center-y">
                            <div>
                                <div>
                                    <input id="search" type="text" name="q" value="" placeholder="Search" maxlength="128" autocomplete="off">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn" title="Search">
                                    <span class="u-visually-hidden">Search</span>
                                    <?php printSvg('general', 'search3'); ?>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="g-col-xs-6 g-col-md-3 g-col-lg-3">
                    <div class="grid g-collapse g-gutter-x-sm g-center-y u-pull-right">
                        <div class="grid g-gutter-x-sm g-collapse">
                            <div>
                                <a href="#" class="u-visible-xs u-visible-sm btn" data-cc-toggle-action="activate" data-cc-toggle-target="#drawer-accounts">
                                    <span class="u-visually-hidden">My Account</span>
                                    <?php printSvg('general', 'user'); ?>
                                </a>
                                <a href="#" class="u-hidden-xs u-hidden-sm btn btn--lg" data-cc-toggle-action="activate" data-cc-toggle-target="#drawer-right">
                                    <span class="u-visually-hidden">My Account</span>
                                    <?php printSvg('general', 'user'); ?>
                                </a>
                            </div>
                            
                            <div>
                                <a href="#" class="u-visible-xs u-visible-sm btn">
                                    <span class="u-visually-hidden">Basket</span>
                                    <?php printSvg('general', 'cart'); ?>
                                    <span> <span class="summary__items">(1)</span><span class="u-hidden-xs"> Basket</span></span>
                                </a>
                                <a href="#" class="u-hidden-xs u-hidden-sm btn btn--lg">
                                    <span class="u-visually-hidden">Basket</span>
                                    <?php printSvg('general', 'cart'); ?>
                                    <span> <span class="summary__items">(1)</span><span class="u-hidden-md"> Basket</span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="u-visible-xs u-visible-sm u-block-bottom">
            <div class="grid g-stretch-first g-gutter-x-sm g-reverse">
                <div class="js-search-sm"><!-- search form --></div>
                <div class="u-full-height">
                    <a href="#" class="btn" data-cc-toggle-target="#drawer-nav" data-cc-toggle-action="activate">
                        <span>Browse</span>
                        <?php printSvg('general', 'menu'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</header>