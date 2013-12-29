Tango Smileys Extended
======================

**I am not the author of this plugin**. I'm sharing it here because it's no longer available on Wordpress.org for a reason unknown to me. I think it was a good plugin and I haven't found any replacement for it, - maybe someone shares my thoughts.


**Original Readme.txt:**  

~~~

=== Tango Smileys Extended ===
Contributors: whesleymccabe
Donate link: http://munashiku.slightofmind.net/
Tags: smiley, plugin, posts, comments
Requires at least: 2.8
Tested up to: 3.2.1
Stable tag: 2.7.0.0

Tango Smileys Extended (TSE) is designed to replace the standard WordPress smileys and extend the number of available smileys from 18 to 202.

== Description ==
Tango Smileys Extended (TSE) disables the built-in WordPress smileys and extends the number of available smileys from 18 to 202. The extended smileys can be input using standard emoticon shorthand, or through the CTI (Click to Insert) interface. Smileys in comments is supported and may be inserted using the standard emoticon shorthand or through the CTI interface. MCEComments is also supported.     
     
This version of Tango Smileys Extended is for **WordPress 2.8+**     
WordPress versions pre-2.8 are ***no longer supported***. If you are using WordPress 2.7.x, please use Tango Smileys Extended 2.5.4.1. WordPress 2.6.x and earlier are only supported in versions of Tango Smileys Extended older than, and including, 2.5.2.8.


== Installation ==
Installation of TSE is easy. Simply follow these directions:

1. Upload `tango-smileys-extended` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` menu in WordPress.
3. If this is your first installation of TSE, you may enable TSE on the TSE admin page at `Settings ª Tango Smileys Extended`. If you are upgrading, TSE retains its settings from the previous installation. You may change the options on the TSE admin page at `Settings ª Tango Smileys Extended`
4. The comment CTI interface is not supported by some themes, but standard emoticon shorthand will still work. See the FAQs for information on adding support for CTI to your theme. Comment CTI may be disabled on the TSE Options page.


== Frequently Asked Questions ==
= How do you input each smiley? =
1. **CLICK TO INSERT:** Click the PIGGY icon in TinyMCE while in Visual editing mode to add a smiley to your post. If CTI is enabled for comments, you simply click the smiley you want and the shorthand will be inserted into the comment box.
2. **MANUALLY:** For a complete and up-to-date list of all available smileys and the shorthand to input each one, please check the plugin homepage [here](http://munashiku.slightofmind.net/wordpress-plugins/tango-smileys-extended).

= How do I add support to my theme for CTI for comments? =
1. Open the `comments.php` file for your theme and look for the text `<?php do_action('comment_form', $post->ID); ?>`.
2. If the text is missing, locate your comment textarea which should be something like `<textarea name="comment" id="comment"></textarea>` and add `<?php do_action('comment_form', $post->ID); ?>` either above or below the textarea. Wherever you add this line, the CTI scrollbox will appear.
3. SEE THE NEXT QUESTION FOR MORE OPTIONS!

= How do I add the CTI interface to a textarea, including the one for comments? =
1. You can use the function `tse_cti_anywhere( 'target', OUTPUT )` where ***'target'*** is the ID of the textarea you are using and ***OUTPUT*** is boolean **TRUE** or **FALSE**.
2. Set ***OUTPUT*** to **TRUE** to echo the CTI smileys to the page, and **FALSE** to use the output of the function in a variable.
3. ***'target'*** defaults to **'comment'** if not set.
4. ***OUTPUT*** defaults to **TRUE** if not set.
6. **TO STYLE**: You can add CSS to your theme's stylesheet. SEE EXAMPLE #4 BELOW.
5. SEE THE PREVIOUS QUESTION FOR ANOTHER OPTION FOR THE COMMENT TEXTAREA.

= EXAMPLES =
1. Use `<?php tse_cti_anywhere(); ?>` to manually add the CTI smileys to your comment form. This will automatically print the clickable smileys to the comment form in whichever location you use. If you add this before the textarea, you get smileys before the textarea. If you add this after the textarea, you get smileys after the textarea. If you use this manual function, please uncheck ***Enable CTI for comments*** on the TSE Options page.
2. Use `<?php tse_cti_anywhere( 'bananas' ); ?>` to print clickable smileys for use on the textarea defined as `<textarea id="bananas"></textarea>`.
3. Use `$variable = tse_cti_anywhere( 'oranges', false );` to use `$variable` elsewhere in PHP. `$variable` reverences `<textarea id="oranges"></textarea>` and can be used as `<?php echo $variable; ?>` on the form containing the textarea.
4. You can style the box containing the CTI smileys in your theme's stylesheet. For `tse_cti_anywhere( 'grapes', true )` you can reference the box as `#tseCTIsmileys-grapes` and for `tse_cti_anywhere( 'apples', true )` you can reference the box as `#tseCTIsmileys-apples`.


