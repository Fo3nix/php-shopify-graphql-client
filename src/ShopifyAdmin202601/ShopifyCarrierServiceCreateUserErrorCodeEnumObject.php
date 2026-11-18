<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CarrierServiceCreateUserError`.
 */
class ShopifyCarrierServiceCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Carrier service creation failed.
     */
    const CARRIER_SERVICE_CREATE_FAILED = "CARRIER_SERVICE_CREATE_FAILED";
}
