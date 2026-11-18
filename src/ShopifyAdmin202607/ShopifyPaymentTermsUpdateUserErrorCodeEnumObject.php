<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PaymentTermsUpdateUserError`.
 */
class ShopifyPaymentTermsUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * An error occurred while updating payment terms.
     */
    const PAYMENT_TERMS_UPDATE_UNSUCCESSFUL = "PAYMENT_TERMS_UPDATE_UNSUCCESSFUL";
}
