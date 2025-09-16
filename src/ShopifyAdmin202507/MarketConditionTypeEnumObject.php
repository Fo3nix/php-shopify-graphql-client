<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MarketConditionTypeEnumObject extends EnumObject
{
    const REGION = "REGION";
    const LOCATION = "LOCATION";
    const COMPANY_LOCATION = "COMPANY_LOCATION";
}
