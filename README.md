# Kapow! Theme

The Theme component of the Kapow! boilerplate/framework for WordPress site development.

## About

The Kapow! Theme provides developers with a solid foundation for developing their next theme whether it be for a client site or for the Wordpress theme repository. Originally a fork of the popular _s/Underscores theme by Automattic, the Kapow! Theme has evolved into a time saving and feature rich WordPress theme boilerplate.

Features of Kapow! Theme include:

- Clearly defined theme structure following best theme development practices
- Complete set of default page templates and associated template parts
- More granular approach to setting up and enhancing theme functions/features
- Example functions to help you with registering post types, taxonomies etc
- Several useful action hooks for adding enhancements to theme templates
- WCAG compliant markup and navigation as well as useful content filters
- Fully translatable with default language files supplied
- PHP code that complies with the WordPress coding standards

## Requirements

Kapow! Theme is designed to work along side the other Kapow! modules: [Skeleton](https://github.com/mkdo/kapow-skeleton), [Sass](https://github.com/mkdo/kapow-sass), [Grunt](https://github.com/mkdo/kapow-grunt).

However, this theme can be used independently of Kapow!

If this is the case you'll just need to get hold of the unminified JS and CSS assets from [Kapow Skeleton](https://github.com/mkdo/kapow-skeleton) so that you can process these with your own build tools. 

## Installation

**If you are planning on using the full Kapow! boilerplate for your next project, we have a [setup script](https://github.com/mkdo/kapow-setup) to help you get up and running *fast*.**

**1)**. Rename the `kapow-theme` in this repo to match your desired theme name.

**2)**. Open the theme folder in your text/code editor and do a ***case sensitive*** find and replace for each of these strings of text, replacing them with project specific alternatives:

- **My Project** = "proper" name 
- **my-project** = "slug" name, theme directory slug and theme textdomain
- **my_project** = database name & function name prefix
- **Author Name** = your or your organisation's name
- **hello@<span></span>my-project.com** = your email address
- **www&#8203;.&#8203;my-project.com** = your website address

**3)**. Copy the theme folder to the `/wp-content/themes/` directory.

**4)**. Activate the theme through the 'Themes' menu in WordPress.

**5)**. Make a nice hot cup of tea/coffee and bask in your magnificence!

## Usage

You may  want to revert some of the modifications made to `wp-config.php` to match your own WordPress set-up.

Enhance your theme by editing files referenced in `functions.php` that reside in the `/inc/` directory e.g. register custom post types and taxonomies, add/remove theme support, turn on custom theme features etc.

You can also add a custom logo in the 'Site Identity' section of the Apperance > Customise screen.

## Changelog

**1.1.0** - *23.10.2015* - Slight restructure to accomodate new Kapow! bower asset syncing.

**1.0.0** - *17.09.2015* - Initial release, requires additional testing in the wild.
