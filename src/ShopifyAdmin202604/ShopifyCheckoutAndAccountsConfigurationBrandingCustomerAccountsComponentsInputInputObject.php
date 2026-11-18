<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the Customer Accounts components.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsInputInputObject extends InputObject
{
    protected $footer;
    protected $header;
    protected $main;

    /**
     * The footer customizations.
     */
    public function setFooter(ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterInputInputObject): static
    {
        $this->footer = $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterInputInputObject;

        return $this;
    }

    /**
     * The header customizations.
     */
    public function setHeader(ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeaderInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeaderInputInputObject): static
    {
        $this->header = $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeaderInputInputObject;

        return $this;
    }

    /**
     * The main area customizations.
     */
    public function setMain(ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainInputInputObject): static
    {
        $this->main = $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainInputInputObject;

        return $this;
    }
}
