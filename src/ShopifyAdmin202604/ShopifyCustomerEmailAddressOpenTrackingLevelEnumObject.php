<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The different levels related to whether a customer has opted in to having their opened emails tracked.
 */
class ShopifyCustomerEmailAddressOpenTrackingLevelEnumObject extends EnumObject
{
    /**
     * The customer has not specified whether they want to opt in or out of having their open emails tracked.
     */
    const UNKNOWN = "UNKNOWN";
    /**
     * The customer has opted in to having their open emails tracked.
     */
    const OPTED_IN = "OPTED_IN";
    /**
     * The customer has opted out of having their open emails tracked.
     */
    const OPTED_OUT = "OPTED_OUT";
}
