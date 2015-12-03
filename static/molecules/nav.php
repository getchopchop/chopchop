<div class="u-container">

    <h2>Base Nav</h2>
    <nav>
        <ul class="nav">
            <li><a href="#">Overview</a></li>
            <li><a href="#">Credits</a></li>
            <li><a href="#">Structure</a></li>
        </ul>
    </nav>

    <h2>Inline Nav</h2>
    <nav>
        <ul class="nav nav--inline">
            <?php for($i=0; $i <=1; $i++) { ?>
            <li><a href="#">Overview</a></li>
            <li><a href="#">Credits</a></li>
            <li><a href="#">Structure</a></li>
            <?php } ?>
        </ul>
    </nav>

    <h2>Pills Nav</h2>
    <nav>
        <ul class="nav nav--pills">
            <li><a href="#">Overview</a></li>
            <li><a href="#">Credits</a></li>
            <li><a href="#">Structure</a></li>
        </ul>
    </nav>

    <h2>Stacked Nav</h2>
    <nav>
        <ul class="nav nav--stacked">
            <li><a href="#">Overview</a></li>
            <li><a href="#">Credits</a></li>
            <li><a href="#">Structure</a></li>
        </ul>
    </nav>

    <h2>Priority Nav</h2>
    <div class="priority-nav">
        <div class="priority-nav__scroll">
            <nav class="priority-nav__container">
                <ul class="nav nav--pills">
                    <li><a href="#">home</a></li>
                    <li><a href="#">UK</a></li>
                    <li><a href="#">world</a></li>
                    <li><a href="#">politics</a></li>
                    <li><a href="#">sport</a></li>
                    <li><a href="#">football</a></li>
                    <li><a href="#">opinion</a></li>
                    <li><a href="#">culture</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">lifestyle</a></li>
                    <li><a href="#">fashion</a></li>
                    <li><a href="#">environment</a></li>
                    <li><a href="#">tech</a></li>
                    <li><a href="#">travel</a></li>
                </ul>
            </nav>
        </div><!--/priority-nav__scroll -->
        <div class="nav nav--pills priority-nav__toggle">
            <a href="#" class="js-nav-toggle">More</a>
        </div>
    </div>
    <div class="priority-nav__sub u-hidden">
        <p>More stuff can go in here!</p>
    </div>

    <h2>Multi Level Primary Nav</h2>
    <?php include('molecules/navs/multi-level.php'); ?>

</div>
