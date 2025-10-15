<?php
/**
 * Remove Users Sitemap SEO
 * 
 * Remove users sitemap from WordPress Core Sitemaps to improve privacy and SEO.
 * 
 * @author      Torwald45
 * @link        https://github.com/Torwald45/wp-snippet-remove-users-sitemap-seo
 * @license     GPL-2.0-or-later
 * @version     1.0.0
 */

add_filter( 'wp_sitemaps_add_provider', function( $provider, $name ) {
    // Remove users sitemap (wp-sitemap-users-1.xml)
    if ( 'users' === $name ) {
        return false;
    }
    
    // Optional: uncomment lines below to also remove:
    
    // Remove taxonomies sitemap (categories, tags)
    // if ( 'taxonomies' === $name ) {
    //     return false;
    // }
    
    // Remove posts sitemap (useful for non-blog sites)
    // if ( 'posts' === $name ) {
    //     return false;
    // }
    
    return $provider;
}, 10, 2 );
