<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the delivery state of a marketing activity.
 */
class ShopifyAbandonmentDeliveryStateEnumObject extends EnumObject
{
    /**
     * The marketing activity action has not yet been sent.
     */
    const NOT_SENT = "NOT_SENT";
    /**
     * The marketing activity action has been sent.
     */
    const SENT = "SENT";
    /**
     * The marketing activity action has been scheduled for later delivery.
     */
    const SCHEDULED = "SCHEDULED";
}
