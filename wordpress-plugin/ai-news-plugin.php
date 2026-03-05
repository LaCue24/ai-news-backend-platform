<?php
/*
Plugin Name: AI News Summary Plugin
Description: Automatically generate AI summaries for news articles.
Version: 1.0
Author: Ariana LaCue
*/

add_action('publish_post', 'generate_ai_summary');

function generate_ai_summary($post_id) {

    $content = get_post_field('post_content', $post_id);

    $response = wp_remote_post(
        'http://localhost:8000/ai/summarize',
        array(
            'body' => json_encode(array(
                'content' => $content
            )),
            'headers' => array(
                'Content-Type' => 'application/json'
            )
        )
    );

}
