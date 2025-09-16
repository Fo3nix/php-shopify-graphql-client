<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OrderDisplayFinancialStatusEnumObject extends EnumObject
{
    const PENDING = "PENDING";
    const AUTHORIZED = "AUTHORIZED";
    const PARTIALLY_PAID = "PARTIALLY_PAID";
    const PARTIALLY_REFUNDED = "PARTIALLY_REFUNDED";
    const VOIDED = "VOIDED";
    const PAID = "PAID";
    const REFUNDED = "REFUNDED";
    const EXPIRED = "EXPIRED";
}
