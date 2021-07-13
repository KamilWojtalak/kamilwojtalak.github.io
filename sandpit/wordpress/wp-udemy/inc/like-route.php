<?php 

add_action( 'rest_api_init', 'siemaLikeRoutes' );

function siemaLikeRoutes() {
    register_rest_route( 'siema/v1', 'manageLike', array(
        'methods' => 'POST',
        'callback' => 'createLike',
    ) );

    register_rest_route( 'siema/v1', 'manageLike', array(
        'methods' => 'DELETE',
        'callback' => 'deleteLike',
    ) );
}

function createLike($data) {

    if (is_user_logged_in()) {

        $id = sanitize_text_field($data['id']);

        $existQuery = new WP_Query(array(
            'author' => get_current_user_id(),
            'post_type' => 'like',
            'meta_query' => array(
              array(
                'key' => 'liked_professor_id',
                'compare' => '=',
                'value' => $id,
              ),
            ),
          )); 
        
        if ( $existQuery->found_posts == 0 AND get_post_type($id) == 'professor' ) {
            return wp_insert_post(array(
                'post_type' => 'like',
                'post_status' => 'publish',
                'meta_input' => array(
                    'liked_professor_id' => $id
                ),
            ));
        } else {
            die('Invalid porfessor id: ' . $id);
        }


    } else {
        die('Only logged in users can create a like.');
    }
}

function deleteLike($data) {
    $likeID = sanitize_text_field($data['like']);

    if ( get_current_user_id() ==get_post_field('post_author', $likeID)  && get_post_type($likeID, true) ) {
        wp_delete_post($likeID, true);
        return 'Congrats, deleted like.';
    } else {
        die('You cannot delete that.');
    }
}