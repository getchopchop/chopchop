<div class="well">
    <div class="container">
        
        <p>This pattern doesn't neccessarily need to be a search form, here we are just showing an example of the <a href="/atoms/forms#inline-form">inline form</a> pattern in use as a search form.</p>
    
        <form action="#" method="post" class="form-inline form-search">
            <label class="u-visibility-hidden">Search the site</label>     
            <input type="search" placeholder="Search the site" class="form-inline__query" />
            <input type="submit" class="btn search-submit" value="Search">
        </form>
    
{% highlight html %}
<form action="#" method="post" class="form-inline form-search">
    <label class="u-visibility-hidden">Search the site</label>     
    <input type="search" placeholder="Search the site" class="form-inline__query" />
    <input type="submit" class="btn search-submit" value="Search">
</form>
{% end highlight html %}
        
    </div>

</div>