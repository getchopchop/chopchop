<?php /*
Title: Priority Nav
Class: .priority-nav
*/ ?>

<div class="priority-nav">
    <div class="priority-nav__container">
        <ul class="nav nav--inline nav--pills">
            <?php for($i=0; $i <=4; $i++) { ?>
            <li class="nav__item"><a href="#">home</a></li>
            <li class="nav__item"><a href="#">UK</a></li>
            <li class="nav__item"><a href="#">world</a></li>
            <li class="nav__item"><a href="#">politics</a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="priority-nav__toggle nav nav--pills">
        <a href="#" data-cc-action="toggle" data-cc-target="priority-nav-sub" id="priority-nav-sub-toggle">More</a>
    </div>
</div>
<div class="priority-nav__sub" id="priority-nav-sub" data-cc-cascade="priority-nav-sub-toggle">
    <ul class="nav nav--pills">
        <!--priority-nav item target -->
    </ul>
</div>