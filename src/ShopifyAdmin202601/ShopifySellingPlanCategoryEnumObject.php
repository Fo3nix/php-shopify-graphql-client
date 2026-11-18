<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The category of the selling plan. For the `OTHER` category,
 *          you must fill out our [request form](https://docs.google.com/forms/d/e/1FAIpQLSeU18Xmw0Q61V8wdH-dfGafFqIBfRchQKUO8WAF3yJTvgyyZQ/viewform),
 *          where we'll review your request for a new purchase option.
 */
class ShopifySellingPlanCategoryEnumObject extends EnumObject
{
    /**
     * The selling plan is for anything not in one of the other categories.
     */
    const OTHER = "OTHER";
    /**
     * The selling plan is for pre-orders.
     */
    const PRE_ORDER = "PRE_ORDER";
    /**
     * The selling plan is for subscriptions.
     */
    const SUBSCRIPTION = "SUBSCRIPTION";
    /**
     * The selling plan is for try before you buy purchases.
     */
    const TRY_BEFORE_YOU_BUY = "TRY_BEFORE_YOU_BUY";
}
