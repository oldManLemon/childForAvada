<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Materialized Theme</title>
		<?php wp_head(); ?>
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;
		
	?>
	
	<body <?php body_class( $awesome_classes ); ?>>
		
		<div class="container">
		
			<div class="row">
				
				<div class="col s12">
					
					<nav>
					  <div class="nav-wrapper light-blue darken-4">
					    <!-- Brand and toggle get grouped for better mobile display -->
					
					
					<?php 
								wp_nav_menu(array(
									'theme_location' => 'Main Navigation',
									'container' => false,
									'menu_class' => 'left hide-on-med-and-down'
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>
				
			</div>
			
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />