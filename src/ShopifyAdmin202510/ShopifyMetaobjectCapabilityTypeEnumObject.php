<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMetaobjectCapabilityTypeEnumObject extends EnumObject
{
    const PUBLISHABLE = "PUBLISHABLE";
    const TRANSLATABLE = "TRANSLATABLE";
    const RENDERABLE = "RENDERABLE";
    const ONLINE_STORE = "ONLINE_STORE";
}
