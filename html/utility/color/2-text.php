<?php /*
Title: Text
Container: true
*/ ?>
<div class="grid g-gutter">
<?php
    $css_contents = file_get_contents('../build/css/styles.css', true);
    $lines = explode("\n", $css_contents);
    $hasHeading = false;
    $previous_group = "x";
    foreach($lines as $line) {

        if(substr(trim($line), 0, 7) == '.u-text') {
            $bits = explode(" ", substr($line, 1));
            $class_ = $bits[0];
            $bits = explode("-", $class_);
            $group = $bits[2];
            ?>
            <?php if($group != $previous_group) {
                ?><h1><?php echo $group ?></h1><?php
                $previous_group = $group;
            }
            ?>
            <div class="g-col-xs-6 g-col-sm-4 g-col-md-3 g-col-xl-2">
                <div class="card cc-card--swatch">
                    <div class="card__body u-fill-grey-lighter">
                        <h3 class="<?php echo $class_ ?>">Hello World</h3>

                    </div>
                    <div class="card__footer">
                        <small><code>.<?php echo $class_ ?></code></small>
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>
</div>
