<?php
/**
 * PLUGIN NAME:test_plugin
 */


//will replace 'read more' at the end of post to 'Click to read!'
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
