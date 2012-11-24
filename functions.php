<?php

if(!function_exists('vutton_posted_by')) {
    function vutton_posted_by() {
        printf('Par <a class="url fn n" href="%2$s" rel="author" title="%3$s">%1$s</a>',
            get_the_author(),
		    esc_url(get_author_posts_url(get_the_author_meta('ID'))),
		    esc_attr(sprintf('Articles de %s', get_the_author()))
        );
    }
}

if(!function_exists('vutton_posted_on')) {
    function vutton_posted_on() {
        printf('le <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a>',
		    esc_url(get_permalink()),
		    esc_attr(get_the_time()),
		    esc_attr(get_the_date('c')),
		    esc_html(get_the_date())
        );
    }
}
