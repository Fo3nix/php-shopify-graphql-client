<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyCollectionTranslationsArgumentsObject extends ArgumentsObject
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
