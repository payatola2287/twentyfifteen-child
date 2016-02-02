<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$themeOptions = TitanFramework::getInstance( 'una' );
$searchEnable = $themeOptions->getOption( 'display_search' );

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
	<div id="secondary" class="secondary">
        <?php if( $searchEnable ) : ?>
            <form method ="get" action="<?php echo get_site_url(); ?>" class="search-form sidebar-form">
                <input type="text" name="s" id="search" placeholder="Search..." />
                <button class="search-button"><span class="dashicons dashicons-search"></span></button>
            </form>
        <?php endif; ?>
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-navigation" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		

	</div><!-- .secondary -->

<?php endif; ?>
