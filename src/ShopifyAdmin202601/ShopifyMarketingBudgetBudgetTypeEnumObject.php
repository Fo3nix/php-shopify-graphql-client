<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The budget type for a marketing activity.
 */
class ShopifyMarketingBudgetBudgetTypeEnumObject extends EnumObject
{
    /**
     * A daily budget.
     */
    const DAILY = "DAILY";
    /**
     * A budget for the lifetime of a marketing activity.
     */
    const LIFETIME = "LIFETIME";
}
