<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyTranslatableResourceTranslationsArgumentsObject extends ArgumentsObject
{
    protected $locale;
    protected $outdated;
    protected $marketId;

    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    public function setOutdated($outdated)
    {
        $this->outdated = $outdated;

        return $this;
    }

    public function setMarketId($marketId)
    {
        $this->marketId = $marketId;

        return $this;
    }
}
