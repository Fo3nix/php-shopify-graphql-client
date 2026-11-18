<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPublication;
use Carbon\Carbon;

/**
 * Represents the publication status and settings for a collection across different sales channels. This tracks where collections are published, when they were published, and any channel-specific configuration.
 *
 * For example, a "Holiday Gifts" collection might be published to the online store and Facebook Shop but not to the POS channel, with different publication dates for each channel based on marketing strategy.
 *
 * Use `CollectionPublication` to:
 * - Track collection visibility across multiple sales channels
 * - Manage channel-specific collection settings and availability
 * - Monitor publication history and timing for collections
 * - Control where collections appear in customer-facing channels
 * - Implement channel-specific collection management workflows
 *
 * Each publication record includes the channel information, publication status, and timing details. This enables merchants to control collection visibility strategically across their sales channels.
 *
 * Collections can have different publication settings per channel, allowing for targeted marketing and inventory management. For instance, wholesale collections might only be published to B2B channels while retail collections appear in consumer-facing channels.
 *
 * The publication system integrates with Shopify's broader channel management, ensuring collections appear consistently across the merchant's sales ecosystem while respecting channel-specific rules and permissions.
 *
 * Learn more about [sales channel management](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
 */
class ShopifyCollectionPublication
{
    protected $channel;
    protected $collection;
    protected $isPublished;
    protected $publication;
    protected $publishDate;

    
    /**
     * The channel where the collection will be published.
     *
     * @return ShopifyChannel
     */
    public function getChannel(): ?ShopifyChannel
    {
        return $this->channel;
    }

    
    /**
     * The collection to be published on the publication.
     *
     * @return ShopifyCollection
     */
    public function getCollection(): ?ShopifyCollection
    {
        return $this->collection;
    }

    
    /**
     * Whether the publication is published or not.
     *
     * @return bool
     */
    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    
    /**
     * The publication where the collection will be published.
     *
     * @return ShopifyPublication
     */
    public function getPublication(): ?ShopifyPublication
    {
        return $this->publication;
    }

    
    /**
     * The date that the publication was or is going to be published.
     *
     * @return Carbon
     */
    public function getPublishDate(): ?Carbon
    {
        return $this->publishDate;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = ShopifyChannel::fromArray($data['channel']);
            }
            if (isset($data['collection']) && $data['collection'] !== null) {
                $instance->collection = ShopifyCollection::fromArray($data['collection']);
            }
            if (isset($data['isPublished']) && $data['isPublished'] !== null) {
                $instance->isPublished = $data['isPublished'];
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = ShopifyPublication::fromArray($data['publication']);
            }
            if (isset($data['publishDate']) && $data['publishDate'] !== null) {
                $instance->publishDate = new Carbon($data['publishDate']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->channel !== null) {
                $data['channel'] = $this->channel->asArray();
            }
            if ($this->collection !== null) {
                $data['collection'] = $this->collection->asArray();
            }
            if ($this->isPublished !== null) {
                $data['isPublished'] = $this->isPublished;
            }
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->publishDate !== null) {
                $data['publishDate'] = $this->publishDate->toIso8601String();
            }
            return $data;
        }
}
