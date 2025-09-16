<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class RefundLineItemRestockTypeEnumObject extends EnumObject
{
    const RETURN = "RETURN";
    const CANCEL = "CANCEL";
    const LEGACY_RESTOCK = "LEGACY_RESTOCK";
    const NO_RESTOCK = "NO_RESTOCK";
}
