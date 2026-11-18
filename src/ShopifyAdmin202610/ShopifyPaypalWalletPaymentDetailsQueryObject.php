<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * PayPal Wallet payment details related to a transaction.
 */
class ShopifyPaypalWalletPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaypalWalletPaymentDetails";

    /**
     * The name of payment method used by the buyer.
     */
    public function selectPaymentMethodName(): static
    {
        $this->selectField("paymentMethodName");

        return $this;
    }
}
