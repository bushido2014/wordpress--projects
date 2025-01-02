<?php 


use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action( 'carbon_fields_register_fields', 'crb_attach_post_options' );
function crb_attach_post_options() {

Container::make( 'post_meta',( 'Service' ) )
                ->where( 'post_type', '=', 'page' )
                ->where( 'post_template', '=', 'home-page.php' )
        
                ->add_fields( array(
                    Field::make( 'separator', 'crb_separator_sub_header', __( 'Section Sub Header' ) ),
                    Field::make( 'text', 'title_mastermind', __( 'Title' ) ),
                    Field::make( 'rich_text', 'textarea_mastermind', __( 'Description' ) )
                        ) );  

}                         