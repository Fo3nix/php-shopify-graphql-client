<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `DeliveryPromiseProviderUpsertUserError`.
 */
class ShopifyDeliveryPromiseProviderUpsertUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The location doesn't belong to the app.
     */
    const MUST_BELONG_TO_APP = "MUST_BELONG_TO_APP";
    /**
     * The time zone is invalid.
     */
    const INVALID_TIME_ZONE = "INVALID_TIME_ZONE";
}
