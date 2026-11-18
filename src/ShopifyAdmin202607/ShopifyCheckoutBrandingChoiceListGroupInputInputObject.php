<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to update the settings that apply to the 'group' variant of ChoiceList.
 */
class ShopifyCheckoutBrandingChoiceListGroupInputInputObject extends InputObject
{
    protected $spacing;

    /**
     * The spacing between UI elements in the list.
     */
    public function setSpacing($shopifyCheckoutBrandingSpacingKeyword): static
    {
        $this->spacing = new RawObject($shopifyCheckoutBrandingSpacingKeyword);

        return $this;
    }
}
