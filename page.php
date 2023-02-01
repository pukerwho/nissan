<?php get_header(); ?>

<?php 
/*
Template Name: Best
*/
get_header(); 
?>

<?php get_header(); ?>

<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="welcome relative py-10 mb-12">
    <?php get_template_part("template-parts/welcome-svg"); ?>
    <div class="container">
      <div class="text-center">
        <h1 class="text-5xl lg:text-6xl relative font-black mb-8 z-1">
          <?php the_title(); ?>
        </h1>
        <div class="mb-8">
          <svg class="mx-auto" width="227" height="13" viewBox="0 0 227 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M96.3619 1.24501C85.7026 1.67167 75.1685 2.19628 64.896 2.76982C50.3541 3.58116 35.8179 4.42049 21.3693 5.74942C16.8211 6.16908 12.2025 6.43485 7.68283 6.95943C4.84566 7.28816 1.08364 7.75672 0.589927 7.85464C0.331692 7.91059 0.219033 7.99461 0.18263 8.02258C-0.073329 8.21842 -0.0266259 8.40719 0.117849 8.55407C0.175866 8.61702 0.322575 8.77096 0.729835 8.79194C27.9662 10.2258 55.8168 7.42805 83.0862 7.13429C130.376 6.63069 179.099 8.63108 226.014 12.9956C226.423 13.0305 226.821 12.8556 226.878 12.5968C226.947 12.345 226.651 12.1002 226.241 12.0653C179.247 7.69378 130.444 5.68639 83.0634 6.19698C57.6495 6.46976 31.7339 8.92483 6.28471 8.08551C6.86944 8.01556 7.44282 7.94559 7.96611 7.88264C12.4676 7.35807 17.0669 7.0993 21.5968 6.67964C36.0147 5.35071 50.5213 4.51139 65.0439 3.70704C83.0634 2.69985 101.868 1.83255 120.82 1.42687C127.6 1.48982 134.358 1.5528 141.115 1.62974C155.733 1.7976 170.419 2.28721 185.003 2.94468C189.395 3.14751 193.786 3.35733 198.177 3.53918C199.633 3.60213 203.387 3.78395 203.91 3.76996C204.559 3.75598 204.684 3.42028 204.695 3.36432C204.729 3.23842 204.707 3.06356 204.388 2.91667C204.354 2.89569 204.149 2.8257 203.694 2.78374C177.177 0.307738 148.862 -0.104864 120.843 0.489656C91.2882 0.230865 61.6197 0.118904 32.14 0C31.718 0 31.3733 0.209861 31.3699 0.468652C31.3676 0.727443 31.7077 0.937311 32.1298 0.944305C53.4756 1.02824 74.9296 1.11212 96.3619 1.24501Z" fill="#132763"/>
          </svg>
        </div>
        <!-- breadcrumbs -->
        <div class="breadcrumbs text-sm text-gray-800 dark:text-gray-200 mb-4" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
          <ul class="flex justify-center items-center flex-wrap -mr-4">
            <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item px-4 pl-8">
              <a itemprop="item" href="<?php echo home_url(); ?>" class="text-blue-500">
                <span itemprop="name"><?php _e( 'Головна', 'treba-wp' ); ?></span>
              </a>                        
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-500 px-4">
              <span itemprop="name"><?php the_title(); ?></span>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
        <!-- end breadcrumbs -->
      </div>
    </div>
  </div>

  <div class="container">
    <div class="flex flex-wrap lg:-mx-6">
      <div class="w-full lg:w-2/3 lg:px-6 mb-10 lg:mb-0">
        <div class="content bg-white rounded-lg p-6">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="w-full lg:w-1/3 lg:px-6">
        <?php get_template_part('template-parts/sidebar'); ?>
      </div>
    </div>
  </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>

<main>
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="bg-white rounded-lg p-8">
      <div class="flex justify-center ">
        <div class="relative">
          <h1 class="relative text-4xl lg:text-5xl font-bold mb-6 z-1"><?php the_title(); ?></h1>
          <div class="w-full absolute left-0 bottom-[16px] ">
            <svg class="mx-auto" viewBox="0 0 223 17" fill="none">
              <path opacity="0.5" d="M2 11.3686C17.6603 8.02778 33.9464 6.93097 49.9106 6.13771C76.6733 4.80789 103.638 4.48984 130.396 6.01883C154.367 7.38859 178.015 10.6844 201.964 7.92099C208.097 7.21339 216.371 7.08879 222.413 7.08879" stroke="#ECA674" stroke-width="10" stroke-linejoin="round"></path>
            </svg>
          </div>
        </div>
      </div>
      <div class="content">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>