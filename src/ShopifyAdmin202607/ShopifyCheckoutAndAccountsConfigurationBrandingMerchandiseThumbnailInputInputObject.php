<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the merchandise thumbnails.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailInputInputObject extends InputObject
{
    protected $border;
    protected $cornerRadius;
    protected $aspectRatio;
    protected $fit;
    protected $badge;

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
     * The aspect ratio.
     */
    public function setAspectRatio($aspectRatio): static
    {
        $this->aspectRatio = $aspectRatio;

        return $this;
    }

    /**
     * The property used to customize how the product image fits within merchandise thumbnails.
     */
    public function setFit($shopifyCheckoutAndAccountsConfigurationBrandingObjectFit): static
    {
        $this->fit = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingObjectFit);

        return $this;
    }

    /**
     * The merchandise thumbnail badge.
     */
    public function setBadge(ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeInputInputObject): static
    {
        $this->badge = $shopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeInputInputObject;

        return $this;
    }
}
