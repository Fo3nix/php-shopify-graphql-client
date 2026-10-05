<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Carbon\Carbon;

class ShopifyTransactionFee
{
    protected $amount;
    protected $createdAt;
    protected $flatFee;
    protected $flatFeeName;
    protected $id;
    protected $rate;
    protected $rateName;
    protected $taxAmount;
    protected $type;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getFlatFee()
    {
        return $this->flatFee;
    }

    
    /**
     * @return string
     */
    public function getFlatFeeName()
    {
        return $this->flatFeeName;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    
    /**
     * @return string
     */
    public function getRateName()
    {
        return $this->rateName;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['flatFee']) && $data['flatFee'] !== null) {
                $instance->flatFee = ShopifyMoneyV2::fromArray($data['flatFee']);
            }
            if (isset($data['flatFeeName']) && $data['flatFeeName'] !== null) {
                $instance->flatFeeName = $data['flatFeeName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['rate']) && $data['rate'] !== null) {
                $instance->rate = $data['rate'];
            }
            if (isset($data['rateName']) && $data['rateName'] !== null) {
                $instance->rateName = $data['rateName'];
            }
            if (isset($data['taxAmount']) && $data['taxAmount'] !== null) {
                $instance->taxAmount = ShopifyMoneyV2::fromArray($data['taxAmount']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->amount !== null) {
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->flatFee !== null) {
                $data['flatFee'] = $this->flatFee->asArray();
            }
            if ($this->flatFeeName !== null) {
                $data['flatFeeName'] = $this->flatFeeName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->rate !== null) {
                $data['rate'] = $this->rate;
            }
            if ($this->rateName !== null) {
                $data['rateName'] = $this->rateName;
            }
            if ($this->taxAmount !== null) {
                $data['taxAmount'] = $this->taxAmount->asArray();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
