<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * A group of fonts.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupUnionObject extends UnionObject
{
    public function onShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup(): ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup(): ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
