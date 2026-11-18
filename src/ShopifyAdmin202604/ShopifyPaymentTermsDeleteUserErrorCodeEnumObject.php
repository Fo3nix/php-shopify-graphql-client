<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PaymentTermsDeleteUserError`.
 */
class ShopifyPaymentTermsDeleteUserErrorCodeEnumObject extends EnumObject
{
    /**
     * An error occurred while deleting payment terms.
     */
    const PAYMENT_TERMS_DELETE_UNSUCCESSFUL = "PAYMENT_TERMS_DELETE_UNSUCCESSFUL";
}
