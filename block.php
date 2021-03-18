<?php

// New Block
add_action('acf/init', 'nc_faqs_block');
function nc_faqs_block() {

        // register a items block
        acf_register_block_type(array(
            'name'              => 'nc_faqs',
            'title'             => __('NC FAQs', 'nc-framework'),
            'description'       => __('Display questions and answers.', 'nc-framework'),
            'render_callback'   => 'nc_faqs_block_markup',
						'category'          => 'layout',
            //'icon'              => 'format-image',
            'mode'              => 'edit',
            'keywords'          => array('faqs', 'frequently asked questions', 'answers', 'questions' ),
            'post_types'        => array('post', 'page'),
            'align'             => 'full',
            'supports'          => array( 
                  'align' => array( 'full' ), 
                  'mode' => true,
                  'multiple' => true,
									),
        ));
}

/* This displays the block */

function nc_faqs_block_markup( $block, $content = '', $is_preview = false ) {

	// ID Setup
	if (get_field('set_id')) { $id = get_field('set_id'); } else { $id = uniqid("block_"); };

    // Create class attribute allowing for custom "className" and "align" values.
    $className = '';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }

	// ACF Block
	
  $select_links = get_field('select_links', false, false);
  $truncate = get_field('tuncate_char_limit') ?: '100';
	$content = get_field('display_content');
	$hd = get_field('heading') ?: 'h3';
	$mobile = get_field('mobile') ?: '600';

	$bg_color = get_field('bg_color') ?: 'transparent';
	$text_color = get_field('text_color') ?: '#000';
	$padding = get_field('padding') ?: '3rem 0';
	$width = get_field('max_contain_width') ?: '1000';

?>

	<div id="<?php echo $id; ?>" class="ncfaqs_box<?php echo esc_attr($className); ?>">
		<div class="ncontain">
		
		<?php if(function_exists('nc_before_content')) { nc_before_content(); } ?>
			
			<?php $args = array(
				'post_type' => 'nc_faqs',
				'posts_per_page' => -1,
				'post__in' => $select_links,
				'post_status' => 'publish',
				'orderby' => 'post__in',
				'ignore_sticky_posts' => true
      );
			?>

			<?php $queryfaqs = new WP_Query($args); 
			if ( $queryfaqs->have_posts() && $select_links ) : ?>

			<div class="ncfaqs">
      <?php while ( $queryfaqs->have_posts() ) : $queryfaqs->the_post(); ?>

      <<?php echo $hd; ?> class="ncfaqs_header" id="faq-<?php the_ID(); ?>" title="faq-<?php the_ID(); ?>"><?php echo get_the_title( get_the_ID() );?></<?php echo $hd; ?>>  
      <div class="ncfaqs_content">
        <?php if($content == 'truncate') :?>
        <?php echo substr( get_the_excerpt( get_the_ID() ), 0, $truncate );?><span class="ncfaqs_ell">&hellip;</span> <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="ncfaqs_rmore">Read more</a>
        <?php else :?>
        <?php the_content(get_the_ID());?>  
        <?php endif;?>
      </div>
      
			<?php endwhile; ?>
			</div>

			 <?php wp_reset_postdata();?>
			 <?php else : ?>
				<div class="ncfaqs">
					<div class="ncfaqs_header">No FAQs have been selected yet.</div>
					<div class="ncfaqs_content">Select some posts to add here.</div>
			 </div>
			<?php endif; // end loop ?>

			<?php if(function_exists('nc_after_content')) { nc_after_content(); } ?>
		</div>
	</div>

<style id="<?php echo $id; ?>-block-css">

<?php echo '#'.$id; ?>.ncfaqs_box {
	--box-padding: <?php echo $padding; ?>;
	--box-text-color: <?php echo $text_color; ?>;
	--box-bg-color: <?php echo $bg_color; ?>;
	--contain-max-width: <?php echo $width.'px'; ?>;
}

<?php echo '#'.$id; ?>.ncfaqs_box .ncontain {
	max-width: var(--contain-max-width);
}


#wpwrap <?php echo '#'.$id; ?> .ncfaqs_header + .ncfaqs_content {
  max-height:1500px;
  overflow:visible;
  padding:var(--content-padding);
  opacity:1;
  visibility:visible;
}

@media(max-width:<?php echo $mobile.'px'; ?>){

	<?php echo '#'.$id; ?> .ncfaqs {
		margin-left: var(--gapn);
    margin-right: var(--gapn);
	}

	<?php echo '#'.$id; ?> .ncfaqs_header,
	<?php echo '#'.$id; ?> .ncfaqs_content {
		border-left:0;
		border-right:0;
		padding-left:var(--gap);
		padding-right:var(--gap);
	}

	<?php echo '#'.$id; ?> .ncfaqs_header:not(:first-of-type) {
		border-top:none;
		margin-top:0;
	}

}

<?php if(get_field('custom_styles')):?> 
/* Custom CSS */
<?php the_field('custom_styles');?>
<?php endif;?>

</style>
    <?php
}
?>