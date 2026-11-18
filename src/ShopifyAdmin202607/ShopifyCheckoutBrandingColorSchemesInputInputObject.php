<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the color schemes.
 */
class ShopifyCheckoutBrandingColorSchemesInputInputObject extends InputObject
{
    protected $scheme1;
    protected $scheme2;
    protected $scheme3;
    protected $scheme4;
    protected $scheme5;
    protected $scheme6;

    /**
     * The primary scheme. By default, it’s used for the main area of the interface.
     */
    public function setScheme1(ShopifyCheckoutBrandingColorSchemeInputInputObject $shopifyCheckoutBrandingColorSchemeInputInputObject): static
    {
        $this->scheme1 = $shopifyCheckoutBrandingColorSchemeInputInputObject;

        return $this;
    }

    /**
     * The secondary scheme. By default, it’s used for secondary areas, like Checkout’s Order Summary.
     */
    public function setScheme2(ShopifyCheckoutBrandingColorSchemeInputInputObject $shopifyCheckoutBrandingColorSchemeInputInputObject): static
    {
        $this->scheme2 = $shopifyCheckoutBrandingColorSchemeInputInputObject;

        return $this;
    }

    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     */
    public function setScheme3(ShopifyCheckoutBrandingColorSchemeInputInputObject $shopifyCheckoutBrandingColorSchemeInputInputObject): static
    {
        $this->scheme3 = $shopifyCheckoutBrandingColorSchemeInputInputObject;

        return $this;
    }

    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     */
    public function setScheme4(ShopifyCheckoutBrandingColorSchemeInputInputObject $shopifyCheckoutBrandingColorSchemeInputInputObject): static
    {
        $this->scheme4 = $shopifyCheckoutBrandingColorSchemeInputInputObject;

        return $this;
    }

    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     */
    public function setScheme5(ShopifyCheckoutBrandingColorSchemeInputInputObject $shopifyCheckoutBrandingColorSchemeInputInputObject): static
    {
        $this->scheme5 = $shopifyCheckoutBrandingColorSchemeInputInputObject;

        return $this;
    }

    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     */
    public function setScheme6(ShopifyCheckoutBrandingColorSchemeInputInputObject $shopifyCheckoutBrandingColorSchemeInputInputObject): static
    {
        $this->scheme6 = $shopifyCheckoutBrandingColorSchemeInputInputObject;

        return $this;
    }
}
