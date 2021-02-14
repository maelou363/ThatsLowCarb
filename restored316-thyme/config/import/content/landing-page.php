<?php
/**
 * Thyme Theme.
 *
 * Landing page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

$thyme_couple_image_url = CHILD_URL . '/config/import/images/couple.jpg';

return <<<CONTENT
<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress. This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":3378,"align":"wide"} -->
<figure class="wp-block-image alignwide"><img src="$thyme_couple_image_url" alt="" class="wp-image-3378"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress. This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress. This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages as you like and manage all of your content inside of WordPress.</p>
<!-- /wp:paragraph -->
CONTENT;
