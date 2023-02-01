<?php 
  $current_id = get_the_ID();
?>

<div class="relative bg-white shadow rounded-lg mb-6">
  <div class="flex justify-between items-center bottom-dashed-border p-4 mb-2">
    <div class="text-lg font-bold">
      💻 Сайт <?php the_title(); ?>
    </div>
    <div class="text-lg text-gray-500 ml-3">
      👍🏻 - <?php echo get_post_meta( $current_id, 'site_main_rating', true ); ?>
    </div>
  </div>
  <div class="p-4">
    <?php 
      $title_site = get_post_meta( $current_id, 'check_site_title', true ); 
      if ($title_site):
    ?>
    <div class="flex flex-col lg:flex-row mb-8">
      <div class="font-semibold mb-2 lg:mb-0 mr-0 lg:mr-2">Title сайта:</div>
      <div><?php echo $title_site; ?></div>
    </div>
    <?php endif; ?>
    <!-- SEO -->
    <div class="flex items-center mb-4">
      <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("SEO рейтинг", "treba-wp"); ?>: </div>
      <div class="rating-row w-full relative font-semibold">
        <div class="flex items-center text-white text-sm text-center border bg-gray-300 rounded-xl py-1">
          <div class="relative z-1" style="width:<?php echo common_rating($current_id); ?>%">
            <span><?php echo common_rating($current_id); ?> / 100</span>
          </div>
          <div class="h-full absolute left-0 top-0 bg-black/70 border border-gray-700 rounded-xl text-center" style="width:<?php echo common_rating($current_id); ?>%"></div>
        </div>
      </div>
    </div>
    <!-- END SEO -->
    <!-- Дизайн -->
    <div class="flex items-center mb-4">
      <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Дізайн сайту", "treba-wp"); ?>: </div>
      <div class="rating-row w-full relative font-semibold">
        <div class="flex items-center text-white text-sm text-center border bg-gray-300 rounded-xl py-1">
          <div class="relative z-1" style="width:<?php echo design_rating($current_id); ?>%">
            <span><?php echo design_rating($current_id); ?> / 100</span>
          </div>
          <div class="h-full absolute left-0 top-0 bg-black/70 border border-gray-700 rounded-xl text-center" style="width:<?php echo design_rating($current_id); ?>%"></div>
        </div>
      </div>
    </div>
    <!-- END Дизайн -->
    <!-- Текст -->
    <div class="flex items-center">
      <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Зміст сайту", "treba-wp"); ?>: </div>
      <div class="rating-row w-full relative font-semibold">
        <div class="flex items-center text-white text-sm text-center border bg-gray-300 rounded-xl py-1">
          <div class="relative z-1" style="width:<?php echo text_rating($current_id); ?>%">
            <span><?php echo text_rating($current_id); ?> / 100</span>
          </div>
          <div class="h-full absolute left-0 top-0 bg-black/70 border border-gray-700 rounded-xl text-center" style="width:<?php echo text_rating($current_id); ?>%"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-col-reverse lg:flex-row lg:items-center lg:justify-between p-4">
    <div><a href="<?php the_permalink(); ?>" class="inline-block hover:bg-blue-500 hover:text-white relative text-lg border-2 border-blue-500 rounded-xl px-8 py-3"><?php _e("Детальніше про сайт", "treba-wp"); ?> <?php the_title(); ?></a></div>
    <div class="flex flex-col items-end mb-2 lg:mb-0 opacity-75">
      <div class="flex items-center mb-2">
        <div class="mr-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
        <?php _e("Переглядів", "treba-wp"); ?>: <?php echo get_post_meta( $current_id, 'item_count', true ); ?>
      </div>
      <div class="flex items-center">
        <div class="mr-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
          </svg>
        </div>
        <div><?php _e("Оновлено", "treba-wp"); ?>: <?php echo get_the_modified_time('F j, Y'); ?></div>
      </div>
    </div>
  </div>
</div>