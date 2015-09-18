<div class="well">
    <div class="container">
        <h2>Drawers</h2>
        <p>Drawers are special molecules that need thier own page to demonstrate how they work.</p>
        <p><a href="/drawers.php" class="btn" target="_blank">View Demo</a></p>
        <p>Drawers are particularly useful for mobile devices where the screen sizes dont allow for a lot of content to be displayed on the screen at one time.</p>

        <h3>Required Data Attributes</h3>
        <p class="lead">Drawers are hidden by default and need a toggle in order to show them on screen.</p>
        <p>A drawer toggle needs a <code>data-toggle="drawer"</code> attribute and a <code>data-target</code> attribute, the value of which must match the id of the drawer.</p>
        
        <h3>Optional Data Attributes.</h3>
        <p>There are also some data attributes that aren't required to make the drawers function. Adding a <code>data-content</code> attribute will show blocks within the given drawer providing the value matches a given class.</p>
        <p>Adding a <code>data-title</code> attribute will make any other element with the class of title--drawer change to the given value, <a href="/drawers.php" target="_blank">see demo</a>.</p>

{% highlight code %}
<a href="#" class="btn" data-toggle="drawer" data-target="left" data-content="lc1" data-title="Look the title changes: left content block 1">Left Content Block 1</a>
{% end highlight code %}

        <h2>Drawer Code Example</h2>
{% highlight code %}
<aside role="drawer" id="drawer-left" class="drawer drawer--left">
  <div class="drawer__dialog">
    <div class="drawer__body">
      <div class="drawer__content">
        <div class="lc1 toggleable">Left Content 1</div>
        <div class="lc2 toggleable">Left Content 2</div>
      </div><!--/drawer__content-->
    </div><!--/drawer__body-->
  </div>
</aside><!--/drawer--left-->
{% end highlight code %}
        
    </div>
</div>