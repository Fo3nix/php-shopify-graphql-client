<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible types for a badge.
 */
class ShopifyBadgeTypeEnumObject extends EnumObject
{
    /**
     * This badge has type `default`.
     */
    const DEFAULT = "DEFAULT";
    /**
     * This badge has type `success`.
     */
    const SUCCESS = "SUCCESS";
    /**
     * This badge has type `attention`.
     */
    const ATTENTION = "ATTENTION";
    /**
     * This badge has type `warning`.
     */
    const WARNING = "WARNING";
    /**
     * This badge has type `info`.
     */
    const INFO = "INFO";
    /**
     * This badge has type `critical`.
     */
    const CRITICAL = "CRITICAL";
}
