<?php get_header(); ?>

  <section class="max-w-6xl mx-auto">
    <div class="py-8 px-4">
      <div class="flex flex-col md:flex-row -mx-4">
        <div class="px-4 lg:pr-40 flex-1">
          <div class="grid gap-4">
            <div class="flex-1 grid gap-4">
              <h2 class="text-4xl font-bold">
                What is Global Leadership Coaching for Entrepreneurs?
              </h2>
              <img src="<?= get_template_directory_uri() . '/assets/images/GEO_COACHING_LP.jpg' ?>" srcset="<?= get_template_directory_uri() . '/assets/images/GEO_COACHING_LP.jpg' ?> 1x, <?= get_template_directory_uri() . '/assets/images/GEO_COACHING_LP@2x.jpg' ?> 2x" alt="Geo Coaching Globe"/>
              <p>Global Leadership Coaching for entrepreneurs is a vital and indispensable investment in your future company, whether you are an entrepreneur launching your first business, a serial entrepreneur working on a new venture or an intrapreneur seeking to innovate within your organisation. Global Entrepreneur Coaching helps you:</p>
              <ul class="list-disc list-inside">
                <li>Face complex challenges thanks to its global approach.</li>
                <li>Bring your vision into consciousness.</li>
                <li>Develop your leadership.</li>
                <li>Forge it into a global culture and strategy for your international business.</li>
              </ul>
              <p>Through individual/team-coaching and consulting, we equip you with the vital tools needed to recruit and build innovating teams and scalable company cultures.</p>
              <p>Curious? Sign up for our newsletter to receive key insights from the field and benefit from our complimentary webinars.</p>
            </div>
          </div>
        </div>
        <div class="w-full mt-4 md:mt-0 md:max-w-sm">

        </div>
      </div>
    </div>
  </section>

  <section class="bg-faint">
    <div class="max-w-6xl mx-auto">
      <div class="py-8 px-4">
        <div class="grid gap-12">
          <h3 class="text-4xl font-bold">
            Don't just take our word for it
          </h3>
          <div class="flex flex-col md:flex-row -my-4 -mx-4">
            <div class="p-4 flex-1">
              <div class="grid">
                <div class="flex mb-2 text-blue">
                  <?php for($i = 0; $i < 5; $i++) { ?>
                    <?php get_template_part('template-parts/star-rating') ?>
                  <?php } ?>
                </div>
                <p class="mb-2">
                  "Geo Coaching???s partnership creates a progressive balance between coaching, mentoring, informing and challenging that has helped me, and the team, create the right relationships with our board (allowing us to move key strategic initiatives forward in a much more comprehensive and effective manner) and has helped me personally grow my leadership capability, credibility and results. (...) I, my team and our board could not be more pleased with the relationship and the demonstrable results."
                </p>
                <p class="grid">
                  <strong>N.A.G.</strong>
                  General Director of an organisation in the Energy industry.
                </p>
              </div>
            </div>
            <div class="p-4 flex-1">
              <div class="grid">
                <div class="flex mb-2 text-blue">
                  <?php for($i = 0; $i < 5; $i++) { ?>
                    <?php get_template_part('template-parts/star-rating') ?>
                  <?php } ?>
                </div>
                <p class="mb-2">
                  "Geo Coaching has helped me make the best business decisions that are aligned with my values and mission. Geo Coaching has not only been there to make my business strive but has helped bring out my own full potential along the way. I would love everyone to experience this feeling of knowing what is possible when you take time to line up personal vision with business objectives."
                </p>
                <p class="grid">
                  <strong>T.M.N.</strong>
                  CEO and Founder of a startup in the Food industry.
                </p>
              </div>
            </div>
            <div class="p-4 flex-1">
              <div class="grid">
                <div class="flex mb-2 text-blue">
                  <?php for($i = 0; $i < 5; $i++) { ?>
                    <?php get_template_part('template-parts/star-rating') ?>
                  <?php } ?>
                </div>
                <p class="mb-2">
                  "After years of being on the receiving end of generic leadership training in corporates, I was intrigued and somewhat suspicious to understand how coaching could help me in my own business. I???m so pleased I did! Geo Coaching has allowed me to evolve my business and strategy in a structured and logical manner. My coach asks the right questions and has a depth of insight that I have found invaluable. I have evolved my commercial strategy and marketing collateral with their guidance and this has proved immensely useful in allowing me to pivot my business and services in challenging market conditions."
                </p>
                <p class="grid">
                  <strong>S.D.</strong>
                  Founder and Managing Director of a company in the Recruitment industry.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
