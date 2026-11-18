<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldDefinitionConnection;

/**
 * Resources that metafield definitions can be applied to.
 */
interface ShopifyHasMetafieldDefinitions
{
    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
