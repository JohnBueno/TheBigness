<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<?php $og_query = page_content('home'); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="The Bigness"/>
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/thebigness-facebook.jpg"/>
<meta property="og:site_name" content="The Bigness"/>
<meta property="og:description" content="<?php echo(strip_tags($og_query->queried_object->post_content)); ?>"/>
<meta property="og:url" content="http://www.thebignessband.com"/>
	
  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=389672247715481";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
