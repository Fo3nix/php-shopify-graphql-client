<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DiscountItemsUnionObject extends UnionObject
{
    public function onAllDiscountItems()
    {
        $object = new AllDiscountItemsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCollections()
    {
        $object = new DiscountCollectionsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountProducts()
    {
        $object = new DiscountProductsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
