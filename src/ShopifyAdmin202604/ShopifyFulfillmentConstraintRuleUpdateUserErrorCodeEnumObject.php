<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `FulfillmentConstraintRuleUpdateUserError`.
 */
class ShopifyFulfillmentConstraintRuleUpdateUserErrorCodeEnumObject extends EnumObject
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
