<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of page where a shareable price rule URL lands.
 */
class ShopifyPriceRuleShareableUrlTargetTypeEnumObject extends EnumObject
{
    /**
     * The URL lands on a home page.
     */
    const HOME = "HOME";
    /**
     * The URL lands on a product page.
     */
    const PRODUCT = "PRODUCT";
    /**
     * The URL lands on a collection page.
     */
    const COLLECTION = "COLLECTION";
}
