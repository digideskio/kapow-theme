# Kapow! Theme

The Theme component of the Kapow! boilerplate/framework for WordPress site development.

## About

The Kapow! Theme 

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

If this is the case you'll just need to get hold of the unminified JS and CSS assets from [Kapow Skeleton](https://github.com/mkdo/kapow-skeleton) so that you can process these with your own build tools. You may also want to revert some of the modifications made to `wp-config.php` to match your own WordPress set-up.

## Installation

**1)**. Rename `kapow-theme` then copy/upload it to the `/wp-content/themes/` directory.

**2)**. Activate the theme through the 'Themes' menu in WordPress.

**3)**. Make a nice hot cup of tea/coffee and bask in your magnificence!

## Usage

Enhance your theme by editing files referenced in `functions.php` that reside in the `/inc/` directory e.g. register custom post types and taxonomies, add/remove theme support, turn on custom theme features etc.

You can also add a custom logo in the 'Site Identity' section of the Apperance > Customise screen.

## Changelog

**1.0.0** - *17.09.2015* - Initial release, requires additional testing in the wild.
