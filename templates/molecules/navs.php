<div class="well">
    <div class="container">
        
        <h2>Primary Nav</h2>
        <p>The Primary Nav pattern is generally used as the main navigation for the website.</p>

        <div class="chop-example">
            <nav class="nav--primary">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>

        {% highlight code %}
<nav class="nav--primary">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</nav>
        {% end highlight code %}
        
    </div>
</div>



<div class="well">
    <div class="container">
        
        <h2>Multi Level Primary Nav</h2>
        <p class="lead">These are horrible but we still use them, they are strictly desktop only as users on toch devices should not have this experience.</p>
        
        <p>The Multi Level Primary Nav pattern is generally used as the main navigation for the website.</p>
        
        <?php include('templates/molecules/navs/multi-level.php'); ?>
            

        {% highlight code %}
        
<?php include('templates/molecules/navs/multi-level.php'); ?>

        {% end highlight code %}
        
    </div>
</div>



<div class="well">
    <div class="container">
        
        <h2>Stacked Nav</h2>
        <p>The Stacked Nav pattern is generally used to style a list of links that would appear in a tall container such as a sidebar or <a href="/molecules/drawers">drawer</a>.
            
        <nav class="nav--stack">
            <ul>
                <li><a href="#">Overview</a></li>
                <li><a href="#">Credits</a></li>
                <li><a href="#">Structure</a></li>
            </ul>
        </nav>
        
        {% highlight code %}
<nav class="nav--stack">
    <ul>
        <li><a href="#">Overview</a></li>
        <li><a href="#">Credits</a></li>
        <li><a href="#">Structure</a></li>
    </ul>
</nav>
        {% end highlight code %}
        
    </div>
</div>