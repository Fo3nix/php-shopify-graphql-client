<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The actor who initiated a subscription action.
 */
class ShopifySubscriptionActorEnumObject extends EnumObject
{
    /**
     * The subscription action was initiated by a customer.
     */
    const CUSTOMER = "CUSTOMER";
    /**
     * The subscription action was initiated by a merchant.
     */
    const MERCHANT = "MERCHANT";
    /**
     * The subscription action was initiated by a partner.
     */
    const PARTNER = "PARTNER";
}
