<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MetafieldValidationStatusEnumObject extends EnumObject
{
    const ANY = "ANY";
    const VALID = "VALID";
    const INVALID = "INVALID";
}
