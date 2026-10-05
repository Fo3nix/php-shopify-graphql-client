<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyUnitPriceMeasurementMeasuredTypeEnumObject extends EnumObject
{
    const VOLUME = "VOLUME";
    const WEIGHT = "WEIGHT";
    const LENGTH = "LENGTH";
    const AREA = "AREA";
    const COUNT = "COUNT";
    const UNKNOWN = "UNKNOWN";
}
