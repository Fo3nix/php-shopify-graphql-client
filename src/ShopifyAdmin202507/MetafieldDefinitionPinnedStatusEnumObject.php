<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MetafieldDefinitionPinnedStatusEnumObject extends EnumObject
{
    const ANY = "ANY";
    const PINNED = "PINNED";
    const UNPINNED = "UNPINNED";
}
