<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ErrorsServerPixelUserError`.
 */
class ShopifyErrorsServerPixelUserErrorCodeEnumObject extends EnumObject
{
    /**
     * A server pixel doesn't exist for this app and shop.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * A server pixel already exists for this app and shop. Only one server pixel can exist for any app and shop combination.
     */
    const ALREADY_EXISTS = "ALREADY_EXISTS";
    /**
     * PubSubProject and PubSubTopic values resulted in an address that is not a valid GCP pub/sub format.Address format should be pubsub://project:topic.
     */
    const PUB_SUB_ERROR = "PUB_SUB_ERROR";
    /**
     * Server Pixel must be configured with a valid AWS Event Bridge or GCP pub/sub endpoint address to be connected.
     */
    const NEEDS_CONFIGURATION_TO_CONNECT = "NEEDS_CONFIGURATION_TO_CONNECT";
}
