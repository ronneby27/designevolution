=== Featured Galleries ===
Contributors: Sergeysan27
Donate link: https://www.facebook.com/narutooor
Tags: admin,backend,galleries,featured,images
Requires at least: 1.1.0
Tested up to: 4.7
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

= --Examples-- =

This example pulls the entire Featured Gallery, as an array, then loops through to display each as an `img`.

    $galleryArray = get_post_gallery_ids($post->ID); 

    <?php foreach ($galleryArray as $id) { ?>

        <img src="<?php echo wp_get_attachment_url( $id ); ?>">

    <?php } ?>

You can additionally request a comma-delimited string, instead of an array.

    $galleryString = get_post_gallery_ids($post->ID,"string"); 

    echo $galleryString;

Finally, you may want to just grab the first image of the gallery. You can do this by specifying the number of images to return. The default is `-1`, which returns all. Setting this to `1` instead, as shown below, will get you only one image.

    $galleryArray = get_post_gallery_ids($post->ID,1); //If $post->ID is throwing an undefined error, use get_the_ID() instead. (Sometimes the post object isn't defined.)

    <?php foreach ($galleryArray as $id) { ?>

        <img src="<?php echo wp_get_attachment_url( $id ); ?>">

    <?php } ?>

= Adding Featured Galleries to a Custom Post Type =

I've included a hook to allow you to easily integrate featured galleries into a custom post type. In your theme `functions.php` file, simply add this:
    
    function add_featured_galleries_to_ctp( $post_types ) {
        array_push($post_types, 'custom_post_type'); // ($post_types comes in as array('post','page'). If you don't want FGs on those, you can just return a custom array instead of adding to it. )
        return $post_types;
    }
    add_filter('fg_post_types', 'add_featured_galleries_to_ctp' );

= Show the Sidebar In Media Manager =

By default, the sidebar is hidden in the media manager/uploader popup. However, if you'd like it to be shown, there is an easy filter that you can add to your functions.php file. Example:

    function show_fg_sidebar( $show_sidebar ) {
        return true; // ($show_sidebar comes in a false)
    } add_filter( 'fg_show_sidebar', 'show_fg_sidebar' );

= Want to Help? =

I'd love some help with internationalization. I'm not sure how to do that. Also, if anyone wants to take a look at `admin.js`, which calls up the media manager, I feel like the way that I open it to the gallery-edit state could be improved. (Opens to ` featured-gallery` state, plugs in pre-selected images, then changes state to `gallery-edit`, and plugs in pre-selected images. Couldn't get selection to transfer, so there's a weird flash as it propagates.)

== Installation ==

There are two ways to install this plugin.

Manual:

1. Upload the `featured-galleries` folder to the `/wp-content/plugins/` directory
2. Go to the 'Plugins' menu in WordPress, find 'Featured Galleries' in the list, and select 'Activate'.

Through the WP Repository:

1. Go to the 'Plugins' menu in WordPress, click on the 'Add New' button.
2. Search for 'Featured Galleries'. Click 'Install Now'.
3. Return to the 'Plugins' menu in WordPress, find 'Featured Galleries' in the list, and select 'Activate'.

== Frequently Asked Questions ==

= What is the point of this? =

I was tasked to update a Featured Projects page for a client website. Projects were a custom post type, and the page displaying them used a special WP_Query. Each Project had a featured image. The client wanted each to have several images that could be clicked through with arrows. I couldn't find an easy way to accomplish this, so I built it from scratch. A friend suggested I abstract it into a plugin to share.

= Will it be improved? =

Possibly. Do you have any suggestions? What I'd really like to see is the functionality adopted into the core. We have featured images, why not featured galleries?

= Can I place the metabox in both the sidebar and under the editor? =

Yes! Turns out there is CSS that lets me changes the behavor of the preview thumbnails depending on the position, so it should look good both in both positions.

= Can I add a featured gallery to my custom post type? =

Why yes you can! You don't even have to edit the plugin to do so. There are details on how to do this in the Instructions.

== Screenshots ==

1. Initial metabox, no images in the gallery.
2. Metabox with images selected and added.

== Changelog ==

= 1.7.1 =

* Added missing stylesheet to hide sidebar.

= 1.7.0 =

* Added filter to allow themes to show the sidebar in the media manager instance created by Featured Galleries (Sidebar is hidden by default).

= 1.6.0 =

* Improved CSS styling of the backend gallery inside the metabox. Metabox is now more responsive, per request.

= 1.5.0 =

* Accidentally put the version of 1.4.5 when I meant to use 1.4.4, but in change log used correct version. This bump to 1.5 restores consistency.

= 1.4.4 =

* Tested with WP 4.4 and bumped up compatibility.

= 1.4.3 =

* Bugfix: If `get_post_gallery_ids()` was called on post with empty Featured Gallery, using an array return (the default), an array containing one string (a comma) was returned instead of an empty array.

= 1.4.2 =

* Bugfix: Undefined variable `$oldfix` when running post-MP6 versions of WordPress (3.9 and over). Props Joshuadnelson.
* WordPress 4.2 compatibility bump.

= 1.4.1 =

* Updating readme to add example code for custom post types.

= 1.4.0 =

* WordPress 4.1 compatibility bump.
* Bugfix: Margin difference between buttons on left and right in media model.
* Bugfix: Button type and text change didn't fire when Media model defaults to upload instead of to media library.

= 1.3.1 =

* Fixed issue where the scripts required to open the Media Manager might notbe enqueued.

= 1.3.0 =

* Added internationalization and German translation. Props to Drivingralle.
* Formatting fixes to better match WordPress PHP best practices. Props Drivingralle.

= 1.2.4 =

* Fixes a typo in the readme.txt file.

= 1.2.3 = 

* As reported in suppor thread, error messages were being thrown in WP DEBUG mode, when trying to save things unrelated to plugin. Fixes those errors.

= 1.2.2 = 

* More bug fixes for 3.9 and 3.5 - 3.7, to bring everything into line visually in all versions that use the media manager.

= 1.2.1 = 

* Bugfix, CSS background positioning missing on delete images icons in WP 3.5 - 3.7.

= 1.2.0 =

* Added compatibility for WordPress 3.9 (Had to rearrange the javascript slightly).
* Improved compatibility for WordPress 3.5 - 3.7 by using built in icon images instead of Dashicons in those versions.

= 1.1.6 =

* Fixed inconsistent Markup.

= 1.1.5 =

* Overhauled readme.txt to include implementation instructions and examples.

= 1.1.4 =

* Slight bug was introduced in 1.1.3, **get_post_gallery_ids()** won't work.

= 1.1.3 =

* Added a new argument to **get_post_gallery_ids()**, allowing it to return only the first image in the gallery.

= 1.1.2 =

* Minor bug fix update. If used opened, closed, and then reopened the gallery selector, the back button would appear incorrectly. Skipping 1.1.1 because that is a silly version number.

= 1.1.0 =

* Completely screwed up commits for 1.0.0 and 1.0.1, and copied the entire folder instead of trunk. Fixed now.

= 1.0.1 =

* Minor update, fixed a CSS bug where buttons were incorrectly small on mobile (< 783px) screens.

= 1.0.0 =
* First public version. Added support for WP's Preview Changes functionality. Accomplished this be using two pieces of metadata.

= 0.9.0 =
* Initial test version sent to WP for submission.