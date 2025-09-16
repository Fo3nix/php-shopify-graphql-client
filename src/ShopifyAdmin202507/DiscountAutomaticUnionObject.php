<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DiscountAutomaticUnionObject extends UnionObject
{
    public function onDiscountAutomaticApp()
    {
        $object = new DiscountAutomaticAppQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticBasic()
    {
        $object = new DiscountAutomaticBasicQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticBxgy()
    {
        $object = new DiscountAutomaticBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticFreeShipping()
    {
        $object = new DiscountAutomaticFreeShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
