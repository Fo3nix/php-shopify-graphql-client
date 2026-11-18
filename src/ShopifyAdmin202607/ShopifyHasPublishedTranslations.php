<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTranslation;

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
