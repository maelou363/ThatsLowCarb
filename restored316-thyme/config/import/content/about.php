<?php
/**
 * Thyme Theme.
 *
 * About page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

$thyme_about_image_url   = CHILD_URL . '/config/import/images/about.jpg';
$thyme_kitchen_image_url = CHILD_URL . '/config/import/images/kitchen.jpg';
$thyme_cooking_image_url = CHILD_URL . '/config/import/images/cooking.jpg';
$thyme_couple_image_url  = CHILD_URL . '/config/import/images/couple.jpg';

return <<<CONTENT
<!-- wp:atomic-blocks/ab-columns {"backgroundImgURL":"$thyme_kitchen_image_url","focalPoint":{"x":0.4158415841584158,"y":0.71629638671875},"columns":2,"layout":"ab-2-col-wideleft","align":"full","paddingTop":15,"paddingBottom":15,"paddingUnit":"%","columnMaxWidth":1200} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideleft ab-background-cover ab-background-no-repeat ab-columns-center alignfull" style="padding-top:15%;padding-bottom:15%;background-image:url($thyme_kitchen_image_url);background-position:41.584158415841586% 71.629638671875%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideleft"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideleft"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"columnVerticalAlignment":"center"} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column ab-is-vertically-aligned-center"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":4} -->
<h4>Hi, it's nice to meet you!</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam  nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat  volutpat. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lob</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"align":"left","level":5} -->
<h5 class="has-text-align-left">Lauren</h5>
<!-- /wp:heading --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:image {"id":79914,"sizeSlug":"large","className":"is-style-offset-up"} -->
<figure class="wp-block-image size-large is-style-offset-up"><img src="$thyme_about_image_url" alt="" class="wp-image-79914"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-columns {"backgroundImgURL":"$thyme_couple_image_url","focalPoint":{"x":0.6089108910891089,"y":0.346666576244213},"columns":2,"layout":"ab-2-col-wideright","align":"full","paddingSync":true,"padding":10,"paddingUnit":"%","columnMaxWidth":1200} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideright ab-background-cover ab-background-no-repeat ab-columns-center alignfull" style="padding:10%;background-image:url($thyme_couple_image_url);background-position:60.89108910891089% 34.6666576244213%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column {"backgroundColor":"theme-secondary","paddingUnit":"%","padding":20,"paddingTop":5,"paddingRight":8,"paddingBottom":10,"paddingLeft":8} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner has-theme-secondary-background-color" style="padding-top:5%;padding-right:8%;padding-bottom:10%;padding-left:8%"><!-- wp:heading {"level":4} -->
<h4>Where the magic happens</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>More often then not, you'll find me and my husband in the kitchen preparing meals together!  We love to create new things together and enjoy yummy healthy food!</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-container {"containerMarginTop":8,"containerMarginBottom":5} -->
<div style="margin-top:8%;margin-bottom:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content"><!-- wp:atomic-blocks/ab-post-grid {"className":"smaller-title","postsToShow":4,"displayPostDate":false,"displayPostExcerpt":false,"displayPostAuthor":false,"displayPostLink":false,"displaySectionTitle":true,"columns":4,"sectionTitle":"Some of my favs","imageSize":"ab-block-post-grid-square"} /--></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"backgroundImgURL":"$thyme_cooking_image_url","focalPoint":{"x":0.6089108910891089,"y":0.346666576244213},"columns":2,"layout":"ab-2-col-wideleft","align":"full","marginBottom":40,"paddingSync":true,"padding":10,"paddingUnit":"%","columnMaxWidth":1200} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideleft ab-background-cover ab-background-no-repeat ab-columns-center alignfull" style="margin-bottom:40px;padding:10%;background-image:url($thyme_cooking_image_url);background-position:60.89108910891089% 34.6666576244213%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column {"paddingUnit":"%","padding":20} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":4} -->
<h4>Where you can find me!</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>When I'm not in the kitchen, you can find me spending time with our children and our dog, Ollie! I love sharing my day to day on Instagram, so be sure to connect with me there!</p>
<!-- /wp:paragraph -->

<!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius" href="#">Follow me on instagram</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->
CONTENT;
