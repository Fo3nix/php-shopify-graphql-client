<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about the credit card used for this transaction.
 */
class ShopifyTenderTransactionCreditCardDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransactionCreditCardDetails";

    /**
     * The name of the company that issued the customer's credit card. Example: `Visa`.
     */
    public function selectCreditCardCompany(): static
    {
        $this->selectField("creditCardCompany");

        return $this;
    }

    /**
     * The customer's credit card number, with all digits except the last 4 redacted. Example: `•••• •••• •••• 1234`
     */
    public function selectCreditCardNumber(): static
    {
        $this->selectField("creditCardNumber");

        return $this;
    }
}
