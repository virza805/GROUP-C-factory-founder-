<?php 
add_shortcode('progressbar','progressbar_section_func');
function progressbar_section_func($jekono){
	$result = shortcode_atts(array(
		'p_title' =>'',
		'width' =>'',
		
	),$jekono);

	extract($result);

	ob_start();
	?>
<div class="skills-column col-xs-12">
                                                
                                                <div class="progress-levels medium">
                                                            
                                                    <!--Skill Box-->
                                                    <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                                        <div class="box-title"><?php echo $p_title; ?></div>
                                                        <div class="percent"><?php echo $width; ?></div>
                                                            <div class="inner">
                                                                <div class="bar">
                                                                    <div class="bar-innner">
                                                                        <div class="bar-fill" data-percent="<?php echo $width; ?>" style="width: <?php echo $width; ?>;"></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                      
                                                    </div>
                            
                                                </div>
  </div>
	
	<?php
	return ob_get_clean();

}

add_action( 'vc_before_init', 'progressbar_section_el' );
function progressbar_section_el() {
 vc_map( array(
  "name" => __( "Progressbar", "factory_founder" ),
  "base" => "progressbar",
  "category" => __( "Factory Founder", "factory_founder"),
  "params" => array(

  	
	 array(
	  "type" => "textfield",
	  "heading" => __( "Progressbar", "factory_founder" ),
	  "param_name" => "p_title",
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Progressbar %", "factory_founder" ),
	  "param_name" => "width",
	 ),
	
  )
 ) );
}
 ?>