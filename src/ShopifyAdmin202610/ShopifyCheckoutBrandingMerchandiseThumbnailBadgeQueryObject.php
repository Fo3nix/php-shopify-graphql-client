<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The merchandise thumbnail badges customizations.
 */
class ShopifyCheckoutBrandingMerchandiseThumbnailBadgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingMerchandiseThumbnailBadge";

    /**
     * The background used for merchandise thumbnail badges.
     */
    public function selectBackground(): static
    {
        $this->selectField("background");

        return $this;
    }
}
