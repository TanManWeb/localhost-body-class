# Localhost Body Class
Localhost Body Class is a simple and lightweight plugin that adds the class "localhost" to the opening body tag of your WordPress theme.

## Why do I need this plugin?
If you are a WordPress developer and you create custom WordPress themes, sometimes you want to have CSS styles to only affect your localhost version of the website. Likewise, sometimes you want to have CSS styles to only affect the live/production version of your website. Hence, this is where this plugin comes in handy. 

## A new body class
WordPress inserts an array of class names into the opening ```<body>``` tag of your WordPress theme. The class names vary depending on which page you are on. You can see the class names when you view the source code of your website. This plugin inserts a new class name into the opening body tag ```<body class="localhost">``` but only if you are running the website on your localhost as seen in the example below.

![Body Class](https://raw.githubusercontent.com/TanManWeb/localhost-body-class/master/body-class.png)

## Important
In order for this plugin to work, you must have the ```<body <?php body_class(); ?>>``` tag in your WordPress theme. This can be found in the ```header.php``` file of most WordPress themes.

## How to use it in your WordPress template
This plugin is only effective on your localhost development server (XAMPP, MAMP or WAMP just to name a few). There are no settings or parameters. This plugin does not add anything to the WordPress backend. Once activated, you can utilize the new body class name "localhost" in the CSS style sheet of your WordPress theme.

### Example 1 - Basic usage
```
body.localhost { background: red; }
```

### Example 2 - Combine with other class names
```
body.single.localhost .sidebar { display: none; }
```

### Example 3 - Using the CSS ```:not(.localhost)``` class
```
body:not(.localhost) .sidebar { background: orange; }
```

## Practical uses of this plugin
- to hide/show or target content, sidebars, images, etc. only on localhost using CSS as demonstrated in examples 1 and 2 above.
- to hide/show or target content, sidebars, images, etc. only on the live website using CSS as demonstrated in example 3 above.

## Installation
1. After you download it, unzip the plugin files.
2. Upload the entire plugin folder to the "/wp-content/plugins/" directory of your WordPress installation.
3. Activate the plugin through the "Plugins" menu in WordPress.

## Screenshots
There are no screenshots because this plugin does not add anything to the WordPress backend. 

## Changelog
Version 1.0.0 - First plugin release.


