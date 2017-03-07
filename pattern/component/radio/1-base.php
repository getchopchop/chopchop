<?php /*
Title: Radio
Class: .radio
Description: Customise the style of the <code>&lt;input type=radio&gt;</code> by wrapping it in a <code>.radio</code> class. Use <code>.field-group</code> to space.
*/ ?>


<div class="radio field-group">
    <input id="radio-1" name="radio" type="radio" checked>
    <label for="radio-1" class="radio__label">Checked</label>
</div>

<div class="radio field-group">
    <input id="radio-2" name="radio" type="radio">
    <label  for="radio-2" class="radio__label">Unchecked</label>
</div>

<div class="radio field-group">
    <input id="radio-3" name="radio" type="radio" disabled>
    <label for="radio-3" class="radio__label">Disabled</label>
</div>