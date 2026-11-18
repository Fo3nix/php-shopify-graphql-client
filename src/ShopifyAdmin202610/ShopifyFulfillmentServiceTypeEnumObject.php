<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of a fulfillment service.
 */
class ShopifyFulfillmentServiceTypeEnumObject extends EnumObject
{
    /**
     * Fulfillment by gift card.
     */
    const GIFT_CARD = "GIFT_CARD";
    /**
     * Manual fulfillment by the merchant.
     */
    const MANUAL = "MANUAL";
    /**
     * Fulfillment by a third-party fulfillment service.
     */
    const THIRD_PARTY = "THIRD_PARTY";
}
