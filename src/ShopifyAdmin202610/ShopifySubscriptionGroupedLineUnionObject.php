<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionGroupedLineUnionObject extends UnionObject
{
    public function onShopifySubscriptionLine()
    {
        $object = new ShopifySubscriptionLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionParentLine()
    {
        $object = new ShopifySubscriptionParentLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
