<?php /*
Title: Fill
Container: true
*/ ?>
<?php
    $scss_contents = file_get_contents('../src/scss/_var.scss', true);
    $lines = explode("\n", $scss_contents);
    $hasHeading = false;
    foreach($lines as $line) {

        if(substr(trim($line), 0, 2) == '//') {
            if(strpos($line, '=====') === false) {
                if($hasHeading === true) {
                    echo '</div>';
                }
                if(strpos($line, "Colo") !== false) {
                echo '<h3>' . substr($line, 3)  . '</h3><div class="g-five-up g-gutter">';
                $hasHeading = true;
                }
            }

            continue;
        }
        if($pos = strpos($line, '#')) {
            $colour = substr($line, $pos);
            ?>
            <div>
                <div class="card cc-card--swatch">
                    <?php $bits = explode(' ', $line); $a = $bits[0]; ?>
                    <div class="card__body u-fill-<?php echo str_replace('$', '', $a); ?>">

                    </div>
                    <div class="card__footer">
                        <small><code>.u-fill-<?php echo str_replace('$', '', $a); ?></code></small>
                    </div>
                </div>
            </div>
            <?php
        }

    }
?>
