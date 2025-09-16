<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Channel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Publication;
use Carbon\Carbon;

class ResourcePublication
{
    protected $channel;
    protected $isPublished;
    protected $publication;
    protected $publishDate;
    protected $publishable;

    
    /**
     * @return Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    
    /**
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    
    /**
     * @return Publication
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
     * @return mixed
     */
    public function getPublishable()
    {
        return $this->publishable;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = Channel::fromArray($data['channel']);
            }
            if (isset($data['isPublished']) && $data['isPublished'] !== null) {
                $instance->isPublished = $data['isPublished'];
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = Publication::fromArray($data['publication']);
            }
            if (isset($data['publishDate']) && $data['publishDate'] !== null) {
                $instance->publishDate = new Carbon($data['publishDate']);
            }
            if (isset($data['publishable']) && $data['publishable'] !== null) {
                $instance->publishable = $data['publishable'];
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
            if ($this->isPublished !== null) {
                $data['isPublished'] = $this->isPublished;
            }
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->publishDate !== null) {
                $data['publishDate'] = $this->publishDate->toIso8601String();
            }
            if ($this->publishable !== null) {
                $data['publishable'] = $this->publishable;
            }
            return $data;
        }
}
