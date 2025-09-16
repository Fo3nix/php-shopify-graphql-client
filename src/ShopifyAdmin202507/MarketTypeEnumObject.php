<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MarketTypeEnumObject extends EnumObject
{
    const NONE = "NONE";
    const REGION = "REGION";
    const LOCATION = "LOCATION";
    const COMPANY_LOCATION = "COMPANY_LOCATION";
}
