<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update the content container customizations.
 */
class ShopifyCheckoutBrandingContentInputInputObject extends InputObject
{
    protected $divider;

    /**
     * Divider style and visibility on the content container.
     */
    public function setDivider(ShopifyCheckoutBrandingContainerDividerInputInputObject $shopifyCheckoutBrandingContainerDividerInputInputObject): static
    {
        $this->divider = $shopifyCheckoutBrandingContainerDividerInputInputObject;

        return $this;
    }
}
