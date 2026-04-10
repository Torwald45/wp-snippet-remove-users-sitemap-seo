# WP Snippet: Remove Users Sitemap SEO

Remove users sitemap (wp-sitemap-users-1.xml) from WP Core Sitemaps to improve privacy and SEO.

## Features

- Remove users sitemap (wp-sitemap-users-1.xml) from WP Core Sitemaps
- Prevent public exposure of author usernames
- Optional filters to remove taxonomies and posts sitemaps (commented in code)
- Lightweight (single filter hook)
- Works with WP 5.5+ Core Sitemaps

## Requirements

- WP 5.5 or higher (Core Sitemaps introduced in 5.5)
- PHP 7.4 or higher

## Installation

### Method 1: functions.php

1. Open your theme's functions.php file
2. Copy the entire content from remove-users-sitemap-seo.php
3. Paste at the end of your functions.php
4. Save the file

### Method 2: Code Snippets Plugin

1. Install and activate the Code Snippets plugin
2. Go to Snippets - Add New
3. Copy content from remove-users-sitemap-seo.php WITHOUT the opening php tag
4. Paste into the Code field
5. Activate the snippet

## Usage

After installation, the users sitemap will be automatically removed. To verify:

1. Visit yoursite.com/wp-sitemap.xml
2. Check that wp-sitemap-users-1.xml is NOT listed
3. Visiting yoursite.com/wp-sitemap-users-1.xml should return 404

## Technical Details

### Filter Hook
- Hook: wp_sitemaps_add_provider (WP Core Sitemaps)
- Priority: 10
- Arguments: 2 (provider, name)

### Functions
- torwald45_nousers_filter_sitemap() - filters out users sitemap provider

### Removed Sitemap
- File: wp-sitemap-users-1.xml
- Contains: List of all author usernames and profile URLs

### Optional Removals
Uncomment lines in code to also remove:
- Taxonomies sitemap (categories, tags)
- Posts sitemap (blog posts)

## Why Remove Users Sitemap?

- **Privacy:** Prevents public listing of all author usernames
- **Security:** Reduces attack surface (username enumeration)
- **SEO:** Removes unnecessary sitemap that provides no SEO value
- **Clean:** Author archives often duplicate content from posts

## Migration from v1.0.0

No migration needed - this snippet uses filters only and stores no data.

## Changelog

See CHANGELOG.md for version history.

## License

GPL v2 or later

## Author

Torwald45
