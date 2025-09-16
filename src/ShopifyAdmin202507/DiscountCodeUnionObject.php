<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class DiscountCodeUnionObject extends UnionObject
{
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
