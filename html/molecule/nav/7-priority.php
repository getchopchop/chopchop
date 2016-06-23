<?php /*
Title: Priority Nav
Class: .priority-nav
*/ ?>

<div class="priority-nav">
    <div class="priority-nav__container">
        <ul class="priority-nav__nav nav nav--inline nav--pills">
            <?php for($i=0; $i <=4; $i++) { ?>
            <li class="nav__item"><a href="#">home</a></li>
            <li class="nav__item"><a href="#">UK</a></li>
            <li class="nav__item"><a href="#">world</a></li>
            <li class="nav__item"><a href="#">politics</a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="priority-nav__toggle nav nav--pills">
        <a href="#" data-cc-action="toggle" data-cc-target="priority-nav-sub">More</a>
    </div>
</div>
<div class="priority-nav__sub" id="priority-nav-sub">
    <ul class="priority-nav__sub-nav nav nav--pills">
        <!--priority-nav item target -->
    </ul>
</div>
