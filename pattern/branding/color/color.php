<?php /*
Title: Colour
Code: false
*/ ?>

<div class="grid g-gutter">
<?php
    $path = realpath(dirname(__FILE__) . '/../../../build/css/styles.css');

    $css_contents = file_get_contents($path, true);
    $lines = explode("\n", $css_contents);
    $hasHeading = false;
    $previous_group = 'x';

    $matches = array();
    preg_match_all('/\.u-fill-.*\n.*(#[0-9a-fA-F]+)/', $css_contents, $matches);

    $cnt = 0;

    foreach($lines as $line) {

        if(substr(trim($line), 0, 7) == '.u-fill') {
            $bits = explode(" ", substr($line, 1));
            $class_ = str_replace(',','', $bits[0]);
            $bits = explode("-", $class_);
            $group = $bits[2];
            ?>
            <?php if($group != $previous_group && $group != 'white' && $group != 'black' && $group != 'error' && $group != 'warning') { ?>
                <div class="g-col-xs-12">
                    <?php if($group == 'success') : ?>
                        <h3>contextual</h3>
                    <?php else : ?>
                        <h3><?php echo $group ?></h3>
                    <?php endif; ?>
                </div>
            <?php
                $previous_group = $group;
            }
            ?>
            <div class="g-col-xs-6 g-col-sm-4 g-col-lg-3 g-col-xl-2">
                <div class="u-block-xl <?php echo $class_ ?>">
                </div>
                <div class="micro">
                    <?php echo str_replace('-', ' ', str_replace('u-fill-', '', $class_)); ?><br /><?php echo $matches[1][$cnt]; ?>
                </div>
            </div>
            <?php
            $cnt++;
        }

    }
?>
</div> <!-- close the last cc-vars div -->
