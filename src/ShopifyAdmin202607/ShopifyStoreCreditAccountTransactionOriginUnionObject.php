<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The origin of a store credit account transaction.
 */
class ShopifyStoreCreditAccountTransactionOriginUnionObject extends UnionObject
{
    public function onShopifyOrderTransaction(): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
