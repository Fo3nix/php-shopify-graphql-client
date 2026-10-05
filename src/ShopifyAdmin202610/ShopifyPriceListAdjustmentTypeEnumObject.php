<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyPriceListAdjustmentTypeEnumObject extends EnumObject
{
    const PERCENTAGE_DECREASE = "PERCENTAGE_DECREASE";
    const PERCENTAGE_INCREASE = "PERCENTAGE_INCREASE";
}
