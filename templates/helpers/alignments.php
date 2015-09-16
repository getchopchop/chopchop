<div class="container">
    
    
    <div class="l-two-col-right">
        <div class="l-body">
            <p>Alignments are a utility, they use the <code>u-</code> prefix to denote this.</p>
            <p>Be careful using these as they use an <code>!important</code> in the CSS to purposefully override any other layout inflection.</p>
            <p>Anything after the use of these utilities in the HTML will need to be cleared manually.</p>
        </div>
        <div class="l-side">
            <p>You should NOT be using these classes for layout purposes, instead use our <a href="/grid/grid">grid classes</a>.</p>
        </div>
    </div>
    
    
</div>

<div class="container">
    
    <h3>Alignments</h3>
    
    <div class="u-text-left">
        <p>Look I am aligned LEFT</p>
    </div>
    <div class="u-text-right">
        <p>Look I am aligned RIGHT</p>
    </div>
    <div class="u-text-center">
        <p>Look I am aligned CENTER</p>
    </div>
    <div class="u-pull-left">
        <p>Look I am pulled LEFT</p>
    </div>
    <div class="u-pull-right">
        <p>Look I am pulled RIGHT</p>
    </div>
    
    <br style="clear: both;">
    
    {% highlight code %}
<div class="u-text-left">
    <p>Look I am aligned LEFT</p>
</div>
<div class="u-text-right">
    <p>Look I am aligned RIGHT</p>
</div>
<div class="u-text-center">
    <p>Look I am aligned CENTER</p>
</div>
<div class="u-pull-left">
    <p>Look I am pulled LEFT</p>
</div>
<div class="u-pull-right">
    <p>Look I am pulled RIGHT</p>
</div>
    {% end highlight code %}
    
</div>