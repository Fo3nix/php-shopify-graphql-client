<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyStyleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSharedTypographyStyle";

    public function selectKerning()
    {
        $this->selectField("kerning");

        return $this;
    }

    public function selectLetterCase()
    {
        $this->selectField("letterCase");

        return $this;
    }
}
