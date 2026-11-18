<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of a payment terms or a payment terms template.
 */
class ShopifyPaymentTermsTypeEnumObject extends EnumObject
{
    /**
     * The payment terms or payment terms template is due on receipt.
     */
    const RECEIPT = "RECEIPT";
    /**
     * The payment terms or payment terms template is a net type. It's due a number of days after issue.
     */
    const NET = "NET";
    /**
     * The payment terms or payment terms template is a fixed type. It's due on a specified date.
     */
    const FIXED = "FIXED";
    /**
     * The payment terms or payment terms template is due on fulfillment.
     */
    const FULFILLMENT = "FULFILLMENT";
    /**
     * The type of the payment terms or payment terms template is unknown.
     */
    const UNKNOWN = "UNKNOWN";
}
