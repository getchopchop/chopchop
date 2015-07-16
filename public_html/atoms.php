<!DOCTYPE HTML>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">

	<title>Primer - Atoms</title>

	<?php include('../src/templates/_styles.php'); ?>

</head>

<body>
    
    <div class="container">
        
        <h5 class="primer-heading">Headings</h5>
        <h1>h1 Heading</h1>
        <p class="h1">p.h1 Heading</p>
        <h2>h2 Heading</h2>
        <p class="h2">p.h2 Heading</p>
        <h3>h3 Heading</h3>
        <p class="h3">p.h3 Heading</p>
        <h4>h4 Heading</h4>
        <p class="h4">p.h4 Heading</p>
        <h5>h5 Heading</h5>
        <p class="h5">p.h5 Heading</p>
        <h6>h6 Heading</h6>
        <p class="h6">p.h6 Heading</p>


        <h5 class="primer-heading">Paragraphs</h5>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.</p>

        <p>Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. <b>This is bold</b>. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. <i>This is an i tag</i>. Quisque volutpat condimentum velit.</p>

        <p><em>This is an em tag</em> ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. <i>Aenean quam</i>. Nunc feugiat mi a tellus consequat imperdiet. <b>Fusce ac turpis quis ligula lacinia aliquet</b>. Vestibulum sapien. Proin quam. <b>Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis</b>. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. <i>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</i>. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam.</p>

        <p><b>Ut fringilla</b>. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. <i>Mauris ipsum</i>. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. <b>Sed non quam</b>. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. <b>Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam</b>. Cras metus. Sed aliquet risus a tortor.</p>

        <p>Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. <b>Curabitur sit amet mauris</b>. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed pretium blandit orci. <b>Integer id quam</b>. Ut eu diam at pede suscipit sodales. Aenean lectus elit, fermentum non, convallis id, sagittis at, neque. Nullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet mollis lectus.</p>


        <h5 class="primer-heading">Blockquotes</h5>
        <blockquote>
        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. <i>Aenean quam</i>. Nunc feugiat mi a tellus consequat imperdiet. <b>Fusce ac turpis quis ligula lacinia aliquet</b>. Vestibulum sapien. Proin quam. <b>Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis</b>. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. <i>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</i>. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam.</p>
        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>


        <h5 class="primer-heading">Horizontal Rule Example</h5>
        <hr />

        <h5 class="primer-heading">Unstyled Button</h5>
        <p>
            <a href="#" class="btn">Button</a>
            <button type="button" class="btn">Button</button>
        </p>
        <h5 class="primer-heading">Default Button</h5>
        <p>
            <a href="#" class="btn btn--default">Button</a>
            <button type="button" class="btn btn--default">Button</button>
        </p>

        <h5 class="primer-heading">Primary Button</h5>
        <p>
            <a href="#" class="btn btn--primary">Primary Button</a>
            <button type="button" class="btn btn--primary">Primary Button</button>
        </p>

        <h5 class="primer-heading">Disabled Button</h5>
        <p>
            <a href="#" class="btn btn--disabled">Disabled Button</a>
            <button type="button" class="btn btn--disabled" disabled>Disabled Button</button>
        </p>

        <h5 class="primer-heading">Text Button</h5>
        <p>
            <a href="#" class="btn--text">Text Button</a>
            <button type="button" class="btn--text">Text Button</button>
        </p>

        <h5 class="primer-heading">Button Sizing</h5>
        <p>
            <a href="#" class="btn btn--xs">Button XS</a>
            <button type="button" class="btn btn--xs">Button xs</button>
        </p>
        <p>
            <a href="#" class="btn btn--sm">Button SM</a>
            <button type="button" class="btn btn--sm">Button sm</button>
        </p>
        <p>
            <a href="#" class="btn btn--lg">Button lg</a>
            <button type="button" class="btn btn--lg">Button lg</button>
        </p>

        <h5 class="primer-heading">Block Buttons</h5>
        <p>
            <a href="#" class="btn btn--block">Button Block</a>
            <br>
            <button type="button" class="btn btn--block btn--primary">Button Block</button>
        </p>




        <h5 class="primer-heading">Forms > Checkboxes</h5>
        <fieldset class="options">
            <legend>Checkbox <abbr title="Required">*</abbr></legend>
            <ul class="form-list">
                <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked"> Choice A</label></li>
                <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice B</label></li>
                <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox"> Choice C</label></li>
            </ul>
        </fieldset>
    
    
        <h5 class="primer-heading">Forms > HTML5 Elements</h5>
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



        <h5 class="primer-heading">Forms > Radio Group</h5>
        <fieldset class="options">
            <legend>Radio</legend>
            <ul class="form-list">
                <li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked"> Option 1</label></li>
                <li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio"> Option 2</label></li>
                <li><label for="radio3"><input id="radio3" name="radio" type="radio" class="radio"> Option 3</label></li>
            </ul>
        </fieldset>


        <h5 class="primer-heading">Forms > Select Menu</h5>
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


        <h5 class="primer-heading">Forms > Example</h5>
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




        <h5 class="primer-heading">Forms > Input Groups</h5>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default btn--sm" type="button">Go!</button>
          </span>
        </div><!-- /input-group -->



        <h5 class="primer-heading">Inline Elements</h5>
        <p><a href="#">This is a text link</a></p>

        <p><strong>Strong is used to indicate strong importance</strong></p>

        <p><em>This text has added emphasis</em></p>

        <p>The <b>b element</b> is stylistically different text from normal text, without any special importance</p>

        <p>The <i>i element</i> is text that is set off from the normal text</p>

        <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation</p>

        <p><del>This text is deleted</del> and <ins>This text is inserted</ins></p>

        <p><s>This text has a strikethrough</s></p>

        <p>Superscript<sup>®</sup></p>

        <p>Subscript for things like H<sub>2</sub>O</p>

        <p><small>This small text is small for for fine print, etc.</small></p>

        <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>

        <p>Keybord input: <kbd>Cmd</kbd></p>

        <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation</q></p>

        <p><cite>This is a citation</cite>

        </p><p>The <dfn>dfn element</dfn> indicates a definition.</p>

        <p>The <mark>mark element</mark> indicates a highlight</p>

        <p><code>This is what inline code looks like.</code></p>

        <p><samp>This is sample output from a computer program</samp></p>

        <p>The <var>variarble element</var>, such as <var>x</var> = <var>y</var></p>




        <h5 class="primer-heading">
            Unordered List Example
        </h5>
        <ul>
            <li>Lorem ipsum dolor sit amet
            </li>
            <li>Consectetur adipiscing elit
            </li>
            <li>Integer molestie lorem at massa
            </li>
            <li>Facilisis in pretium nisl aliquet
            </li>
            <li>Nulla volutpat aliquam velit
                <ul>
                    <li>Phasellus iaculis neque
                    </li>
                    <li>Purus sodales ultricies
                    </li>
                    <li>Vestibulum laoreet porttitor sem
                    </li>
                    <li>Ac tristique libero volutpat at
                    </li>
                </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel
            </li>
            <li>Aenean sit amet erat nunc
            </li>
            <li>Eget porttitor lorem
            </li>
        </ul>
        <h5 class="primer-heading">
            Ordered List Example
        </h5>
        <ol>
            <li>Lorem ipsum dolor sit amet
            </li>
            <li>Consectetur adipiscing elit
            </li>
            <li>Integer molestie lorem at massa
            </li>
            <li>Facilisis in pretium nisl aliquet
            </li>
            <li>Nulla volutpat aliquam velit
                <ol>
                    <li>Phasellus iaculis neque
                    </li>
                    <li>Purus sodales ultricies
                    </li>
                    <li>Vestibulum laoreet porttitor sem
                    </li>
                    <li>Ac tristique libero volutpat at
                    </li>
                </ol>
            </li>
            <li>Faucibus porta lacus fringilla vel
            </li>
            <li>Aenean sit amet erat nunc
            </li>
            <li>Eget porttitor lorem
            </li>
        </ol>
        <h5 class="primer-heading">
            Definition List Example
        </h5>
        <dl>
            <dt>
                This is a term.
            </dt>
            <dd>
                This is the definition of that term, which both live in a <code>dl</code>.
            </dd>
            <dt>
                Here is another term.
            </dt>
            <dd>
                And it gets a definition too, which is this line.
            </dd>
            <dt>
                Here is term that shares a definition with the term below.
            </dt>
            <dt>
                Here is a defined term.
            </dt>
            <dd>
                <code>dt</code> terms may stand on their own without an accompanying <code>dd</code>, but in that case they <em>share</em> descriptions with the next available <code>dt</code>. You may not have a <code>dd</code> without a parent <code>dt</code>.
            </dd>
        </dl>

        <h5 class="primer-heading">Inline List</h5>
        <ul class="list-inline">
            <li>Phasellus iaculis neque
            </li>
            <li>Purus sodales ultricies
            </li>
            <li>Vestibulum laoreet porttitor sem
            </li>
            <li>Ac tristique libero volutpat at
            </li>
        </ul>

        <h5 class="primer-heading">Forced Ordered List</h5>
        <ul class="list-ordered">
            <li>Phasellus iaculis neque
            </li>
            <li>Purus sodales ultricies
            </li>
            <li>Vestibulum laoreet porttitor sem
            </li>
            <li>Ac tristique libero volutpat at
            </li>
        </ul>

        <h5 class="primer-heading">Forced Unordered List</h5>
        <ol class="list-unordered">
            <li>Phasellus iaculis neque
            </li>
            <li>Purus sodales ultricies
            </li>
            <li>Vestibulum laoreet porttitor sem
            </li>
            <li>Ac tristique libero volutpat at
            </li>
        </ol>

        <h5 class="primer-heading">Unstyled List</h5>
        <ul class="list-unstyled">
            <li>Phasellus iaculis neque
            </li>
            <li>Purus sodales ultricies
            </li>
            <li>Vestibulum laoreet porttitor sem
            </li>
            <li>Ac tristique libero volutpat at
            </li>
        </ul>



        <h5 class="primer-heading">Preformatted Text</h5>
        <pre>  	
        P R E F O R M A T T E D T E X T
        ! " # $ % &amp; ' ( ) * + , - . /
        0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
        @ A B C D E F G H I J K L M N O
        P Q R S T U V W X Y Z [ \ ] ^ _
        ` a b c d e f g h i j k l m n o
        p q r s t u v w x y z { | } ~ 
        </pre>




        <h5 class="primer-heading">Table Default</h5>
        <table>
        	<thead>
        		<tr>
        			<th>Table Heading 1</th>
        			<th>Table Heading 2</th>
        			<th>Table Heading 3</th>
        			<th>Table Heading 4</th>
        			<th>Table Heading 5</th>
        		</tr>
        	</thead>
        	<tfoot>
        		<tr>
        			<th>Table Footer 1</th>
        			<th>Table Footer 2</th>
        			<th>Table Footer 3</th>
        			<th>Table Footer 4</th>
        			<th>Table Footer 5</th>
        		</tr>
        	</tfoot>
        	<tbody>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
        	</tbody>
        </table>

        <h5 class="primer-heading">Table Condensed</h5>
        <table class="table--condensed">
        	<thead>
        		<tr>
        			<th>Table Heading 1</th>
        			<th>Table Heading 2</th>
        			<th>Table Heading 3</th>
        			<th>Table Heading 4</th>
        			<th>Table Heading 5</th>
        		</tr>
        	</thead>
        	<tfoot>
        		<tr>
        			<th>Table Footer 1</th>
        			<th>Table Footer 2</th>
        			<th>Table Footer 3</th>
        			<th>Table Footer 4</th>
        			<th>Table Footer 5</th>
        		</tr>
        	</tfoot>
        	<tbody>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
        	</tbody>
        </table>


        <h5 class="primer-heading">Table Striped</h5>
        <table class="table--striped">
        	<thead>
        		<tr>
        			<th>Table Heading 1</th>
        			<th>Table Heading 2</th>
        			<th>Table Heading 3</th>
        			<th>Table Heading 4</th>
        			<th>Table Heading 5</th>
        		</tr>
        	</thead>
        	<tfoot>
        		<tr>
        			<th>Table Footer 1</th>
        			<th>Table Footer 2</th>
        			<th>Table Footer 3</th>
        			<th>Table Footer 4</th>
        			<th>Table Footer 5</th>
        		</tr>
        	</tfoot>
        	<tbody>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
        	</tbody>
        </table>


        <h5 class="primer-heading">Table Bordered</h5>
        <table class="table--bordered">
        	<thead>
        		<tr>
        			<th>Table Heading 1</th>
        			<th>Table Heading 2</th>
        			<th>Table Heading 3</th>
        			<th>Table Heading 4</th>
        			<th>Table Heading 5</th>
        		</tr>
        	</thead>
        	<tfoot>
        		<tr>
        			<th>Table Footer 1</th>
        			<th>Table Footer 2</th>
        			<th>Table Footer 3</th>
        			<th>Table Footer 4</th>
        			<th>Table Footer 5</th>
        		</tr>
        	</tfoot>
        	<tbody>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
            	<tr>
            		<td>Table Cell 1</td>
            		<td>Table Cell 2</td>
            		<td>Table Cell 3</td>
            		<td>Table Cell 4</td>
            		<td>Table Cell 5</td>
            	</tr>
        	</tbody>
        </table>

        <h5 class="primer-heading">Table Responsive Scroll</h5>
        <div class="table--responsive">
            <table>
            	<thead>
            		<tr>
            			<th>Table Heading 1</th>
            			<th>Table Heading 2</th>
            			<th>Table Heading 3</th>
            			<th>Table Heading 4</th>
            			<th>Table Heading 5</th>
                        <th>Table Heading 6</th>
                        <th>Table Heading 7</th>
                        <th>Table Heading 8</th>
                        <th>Table Heading 9</th>
                        <th>Table Heading 10</th>
            		</tr>
            	</thead>
            	<tfoot>
            		<tr>
            			<td>Table Footer 1</td>
            			<td>Table Footer 2</td>
            			<td>Table Footer 3</td>
            			<td>Table Footer 4</td>
            			<td>Table Footer 5</td>
            			<td>Table Footer 6</td>
            			<td>Table Footer 7</td>
            			<td>Table Footer 8</td>
            			<td>Table Footer 9</td>
            			<td>Table Footer 10</td>
            		</tr>
            	</tfoot>
            	<tbody>
                	<tr>
                		<td>Table Cell 1</td>
                		<td>Table Cell 2</td>
                		<td>Table Cell 3</td>
                		<td>Table Cell 4</td>
                		<td>Table Cell 5</td>
                		<td>Table Cell 6</td>
                		<td>Table Cell 7</td>
                		<td>Table Cell 8</td>
                		<td>Table Cell 9</td>
                		<td>Table Cell 10</td>
                	</tr>
                	<tr>
                		<td>Table Cell 1</td>
                		<td>Table Cell 2</td>
                		<td>Table Cell 3</td>
                		<td>Table Cell 4</td>
                		<td>Table Cell 5</td>
                		<td>Table Cell 6</td>
                		<td>Table Cell 7</td>
                		<td>Table Cell 8</td>
                		<td>Table Cell 9</td>
                		<td>Table Cell 10</td>
                	</tr>
                	<tr>
                		<td>Table Cell 1</td>
                		<td>Table Cell 2</td>
                		<td>Table Cell 3</td>
                		<td>Table Cell 4</td>
                		<td>Table Cell 5</td>
                		<td>Table Cell 6</td>
                		<td>Table Cell 7</td>
                		<td>Table Cell 8</td>
                		<td>Table Cell 9</td>
                		<td>Table Cell 10</td>
                	</tr>
                	<tr>
                		<td>Table Cell 1</td>
                		<td>Table Cell 2</td>
                		<td>Table Cell 3</td>
                		<td>Table Cell 4</td>
                		<td>Table Cell 5</td>
                		<td>Table Cell 6</td>
                		<td>Table Cell 7</td>
                		<td>Table Cell 8</td>
                		<td>Table Cell 9</td>
                		<td>Table Cell 10</td>
                	</tr>
            	</tbody>
            </table>
        </div>



        <h5 class="primer-heading">Tags</h5>
        <span class="tag tag--default">Default</span>
        <span class="tag tag--primary">Primary</span>
        <span class="tag tag--success">Success</span>
        <span class="tag tag--info">Info</span>
        <span class="tag tag--warning">Warning</span>
        <span class="tag tag--danger">Danger</span>



        <h5 class="primer-heading">Timestamps</h5>
        <time datetime="2013-04-06T12:32+00:00">2 weeks ago</time>



        <h5 class="primer-heading">Icons</h5>
        <ul>
            <li>
                <i class="icon-search"></i>
                <span class="i-name">icon-search</span>
            </li>
            <li>
                <i class="icon-ok"></i>
                <span class="i-name">icon-ok</span>
            </li>
            <li>
                <i class="icon-cancel"></i>
                <span class="i-name">icon-cancel</span>
            </li>
            <li>
                <i class="icon-plus"></i>
                <span class="i-name">icon-plus</span>
            </li>
            <li>
                <i class="icon-minus"></i>
                <span class="i-name">icon-minus</span>
            </li>
            <li>
                <i class="icon-user"></i>
                <span class="i-name">icon-user</span>
            </li>
            <li>
                <i class="icon-basket"></i>
                <span class="i-name">icon-basket</span>
            </li>
            <li>
                <i class="icon-down-dir"></i>
                <span class="i-name">icon-down-dir</span>
            </li>
            <li>
                <i class="icon-up-dir"></i>
                <span class="i-name">icon-up-dir</span>
            </li>
            <li>
                <i class="icon-left-dir"></i>
                <span class="i-name">icon-left-dir</span>
            </li>
            <li>
                <i class="icon-right-dir"></i>
                <span class="i-name">icon-right-dir</span>
            </li>
            <li>
                <i class="icon-down-dir"></i>
                <span class="i-name">icon-down-dir</span>
            </li>
            <li>
                <i class="icon-menu"></i>
                <span class="i-name">icon-menu</span>
            </li>
            <li>
                <i class="icon-cog"></i>
                <span class="i-name">icon-cog</span>
            </li>
            <li>
                <i class="icon-info"></i>
                <span class="i-name">icon-info</span>
            </li>
            <li>
                <i class="icon-home"></i>
                <span class="i-name">icon-home</span>
            </li>
            <li>
                <i class="icon-phone"></i>
                <span class="i-name">icon-phone</span>
            </li>
            <li>
                <i class="icon-mail"></i>
                <span class="i-name">icon-mail</span>
            </li>
            <li>
                <i class="icon-circle-empty"></i>
                <span class="i-name">icon-circle-empty</span>
            </li>
            <li>
                <i class="icon-dot-circled"></i>
                <span class="i-name">icon-dot-circled</span>
            </li>
            <li>
                <i class="icon-list-bullet"></i>
                <span class="i-name">icon-list-bullet</span>
            </li>
            <li>
                <i class="icon-mail"></i>
                <span class="i-name">icon-angle-down</span>
            </li>
            <li>
                <i class="icon-mail"></i>
                <span class="i-name">icon-angle-up</span>
            </li>
            <li>
                <i class="icon-mail"></i>
                <span class="i-name">icon-angle-left</span>
            </li>
            <li>
                <i class="icon-mail"></i>
                <span class="i-name">icon-angle-right</span>
            </li>
            <li>
                <i class="icon-th-list"></i>
                <span class="i-name">icon-th-list</span>
            </li>
            <li>
                <i class="icon-th"></i>
                <span class="i-name">icon-th</span>
            </li>
            <li>
                <i class="icon-file-pdf"></i>
                <span class="i-name">icon-file-pdf</span>
            </li>
        </ul>


        <h5 class="primer-heading">Social Icons</h5>
        <ul>
            <li>
                <i class="icon-linkedin"></i>
                <span class="i-name">icon-linkedin</span>
            </li>
            <li>
                <i class="icon-vimeo"></i>
                <span class="i-name">icon-vimeo</span>
            </li>
            <li>
                <i class="icon-twitter"></i>
                <span class="i-name">icon-twitter</span>
            </li>
            <li>
                <i class="icon-facebook"></i>
                <span class="i-name">icon-facebook</span>
            </li>
            <li>
                <i class="icon-googleplus"></i>
                <span class="i-name">icon-googleplus</span>
            </li>
            <li>
                <i class="icon-instagram"></i>
                <span class="i-name">icon-instagram</span>
            </li>
            <li>
                <i class="icon-youtube"></i>
                <span class="i-name">icon-youtube</span>
            </li>
            <li>
                <i class="icon-pinterest"></i>
                <span class="i-name">icon-pinterest</span>
            </li>
        </ul>
        
    </div>

</body>

</html>