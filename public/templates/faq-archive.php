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


        <ul class="nhsuk-grid-row faq-list">  

            <?php foreach ( $terms as $key => $term ) : ?>

                <?php if( $term->parent === 0 ): ?>

                    <li class="nhsuk-grid-column-one-quarter">

                        <div class="nhsuk-promo">

                            <a class="nhsuk-promo__link-wrapper" href="<?php echo esc_url( get_term_link( $term->term_id ) ); ?>">
                                <div class="nhsuk-promo__content">

                                    <div class="nhsuk-card__content">

                                        <h3 class="nhsuk-promo__heading">
                                            <?php echo esc_html( $term->name ); ?>
                                        </h3>

                                        <?php if( $term->description ): ?>

                                            <div class="nhsuk-promo__description">
                                                <p><?php echo $term->description; ?></p>
                                            </div>
                                        <?php endif; ?>

                                        </div>
                                </div>
                            </a>

                        </div>

                    </li>

                <?php endif; ?>
            
            <?php endforeach; ?>

        </ul>

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