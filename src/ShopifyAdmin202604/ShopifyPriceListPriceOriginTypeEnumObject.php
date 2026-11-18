<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the origin of a price, either fixed (defined on the price list) or relative (calculated using a price list adjustment configuration). For examples, refer to [PriceList](https://shopify.dev/api/admin-graphql/latest/queries/priceList#section-examples).
 */
class ShopifyPriceListPriceOriginTypeEnumObject extends EnumObject
{
    /**
     * The price is defined on the price list.
     */
    const FIXED = "FIXED";
    /**
     * The price is relative to the adjustment type and value.
     */
    const RELATIVE = "RELATIVE";
}
