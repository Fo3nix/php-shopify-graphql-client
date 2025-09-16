<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class PriceListAdjustmentTypeEnumObject extends EnumObject
{
    const PERCENTAGE_DECREASE = "PERCENTAGE_DECREASE";
    const PERCENTAGE_INCREASE = "PERCENTAGE_INCREASE";
}
