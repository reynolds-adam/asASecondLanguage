<?php
/* Front Page Template */
        get_header();

?>

<section class="mission">
                <div class="mission-text">
                    <h2>Our Mission</h2>
                    <p> The purpose of this business and site is to not only walk you through
                         the fundamentals of the English language, but also give you the courage and confidence
                        in your individual lives to know on a deep level that adopting a new skill is possible 
                        for you.
                    </p>
                </div>
</section>
            
        <section class="features">
            <h2>What We Do</h2>
            <figure>
                    <img src="<?php bloginfo('template_url') ?>/images/bookface.jpg" alt="Girl reading a book too close to her face">
                    <figcaption>Learn English</figcaption>
            </figure>
            <figure>
                    <img src="<?php bloginfo('template_url') ?>/images/candlemap.jpg" alt="Candle sitting on a map">
                    <figcaption>wherever you are</figcaption>
            </figure>
            <figure>
                    <img src="<?php bloginfo('template_url') ?>/images/girlonline.jpg" alt="Girl working on computer">
                    <figcaption>online</figcaption>
            </figure>
        </section>


<?php get_footer (); ?>

