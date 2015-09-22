<div class="well">
    <div class="container container--sm">
        <p class="lead">Grid mixins are a collection of functions to allow you to create custom grids or layouts.</p>
        <p>These mixins are used to create the ultility <a href="layout/grid">grid</a> and <a href="layout/layout">layout</a> classes. Please check these before creating a custom grid.</p>
    </div>
</div>

<div class="well">
    <div class="container container--sm">
        <h2>Grid</h2>
        <p>The grid mixin is used to initiate a grid. <strong>You must use <code>@include grid;</code> to create a grid or layout</strong>. This should be added to the grid container.</p>
        <p>Here is a code example:</p>
    </div>
    <div class="container">
        <div class="g-two-up g-gutter">
            <div>
                <h3>SASS Example</h3>
{% highlight scss %}
.my-layout {
    @include grid;
}
{% end highlight scss %}
            </div>
            <div>
                <h3>CSS output</h3>
{% highlight css %}
.my-layout {
    display: flex;
    flex-wrap: wrap;
}
{% end highlight css %}
            </div>
        </div>
    </div>
</div>

<div class="well">
    <div class="container container--sm">
        <h2>Grid Up</h2>
        <p>Adding this to the grid container will equally divide all direct descendants. You can pass through any numeric whole number, such as <code>@include grid-up(3);</code> or <code>@include grid-up(4);</code>.</p>
        <p>Here is a code example:</p>
    </div>
    <div class="container">
        <div class="g-two-up g-gutter">
            <div>
                <h3>SASS Example</h3>
{% highlight scss %}
.my-layout {
    @include grid;
    @include grid-up(4);
}
{% end highlight scss %}
            </div>
            <div>
                <h3>CSS output</h3>
{% highlight css %}
.my-layout {
    display: flex;
    flex-wrap: wrap;
}
.my-layout > * {
    width: 25%;
}
{% end highlight css %}
            </div>
        </div>
    </div>
</div>

<div class="well">
    <div class="container container--sm">
        <h2>Grid Gutter</h2>
        <p>Gutters can be added to the grid container using <code>@include grid-gutter;</code>. By default it will use the global gutter variable set in the vars file. If you wish for it to be different you can pass through a pixel, em, rem or percentage value by using <code>@include grid-gutter(20px);</code> or <code>@include grid-gutter(5em);</code>.</p>
        <p>Here is a code example:</p>
    </div>
    <div class="container">
        <div class="g-two-up g-gutter">
            <div>
                <h3>SASS Example</h3>
{% highlight scss %}
.my-layout {
    @include grid;
    @include grid-gutter;
}
{% end highlight scss %}
            </div>
            <div>
                <h3>CSS output</h3>
{% highlight css %}
.my-layout {
    display: flex;
    flex-wrap: wrap;
    margin-left: -2.5%;
    margin-right: -2.5%;
}
.my-layout > * {
    padding-left: 2.5%;
    padding-right: 2.5%;
}
{% end highlight css %}
            </div>
        </div>
    </div>
</div>

<div class="well">
    <div class="container container--sm">
        <h2>Grid Col</h2>
        <p>Grid columns adds a specific width to a direct descendant of the grid container. Unlike the other examples, this should be applied to a child element using <code>@include grid-col(25%);</code>. If you're using this, it is likely you'll need to apply <code>@include grid-col();</code> to every direct descendant of the grid.</p>
        <p>Here is a code example:</p>
    </div>
    <div class="container">
        <div class="g-two-up g-gutter">
            <div>
                <h3>SASS Example</h3>
{% highlight scss %}
.my-layout {
    @include grid;
}
.my-layout__side {
    @include grid-col(25%);
}
.my-layout__body {
    @include grid-col(75%);
}
{% end highlight scss %}
            </div>
            <div>
                <h3>CSS output</h3>
{% highlight css %}
.my-layout {
    display: flex;
    flex-wrap: wrap;
}
.my-layout__side {
    width: 25%;
}
.my-layout__body {
    width: 75%;
}
{% end highlight css %}
            </div>
        </div>
    </div>
</div>

<div class="well">
    <div class="container container--sm">
        <h2>Grid center</h2>
        <p>By default grids will left align. This is important for grids where items are equally distributed, such as a product listing. If there is an odd number of items you want the remainder to sit on the left. If you wish to centre them instead you can use <code>@include grid-center();</code>.</p>
        <p>Here is a code example:</p>
    </div>
    <div class="container">
        <div class="g-two-up g-gutter">
            <div>
                <h3>SASS Example</h3>
{% highlight scss %}
.my-layout {
    @include grid;
    @include grid-center;
}
{% end highlight scss %}
            </div>
            <div>
                <h3>CSS output</h3>
{% highlight css %}
.my-layout {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
{% end highlight css %}
            </div>
        </div>
    </div>
</div>

<div class="well">
    <div class="container container--sm">
        <h2>Grid reserve</h2>
        <p>If you wish to reserve a grid layout you can use <code>@include grid-reserve</code>. This could be useful for quickly flipping layouts around.</p>
        <p>Here is a code example:</p>
    </div>
    <div class="container">
        <div class="g-two-up g-gutter">
            <div>
                <h3>SASS Example</h3>
{% highlight scss %}
.my-layout {
    @include grid;
    @include grid-reserve;
}
{% end highlight scss %}
            </div>
            <div>
                <h3>CSS output</h3>
{% highlight css %}
.my-layout {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row-reverse;
}
{% end highlight css %}
            </div>
        </div>
    </div>
</div>

<div class="well">
    <div class="container container--sm">
        <h2>Grid with media queries</h2>
        <p>The advantage of using mixins is you can include them inside any media query. This means we can completely customise how a grid appears at each breakpoint.</p>
        <p>Here is a code example:</p>
    </div>
    <div class="container">
        <div class="g-two-up g-gutter">
            <div>
                <h3>SASS Example</h3>
{% highlight scss %}
.my-layout {
    @include grid;
    @include grid-gutter(5%);
    @include grid-up(2);

    @include breakpoint($screen-sm) {
        @include grid-up(4);
    }

    @include breakpoint($screen-md) {
        @include grid-gutter(8%);
        @include grid-up(5);
    }
}
{% end highlight scss %}
            </div>
            <div>
                <h3>CSS output</h3>
{% highlight css %}
.my-layout {
    display: flex;
    flex-wrap: wrap;
    margin-left: -2.5%;
    margin-right: -2.5%;
}
.my-layout > * {
    padding-left: 2.5%;
    padding-right: 2.5%;
    width: 50%;
}
@media(min-width: 35em) {
    .my-layout > * {
        width: 25%;
    }
}
@media(min-width: 52em) {
    .my-layout {
        margin-left: -4%;
        margin-right: -4%;
    }
    .my-layout > * {
        padding-left: 4%;
        padding-right: 4%;
        width: 20%;
    }
}
{% end highlight css %}
            </div>
        </div>
    </div>
</div>
