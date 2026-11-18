<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the merchandise thumbnails customizations.
 */
class ShopifyCheckoutBrandingMerchandiseThumbnailInputInputObject extends InputObject
{
    protected $border;
    protected $cornerRadius;
    protected $fit;
    protected $badge;

    /**
     * The border used for merchandise thumbnails.
     */
    public function setBorder($shopifyCheckoutBrandingSimpleBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutBrandingSimpleBorder);

        return $this;
    }

    /**
     * The corner radius used for merchandise thumbnails.
     */
    public function setCornerRadius($shopifyCheckoutBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutBrandingCornerRadius);

        return $this;
    }

    /**
     * The property used to customize how the product image fits within merchandise thumbnails.
     */
    public function setFit($shopifyCheckoutBrandingObjectFit): static
    {
        $this->fit = new RawObject($shopifyCheckoutBrandingObjectFit);

        return $this;
    }

    /**
     * The settings for the merchandise thumbnail badge.
     */
    public function setBadge(ShopifyCheckoutBrandingMerchandiseThumbnailBadgeInputInputObject $shopifyCheckoutBrandingMerchandiseThumbnailBadgeInputInputObject): static
    {
        $this->badge = $shopifyCheckoutBrandingMerchandiseThumbnailBadgeInputInputObject;

        return $this;
    }
}
