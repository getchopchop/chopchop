<?php /*
Title: Form Validation
*/ ?>

<div class="field-group has-error">
    <label class="field-group__label" class="error">Error Input</label>
    <div class="field-group__field">
        <input class="is-error" type="text" placeholder="Text Input">
    </div>
    <div class="validation-advice">
        <p>This field has failed validation.</p>
    </div>
</div>

<div class="field-group">
    <label class="field-group__label" class="valid">Valid</label>
    <div class="field-group__field">
        <input class="is-valid" type="text" placeholder="Text Input">
    </div>
</div>
