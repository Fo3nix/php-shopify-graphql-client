<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCustomerStateEnumObject extends EnumObject
{
    const DECLINED = "DECLINED";
    const DISABLED = "DISABLED";
    const ENABLED = "ENABLED";
    const INVITED = "INVITED";
}
