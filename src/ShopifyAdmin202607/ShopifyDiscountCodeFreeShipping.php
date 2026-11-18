<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountRedeemCodeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountCombinesWith;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountContextHydrator;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountCustomerSelectionHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountShippingDestinationSelectionHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountMinimumRequirementHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountShareableUrl;

/**
 * The `DiscountCodeFreeShipping` object lets you manage
 * [free shipping discounts](https://help.shopify.com/manual/discounts/discount-types/free-shipping)
 * that are applied on a cart and at checkout when a customer enters a code. Free shipping discounts are
 * promotional deals that merchants offer to customers to waive shipping costs and encourage online purchases.
 *
 * The `DiscountCodeFreeShipping` object stores information about free shipping code discounts that apply to
 * specific [products and variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountProducts),
 * [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCollections),
 * or [all items in a cart](https://shopify.dev/docs/api/admin-graphql/latest/objects/AllDiscountItems).
 *
 * Learn more about working with [Shopify's discount model](https://shopify.dev/docs/apps/build/discounts),
 * including limitations and considerations.
 *
 * > Note:
 * > The
 * [`DiscountAutomaticFreeShipping`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticFreeShipping)
 * object has similar functionality to the `DiscountCodeFreeShipping` object, but discounts are automatically applied,
 * without the need for customers to enter a code.
 */
