<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingFontSizeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingFontSize";

    public function selectBase()
    {
        $this->selectField("base");

        return $this;
    }

    public function selectRatio()
    {
        $this->selectField("ratio");

        return $this;
    }
}
