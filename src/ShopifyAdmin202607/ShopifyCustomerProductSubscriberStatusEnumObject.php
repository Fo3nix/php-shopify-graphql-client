<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible product subscription states for a customer, as defined by the customer's subscription contracts.
 */
class ShopifyCustomerProductSubscriberStatusEnumObject extends EnumObject
{
    /**
     * The customer has at least one active subscription contract.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The customer's last subscription contract was cancelled and there are no other active or paused
     * subscription contracts.
     */
    const CANCELLED = "CANCELLED";
    /**
     * The customer's last subscription contract expired and there are no other active or paused
     * subscription contracts.
     */
    const EXPIRED = "EXPIRED";
    /**
     * The customer's last subscription contract failed and there are no other active or paused
     * subscription contracts.
     */
    const FAILED = "FAILED";
    /**
     * The customer has never had a subscription contract.
     */
    const NEVER_SUBSCRIBED = "NEVER_SUBSCRIBED";
    /**
     * The customer has at least one paused subscription contract and there are no other active
     * subscription contracts.
     */
    const PAUSED = "PAUSED";
}
