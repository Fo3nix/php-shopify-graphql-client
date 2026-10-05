<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifyOnlineStoreThemeFileBodyUnionObject extends UnionObject
{
    public function onShopifyOnlineStoreThemeFileBodyBase64()
    {
        $object = new ShopifyOnlineStoreThemeFileBodyBase64QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOnlineStoreThemeFileBodyText()
    {
        $object = new ShopifyOnlineStoreThemeFileBodyTextQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOnlineStoreThemeFileBodyUrl()
    {
        $object = new ShopifyOnlineStoreThemeFileBodyUrlQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
