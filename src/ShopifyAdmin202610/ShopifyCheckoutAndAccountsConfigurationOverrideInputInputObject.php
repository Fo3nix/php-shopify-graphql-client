<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for checkout and account configuration overrides.
 */
class ShopifyCheckoutAndAccountsConfigurationOverrideInputInputObject extends InputObject
{
    protected $id;
    protected $branding;

    /**
     * The ID of the configuration override to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

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
