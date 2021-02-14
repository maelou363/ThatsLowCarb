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

$thyme_home1_content = <<<CONTENT
<!-- wp:atomic-blocks/ab-container {"containerPaddingRight":5,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":1280} -->
<div style="padding-left:5%;padding-right:5%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1280px"><!-- wp:atomic-blocks/ab-post-grid {"className":"is-style-overlay smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"postTitleTag":"h4","columns":4,"sectionTitle":"Test","imageSize":"vertical-entry-image"} /-->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"hasParallax":true,"columns":2,"layout":"ab-2-col-wideright","align":"full","paddingSync":true,"padding":5,"paddingTop":3,"paddingBottom":3,"paddingUnit":"%","columnMaxWidth":900,"className":"border"} -->
<div class="wp-block-atomic-blocks-ab-columns border ab-layout-columns-2 ab-2-col-wideright ab-has-parallax ab-columns-center alignfull" style="padding:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:900px"><!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:heading {"align":"center","level":3,"className":"no-margin"} -->
<h3 class="has-text-align-center no-margin">Subscribe and get 30 <strong>FREE</strong> dinner recipes!</h3>
<!-- /wp:heading --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"paddingUnit":"%","columnVerticalAlignment":"center","className":"light-text"} -->
<div class="wp-block-atomic-blocks-ab-column light-text ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:html -->
YOUR CODE HERE
<!-- /wp:html --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideleft","columnsGap":3,"align":"full","marginTop":5,"marginUnit":"%","paddingRight":5,"paddingLeft":5,"paddingUnit":"%","columnMaxWidth":1280,"className":"home-content-sidebar"} -->
<div class="wp-block-atomic-blocks-ab-columns home-content-sidebar ab-layout-columns-2 ab-2-col-wideleft ab-columns-center alignfull" style="margin-top:5%;padding-right:5%;padding-left:5%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-3 ab-is-responsive-column" style="max-width:1280px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:atomic-blocks/ab-post-grid {"displayPostDate":false,"displayPostAuthor":false,"displaySectionTitle":true,"postTitleTag":"h4","offset":4,"excerptLength":35,"sectionTitle":"Latest from the Blog","sectionTitleTag":"h3","imageSize":"vertical-entry-image"} /-->

<!-- wp:atomic-blocks/ab-post-grid {"categories":"232","className":"smaller-title","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"postTitleTag":"h4","columns":3,"sectionTitle":"Latest Dinner Recipes","sectionTitleTag":"h3","imageSize":"vertical-entry-image"} /-->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:shortcode -->
[get_sidebar id='block-sidebar']
<!-- /wp:shortcode --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal","align":"full","paddingSync":true,"padding":3,"paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal alignfull" style="padding:3%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_dinner_image_url","focalPoint":{"x":0.6371681415929203,"y":0.5199999640969669},"paddingUnit":"%","padding":5,"paddingTop":15,"paddingBottom":5} -->
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
<!-- /wp:atomic-blocks/ab-columns -->
CONTENT;

return $thyme_home1_content;
