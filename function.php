function rocketFAQTabs() {
		
		register_sidebar( array(
			'name' => __( 'FAQ', 'rocket' ),
			'id' => 'faq-tabs',
			'description' => __( 'Displays FAQ Tabs', 'rocket' ),
			'before_sidebar' => '<div id="accordion">',
			'after_sidebar' => '</div>',
			'before_widget' => '<div class="card"><div class="card-header"><a class="collapsed card-link" data-toggle="collapse" href="#%1$s">',
			'after_widget' => '</div></div></div>',
			'before_title' => '<h3 class="card-title">',
			'after_title' => '</h3></a><div id="%1$s" class="collapse" data-parent="#accordion">',
		) );
	}
	add_filter('dynamic_sidebar_params', function($params){
		$params[0]['after_title'] = str_replace( '%1$s', $params[0]['widget_id'], $params[0]['after_title'] );
		return $params;
	});
	
