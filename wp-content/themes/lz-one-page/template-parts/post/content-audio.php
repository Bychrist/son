<?php
/**
 * Template part for displaying posts
 * @package WordPress
 * @subpackage lz-one-page
 * @since 1.0
 * @version 1.4
 */

?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="article_content"> 
    <div class="box-image">
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the audio file.
          if ( ! empty( $audio ) ) {
            foreach ( $audio as $audio_html ) {
              echo '<div class="entry-audio">';
                echo $audio_html;
              echo '</div><!-- .entry-audio -->';
            }
          };
        };
      ?> 
    </div>  
    <div class="article-text">
      <h3><?php esc_html(the_title()); ?></h3>
      <div class="metabox"> 
        <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>  
        <span class="entry-author"><i class="fas fa-user"></i><?php esc_html(the_author()); ?></span>
        <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','lz-one-page'), __('0 Comments','lz-one-page'), __('% Comments','lz-one-page') ); ?></span>
      </div>
      <p><?php the_excerpt();?></p>
      <div class="read-btn">
        <a href="<?php esc_url(the_permalink()); ?>" class="blogbutton-small" title="<?php esc_attr_e( 'READ MORE', 'lz-one-page' ); ?>"><?php esc_html_e('READ MORE','lz-one-page'); ?>
        </a>
      </div>
    </div>
    <div class="clearfix"></div> 
  </div>
</div>