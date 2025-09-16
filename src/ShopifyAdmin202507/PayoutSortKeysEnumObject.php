<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class PayoutSortKeysEnumObject extends EnumObject
{
    const ADJUSTMENT_GROSS = "ADJUSTMENT_GROSS";
    const ADVANCE_GROSS = "ADVANCE_GROSS";
    const AMOUNT = "AMOUNT";
    const CHARGE_GROSS = "CHARGE_GROSS";
    const DUTIES_GROSS = "DUTIES_GROSS";
    const FEE_AMOUNT = "FEE_AMOUNT";
    const ID = "ID";
    const ISSUED_AT = "ISSUED_AT";
    const REFUND_GROSS = "REFUND_GROSS";
    const SHIPPING_LABEL_GROSS = "SHIPPING_LABEL_GROSS";
    const STATUS = "STATUS";
}
