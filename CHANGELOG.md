# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [2.0.0] - 2025-10-17

### Changed
- **BREAKING CHANGE:** Added unique two-level prefixes to prevent conflicts with other plugins
- Function now uses torwald45_nousers_filter_sitemap() instead of anonymous closure
- Named function instead of closure for easier debugging

### Added
- Function torwald45_nousers_filter_sitemap() - filters sitemap providers

### Technical
- No database changes (filter-only functionality)
- No migration needed (no stored data)

## [1.0.0] - 2025-10-15

### Added
- Remove users sitemap from WP Core Sitemaps
- wp_sitemaps_add_provider filter implementation
- Optional filters for taxonomies and posts sitemaps (commented out)
- Privacy improvement by hiding author usernames
- SEO improvement by removing unnecessary sitemap
- WP 5.5+ compatibility
- PHP 7.4+ compatibility
