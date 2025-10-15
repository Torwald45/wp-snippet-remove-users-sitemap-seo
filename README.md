# WP Snippet: Remove Users Sitemap SEO

Remove users sitemap (wp-sitemap-users-1.xml) from WordPress Core Sitemaps to improve privacy and SEO.

## Features

- Remove users sitemap (wp-sitemap-users-1.xml) from WordPress Core Sitemaps
- Prevent public exposure of author usernames
- Optional filters to remove taxonomies and posts sitemaps
- Lightweight (single filter hook)
- Works with WordPress 5.5+ Core Sitemaps

## Requirements

- WordPress 5.5 or higher (Core Sitemaps introduced in 5.5)
- PHP 7.4 or higher

## Installation

### Method 1: functions.php

1. Open your theme's `functions.php` file
2. Copy the entire content from `remove-users-sitemap-seo.php`
3. Paste at the end of your `functions.php`
4. Save the file

### Method 2: Code Snippets Plugin

1. Install and activate the [Code Snippets](https://wordpress.org/plugins/code-snippets/) plugin
2. Go to Snippets → Add New
3. Copy content from `remove-users-sitemap-seo.php` **WITHOUT the opening `<?php` tag**
4. Paste into the Code field
5. Activate the snippet

## Usage

After installation, users sitemap (wp-sitemap-users-1.xml) will be automatically removed from your sitemap index.

### How to check your sitemap

WordPress Core Sitemaps are available at:
- Main sitemap index: `https://yoursite.com/wp-sitemap.xml`
- Note: `https://yoursite.com/sitemap.xml` redirects automatically to `wp-sitemap.xml`

Visit your sitemap to verify that `wp-sitemap-users-1.xml` is no longer listed.

### Optional: Remove other sitemaps

To remove taxonomies or posts sitemaps, uncomment the corresponding lines in the code:

- Uncomment taxonomies section to remove categories/tags sitemap
- Uncomment posts section to remove posts sitemap (useful for non-blog sites)

## Why remove users sitemap?

- **Privacy:** Prevents public listing of all authors/users
- **Security:** Avoids exposing usernames (if author URL = username)
- **SEO:** Author pages are usually low-value for business websites
- **Cleaner sitemap:** Focus on important content only

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

## License

GPL v2 or later

## Author

[Torwald45](https://github.com/Torwald45)