== Change Log ==
= [2011-07-25] v2.7.0.0 =
ADDITION: Updated the CTI interface when using MCEComments. There is now a button in the MCEComments toolbar!     
ADDITION: Further optimized the plugin for faster operation.     
BUGFIX: Reinserted the filter priority which was removed in previous versions for no reason. TSE should now wait until all other filters have been applied before changing shortcode to images.     
BUGFIX: Changed the way custom smiley sizes were handled which should improve the display quality of smileys between 18px and 20px.

= [2011-06-29] v2.6.5.0 =
BUGFIX: Updated regex pattern to skip HTML excaped characters which were triggering the wink smiley when followed by a right parenthesis.     
ADDITION: Changed the smiley size selection options to allow for any smiley size from 16px to 24px to better fit any theme.     
ADDITION: Changed the comment smiley box width selection to allow percentages. The smiley box will stop breaking out of nested comment replies if the width is specified as a percentage.

= [2010-04-05] v2.6.4.1 =
BUGFIX: MCEComments is working again.

= [2010-03-29] v2.6.4.0 =
ADDITION: Groups of smileys can be disabled for comments, while all smileys are still available for post and page editing. This does NOT disable converting smiley shorthand into images, so any previously entered smileys in comments will still appear as images.     
NOTICE: It appears that MCEComments has been updated since support for it was added to TSE, and this update has broken compatibility with MCEComments. A fix is in the works, but it may be a while before it is available. Until then, users of MCEComments will have to choose between using MCEComments or Tango Smileys Extended.

= [2009-12-05] v2.6.2.0 =
ADDITION: Updated the tinyMCE popup.     
ADDITION: Larger (24px) smileys are now available STANDARD!!! Just select the larger smileys on the TSE Options page.     
BUGFIX: Fixed `:announce:` smiley, which was leaving a trailing colon.     
BUGFIX: Fixed CSS style for Comments CTI.

= [2009-11-16] v2.6.0.1 =
ADDITION: Rewrote the options page. Now streamlined and secure.     
ADDITION: TSE can now be uninstalled - including the removal of all TSE options from the database.
ADDITION: Smileys now have tooltips!

= [2009-10-10] v2.5.6.1 =
BUGFIX: A typo in 2.5.6.0 prevented smileys from appearing for comments.     

= [2009-10-09] v2.5.6.0 =
ADDITION: Added the ability to disable TSE on all posts or all pages.     
ADDITION: The CTI interface is now loaded **ONLY** on pages that can use it, and **ONLY** if the CTI interface is enabled for those pages. (Significantly reduces memory consumption.)     
ADDITION: Updated options and added an "on activation" function. (Reduces memory consumption for most of TSE.)     
ADDITION: Updated file pointers to maximize compatibility with WordPress installations.

= [2009-07-27] v2.5.4.1 =
ADDITION: Added a button to the HTML post and page editor for CTI smileys.

= [2009-07-22] v2.5.2.8 =
BUGFIX: Fixed interaction between TSE and Ozh Admin Menu. TSE icon fixed.     
BUGFIX: Updated TSE compatibility with newest versions of WordPress. Now (currently) compatible with WordPress versions 2.7 - 2.9-rare.

= [2009-04-01] v2.5.2.7 =
ADDITION: Removed the set height and width from all files so any sized custom smileys can be added.     
ADDITION: Moved CSS styling for CTI to the head of pages for valid XHTML.     
ADDITION: Added `type="text/javascript'` attribute to javascript for valid XHTML.     
ADDITION: Added `CDATA` to javascript for valid XHTML.     
ADDITION: Added `class="tse-smiley"` to smileys for custom styling.     
BUGFIX: Fixed `:watermelon:` and `:kissing:` smileys.

= [2009-01-27] v2.5.2.0 =
ADDITION: Added support for MCEComments!     
NOTE: You must check the MCEComments box on the TSE Options page for the smileys to work with MCEComments.

