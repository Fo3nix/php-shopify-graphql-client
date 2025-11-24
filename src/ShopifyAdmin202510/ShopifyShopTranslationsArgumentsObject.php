<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyShopTranslationsArgumentsObject extends ArgumentsObject
{
    protected $locale;
    protected $marketId;

    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    public function setMarketId($marketId)
    {
        $this->marketId = $marketId;

        return $this;
    }
}
