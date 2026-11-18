<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the merchandise thumbnail badges.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeInputInputObject extends InputObject
{
    protected $background;

    /**
     * The background.
     */
    public function setBackground($shopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeBackground): static
    {
        $this->background = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeBackground);

        return $this;
    }
}
