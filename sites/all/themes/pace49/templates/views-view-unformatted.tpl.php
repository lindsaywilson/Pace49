<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<?php foreach ($rows as $id => $row): 

	switch($view->name){
  	case 'news':
		if($view->current_display == 'home'){
			$classes_array[$id] .= ' grid grid-third view-link-list';
		}
		break;
	case 'distributors':
		$classes_array[$id] .= ' grid grid-third';
	break;
	case 'careers':
		$classes_array[$id] .= ' view-link-list';
	break;
  }
  $classes_array[$id] .= ' clearfix';

?>


  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <div class="inner">
	<?php print $row; ?>
    </div>
  </div>
<?php endforeach; ?>