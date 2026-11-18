<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of the point of sale device payment session. Payments can't be processed or refunded during a closed session, and the cash drawer balance can't be adjusted or corrected.
 */
class ShopifyPointOfSaleDevicePaymentSessionStatusEnumObject extends EnumObject
{
    /**
     * The point of sale device payment session is open.
     */
    const OPEN = "OPEN";
    /**
     * The point of sale device payment session is closed.
     */
    const CLOSED = "CLOSED";
}
