<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingSharedColorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSharedColors";

    public function selectAccent()
    {
        $this->selectField("accent");

        return $this;
    }

    public function selectButton()
    {
        $this->selectField("button");

        return $this;
    }

    public function selectControl()
    {
        $this->selectField("control");

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
