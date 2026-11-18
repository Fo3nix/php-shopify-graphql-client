<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * Configuration of the deposit.
 */
class ShopifyDepositConfigurationUnionObject extends UnionObject
{
    public function onShopifyDepositPercentage(): ShopifyDepositPercentageQueryObject
    {
        $object = new ShopifyDepositPercentageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
