<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a shop locale.
 */
class ShopifyShopLocaleInputInputObject extends InputObject
{
    protected $published;
    protected $marketWebPresenceIds;

    /**
     * Whether the locale is published. Only published locales are visible to the buyer.
     */
    public function setPublished($published): static
    {
        $this->published = $published;

        return $this;
    }

    /**
     * The market web presences on which the locale should be enabled. Pass in an empty array to remove the locale across all market web presences.
     */
    public function setMarketWebPresenceIds(array $marketWebPresenceIds): static
    {
        $this->marketWebPresenceIds = $marketWebPresenceIds;

        return $this;
    }
}
