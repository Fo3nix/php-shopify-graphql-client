<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MetafieldDefinitionConstraintStatusEnumObject extends EnumObject
{
    const CONSTRAINED_AND_UNCONSTRAINED = "CONSTRAINED_AND_UNCONSTRAINED";
    const CONSTRAINED_ONLY = "CONSTRAINED_ONLY";
    const UNCONSTRAINED_ONLY = "UNCONSTRAINED_ONLY";
}
