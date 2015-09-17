<div class="well">
    <div class="container">
    
    
        <div class="l-two-col-right">
            <div class="l-body">
                <p>Alignments are a utility, they use the <code>u-</code> prefix to denote this.</p>
                <p>Be careful using these as they use an <code>!important</code> in the CSS to purposefully override any other layout inflection.</p>
                <p>Anything after the use of these utilities in the HTML will need to be cleared manually.</p>
            </div>
            <div class="l-side">
                
                <div class="card">
                    <div class="card__header">
                        Attention!
                    </div>
                    <div class="card__body">
                        <p>You should NOT be using these classes for layout purposes, instead use our <a href="/grid/grid">grid classes</a>.</p>
                    </div>
                </div>
                
            </div>
        </div>
    
    </div>
    
</div>

<div class="well">
    <div class="container">
    
        <h3 class="block-toggle">Text Alignments</h3>
    
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
    
        {% highlight html %}
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
        {% end highlight html %}
    
    </div>
</div>


<div class="well">
    <div class="container">
    
        <h3 class="block-toggle">Float Alignments</h3>
        
        <div class="u-pull-left">
            <p>Look I am floated LEFT</p>
        </div>
        <div class="u-pull-right">
            <p>Look I am floated RIGHT</p>
        </div>
        
        <br style="clear: both;">
        
        {% highlight html %}
<div class="u-pull-left">
    <p>Look I am floated LEFT</p>
</div>
<div class="u-pull-right">
    <p>Look I am floated RIGHT</p>
</div>
        {% end highlight html %}
        
    </div>
</div>