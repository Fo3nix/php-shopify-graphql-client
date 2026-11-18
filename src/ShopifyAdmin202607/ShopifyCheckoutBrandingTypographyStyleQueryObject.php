<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The typography customizations.
 */
class ShopifyCheckoutBrandingTypographyStyleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTypographyStyle";

    /**
     * The font.
     */
    public function selectFont(): static
    {
        $this->selectField("font");

        return $this;
    }

    /**
     * The kerning.
     */
    public function selectKerning(): static
    {
        $this->selectField("kerning");

        return $this;
    }

    /**
     * The letter case.
     */
    public function selectLetterCase(): static
    {
        $this->selectField("letterCase");

        return $this;
    }

    /**
     * The font size.
     */
    public function selectSize(): static
    {
        $this->selectField("size");

        return $this;
    }

    /**
     * The font weight.
     */
    public function selectWeight(): static
    {
        $this->selectField("weight");

        return $this;
    }
}
