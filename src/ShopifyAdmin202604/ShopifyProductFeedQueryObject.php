<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A product feed.
 */
class ShopifyProductFeedQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFeed";

    /**
     * The ID of the channel to associate with the product feed.
     */
    public function selectChannelId(): static
    {
        $this->selectField("channelId");

        return $this;
    }

    /**
     * The country of the product feed.
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The language of the product feed.
     */
    public function selectLanguage(): static
    {
        $this->selectField("language");

        return $this;
    }

    /**
     * The status of the product feed.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
