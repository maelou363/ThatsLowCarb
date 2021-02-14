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
 
$thyme_kitchen_image_url = CHILD_URL . '/config/import/images/kitchen.jpg';
$thyme_cooking_image_url = CHILD_URL . '/config/import/images/cooking.jpg';
$thyme_couple_image_url  = CHILD_URL . '/config/import/images/couple.jpg';
$thyme_breakfast_image_url = CHILD_URL . '/config/import/images/breakfast.jpg';
$thyme_lunch_image_url     = CHILD_URL . '/config/import/images/lunch.jpg';
$thyme_dinner_image_url    = CHILD_URL . '/config/import/images/dinner.jpg';

$thyme_home2_content = <<<CONTENT
<!-- wp:atomic-blocks/ab-columns {"backgroundImgURL":"$thyme_cooking_image_url","focalPoint":{"x":0.4207920792079208,"y":0.2748146339699074},"columns":2,"layout":"ab-2-col-equal","align":"full","paddingTop":10,"paddingRight":2,"paddingBottom":10,"paddingLeft":2,"paddingUnit":"%","columnMaxWidth":1000} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal ab-background-cover ab-background-no-repeat ab-columns-center alignfull" style="padding-top:10%;padding-right:2%;padding-bottom:10%;padding-left:2%;background-image:url($thyme_cooking_image_url);background-position:42.07920792079208% 27.48146339699074%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1000px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"paddingUnit":"%","padding":5,"paddingTop":5,"paddingRight":15,"paddingBottom":5,"paddingLeft":15,"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner" style="padding-top:5%;padding-right:15%;padding-bottom:5%;padding-left:15%"><!-- wp:heading {"align":"center","level":4} -->
<h4 class="has-text-align-center">Subscribe and get 30 <strong>FREE</strong> dinner recipes!</h4>
<!-- /wp:heading -->

<!-- wp:html -->
YOUR CODE HERE
<!-- /wp:html --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","align":"full","paddingSync":true,"padding":5,"paddingTop":5,"paddingRight":2,"paddingBottom":2,"paddingLeft":2,"paddingUnit":"%","columnMaxWidth":1500,"className":"border"} -->
<div class="wp-block-atomic-blocks-ab-columns border ab-layout-columns-2 ab-2-col-equal ab-columns-center alignfull" style="padding:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1500px"><!-- wp:atomic-blocks/ab-column {"paddingSync":true,"paddingUnit":"%","padding":5,"paddingTop":5,"paddingBottom":5,"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner" style="padding:5%"><!-- wp:atomic-blocks/ab-post-grid {"postsToShow":1,"displayPostDate":false,"displayPostAuthor":false,"displaySectionTitle":true,"postLayout":"list","excerptLength":30,"sectionTitle":"Latest from the Blog","imageSize":"ab-block-post-grid-square"} /--></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-post-grid {"className":"is-style-overlay smaller-title","postsToShow":2,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"postTitleTag":"h4","offset":1,"sectionTitle":"Test","imageSize":"ab-block-post-grid-square"} /--></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideleft","align":"full","marginUnit":"%","paddingSync":true,"padding":5,"paddingUnit":"%","backgroundColor":"theme-secondary","columnMaxWidth":1200} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideleft has-theme-secondary-background-color ab-columns-center alignfull" style="padding:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"align":"left","id":79913,"width":300,"height":250,"sizeSlug":"full"} -->
<div class="wp-block-image"><figure class="alignleft size-full is-resized"><img src="$thyme_couple_image_url" alt="" class="wp-image-79913" width="300" height="250"/></figure></div>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"subtitle"} -->
<p class="subtitle">About the Author</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_kitchen_image_url","paddingUnit":"%","padding":15,"paddingTop":18,"paddingRight":5,"paddingBottom":15,"paddingLeft":5} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-background-cover ab-background-no-repeat" style="padding-top:18%;padding-right:5%;padding-bottom:15%;padding-left:5%;background-image:url($thyme_kitchen_image_url)"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius">Learn More</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideleft","columnsGap":3,"align":"full","marginTop":5,"marginUnit":"%","paddingRight":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1280,"className":"home-content-sidebar"} -->
<div class="wp-block-atomic-blocks-ab-columns home-content-sidebar ab-layout-columns-2 ab-2-col-wideleft ab-columns-center alignfull" style="margin-top:5%;padding-right:5%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-3 ab-is-responsive-column" style="max-width:1280px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-post-grid {"postsToShow":4,"displayPostDate":false,"displayPostAuthor":false,"displaySectionTitle":true,"postTitleTag":"h4","postLayout":"list","offset":3,"excerptLength":35,"sectionTitle":"Latest from the Blog","sectionTitleTag":"h3","imageSize":"ab-block-post-grid-square"} /-->

<!-- wp:button {"borderRadius":0,"align":"center","className":"is-style-outline"} -->
<div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link no-border-radius" href="/blog">More on the blog</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:shortcode -->
[get_sidebar id='block-sidebar']
<!-- /wp:shortcode --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingRight":5,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":1280} -->
<div style="padding-left:5%;padding-right:5%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1280px"><!-- wp:atomic-blocks/ab-post-grid {"categories":"230","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"postTitleTag":"h4","columns":3,"sectionTitle":"Latest Breakfast Recipes","sectionTitleTag":"h3","imageSize":"ab-block-post-grid-square"} /-->

<!-- wp:atomic-blocks/ab-post-grid {"categories":"232","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"postTitleTag":"h4","columns":3,"sectionTitle":"Latest Dinner Recipes","sectionTitleTag":"h3","imageSize":"ab-block-post-grid-square"} /--></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":3,"containerPaddingRight":5,"containerPaddingBottom":3,"containerPaddingLeft":5,"containerWidth":"full","className":"border"} -->
<div style="padding-left:5%;padding-right:5%;padding-bottom:3%;padding-top:3%" class="wp-block-atomic-blocks-ab-container border ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content"><!-- wp:heading {"align":"center","level":3} -->
<h3 class="has-text-align-center">Browse by Category</h3>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal","align":"full","paddingSync":true,"paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal alignfull"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_dinner_image_url","focalPoint":{"x":0.6371681415929203,"y":0.5199999640969669},"paddingUnit":"%","padding":5,"paddingTop":15,"paddingBottom":5} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-background-cover ab-background-no-repeat" style="padding-top:15%;padding-bottom:5%;background-image:url($thyme_dinner_image_url);background-position:63.716814159292035% 51.99999640969669%"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Recipes for Dinner</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_lunch_image_url","focalPoint":{"x":0.552,"y":0.6317646699793199},"paddingUnit":"%","paddingTop":15,"paddingBottom":5} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-background-cover ab-background-no-repeat" style="padding-top:15%;padding-bottom:5%;background-image:url($thyme_lunch_image_url);background-position:55.2% 63.17646699793199%"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Recipes for Lunch</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_breakfast_image_url","backgroundDimRatio":50,"focalPoint":{"x":0.4778761061946903,"y":0.596470552332261},"paddingUnit":"%","paddingTop":15,"paddingBottom":5} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-has-background-dim ab-has-background-dim-50 ab-background-cover ab-background-no-repeat" style="padding-top:15%;padding-bottom:5%;background-image:url($thyme_breakfast_image_url);background-position:47.78761061946903% 59.6470552332261%"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Recipes for Breakfast</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->
CONTENT;

return $thyme_home2_content;
