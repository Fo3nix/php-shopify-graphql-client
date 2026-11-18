<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a product feed.
 */
class ShopifyProductFeedInputInputObject extends InputObject
{
    const REQUIRED = ["language", "country"];

    protected $language;
    protected $country;
    protected $channelId;

    /**
     * The language of the product feed.
     */
    public function setLanguage($shopifyLanguageCode): static
    {
        $this->language = new RawObject($shopifyLanguageCode);

        return $this;
    }

    /**
     * The country of the product feed.
     */
    public function setCountry($shopifyCountryCode): static
    {
        $this->country = new RawObject($shopifyCountryCode);

        return $this;
    }

    /**
     * The ID of the channel to associate with the product feed.
     */
    public function setChannelId($channelId): static
    {
        $this->channelId = $channelId;

        return $this;
    }
}
