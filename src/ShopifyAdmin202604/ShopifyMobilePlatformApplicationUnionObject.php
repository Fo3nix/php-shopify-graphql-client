<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifyMobilePlatformApplicationUnionObject extends UnionObject
{
    public function onShopifyAndroidApplication()
    {
        $object = new ShopifyAndroidApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyAppleApplication()
    {
        $object = new ShopifyAppleApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
