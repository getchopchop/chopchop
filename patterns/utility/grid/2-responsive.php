<?php /*
Title: Responsive Grid
Class: .grid
*/ ?>

<div class="grid g-gutter">
    <div class="g-col-xs-6 g-col-md-4 g-col-lg-2 g-col-xl-3"><div class="u-block u-fill-grey-lighter"><code><span class="u-visible-xs-inline u-visible-sm-inline">.g-col-xs-6</span><span class="u-visible-md-inline">.g-col-md-4</span><span class="u-visible-lg-inline">.g-col-lg-2</span><span class="u-visible-xl-inline">.g-col-xl-3</span></code></div></div>
    <div class="g-col-xs-6 g-col-sm-2 g-col-md-3 g-col-lg-4 g-col-xl-3"><div class="u-block u-fill-grey-lighter"><code><span class="u-visible-xs-inline">.g-col-xs-6</span><span class="u-visible-sm-inline">.g-col-sm-2</span><span class="u-visible-md-inline">.g-col-md-3</span><span class="u-visible-lg-inline">.g-col-lg-4</span><span class="u-visible-xl-inline">.g-col-xl-3</span></code></div></div>
    <div class="g-col-xs-6 g-col-sm-2 g-col-md-3 g-col-lg-4 g-col-xl-3"><div class="u-block u-fill-grey-lighter"><code><span class="u-visible-xs-inline">.g-col-xs-6</span><span class="u-visible-sm-inline">.g-col-sm-2</span><span class="u-visible-md-inline">.g-col-md-3</span><span class="u-visible-lg-inline">.g-col-lg-4</span><span class="u-visible-xl-inline">.g-col-xl-3</span></code></div></div>
    <div class="g-col-xs-6 g-col-sm-2 g-col-md-2 g-col-lg-2 g-col-xl-3"><div class="u-block u-fill-grey-lighter"><code><span class="u-visible-xs-inline">.g-col-xs-6</span><span class="u-visible-sm-inline">.g-col-sm-2</span><span class="u-visible-md-inline">.g-col-md-2</span><span class="u-visible-lg-inline">.g-col-lg-2</span><span class="u-visible-xl-inline">.g-col-xl-3</span></code></div></div>
</div>

<h3>Classes available</h3>
<div class="grid g-gutter">
    <div class="g-col-sm-6 g-col-md-3 g-col-xl-2">
        <ul class="u-list-unstyled">
            <?php for($i=1;$i<13;$i++): ?>
                <li><code>.g-col-xs-<?php echo $i; ?></code></li>
            <?php endfor; ?>
        </ul>
    </div>
    <div class="g-col-sm-6 g-col-md-3 g-col-xl-2">
        <ul class="u-list-unstyled">
            <?php for($i=1;$i<13;$i++): ?>
                <li><code>.g-col-sm-<?php echo $i; ?></code></li>
            <?php endfor; ?>
        </ul>
    </div>
    <div class="g-col-sm-6 g-col-md-3 g-col-xl-2">
        <ul class="u-list-unstyled">
            <?php for($i=1;$i<13;$i++): ?>
                <li><code>.g-col-md-<?php echo $i; ?></code></li>
            <?php endfor; ?>
        </ul>
    </div>
    <div class="g-col-sm-6 g-col-md-3 g-col-xl-2">
        <ul class="u-list-unstyled">
            <?php for($i=1;$i<13;$i++): ?>
                <li><code>.g-col-lg-<?php echo $i; ?></code></li>
            <?php endfor; ?>
        </ul>
    </div>
    <div class="g-col-sm-6 g-col-md-3 g-col-xl-2">
        <ul class="u-list-unstyled">
            <?php for($i=1;$i<13;$i++): ?>
                <li><code>.g-col-xl-<?php echo $i; ?></code></li>
            <?php endfor; ?>
        </ul>
    </div>
</div>
