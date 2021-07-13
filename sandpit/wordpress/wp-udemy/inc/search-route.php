<?php
function siema_register_search() {
    register_rest_route('siema/v1', 'search', array(
        'methods' => 'GET',
        'callback' => 'siema_search_results',
    ));
}

add_action('rest_api_init', 'siema_register_search');

function siema_search_results( $data ) {
    $mainQuery = New WP_Query(array(
        'post_type' => array('post', 'page', 'professor', 'event', 'program', 'campus'),
        's' => $data['term']
    ));

    $results = array(
        'general_info' => array(

        ),
        'professors' => array(

        ),
        'programs' => array(

        ),
        'events' => array(

        ),
        'campuses' => array(

        ),
    );

    while($mainQuery->have_posts()) {
        $mainQuery->the_post();

        if ( get_post_type() === 'post' || get_post_type() === 'page' ) {
            array_push($results['general_info'], array(
                'post_type' => get_post_type(),
                'title' => get_the_title(),
                'author' => get_the_author(),
                'permalink' => get_the_permalink(),
            ));
        } else if ( get_post_type() === 'professor' ) {
            array_push($results['professors'], array(
                'post_type' => get_post_type(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'thumbnail' => get_the_post_thumbnail_url(0, 'professor-small'),
            ));
        } else if ( get_post_type() === 'program' ) {
            array_push($results['programs'], array(
                'id' => get_the_id(),
                'post_type' => get_post_type(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
            ));
        } else if ( get_post_type() === 'event' ) {
            $eventDate = new DateTime(get_field('event_date'));

            array_push($results['events'], array(
                'post_type' => get_post_type(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'excerpt' => wp_trim_words(get_the_content(), 15),
                'month' => $eventDate->format('M'),
                'day' => $eventDate->format('d'),
            ));
        } else if ( get_post_type() === 'campus' ) {
            array_push($results['campuses'], array(
                'post_type' => get_post_type(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
            ));
        }
    }

    if ($results['programs']) {
        $programsMetaQuery = array('relation' => 'OR');

        foreach($results['programs'] as $item) {
            array_push($programsMetaQuery, array(
                'key' => 'related_program',
                'compare' => 'LIKE',
                'value' => '"' . $item['id'] . '"',
                )
            );
        }
    
        $prograRelationshipQuery = new WP_Query( array(
            'post_type' => array('professor', 'event'),
            'meta_query' => array(
                $programsMetaQuery
            ),
        ) );
    
        while( $prograRelationshipQuery->have_posts() ) {
            $prograRelationshipQuery->the_post();
    
            if ( get_post_type() === 'professor' ) {
                array_push($results['professors'], array(
                'post_type' => get_post_type(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'thumbnail' => get_the_post_thumbnail_url(0, 'professor-small'),
                ));      
            } else if ( get_post_type() === 'event' ) {
                $eventDate = new DateTime(get_field('event_date'));
                array_push($results['events'], array(
                    'post_type' => get_post_type(),
                    'title' => get_the_title(),
                    'permalink' => get_the_permalink(),
                    'excerpt' => wp_trim_words(get_the_content(), 15),
                    'month' => $eventDate->format('M'),
                    'day' => $eventDate->format('d'),
                ));
            }
        }
    
        $results['professors'] = array_values(array_unique($results['professors'], SORT_REGULAR));
        $results['events'] = array_values(array_unique($results['events'], SORT_REGULAR));
    }

    

    return $results;

}