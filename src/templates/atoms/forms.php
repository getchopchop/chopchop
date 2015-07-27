<fieldset class="options">
    <legend>Checkbox <abbr title="Required">*</abbr></legend>
    <ul class="form-list">
        <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked"> Choice A</label></li>
        <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice B</label></li>
        <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox"> Choice C</label></li>
    </ul>
</fieldset>

<fieldset class="options">
    <legend>Radio</legend>
    <ul class="form-list">
        <li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked"> Option 1</label></li>
        <li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio"> Option 2</label></li>
        <li><label for="radio3"><input id="radio3" name="radio" type="radio" class="radio"> Option 3</label></li>
    </ul>
</fieldset>

<div class="form-group">
    <label for="select">Select</label>
    <select id="select">
        <optgroup label="Option Group">
            <option>Option One</option>
            <option>Option Two</option>
            <option>Option Three</option>
        </optgroup>
    </select>
</div>

<fieldset>
    <div class="form-group"><label for="ic">Color input</label> <input type="color" id="ic" value="#000000"></div>
    <div class="form-group"><label for="in">Number input</label> <input type="number" id="in" min="0" max="10" value="5"></div>
    <div class="form-group"><label for="ir">Range input</label> <input type="range" id="ir" value="10"></div>
    <div class="form-group"><label for="idd">Date input</label> <input type="date" id="idd" value="1970-01-01"></div>
    <div class="form-group"><label for="idm">Month input</label> <input type="month" id="idm" value="1970-01"></div>
    <div class="form-group"><label for="idw">Week input</label> <input type="week" id="idw" value="1970-W01"></div>
    <div class="form-group"><label for="idt">Datetime input</label> <input type="datetime" id="idt" value="1970-01-01T00:00:00Z"></div>
    <div class="form-group"><label for="idtl">Datetime-local input</label> <input type="datetime-local" id="idtl" value="1970-01-01T00:00"></div>
</fieldset>

<fieldset>
    <div class="form-group">
        <label for="text">Text Input <abbr title="Required">*</abbr></label>
        <input id="text" type="text" placeholder="Text Input">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Type your Password">
    </div>
    <div class="form-group">
        <label for="webaddress">Web Address</label>
        <input id="webaddress" type="url" placeholder="http://yoursite.com">
    </div>
    <div class="form-group">
        <label for="emailaddress">Email Address</label>
        <input id="emailaddress" type="email" placeholder="name@email.com">
    </div>
    <div class="form-group">
        <label for="search">Search</label>
        <input id="search" type="search" placeholder="Enter Search Term">
    </div>
    <div class="form-group">
        <label for="text">Number Input <abbr title="Required">*</abbr></label>
        <input id="text" type="number" placeholder="Enter a Number" pattern="[0-9]*">
    </div>
    <div class="form-group">
        <label for="textarea">Textarea</label>
        <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
    </div>
    <div class="form-group">
        <label class="error">Error Input</label>
        <input class="is-error" type="text" placeholder="Text Input">
    </div>
    <div class="form-group">
        <label class="valid">Valid</label>
        <input class="is-valid" type="text" placeholder="Text Input">
    </div>
</fieldset>




<div class="input-group">
  <input type="text" class="form-control" placeholder="Search for...">
  <span class="input-group-btn">
    <button class="btn btn-default btn--sm" type="button">Go!</button>
  </span>
</div><!-- /input-group -->