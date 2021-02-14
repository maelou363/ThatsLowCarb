<?php
/**
 * Thyme Theme.
 *
 * Category Index content optionally installed after theme activation.
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

return <<<CONTENT
<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><div class="wp-block-group__inner-container"><!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal","columnsGap":0,"align":"full","paddingSync":true,"paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal alignfull"><div class="ab-layout-column-wrap ab-block-layout-column-gap-0 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_breakfast_image_url","focalPoint":{"x":0.6371681415929203,"y":0.5199999640969669},"paddingUnit":"%","padding":5,"paddingTop":15,"paddingBottom":5} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-background-cover ab-background-no-repeat" style="padding-top:15%;padding-bottom:5%;background-image:url($thyme_breakfast_image_url);background-position:63.716814159292035% 51.99999640969669%"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Breakfast</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_lunch_image_url","focalPoint":{"x":0.552,"y":0.6317646699793199},"paddingUnit":"%","paddingTop":15,"paddingBottom":5} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-background-cover ab-background-no-repeat" style="padding-top:15%;padding-bottom:5%;background-image:url($thyme_lunch_image_url);background-position:55.2% 63.17646699793199%"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Lunch</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"backgroundImgURL":"$thyme_dinner_image_url","backgroundDimRatio":50,"focalPoint":{"x":0.4778761061946903,"y":0.596470552332261},"paddingUnit":"%","paddingTop":15,"paddingBottom":5} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner ab-has-background-dim ab-has-background-dim-50 ab-background-cover ab-background-no-repeat" style="padding-top:15%;padding-bottom:5%;background-image:url($thyme_dinner_image_url);background-position:47.78761061946903% 59.6470552332261%"><!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Dinner</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div>
<!-- /wp:group -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","paddingSync":true,"padding":2,"paddingUnit":"%","columnMaxWidth":800} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal ab-columns-center" style="padding:2%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:800px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:paragraph {"className":"no-margin"} -->
<p class="no-margin">Search by Category</p>
<!-- /wp:paragraph -->

<!-- wp:categories {"align":"center","displayAsDropdown":true} /--></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:search {"label":"Search by Ingredient"} /--></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-container -->
<div class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content"><!-- wp:atomic-blocks/ab-post-grid {"categories":"230","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"columns":4,"sectionTitle":"Breakfast","imageSize":"vertical-entry-image"} /--></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container -->
<div class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content"><!-- wp:atomic-blocks/ab-post-grid {"categories":"232","postsToShow":3,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"columns":3,"sectionTitle":"Dinner","imageSize":"vertical-entry-image"} /-->

<!-- wp:atomic-blocks/ab-post-grid {"categories":"233","className":"is-style-overlay smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"columns":4,"sectionTitle":"Drinks","imageSize":"vertical-entry-image"} /--></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerMarginTop":5} -->
<div style="margin-top:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content"><!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","marginBottom":10} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal" style="margin-bottom:10px"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"paddingSync":true,"paddingUnit":"%","padding":5,"columnVerticalAlignment":"center","className":"border"} -->
<div class="wp-block-atomic-blocks-ab-column border ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner" style="padding:5%"><!-- wp:heading {"align":"center","level":4} -->
<h4 class="has-text-align-center">Latest Breakfast Recipes</h4>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:atomic-blocks/ab-post-grid {"categories":"230","className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"imageSize":"vertical-entry-image"} /-->

<!-- wp:button {"borderRadius":0,"align":"center","className":"full"} -->
<div class="wp-block-button aligncenter full"><a class="wp-block-button__link no-border-radius" href="#">See More</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column {"paddingSync":true,"paddingUnit":"%","padding":5,"className":"border"} -->
<div class="wp-block-atomic-blocks-ab-column border ab-block-layout-column"><div class="ab-block-layout-column-inner" style="padding:5%"><!-- wp:heading {"align":"center","level":4} -->
<h4 class="has-text-align-center">Latest Dessert Recipes</h4>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:atomic-blocks/ab-post-grid {"categories":"231","className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"imageSize":"vertical-entry-image"} /-->

<!-- wp:button {"borderRadius":0,"align":"center","className":"full"} -->
<div class="wp-block-button aligncenter full"><a class="wp-block-button__link no-border-radius" href="#">See More</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->
CONTENT;
