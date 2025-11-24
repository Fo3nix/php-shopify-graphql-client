<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingTypographyStyleGlobalQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTypographyStyleGlobal";

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
