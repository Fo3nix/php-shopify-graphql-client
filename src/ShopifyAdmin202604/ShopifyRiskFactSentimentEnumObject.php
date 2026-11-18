<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible sentiments for a risk fact.
 */
class ShopifyRiskFactSentimentEnumObject extends EnumObject
{
    /**
     * A positive contributor that lowers the risk.
     */
    const POSITIVE = "POSITIVE";
    /**
     * A neutral contributor with regard to risk.
     */
    const NEUTRAL = "NEUTRAL";
    /**
     * A negative contributor that increases the risk.
     */
    const NEGATIVE = "NEGATIVE";
}
