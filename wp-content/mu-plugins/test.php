<?php

function test_remove_linkedin_social_profile ($profiles) {
    // if we have a linkedin profile
    if (!empty($profiles['linkedin'])) {
        // then remove it
        unset($profiles['linkedin']);
    }

    // add the twitter profile.
    $profiles['pinterest'] = array(
        'id'                => 'hd_espw_pinterest_url',
        'label'             => __('Pinterest URL', 'hd-extensible-social-profiles-widget'),
        'class'             => 'pinterest',
        'description'       => __('Enter your Pinterest profile URL', 'hd-extensible-social-profiles-widget'),
        'priority'          => 50,
        'type'              => 'text',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    );

    return $profiles;
}

add_filter('hd_espw_social_profiles', 'test_remove_linkedin_social_profile', 20, 1);

// if we dont want to output the title for example
function test_remove_social_profiles_title () {
    remove_action('hd_espw_social_icons_widget_output', 'hd_espw_social_icons_output_widget_title');
}

add_action('init', 'test_remove_social_profiles_title');   // the action isdone after the plugin is loaded

function test_add_custom_title ($args, $instance) {
    echo 'The title: ' . $instance['title'];   // normally we should check if title exists at all
}

add_action('hd_espw_social_icons_widget_output', 'test_add_custom_title', 10, 2);
