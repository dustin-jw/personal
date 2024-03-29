<?php
/**
 * Title: Default Footer
 * Slug: midnight-thunder/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */

$context = Timber::context();
$context['year'] = esc_html( getdate()['year'] );

Timber::render( 'patterns/footer.twig', $context );
