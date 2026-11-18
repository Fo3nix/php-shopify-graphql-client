<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocalizedFieldConnection;

/**
 * Localized fields associated with the specified resource.
 */
interface ShopifyHasLocalizedFields
{
    
    /**
     * List of localized fields for the resource.
     *
     * @return ShopifyLocalizedFieldConnection
     */
    public function getLocalizedFields(): ?ShopifyLocalizedFieldConnection;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
