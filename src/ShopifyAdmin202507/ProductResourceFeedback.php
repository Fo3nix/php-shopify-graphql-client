<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class ProductResourceFeedback
{
    protected $feedbackGeneratedAt;
    protected $messages;
    protected $productId;
    protected $productUpdatedAt;
    protected $state;

    
    /**
     * @return Carbon
     */
    public function getFeedbackGeneratedAt()
    {
        return $this->feedbackGeneratedAt;
    }

    
    /**
     * @return string[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    
    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    
    /**
     * @return Carbon
     */
    public function getProductUpdatedAt()
    {
        return $this->productUpdatedAt;
    }

    
    /**
     * @return ResourceFeedbackStateEnumObject
     */
    public function getState()
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
