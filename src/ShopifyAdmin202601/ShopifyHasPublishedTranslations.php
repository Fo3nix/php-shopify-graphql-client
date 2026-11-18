<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTranslation;

/**
 * Published translations associated with the resource.
 */
interface ShopifyHasPublishedTranslations
{
    
    /**
     * The published translations associated with the resource.
     *
     * @return ShopifyTranslation[]
     */
    public function getTranslations(): ?array;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
