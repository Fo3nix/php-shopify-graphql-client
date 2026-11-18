<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentConstraintRuleDeleteUserError`.
 */
class ShopifyFulfillmentConstraintRuleDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Could not find fulfillment constraint rule for provided id.
     */
    const NOT_FOUND = "NOT_FOUND";
    /**
     * Unauthorized app scope.
     */
    const UNAUTHORIZED_APP_SCOPE = "UNAUTHORIZED_APP_SCOPE";
}
