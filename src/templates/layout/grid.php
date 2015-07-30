<p>Grids equally divide their direct descendants. An example would be product listing of items. They should not be used for page layouts.</p>
<p>There are classes available to apply to any element which follow the pattern <strong>.g-num-up</strong>. These work from two up to six columns.</p>
<p>Custom grids can be made using mixin functions. Apply <strong>@mixin grid</strong> to the wrapper. Then <strong>@mixin grid-up($cols: 1, $gutter: false)</strong> to the wrapper. Gutters are optional and by default are set to false. <strong>grid-up</strong> can then be applied inside media queries to change both columns and gutters.</p>

<h2>Grid Two Up</h2>
<div class="g-two-up primer-grid">
    <div>1</div>
    <div>2</div>
</div>

<h2>Grid Three Up</h2>
<div class="g-three-up primer-grid">
    <div>1</div>
    <div>2</div>
    <div>3</div>
</div>

<h2>Grid Four Up</h2>
<div class="g-four-up primer-grid">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
</div>

<h2>Grid Five Up</h2>
<div class="g-five-up primer-grid">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
</div>

<h2>Grid Size Up</h2>
<div class="g-six-up primer-grid">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>
</div>

<h2>Grid Two Up with Gutter</h2>
<div class="g-two-up g-gutter primer-grid">
    <div>1</div>
    <div>2</div>
</div>

<h2>Grid Three Up with Gutter</h2>
<div class="g-three-up g-gutter primer-grid">
    <div>1</div>
    <div>2</div>
    <div>3</div>
</div>

<h2>Grid Four Up with Gutter</h2>
<div class="g-four-up g-gutter primer-grid">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
</div>

<h2>Grid Five Up with Gutter</h2>
<div class="g-five-up g-gutter primer-grid">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
</div>

<h2>Grid Six Up with Gutter</h2>
<div class="g-six-up g-gutter primer-grid">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>
</div>
