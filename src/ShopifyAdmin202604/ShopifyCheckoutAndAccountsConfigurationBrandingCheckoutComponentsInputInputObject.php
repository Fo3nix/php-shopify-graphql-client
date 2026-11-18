<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the Checkout components.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsInputInputObject extends InputObject
{
    protected $footer;
    protected $header;
    protected $cartLink;
    protected $buyerJourney;
    protected $content;
    protected $expressCheckout;
    protected $orderSummary;
    protected $main;

    /**
     * The footer.
     */
    public function setFooter(ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooterInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooterInputInputObject): static
    {
        $this->footer = $shopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooterInputInputObject;

        return $this;
    }

    /**
     * The header.
     */
    public function setHeader(ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderInputInputObject): static
    {
        $this->header = $shopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderInputInputObject;

        return $this;
    }

    /**
     * The input for checkout cart link customizations. For example, by setting the visibility field to `HIDDEN`, you can hide the cart icon in the header for one-page checkout, and the cart link in breadcrumbs in three-page checkout.
     */
    public function setCartLink(ShopifyCheckoutAndAccountsConfigurationBrandingCartLinkInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCartLinkInputInputObject): static
    {
        $this->cartLink = $shopifyCheckoutAndAccountsConfigurationBrandingCartLinkInputInputObject;

        return $this;
    }

    /**
     * The breadcrumbs that represent a buyer's journey to the checkout.
     */
    public function setBuyerJourney(ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourneyInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingBuyerJourneyInputInputObject): static
    {
        $this->buyerJourney = $shopifyCheckoutAndAccountsConfigurationBrandingBuyerJourneyInputInputObject;

        return $this;
    }

    /**
     * The content container.
     */
    public function setContent(ShopifyCheckoutAndAccountsConfigurationBrandingContentInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingContentInputInputObject): static
    {
        $this->content = $shopifyCheckoutAndAccountsConfigurationBrandingContentInputInputObject;

        return $this;
    }

    /**
     * The express checkout.
     */
    public function setExpressCheckout(ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutInputInputObject): static
    {
        $this->expressCheckout = $shopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutInputInputObject;

        return $this;
    }

    /**
     * The order summary.
     */
    public function setOrderSummary(ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryInputInputObject): static
    {
        $this->orderSummary = $shopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryInputInputObject;

        return $this;
    }

    /**
     * The main area.
     */
    public function setMain(ShopifyCheckoutAndAccountsConfigurationBrandingMainInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingMainInputInputObject): static
    {
        $this->main = $shopifyCheckoutAndAccountsConfigurationBrandingMainInputInputObject;

        return $this;
    }
}
