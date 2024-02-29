<?php
/**
 * Title: 404
 * Slug: midnight-thunder/404
 * Inserter: no
 */

$context = Timber::context();
$context['heading'] = esc_html_x( '404', 'Error code for a webpage that is not found.', 'midnight-thunder' );
$context['message'] = esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'midnight-thunder' );
$context['search_label'] = esc_attr_x( 'Search', 'label', 'midnight-thunder' );
$context['search_placeholder'] = esc_attr_x( 'Search...', 'placeholder for search field', 'midnight-thunder' );

Timber::render( 'patterns/404.twig', $context );
