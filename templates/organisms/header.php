<div class="well">
    <div class="container">
        
        <h2>Header Example</h2>
        <p>This example of a page header uses atoms and molecules with a minimal amount of additional scss for layout and colouring.</p>
        
        
        <header class="ce-header">
            
            <div class="ce-header__top">
                <div class="container">
                    <ul class="u-list-inline site-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="ce-header__main">
                <div class="container">
                    <a href="tel:01234 567 890" class="tel">01234 567 890</a>
                    
                    <a href="/" class="logo">
                        <span class="logo__art"><img src="/src/img/chopper_black.svg" class="logo__img" /></span>
                        <span class="logo__text"><span>Chop</span> <span>Chop</span></span>
                    </a>
                    
                    <form action="#" method="post" class="form-inline form-search">
                        <label class="u-visibility-hidden">Search the site</label>     
                        <input type="search" placeholder="Search the site" class="form-inline__query" />
                        <input type="submit" class="btn search-submit" value="Search">
                    </form>
                    
                    <?php include('templates/molecules/navs/multi-level.php'); ?>
                </div>
            </div>
            
            <div class="skip-links">
                <a href="#header-menu" data-target-element="#header-menu" class="skip-link skip-menu">
                    <span class="label">Menu</span>
                </a>
                <a href="#header-search" data-target-element="#header-search" class="skip-link skip-search">
                    <span class="label">Search</span>
                </a>
                <a href="#header-account" data-target-element="#header-account" class="skip-link skip-account">
                    <span class="label">Account</span>
                </a>
                <a href="#header-cart" class="skip-link skip-cart">
                    <span class="label">Basket</span>
                </a>
            </div>
        
            <div id="header-menu" class="skip-content skip-menu">Menu goes here</div>
            <div id="header-search" class="skip-content skip-search">Search goes here</div>
            <div id="header-account" class="skip-content skip-account">Account links go here</div>
            <div id="header-cart" class="skip-content skip-cart">Cart (without data attribute on link, falls back to href)</div>
            
        </header>
        
    </div>
</div>