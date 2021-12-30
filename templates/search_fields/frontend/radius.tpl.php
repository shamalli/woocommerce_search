<div class="wcsearch-search-input wcsearch-search-input-single-slider <?php echo $search_model->openedClosedClass(); ?>" <?php echo $search_model->getOptionsString(); ?>>
	<label class="wcsearch-search-input-label"><?php echo esc_html($title); ?></label>
	<?php
	wcsearch_print_radius_slider_code(
		array(
			'min_max_options' => $min_max_options,
			'values' => $values,
			'slug' => 'radius',
			'show_scale' => $show_scale,
			'odd_even_labels' => false,
			'string_label' => esc_html__("Search in radius ", "WCSEARCH"),
		)
	);
	?>
</div>