<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * Information about the payment instrument used for this transaction.
 */
class ShopifyTenderTransactionDetailsUnionObject extends UnionObject
{
    public function onShopifyTenderTransactionCreditCardDetails(): ShopifyTenderTransactionCreditCardDetailsQueryObject
    {
        $object = new ShopifyTenderTransactionCreditCardDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
