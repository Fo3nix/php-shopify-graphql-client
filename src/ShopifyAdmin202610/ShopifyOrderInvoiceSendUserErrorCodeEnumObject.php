<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `OrderInvoiceSendUserError`.
 */
class ShopifyOrderInvoiceSendUserErrorCodeEnumObject extends EnumObject
{
    /**
     * An error occurred while sending the invoice.
     */
    const ORDER_INVOICE_SEND_UNSUCCESSFUL = "ORDER_INVOICE_SEND_UNSUCCESSFUL";
}
