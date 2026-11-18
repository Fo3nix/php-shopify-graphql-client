<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update the components customizations.
 */
class ShopifyCheckoutBrandingCustomizationsInputInputObject extends InputObject
{
    protected $global;
    protected $header;
    protected $headingLevel1;
    protected $headingLevel2;
    protected $headingLevel3;
    protected $footer;
    protected $main;
    protected $orderSummary;
    protected $control;
    protected $textField;
    protected $checkbox;
    protected $select;
    protected $primaryButton;
    protected $secondaryButton;
    protected $favicon;
    protected $choiceList;
    protected $merchandiseThumbnail;
    protected $expressCheckout;
    protected $content;
    protected $buyerJourney;
    protected $cartLink;
    protected $divider;

    /**
     * The global customizations.
     */
    public function setGlobal(ShopifyCheckoutBrandingGlobalInputInputObject $shopifyCheckoutBrandingGlobalInputInputObject): static
    {
        $this->global = $shopifyCheckoutBrandingGlobalInputInputObject;

        return $this;
    }

    /**
     * The header customizations.
     */
    public function setHeader(ShopifyCheckoutBrandingHeaderInputInputObject $shopifyCheckoutBrandingHeaderInputInputObject): static
    {
        $this->header = $shopifyCheckoutBrandingHeaderInputInputObject;

        return $this;
    }

    /**
     * The Heading Level 1 customizations.
     */
    public function setHeadingLevel1(ShopifyCheckoutBrandingHeadingLevelInputInputObject $shopifyCheckoutBrandingHeadingLevelInputInputObject): static
    {
        $this->headingLevel1 = $shopifyCheckoutBrandingHeadingLevelInputInputObject;

        return $this;
    }

    /**
     * The Heading Level 2 customizations.
     */
    public function setHeadingLevel2(ShopifyCheckoutBrandingHeadingLevelInputInputObject $shopifyCheckoutBrandingHeadingLevelInputInputObject): static
    {
        $this->headingLevel2 = $shopifyCheckoutBrandingHeadingLevelInputInputObject;

        return $this;
    }

    /**
     * The Heading Level 3 customizations.
     */
    public function setHeadingLevel3(ShopifyCheckoutBrandingHeadingLevelInputInputObject $shopifyCheckoutBrandingHeadingLevelInputInputObject): static
    {
        $this->headingLevel3 = $shopifyCheckoutBrandingHeadingLevelInputInputObject;

        return $this;
    }

    /**
     * The footer customizations.
     */
    public function setFooter(ShopifyCheckoutBrandingFooterInputInputObject $shopifyCheckoutBrandingFooterInputInputObject): static
    {
        $this->footer = $shopifyCheckoutBrandingFooterInputInputObject;

        return $this;
    }

    /**
     * The main area customizations.
     */
    public function setMain(ShopifyCheckoutBrandingMainInputInputObject $shopifyCheckoutBrandingMainInputInputObject): static
    {
        $this->main = $shopifyCheckoutBrandingMainInputInputObject;

        return $this;
    }

    /**
     * The order summary customizations.
     */
    public function setOrderSummary(ShopifyCheckoutBrandingOrderSummaryInputInputObject $shopifyCheckoutBrandingOrderSummaryInputInputObject): static
    {
        $this->orderSummary = $shopifyCheckoutBrandingOrderSummaryInputInputObject;

        return $this;
    }

    /**
     * The form controls customizations.
     */
    public function setControl(ShopifyCheckoutBrandingControlInputInputObject $shopifyCheckoutBrandingControlInputInputObject): static
    {
        $this->control = $shopifyCheckoutBrandingControlInputInputObject;

        return $this;
    }

    /**
     * The text fields customizations.
     */
    public function setTextField(ShopifyCheckoutBrandingTextFieldInputInputObject $shopifyCheckoutBrandingTextFieldInputInputObject): static
    {
        $this->textField = $shopifyCheckoutBrandingTextFieldInputInputObject;

        return $this;
    }

    /**
     * The checkboxes customizations.
     */
    public function setCheckbox(ShopifyCheckoutBrandingCheckboxInputInputObject $shopifyCheckoutBrandingCheckboxInputInputObject): static
    {
        $this->checkbox = $shopifyCheckoutBrandingCheckboxInputInputObject;

        return $this;
    }

