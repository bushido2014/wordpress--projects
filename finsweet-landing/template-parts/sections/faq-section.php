<section class="faq">
      <div class="container">
        <div class="faq-wrapper grid">
          <div class="faq-item">
            <h2><?php the_field("faq_title", "option") ?></h2>
            <a href="/" class="style-link"
              ><?php the_field("faq_text", "option") ?></a
            >
          </div>
          <div class="faq-item">
            <div class="accordion-column">
         <?php if (have_rows("faq_accordion","option")) : ?>
    <?php while (have_rows("faq_accordion","option")) : the_row(); ?>
              <div class="accordion">
                <div class="flex">
                  <div class="nummer"><?php the_sub_field("faq_number") ?></div>
                  <div><h3><?php the_sub_field("faq_title") ?></h3></div>
                </div>
              </div>
              <div class="accordion-body">
                <p>
                  <?php the_sub_field("faq_description") ?>
                </p>
              </div>
          <?php endwhile; ?>
          <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>