<?php
/**
 * wp-startup Theme Fields
 *
 * @package evolve
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_attach_theme_options() {
	
Container::make( 'theme_options', __( 'Theme Options' ) )
	->set_icon( 'dashicons-welcome-write-blog' )
    ->add_fields( array(
        
		
		Field::make( 'separator', 'crb_separator', __( 'Header' ) ),
		Field::make( 'text', 'crb_text_button', 'Text Button Header' ),
		Field::make( 'complex', 'crb_list', __( 'Header List' ) )->set_max(4)->set_collapsed()
    ->add_fields( array(
        Field::make( 'text', 'title_list', __( 'Title' ) ),
        Field::make( 'image', 'image_list', __( 'Photo' ) ),
		
    ) ),
		Field::make( 'separator', 'crb_average', __( 'Section Average' ) ),
		Field::make( 'text', 'average_title', __( 'Average Title' ) ),
		Field::make( 'rich_text', 'average_text_left', __( 'Average Text Left' ) )->set_width( 50 ),
		Field::make( 'rich_text', 'average_text_right', __( 'Average Text Right' ) )->set_width( 50 ),
		
		Field::make( 'separator', 'crb_member', __( 'Section Member' ) ),
		Field::make( 'complex', 'member_list', __( 'Member List' ) )->set_max(2)->set_collapsed()
    ->add_fields( array(
        Field::make( 'text', 'title', __( 'Title' ) ),
		Field::make( 'rich_text', 'description', __( 'Text' ) ),
        Field::make( 'image', 'image', __( 'Big Image' ) ),
		
    ) ),
		
		Field::make( 'separator', 'crb_offer', __( 'Section Offer' ) ),
		Field::make( 'text', 'offer_section_title', __( 'Offer Title' ) ),
		Field::make( 'complex', 'offer_cards', __( 'Offer Cards' ) )->set_max(4)->set_collapsed()
    ->add_fields( array(
		
		Field::make( 'image', 'image_card', __( 'Image' ) )->set_width( 40 ),
        Field::make( 'text', 'title_card', __( 'Title' ) )->set_width( 60 ),
		Field::make( 'rich_text', 'text_card', __( 'Text' ) ),
		
    ) ),
		Field::make( 'separator', 'crb_reviews', __( 'Section Reviews' ) ),
		Field::make( 'text', 'reviews_title', __( 'Reviews Title' ) )->set_width( 40 ),
		Field::make( 'image', 'reviews_image', __( 'Image' ) )->set_width( 30 ),
		Field::make( 'text', 'reviews_text', __( 'Reviews Text' ) )->set_width( 30 ),
		
        Field::make( 'complex', 'crb_slide', __( 'Slide' ) )->set_collapsed()
            ->add_fields( array(
                Field::make( 'complex', 'slide_stars', __( 'Stars' ) )->set_collapsed()
                    ->add_fields( array(
                        Field::make( 'image', 'image_star', __( 'Star Image' ) )->set_width( 15 )
                    ))
                    ->set_max(5), // Set maximum 5 star images
                Field::make( 'textarea', 'slide_description', __( 'Description' ) )->set_width( 60 )
                    ->set_rows( 4 ),
                Field::make( 'image', 'image_user_slide', __( 'Image User' ) )->set_width( 20 ),
                Field::make( 'text', 'user_name_slide', __( 'User Name' ) )->set_width( 20 ),
            )),
		
		
		
		Field::make( 'separator', 'crb_join', __( 'Section Join' ) ),
		Field::make( 'text', 'join_line_text', __( 'Line Text' ) )->set_width( 70 ),
		Field::make( 'text', 'join_before_title', __( 'Before Title' ) )->set_width( 30 ),
		Field::make( 'text', 'join_title', __( 'Title' ) )->set_width( 50 ),
		Field::make( 'text', 'join_text_button', __( 'Button Text' ) )->set_width( 20 ),
		Field::make( 'image', 'join_image', __( 'Image' ) )->set_width( 30 ),
		
		Field::make( 'separator', 'crb_team', __( 'Section Team' ) ),
		Field::make( 'text', 'team_title', __( 'Text' ) )->set_width( 30 ),
		Field::make( 'textarea', 'team_description', __( 'Description' ) )->set_width( 70 )
                    ->set_rows( 3 ),
		Field::make( 'complex', 'team_cards', __( 'Team Cards' ) )->set_max(8)->set_collapsed()
    ->add_fields( array(
		Field::make( 'image', 'team_image', __( 'Image' ) )->set_width( 40 ),
        Field::make( 'text', 'team_name', __( 'Team Name' ) )->set_width( 30 ),
		Field::make( 'text', 'team_role', __( 'Team Role' ) )->set_width( 30 ),
		
    ) ),
		Field::make( 'separator', 'crb_contact', __( 'Section Contact' ) ),
		Field::make( 'image', 'section_image', __( 'Image' ) )->set_width( 20 ),
		Field::make( 'text', 'contact_title', __( 'Title' ) )->set_width( 40 ),
		Field::make( 'text', 'contact_text', __( 'Text' ) )->set_width( 40 ),
		
		
		Field::make( 'separator', 'crb_footer', __( 'Section Footer' ) ),
		Field::make( 'complex', 'social_links', __( 'Social Links' ) )->set_max(4)->set_collapsed()
    ->add_fields( array(
		Field::make( 'image', 'social_link_image', __( 'Image ' ) )->set_width( 50 ),
        Field::make( 'text', 'social_link', __( 'Social Link' ) )->set_width( 50 ),
		
		
    ) ), 
		
	));//end Container Theme Options    
	
	
	
	
	
}

