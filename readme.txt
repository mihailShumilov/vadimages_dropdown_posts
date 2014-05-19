=== Vadimages Dropdown Posts ===
Contributors: mihail.shumilov
Tags: dropdown, posts
Requires at least: 0.2.1
Tested up to: 3.9.1

Provide function to display dropdown with posts.

== Description ==
Provide function to display dropdown with posts.

Usage:

v_dropdown_posts(array(
orderby\"        => \"title\",
        \"order\"          => \"asc\",
        \"selected\"       => 0,
        \"echo\"           => 1,
        \"select_name\"    => \"post_id\",
        \"select_id\"      => \"\",
        \"post_type\"      => \"post\",
        \"posts_per_page\" => -1
));

Supported all params that supported WP_Query
