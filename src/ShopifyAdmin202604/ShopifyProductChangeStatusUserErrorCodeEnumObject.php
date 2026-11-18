<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductChangeStatusUserError`.
 */
class ShopifyProductChangeStatusUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Product could not be found.
     */
    const PRODUCT_NOT_FOUND = "PRODUCT_NOT_FOUND";
    /**
     * Cannot be unarchived because combined listings are not compatible with this store.
     */
    const COMBINED_LISTINGS_NOT_COMPATIBLE_WITH_SHOP = "COMBINED_LISTINGS_NOT_COMPATIBLE_WITH_SHOP";
}
