<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update a container's divider customizations.
 */
class ShopifyCheckoutBrandingContainerDividerInputInputObject extends InputObject
{
    protected $borderStyle;
    protected $borderWidth;
    protected $visibility;

    /**
     * The divider style.
     */
    public function setBorderStyle($shopifyCheckoutBrandingBorderStyle): static
    {
        $this->borderStyle = new RawObject($shopifyCheckoutBrandingBorderStyle);

        return $this;
    }

    /**
     * The divider width.
     */
    public function setBorderWidth($shopifyCheckoutBrandingBorderWidth): static
    {
        $this->borderWidth = new RawObject($shopifyCheckoutBrandingBorderWidth);

        return $this;
    }

    /**
     * The divider visibility.
     */
    public function setVisibility($shopifyCheckoutBrandingVisibility): static
    {
        $this->visibility = new RawObject($shopifyCheckoutBrandingVisibility);

        return $this;
    }
}
