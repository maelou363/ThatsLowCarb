<?php
/**
 * Thyme Theme.
 *
 * Homepage content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */
 
$thyme_breakfast_image_url = CHILD_URL . '/config/import/images/breakfast.jpg';
$thyme_lunch_image_url     = CHILD_URL . '/config/import/images/lunch.jpg';
$thyme_dinner_image_url    = CHILD_URL . '/config/import/images/dinner.jpg';
$thyme_cooking_image_url = CHILD_URL . '/config/import/images/cooking.jpg';
$thyme_about_image_url = CHILD_URL . '/config/import/images/about.jpg';

$thyme_home1_content = <<<CONTENT
<!-- wp:atomic-blocks/ab-columns {"columns":4,"layout":"ab-4-col-equal","columnsGap":1,"align":"full","paddingRight":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1240} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-4 ab-4-col-equal ab-columns-center alignfull" style="padding-right:5%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-1 ab-is-responsive-column" style="max-width:1240px"><!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_dinner_image_url","focalPoint":{"x":0.6371681415929203,"y":0.5199999640969669},"paddingUnit":"%","padding":5,"paddingTop":50,"paddingBottom":2} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-background-cover ab-background-no-repeat" style="padding-top:50%;padding-bottom:2%;background-image:url($thyme_dinner_image_url);background-position:63.716814159292035% 51.99999640969669%"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Recipes</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_lunch_image_url","focalPoint":{"x":0.552,"y":0.6317646699793199},"paddingUnit":"%","paddingTop":50,"paddingBottom":2} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-background-cover ab-background-no-repeat" style="padding-top:50%;padding-bottom:2%;background-image:url($thyme_lunch_image_url);background-position:55.2% 63.17646699793199%"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Dinner ideas</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_breakfast_image_url","backgroundDimRatio":50,"focalPoint":{"x":0.4778761061946903,"y":0.596470552332261},"paddingUnit":"%","paddingTop":50,"paddingBottom":2} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-has-background-dim ab-has-background-dim-50 ab-background-cover ab-background-no-repeat" style="padding-top:50%;padding-bottom:2%;background-image:url($thyme_breakfast_image_url);background-position:47.78761061946903% 59.6470552332261%"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Instant Pot</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_cooking_image_url","paddingUnit":"%","paddingTop":50,"paddingBottom":2} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-background-cover ab-background-no-repeat" style="padding-top:50%;padding-bottom:2%;background-image:url($thyme_cooking_image_url)"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Gluten free</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"hasParallax":true,"columns":2,"layout":"ab-2-col-wideright","align":"full","marginSync":true,"margin":5,"marginUnit":"%","paddingSync":true,"padding":5,"paddingTop":3,"paddingBottom":3,"paddingUnit":"%","backgroundColor":"theme-secondary","columnMaxWidth":900} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideright ab-has-parallax has-theme-secondary-background-color ab-columns-center alignfull" style="margin-top:5%;margin-bottom:5%;padding:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:900px"><!-- wp:atomic-blocks/ab-column {"textAlign":"center","columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner" style="text-align:center"><!-- wp:paragraph {"className":"subtitle"} -->
<p class="subtitle">Never miss a recipe!</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"align":"center","level":3,"className":"no-margin"} -->
<h3 class="has-text-align-center no-margin">Subscribe and get 30 <strong>FREE</strong> dinner recipes!</h3>
<!-- /wp:heading --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"paddingUnit":"%","columnVerticalAlignment":"center","className":"light-text"} -->
<div class="wp-block-atomic-blocks-ab-column light-text ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:html -->
YOUR CODE HERE
<!-- /wp:html --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingRight":5,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":1280} -->
<div style="padding-left:5%;padding-right:5%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1280px"><!-- wp:atomic-blocks/ab-post-grid {"className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"postTitleTag":"h4","columns":4,"sectionTitle":"Most popular","imageSize":"vertical-entry-image"} /-->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"hasParallax":true,"columns":2,"layout":"ab-2-col-wideright","align":"full","marginSync":true,"marginUnit":"%","paddingSync":true,"padding":5,"paddingTop":3,"paddingBottom":3,"paddingUnit":"%","backgroundColor":"theme-secondary","columnMaxWidth":1240} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideright ab-has-parallax has-theme-secondary-background-color ab-columns-center alignfull" style="padding:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1240px"><!-- wp:atomic-blocks/ab-column {"textAlign":"center","paddingSync":true,"paddingUnit":"%","padding":5,"columnVerticalAlignment":"top"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-top"><div class="ab-block-layout-column-inner" style="padding:5%;text-align:center"><!-- wp:heading {"align":"left","level":4} -->
<h4 class="has-text-align-left">My favorite 30 minute meals</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lob.</p>
<!-- /wp:paragraph -->

<!-- wp:button {"borderRadius":0,"align":"left","className":"is-style-fill"} -->
<div class="wp-block-button alignleft is-style-fill"><a class="wp-block-button__link no-border-radius" href="/category/favs/">More Recipes</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"paddingSync":true,"paddingUnit":"%","padding":5,"columnVerticalAlignment":"center","className":"light-text"} -->
<div class="wp-block-atomic-blocks-ab-column light-text ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner" style="padding:5%"><!-- wp:atomic-blocks/ab-post-grid {"className":"smaller-title","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"postTitleTag":"h4","columns":3,"sectionTitle":"Recent Recipes","imageSize":"vertical-entry-image"} /--></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"hasParallax":true,"columns":2,"layout":"ab-2-col-wideright","align":"full","marginSync":true,"marginUnit":"%","padding":5,"paddingRight":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1240} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideright ab-has-parallax ab-columns-center alignfull" style="padding-right:5%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1240px"><!-- wp:atomic-blocks/ab-column {"textAlign":"center","columnVerticalAlignment":"top"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-top"><div class="ab-block-layout-column-inner" style="text-align:center"><!-- wp:image {"id":79914,"sizeSlug":"large","className":"is-style-offset-up"} -->
<figure class="wp-block-image size-large is-style-offset-up"><img src="$thyme_about_image_url" alt="" class="wp-image-79914"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"paddingUnit":"%","columnVerticalAlignment":"top"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-top"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":4} -->
<h4>Hi, it's nice to meet you!</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam  
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat  
volutpat. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
ullamcorper suscipit lob</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5} -->
<h5>Lauren</h5>
<!-- /wp:heading -->

<!-- wp:atomic-blocks/ab-spacer -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:button {"borderRadius":0,"align":"left","className":"is-style-outline"} -->
<div class="wp-block-button alignleft is-style-outline"><a class="wp-block-button__link no-border-radius" href="/about">More about Lauren</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideleft","columnsGap":3,"align":"full","marginTop":5,"marginUnit":"%","padding":5,"paddingRight":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1280,"className":"home-content-sidebar"} -->
<div class="wp-block-atomic-blocks-ab-columns home-content-sidebar ab-layout-columns-2 ab-2-col-wideleft ab-columns-center alignfull" style="margin-top:5%;padding-right:5%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-3 ab-is-responsive-column" style="max-width:1280px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-post-grid {"postsToShow":4,"displayPostDate":false,"displayPostAuthor":false,"displaySectionTitle":true,"postTitleTag":"h4","offset":3,"excerptLength":35,"sectionTitle":"Latest from the Blog","sectionTitleTag":"h3","imageSize":"vertical-entry-image"} /-->

<!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="/blog/">More recent recipes</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:shortcode -->
[get_sidebar id='block-sidebar']
<!-- /wp:shortcode -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->
CONTENT;

return $thyme_home1_content;
