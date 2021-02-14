<?php
/**
 * Thyme Theme Sales page.
 *
 * Sales page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

$thyme_about_image_url   = CHILD_URL . '/config/import/images/about.jpg';
$thyme_cooking_image_url = CHILD_URL . '/config/import/images/cooking.jpg';
$thyme_couple_image_url  = CHILD_URL . '/config/import/images/couple.jpg';

$thyme_sales_content = <<<CONTENT
<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":20,"containerPaddingRight":5,"containerPaddingBottom":20,"containerPaddingLeft":5,"containerWidth":"full","containerMaxWidth":500,"containerImgID":79913,"containerDimRatio":20} -->
<div style="padding-left:5%;padding-right:5%;padding-bottom:20%;padding-top:20%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim-20 has-background-dim" src="$thyme_couple_image_url" alt=""/></div><div class="ab-container-content" style="max-width:500px"><!-- wp:heading {"align":"center","level":1,"className":"fade-in-up"} -->
<h1 class="has-text-align-center fade-in-up">An eye grabbing and attention seeking title goes here</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"fade-in-up"} -->
<p class="has-text-align-center fade-in-up"> enter a small description of your offer that will reach your ideal customer</p>
<!-- /wp:paragraph -->

<!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius">Enroll now</a></div>
<!-- /wp:button --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":8,"containerPaddingBottom":10,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":1200,"containerDimRatio":20} -->
<div style="padding-left:8%;padding-right:8%;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1200px"><!-- wp:heading {"align":"center","className":"fade-in-up"} -->
<h2 class="has-text-align-center fade-in-up">Does any of this sound familiar?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"fade-in-up"} -->
<p class="has-text-align-center fade-in-up">Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Nam non mi  arcu. Etiam mauris justo, tincidunt at  magna nec, bibendum dapibus elit.  Etiam interdum volutpat volutpat  hendrerit. Aliquam eu mollis risus, in  sagittis nibh. Duis non nulla  eget.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":37} -->
<div style="height:37px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"has-3-columns fade-in-up"} -->
<div class="wp-block-columns has-3-columns fade-in-up"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"left","fontSize":"larger"} -->
<p class="has-text-align-left has-larger-font-size">Problem 01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>With an emphasis on typography, white space, and mobile-optimized design, your website will look absolutely breathtaking.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"larger"} -->
<p class="has-larger-font-size">Problem 02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Our team will teach you the art of writing audience-focused content that will help you achieve the success you truly deserve.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"larger"} -->
<p class="has-larger-font-size">Problem 03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>We help creative entrepreneurs build their digital business by focusing on three key elements of a successful online platform.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingBottom":10,"containerWidth":"full","containerMaxWidth":1200,"containerBackgroundColor":"#102a34","containerDimRatio":100} -->
<div style="background-color:#102a34;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1200px"><!-- wp:heading {"align":"left","level":3,"className":"light-text"} -->
<h3 class="has-text-align-left light-text">What if you could...</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"light-text"} -->
<p class="light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi 
arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit.
 Etiam interdum volutpat volutpat. Etiam urna metus, hendrerit quis 
mauris in, efficitur maximus massa.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"light-text"} -->
<p class="light-text">Ut aliquam vitae nulla in egestas. In 
tempus at ex ac hendrerit. Phasellus id tempor turpis. Aenean ultrices 
sem ut viverra scelerisque. Quisque aliquam mauris eu nisl interdum, eu 
porta est rhoncus. Proin volutpat lorem sit amet orci venenatis dictum.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":8,"containerPaddingBottom":10,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":800} -->
<div style="padding-left:8%;padding-right:8%;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:800px"><!-- wp:heading {"align":"center","level":3} -->
<h3 class="has-text-align-center">Introducing Name of your course or offer here</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum 
dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam 
mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam 
interdum volutpat volutpat. </p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"wide","id":79910,"sizeSlug":"full"} -->
<figure class="wp-block-image alignwide size-full"><img src="$thyme_cooking_image_url" alt="" class="wp-image-79910"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4>Here is what you get:</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam  mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam  interdum volutpat volutpat. </li><li>Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam  mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam  interdum volutpat volutpat. </li><li>Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam  mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam  interdum volutpat volutpat. </li><li>Lorem ipsum  dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam  mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam  interdum volutpat volutpat. </li></ul>
<!-- /wp:list --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal","columnsGap":1,"align":"full","paddingSync":true,"padding":10,"paddingUnit":"%","backgroundColor":"theme-secondary","columnMaxWidth":1200} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal has-theme-secondary-background-color ab-columns-center alignfull" style="padding:10%"><div class="ab-layout-column-wrap ab-block-layout-column-gap-1 ab-is-responsive-column" style="max-width:1200px"><!-- wp:atomic-blocks/ab-column {"paddingSync":true,"paddingUnit":"%","paddingRight":10,"paddingLeft":10} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":4} -->
<h4>This course is for you if:</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li></ul>
<!-- /wp:list --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":4} -->
<h4>This course is NOT for you if:</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. </li></ul>
<!-- /wp:list --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":8,"containerPaddingBottom":10,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":1200} -->
<div style="padding-left:8%;padding-right:8%;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1200px"><!-- wp:media-text {"align":"","mediaId":3381,"mediaType":"image"} -->
<div class="wp-block-media-text"><figure class="wp-block-media-text__media"><img src="$thyme_about_image_url" alt="" class="wp-image-3381"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
<h3>Meet Lauren</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi 
arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit.
 Etiam interdum volutpat volutpat. Etiam urna metus, hendrerit quis 
mauris in, efficitur maximus massa.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi 
arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit.
 Etiam interdum volutpat volutpat. Etiam urna metus, hendrerit quis 
mauris in, efficitur maximus massa.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":5,"containerPaddingBottom":5,"containerWidth":"full","containerMaxWidth":800,"containerBackgroundColor":"#f4f4f4"} -->
<div style="background-color:#f4f4f4;padding-bottom:5%;padding-top:5%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:800px"><!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">Call to Action here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non mi arcu. Etiam mauris justo, tincidunt at magna nec, bibendum dapibus elit. Etiam interdum volutpat volutpat. Etiam urna metus, hendrerit quis mauris in, efficitur maximus massa.</p>
<!-- /wp:paragraph -->

<!-- wp:button {"borderRadius":0,"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link no-border-radius" href="#">Enroll me!</a></div>
<!-- /wp:button --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->
CONTENT;

return $thyme_sales_content;
