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

<div id="primary" class=" nhsuk-grid-row">
    <header class="page-header">

        <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

        </h1>
    </header><!-- .page-header -->



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

</div>


<?php

get_footer();