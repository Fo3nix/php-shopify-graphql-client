<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingColorGlobalQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorGlobal";

    public function selectAccent()
    {
        $this->selectField("accent");

        return $this;
    }

    public function selectBrand()
    {
        $this->selectField("brand");

        return $this;
    }

    public function selectCritical()
    {
        $this->selectField("critical");

        return $this;
    }

    public function selectDecorative()
    {
        $this->selectField("decorative");

        return $this;
    }

    public function selectInfo()
    {
        $this->selectField("info");

        return $this;
    }

    public function selectSuccess()
    {
        $this->selectField("success");

        return $this;
    }

    public function selectWarning()
    {
        $this->selectField("warning");

        return $this;
    }
}
