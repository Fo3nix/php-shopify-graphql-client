<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CatalogTypeEnumObject extends EnumObject
{
    const NONE = "NONE";
    const APP = "APP";
    const COMPANY_LOCATION = "COMPANY_LOCATION";
    const MARKET = "MARKET";
}
