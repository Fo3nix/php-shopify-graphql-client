<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCatalogTypeEnumObject extends EnumObject
{
    const NONE = "NONE";
    const APP = "APP";
    const COMPANY_LOCATION = "COMPANY_LOCATION";
    const MARKET = "MARKET";
}
