<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingTypographyStyleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTypographyStyle";

    public function selectFont()
    {
        $this->selectField("font");

        return $this;
    }

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

    public function selectSize()
    {
        $this->selectField("size");

        return $this;
    }

    public function selectWeight()
    {
        $this->selectField("weight");

        return $this;
    }
}
