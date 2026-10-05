<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifyTenderTransactionDetailsUnionObject extends UnionObject
{
    public function onShopifyTenderTransactionCreditCardDetails()
    {
        $object = new ShopifyTenderTransactionCreditCardDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