    /**
     * The selects customizations.
     */
    public function setSelect(ShopifyCheckoutBrandingSelectInputInputObject $shopifyCheckoutBrandingSelectInputInputObject): static
    {
        $this->select = $shopifyCheckoutBrandingSelectInputInputObject;

        return $this;
    }

    /**
     * The primary buttons customizations.
     */
    public function setPrimaryButton(ShopifyCheckoutBrandingButtonInputInputObject $shopifyCheckoutBrandingButtonInputInputObject): static
    {
        $this->primaryButton = $shopifyCheckoutBrandingButtonInputInputObject;

        return $this;
    }

    /**
     * The secondary buttons customizations.
     */
    public function setSecondaryButton(ShopifyCheckoutBrandingButtonInputInputObject $shopifyCheckoutBrandingButtonInputInputObject): static
    {
        $this->secondaryButton = $shopifyCheckoutBrandingButtonInputInputObject;

        return $this;
    }

    /**
     * The favicon image (must be of PNG format).
     */
    public function setFavicon(ShopifyCheckoutBrandingImageInputInputObject $shopifyCheckoutBrandingImageInputInputObject): static
    {
        $this->favicon = $shopifyCheckoutBrandingImageInputInputObject;

        return $this;
    }

    /**
     * The choice list customizations.
     */
    public function setChoiceList(ShopifyCheckoutBrandingChoiceListInputInputObject $shopifyCheckoutBrandingChoiceListInputInputObject): static
    {
        $this->choiceList = $shopifyCheckoutBrandingChoiceListInputInputObject;

        return $this;
    }

    /**
     * The merchandise thumbnails customizations.
     */
    public function setMerchandiseThumbnail(ShopifyCheckoutBrandingMerchandiseThumbnailInputInputObject $shopifyCheckoutBrandingMerchandiseThumbnailInputInputObject): static
    {
        $this->merchandiseThumbnail = $shopifyCheckoutBrandingMerchandiseThumbnailInputInputObject;

        return $this;
    }

    /**
     * The express checkout customizations.
     */
    public function setExpressCheckout(ShopifyCheckoutBrandingExpressCheckoutInputInputObject $shopifyCheckoutBrandingExpressCheckoutInputInputObject): static
    {
        $this->expressCheckout = $shopifyCheckoutBrandingExpressCheckoutInputInputObject;

        return $this;
    }

    /**
     * The content container customizations.
     */
    public function setContent(ShopifyCheckoutBrandingContentInputInputObject $shopifyCheckoutBrandingContentInputInputObject): static
    {
        $this->content = $shopifyCheckoutBrandingContentInputInputObject;

        return $this;
    }

    /**
     * The customizations for the breadcrumbs that represent a buyer's journey to the checkout.
     */
    public function setBuyerJourney(ShopifyCheckoutBrandingBuyerJourneyInputInputObject $shopifyCheckoutBrandingBuyerJourneyInputInputObject): static
    {
        $this->buyerJourney = $shopifyCheckoutBrandingBuyerJourneyInputInputObject;

        return $this;
    }

    /**
     * The input for checkout cart link customizations. For example, by setting the visibility field to `HIDDEN`, you can hide the cart icon in the header for one-page checkout, and the cart link in breadcrumbs in three-page checkout.
     */
    public function setCartLink(ShopifyCheckoutBrandingCartLinkInputInputObject $shopifyCheckoutBrandingCartLinkInputInputObject): static
    {
        $this->cartLink = $shopifyCheckoutBrandingCartLinkInputInputObject;

        return $this;
    }

    /**
     * The input for the page, content, main, and order summary dividers customizations. For example, by setting the borderStyle to `DOTTED`, you can make these dividers render as dotted lines.
     */
    public function setDivider(ShopifyCheckoutBrandingDividerStyleInputInputObject $shopifyCheckoutBrandingDividerStyleInputInputObject): static
    {
        $this->divider = $shopifyCheckoutBrandingDividerStyleInputInputObject;

        return $this;
    }
}
