<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MetafieldDefinitionValidationStatusEnumObject extends EnumObject
{
    const ALL_VALID = "ALL_VALID";
    const IN_PROGRESS = "IN_PROGRESS";
    const SOME_INVALID = "SOME_INVALID";
}
