<div class="well">
    <div class="u-container">

<?php
$contents = file_get_contents('../src/scss/_var.scss', true);
$lines = explode("\n", $contents);
$hasHeading = false;
foreach($lines as $line) {

    if(substr($line, 0, 2) == '//') {
        if(strpos($line, '=====') === false) {
            if($hasHeading === true) {
                echo '</div>';
            }
            echo '<p class=cc-heading>' . substr($line, 3)  . '</p><div class="cc-vars">';
            $hasHeading = true;
        }

        continue;
    }
    echo '<span class="cc-line">';
    if($pos = strpos($line, '#')) {
        $colour = substr($line, $pos);
        echo '<div class="cc-disc-swatch" style="background-color: ' . $colour . '"></div>';
    }
    echo $line;

    echo '</span>';
}
?>
</div> <!-- close the last cc-vars div -->


</div>
</div>
