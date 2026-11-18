<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The merchandise thumbnail badges customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadge";

    /**
     * The background.
     */
    public function selectBackground(): static
    {
        $this->selectField("background");

        return $this;
    }
}
