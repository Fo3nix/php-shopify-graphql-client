<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingMerchandiseThumbnailBadgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingMerchandiseThumbnailBadge";

    public function selectBackground()
    {
        $this->selectField("background");

        return $this;
    }
}
