
<?php 
add_shortcode('servicessw','service_section_func');
function service_section_func($jakono){
	$result= shortcode_atts(array(
			'single_title' => '',
			'descriptions' => '',
			'icon' => '',
			's_img' => '',

	),$jakono);

	extract($result);
	ob_start();
?>
 		<!--Start service section-->  
		 <section class="service-section">
		 
            <div class="container">
			 	
                <div class="row">
				
                    <!--Start single  item-->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-column">
                            <div class="service-image-box">
							<?php  $s_image = wp_get_attachment_url($s_img);  ?>
							
                                <img src="<?php echo $s_image;?>" alt=""  >
                                <div class="overlay">
                                    <div class="text">
                                        <a href="service-title.html"><h4><?php echo $single_title;?></h4></a>
                                        <p><?php echo $descriptions;?> <a href="#">Read More...</a></p>
                                    </div>
                                    <div class="inner-image-box">
                                        <i class="service-icon <?php echo esc_html($icon);?>"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!--End single  item-->  
				
                </div>
				
            </div> 
		
        </section> 
        <!--End service section--> 
<?php

	return ob_get_clean();
	}
	add_action( 'vc_before_init', 'title_service_el' );
	function title_service_el() {
	 vc_map( array(
	  "name" => __( "Section Service", "factory_founder" ),
	  "base" => "servicessw",
	  "category" => __( "Factory Founder", "factory_founder"),
		  "params" => array(
		
	    array(
		'type' => 'attach_image',
		'value' => '',
		'heading' => 'sarvice_image',
		'param_name' => 's_img',
	    ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "service hading", "factory_founder" ),
		  "param_name" => "single_title",
		  
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "service description", "factory_founder" ),
		  "param_name" => "descriptions",
		 ),
		 array(
			"type" => "iconpicker",
			"heading" => __( "service Icon", "factory_founder" ),
			"param_name" => "icon",
	     ),
	  )
	 ) );
}
?>