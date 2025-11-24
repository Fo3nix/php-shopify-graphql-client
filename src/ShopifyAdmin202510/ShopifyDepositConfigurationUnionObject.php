<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

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
