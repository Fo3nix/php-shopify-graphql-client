<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PubSubWebhookSubscriptionCreateUserError`.
 */
class ShopifyPubSubWebhookSubscriptionCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Invalid parameters provided.
     */
    const INVALID_PARAMETERS = "INVALID_PARAMETERS";
    /**
     * Address for this topic has already been taken.
     */
    const TAKEN = "TAKEN";
}
