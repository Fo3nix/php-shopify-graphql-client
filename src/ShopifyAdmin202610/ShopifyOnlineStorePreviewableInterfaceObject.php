<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Online Store preview URL of the object.
 */
class ShopifyOnlineStorePreviewableInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "OnlineStorePreviewable";

    /**
     * The [preview URL](https://help.shopify.com/manual/online-store/setting-up#preview-your-store) for the online store.
     */
    public function selectOnlineStorePreviewUrl(): static
    {
        $this->selectField("onlineStorePreviewUrl");

        return $this;
    }

    public function onProduct(): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
