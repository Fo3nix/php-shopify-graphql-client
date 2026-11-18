<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountRedeemCodeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountCombinesWith;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountContextHydrator;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountCustomerBuys;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountCustomerGets;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountCustomerSelectionHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountShareableUrl;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;

/**
 * The `DiscountCodeBxgy` object lets you manage
 * [buy X get Y discounts (BXGY)](https://help.shopify.com/manual/discounts/discount-types/buy-x-get-y)
 * that are applied on a cart and at checkout when a customer enters a code. BXGY discounts incentivize customers
 * by offering them additional items at a discounted price or for free when they purchase a specified quantity
 * of items.
 *
 * The `DiscountCodeBxgy` object stores information about BXGY code discounts that apply to
 * specific [products and variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountProducts),
 * [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCollections),
 * or [all items in a cart](https://shopify.dev/docs/api/admin-graphql/latest/objects/AllDiscountItems).
 *
 * Learn more about working with [Shopify's discount model](https://shopify.dev/docs/apps/build/discounts),
 * including limitations and considerations.
 *
 * > Note:
 * > The [`DiscountAutomaticBxgy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticBxgy)
 * object has similar functionality to the `DiscountCodeBxgy` object, but discounts are automatically applied,
 * without the need for customers to enter a code.
 */
class ShopifyDiscountCodeBxgy
{
    protected $appliesOncePerCustomer;
    protected $asyncUsageCount;
    protected $codes;
    protected $codesCount;
    protected $combinesWith;
    protected $context;
    protected $createdAt;
    protected $customerBuys;
    protected $customerGets;
    protected $customerSelection;
    protected $discountClass;
    protected $discountClasses;
    protected $endsAt;
    protected $hasTimelineComment;
    protected $shareableUrls;
    protected $startsAt;
    protected $status;
    protected $summary;
    protected $tags;
    protected $title;
    protected $totalSales;
    protected $updatedAt;
    protected $usageLimit;
    protected $usesPerOrderLimit;

    
    /**
     * Whether a customer can only use the discount once.
     *
     * @return bool
     */
    public function getAppliesOncePerCustomer(): ?bool
    {
        return $this->appliesOncePerCustomer;
    }

    
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
     * A list codes that customers can use to redeem the discount.
     *
     * @return ShopifyDiscountRedeemCodeConnection
     */
    public function getCodes(): ?ShopifyDiscountRedeemCodeConnection
    {
        return $this->codes;
    }

    
    /**
     * The number of codes that a customer can use to redeem the discount.
     *
     * @return ShopifyCount
     */
    public function getCodesCount(): ?ShopifyCount
    {
        return $this->codesCount;
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
     * The customers that can use the discount.
     *
     * @return ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers
     */
    public function getCustomerSelection(): ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers|null
    {
        return $this->customerSelection;
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
     * Whether there are
     * [timeline comments](https://help.shopify.com/manual/discounts/managing-discount-codes#use-the-discount-timeline)
     * associated with the discount.
     *
     * @return bool
     */
    public function getHasTimelineComment(): ?bool
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * A list of URLs that the app can use to share the discount.
     *
     * @return ShopifyDiscountShareableUrl[]
     */
    public function getShareableUrls(): ?array
    {
        return $this->shareableUrls;
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
     * A list of searchable keywords that are associated with the discount.
     * For example, a merchant might apply the `loyalty` tag to discounts
     * that are associated with their loyalty program.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
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
     * The total sales from orders where the discount was used.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalSales(): ?ShopifyMoneyV2
    {
        return $this->totalSales;
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
     * The maximum number of times the discount can be redeemed.
     * For unlimited usage, specify `null`.
     *
     * @return int
     */
    public function getUsageLimit(): ?int
    {
        return $this->usageLimit;
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
            if (isset($data['appliesOncePerCustomer']) && $data['appliesOncePerCustomer'] !== null) {
                $instance->appliesOncePerCustomer = $data['appliesOncePerCustomer'];
            }
            if (isset($data['asyncUsageCount']) && $data['asyncUsageCount'] !== null) {
                $instance->asyncUsageCount = $data['asyncUsageCount'];
            }
            if (isset($data['codes']) && $data['codes'] !== null) {
                $instance->codes = ShopifyDiscountRedeemCodeConnection::fromArray($data['codes']);
            }
            if (isset($data['codesCount']) && $data['codesCount'] !== null) {
                $instance->codesCount = ShopifyCount::fromArray($data['codesCount']);
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
            if (isset($data['customerSelection']) && $data['customerSelection'] !== null) {
                $instance->customerSelection = ShopifyDiscountCustomerSelectionHydrator::fromArray($data['customerSelection']);
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
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['shareableUrls']) && $data['shareableUrls'] !== null) {
                $instance->shareableUrls = array_map(function($item) { return ShopifyDiscountShareableUrl::fromArray($item); }, $data['shareableUrls']);
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
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalSales']) && $data['totalSales'] !== null) {
                $instance->totalSales = ShopifyMoneyV2::fromArray($data['totalSales']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['usageLimit']) && $data['usageLimit'] !== null) {
                $instance->usageLimit = $data['usageLimit'];
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
            if ($this->appliesOncePerCustomer !== null) {
                $data['appliesOncePerCustomer'] = $this->appliesOncePerCustomer;
            }
            if ($this->asyncUsageCount !== null) {
                $data['asyncUsageCount'] = $this->asyncUsageCount;
            }
            if ($this->codes !== null) {
                $data['codes'] = $this->codes->asArray();
            }
            if ($this->codesCount !== null) {
                $data['codesCount'] = $this->codesCount->asArray();
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
            if ($this->customerSelection !== null) {
                $data['customerSelection'] = ShopifyDiscountCustomerSelectionHydrator::toArray($this->customerSelection);
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
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->shareableUrls !== null) {
                $data['shareableUrls'] = array_map(function($item) { return $item->asArray(); }, $this->shareableUrls);
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
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->totalSales !== null) {
                $data['totalSales'] = $this->totalSales->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->usageLimit !== null) {
                $data['usageLimit'] = $this->usageLimit;
            }
            if ($this->usesPerOrderLimit !== null) {
                $data['usesPerOrderLimit'] = $this->usesPerOrderLimit;
            }
            return $data;
        }
}
