<div class="container">
    <fieldset class="field-group">
        <legend>Checkbox Group <abbr title="Required">*</abbr></legend>
        <div class="field-container">
            <label for="checkbox1">
                <input id="checkbox1" name="checkbox" type="checkbox" checked="checked">
                Choice A
            </label>
        </div>
        <div class="field-container">
            <label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox">
                Choice B
            </label>
        </div>
        <div class="field-container">
            <label for="checkbox3">
                <input id="checkbox3" name="checkbox" type="checkbox">
                Choice C
            </label>
        </div>
    </fieldset>

    <hr />

    <fieldset class="field-group">
        <legend>Radio Group</legend>
        <div class="field-container">
            <label for="radio1">
                <input id="radio1" name="radio" type="radio" class="radio" checked="checked">
                Option 1
            </label>
        </div>
        <div class="field-container">
            <label for="radio2">
                <input id="radio2" name="radio" type="radio" class="radio">
                Option 2
            </label>
        </div>
        <div class="field-container">
            <label for="radio3">
                <input id="radio3" name="radio" type="radio" class="radio">
                Option 3
            </label>
        </div>
    </fieldset>

    <hr />

    <fieldset class="field-group">
        <legend>Select Menu</legend>
        <div class="field-container">
            <label for="select">Choose an option...</label>
            <select id="select">
                <optgroup label="Option Group">
                    <option>Option One</option>
                    <option>Option Two</option>
                    <option>Option Three</option>
                </optgroup>
            </select>
        </div>
    </fieldset>

    <hr />

    <fieldset class="field-group">
        <legend>Standard Field Types</legend>
        <div class="field-container">
            <label for="text">Text Input <abbr title="Required">*</abbr></label>
            <input id="text" type="text" placeholder="Text Input">
        </div>
        <div class="field-container">
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Type your Password">
        </div>
        <div class="field-container">
            <label for="textarea">Textarea</label>
            <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
        </div>
        <input type="submit" class="btn" value="Submit" />
    </fieldset>

    <hr />

    <fieldset class="field-group">
        <legend>HTML5 Field Types</legend>
        <div class="field-container">
            <label for="ic">Color input</label>
            <input type="color" id="ic" value="#000000">
        </div>
        <div class="field-container">
            <label for="in">Number input</label>
            <input type="number" id="in" min="0" max="10" value="5">
        </div>
        <div class="field-container">
            <label for="ir">Range input</label>
            <input type="range" id="ir" value="10">
        </div>
    
        <div class="field-container">
            <label for="fader">Range Input with Output</label>
            <input type="range" min="0" max="100" value="50" id="fader" step="1" oninput="outputUpdate(value)">
            <output for="fader" id="volume">50</output>
            <script>
                function outputUpdate(vol) {
                    document.querySelector('#volume').value = vol;
                }
            </script>
        </div>
    
        <div class="field-container">
            <label for="idd">Date input</label>
            <input type="date" id="idd" value="1970-01-01">
        </div>
        <div class="field-container">
            <label for="idm">Month input</label>
            <input type="month" id="idm" value="1970-01">
        </div>
        <div class="field-container">
            <label for="idw">Week input</label>
            <input type="week" id="idw" value="1970-W01">
        </div>
        <div class="field-container">
            <label for="idt">Datetime input</label>
            <input type="datetime" id="idt" value="1970-01-01T00:00:00Z">
        </div>
        <div class="field-container">
            <label for="idtl">Datetime-local input</label>
            <input type="datetime-local" id="idtl" value="1970-01-01T00:00">
        </div>
        <div class="field-container">
            <label for="webaddress">Web Address</label>
            <input id="webaddress" type="url" placeholder="http://yoursite.com">
        </div>
        <div class="field-container">
            <label for="emailaddress">Email Address</label>
            <input id="emailaddress" type="email" placeholder="name@email.com">
        </div>
        <div class="field-container">
            <label for="search">Search</label>
            <input id="search" type="search" placeholder="Enter Search Term">
        </div>
        <div class="field-container">
            <label for="text">Number Input <abbr title="Required">*</abbr></label>
            <input id="text" type="number" placeholder="Enter a Number" pattern="[0-9]*">
        </div>
    </fieldset>

    <hr />

    <fieldset class="field-group">
        <legend>Validation</legend>
        <div class="field-container has-error">
            <label class="error">Error Input</label>
            <input class="is-error" type="text" placeholder="Text Input">
            <div class="validation-advice">
                <p>This field has failed validation.</p>
            </div>
        </div>
        <div class="field-container">
            <label class="valid">Valid</label>
            <input class="is-valid" type="text" placeholder="Text Input">
        </div>
    </fieldset>

    <hr />

    <fieldset class="field-group" id="inline-form">
        <legend>Inline Form</legend>
        <form action="#" method="post" class="form-inline form-search">
            <label class="is-vishidden">Search the site</label>     
            <input type="search" placeholder="Search the site" class="form-inline__query" />
            <input type="submit" class="btn search-submit" value="Search">
        </form>
    </fieldset>

</div>