<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nightingale_2.0
 */

get_header();
?>

<div id="primary" class="nhsuk-width-container nhsuk-grid-row">
    <header class="page-header">

        <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

        </h1>
    </header><!-- .page-header -->

    <?php

    $terms = get_terms( array(
        'taxonomy' => 'faq_categories',
    ) );



    if( ! is_tax() && count( $terms ) > 0 ): ?>

        <div class="nhsfaq-terms">

        <?php foreach ( $terms as $key => $term ) : ?>

            <?php if( $term->parent === 0 ): ?>

                <a href="<?php echo esc_url( get_term_link( $term->term_id ) ); ?>" class="nhsfaq-term">

                    <span class="nhsfaq-term-txt">
                        <svg class="nhsuk-icon nhsuk-icon__arrow-right-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                          <path d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M12 2a10 10 0 0 0-9.95 9h11.64L9.74 7.05a1 1 0 0 1 1.41-1.41l5.66 5.65a1 1 0 0 1 0 1.42l-5.66 5.65a1 1 0 0 1-1.41 0 1 1 0 0 1 0-1.41L13.69 13H2.05A10 10 0 1 0 12 2z"></path>
                        </svg>
                        <span class="nhsuk-action-link__text"><?php echo esc_html( $term->name ); ?></span>
                    </span>

                </a>

            <?php endif; ?>
        
        <?php endforeach; ?>

        </div>

    <?php else: ?>     

        <?php if ( have_posts() ) : ?>

            <form method="get" action="" id="faqsearch" class="nhsuk-header__search-form">
                <div class="autocomplete-container" id="autocomplete-container">
                    <div class="autocomplete__wrapper" role="combobox" aria-expanded="false">
                        <input type='search' placeholder="Search FAQs" class="search-field__listbox autocomplete__input">
                    </div>
                </div>
            </form>

            <hr />

        	<?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();

                ?>
                <div class="faqslisting">
                    <details class="nhsuk-details">
                        <summary class="nhsuk-details__summary">
                            <span class="nhsuk-details__summary-text"><?php the_title(); ?></span>
                        </summary>
                        <div class="nhsuk-details__text">
                            <?php the_content(); ?>
                        </div>
                    </details>
                </div>


            <?php
            endwhile;


        endif; ?>

    <?php endif; ?>

</div>


<?php

get_footer();