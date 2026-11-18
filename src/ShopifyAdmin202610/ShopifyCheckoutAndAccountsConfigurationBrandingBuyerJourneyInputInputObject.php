<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating breadcrumb customizations, which represent the buyer's journey to checkout.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourneyInputInputObject extends InputObject
{
    protected $visibility;

    /**
     * The visibility customizations for updating breadcrumbs, which represent the buyer's journey to checkout.
     */
    public function setVisibility($shopifyCheckoutAndAccountsConfigurationBrandingVisibility): static
    {
        $this->visibility = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingVisibility);

        return $this;
    }
}
