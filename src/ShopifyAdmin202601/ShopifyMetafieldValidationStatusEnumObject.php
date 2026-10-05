<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMetafieldValidationStatusEnumObject extends EnumObject
{
    const ANY = "ANY";
    const VALID = "VALID";
    const INVALID = "INVALID";
}