= [2009-01-24] v2.5.1.2 =
BUGFIX: Fixed images for `:hugleft:` and `:hugright:`     
ADDITION: Added ability to use CTI interface on any textarea.     
NOTE: Adding the CTI interface on a textarea does not mean the shorthand will be converted to smileys. I will offer support for those who wish to do this, but I offer no guarantees. For support, leave a comment on the Tango Smileys Extended homepage [here](http://munashiku.slightofmind.net/wordpress-plugins/tango-smileys-extended).

= [2008-12-27] v2.5.0.2 =
BUGFIX: The javascript to prevent conflicting options on the TSE Options page was not working.     
BUGFIX: WordPress installed to its own directory not working. Replaced instances of `get_bloginfo('url')` with `get_bloginfo('wpurl')` to fix.

= [2008-12-24] v2.5 =
ADDITION: Added several new smileys to increase the available smileys from 186 to 202!     
ADDITION: Replaced the smileys with higher quality versions!     
ADDITION: Sorted the smileys to make them easier to find. Standard smileys are at the top of the list, while lesser used smileys have been moved to the bottom.

= [2008-11-05] v2.2.0.2 =
BUGFIX: Removed 8) and 8O as smileys, since they may match list numbering schemes and ID numbers.

= [2008-11-03] v2.2.0 =
BUGFIX: Removed double slashes from smileys in comments CTI box.     
ADDITION: Added basic CSS styling options for displaying the comments CTI box. This should allow most people to style the comments CTI box to fit their theme and prevent it from breaking the theme layout.

= [2008-10-27] v2.1.0 =
BUGFIX: Most bugs worked out of CTI interface. There are probably some bugs left, but they will be addressed when they are located.     
ADDITION: Added option to turn off CTI interface for Posts & Pages.     
ADDITION: Added option to turn off CTI interface for Comments.

= [2008-10-26] v2.0.1b =
BUGFIX: Additional reorganization of smiley list to correct more smiley-within-a-smiley issues.     
ADDITION: Added CTI scrollbox for comments. Most themes are supported, but some are not. See the FAQ for info on supported themes, and how to add support to your theme.

= [2008-10-21] v2.0.0b =
ADDITION: Added Click-to-insert button plugin for TinyMCE! Activate TSE and click the Pig when you're writing a post or page to open the TSE smileys!     
NOTE: This is a beta release, and probably has some bugs. Please report all bugs on the TSE page [here](http://munashiku.slightofmind.net/wordpress-plugins/tango-smileys-extended).

= [2008-10-14] v1.7.1 =
BUGFIX: Reorganized smiley list to fix the smiley within a smiley issue. `:-)` is a part of `:-))` so typing `:-))` resulted in a smile followed by `)` - which was incorrect. You can now safely use `:-))` and the output is a big smile - as it should be.     
ADDITION: Added `:/` as a valid smiley without breaking links.

= [2008-10-13] v1.7.0.6 =
BUGFIX: Changed `:oops:` to correct smiley.     
ADDITION: Added `:mrgreen:` `:lol:` and `:twisted:`     

= [2008-10-13] v1.7.0.2 =
BUGFIX: Added a priority of 500 to the filter so TSE would wait until most other plugins finish manipulating the post before replacing the shorthand with images. This should help keep IMG tags from getting split by most other filters.     
ADDITION: Added `:-/` as a valid smiley, as some people were trying to use it.     

= [2008-10-12] v1.7 =
BUGFIX: Fixed problem from v1.1 regarding two character smileys - which were removed in the meantime in v1.5. Standard two characters smileys have been re-included.     

= [2008-10-11] v1.5 =
BUGFIX: `>` and `<` converted to `&gt;` and `&lt;` by MCE. Old replace function looking for `>` and `<`. Changed function to find `&gt;` and `&lt;`.     
BUGFIX: Some smiley shorthand only contained two chars and caused issues. Issues also caused by certain shorthand using `!` and `?`. Removed all two char shorthand and fixed issue with other shorthand.     
ADDITION: Added an admin page to enable/disable TSE at `Settings ª Tango Smileys Extended`     
ADDITION: Added ability to toggle TSE for posts and comments on TSE admin page.     
ADDITION: Default WP Smilies can be toggled on TSE admin page.     

= [2008-10-09] v1.1 =
BUGFIX: `str_ireplace()` not a valid function in PHP4. Function replaced with `preg_replace()`.     
Now fully PHP4 / PHP5 compatible.     

= [2008-10-08] v1.0 =
Initial release


== Screenshots ==

1. All 202 smileys

~~~
