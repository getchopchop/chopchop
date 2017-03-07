<?php /*
Title: Footer
*/ ?>

<div class="u-fill-grey-darker">
    <a href="#top" class="btn btn--block btn--grey u-block">Back to top</a>
</div>

<div class="u-clearfix u-fill-grey-darker t-light-grey">
    <div class="u-container-md u-section-sm">
        <div class="grid g-center-y g-gutter-sm">
            <div class="g-col-md-4">
                <h4>Receive offers to your inbox</h4>
            </div>
            <div class="g-col-md-8">
                <label for="email" class="u-visually-hidden">Your email address</label>
                <form action="" autocomplete="off" class="single-form single-form--lg">
                    <div class="grid g-stretch-first">
                        <div>
                            <input type="text" id="email" placeholder="Enter email address" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn--red">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr />
    <div class="u-container-lg u-section-sm">
        <div class="grid g-gutter-x">
            <div class="g-col-lg-8">
                <div class="grid g-gutter">
                    <div class="g-col-md-4">
                        <div class="toggle-icon" data-cc-toggle-action="toggle" data-cc-toggle-target="#footer-1" data-cc-toggle-group="footer-header">
                            <h4>We accept</h4>
                            <span class="toggle-icon__icon u-hidden-md u-hidden-lg u-hidden-xl"></span>
                        </div>
                        <div class="u-toggle-xs u-toggle-sm" id="footer-1" data-cc-toggle-group="footer" data-cc-cascade="footer-1-header">
                            <ul class="u-list-inline">
                                <li><?php printSvg('card', 'Visa-card-light', 'icon--card'); ?></li>
                                <li><?php printSvg('card', 'MasterCard-light', 'icon--card'); ?></li>
                                <li><?php printSvg('card', 'Maestro-card-light', 'icon--card'); ?></li>
                                <li><?php printSvg('payment', 'Apple-card-light', 'icon--card'); ?></li>
                                <li><?php printSvg('payment', 'Paypal-card-light', 'icon--card'); ?></li>
                                <li><?php printSvg('payment', 'AmericanExpress-card-light', 'icon--card'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="g-col-md-4">
                        <div class="is-active toggle-icon" data-cc-toggle-action="toggle" data-cc-toggle-target="#footer-2" id="footer-2-header" data-cc-toggle-group="footer-header">
                            <h4><?php printData('company', 'name'); ?> Links</h4>
                            <span class="toggle-icon__icon u-hidden-md u-hidden-lg u-hidden-xl"></span>
                        </div>
                        <div class="u-toggle-xs u-toggle-sm is-active" id="footer-2" data-cc-toggle-group="footer" data-cc-cascade="footer-2-header">
                            <ul class="nav nav--space">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="g-col-md-4">
                        <div class="toggle-icon" data-cc-toggle-action="toggle" data-cc-toggle-target="#footer-3" id="footer-3-header" data-cc-toggle-group="footer-header">
                            <h4>Account Links</h4>
                            <span class="toggle-icon__icon u-hidden-md u-hidden-lg u-hidden-xl"></span>
                        </div>
                        <div class="u-toggle-xs u-toggle-sm" id="footer-3" data-cc-toggle-group="footer" data-cc-cascade="footer-3-header">
                            <ul class="nav nav--space">
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Sign in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="g-col-lg-4">
                <div class="toggle-icon" data-cc-toggle-action="toggle" data-cc-toggle-target="#footer-4" id="footer-4-header" data-cc-toggle-group="footer-header">
                    <h4>About <?php printData('company', 'name'); ?></h4>
                    <span class="toggle-icon__icon u-hidden-md u-hidden-lg u-hidden-xl"></span>
                </div>
                <div class="u-toggle-xs u-toggle-sm" id="footer-4" data-cc-toggle-group="footer" data-cc-cascade="footer-4-header">
                    <p>Founded in 2000, <?php printData('company', 'name'); ?> is one of the UK's leading online digital memory retailers. We offer fast, affordable memory from the world's leading brands at an average cost of 30% less than the RRP.</p>
                    <div class="u-toggle" id="about-toggle">
                        <p>We supply memory for mobile phones and digital cameras specialising in a vast collection of SD Cards, Micro SD Cards and USB Flash Drives. Our range also extends to top brands of electronics, camera accessories, Android accessories, iPhone and iPad accessories, and plenty more.</p>
                        <p>All customers are offered exclusive discounts, excellent customer service and quick delivery. But don’t just take our word for it, read our customer reviews.</p>
                        <p>For more information about <?php printData('company', 'name'); ?>, visit our <a href="#">About Us</a> page.</p>
                    </div>
                    <p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target="#about-toggle">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="u-clearfix u-fill-black t-light-grey">
    <div class="u-container-lg u-section-sm">
        <div class="grid g-stretch-first g-gutter-x g-center-y">
            <div>
                <p class="micro">&copy; <?php printData('company', 'name'); ?>. All rights reserved.<br />
                    Website by iWeb.</p>
            </div>
            <div>
                <ul class="u-list-inline">
                    <li><a href="#" class="u-block-xs"><?php printSvg('social', 'instagram', 'icon--lg'); ?></a></li>
                    <li><a href="#" class="u-block-xs"><?php printSvg('social', 'twitter', 'icon--lg'); ?></a></li>
                    <li><a href="#" class="u-block-xs"><?php printSvg('social', 'facebook', 'icon--lg'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
