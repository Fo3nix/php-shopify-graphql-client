<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupUnionObject extends UnionObject
{
    public function onShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup()
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup()
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
