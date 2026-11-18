<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible market statuses.
 */
class ShopifyMarketStatusEnumObject extends EnumObject
{
    /**
     * The market is active.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The market is in draft.
     */
    const DRAFT = "DRAFT";
}
