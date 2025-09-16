<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MetaobjectCapabilityTypeEnumObject extends EnumObject
{
    const PUBLISHABLE = "PUBLISHABLE";
    const TRANSLATABLE = "TRANSLATABLE";
    const RENDERABLE = "RENDERABLE";
    const ONLINE_STORE = "ONLINE_STORE";
}
