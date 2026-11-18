<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid statuses for a draft order.
 */
class ShopifyDraftOrderStatusEnumObject extends EnumObject
{
    /**
     * The draft order has been paid.
     */
    const COMPLETED = "COMPLETED";
    /**
     * An invoice for the draft order has been sent to the customer.
     */
    const INVOICE_SENT = "INVOICE_SENT";
    /**
     * The draft order is open. It has not been paid, and an invoice hasn't been sent.
     */
    const OPEN = "OPEN";
}
