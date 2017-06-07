<?php
/**
 * Blog post tags list
 *
 * @author 		Mahfuz
 * @since 		0.1.0
 */
function mr_blog_taglist() {
	$post_tags = wp_get_post_tags( get_the_id() );

	if( !empty($post_tags) ){
		$list = '<ul class="current-post-tags">';
		foreach( $post_tags as $post_tag ) {

			$list .= '<li><a href=" '. esc_url( strip_tags( get_tag_link( $post_tag->term_id ) ) ) . '">' . esc_attr($post_tag->name) . '</a></li>';
		}
		$list .= '</ul>';

		return $list;
	}

}
