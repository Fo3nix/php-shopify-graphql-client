<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyOrderTransactionKindEnumObject extends EnumObject
{
    const SALE = "SALE";
    const CAPTURE = "CAPTURE";
    const AUTHORIZATION = "AUTHORIZATION";
    const VOID = "VOID";
    const REFUND = "REFUND";
    const CHANGE = "CHANGE";
    const EMV_AUTHORIZATION = "EMV_AUTHORIZATION";
    const SUGGESTED_REFUND = "SUGGESTED_REFUND";
}
