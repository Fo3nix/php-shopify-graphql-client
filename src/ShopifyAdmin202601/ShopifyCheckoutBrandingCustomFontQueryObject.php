<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A custom font.
 */
class ShopifyCheckoutBrandingCustomFontQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCustomFont";

    /**
     * Globally unique ID reference to the custom font file.
     */
    public function selectGenericFileId(): static
    {
        $this->selectField("genericFileId");

        return $this;
    }

    /**
     * The font sources.
     */
    public function selectSources(): static
    {
        $this->selectField("sources");

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
