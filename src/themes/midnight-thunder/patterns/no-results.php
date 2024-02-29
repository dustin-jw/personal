<?php
/**
 * Title: No Results Content
 * Slug: midnight-thunder/no-results
 * Inserter: no
 */

$context = Timber::context();
$context['message'] = esc_html_x( "Couldn't find what you were looking for? Please try again with some different keywords.", 'Message explaining that there are no results returned from a search', 'midnight-thunder' );
$context['search_label'] = esc_attr_x( 'Search', 'label', 'midnight-thunder' );
$context['search_placeholder'] = esc_attr_x( 'Search...', 'placeholder for search field', 'midnight-thunder' );

Timber::render( 'patterns/no-results.twig', $context );
