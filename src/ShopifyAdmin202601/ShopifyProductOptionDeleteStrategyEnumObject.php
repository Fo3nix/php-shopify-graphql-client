<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of strategies available for use on the `productOptionDelete` mutation.
 */
class ShopifyProductOptionDeleteStrategyEnumObject extends EnumObject
{
    /**
     * The default strategy, the specified `Option` may only have one corresponding `value`.
     */
    const DEFAULT = "DEFAULT";
    /**
     * An `Option` with multiple `values` can be deleted. Remaining variants will be deleted, highest `position` first, in the event of duplicates being detected.
     */
    const POSITION = "POSITION";
    /**
     * An `Option` with multiple `values` can be deleted, but the operation only succeeds if no product variants get deleted.
     */
    const NON_DESTRUCTIVE = "NON_DESTRUCTIVE";
}
