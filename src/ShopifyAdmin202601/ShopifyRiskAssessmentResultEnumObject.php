<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible risk levels for an order risk assessment.
 */
class ShopifyRiskAssessmentResultEnumObject extends EnumObject
{
    /**
     * Indicates a high likelihood that the order is fraudulent.
     */
    const HIGH = "HIGH";
    /**
     * Indicates a medium likelihood that the order is fraudulent.
     */
    const MEDIUM = "MEDIUM";
    /**
     * Indicates a low likelihood that the order is fraudulent.
     */
    const LOW = "LOW";
    /**
     * Indicates that the risk assessment will not provide a recommendation for the order.
     */
    const NONE = "NONE";
    /**
     * Indicates that the risk assessment is still pending.
     */
    const PENDING = "PENDING";
}
