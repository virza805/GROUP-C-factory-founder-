<?php
	add_shortcode('title-section','title_section_func');
	function title_section_func($f_founder){
		$result= shortcode_atts(array(
			'sec_title' => '',
			'sec_des' => '',
		),$f_founder);
		extract($result);
	ob_start();
	?>
	
		<div class="service-title-2">
            <h2 class=" text-success"><?php echo $sec_title;?></h2>
            <p>----------  <?php  echo $sec_des; ?>  ----------</p>
        </div>
	<?php
	return ob_get_clean();
	}
	add_action( 'vc_before_init', 'title_section_el' );
	function title_section_el() {
	 vc_map( array(
	  "name" => __( "Section Title", "factory_founder" ),
	  "base" => "title-section",
	  "category" => __( "Factory Founder", "factory_founder"),
		  "params" => array(
		 array(
		  "type" => "textfield",
		  "heading" => __( "section title", "factory_founder" ),
		  "param_name" => "sec_title",
		  "value" => __( "Enter Your Section Title", "factory_founder" ),
		  "description" => __( "Description for foo param.", "factory_founder" )
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "section description", "factory_founder" ),
		  "param_name" => "sec_des",
		 ),
		 
  )
 ) );
}
?>