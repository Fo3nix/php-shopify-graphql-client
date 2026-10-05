<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

class ShopifyAnalyticsTarget
{
    protected $createdAt;
    protected $currencyCode;
    protected $endDate;
    protected $expectedValue;
    protected $filters;
    protected $id;
    protected $metric;
    protected $name;
    protected $presentmentExpectedValue;
    protected $shopifyqlQuery;
    protected $startDate;
    protected $updatedAt;

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyCurrencyCodeEnumObject
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    
    /**
     * @return Carbon
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    
    /**
     * @return string
     */
    public function getExpectedValue()
    {
        return $this->expectedValue;
    }

    
    /**
     * @return string
     */
    public function getFilters()
    {
        return $this->filters;
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
    public function getMetric()
    {
        return $this->metric;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getPresentmentExpectedValue()
    {
        return $this->presentmentExpectedValue;
    }

    
    /**
     * @return string
     */
    public function getShopifyqlQuery()
    {
        return $this->shopifyqlQuery;
    }

    
    /**
     * @return Carbon
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['endDate']) && $data['endDate'] !== null) {
                $instance->endDate = new Carbon($data['endDate']);
            }
            if (isset($data['expectedValue']) && $data['expectedValue'] !== null) {
                $instance->expectedValue = $data['expectedValue'];
            }
            if (isset($data['filters']) && $data['filters'] !== null) {
                $instance->filters = $data['filters'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metric']) && $data['metric'] !== null) {
                $instance->metric = $data['metric'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['presentmentExpectedValue']) && $data['presentmentExpectedValue'] !== null) {
                $instance->presentmentExpectedValue = ShopifyMoneyV2::fromArray($data['presentmentExpectedValue']);
            }
            if (isset($data['shopifyqlQuery']) && $data['shopifyqlQuery'] !== null) {
                $instance->shopifyqlQuery = $data['shopifyqlQuery'];
            }
            if (isset($data['startDate']) && $data['startDate'] !== null) {
                $instance->startDate = new Carbon($data['startDate']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currencyCode !== null) {
                $data['currencyCode'] = $this->currencyCode;
            }
            if ($this->endDate !== null) {
                $data['endDate'] = $this->endDate->toIso8601String();
            }
            if ($this->expectedValue !== null) {
                $data['expectedValue'] = $this->expectedValue;
            }
            if ($this->filters !== null) {
                $data['filters'] = $this->filters;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->metric !== null) {
                $data['metric'] = $this->metric;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->presentmentExpectedValue !== null) {
                $data['presentmentExpectedValue'] = $this->presentmentExpectedValue->asArray();
            }
            if ($this->shopifyqlQuery !== null) {
                $data['shopifyqlQuery'] = $this->shopifyqlQuery;
            }
            if ($this->startDate !== null) {
                $data['startDate'] = $this->startDate->toIso8601String();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
