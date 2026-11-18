<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the buttons.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingButtonInputInputObject extends InputObject
{
    protected $border;
    protected $cornerRadius;
    protected $blockPadding;
    protected $inlinePadding;
    protected $typography;

    /**
     * The border.
     */
    public function setBorder($shopifyCheckoutAndAccountsConfigurationBrandingSimpleBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSimpleBorder);

        return $this;
    }

    /**
     * The corner radius.
     */
    public function setCornerRadius($shopifyCheckoutAndAccountsConfigurationBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingCornerRadius);

        return $this;
    }

    /**
     * The block padding.
     */
    public function setBlockPadding($shopifyCheckoutAndAccountsConfigurationBrandingSpacing): static
    {
        $this->blockPadding = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSpacing);

        return $this;
    }

    /**
     * The inline padding.
     */
    public function setInlinePadding($shopifyCheckoutAndAccountsConfigurationBrandingSpacing): static
    {
        $this->inlinePadding = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSpacing);

        return $this;
    }

    /**
     * The typography style.
     */
    public function setTypography(ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject): static
    {
        $this->typography = $shopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject;

        return $this;
    }
}
