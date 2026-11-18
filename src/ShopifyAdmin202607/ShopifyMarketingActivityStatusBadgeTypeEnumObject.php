<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * StatusBadgeType helps to identify the color of the status badge.
 */
class ShopifyMarketingActivityStatusBadgeTypeEnumObject extends EnumObject
{
    /**
     * This status badge has type default.
     */
    const DEFAULT = "DEFAULT";
    /**
     * This status badge has type success.
     */
    const SUCCESS = "SUCCESS";
    /**
     * This status badge has type attention.
     */
    const ATTENTION = "ATTENTION";
    /**
     * This status badge has type warning.
     */
    const WARNING = "WARNING";
    /**
     * This status badge has type info.
     */
    const INFO = "INFO";
    /**
     * This status badge has type critical.
     */
    const CRITICAL = "CRITICAL";
}
