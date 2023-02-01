<?php 
  get_header(); 
  $current_id = get_the_ID();
  $current_title = get_the_title();
  $countNumber = tutCount($current_id);
  //GET HTML
  // $html = file_get_html('http://'.$current_title);
  //META TAGS
  // $get_meta = getUrlData('http://'.$current_title);
  //title
  $site_title = get_site_title($current_title, $current_id);
  $site_title_count = mb_strlen($site_title, 'UTF-8');
  //description
  $site_description = get_site_description($current_title, $current_id);
  $site_description_count = mb_strlen($site_description, 'UTF-8');
  
  //lang
  $site_lang = get_site_lang($current_title, $current_id);
  //site_name
  $site_name = get_site_name($current_title, $current_id);
  //cms
  $site_cms = get_site_cms($current_title, $current_id);
?>

<main>
  <div class="container py-12">
    <div class="flex flex-wrap lg:-mx-6">
      <div class="w-full lg:w-2/3 lg:px-6 mb-10 lg:mb-0">
        <!-- breadcrumbs -->
        <div class="breadcrumbs text-sm text-gray-800 dark:text-gray-200 mb-4" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
          <ul class="flex items-center flex-wrap -mr-4">
            <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item px-4 pl-8">
              <a itemprop="item" href="<?php echo home_url(); ?>" class="text-blue-500">
                <span itemprop="name"><?php _e( 'Головна', 'treba-wp' ); ?></span>
              </a>                        
              <meta itemprop="position" content="1">
            </li>
            <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class="breadcrumbs_item px-4">
              <a itemprop="item" href="<?php echo get_post_type_archive_link('sites'); ?>" class="text-blue-500">
                <span itemprop="name"><?php _e( 'Сайти', 'treba-wp' ); ?></span>
              </a>                        
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-500 px-4">
              <span itemprop="name"><?php the_title(); ?></span>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
        </div>
        <!-- end breadcrumbs -->
        <div class="flex items-center mb-4">
          <div class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
            </svg>
          </div>
          <h1 class="text-3xl font-extrabold"><?php _e("Аудіт сайту", "treba-wp"); ?> <?php the_title(); ?></h1>
        </div>
        <div class="flex flex-col opacity-75 mb-6">
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
        <div class="bg-white rounded-lg shadow-lg p-6">
          <!-- Info -->
          <div class="flex items-center mb-6">
            <div class="relative mr-2">
              <div class="w-[18px] h-[18px] bg-blue-400"></div>
              <div class="w-[18px] h-[18px] absolute top-1 right-1 border-2 border-gray-900 rounded"></div>
            </div>  
            <h2 class="inline-block text-2xl font-bold"><?php _e("Інформація про сайт", "treba-wp"); ?></h2>
          </div>
          <div class="mb-6">
            <svg viewBox="0 0 78 20" fill="none" xmlns="http://www.w3.org/2000/svg" width="75"><path d="m2 13 8.4-9L26 16 39.2 4.9 53 16l9.3-10.2L76.4 16" stroke="#000" stroke-width="3"/></svg>
          </div>
          
          <div class="border border-gray-300 mb-12">
            <table class="w-full table-auto">
              <tbody class="text-sm">
                <?php if ($site_name): ?>
                <tr class="border-b border-gray-300 last:border-transparent">
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php _e("Назва сайту", "treba-wp"); ?></div>
                  </td>
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php echo $site_name; ?></div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php if ($site_title): ?>
                <tr class="border-b border-gray-300 last:border-transparent">
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php _e("Title сайту", "treba-wp"); ?></div>
                  </td>
                  <td class="px-2 py-3">
                    <div><?php echo $site_title; ?></div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php if ($site_description): ?>
                <tr class="border-b border-gray-300 last:border-transparent">
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php _e("Description сайту", "treba-wp"); ?></div>
                  </td>
                  <td class="px-2 py-3">
                    <div><?php echo $site_description; ?></div>
                  </td>
                </tr>
                <?php endif; ?>
                <tr class="border-b border-gray-300 last:border-transparent">
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php _e("Статус", "treba-wp"); ?></div>
                  </td>
                  <td class="whitespace-nowrap px-2 py-3">
                    <?php 
                    $status_site = carbon_get_the_post_meta('crb_site_whois_status');
                    if ($status_site === 'Занят'):
                    ?>
                      <span class="text-red-400"><?php _e("Зайнятий", "treba-wp"); ?></span>
                    <?php else: ?>
                      <span class="text-green-500"><?php _e("Вільний", "treba-wp"); ?></span>
                    <?php endif; ?>
                  </td>
                </tr>
                <tr class="border-b border-gray-300 last:border-transparent">
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php _e("Вік сайту", "treba-wp"); ?></div>
                  </td>
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php echo carbon_get_the_post_meta('crb_site_whois_age'); ?></div>
                  </td>
                </tr>
                <?php if ($site_lang): ?>
                <?php if ($site_lang != 'Невідомо'): ?>
                <tr class="border-b border-gray-300 last:border-transparent">
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php _e("Мова сайту", "treba-wp"); ?></div>
                  </td>
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php echo $site_lang; ?></div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php endif; ?>
                <?php if ($site_cms): ?>
                <?php if ($site_cms != '🤷‍♂️'): ?>
                <tr class="border-b border-gray-300 last:border-transparent">
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php _e("CMS сайту", "treba-wp"); ?></div>
                  </td>
                  <td class="whitespace-nowrap px-2 py-3">
                    <div><?php echo $site_cms; ?></div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
          <!-- END Info -->
          <!-- Rating -->
          <div class="mb-12">
            <div class="flex items-center mb-6">
              <div class="relative mr-2">
                <div class="w-[18px] h-[18px] bg-blue-400"></div>
                <div class="w-[18px] h-[18px] absolute top-1 right-1 border-2 border-gray-900 rounded"></div>
              </div>  
              <h2 class="inline-block text-2xl font-bold"><?php _e("Рейтинг та оцінки", "treba-wp"); ?></h2>
            </div>
            <div class="mb-6">
              <svg viewBox="0 0 78 20" fill="none" xmlns="http://www.w3.org/2000/svg" width="75"><path d="m2 13 8.4-9L26 16 39.2 4.9 53 16l9.3-10.2L76.4 16" stroke="#000" stroke-width="3"/></svg>
            </div>
            <div>
              <!-- Main -->
              <?php 
                $main_rating = main_rating($current_id);
                $width_rating = ($main_rating/5)*100; 
              ?>
              <div class="flex items-center mb-4">
                <div class="w-2/5 text-gray-600 font-bold whitespace-nowrap mr-6"><?php _e("Загальна оцінка", "treba-wp"); ?>: </div>
                <div class="rating-row w-full relative font-semibold">
                  <div class="flex items-center text-white text-sm text-center border bg-gray-300 rounded-xl py-1">
                    <div class="relative z-1" style="width:<?php echo $width_rating; ?>%">
                      <span><?php echo $main_rating; ?> / 5</span>
                    </div>
                    <div class="h-full absolute left-0 top-0 bg-black/70 border border-gray-700 rounded-xl text-center" style="width:<?php echo $width_rating; ?>%"></div>
                  </div>
                </div>
              </div>
              <!-- END Main -->
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
          </div>
          <!-- END Rating -->
          <!-- Показники сайту -->
          <div class="mb-12">
            <div class="flex items-center mb-6">
              <div class="relative mr-2">
                <div class="w-[18px] h-[18px] bg-blue-400"></div>
                <div class="w-[18px] h-[18px] absolute top-1 right-1 border-2 border-gray-900 rounded"></div>
              </div>  
              <h2 class="inline-block text-2xl font-bold"><?php _e("Показники сайту", "treba-wp"); ?></h2>
            </div>
            <div class="mb-6">
              <svg viewBox="0 0 78 20" fill="none" xmlns="http://www.w3.org/2000/svg" width="75"><path d="m2 13 8.4-9L26 16 39.2 4.9 53 16l9.3-10.2L76.4 16" stroke="#000" stroke-width="3"/></svg>
            </div>
            <div class="flex flex-wrap -mx-2">
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">Domain Rating: </span> <?php echo site_theme_meta($current_id, "site_meta_dr"); ?>/100</span>
                </div>
              </div>
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">Domain Authority: </span> <?php echo site_theme_meta($current_id, "site_meta_da"); ?></span>
                </div>
              </div>
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">Trust Rank: </span> <?php echo site_theme_meta($current_id, "site_meta_trust_rank"); ?></span>
                </div>
              </div>
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">Trust Flow: </span> <?php echo site_theme_meta($current_id, "site_meta_tf"); ?></span>
                </div>
              </div>
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">Citation Flow: </span> <?php echo site_theme_meta($current_id, "site_meta_cf"); ?></span>
                </div>
              </div>
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">cPR Score: </span> <?php echo site_theme_meta($current_id, "site_meta_cpr"); ?>/10</span>
                </div>
              </div>
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">Google PageRank: </span> <?php echo site_theme_meta($current_id, "site_meta_pr"); ?>/10</span>
                </div>
              </div>
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">PR-CY: </span> <?php echo site_theme_meta($current_id, "site_meta_prcy"); ?>/100</span>
                </div>
              </div>
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">ИКС: </span> <?php echo site_theme_meta($current_id, "site_meta_iks"); ?></span>
                </div>
              </div>
              <div class="px-2 mb-4">
                <div class="bg-gray-200 border rounded px-4 py-2">
                  <span class="font-bold">Semrush AS: </span> <?php echo site_theme_meta($current_id, "site_meta_as"); ?>/100</span>
                </div>
              </div>
            </div>
          </div>
          <!-- END Показники сайту -->
          <!-- Лічильники -->
          <div class="mb-12">
            <div class="flex items-center mb-6">
              <div class="relative mr-2">
                <div class="w-[18px] h-[18px] bg-blue-400"></div>
                <div class="w-[18px] h-[18px] absolute top-1 right-1 border-2 border-gray-900 rounded"></div>
              </div>  
              <h2 class="inline-block text-2xl font-bold"><?php _e("Лічильники на сайті", "treba-wp"); ?></h2>
            </div>
            <div class="mb-6">
              <svg viewBox="0 0 78 20" fill="none" xmlns="http://www.w3.org/2000/svg" width="75"><path d="m2 13 8.4-9L26 16 39.2 4.9 53 16l9.3-10.2L76.4 16" stroke="#000" stroke-width="3"/></svg>
            </div>
            <div class="border border-gray-300 mb-12">
              <table class="w-full table-auto">
                <tbody class="text-sm">
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Google Analytics</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <?php 
                        $check_ga = check_google_analytics($current_title, $current_id);
                        if ($check_ga === 'yes'): 
                      ?>
                        🟢 <?php _e("Є на сайті", "catalog-wp"); ?>
                      <?php else: ?>
                        🔴 <?php _e("Немає", "catalog-wp"); ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Yandex Metrika</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <?php 
                        $check_metrika = check_yandex_metrika($current_title, $current_id);
                        if ($check_metrika === 'yes'): 
                      ?>
                        🟢 <?php _e("Є на сайті", "catalog-wp"); ?>
                      <?php else: ?>
                        🔴 <?php _e("Немає", "catalog-wp"); ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                  <tr class="border-b border-gray-300 last:border-transparent">
                    <td class="whitespace-nowrap px-2 py-3">
                      <div>Facebook Pixel</div>
                    </td>
                    <td class="whitespace-nowrap px-2 py-3">
                      <?php 
                        $check_fp = check_facebook_pixel($current_title, $current_id);
                        if ($check_fp === 'yes'): 
                      ?>
                        🟢 <?php _e("Є на сайті", "catalog-wp"); ?>
                      <?php else: ?>
                        🔴 <?php _e("Немає", "catalog-wp"); ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Лічильники -->
          <!-- Whois -->
          <div>
            <div class="flex items-center mb-6">
              <div class="relative mr-2">
                <div class="w-[18px] h-[18px] bg-blue-400"></div>
                <div class="w-[18px] h-[18px] absolute top-1 right-1 border-2 border-gray-900 rounded"></div>
              </div>  
              <h2 class="inline-block text-2xl font-bold">WHOIS</h2>
            </div>
            <div class="mb-6">
              <svg viewBox="0 0 78 20" fill="none" xmlns="http://www.w3.org/2000/svg" width="75"><path d="m2 13 8.4-9L26 16 39.2 4.9 53 16l9.3-10.2L76.4 16" stroke="#000" stroke-width="3"/></svg>
            </div>
            <div>
              <div class="mb-2"><span class="font-semibold"><?php _e("Коли був зареестрований сайт", "treba-wp"); ?></span>: <?php echo carbon_get_the_post_meta('crb_site_whois_start'); ?></div>
              <div class="mb-2"><span class="font-semibold"><?php _e("До якої дати зареестрован домен", "treba-wp"); ?></span>: <?php echo carbon_get_the_post_meta('crb_site_whois_end'); ?></div>
              <div><span class="font-semibold"><?php _e("Реєстратор", "treba-wp"); ?></span>: <?php echo carbon_get_the_post_meta('crb_site_whois_registrator'); ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-6">
        <?php get_template_part('template-parts/sidebar'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>