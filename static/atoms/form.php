
<div class="u-container">
    
    <p class="cc-heading">Label <code>&lt;label&gt;</code></p>
    <label for="in">Sing up for news and offers</label>
    
    <p class="cc-heading">Legend <code>&lt;legend&gt;</code></p>
    <legend>Sign up for an account</legend>
    
    <p class="cc-heading">Select <code>&lt;select&gt;</code></p>
    <fieldset class="fields">
        <div class="fields__group">
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
    
    <p class="cc-heading">Checkbox Input <code>&lt;input type="checkbox" /&gt;</code></p>
    <fieldset class="fields">
        <div class="fields__group">
            <label for="checkbox1">
                <input id="checkbox1" name="checkbox" type="checkbox" checked="checked">
                Choice A
            </label>
        </div>
        <div class="fields__group">
            <label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox">
                Choice B
            </label>
        </div>
        <div class="fields__group">
            <label for="checkbox3">
                <input id="checkbox3" name="checkbox" type="checkbox">
                Choice C
            </label>
        </div>
    </fieldset>
    
    <p class="cc-heading">Radio Input  <code>&lt;input type="radio" /&gt;</code></p>
    <fieldset class="fields">
        <div class="fields__group">
            <label for="radio1">
                <input id="radio1" name="radio" type="radio" class="radio" checked="checked">
                Option 1
            </label>
        </div>
        <div class="fields__group">
            <label for="radio2">
                <input id="radio2" name="radio" type="radio" class="radio">
                Option 2
            </label>
        </div>
        <div class="fields__group">
            <label for="radio3">
                <input id="radio3" name="radio" type="radio" class="radio">
                Option 3
            </label>
        </div>
    </fieldset>
    
    <p class="cc-heading">Submit Input <code>&lt;input type="submit" /&gt;</code></p>
    <input type="submit" class="btn" value="Submit" />
    
    <p class="cc-heading">Text Input <code>&lt;input type="text" /&gt;</code></p>
    <input id="text" type="text" placeholder="Text Input">
    
    <p class="cc-heading">Password Input <code>&lt;input type="password" /&gt;</code></p>
    <input id="password" type="password" placeholder="Type your Password">
    
    <p class="cc-heading">Textarea <code>&lt;textarea&gt;</code></p>
    <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
    
    <p class="cc-heading">Color Input <code>&lt;input type="color" /&gt;</code></p>
    <input type="color" id="ic" value="#000000">
    
    <p class="cc-heading">Number Input <code>&lt;input type="number" /&gt;</code></p>
    <input type="number" id="in" min="0" max="10" value="5">
    
    <p class="cc-heading">Range Input <code>&lt;input type="range" /&gt;</code></p>
    <input type="range" id="ir" value="10">
    
    <p class="cc-heading">Range Input <code>&lt;input type="range" /&gt;</code> with <code>&lt;output&gt;</code></p>
    <input type="range" min="0" max="100" value="50" id="fader" step="1" oninput="outputUpdate(value)">
    <output for="fader" id="volume">50</output>
    <script>
        function outputUpdate(vol) {
            document.querySelector('#volume').value = vol;
        }
    </script>
    
    <p class="cc-heading">Date Input <code>&lt;input type="date" /&gt;</code></p>
    <input type="date" id="idd" value="1970-01-01">
    
    <p class="cc-heading">Month Input <code>&lt;input type="month" /&gt;</code></p>
    <input type="month" id="idm" value="1970-01">
    
    <p class="cc-heading">Week Input <code>&lt;input type="week" /&gt;</code></p>
    <input type="week" id="idw" value="1970-W01">
    
    <p class="cc-heading">Datetime Input <code>&lt;input type="datetime" /&gt;</code></p>
    <input type="datetime" id="idt" value="1970-01-01T00:00:00Z">
    
    <p class="cc-heading">Datetime Local Input <code>&lt;input type="datetime-local" /&gt;</code></p>
    <input type="datetime-local" id="idtl" value="1970-01-01T00:00">
    
    <p class="cc-heading">Web Address Input <code>&lt;input type="webaddress" /&gt;</code></p>
    <input id="webaddress" type="url" placeholder="http://yoursite.com">
    
    <p class="cc-heading">Email Address Input <code>&lt;input type="emailaddress" /&gt;</code></p>
    <input id="webaddress" type="email" placeholder="name@email.com">
    
    <p class="cc-heading">Search Input <code>&lt;input type="search" /&gt;</code></p>
    <input id="search" type="search" placeholder="Enter Search Term">
    
    <p class="cc-heading">Form Validation</p>
    <fieldset class="fields">
        <div class="fields__group has-error">
            <label class="error">Error Input</label>
            <input class="is-error" type="text" placeholder="Text Input">
            <div class="validation-advice">
                <p>This field has failed validation.</p>
            </div>
        </div>
        <div class="fields__group">
            <label class="valid">Valid</label>
            <input class="is-valid" type="text" placeholder="Text Input">
        </div>
    </fieldset>
    
</div>