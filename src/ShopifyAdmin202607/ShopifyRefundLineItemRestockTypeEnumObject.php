<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyRefundLineItemRestockTypeEnumObject extends EnumObject
{
    const RETURN = "RETURN";
    const CANCEL = "CANCEL";
    const LEGACY_RESTOCK = "LEGACY_RESTOCK";
    const NO_RESTOCK = "NO_RESTOCK";
}
