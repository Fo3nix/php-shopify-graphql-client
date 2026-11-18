<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyChannel;
use Carbon\Carbon;

/**
 * Reports the status of product for a Sales Channel or Storefront API.
 * This might include why a product is not available in a Sales Channel
 * and how a merchant might fix this.
 */
class ShopifyProductResourceFeedback
{
    protected $channel;
    protected $feedbackGeneratedAt;
    protected $messages;
    protected $productId;
    protected $productUpdatedAt;
    protected $state;

    
    /**
     * The channel this feedback is for.
     *
     * @return ShopifyChannel
     */
    public function getChannel(): ?ShopifyChannel
    {
        return $this->channel;
    }

    
    /**
     * The time when the feedback was generated. Used to help determine whether
     * incoming feedback is outdated compared to existing feedback.
     *
     * @return Carbon
     */
    public function getFeedbackGeneratedAt(): ?Carbon
    {
        return $this->feedbackGeneratedAt;
    }

    
    /**
     * The feedback messages presented to the merchant.
     *
     * @return string[]
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    
    /**
     * The ID of the product associated with the feedback.
     *
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    
    /**
     * The timestamp of the product associated with the feedback.
     *
     * @return Carbon
     */
    public function getProductUpdatedAt(): ?Carbon
    {
        return $this->productUpdatedAt;
    }

    
    /**
     * Conveys the state of the feedback and whether it requires merchant action or not.
     *
     * @return string A ShopifyResourceFeedbackStateEnumObject value
     */
    public function getState(): ?string
    {
        return $this->state;
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
            if (isset($data['feedbackGeneratedAt']) && $data['feedbackGeneratedAt'] !== null) {
                $instance->feedbackGeneratedAt = new Carbon($data['feedbackGeneratedAt']);
            }
            if (isset($data['messages']) && $data['messages'] !== null) {
                $instance->messages = $data['messages'];
            }
            if (isset($data['productId']) && $data['productId'] !== null) {
                $instance->productId = $data['productId'];
            }
            if (isset($data['productUpdatedAt']) && $data['productUpdatedAt'] !== null) {
                $instance->productUpdatedAt = new Carbon($data['productUpdatedAt']);
            }
            if (isset($data['state']) && $data['state'] !== null) {
                $instance->state = $data['state'];
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
            if ($this->feedbackGeneratedAt !== null) {
                $data['feedbackGeneratedAt'] = $this->feedbackGeneratedAt->toIso8601String();
            }
            if ($this->messages !== null) {
                $data['messages'] = $this->messages;
            }
            if ($this->productId !== null) {
                $data['productId'] = $this->productId;
            }
            if ($this->productUpdatedAt !== null) {
                $data['productUpdatedAt'] = $this->productUpdatedAt->toIso8601String();
            }
            if ($this->state !== null) {
                $data['state'] = $this->state;
            }
            return $data;
        }
}
