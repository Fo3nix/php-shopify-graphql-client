<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifyDepositConfigurationUnionObject extends UnionObject
{
    public function onShopifyDepositPercentage()
    {
        $object = new ShopifyDepositPercentageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
