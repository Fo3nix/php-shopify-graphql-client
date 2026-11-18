<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The likelihood that an order is fraudulent.
 * This enum is deprecated in favor of
 * [RiskAssessmentResult](https://shopify.dev/api/admin-graphql/latest/enums/RiskAssessmentResult)
 * which allows for more granular risk levels, including PENDING and NONE.
 */
class ShopifyOrderRiskLevelEnumObject extends EnumObject
{
    /**
     * There is a low level of risk that this order is fraudulent.
     */
    const LOW = "LOW";
    /**
     * There is a medium level of risk that this order is fraudulent.
     */
    const MEDIUM = "MEDIUM";
    /**
     * There is a high level of risk that this order is fraudulent.
     */
    const HIGH = "HIGH";
}
