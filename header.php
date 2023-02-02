<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php 
    $current_title = wp_get_document_title();
    if ( is_singular( 'sites' ) ) {
      $site_url = get_the_title();
      if (get_locale() === 'uk') {
        $current_title = 'Повний аналіз сайту ' . $site_url . ': показники для SEO';
      } else {
        $current_title = 'Полный анализ сайта ' . $site_url . ': показатели для SEO';
      }
    }
  ?>
  <title><?php echo $current_title; ?></title>
  <?php if ($current_description): ?>
    <meta name="description" content="<?php echo $current_description; ?>"/>
  <?php endif; ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php echo carbon_get_theme_option('crb_google_analytics'); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="header bg-white border-b border-gray-200 py-4">
    <div class="container">
      <div class="flex justify-between items-center">
        <div class="logo text-xl text-white font-extrabold">
          <a href="<?php echo get_home_url(); ?>"><span class="text-blue-500">n</span><span class="text-yellow-400">Ukraine</span></a>
        </div>
        <div class="hidden lg:block">
          <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'div',
            'menu_class' => 'flex top-menu'
          ]); ?> 
        </div>
        <div class="hidden lg:block">
          <a href="/add" class="inline-block bg-blue-500 hover:bg-blue-600 rounded-lg text-white px-6 py-2"><?php _e("Додати", "treba-wp"); ?></a>
        </div>
        <div class="flex flex-col items-center lg:hidden text-sm text-gray-700 uppercase modal-js" data-modal="menu">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
          </svg>
          Меню
        </div>
      </div>
    </div>
  </header>
  
  <div class="wrap">