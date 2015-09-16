<div class="container">
    
<h2>Global folder structure</h2>

### Source

### Build (temporary folder)

### Node Modules (temporary folder)

### Bower Components (temporary folder)


<h2>Sass folder structure</h2>

### Helpers

The helper folder contains mixins only. None of the Sass contained in this folder creates CSS, it's there to help you create CSS. An example of helpers include grids, triangles, breakpoint.

#### Usage
{% highlight html %}
<p>para</p>
{% end highlight html %}

{% highlight html %}
<p>para</p>
{% end highlight html %}

{% highlight html %}
<p>para</p>
{% end highlight html %}


{% highlight css %}
.top-links {
    @include list-inline;
}
{% end highlight css %}


### Utilities

Utilities are a collection of classes or Sass extends that can be used to achieve single tasks. Examples of utilities include visibility, alignments and clearfix classes.

### Atoms

Atoms are basic tags, such as form labels, inputs or buttons. They also include more abstract elements like color palettes, fonts, and animations.

Atoms are abstract and aren't often terribly useful on their own, but they provide a useful reference and allow you to see all your global styles laid out at a glance.

### Molecules

Molecules are groups of elements that function together as a unit. For example, a form label, search input, and button atom can combine them together to form a search form molecule.

Building up from atoms to molecules encourages a "do one thing and do it well" mentality, and encourages creating reusable interface patterns.

### Organisms

Organisms can consist of similar and/or disparate molecule types. For example, a masthead organism might consist of a logo, navigation, and search form, while a "product grid" organism might consist of the same product info molecule repeated over and over.

Building up from molecules to organisms encourages creating standalone, portable, reusable components.

### Templates

</div>