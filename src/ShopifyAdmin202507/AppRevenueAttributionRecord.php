<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Carbon\Carbon;

class AppRevenueAttributionRecord
{
    protected $amount;
    protected $capturedAt;
    protected $createdAt;
    protected $id;
    protected $idempotencyKey;
    protected $test;
    protected $type;

    
    /**
     * @return MoneyV2
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return Carbon
     */
    public function getCapturedAt()
    {
        return $this->capturedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
    public function getIdempotencyKey()
    {
        return $this->idempotencyKey;
    }

    
    /**
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }

    
    /**
     * @return AppRevenueAttributionTypeEnumObject
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
                $instance->amount = MoneyV2::fromArray($data['amount']);
            }
            if (isset($data['capturedAt']) && $data['capturedAt'] !== null) {
                $instance->capturedAt = new Carbon($data['capturedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['idempotencyKey']) && $data['idempotencyKey'] !== null) {
                $instance->idempotencyKey = $data['idempotencyKey'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
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
            if ($this->capturedAt !== null) {
                $data['capturedAt'] = $this->capturedAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->idempotencyKey !== null) {
                $data['idempotencyKey'] = $this->idempotencyKey;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
