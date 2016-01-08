<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function trinitytheme_preprocess_page (&$variables){
    if (isset($variables['node']->type)) {
        // If the content type's machine name is "my_machine_name" the file
        // name will be "page--my-machine-name.tpl.php".
        $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
    }
}

