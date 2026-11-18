<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to use to update the choice list customizations.
 */
class ShopifyCheckoutBrandingChoiceListInputInputObject extends InputObject
{
    protected $group;

    /**
     * The settings that apply to the 'group' variant of ChoiceList.
     */
    public function setGroup(ShopifyCheckoutBrandingChoiceListGroupInputInputObject $shopifyCheckoutBrandingChoiceListGroupInputInputObject): static
    {
        $this->group = $shopifyCheckoutBrandingChoiceListGroupInputInputObject;

        return $this;
    }
}
