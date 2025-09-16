<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DiscountUnionObject extends UnionObject
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

    public function onDiscountCodeApp()
    {
        $object = new DiscountCodeAppQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeBasic()
    {
        $object = new DiscountCodeBasicQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeBxgy()
    {
        $object = new DiscountCodeBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeFreeShipping()
    {
        $object = new DiscountCodeFreeShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
