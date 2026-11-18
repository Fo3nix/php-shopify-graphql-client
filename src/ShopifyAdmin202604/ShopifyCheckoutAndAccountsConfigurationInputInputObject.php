<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for checkout and account configurations.
 */
class ShopifyCheckoutAndAccountsConfigurationInputInputObject extends InputObject
{
    protected $overrides;
    protected $branding;

    /**
     * The overrides to create/update in the configuration.
     */
    public function setOverrides(array $overrides): static
    {
        $this->overrides = $overrides;

        return $this;
    }

    /**
     * The branding settings of the configuration.
     */
    public function setBranding(ShopifyCheckoutAndAccountsConfigurationBrandingInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingInputInputObject): static
    {
        $this->branding = $shopifyCheckoutAndAccountsConfigurationBrandingInputInputObject;

        return $this;
    }
}
