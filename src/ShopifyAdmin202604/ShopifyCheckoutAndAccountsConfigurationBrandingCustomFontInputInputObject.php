<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing a custom font.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontInputInputObject extends InputObject
{
    const REQUIRED = ["weight", "genericFileId"];

    protected $weight;
    protected $genericFileId;

    /**
     * The font weight. Its value should be between 100 and 900.
     */
    public function setWeight($weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * A globally-unique ID for a font file uploaded via the Files api. Allowed font types are .woff and .woff2.
     */
    public function setGenericFileId($genericFileId): static
    {
        $this->genericFileId = $genericFileId;

        return $this;
    }
}
