<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Whether a column was explicitly requested in the query or dynamically generated.
 */
class ShopifyShopifyqlColumnOriginEnumObject extends EnumObject
{
    /**
     * The column origin is unspecified.
     */
    const UNSPECIFIED = "UNSPECIFIED";
    /**
     * The column was explicitly requested in the query.
     */
    const REQUESTED = "REQUESTED";
    /**
     * The column was dynamically generated (e.g. a comparison, total, benchmark, or attribution).
     */
    const GENERATED = "GENERATED";
}
