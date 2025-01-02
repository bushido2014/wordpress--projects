<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_attorney
 */

get_header();
?>

	<section class="single-cases">
		<div class="container">
			<div class="single-image">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="single-cases__wrapp grid">
				
			<div class="single-cases__content">
				
		       <?php the_content();?>
				</div>
			<div class="single-cases__detail">
				<h2>Case Details</h2>
				<div class="cases-detail-item">
					<h3 class="cases-detail-title">Case Type</h3>
					<div class="cases-detail-content"><?php the_field('case_type'); ?></div>
				</div>
				<div class="cases-detail-item">
					<h3 class="cases-detail-title">Client</h3>
					<div class="cases-detail-content"><?php the_field('case_client'); ?></div>
				</div>
				<div class="cases-detail-item">
					<h3 class="cases-detail-title">Date</h3>
					<div class="cases-detail-content"><?php the_field('case_date'); ?></div>
				</div>
				<div class="cases-detail-item">
					<h3 class="cases-detail-title">Service Value</h3>
					<div class="cases-detail-content"><?php the_field('case_service_value'); ?></div>
				</div>
				<div class="cases-detail-item">
					<h3 class="cases-detail-title">Law Type</h3>
					<div class="cases-detail-content"><?php the_field('case_law_type'); ?></div>
				</div>
				<div class="cases-detail-item">
					<h3 class="cases-detail-title">Case Status</h3>
					<div class="cases-detail-content"><?php the_field('case_status'); ?></div>
				</div>
				<div class="cases-detail-item">
					<h3 class="cases-detail-title">Time Frame:</h3>
					<div class="cases-detail-content"><?php the_field('case_tyme_frame'); ?></div>
				</div>
				<div class="case-reward-item">
					<div class="case-reward-content">
						<div class="result-text">Result</div>
						<h4 class="reward-amount-title">$<?php the_field('case_amout'); ?></h4>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	

<?php

get_footer();
