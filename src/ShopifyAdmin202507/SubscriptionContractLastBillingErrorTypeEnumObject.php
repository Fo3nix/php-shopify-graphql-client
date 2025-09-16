<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class SubscriptionContractLastBillingErrorTypeEnumObject extends EnumObject
{
    const PAYMENT_ERROR = "PAYMENT_ERROR";
    const CUSTOMER_ERROR = "CUSTOMER_ERROR";
    const INVENTORY_ERROR = "INVENTORY_ERROR";
    const OTHER = "OTHER";
}
