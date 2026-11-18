<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Type of a shipping package.
 */
class ShopifyShippingPackageTypeEnumObject extends EnumObject
{
    /**
     * A shipping box.
     */
    const BOX = "BOX";
    /**
     * A flat rate packaging supplied by a carrier.
     */
    const FLAT_RATE = "FLAT_RATE";
    /**
     * An envelope.
     */
    const ENVELOPE = "ENVELOPE";
    /**
     * A soft-pack, bubble-wrap or vinyl envelope.
     */
    const SOFT_PACK = "SOFT_PACK";
}
