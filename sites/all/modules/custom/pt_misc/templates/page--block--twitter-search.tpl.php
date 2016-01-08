<?php 
/**
 * @file
 * Default theme implementation for beans.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
if (module_exists('pt_misc')){
	// $html = pt_misc_get_social_media_feed_data($vars);

}	
?>
<h1>hello world</h1>
<?php 
// echo "<pre>" . print_r ($page['content']['bean_twitter-search']['bean']['twitter-search']['field_search_critera']['#object']->field_search_critera['und'], 1) . "</pre>"; 

	// this is the path to get to the information that the user enters in to be searched.
// dsm($page['content']['bean_twitter-search']['bean']['twitter-search']['field_search_critera']['#object']->field_search_critera['und']);

	// this is going to count how many items are in the array and retrieve them so that they may be used to search.
$search_count = count($page['content']['bean_twitter-search']['bean']['twitter-search']['field_search_critera']['#object']->field_search_critera['und']);

	// this is the loop that will pull all the items out to be searched and push them into an array.
$search_terms = [];

for ($i = 0; $i < count($page['content']['bean_twitter-search']['bean']['twitter-search']['field_search_critera']['#object']->field_search_critera['und']); ++$i) {
        	// this is going to put the terms in an array so that they can be searched.
        array_push($search_terms, $page['content']['bean_twitter-search']['bean']['twitter-search']['field_search_critera']['#object']->field_search_critera['und'][$i]['value']);
        
        
    }
	// dsm($search_terms);








?>







