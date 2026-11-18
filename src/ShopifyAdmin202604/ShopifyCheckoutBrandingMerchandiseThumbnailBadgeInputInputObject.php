<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the merchandise thumbnail badges customizations.
 */
class ShopifyCheckoutBrandingMerchandiseThumbnailBadgeInputInputObject extends InputObject
{
    protected $background;

    /**
     * The background used for merchandise thumbnail badges.
     */
    public function setBackground($shopifyCheckoutBrandingMerchandiseThumbnailBadgeBackground): static
    {
        $this->background = new RawObject($shopifyCheckoutBrandingMerchandiseThumbnailBadgeBackground);

        return $this;
    }
}
