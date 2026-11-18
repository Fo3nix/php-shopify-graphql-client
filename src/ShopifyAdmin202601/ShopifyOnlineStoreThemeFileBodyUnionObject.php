<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * Represents the body of a theme file.
 */
class ShopifyOnlineStoreThemeFileBodyUnionObject extends UnionObject
{
    public function onShopifyOnlineStoreThemeFileBodyBase64(): ShopifyOnlineStoreThemeFileBodyBase64QueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileBodyBase64QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOnlineStoreThemeFileBodyText(): ShopifyOnlineStoreThemeFileBodyTextQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileBodyTextQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOnlineStoreThemeFileBodyUrl(): ShopifyOnlineStoreThemeFileBodyUrlQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileBodyUrlQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
