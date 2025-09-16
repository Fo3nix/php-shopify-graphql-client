<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CustomerStateEnumObject extends EnumObject
{
    const DECLINED = "DECLINED";
    const DISABLED = "DISABLED";
    const ENABLED = "ENABLED";
    const INVITED = "INVITED";
}
