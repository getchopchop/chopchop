<?php /*
Title: Toggle Group
Description: Demo of group.
*/ ?>

<p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target=".mushroom" class="mushroom">Toggle Mushroom in group "veg"</a></p>
<p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target=".tomato" class="tomato">Toggle Tomato in group "veg"</a></p>

<p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target=".banana" class="banana">Toggle Banana in group "fruit"</a></p>
<p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target=".apple" class="apple">Toggle Apple in group "fruit"</a></p>

<div class="u-toggle mushroom" data-cc-toggle-group="veg" data-cc-toggle-target-callback=".mushroom">
    <h1>🍄</h1>
</div>

<div class="u-toggle tomato" data-cc-toggle-group="veg" data-cc-toggle-target-callback=".tomato">
    <h1>🍅</h1>
</div>

<div class="u-toggle banana" data-cc-toggle-group="fruit" data-cc-toggle-target-callback=".banana">
    <h1>🍌</h1>
</div>

<div class="u-toggle apple" data-cc-toggle-group="fruit" data-cc-toggle-target-callback=".apple">
    <h1>🍎</h1>
</div>