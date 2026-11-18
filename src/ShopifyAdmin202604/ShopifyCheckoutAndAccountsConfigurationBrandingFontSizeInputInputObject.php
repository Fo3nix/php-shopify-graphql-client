<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the font size.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingFontSizeInputInputObject extends InputObject
{
    protected $base;
    protected $ratio;

    /**
     * The base font size. Its value should be between 12.0 and 18.0.
     */
    public function setBase($base): static
    {
        $this->base = $base;

        return $this;
    }

    /**
     * The scale ratio used to derive all font sizes such as small and large. Its value should be between 1.0 and 1.4.
     */
    public function setRatio($ratio): static
    {
        $this->ratio = $ratio;

        return $this;
    }
}