class ShopifyDiscountCodeFreeShipping
{
    protected $appliesOnOneTimePurchase;
    protected $appliesOnSubscription;
    protected $appliesOncePerCustomer;
    protected $asyncUsageCount;
    protected $codes;
    protected $codesCount;
    protected $combinesWith;
    protected $context;
    protected $createdAt;
    protected $customerSelection;
    protected $destinationSelection;
    protected $discountClass;
    protected $discountClasses;
    protected $endsAt;
    protected $hasTimelineComment;
    protected $maximumShippingPrice;
    protected $minimumRequirement;
    protected $recurringCycleLimit;
    protected $shareableUrls;
    protected $shortSummary;
    protected $startsAt;
    protected $status;
    protected $summary;
    protected $tags;
    protected $title;
    protected $totalSales;
    protected $updatedAt;
    protected $usageLimit;

    
    /**
     * Whether the discount applies on one-time purchases.
     * A one-time purchase is a transaction where you pay a
     * single time for a product, without any ongoing
     * commitments or recurring charges.
     *
     * @return bool
     */
    public function getAppliesOnOneTimePurchase(): ?bool
    {
        return $this->appliesOnOneTimePurchase;
    }

    
    /**
     * Whether the discount applies on subscription items.
     * [Subscriptions](https://shopify.dev/docs/apps/launch/billing/subscription-billing/offer-subscription-discounts)
     * enable customers to purchase products
     * on a recurring basis.
     *
     * @return bool
     */
    public function getAppliesOnSubscription(): ?bool
    {
        return $this->appliesOnSubscription;
    }

    
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
     * @return ShopifyDiscountBuyerSelectionAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers|ShopifyDiscountMarkets
     */
    public function getContext(): ShopifyDiscountBuyerSelectionAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers|ShopifyDiscountMarkets|null
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
     * The customers that can use the discount.
     *
     * @return ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomerSelectionUnknown|ShopifyDiscountCustomers
     */
    public function getCustomerSelection(): ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomerSelectionUnknown|ShopifyDiscountCustomers|null
    {
        return $this->customerSelection;
    }

    
    /**
     * The countries that qualify for the discount.
     * You can define
     * [a list of countries](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCountries)
     * or specify [all countries](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCountryAll)
     * to be eligible for the discount.
     *
     * @return ShopifyDiscountCountries|ShopifyDiscountCountryAll
     */
    public function getDestinationSelection(): ShopifyDiscountCountries|ShopifyDiscountCountryAll|null
    {
        return $this->destinationSelection;
    }

    
    /**
     * The [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that's used to control how discounts can be combined.
     *
     * @return string A ShopifyShippingDiscountClassEnumObject value
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
     * The maximum shipping price amount accepted to qualify for the discount.
     *
     * @return ShopifyMoneyV2
     */
    public function getMaximumShippingPrice(): ?ShopifyMoneyV2
    {
        return $this->maximumShippingPrice;
    }

    
    /**
     * The minimum subtotal or quantity of items that are required for the discount to be applied.
     *
     * @return ShopifyDiscountMinimumQuantity|ShopifyDiscountMinimumSubtotal
     */
    public function getMinimumRequirement(): ShopifyDiscountMinimumQuantity|ShopifyDiscountMinimumSubtotal|null
    {
        return $this->minimumRequirement;
    }

    
    /**
     * The number of billing cycles for which the discount can be applied,
     * which is useful for subscription-based discounts. For example, if you set this field
     * to `3`, then the discount only applies to the first three billing cycles of a
     * subscription. If you specify `0`, then the discount applies indefinitely.
     *
     * @return int
     */
    public function getRecurringCycleLimit(): ?int
    {
        return $this->recurringCycleLimit;
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
     * An abbreviated version of the discount
     * [`summary`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCodeFreeShipping#field-summary)
     * field.
     *
     * @return string
     */
    public function getShortSummary(): ?string
    {
        return $this->shortSummary;
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['appliesOnOneTimePurchase']) && $data['appliesOnOneTimePurchase'] !== null) {
                $instance->appliesOnOneTimePurchase = $data['appliesOnOneTimePurchase'];
            }
            if (isset($data['appliesOnSubscription']) && $data['appliesOnSubscription'] !== null) {
                $instance->appliesOnSubscription = $data['appliesOnSubscription'];
            }
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
            if (isset($data['customerSelection']) && $data['customerSelection'] !== null) {
                $instance->customerSelection = ShopifyDiscountCustomerSelectionHydrator::fromArray($data['customerSelection']);
            }
            if (isset($data['destinationSelection']) && $data['destinationSelection'] !== null) {
                $instance->destinationSelection = ShopifyDiscountShippingDestinationSelectionHydrator::fromArray($data['destinationSelection']);
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
            if (isset($data['maximumShippingPrice']) && $data['maximumShippingPrice'] !== null) {
                $instance->maximumShippingPrice = ShopifyMoneyV2::fromArray($data['maximumShippingPrice']);
            }
            if (isset($data['minimumRequirement']) && $data['minimumRequirement'] !== null) {
                $instance->minimumRequirement = ShopifyDiscountMinimumRequirementHydrator::fromArray($data['minimumRequirement']);
            }
            if (isset($data['recurringCycleLimit']) && $data['recurringCycleLimit'] !== null) {
                $instance->recurringCycleLimit = $data['recurringCycleLimit'];
            }
            if (isset($data['shareableUrls']) && $data['shareableUrls'] !== null) {
                $instance->shareableUrls = array_map(function($item) { return ShopifyDiscountShareableUrl::fromArray($item); }, $data['shareableUrls']);
            }
            if (isset($data['shortSummary']) && $data['shortSummary'] !== null) {
                $instance->shortSummary = $data['shortSummary'];
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
            if ($this->appliesOnOneTimePurchase !== null) {
                $data['appliesOnOneTimePurchase'] = $this->appliesOnOneTimePurchase;
            }
            if ($this->appliesOnSubscription !== null) {
                $data['appliesOnSubscription'] = $this->appliesOnSubscription;
            }
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
            if ($this->customerSelection !== null) {
                $data['customerSelection'] = ShopifyDiscountCustomerSelectionHydrator::toArray($this->customerSelection);
            }
            if ($this->destinationSelection !== null) {
                $data['destinationSelection'] = ShopifyDiscountShippingDestinationSelectionHydrator::toArray($this->destinationSelection);
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
            if ($this->maximumShippingPrice !== null) {
                $data['maximumShippingPrice'] = $this->maximumShippingPrice->asArray();
            }
            if ($this->minimumRequirement !== null) {
                $data['minimumRequirement'] = ShopifyDiscountMinimumRequirementHydrator::toArray($this->minimumRequirement);
            }
            if ($this->recurringCycleLimit !== null) {
                $data['recurringCycleLimit'] = $this->recurringCycleLimit;
            }
            if ($this->shareableUrls !== null) {
                $data['shareableUrls'] = array_map(function($item) { return $item->asArray(); }, $this->shareableUrls);
            }
            if ($this->shortSummary !== null) {
                $data['shortSummary'] = $this->shortSummary;
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
            return $data;
        }
}
