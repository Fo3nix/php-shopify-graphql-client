<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The current state of a server pixel.
 */
class ShopifyServerPixelStatusEnumObject extends EnumObject
{
    /**
     * This server pixel is connected: it will stream customer events to the endpoint if it is configured properly.
     */
    const CONNECTED = "CONNECTED";
    /**
     * This server pixel is disconnected and unconfigured: it does not stream events to the endpoint and no endpoint address had been added to the server pixel.
     */
    const DISCONNECTED_UNCONFIGURED = "DISCONNECTED_UNCONFIGURED";
    /**
     * This server pixel is disconnected: it does not stream events to the endpoint and an endpoint address has been added to the server pixel.
     */
    const DISCONNECTED_CONFIGURED = "DISCONNECTED_CONFIGURED";
}
