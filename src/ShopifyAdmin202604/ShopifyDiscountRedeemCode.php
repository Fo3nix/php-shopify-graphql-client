<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyApp;

/**
 * A code that a customer can use at checkout to receive a discount. For example, a customer can use the redeem code 'SUMMER20' at checkout to receive a 20% discount on their entire order.
 */
class ShopifyDiscountRedeemCode
{
    protected $asyncUsageCount;
    protected $code;
    protected $createdAt;
    protected $createdBy;
    protected $id;

    
    /**
     * The number of times that the discount redeem code has been used. This value is updated asynchronously and can be different than the actual usage count.
     *
     * @return int
     */
    public function getAsyncUsageCount(): ?int
    {
        return $this->asyncUsageCount;
    }

    
    /**
     * The code that a customer can use at checkout to receive a discount.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The date and time when the discount redeem code was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The application that created the discount redeem code.
     *
     * @return ShopifyApp
     */
    public function getCreatedBy(): ?ShopifyApp
    {
        return $this->createdBy;
    }

    
    /**
     * A globally-unique ID of the discount redeem code.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['asyncUsageCount']) && $data['asyncUsageCount'] !== null) {
                $instance->asyncUsageCount = $data['asyncUsageCount'];
            }
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['createdBy']) && $data['createdBy'] !== null) {
                $instance->createdBy = ShopifyApp::fromArray($data['createdBy']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->asyncUsageCount !== null) {
                $data['asyncUsageCount'] = $this->asyncUsageCount;
            }
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->createdBy !== null) {
                $data['createdBy'] = $this->createdBy->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
