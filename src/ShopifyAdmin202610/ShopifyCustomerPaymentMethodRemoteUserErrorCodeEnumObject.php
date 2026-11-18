<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CustomerPaymentMethodRemoteUserError`.
 */
class ShopifyCustomerPaymentMethodRemoteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * Exactly one remote reference is required.
     */
    const EXACTLY_ONE_REMOTE_REFERENCE_REQUIRED = "EXACTLY_ONE_REMOTE_REFERENCE_REQUIRED";
    /**
     * Authorize.net is not enabled for subscriptions.
     */
    const AUTHORIZE_NET_NOT_ENABLED_FOR_SUBSCRIPTIONS = "AUTHORIZE_NET_NOT_ENABLED_FOR_SUBSCRIPTIONS";
    /**
     * Braintree is not enabled for subscriptions.
     */
    const BRAINTREE_NOT_ENABLED_FOR_SUBSCRIPTIONS = "BRAINTREE_NOT_ENABLED_FOR_SUBSCRIPTIONS";
}
