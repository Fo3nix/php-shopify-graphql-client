<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class TenderTransactionDetailsUnionObject extends UnionObject
{
    public function onTenderTransactionCreditCardDetails()
    {
        $object = new TenderTransactionCreditCardDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
