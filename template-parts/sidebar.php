<?php 
$all_sites_args = array(
  'post_type' => 'sites',
  'orderby' => 'date',
  'posts_per_page' => 10,
);
// $all_sites_args['meta_query'][] = array('key' => '_crb_post_mainhide',  'compare' => 'NOT EXISTS');
// $all_sites_args['posts_per_page'] = 5;
// $sites = new WP_Query($all_sites_args);
?>

<div class="bg-white shadow-xl box mb-12">
  <div class="flex items-center justify-center p-4 mb-4">
    <div class="relative rotate-45 mr-2">
      <div class="w-[20px] h-[20px] rounded-full bg-yellow-300"></div>
      <div class="w-[20px] h-[20px] rounded-full absolute top-1 right-1 border-2 border-gray-900"></div>
    </div>
    <div class="text-2xl font-semibold"><?php _e("Категорії", "treba-wp"); ?></div>
  </div>
  <div class="px-4 pb-4">
    <ul>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-wordpress'); ?>">⚫ WordPress</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-joomla'); ?>">⚫ Joomla</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-prom'); ?>">⚫ Prom</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-drupal'); ?>">⚫ Drupal</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-opencart'); ?>">⚫ OpenCart</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-prestashop'); ?>">⚫ Prestashop</a></li>
      <li class="text-lg mb-2"><a href="<?php echo get_page_url('page-tilda'); ?>">⚫ Tilda</a></li>
      <li class="text-lg"><a href="<?php echo get_page_url('page-horoshop'); ?>">⚫ Хорошоп</a></li>
    </ul>
  </div>
</div>

<div class="bg-white shadow-xl box mb-12">
  <div class="flex items-center justify-center p-4 mb-4">
    <div class="relative rotate-45 mr-2">
      <div class="w-[20px] h-[20px] bg-orange-400"></div>
      <div class="w-[20px] h-[20px] absolute top-1 right-1 border-2 border-gray-900 rounded"></div>
    </div>
    <div class="text-2xl font-semibold"><?php _e("Популярні сайти", "treba-wp"); ?></div>
  </div>
  <div class="px-4 pb-4">
    <?php 
    $new_sites = new WP_Query( array(
      'post_type' => 'sites',
      'posts_per_page' => 10,
      'orderby' => 'rand',
    ));
    ?>
    <?php if ($new_sites->have_posts()) : while ($new_sites->have_posts()) : $new_sites->the_post(); ?>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="<?php the_permalink(); ?>">🔷 <?php the_title(); ?></a></div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<div class="bg-white shadow-xl box mb-12">
  <div class="flex items-center justify-center p-4 mb-4">
    <div class="relative mr-2">
      <div class="w-[20px] h-[20px] bg-green-400"></div>
      <div class="w-[20px] h-[20px] absolute top-1 right-1 border-2 border-gray-900 rounded"></div>
    </div>
    <div class="text-2xl font-semibold"><?php _e("Зараз переглядають", "treba-wp"); ?></div>
  </div>
  <div class="px-4 pb-4">
    <?php 
    $new_sites = new WP_Query( array(
      'post_type' => 'sites',
      'posts_per_page' => 10,
      'orderby' => 'rand',
    ));
    ?>
    <?php if ($new_sites->have_posts()) : while ($new_sites->have_posts()) : $new_sites->the_post(); ?>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0"><a href="<?php the_permalink(); ?>">🔶 <?php the_title(); ?></a></div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>


<div class="bg-white shadow-xl box mb-12">
  <div class="flex items-center justify-center p-4 mb-4">
    <div class="relative mr-2">
      <div class="w-[20px] h-[20px] bg-blue-400"></div>
      <div class="w-[20px] h-[20px] absolute top-1 right-1 border-2 border-gray-900 rounded"></div>
    </div>
    <div class="text-2xl font-semibold"><?php _e("Зараз шукають", "treba-wp"); ?></div>
  </div>
  <div class="px-4 pb-4">
    <?php if ( is_home() ): ?>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">🟩 <a href="https://webgolovolomki.com/">webgolovolomki.com</a></div>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">🟩 <a href="https://tarakan.org.ua/">tarakan.org.ua</a></div>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">🟩 <a href="https://s-cast.ua/">s-cast.ua</a></div>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">🟩 <a href="https://auto-future.land/">auto-future.land</a></div>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">🟩 <a href="https://treba-solutions.com/">treba-solutions.com</a></div>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">🟩 <a href="https://sdamkvartiry.com/">sdamkvartiry.com</a></div>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">🟩 <a href="https://d-art.org.ua/">d-art.org.ua</a></div>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">🟩 <a href="https://priazovka.com/">priazovka.com</a></div>
      <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">🟩 <a href="https://speakwell.ua/">speakwell.ua</a></div>
    <?php else: ?>
      <?php 
        $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $super_links = super_links($current_url);
        foreach ($super_links as $super_link):
      ?>
        <div class="text-lg border-b border-gray-200 last:border-transparent pb-2 mb-2 last:mb-0 last:pb-0">
          🟩 <?php echo $super_link->top_links; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>


<div class="bg-white shadow-xl box mb-12">
  <div class="flex items-center justify-center p-4 mb-4">
    <div class="relative mr-2">
      <div class="w-[20px] h-[20px] bg-emerald-500"></div>
      <div class="w-[20px] h-[20px] absolute top-1 right-1 border-2 border-gray-900 rounded"></div>
    </div>
    <div class="text-2xl font-semibold"><?php _e("Цікаві статті", "treba-wp"); ?></div>
  </div>
  <div class="px-4 pb-4">
    <div class="flex items-center">
      <div class="mr-2">
        <img src="https://www.nissan-ukraine.com/wp-content/uploads/2023/05/about-cctv.jpeg" class="w-[52px] min-w-[52px] h-[52px] min-h-[52px] object-cover rounded" loading="lazy" alt="Видеонаблюдение в частном доме">
      </div>
      <div><a href="https://icatalog.pro/13154-ustanovka-videonabljudenija-ot-ohrannogo-agentstva-centr-v-odesse/" class="hover:text-blue-600">Установка видеонаблюдения от охранного агентства «Центр» в Одессе</a></div>
    </div>
  </div>
</div>

