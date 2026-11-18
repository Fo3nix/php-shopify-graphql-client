<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The supported formats for webhook subscriptions.
 */
class ShopifyWebhookSubscriptionFormatEnumObject extends EnumObject
{
    const JSON = "JSON";
    const XML = "XML";
}
