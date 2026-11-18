<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * Represents a merchant-defined goal for a specific analytics metric over a date range.
 * Merchants use analytics targets to track progress toward business objectives, such as reaching
 * a total sales amount or a number of orders within a given period.
 *
 * Each target is associated with a single metric and can optionally include filter expressions to
 * narrow the evaluated data. Use the
 * [`analyticsTargets`](https://shopify.dev/docs/api/admin-graphql/latest/queries/analyticsTargets) query
 * to retrieve targets, and the
 * [`analyticsTargetCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetCreate),
 * [`analyticsTargetUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetUpdate),
 * and [`analyticsTargetsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetsDelete)
 * mutations to manage them.
 */
class ShopifyAnalyticsTarget implements ShopifyNode
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
     * The date and time when the analytics target was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The currency code stored on the target's expected value. Defaults to the shop currency when the target is created.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    
    /**
     * The end date of the period over which progress toward the target is measured.
     *
     * @return Carbon
     */
    public function getEndDate(): ?Carbon
    {
        return $this->endDate;
    }

    
    /**
     * The goal value that the merchant aims to reach for the tracked metric within the target period. Must be greater than 0.
     *
     * @return string
     */
    public function getExpectedValue(): mixed
    {
        return $this->expectedValue;
    }

    
    /**
     * An optional filter expression to narrow the data evaluated against this target. For example, `shipping_country = 'US'`.
     *
     * @return string
     */
    public function getFilters(): ?string
    {
        return $this->filters;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The identifier of the analytics metric that this target tracks, such as `total_sales` or `orders`.
     *
     * @return string
     */
    public function getMetric(): ?string
    {
        return $this->metric;
    }

    
    /**
     * A human-readable label for the target, such as `Q1 Sales Target`.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The target's expected value converted to a specified presentment currency. Returns `null` when the target metric isn't a money metric or the conversion rate is unavailable.
     *
     * @return ShopifyMoneyV2
     */
    public function getPresentmentExpectedValue(): ?ShopifyMoneyV2
    {
        return $this->presentmentExpectedValue;
    }

    
    /**
     * A generated [ShopifyQL](https://shopify.dev/docs/api/shopifyql) query string that fetches the current value of the tracked metric for this target's date range and filters.
     *
     * @return string
     */
    public function getShopifyqlQuery(): ?string
    {
        return $this->shopifyqlQuery;
    }

    
    /**
     * The start date of the period over which progress toward the target is measured.
     *
     * @return Carbon
     */
    public function getStartDate(): ?Carbon
    {
        return $this->startDate;
    }

    
    /**
     * The date and time when the analytics target was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
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
