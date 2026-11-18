<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Online Store preview URL of the object.
 */
interface ShopifyOnlineStorePreviewable
{
    
    /**
     * The [preview URL](https://help.shopify.com/manual/online-store/setting-up#preview-your-store) for the online store.
     *
     * @return string
     */
    public function getOnlineStorePreviewUrl(): mixed;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
