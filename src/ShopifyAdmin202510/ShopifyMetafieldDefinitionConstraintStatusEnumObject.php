<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMetafieldDefinitionConstraintStatusEnumObject extends EnumObject
{
    const CONSTRAINED_AND_UNCONSTRAINED = "CONSTRAINED_AND_UNCONSTRAINED";
    const CONSTRAINED_ONLY = "CONSTRAINED_ONLY";
    const UNCONSTRAINED_ONLY = "UNCONSTRAINED_ONLY";
}
