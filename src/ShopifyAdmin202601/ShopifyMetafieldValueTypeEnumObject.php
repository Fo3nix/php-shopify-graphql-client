<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMetafieldValueTypeEnumObject extends EnumObject
{
    const STRING = "STRING";
    const INTEGER = "INTEGER";
    const JSON_STRING = "JSON_STRING";
    const BOOLEAN = "BOOLEAN";
}
