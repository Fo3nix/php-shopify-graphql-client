<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the components.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingComponentsInputInputObject extends InputObject
{
    protected $checkbox;
    protected $choiceList;
    protected $control;
    protected $divider;
    protected $favicon;
    protected $shared;
    protected $headingLevel1;
    protected $headingLevel2;
    protected $headingLevel3;
    protected $merchandiseThumbnail;
    protected $primaryButton;
    protected $secondaryButton;
    protected $select;
    protected $textField;
    protected $main;
    protected $footer;
    protected $header;

    /**
     * The checkboxes customizations.
     */
    public function setCheckbox(ShopifyCheckoutAndAccountsConfigurationBrandingCheckboxInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCheckboxInputInputObject): static
    {
        $this->checkbox = $shopifyCheckoutAndAccountsConfigurationBrandingCheckboxInputInputObject;

        return $this;
    }

    /**
     * The choice list customizations.
     */
    public function setChoiceList(ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingChoiceListInputInputObject): static
    {
        $this->choiceList = $shopifyCheckoutAndAccountsConfigurationBrandingChoiceListInputInputObject;

        return $this;
    }

    /**
     * The form controls customizations.
     */
    public function setControl(ShopifyCheckoutAndAccountsConfigurationBrandingControlInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingControlInputInputObject): static
    {
        $this->control = $shopifyCheckoutAndAccountsConfigurationBrandingControlInputInputObject;

        return $this;
    }

    /**
     * The divider customizations.
     */
    public function setDivider(ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyleInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingDividerStyleInputInputObject): static
    {
        $this->divider = $shopifyCheckoutAndAccountsConfigurationBrandingDividerStyleInputInputObject;

        return $this;
    }

    /**
     * The favicon.
     */
    public function setFavicon(ShopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject): static
    {
        $this->favicon = $shopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject;

        return $this;
    }

    /**
     * The shared customizations.
     */
    public function setShared(ShopifyCheckoutAndAccountsConfigurationBrandingSharedInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSharedInputInputObject): static
    {
        $this->shared = $shopifyCheckoutAndAccountsConfigurationBrandingSharedInputInputObject;

        return $this;
    }

    /**
     * The Heading Level 1 customizations.
     */
    public function setHeadingLevel1(ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject): static
    {
        $this->headingLevel1 = $shopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject;

        return $this;
    }

    /**
     * The Heading Level 2 customizations.
     */
    public function setHeadingLevel2(ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject): static
    {
        $this->headingLevel2 = $shopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject;

        return $this;
    }

    /**
     * The Heading Level 3 customizations.
     */
    public function setHeadingLevel3(ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject): static
    {
        $this->headingLevel3 = $shopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject;

        return $this;
    }

    /**
     * The merchandise thumbnails customizations.
     */
    public function setMerchandiseThumbnail(ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailInputInputObject): static
    {
        $this->merchandiseThumbnail = $shopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailInputInputObject;

        return $this;
    }

    /**
     * The primary buttons customizations.
     */
    public function setPrimaryButton(ShopifyCheckoutAndAccountsConfigurationBrandingButtonInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingButtonInputInputObject): static
    {
        $this->primaryButton = $shopifyCheckoutAndAccountsConfigurationBrandingButtonInputInputObject;

        return $this;
    }

    /**
     * The secondary buttons customizations.
     */
    public function setSecondaryButton(ShopifyCheckoutAndAccountsConfigurationBrandingButtonInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingButtonInputInputObject): static
    {
        $this->secondaryButton = $shopifyCheckoutAndAccountsConfigurationBrandingButtonInputInputObject;

        return $this;
    }

    /**
     * The selects customizations.
     */
    public function setSelect(ShopifyCheckoutAndAccountsConfigurationBrandingSelectInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSelectInputInputObject): static
    {
        $this->select = $shopifyCheckoutAndAccountsConfigurationBrandingSelectInputInputObject;

        return $this;
    }

    /**
     * The text fields customizations.
     */
    public function setTextField(ShopifyCheckoutAndAccountsConfigurationBrandingTextFieldInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingTextFieldInputInputObject): static
    {
        $this->textField = $shopifyCheckoutAndAccountsConfigurationBrandingTextFieldInputInputObject;

        return $this;
    }

    /**
     * The main area customizations.
     */
    public function setMain(ShopifyCheckoutAndAccountsConfigurationBrandingMainInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingMainInputInputObject): static
    {
        $this->main = $shopifyCheckoutAndAccountsConfigurationBrandingMainInputInputObject;

        return $this;
    }

    /**
     * The footer customizations.
     */
    public function setFooter(ShopifyCheckoutAndAccountsConfigurationBrandingFooterInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingFooterInputInputObject): static
    {
        $this->footer = $shopifyCheckoutAndAccountsConfigurationBrandingFooterInputInputObject;

        return $this;
    }

    /**
     * The header customizations.
     */
    public function setHeader(ShopifyCheckoutAndAccountsConfigurationBrandingHeaderInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingHeaderInputInputObject): static
    {
        $this->header = $shopifyCheckoutAndAccountsConfigurationBrandingHeaderInputInputObject;

        return $this;
    }
}
