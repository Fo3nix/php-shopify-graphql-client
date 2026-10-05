<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingShopifyFont";

    public function selectSources()
    {
        $this->selectField("sources");

        return $this;
    }

    public function selectWeight()
    {
        $this->selectField("weight");

        return $this;
    }
}
