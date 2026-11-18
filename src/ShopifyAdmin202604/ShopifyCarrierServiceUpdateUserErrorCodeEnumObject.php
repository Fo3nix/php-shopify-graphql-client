<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CarrierServiceUpdateUserError`.
 */
class ShopifyCarrierServiceUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Carrier service update failed.
     */
    const CARRIER_SERVICE_UPDATE_FAILED = "CARRIER_SERVICE_UPDATE_FAILED";
}
