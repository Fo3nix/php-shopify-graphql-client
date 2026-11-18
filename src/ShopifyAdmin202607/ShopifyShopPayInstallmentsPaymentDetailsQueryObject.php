<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Shop Pay Installments payment details related to a transaction.
 */
class ShopifyShopPayInstallmentsPaymentDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayInstallmentsPaymentDetails";

    /**
     * The name of payment method used by the buyer.
     */
    public function selectPaymentMethodName(): static
    {
        $this->selectField("paymentMethodName");

        return $this;
    }
}
