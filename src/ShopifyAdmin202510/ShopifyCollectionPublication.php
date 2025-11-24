<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCollection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyPublication;
use Carbon\Carbon;

class ShopifyCollectionPublication
{
    protected $channel;
    protected $collection;
    protected $isPublished;
    protected $publication;
    protected $publishDate;

    
    /**
     * @return ShopifyChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    
    /**
     * @return ShopifyCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    
    /**
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    
    /**
     * @return ShopifyPublication
     */
    public function getPublication()
    {
        return $this->publication;
    }

    
    /**
     * @return Carbon
     */
    public function getPublishDate()
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
