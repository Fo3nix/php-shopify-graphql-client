<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomFont";

    public function selectGenericFileId()
    {
        $this->selectField("genericFileId");

        return $this;
    }

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
