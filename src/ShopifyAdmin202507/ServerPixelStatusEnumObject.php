<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ServerPixelStatusEnumObject extends EnumObject
{
    const CONNECTED = "CONNECTED";
    const DISCONNECTED_UNCONFIGURED = "DISCONNECTED_UNCONFIGURED";
    const DISCONNECTED_CONFIGURED = "DISCONNECTED_CONFIGURED";
}
