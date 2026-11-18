<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `DataSaleOptOutUserError`.
 */
class ShopifyDataSaleOptOutUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Data sale opt out failed.
     */
    const FAILED = "FAILED";
}
