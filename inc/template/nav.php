<?php
    $categories = array(
        'pattern' => array(
            'branding',
            'base',
            'component',
            'helper',
            'utility',
            'template'
        )
    );
?>
<nav>
    <ol>
        <?php foreach($categories as $topLevelCategory => $categoryChildren){
            foreach($categoryChildren as $category) { ?>
                <li>
                    <a href="<?php echo getUrl('/'.$topLevelCategory.'/' .$category) ?>/"><?php echo ucwords($category) ?></a>
                    <ol>
                        <?php $subCategories = Navigation::getSubCategories($category); ?>
                        <?php foreach($subCategories as $subCategory) {
                            $subCategoryLink = ( $category == 'template' ? '' : '#section-');
                            $subCategoryLink .= $subCategory;
                            ?>
                            <li class="level1">
                                <a href="<?php echo getUrl('/'.$topLevelCategory.'/' . $category . '/' . $subCategoryLink )?>">
                                    <?php echo str_replace('-', ' ', ucwords($subCategory)) ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ol>
                </li>
            <?php } ?>
        <?php } ?>
    </ol>
</nav>