<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyLinkTranslationsArgumentsObject extends ArgumentsObject
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
