<?php

class widget_for_google_map_embed extends WP_Widget {
    public function __construct() {
    	parent::__construct('widget_for_google_map_embed', __('Widget for Google Map', 'widget-for-google-map'), array(
            'description' => __( 'This is a google map widget.', 'widget-for-google-map')
    	));
    }
    
    public function widget( $args, $instance ) { ?>
		
		<div class="google-map-widget widget">	
			<?php $title = $instance['title']; 
			if( isset( $title ) && ! $title == '' ) : ?>
    	        <h2 style="margin-bottom:20px;"><?php echo esc_attr( $title ); ?></h2><br/>
    	    <?php endif;  
		    $google_map_code = $instance['google_map_code']; ?>
				<p><?php printf( _e( $google_map_code ) ); ?></p>
		</div>	
		
    <?php }

    public function form( $instance ) {
        if( isset( $instance['title'] ) ) :
    	    $title = $instance['title'];
        endif;
        if( isset( $instance['google_map_code'] ) ) :
            $google_map_code = $instance['google_map_code'];
        endif;
    ?>

    <P>
        <label for="<?php echo esc_html( $this->get_field_id('title') ); ?>"><?php echo __( 'Title:', 'widget-for-google-map'); ?></label>
    </p>

    <p>
       <input type="text" class="widefat" id="<?php echo esc_html( $this->get_field_id('title') ); ?>" name="<?php echo esc_html( $this->get_field_name('title') ); ?>" value="<?php if( isset( $title ) ) : echo esc_attr( $title ); endif; ?>">
    </p>

    <P>
        <label for="<?php echo esc_html( $this->get_field_id('google_map_code') ); ?>"><?php echo __( 'Google Map Embed Code:', 'widget-for-google-map'); ?></label>
    </p>

    <p>
        <textarea rows="10" cols="50" class="large-text code" id="<?php echo esc_html( $this->get_field_id('google_map_code') ); ?>" name="<?php echo esc_html( $this->get_field_name('google_map_code') ); ?>"><?php if( isset( $google_map_code ) ) : echo _e( $google_map_code ); endif; ?></textarea>
        <label><?php echo esc_html('To generate embed code easily ', 'widget-for-google-map'); ?><a href="https://google-map-generator.com/" target="_blank"><?php echo esc_html('click here', 'widget-for-google-map'); ?></a></label>
    </p>

    <?php }
}

function widget_for_google_map_embed_function() {
	register_widget('widget_for_google_map_embed');
}

add_action('widgets_init', 'widget_for_google_map_embed_function');
	