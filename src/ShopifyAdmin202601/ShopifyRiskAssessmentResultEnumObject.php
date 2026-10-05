<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyRiskAssessmentResultEnumObject extends EnumObject
{
    const HIGH = "HIGH";
    const MEDIUM = "MEDIUM";
    const LOW = "LOW";
    const NONE = "NONE";
    const PENDING = "PENDING";
}
