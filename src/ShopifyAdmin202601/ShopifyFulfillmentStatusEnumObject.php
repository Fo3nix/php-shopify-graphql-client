<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a fulfillment.
 */
class ShopifyFulfillmentStatusEnumObject extends EnumObject
{
    /**
     * The fulfillment was completed successfully.
     */
    const SUCCESS = "SUCCESS";
    /**
     * The fulfillment was canceled.
     */
    const CANCELLED = "CANCELLED";
    /**
     * There was an error with the fulfillment request.
     */
    const ERROR = "ERROR";
    /**
     * The fulfillment request failed.
     */
    const FAILURE = "FAILURE";
}
