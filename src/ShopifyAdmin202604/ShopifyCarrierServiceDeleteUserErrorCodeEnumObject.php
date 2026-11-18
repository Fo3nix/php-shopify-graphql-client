<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CarrierServiceDeleteUserError`.
 */
class ShopifyCarrierServiceDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Carrier service deletion failed.
     */
    const CARRIER_SERVICE_DELETE_FAILED = "CARRIER_SERVICE_DELETE_FAILED";
}
