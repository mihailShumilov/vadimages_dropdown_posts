<?php
/**
 * Plugin Name: Vadimages Dropdown Posts
 * Description: Provide function to display dropdown with posts.
 * Version: 0.2.1
 * Author: Vadimages team
 * Author URI: http://vadimages.com
 */

function v_dropdown_posts($args = '')
{
    $defaults = array(
        "orderby"        => "title",
        "order"          => "asc",
        "selected"       => 0,
        "echo"           => 1,
        "select_name"    => "post_id",
        "select_id"      => "",
        "post_type"      => "post",
        "posts_per_page" => -1
    );
    $r        = wp_parse_args($args, $defaults);
    extract($r, EXTR_SKIP);

    if (empty($select_id)) {
        $select_id = $select_name;
    }

    $output = '';

    $the_query = new WP_Query($r);
    if ($the_query->have_posts()) {
        $output = "<select  name='" . esc_attr($select_name) . "' id='" . esc_attr($select_id) . "'>";
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<option';
            if ($selected) {
                if ($selected == get_the_ID()) {
                    $output .= " selected='selected' ";
                }
            }
            $output .= ' value="' . get_the_ID() . '">' . get_the_title() . '</option>';
        }
        $output .= "</select>";
    }
    wp_reset_postdata();

    if ($echo) {
        echo $output;
    } else {
        return $output;
    }
}