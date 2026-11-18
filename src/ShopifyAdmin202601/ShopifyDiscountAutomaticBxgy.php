<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountCombinesWith;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountContextHydrator;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountCustomerBuys;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountCustomerGets;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyEventConnection;

/**
 * The `DiscountAutomaticBxgy` object lets you manage
 * [buy X get Y discounts (BXGY)](https://help.shopify.com/manual/discounts/discount-types/buy-x-get-y)
 * that are automatically applied on a cart and at checkout. BXGY discounts incentivize customers by offering
 * them additional items at a discounted price or for free when they purchase a specified quantity of items.
 *
 * The `DiscountAutomaticBxgy` object stores information about automatic BXGY discounts that apply to
 * specific [products and variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountProducts),
 * [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCollections),
 * or [all items in a cart](https://shopify.dev/docs/api/admin-graphql/latest/objects/AllDiscountItems).
 *
 * Learn more about working with [Shopify's discount model](https://shopify.dev/docs/apps/build/discounts),
 * including limitations and considerations.
 *
 * > Note:
 * > The [`DiscountCodeBxgy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCodeBxgy)
 * object has similar functionality to the `DiscountAutomaticBxgy` object, but customers need to enter a code to
 * receive a discount.
 * >
 * > API versions prior to `2025-10` only return automatic discounts with `context` set to `all`, discounts with other values are filtered out.
 */
