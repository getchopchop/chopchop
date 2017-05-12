<?php /*
Title: Checkbox
Class: .checkbox
Description: Customise the style of the <code>&lt;input type=checkbox&gt;</code> by wrapping it in a <code>.checkbox</code> class. Use <code>.field-group</code> to space.
*/ ?>


<div class="checkbox field-group">
    <input id="checkbox-1" name="radio" type="checkbox" checked="checked">
    <label for="checkbox-1" class="checkbox__label">Checked</label>
</div>

<div class="checkbox field-group">
    <input id="checkbox-2" name="radio" type="checkbox">
    <label  for="checkbox-2" class="checkbox__label">Unchecked</label>
</div>

<div class="checkbox field-group">
    <input id="checkbox-3" name="radio" type="checkbox" disabled>
    <label for="checkbox-3" class="checkbox__label">Disabled</label>
</div>

<label class="checkbox field-group">
    <input id="checkbox-4" name="radio" type="checkbox">
    <span class="checkbox__label">Label wrap input</span>
</label>