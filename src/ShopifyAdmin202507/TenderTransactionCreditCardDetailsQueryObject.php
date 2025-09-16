<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TenderTransactionCreditCardDetailsQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransactionCreditCardDetails";

    public function selectCreditCardCompany()
    {
        $this->selectField("creditCardCompany");

        return $this;
    }

    public function selectCreditCardNumber()
    {
        $this->selectField("creditCardNumber");

        return $this;
    }
}
