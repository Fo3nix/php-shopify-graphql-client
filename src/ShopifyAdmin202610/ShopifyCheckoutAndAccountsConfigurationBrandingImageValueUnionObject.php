<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject extends UnionObject
{
    public function onShopifyCheckoutAndAccountsConfigurationBrandingImage()
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
