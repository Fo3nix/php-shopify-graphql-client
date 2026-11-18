<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of strategies available for use on the `productVariantsBulkCreate` mutation.
 */
class ShopifyProductVariantsBulkCreateStrategyEnumObject extends EnumObject
{
    /**
     * The default strategy. Deletes the standalone default ("Default Title") variant when it's the only variant on the product. Preserves the standalone custom variant.
     */
    const DEFAULT = "DEFAULT";
    /**
     * Deletes the existing standalone variant when the product has only a single default ("Default Title") or custom variant.
     */
    const REMOVE_STANDALONE_VARIANT = "REMOVE_STANDALONE_VARIANT";
    /**
     * Preserves the existing standalone variant when the product has only a single default ("Default Title") or a single custom variant.
     */
    const PRESERVE_STANDALONE_VARIANT = "PRESERVE_STANDALONE_VARIANT";
}
