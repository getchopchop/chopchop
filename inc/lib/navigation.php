<?php

class Navigation
{
    static function getSubCategories($parent)
    {
        $subCategories = array();

        $childrenDir = dir(dirname(dirname(__DIR__)) . '/pattern/' . $parent);

        while (false !== ($child = $childrenDir->read())) {
            if (substr($child, -4) != '.php'
                    && substr($child, 0, 1) != '.') {
                $subCategories[] =  $child;
            }
        }

        return $subCategories;
    }
}
