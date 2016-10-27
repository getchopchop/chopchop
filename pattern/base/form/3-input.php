<?php /*
Title: Inputs
Class: &lt;input&gt;
*/ ?>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Submit</label>
    <div class="field-group__field">
        <input type="submit" class="btn" value="Submit" />
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label required">Text input</label>
    <div class="field-group__field">
        <input id="text" type="text" placeholder="Text Input">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Password input</label>
    <div class="field-group__field">
        <input id="password" type="password" placeholder="Type your Password">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Textarea input</label>
    <div class="field-group__field">
        <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Colour input</label>
    <div class="field-group__field">
        <input type="color" id="ic" value="#000000">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Number input</label>
    <div class="field-group__field">
        <input type="number" id="in" min="0" max="10" value="5">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Range input</label>
    <div class="field-group__field">
        <input type="range" id="ir" value="10">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Range input</label>
    <div class="field-group__field">
        <input type="range" min="0" max="100" value="50" id="fader" step="1" oninput="outputUpdate(value)">
        <output for="fader" id="volume"></output>
        <script>
            function outputUpdate(vol) {
                document.querySelector('#volume').value = vol;
            }
        </script>
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Date input</label>
    <div class="field-group__field">
        <input type="date" id="idd" value="1970-01-01">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Month input</label>
    <div class="field-group__field">
        <input type="month" id="idm" value="1970-01">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Week input</label>
    <div class="field-group__field">
        <input type="week" id="idw" value="1970-W01">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Datetime input</label>
    <div class="field-group__field">
        <input type="datetime" id="idt" value="1970-01-01T00:00:00Z">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Datetime local input</label>
    <div class="field-group__field">
        <input type="datetime-local" id="idtl" value="1970-01-01T00:00">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">URL input</label>
    <div class="field-group__field">
        <input id="webaddress" type="url" placeholder="http://yoursite.com">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Email input</label>
    <div class="field-group__field">
        <input id="webaddress" type="email" placeholder="name@email.com">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">Search input</label>
    <div class="field-group__field">
        <input id="search" type="search" placeholder="Enter Search Term">
    </div>
</div>

<div class="field-group field-group--scaffold">
    <label class="field-group__label">File input</label>
    <div class="field-group__field">
        <input id="file" type="file" placeholder="Enter Search Term">
    </div>
</div>