class ShopifyDiscountAutomaticBxgy implements ShopifyHasEvents, ShopifyNode
{
    protected $asyncUsageCount;
    protected $combinesWith;
    protected $context;
    protected $createdAt;
    protected $customerBuys;
    protected $customerGets;
    protected $discountClass;
    protected $discountClasses;
    protected $endsAt;
    protected $events;
    protected $id;
    protected $startsAt;
    protected $status;
    protected $summary;
    protected $title;
    protected $updatedAt;
    protected $usageCount;
    protected $usesPerOrderLimit;

    
    /**
     * The number of times that the discount has been used.
     * For example, if a "Buy 3, Get 1 Free" t-shirt discount
     * is automatically applied in 200 transactions, then the
     * discount has been used 200 times.
     * This value is updated asynchronously. As a result,
     * it might be lower than the actual usage count until the
     * asynchronous process is completed.
     *
     * @return int
     */
    public function getAsyncUsageCount(): ?int
    {
        return $this->asyncUsageCount;
    }

    
    /**
     * The
     * [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that you can use in combination with
     * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types).
     *
     * @return ShopifyDiscountCombinesWith
     */
    public function getCombinesWith(): ?ShopifyDiscountCombinesWith
    {
        return $this->combinesWith;
    }

    
    /**
     * The context defining which buyers can use the discount.
     *
     * @return ShopifyDiscountBuyerSelectionAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers
     */
    public function getContext(): ShopifyDiscountBuyerSelectionAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers|null
    {
        return $this->context;
    }

    
    /**
     * The date and time when the discount was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The items eligible for the discount and the required quantity of each to receive the discount.
     *
     * @return ShopifyDiscountCustomerBuys
     */
    public function getCustomerBuys(): ?ShopifyDiscountCustomerBuys
    {
        return $this->customerBuys;
    }

    
    /**
     * The items in the order that qualify for the discount, their quantities, and the total value of the discount.
     *
     * @return ShopifyDiscountCustomerGets
     */
    public function getCustomerGets(): ?ShopifyDiscountCustomerGets
    {
        return $this->customerGets;
    }

    
    /**
     * The [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that's used to control how discounts can be combined.
     *
     * @return string A ShopifyMerchandiseDiscountClassEnumObject value
     */
    public function getDiscountClass(): ?string
    {
        return $this->discountClass;
    }

    
    /**
     * The classes of the discount.
     *
     * @return string[] ShopifyDiscountClassEnumObject values
     */
    public function getDiscountClasses(): ?array
    {
        return $this->discountClasses;
    }

    
    /**
     * The date and time when the discount expires and is no longer available to customers.
     * For discounts without a fixed expiration date, specify `null`.
     *
     * @return Carbon
     */
    public function getEndsAt(): ?Carbon
    {
        return $this->endsAt;
    }

    
    /**
     * The paginated list of events associated with the host subject.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
    }

    
    /**
     * A legacy unique ID for the discount.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The date and time when the discount becomes active and is available to customers.
     *
     * @return Carbon
     */
    public function getStartsAt(): ?Carbon
    {
        return $this->startsAt;
    }

    
    /**
     * The status of the discount that describes its availability,
     * expiration, or pending activation.
     *
     * @return string A ShopifyDiscountStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * A detailed explanation of what the discount is,
     * who can use it, when and where it applies, and any associated
     * rules or limitations.
     *
     * @return string
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    
    /**
     * The discount's name that displays to merchants in the Shopify admin and to customers.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The date and time when the discount was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The number of times that the discount has been used.
     *
     * @return int
     */
    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }

    
    /**
     * The maximum number of times that the discount can be applied to an order.
     *
     * @return int
     */
    public function getUsesPerOrderLimit(): ?int
    {
        return $this->usesPerOrderLimit;
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
            if (isset($data['combinesWith']) && $data['combinesWith'] !== null) {
                $instance->combinesWith = ShopifyDiscountCombinesWith::fromArray($data['combinesWith']);
            }
            if (isset($data['context']) && $data['context'] !== null) {
                $instance->context = ShopifyDiscountContextHydrator::fromArray($data['context']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customerBuys']) && $data['customerBuys'] !== null) {
                $instance->customerBuys = ShopifyDiscountCustomerBuys::fromArray($data['customerBuys']);
            }
            if (isset($data['customerGets']) && $data['customerGets'] !== null) {
                $instance->customerGets = ShopifyDiscountCustomerGets::fromArray($data['customerGets']);
            }
            if (isset($data['discountClass']) && $data['discountClass'] !== null) {
                $instance->discountClass = $data['discountClass'];
            }
            if (isset($data['discountClasses']) && $data['discountClasses'] !== null) {
                $instance->discountClasses = $data['discountClasses'];
            }
            if (isset($data['endsAt']) && $data['endsAt'] !== null) {
                $instance->endsAt = new Carbon($data['endsAt']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['startsAt']) && $data['startsAt'] !== null) {
                $instance->startsAt = new Carbon($data['startsAt']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['summary']) && $data['summary'] !== null) {
                $instance->summary = $data['summary'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['usageCount']) && $data['usageCount'] !== null) {
                $instance->usageCount = $data['usageCount'];
            }
            if (isset($data['usesPerOrderLimit']) && $data['usesPerOrderLimit'] !== null) {
                $instance->usesPerOrderLimit = $data['usesPerOrderLimit'];
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
            if ($this->combinesWith !== null) {
                $data['combinesWith'] = $this->combinesWith->asArray();
            }
            if ($this->context !== null) {
                $data['context'] = ShopifyDiscountContextHydrator::toArray($this->context);
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customerBuys !== null) {
                $data['customerBuys'] = $this->customerBuys->asArray();
            }
            if ($this->customerGets !== null) {
                $data['customerGets'] = $this->customerGets->asArray();
            }
            if ($this->discountClass !== null) {
                $data['discountClass'] = $this->discountClass;
            }
            if ($this->discountClasses !== null) {
                $data['discountClasses'] = $this->discountClasses;
            }
            if ($this->endsAt !== null) {
                $data['endsAt'] = $this->endsAt->toIso8601String();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->startsAt !== null) {
                $data['startsAt'] = $this->startsAt->toIso8601String();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->summary !== null) {
                $data['summary'] = $this->summary;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->usageCount !== null) {
                $data['usageCount'] = $this->usageCount;
            }
            if ($this->usesPerOrderLimit !== null) {
                $data['usesPerOrderLimit'] = $this->usesPerOrderLimit;
            }
            return $data;
        }
}
