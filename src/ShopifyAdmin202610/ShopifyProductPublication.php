<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProduct;
use Carbon\Carbon;

/**
 * Represents the channels where a product is published.
 */
class ShopifyProductPublication
{
    protected $channel;
    protected $isPublished;
    protected $product;
    protected $publishDate;

    
    /**
     * The channel where the product was or is published.
     *
     * @return ShopifyChannel
     */
    public function getChannel(): ?ShopifyChannel
    {
        return $this->channel;
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
     * The product that was or is going to be published on the channel.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The date that the product was or is going to be published on the channel.
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
            if (isset($data['isPublished']) && $data['isPublished'] !== null) {
                $instance->isPublished = $data['isPublished'];
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
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
            if ($this->isPublished !== null) {
                $data['isPublished'] = $this->isPublished;
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->publishDate !== null) {
                $data['publishDate'] = $this->publishDate->toIso8601String();
            }
            return $data;
        }
}
