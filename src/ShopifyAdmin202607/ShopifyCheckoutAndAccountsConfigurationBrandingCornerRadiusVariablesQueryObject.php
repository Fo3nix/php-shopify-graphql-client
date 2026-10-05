<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusVariablesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCornerRadiusVariables";

    public function selectBase()
    {
        $this->selectField("base");

        return $this;
    }

    public function selectLarge()
    {
        $this->selectField("large");

        return $this;
    }

    public function selectSmall()
    {
        $this->selectField("small");

        return $this;
    }
}
