<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MetafieldValueTypeEnumObject extends EnumObject
{
    const STRING = "STRING";
    const INTEGER = "INTEGER";
    const JSON_STRING = "JSON_STRING";
    const BOOLEAN = "BOOLEAN";
}
