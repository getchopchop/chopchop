<div class="container">
    
    <p>This pattern is an accordion on mobile and changes to tabs at <code>$screen-md</code>.</p>
    
    <div class="tabs">
    	<ul class="tabs__toggle">
    		<li class="tabs__toggle__item"><a href="#tab-1" class="tabs__tab tabs__tab__title">Tab_1</a></li><li class="tabs__toggle__item"><a href="#tab-2" class="tabs__tab tabs__tab__title">Tab_2</a></li>
    	</ul>
    	<dl class="tabs__content-wrapper">
    		<dt class="tabs__toggle__item">
    			<a href="#tab-1" class="tabs__tab">Tab_1</a>
    		</dt>
    		<dd id="tab-1" class="tabs__content">
    			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    		</dd>
    		<dt class="tabs__toggle__item">
    			<a href="#tab-2" class="tabs__tab">Tab_2</a>
    		</dt>
    		<dd id="tab-2" class="tabs__content">
    			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    		</dd>
    	</dl>
    </div>

    <h4>Modifiers</h4>
    <p>Add <code>tabs--forced</code> to force tabs on all screen sizes.</p>
    <p>Add <code>accordion--forced</code> to force accordion on all screen sizes.</p>


</div>