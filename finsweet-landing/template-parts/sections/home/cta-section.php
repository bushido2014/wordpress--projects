<section class="cta">
      <div class="container">
        <div class="cta-wrapp flex">
          <div class="cta-column content">
            <h2><?php the_field("cta_title") ?></h2>
            <div>
             <?php the_field("cta_text") ?>
            </div>
          </div>
          <div class="cta-column form">
            <h3><?php the_field("cta_form_title") ?></h3>
            <div>
              <?php the_field("cta_form_text") ?>
            </div>

           <?php echo do_shortcode('[contact-form-7 id="27"]');?>
          </div>
        </div>
      </div>
    </section>