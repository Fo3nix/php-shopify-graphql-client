<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of resource a payment instrument mandate can be associated with.
 */
class ShopifyPaymentInstrumentMandateResourceTypeEnumObject extends EnumObject
{
    /**
     * A subscription contract.
     */
    const SUBSCRIPTIONS = "SUBSCRIPTIONS";
    /**
     * An order.
     */
    const ORDERS = "ORDERS";
    /**
     * A draft order.
     */
    const DRAFT_ORDERS = "DRAFT_ORDERS";
}
