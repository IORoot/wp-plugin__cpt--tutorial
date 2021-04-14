<?php

namespace andyp\labs\cpt\tutorial\REST;

/**
 * Return Metadata on post request to 
 * https://dev.pulse.londonparkour.com/wp-json/wp/v2/pulse
 */
class metadata
{
    public function __construct()
    {

        /**
         * https://wordpress.stackexchange.com/questions/331832/how-to-return-meta-data-from-the-rest-api
         */
        add_action( 'rest_api_init', function () {

            /**
             * Add thesee two fields so that the pulse-stack plugin can grab the data
             * and use it to create the stack on londonparkour.com
             */
            register_rest_field( 'tutorial', 'channelTitle', array(
                'get_callback' => function( $post_arr ) {
                    return get_post_meta( $post_arr['id'], 'channelTitle', true );
                },
            ) );

            register_rest_field( 'tutorial', 'imageURL', array(
                'get_callback' => function( $post_arr ) {
                    return get_the_post_thumbnail_url( $post_arr['id'], 'thumbnail' );
                },
            ) );

        } );


        /**
         * Add "RANDOM" as an orderby parameter.
         */
        add_filter( 'rest_tutorial_collection_params', function( $query_params ) {
            $query_params['orderby']['enum'][] = 'rand';
            return $query_params;
        } );
        
    }




}