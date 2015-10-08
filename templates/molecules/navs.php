<div class="u-container">
    
    <h2>Base Nav</h2>
    <nav>
        <ul class="nav">
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
                    <li><a href="#"><span>home</span></a></li>
                    <li><a href="#"><span>UK</span></a></li>
                    <li><a href="#"><span>world</span></a></li>
                    <li><a href="#"><span>politics</span></a></li>
                    <li><a href="#"><span>sport</span></a></li>
                    <li><a href="#"><span>football</span></a></li>
                    <li><a href="#"><span>opinion</span></a></li>
                    <li><a href="#"><span>culture</span></a></li>
                    <li><a href="#"><span>business</span></a></li>
                    <li><a href="#"><span>lifestyle</span></a></li>
                    <li><a href="#"><span>fashion</span></a></li>
                    <li><a href="#"><span>environment</span></a></li>
                    <li><a href="#"><span>tech</span></a></li>
                    <li><a href="#"><span>travel</span></a></li>
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
    <?php include('templates/molecules/navs/multi-level.php'); ?>
    
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
    <p>Stacked by default</p>
    <nav>
        <ul class="nav nav--pills">
            <li><a href="#">Overview</a></li>
            <li><a href="#">Credits</a></li>
            <li><a href="#">Structure</a></li>
        </ul>
    </nav>
    
    <h2>Pills &amp; Inline Nav</h2>
    <nav>
        <ul class="nav nav--inline nav--pills">
            <li><a href="#">Overview</a></li>
            <li><a href="#">Credits</a></li>
            <li><a href="#">Structure</a></li>
        </ul>
    </nav>
    
</div>