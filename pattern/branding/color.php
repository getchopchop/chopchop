<?php /*
Title: Colour
Code: false
*/ ?>
<div class="grid g-gutter">
<?php
    $path = realpath(dirname(__FILE__) . '/../../build/css/styles.css');

    $css_contents = file_get_contents($path, true);
    $lines = explode("\n", $css_contents);
    $hasHeading = false;
    $previous_group = 'x';
    foreach($lines as $line) {

        if(substr(trim($line), 0, 7) == '.u-fill') {
            $bits = explode(" ", substr($line, 1));
            $class_ = str_replace(',','', $bits[0]);
            $bits = explode("-", $class_);
            $group = $bits[2];
            ?>
            <?php if($group != $previous_group) { ?>
                <div class="g-col-xs-12">
                    <h3><?php echo $group ?></h3>
                </div>
            <?php
                $previous_group = $group;
            }
            ?>
            <div class="g-col-xs-6 g-col-sm-4 g-col-lg-3">
                <div class="card">
                    <div class="u-block-xl <?php echo $class_ ?>">
                    </div>
                    <div class="card__footer">
                        <small><?php echo str_replace('-', ' ', str_replace('u-fill-', '', $class_)); ?></small>
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>
</div> <!-- close the last cc-vars div -->
