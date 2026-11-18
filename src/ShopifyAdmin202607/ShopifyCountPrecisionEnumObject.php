<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The precision of the value returned by a count field.
 */
class ShopifyCountPrecisionEnumObject extends EnumObject
{
    /**
     * The count is exactly the value. A write may not be reflected instantaneously.
     */
    const EXACT = "EXACT";
    /**
     * The count is at least the value. A limit was imposed and reached.
     */
    const AT_LEAST = "AT_LEAST";
}
