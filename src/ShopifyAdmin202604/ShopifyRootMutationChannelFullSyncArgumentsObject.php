<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationChannelFullSyncArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["channelId"];

    protected $channelId;
    protected $language;
    protected $country;
    protected $beforeUpdatedAt;
    protected $updatedAtSince;

    /**
     * The ID of the channel to trigger a full sync for. Accepts a [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) or [`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication) global ID.
     */
    public function setChannelId($channelId): static
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * The language to scope the sync to. When omitted, all languages for the targeted countries are synced.
     */
    public function setLanguage($shopifyLanguageCode): static
    {
        $this->language = new RawObject($shopifyLanguageCode);

        return $this;
    }

    /**
     * The country to scope the sync to. When omitted, all countries covered by the channel's specification are synced.
     */
    public function setCountry($shopifyCountryCode): static
    {
        $this->country = new RawObject($shopifyCountryCode);

        return $this;
    }

    /**
     * Syncs only products that haven't changed since the specified timestamp.
     */
    public function setBeforeUpdatedAt($beforeUpdatedAt): static
    {
        $this->beforeUpdatedAt = $beforeUpdatedAt;

        return $this;
    }

    /**
     * Syncs only products that have changed since the specified timestamp.
     */
    public function setUpdatedAtSince($updatedAtSince): static
    {
        $this->updatedAtSince = $updatedAtSince;

        return $this;
    }
}
