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
        <p>The Multi Level Primary Nav pattern is generally used as the main navigation for the website.</p>

        <div class="chop-example">
            
            <nav class="nav--primary">

                <ol>
                    <li class="level0 nav-1 first parent">
                        <a href="lighting.html" class="level0 has-children">Level 0</a>
                        <ul class="level0">
                            <li class="level1">
                                <a class="level1" href="lighting.html">Level 1</a>
                            </li>
                            <li class="level1 nav-1-1 first parent">
                                <a href="lighting/floodlight.html" class="level1 has-children">Level 1</a>
                                <ul class="level1">
                                    <li class="level2">
                                        <a class="level2" href="lighting/floodlight.html">Level 2</a>
                                    </li>
                                    <li class="level2 nav-1-1-1 first parent">
                                        <a href="lighting/floodlight/cree-led.html" class="level2 has-children">Level 2</a>
                                        <ul class="level2">
                                            <li class="level3">
                                                <a class="level3" href="lighting/floodlight/cree-led.html">Level 3</a>
                                            </li>
                                            <li class="level3 nav-1-1-1-1 first last parent">
                                                <a href="lighting/floodlight/cree-led/site-light.html" class="level3 has-children">Level 3</a>
                                                <ul class="level3">
                                                    <li class="level4">
                                                        <a class="level4" href="lighting/floodlight/cree-led/site-light.html">Level 4</a>
                                                    </li>
                                                    <li class="level4 nav-1-1-1-1-1 first last"><a href="lighting/floodlight/cree-led/site-light/rechargeable.html" class="level4 ">Level 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level2 nav-1-1-2 parent">
                                        <a href="lighting/floodlight/metal-halide.html" class="level2 has-children">Level 2</a>
                                        <ul class="level2">
                                            <li class="level3">
                                                <a class="level3" href="lighting/floodlight/metal-halide.html">Level 3</a>
                                            </li>
                                            <li class="level3 nav-1-1-2-1 first last">
                                                <a href="lighting/floodlight/metal-halide/site-light.html" class="level3 ">Level 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level2 nav-1-1-3 parent">
                                        <a href="lighting/floodlight/led.html" class="level2 has-children">Level 2</a>
                                        <ul class="level2">
                                            <li class="level3">
                                                <a class="level3" href="lighting/floodlight/led.html">Level 3</a>
                                            </li>
                                            <li class="level3 nav-1-1-3-1 first last">
                                                <a href="lighting/floodlight/led/site-light.html" class="level3 ">Level 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level2 nav-1-1-4 last parent">
                                        <a href="lighting/floodlight/halogen.html" class="level2 has-children">Level 2</a>
                                        <ul class="level2">
                                            <li class="level3">
                                                <a class="level3" href="lighting/floodlight/halogen.html">Level 3</a>
                                            </li>
                                            <li class="level3 nav-1-1-4-1 first last"><a href="lighting/floodlight/halogen/site-light.html" class="level3 ">Level 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ol>
                
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
        
        <h2>Stacked Nav</h2>
        <p>The Stacked Nav pattern is generally used to style a list of links that would appear in a tall container such as a sidebar or <a href="/molecules/drawers">drawer</a>.
            
        <div class="chop-example">
            <nav class="nav--stack">
                <ul>
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Credits</a></li>
                    <li><a href="#">Structure</a></li>
                </ul>
            </nav>
        </div>

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