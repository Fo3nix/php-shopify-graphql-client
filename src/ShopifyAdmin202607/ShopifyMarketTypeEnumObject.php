<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMarketTypeEnumObject extends EnumObject
{
    const NONE = "NONE";
    const REGION = "REGION";
    const LOCATION = "LOCATION";
    const COMPANY_LOCATION = "COMPANY_LOCATION";
    const CHANNEL = "CHANNEL";
}
