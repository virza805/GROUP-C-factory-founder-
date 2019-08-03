
<?php 
add_shortcode('counter','counter_section_func');
function counter_section_func($jakono){
	$result= shortcode_atts(array(
			'icon' =>'',
			'counter' => '',
			'counter_image' => '',	

	),$jakono);

	extract($result);
	ob_start();
 ?>
	
        <!-- Start fun-factor -->
		<?php  $image_counter = wp_get_attachment_url($counter_image);  ?>
		<section class="funfact-section" style="background-image: url(<?php echo   $image_counter;?>);     background-size: cover;
		background-attachment: fixed; " >
            <div class="container">
                <div class="row">
				<?php
					$counter_i = vc_param_group_parse_atts($counter);
					foreach($counter_i as $item_count):
					?>
                    <div class="funfact">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!--Start single  item-->
							<div class="fact-content ">
                                <div class="content-area">
								<i class="<?php echo $item_count['icon'];?>"></i>
								<!-- <?php  // $img_icon = wp_get_attachment_url($icon);  ?>
                                    <i class="flaticon-drawing-architecture-project-of-a-house" style="background-image: url(<?php // echo   $img_icon;?>);     background-size:cover;
		background-attachment: fixed; " ></i> -->
									<!-- <i class="<?php // echo esc_html($icon);?>"></i> -->
                                    <h2 class="sF-counter counter" data-from="0" data-to="<?php echo $item_count['num']; ?>" data-speed="3000" data-refresh-interval="50"></h2>
                                    <div class="border_services"></div>
                                    <p><?php echo $item_count['name'];?></p>
                                </div>
							</div>
                            <!--End single  item-->
                        </div>
                    </div>
					<?php endforeach;?>
                </div>    
            </div>
        </section>
    
	<?php
	return ob_get_clean();
}	

add_action( 'vc_before_init', 'counter_section_el' );
function counter_section_el() {
 vc_map( array(
  "name" => __( "Counter", "factory_founder" ),
  "base" => "counter",
  "category" => __( "Factory Founder", "factory_founder"),
  "params" => array(
  	  array(
			  'type' => 'attach_image',
			  'value' => '',
			  'heading' => 'counter_image',
			  'param_name' => 'counter_image',
			  ),
		

	  array(
	  'type' => 'param_group',
	  'value' => '',
	  'param_name' => 'counter',
	  'params' => array(
				array(
					"type" => "iconpicker",
					"heading" => __( "Counter Icon", "factory_founder" ),
					"param_name" => "icon",
			  ),
			//   array(
			// 	'type' => 'attach_image',
			// 	'value' => '',
			// 	'heading' => 'icon_image',
			// 	'param_name' => 'icon',
			// 	),
			// array(
			// 	'type' => 'textfield',
			// 	'value' => '',
			// 	'heading' => 'icon Add name',
			// 	'param_name' => 'icon',
			// 	),
  
				array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Add number',
			  'param_name' => 'num',
			  ),
			    array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Add name',
			  'param_name' => 'name',
			  ),

      )
	)	
		
  )
 ) );
}
 

?>