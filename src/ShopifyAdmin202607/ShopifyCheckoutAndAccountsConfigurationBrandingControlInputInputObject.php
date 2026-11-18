<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the form controls.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingControlInputInputObject extends InputObject
{
    protected $cornerRadius;
    protected $border;
    protected $labelPosition;

    /**
     * The corner radius.
     */
    public function setCornerRadius($shopifyCheckoutAndAccountsConfigurationBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingCornerRadius);

        return $this;
    }

    /**
     * The border.
     */
    public function setBorder($shopifyCheckoutAndAccountsConfigurationBrandingSimpleBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSimpleBorder);

        return $this;
    }

    /**
     * The label position.
     */
    public function setLabelPosition($shopifyCheckoutAndAccountsConfigurationBrandingLabelPosition): static
    {
        $this->labelPosition = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingLabelPosition);

        return $this;
    }
}
