<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTenderTransactionCreditCardDetailsQueryObject extends QueryObject
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
