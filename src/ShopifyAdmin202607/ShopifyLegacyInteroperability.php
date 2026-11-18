<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Interoperability metadata for types that directly correspond to a REST Admin API resource.
 * For example, on the Product type, LegacyInteroperability returns metadata for the corresponding [Product object](https://shopify.dev/api/admin-graphql/latest/objects/product) in the REST Admin API.
 */
interface ShopifyLegacyInteroperability
{
    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
