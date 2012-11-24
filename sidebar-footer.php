<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
$active = 0;
if(is_active_sidebar('sidebar-3'))
    ++$active;
if(is_active_sidebar('sidebar-4'))
    ++$active;
if(is_active_sidebar('sidebar-5'))
    ++$active;

if($active == 0)
    return;

$span = 12/$active;
?>
<div id="supplementary" class="row-fluid">
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="first" class="span<?php echo $span; ?> widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div id="second" class="span<?php echo $span; ?> widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
	<div id="third" class="span<?php echo $span; ?> widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
	</div>
	<?php endif; ?>
</div>
