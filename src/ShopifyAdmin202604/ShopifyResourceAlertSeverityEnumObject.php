<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible severity levels for a resource alert.
 */
class ShopifyResourceAlertSeverityEnumObject extends EnumObject
{
    /**
     * Indicates a neutral alert. For example, an accepted dispute.
     */
    const DEFAULT = "DEFAULT";
    /**
     * Indicates an informative alert. For example, an escalated dispute.
     */
    const INFO = "INFO";
    /**
     * Indicates an informative alert. For example, a new dispute.
     */
    const WARNING = "WARNING";
    /**
     * Indicates a success alert. For example, a winning a dispute.
     */
    const SUCCESS = "SUCCESS";
    /**
     * Indicates a critical alert. For example, a blocked app.
     */
    const CRITICAL = "CRITICAL";
}
