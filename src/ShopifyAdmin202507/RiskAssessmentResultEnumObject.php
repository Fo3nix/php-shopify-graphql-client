<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class RiskAssessmentResultEnumObject extends EnumObject
{
    const HIGH = "HIGH";
    const MEDIUM = "MEDIUM";
    const LOW = "LOW";
    const NONE = "NONE";
    const PENDING = "PENDING";
}
