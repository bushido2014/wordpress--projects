<?php
/**
 * Carbon Fields Theme Options cu Tab-uri
 *
 * @package wp-lumina
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', function() {
    Container::make( 'theme_options', __( 'Global Options', 'wp-lumina' ) )
        ->set_icon( 'dashicons-admin-generic' ) // Icon pentru meniu
        ->add_tab( __( 'Global Settings', 'wp-lumina' ), array(
            
            Field::make( 'text', 'button_link_book_an', __( 'Button Book an Appointment', 'wp-lumina' ) )->set_width( 50 ),
            Field::make( 'text', 'button_collaborate_us', __( 'Collaborate with Us', 'wp-lumina' ) )->set_width( 50 ),

           Field::make( 'separator', 'crb_separator_footer', __( 'Footer' ) ), 
           Field::make( 'text', 'footer_text', __( 'Footer Text Left' ) ),
           Field::make( 'complex', 'social_links', __( 'Social Links' ) )->set_max(5)->set_collapsed()
                ->add_fields( array(
                    Field::make( 'select', 'social_platform', __( 'Social Platform' ) )
                        ->set_options( array(
                            'facebook' => 'Facebook',
                            'x'        => 'X (Twitter)',
                            'instagram'=> 'Instagram',
                            'linkedin' => 'LinkedIn',
                            'pinterest' => 'pinterest',
                        ) ),
                    Field::make( 'text', 'social_url', __( 'Social URL' ) )
                        ->set_default_value( '#' ),
                ) ),
            

        ) )

        ->add_tab( __( 'Home Page', 'wp-lumina' ), array(
            Field::make( 'separator', 'crb_separator_masterminds', __( 'Section Masterminds' ) ),
            Field::make( 'text', 'master_title', __( 'Title', 'wp-lumina' ) )->set_width( 30 ),
            Field::make( 'rich_text', 'master_content', __( 'Content', 'wp-lumina' ) )->set_width( 70 ),
            Field::make( 'text', 'master_link_us', __( 'Link Us', 'wp-lumina' ) )->set_width( 50 ),
            Field::make( 'text', 'master_link_more', __( 'Link More', 'wp-lumina' ) )->set_width( 50 ),
            Field::make( 'image', 'master_img', __( 'Image', 'wp-lumina' ) ),
            Field::make( 'text', 'stats_title', __( 'Title Stats', 'wp-lumina' ) )->set_width( 40 ),
            Field::make( 'text', 'stats_desc', __( 'Desc Stats', 'wp-lumina' ) )->set_width( 60 ),
            Field::make( 'complex', 'stats_items', __( 'Stats Items' ) )->set_max(4)->set_collapsed()
           ->add_fields( array(
            Field::make( 'text', 'stats_value', __( 'Value' ) )->set_width( 50 ),
		    Field::make( 'text', 'stats_text', __( 'Text' ) )->set_width( 50 ),
           ) ),

        Field::make( 'separator', 'crb_separator_offer', __( 'Section Offer' ) ), 
        Field::make( 'text', 'offer_title', __( 'Title', 'wp-lumina' ) )->set_width( 40 ),
        Field::make( 'rich_text', 'offer_content', __( 'Content', 'wp-lumina' ) )->set_width( 60 ), 
         Field::make( 'complex', 'offer_items', __( 'Offer Items' ) )->set_max(6)->set_collapsed()
       ->add_fields( array(
        Field::make( 'image', 'offer_img', __( 'Image' ) )->set_width( 20 ),   
        Field::make( 'text', 'offer_title', __( 'Title' ) )->set_width( 30 ),
		Field::make( 'textarea', 'offer_text', __( 'Text' ) )->set_width( 50 ),
           ) ), 

        Field::make( 'separator', 'crb_separator_knstory', __( 'Section Know Story' ) ),
        Field::make( 'text', 'know_title', __( 'Title' ) )->set_width( 40 ), 
        Field::make( 'rich_text', 'know_text', __( 'Text' ) )->set_width( 60 ), 
        Field::make( 'image', 'know_img', __( 'Image' ) )->set_width( 60 ),   
        Field::make( 'text', 'know_link', __( 'Button Text' ) )->set_width( 40 ),


        Field::make( 'separator', 'crb_separator_work_success', __( 'Section Work Success' ) ), 
        Field::make( 'text', 'wsuccess_title', __( 'Title' ) )->set_width( 40 ), 
        Field::make( 'rich_text', 'wsuccess_text', __( 'Text' ) )->set_width( 60 ), 
        Field::make( 'text', 'wsuccess_link', __( 'Button Text' ) ), 
         Field::make( 'complex', 'wsuccess_items', __( 'Work Success Items' ) )->set_max(3)->set_collapsed()
       ->add_fields( array(
        Field::make( 'image', 'wsuccess_img', __( 'Image' ) )->set_width( 20 ),   
        Field::make( 'text', 'wsuccess_title', __( 'Title' ) )->set_width( 30 ),
		Field::make( 'textarea', 'wsuccess_text', __( 'Text' ) )->set_width( 50 ),
           ) ), 

        Field::make( 'separator', 'crb_separator_benefits', __( 'Section Benefits' ) ), 
        Field::make( 'text', 'benefits_title', __( 'Title' ) )->set_width( 40 ), 
        Field::make( 'rich_text', 'benefits_desc', __( 'Text' ) )->set_width( 60 ), 
        Field::make( 'complex', 'benefits_items', __( 'Benefits Content Items' ) )->set_max(2)->set_collapsed()
       ->add_fields( array(
        Field::make( 'image', 'benefits_item_img', __( 'Image' ) )->set_width( 20 ),   
        Field::make( 'text', 'benefits_item_title', __( 'Title' ) )->set_width( 30 ),
		Field::make( 'textarea', 'benefits_item_text', __( 'Text' ) )->set_width( 50 ),
           ) ),
        Field::make( 'image', 'benefits_img_top', __( 'Image Top' ) )->set_width( 50 ),  
        Field::make( 'image', 'benefits_img_bottom', __( 'Image Bottom' ) )->set_width( 50 ),

        Field::make( 'separator', 'crb_separator_clients', __( 'Section Clients' ) ), 
        Field::make( 'text', 'clients_title', __( 'Title' ) )->set_width( 40 ), 
        Field::make( 'rich_text', 'clients_desc', __( 'Text' ) )->set_width( 60 ), 
        Field::make( 'complex', 'clients_slide', __( 'Clients Slider' ) )->set_max(5)->set_collapsed()
       ->add_fields( array(
        Field::make( 'rich_text', 'client_slide_text', __( 'Text' ) )->set_width( 70 ),     
        Field::make( 'text', 'client_slide_name', __( 'User Name' ) )->set_width( 30 ),
        Field::make( 'text', 'client_slide_career', __( 'User Сareer' ) )->set_width( 60 ),
        Field::make( 'image', 'client_slide_avatar', __( 'User Avatar' ) )->set_width( 40 ),   
        
           ) ),
        
        Field::make( 'separator', 'crb_separator_collaborate', __( 'Section Collaborate' ) ), 
        Field::make( 'text', 'collaborate_title', __( 'Title' ) )->set_width( 40 ), 
        Field::make( 'rich_text', 'collaborate_desc', __( 'Text' ) )->set_width( 60 ),
        Field::make( 'text', 'collaborate_button', __( 'Button Text' ) )->set_width( 50 ), 
        Field::make( 'image', 'collaborate_image', __( 'Image ' ) )->set_width( 50 ),  


       Field::make( 'separator', 'crb_separator_home_arcticle', __( 'Section Collection Article' ) ), 
       Field::make( 'text', 'collection_title', __( 'Title' ) ), 
       Field::make( 'rich_text', 'collection_desc', __( 'Text' ) )->set_width( 70 ),
       Field::make( 'text', 'collection_button', __( 'Button Text' ) )->set_width( 30 ), 
        
        ) )//end tab

         
       //* Tab About Page  *//
       
        ->add_tab( __( 'About Page', 'wp-lumina' ), array(
            Field::make( 'separator', 'crb_separator_about_marketing', __( 'Section Marketing' ) ), 
            Field::make( 'text', 'marketing_title', __( 'Marketing Title', 'wp-lumina' ) )->set_width( 40 ),
            Field::make( 'rich_text', 'marketing_description', __( 'Marketing Description', 'wp-lumina' ) )->set_width( 60 ),
           Field::make( 'complex', 'marketing_slide', __( 'Marketing Slider' ) )->set_max(5)->set_collapsed()
       ->add_fields( array(
        Field::make( 'image', 'marketing_image_slide', __( 'Image' ) )->set_width( 30 ), 
        Field::make( 'textarea', 'marketing_text_slide', __( 'Text Slide' ) )->set_width( 70 ),
        ) ),

        Field::make( 'separator', 'crb_separator_vision', __( 'Section Vision' ) ), 
        Field::make( 'text', 'vision_title', __( 'Title' ) ), 
        Field::make( 'rich_text', 'vision_desc', __( 'Text' ) )->set_width( 80 ),
        Field::make( 'image', 'vision_image', __( 'Image ' ) )->set_width( 20 ),

        Field::make( 'separator', 'crb_separator_journey', __( 'Section Journey' ) ),
        Field::make( 'text', 'journey_title', __( 'Section Title' ) )->set_width( 60 ),
        Field::make( 'image', 'journey_image', __( 'Image ' ) )->set_width( 40 ),

        Field::make( 'separator', 'crb_separator_value', __( 'Section Value' ) ),
        Field::make( 'text', 'value_title', __( 'Section Value Title' ) )->set_width( 50 ), 
        Field::make( 'textarea', 'value_text', __( 'Section Value Text' ) )->set_width( 50 ),
        Field::make( 'complex', 'value_items', __( 'Value Items' ) )->set_max(5)->set_collapsed()
       ->add_fields( array(
        Field::make( 'image', 'value_img', __( 'Image' ) )->set_width( 20 ),   
        Field::make( 'text', 'value_title', __( 'Title' ) )->set_width( 30 ),
		Field::make( 'textarea', 'value_desc', __( 'Text' ) )->set_width( 50 ),
        ) ),
        
        Field::make( 'separator', 'crb_separator_member', __( 'Section Member' ) ),
        Field::make( 'text', 'member_title', __( 'Section Member Title' ) )->set_width( 50 ), 
        Field::make( 'textarea', 'member_text', __( 'Section Member Text' ) )->set_width( 50 ),
        Field::make( 'complex', 'member_items', __( 'Member Items' ) )->set_max(3)->set_collapsed()
       ->add_fields( array(
        Field::make( 'image', 'member_img', __( 'Image' ) )->set_width( 20 ),   
        Field::make( 'text', 'member_name', __( 'Name' ) )->set_width( 30 ),
		Field::make( 'text', 'member_job', __( 'Job' ) )->set_width( 50 ),
         Field::make( 'complex', 'member_social_links', __( 'Social Links' ) )->set_max(4)->set_collapsed()
                ->add_fields( array(
                    Field::make( 'image', 'member_social_img', __( 'Image' ) )->set_width( 50 ),
                    Field::make( 'text', 'member_social_url', __( 'Social URL' ) )->set_width( 50 )
                        ->set_default_value( '#' ),
                ) ),

        ) ),

        Field::make( 'separator', 'crb_separator_office', __( 'Section Office' ) ),
        Field::make( 'text', 'office_title', __( 'Section Office Title' ) )->set_width( 50 ), 
        Field::make( 'textarea', 'office_text', __( 'Section Office Text' ) )->set_width( 50 ),
        Field::make( 'complex', 'office_cards', __( 'Office Card Items' ) )->set_max(4)->set_collapsed()
       ->add_fields( array(
        Field::make( 'image', 'card_image', __( 'Image' ) )->set_width( 20 ),   
        Field::make( 'text', 'card_title', __( 'Title' ) )->set_width( 30 ),
		Field::make( 'textarea', 'card_desc', __( 'Text' ) )->set_width( 50 ),
        Field::make( 'complex', 'card_office_contacts', __( 'Office Contacts' ) )->set_max(2)->set_collapsed()
                ->add_fields( array(
                    Field::make( 'image', 'card_contact_img', __( 'Image' ) )->set_width( 20 ),
                    Field::make( 'text', 'card_contact_title', __( 'Contact Title' ) )->set_width( 40 ),
                    Field::make( 'text', 'card_contact_value', __( 'Contact Value' ) )->set_width( 40 ),
                ) ),


        ) ),


        ))//end tab About Page

           
    
        //* Tab Contact Page  *//
       
        ->add_tab( __( 'Contact Page', 'wp-lumina' ), array(
        Field::make( 'separator', 'crb_separator_contact', __( 'Section Contact' ) ),   
        Field::make( 'text', 'contact_title', __( 'Title' ) )->set_width( 50 ), 
        Field::make( 'textarea', 'contact_text', __( 'Text' ) )->set_width( 50 ),
        Field::make( 'complex', 'card_contacts', __( 'Contacts' ) )->set_max(2)->set_collapsed()
                ->add_fields( array(
                    Field::make( 'image', 'contact_img', __( 'Image' ) )->set_width( 20 ),
                    Field::make( 'text', 'contact_title', __( 'Contact Title' ) )->set_width( 40 ),
                    Field::make( 'text', 'contact_value', __( 'Contact Value' ) )->set_width( 40 ),
                ) ),
         Field::make( 'image', 'contact_image', __( 'Image' ) )       

       ));//end tab Contact Page     




} );
