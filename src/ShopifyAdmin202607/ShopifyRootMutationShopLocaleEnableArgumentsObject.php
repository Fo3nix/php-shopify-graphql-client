<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationShopLocaleEnableArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locale"];

    protected $locale;
    protected $marketWebPresenceIds;

    /**
     * ISO code of the locale to enable.
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * The list of markets web presences to add the locale to.
     */
    public function setMarketWebPresenceIds(array $marketWebPresenceIds): static
    {
        $this->marketWebPresenceIds = $marketWebPresenceIds;

        return $this;
    }
}
