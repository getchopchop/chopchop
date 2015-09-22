<div class="well">
    <div class="container container--narrow">
        <p class="lead">Grids are a collection of classes to allow you to equally divide up a layout. This is useful for product listings or blog listings.</p>
        <p>To initiate a grid layout you need to wrap a div around the items and add the class <code>g-two-up</code> or <code>g-three-up</code> up to six. You can add a gutter using the class <code>g-gutter</code>. The gutters can be changed globally in the variables files.</p>
        <p>Here is a code example of it in use:</p>

{% highlight html %}
<div class="g-three-up">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
    <div>Item 4</div>
    <div>Item 5</div>
    <div>Item 6</div>
</div>
{% end highlight html %}

        <p>If you wish to have more control, you can make your own layouts and grids using the <a href="/mixins/grid">grids mixins</a>.</p>
    </div>
</div>

<div class="well">
    <div class="container">

        <h2>Grid Two Up</h2>
        <div class="g-two-up">
            <div><span>1</span></div>
            <div><span>2</span></div>
        </div>

        <h2>Grid Three Up</h2>
        <div class="g-three-up">
            <div><span>1</span></div>
            <div><span>2</span></div>
            <div><span>3</span></div>
        </div>

        <h2>Grid Four Up</h2>
        <div class="g-four-up">
            <div><span>1</span></div>
            <div><span>2</span></div>
            <div><span>3</span></div>
            <div><span>4</span></div>
        </div>

        <h2>Grid Five Up</h2>
        <div class="g-five-up">
            <div><span>1</span></div>
            <div><span>2</span></div>
            <div><span>3</span></div>
            <div><span>4</span></div>
            <div><span>5</span></div>
        </div>

        <h2>Grid Six Up</h2>
        <div class="g-six-up">
            <div><span>1</span></div>
            <div><span>2</span></div>
            <div><span>3</span></div>
            <div><span>4</span></div>
            <div><span>5</span></div>
            <div><span>6</span></div>
        </div>

        <h2>Grid Two Up with Gutter</h2>
        <div class="g-two-up g-gutter">
            <div><span>1</span></div>
            <div><span>2</span></div>
        </div>

        <h2>Grid Three Up with Gutter</h2>
        <div class="g-three-up g-gutter">
            <div><span>1</span></div>
            <div><span>2</span></div>
            <div><span>3</span></div>
        </div>

        <h2>Grid Four Up with Gutter</h2>
        <div class="g-four-up g-gutter">
            <div><span>1</span></div>
            <div><span>2</span></div>
            <div><span>3</span></div>
            <div><span>4</span></div>
        </div>

        <h2>Grid Five Up with Gutter</h2>
        <div class="g-five-up g-gutter">
            <div><span>1</span></div>
            <div><span>2</span></div>
            <div><span>3</span></div>
            <div><span>4</span></div>
            <div><span>5</span></div>
        </div>

        <h2>Grid Six Up with Gutter</h2>
        <div class="g-six-up g-gutter">
            <div><span>1</span></div>
            <div><span>2</span></div>
            <div><span>3</span></div>
            <div><span>4</span></div>
            <div><span>5</span></div>
            <div><span>6</span></div>
        </div>

    </div>
</div>
