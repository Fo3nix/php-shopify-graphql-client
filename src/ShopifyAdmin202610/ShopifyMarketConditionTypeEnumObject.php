<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMarketConditionTypeEnumObject extends EnumObject
{
    const REGION = "REGION";
    const LOCATION = "LOCATION";
    const COMPANY_LOCATION = "COMPANY_LOCATION";
    const CHANNEL = "CHANNEL";
}
