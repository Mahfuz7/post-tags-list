# WordPress Post Tags Link
----------------------------

## Tags List Function

### Add this code blog into your theme functions.php file

```
function mr_blog_current_post_tags() {

    $post_tags = wp_get_post_tags( get_the_id() );

    if( ! empty( $post_tags ) ) {
      $list = '<ul class="current-post-tags">';
        foreach( $post_tags as $post_tag ){
          $list .= '<li>';

            $list .= '<a href="' .strip_tags( esc_url( get_tag_link( $post_tag->term_id ) ) ). '">';

              $list .= esc_attr( $post_tag->name );

            $list .= '</a>';

          $list .= '</li>';
        }
      $list .= '</ul>';

      return $list;
    }
 }
```

## Output of Tag List Function
---------------------------------------------------------------------------------------------------------------------

### After that put this code block wherever you want to appear your post tags list into the current post content loop.

<footer class="post-footer">
	<?php echo mr_blog_current_post_tags(); ?>
</footer><!-- /.entry-footer -->


You can easily get your current **WordPress Post Tags List** with It's own **Link** by simply add these code blocks
