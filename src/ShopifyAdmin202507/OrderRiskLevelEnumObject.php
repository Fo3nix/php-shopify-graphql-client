<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OrderRiskLevelEnumObject extends EnumObject
{
    const LOW = "LOW";
    const MEDIUM = "MEDIUM";
    const HIGH = "HIGH";
}
