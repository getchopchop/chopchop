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
    <div data-cc-collapsible-mode="collapse-all" class="cc-accordion js-cc-collapsible">
        <?php foreach($categories as $topLevelCategory => $categoryChildren){
            foreach($categoryChildren as $category) { ?>
                <div class="cc-accordion__header">
                    <a href="<?php echo getUrl('/'.$topLevelCategory.'/' .$category) ?>/"><?php echo ucwords($category) ?></a>
                </div>
                <div class="cc-accordion__body">
                    <ol>
                        <?php $subCategories = Navigation::getSubCategories($category); ?>
                        <?php foreach($subCategories as $subCategory) {
                            $subCategoryLink = '#section-' . $subCategory;
                            ?>
                            <li class="level1">
                                <a href="<?php echo getUrl('/'.$topLevelCategory.'/' . $category . '/' . $subCategoryLink )?>">
                                    <?php echo str_replace('-', ' ', ucwords($subCategory)) ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ol>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</nav>
