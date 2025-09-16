<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingMerchandiseThumbnailBadgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingMerchandiseThumbnailBadge";

    public function selectBackground()
    {
        $this->selectField("background");

        return $this;
    }
}
