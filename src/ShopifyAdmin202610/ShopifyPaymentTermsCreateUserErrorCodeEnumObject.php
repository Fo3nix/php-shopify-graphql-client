<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PaymentTermsCreateUserError`.
 */
class ShopifyPaymentTermsCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * An error occurred while creating payment terms.
     */
    const PAYMENT_TERMS_CREATION_UNSUCCESSFUL = "PAYMENT_TERMS_CREATION_UNSUCCESSFUL";
}
