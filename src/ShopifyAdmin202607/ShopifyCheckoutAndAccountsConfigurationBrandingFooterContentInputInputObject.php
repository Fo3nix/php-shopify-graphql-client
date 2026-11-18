<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the footer content.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingFooterContentInputInputObject extends InputObject
{
    protected $visibility;

    /**
     * The visibility of the footer content. Shopify reserves the right to add required legal notices to the footer and prevent them from being modified or hidden. This setting doesn't control the visibility of those notices.
     */
    public function setVisibility($shopifyCheckoutAndAccountsConfigurationBrandingVisibility): static
    {
        $this->visibility = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingVisibility);

        return $this;
    }
}
