<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingOrderSummarySectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingOrderSummarySection";

    public function selectBackground()
    {
        $this->selectField("background");

        return $this;
    }

    public function selectBorder()
    {
        $this->selectField("border");

        return $this;
    }

    public function selectBorderStyle()
    {
        $this->selectField("borderStyle");

        return $this;
    }

    public function selectBorderWidth()
    {
        $this->selectField("borderWidth");

        return $this;
    }

    public function selectColorScheme()
    {
        $this->selectField("colorScheme");

        return $this;
    }

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    public function selectPadding()
    {
        $this->selectField("padding");

        return $this;
    }

    public function selectShadow()
    {
        $this->selectField("shadow");

        return $this;
    }
}
