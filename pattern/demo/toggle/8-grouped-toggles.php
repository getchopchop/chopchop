<?php /*
Title: Grouped Toggles with button demo
Description: Shows an example of it working with a read more/read less button where the button text changes.
*/ ?>


<div class="u-toggle" id="full-description">
    <h1>🏴‍☠️</h1>
</div>

<p class="u-toggle is-active" id="full-description-show" data-cc-toggle-group="full-description-buttons">
    <a href="#" class="is-active" data-cc-toggle-target="#full-description, #full-description-hide" data-cc-toggle-action="toggle">Show Pirate</a>
</p>

<p class="u-toggle" id="full-description-hide" data-cc-toggle-group="full-description-buttons">
    <a href="#" data-cc-toggle-target="#full-description, #full-description-show" data-cc-toggle-action="toggle">Hide Pirate</a>
</p>

