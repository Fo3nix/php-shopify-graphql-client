<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DepositConfigurationUnionObject extends UnionObject
{
    public function onDepositPercentage()
    {
        $object = new DepositPercentageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
