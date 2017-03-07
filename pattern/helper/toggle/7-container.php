<?php /*
Title: Toggle within a container
Description: Constrain the toggle group within a parent container up the chain from the trigger.
*/ ?>

<div class="smileys">
    <p><a href="#" data-cc-toggle-action="toggle" data-cc-toggle-closest-container=".smileys" data-cc-toggle-target=".happy, .sleepy, .angry">Toggle "happy", "sleepy" & "angry"</a></p>
    <div class="u-toggle happy">
        <h1>😀</h1>
    </div>

    <div class="u-toggle sleepy">
        <h1>😴</h1>
    </div>

    <div class="u-toggle angry">
        <h1>😠</h1>
    </div>
</div>