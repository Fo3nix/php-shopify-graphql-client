<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The image value.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject extends UnionObject
{
    public function onShopifyCheckoutAndAccountsConfigurationBrandingImage(): ShopifyCheckoutAndAccountsConfigurationBrandingImageQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
