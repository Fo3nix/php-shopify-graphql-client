<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyServerPixelStatusEnumObject extends EnumObject
{
    const CONNECTED = "CONNECTED";
    const DISCONNECTED_UNCONFIGURED = "DISCONNECTED_UNCONFIGURED";
    const DISCONNECTED_CONFIGURED = "DISCONNECTED_CONFIGURED";
}
