<?php /*
Title: Toggle Group
Description: Demo of group.
*/ ?>

<p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target=".chipolata" class="chipolata">Toggle Chipolata</a></p>
<p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target=".bratwurst" class="bratwurst">Toggle Bratwurst</a></p>

<p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target=".carrot" class="carrot">Toggle Carrot</a></p>
<p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-target=".parsnip" class="parsnip">Toggle Parsnip</a></p>


<div class="u-toggle chipolata" data-cc-toggle-group="meat" data-cc-toggle-target-callback=".chipolata">
    Chipolata
</div>

<div class="u-toggle bratwurst" data-cc-toggle-group="meat" data-cc-toggle-target-callback=".bratwurst">
    Bratwurst
</div>


<div class="u-toggle carrot" data-cc-toggle-group="veg" data-cc-toggle-target-callback=".carrot">
    Carrot
</div>

<div class="u-toggle parsnip" data-cc-toggle-group="veg" data-cc-toggle-target-callback=".parsnip">
    Parsnip
</div>