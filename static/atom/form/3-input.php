<?php /*
Title: Inputs
*/ ?>

<input type="submit" class="btn" value="Submit" />

<input id="text" type="text" placeholder="Text Input">

<input id="password" type="password" placeholder="Type your Password">

<textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>

<input type="color" id="ic" value="#000000">

<input type="number" id="in" min="0" max="10" value="5">

<input type="range" id="ir" value="10">

<input type="range" min="0" max="100" value="50" id="fader" step="1" oninput="outputUpdate(value)">
<output for="fader" id="volume">50</output>
<script>
    function outputUpdate(vol) {
        document.querySelector('#volume').value = vol;
    }
</script>

<input type="date" id="idd" value="1970-01-01">

<input type="month" id="idm" value="1970-01">

<input type="week" id="idw" value="1970-W01">

<input type="datetime" id="idt" value="1970-01-01T00:00:00Z">

<input type="datetime-local" id="idtl" value="1970-01-01T00:00">

<input id="webaddress" type="url" placeholder="http://yoursite.com">

<input id="webaddress" type="email" placeholder="name@email.com">

<input id="search" type="search" placeholder="Enter Search Term">
