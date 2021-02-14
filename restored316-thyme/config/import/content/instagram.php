<?php
/**
 * Thyme Theme.
 *
 * Instagram content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

return <<<CONTENT
<!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-wideright","paddingUnit":"%"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideright"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column {"backgroundColor":"theme-secondary","paddingUnit":"%","padding":8,"paddingTop":5,"paddingRight":10,"paddingBottom":10,"paddingLeft":10} -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner has-theme-secondary-background-color" style="padding-top:5%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:heading {"level":4,"className":"subtitle"} -->
<h4 class="subtitle">By Category</h4>
<!-- /wp:heading -->

<!-- wp:shortcode -->
[facetwp facet="categories"]
<!-- /wp:shortcode -->

<!-- wp:heading {"level":4,"className":"subtitle"} -->
<h4 class="subtitle">By Diet</h4>
<!-- /wp:heading -->

<!-- wp:shortcode -->
[facetwp facet="diets"]
<!-- /wp:shortcode -->

<!-- wp:heading {"level":4,"className":"subtitle"} -->
<h4 class="subtitle">By season</h4>
<!-- /wp:heading -->

<!-- wp:shortcode -->
[facetwp facet="season"]
<!-- /wp:shortcode -->

<!-- wp:search {"label":"Looking for something specific?"} /-->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Please note: This page is using a Premium Plugin called <a href="https://restored316designs.com/go/facetwp/" target="_blank" rel="noreferrer noopener" aria-label="FacetWP (opens in a new tab)">FacetWP</a> which is NOT included in the Thyme theme!  This plugin can be purchased and integrated flawlessly with the Thyme theme, however.  This page is an example of how this plugin will look and operate inside of the Thyme theme.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:shortcode -->
[facetwp template="example"]
<!-- /wp:shortcode --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns -->
CONTENT;
