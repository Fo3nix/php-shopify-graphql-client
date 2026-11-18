<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the delivery method type for a Shop Pay payment request.
 */
class ShopifyShopPayPaymentRequestDeliveryMethodTypeEnumObject extends EnumObject
{
    /**
     * The delivery method type is shipping.
     */
    const SHIPPING = "SHIPPING";
    /**
     * The delivery method type is pickup.
     */
    const PICKUP = "PICKUP";
}
