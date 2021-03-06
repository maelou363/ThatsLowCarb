<?php
/**
 * Thyme pricing page.
 *
 * Pricing page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

return <<<CONTENT
<!-- wp:heading {"align":"center"} -->
<h2 style="text-align:center">Two Columns</h2>
<!-- /wp:heading -->

<!-- wp:atomic-blocks/ab-pricing {"columnsGap":1} -->
<div class="wp-block-atomic-blocks-ab-pricing ab-pricing-columns-2"><div class="ab-pricing-table-wrap ab-block-pricing-table-gap-1"><!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":1,"borderColor":"#eeeeee","padding":5} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#eeeeee;padding:5%"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003ePackage #1\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Package #1</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"\u003cem\u003eThis is a basic offer.\u003c/em\u003e","fontSize":"small"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle has-small-font-size" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>This is a basic offer.</em></div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"99","currency":"$","term":"/mo","showTerm":false} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:60px">99</div></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li> Logo concept<br> 3-page web design<br> 1 hour of training<br>1 email template </li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Get Started","buttonBackgroundColor":"#4a4a4a","buttonShape":"ab-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#4a4a4a">Get Started</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table -->

<!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":1,"borderColor":"#eeeeee","padding":5} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#eeeeee;padding:5%"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003ePackage #2\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Package #2</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"\u003cem\u003eThis is a premium offer.\u003c/em\u003e","fontSize":"small"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle has-small-font-size" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>This is a premium offer.</em></div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"299","currency":"$","term":"/mo","showTerm":false} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:24px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:60px">299</div></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li> Logo concept<br> 5-page web design<br> 3 hours of training<br> 2 Email templates </li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Get Started","buttonBackgroundColor":"#4a4a4a","buttonShape":"ab-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#4a4a4a">Get Started</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table --></div></div>
<!-- /wp:atomic-blocks/ab-pricing -->

<!-- wp:heading {"align":"center"} -->
<h2 style="text-align:center">Three Columns</h2>
<!-- /wp:heading -->

<!-- wp:atomic-blocks/ab-pricing {"columns":3,"columnsGap":1,"align":"wide"} -->
<div class="wp-block-atomic-blocks-ab-pricing ab-pricing-columns-3 alignwide"><div class="ab-pricing-table-wrap ab-block-pricing-table-gap-1"><!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":1,"borderColor":"#eeeeee"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#eeeeee"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003ePackage #1\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Package #1</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"\u003cem\u003eThis is a basic offer.\u003c/em\u003e","fontSize":"small"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle has-small-font-size" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>This is a basic offer.</em></div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"99","currency":"$","customFontSize":50,"term":"/mo","showTerm":false} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:20px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:50px">99</div></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":16,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:16px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li> Logo concept<br> 3-page web design<br> 1 hour of training<br>1 Email template<br><del>eCommerce setup </del></li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Get Started","buttonBackgroundColor":"#4a4a4a","buttonShape":"ab-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#4a4a4a">Get Started</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table -->

<!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":1,"borderColor":"#eeeeee"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#eeeeee"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":" \u003cstrong\u003ePackage #2\u003c/strong\u003e ","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"> <strong>Package #2</strong> </div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"\u003cem\u003eThis is an advanced offer.\u003c/em\u003e","fontSize":"small"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle has-small-font-size" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>This is an advanced offer.</em></div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"199","currency":"$","customFontSize":50,"term":"/mo","showTerm":false} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:20px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:50px">199</div></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":16,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:16px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li> Logo concept<br> 5-page web design<br> 3 hours of training<br> 2 Email templates <br><del>eCommerce setup </del> </li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Get Started","buttonBackgroundColor":"#4a4a4a","buttonShape":"ab-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#4a4a4a">Get Started</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table -->

<!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":1,"borderColor":"#eeeeee"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#eeeeee"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003ePackage #3\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Package #3</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"\u003cem\u003eThis is a premium offer.\u003c/em\u003e","fontSize":"small"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle has-small-font-size" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>This is a premium offer.</em></div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"299","currency":"$","customFontSize":50,"term":"/mo","showTerm":false} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:20px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:50px">299</div></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":16,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:16px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li> Logo concept<br> 10-page web design<br> 5 hours of training<br> 2 Email templates<br>&nbsp; eCommerce setup </li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Get Started","buttonBackgroundColor":"#4a4a4a","buttonShape":"ab-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#4a4a4a">Get Started</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table --></div></div>
<!-- /wp:atomic-blocks/ab-pricing -->

<!-- wp:heading {"align":"center"} -->
<h2 style="text-align:center">Four Columns</h2>
<!-- /wp:heading -->

<!-- wp:atomic-blocks/ab-pricing {"columns":4,"columnsGap":1,"align":"wide"} -->
<div class="wp-block-atomic-blocks-ab-pricing ab-pricing-columns-4 alignwide"><div class="ab-pricing-table-wrap ab-block-pricing-table-gap-1"><!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":1,"borderColor":"#eeeeee"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#eeeeee"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003ePackage #1\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Package #1</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"\u003cem\u003eBasic\u003c/em\u003e","fontSize":"small"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle has-small-font-size" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>Basic</em></div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"199","currency":"$","customFontSize":40,"term":"/mo","showTerm":false} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:16px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:40px">199</div></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":16,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:16px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li> Logo concept<br> 3-page web design<br> 1 hour of training<br>1 Email template<br> e<del>Commerce setup </del><br><del>Search optimization</del>  </li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Get Started","buttonBackgroundColor":"#4a4a4a","buttonShape":"ab-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#4a4a4a">Get Started</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table -->

<!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":1,"borderColor":"#eeeeee"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#eeeeee"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":" \u003cstrong\u003ePackage #2\u003c/strong\u003e ","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"> <strong>Package #2</strong> </div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"\u003cem\u003eAdvanced\u003c/em\u003e","fontSize":"small"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle has-small-font-size" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>Advanced</em></div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"299","currency":"$","customFontSize":40,"term":"/mo","showTerm":false} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:16px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:40px">299</div></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":16,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:16px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li> Logo concept<br> 5-page web design<br> 3 hours of training<br> 2 Email templates <br><del>eCommerce setup </del><br><del>Search optimization</del> </li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Get Started","buttonBackgroundColor":"#4a4a4a","buttonShape":"ab-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#4a4a4a">Get Started</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table -->

<!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":1,"borderColor":"#eeeeee"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#eeeeee"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003ePackage #3\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Package #3</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"\u003cem\u003ePremium\u003c/em\u003e","fontSize":"small"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle has-small-font-size" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>Premium</em></div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"399","currency":"$","customFontSize":40,"term":"/mo","showTerm":false} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:16px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:40px">399</div></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":16,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:16px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li> Logo concept<br> 10-page web design<br> 5 hours of training<br> 2 Email templates<br> eCommerce setup <br><del>Search optimization</del> </li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Get Started","buttonBackgroundColor":"#4a4a4a","buttonShape":"ab-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#4a4a4a">Get Started</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table -->

<!-- wp:atomic-blocks/ab-pricing-table {"borderWidth":1,"borderColor":"#eeeeee"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table ab-block-pricing-table-center ab-block-pricing-table" itemscope itemtype="http://schema.org/Product"><div class="ab-block-pricing-table-inside" style="border-width:1px;border-style:solid;border-color:#eeeeee"><!-- wp:atomic-blocks/ab-pricing-table-title {"title":"\u003cstrong\u003ePackage #4\u003c/strong\u003e","fontSize":"medium","paddingTop":30} -->
<div itemprop="name" style="padding-top:30px;padding-right:20px;padding-bottom:10px;padding-left:20px" class="wp-block-atomic-blocks-ab-pricing-table-title ab-pricing-table-title has-medium-font-size"><strong>Package #4</strong></div>
<!-- /wp:atomic-blocks/ab-pricing-table-title -->

<!-- wp:atomic-blocks/ab-pricing-table-subtitle {"subtitle":"\u003cem\u003ePlatinum\u003c/em\u003e","fontSize":"small"} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-subtitle ab-pricing-table-subtitle has-small-font-size" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><em>Platinum</em></div>
<!-- /wp:atomic-blocks/ab-pricing-table-subtitle -->

<!-- wp:atomic-blocks/ab-pricing-table-price {"price":"499","currency":"$","customFontSize":40,"term":"/mo","showTerm":false} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-price ab-pricing-table-price-wrap ab-pricing-has-currency" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="ab-pricing-table-currency" style="font-size:16px">$</span><div itemprop="price" class="ab-pricing-table-price" style="font-size:40px">499</div></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-price -->

<!-- wp:atomic-blocks/ab-pricing-table-features {"customFontSize":16,"paddingTop":15,"paddingBottom":15} -->
<ul itemprop="description" class="wp-block-atomic-blocks-ab-pricing-table-features ab-pricing-table-features ab-list-border-none ab-list-border-width-1" style="font-size:16px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><li> Logo concept<br> 20-page web design<br> 10 hours of training<br> Email template<br>&nbsp; eCommerce setup<br> Search optimization </li></ul>
<!-- /wp:atomic-blocks/ab-pricing-table-features -->

<!-- wp:atomic-blocks/ab-pricing-table-button {"buttonText":"Get Started","buttonBackgroundColor":"#4a4a4a","buttonShape":"ab-button-shape-square","paddingTop":15,"paddingBottom":35} -->
<div class="wp-block-atomic-blocks-ab-pricing-table-button ab-pricing-table-button" style="padding-top:15px;padding-right:20px;padding-bottom:35px;padding-left:20px"><div class="ab-block-button"><a class="ab-button ab-button-shape-square ab-button-size-medium" style="color:#ffffff;background-color:#4a4a4a">Get Started</a></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table-button --></div></div>
<!-- /wp:atomic-blocks/ab-pricing-table --></div></div>
<!-- /wp:atomic-blocks/ab-pricing -->
CONTENT;
