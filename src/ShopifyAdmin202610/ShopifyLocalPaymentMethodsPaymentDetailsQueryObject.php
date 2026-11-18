<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Local payment methods payment details related to a transaction.
 */
class ShopifyLocalPaymentMethodsPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalPaymentMethodsPaymentDetails";

    /**
     * The descriptor by the payment provider. Only available for Amazon Pay and Buy with Prime.
     */
    public function selectPaymentDescriptor(): static
    {
        $this->selectField("paymentDescriptor");

        return $this;
    }

    /**
     * The name of payment method used by the buyer.
     */
    public function selectPaymentMethodName(): static
    {
        $this->selectField("paymentMethodName");

        return $this;
    }
}
