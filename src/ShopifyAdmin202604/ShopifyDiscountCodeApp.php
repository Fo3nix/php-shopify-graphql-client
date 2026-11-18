<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAppDiscountType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountRedeemCodeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountCombinesWith;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountContextHydrator;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountCustomerSelectionHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFunctionsErrorHistory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountShareableUrl;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;

/**
 * The `DiscountCodeApp` object stores information about code discounts
 * that are managed by an app using
 * [Shopify Functions](https://shopify.dev/docs/apps/build/functions).
 * Use `DiscountCodeApp` when you need advanced, custom, or
 * dynamic discount capabilities that aren't supported by
 * [Shopify's native discount types](https://help.shopify.com/manual/discounts/discount-types).
 *
 * Learn more about creating
 * [custom discount functionality](https://shopify.dev/docs/apps/build/discounts/build-discount-function).
 *
 * > Note:
 * > The [`DiscountAutomaticApp`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticApp)
 * object has similar functionality to the `DiscountCodeApp` object, with the exception that `DiscountAutomaticApp`
 * stores information about automatic discounts that are managed by an app using Shopify Functions.
 */
class ShopifyDiscountCodeApp
{
    protected $appDiscountType;
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
    protected $discountClass;
    protected $discountClasses;
    protected $discountId;
    protected $endsAt;
    protected $errorHistory;
    protected $hasTimelineComment;
    protected $recurringCycleLimit;
    protected $shareableUrls;
    protected $startsAt;
    protected $status;
    protected $tags;
    protected $title;
    protected $totalSales;
    protected $updatedAt;
    protected $usageLimit;

    
    /**
     * The details about the app extension that's providing the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types).
     * This information includes the app extension's name and
     * [client ID](https://shopify.dev/docs/apps/build/authentication-authorization/client-secrets),
     * [App Bridge configuration](https://shopify.dev/docs/api/app-bridge),
     * [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations),
     * [function ID](https://shopify.dev/docs/apps/build/functions/input-output/metafields-for-input-queries),
     * and other metadata about the discount type, including the discount type's name and description.
     *
     * @return ShopifyAppDiscountType
     */
    public function getAppDiscountType(): ?ShopifyAppDiscountType
    {
        return $this->appDiscountType;
    }

    
    /**
     * Whether the discount applies on regular one-time-purchase items.
     *
     * @return bool
     */
    public function getAppliesOnOneTimePurchase(): ?bool
    {
        return $this->appliesOnOneTimePurchase;
    }

    
    /**
     * Whether the discount applies to subscriptions items.
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
     * The customers that can use the discount.
     *
     * @return ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers
     */
    public function getCustomerSelection(): ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers|null
    {
        return $this->customerSelection;
    }

    
    /**
     * The
     * [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that's used to control how discounts can be combined.
     *
     * @return string A ShopifyDiscountClassEnumObject value
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
     * The [globally-unique ID](https://shopify.dev/docs/api/usage/gids)
     * for the discount.
     *
     * @return string
     */
    public function getDiscountId(): ?string
    {
        return $this->discountId;
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
     * The [error history](https://shopify.dev/docs/apps/build/functions/monitoring-and-errors)
     * for the latest version of the discount type that the app provides.
     *
     * @return ShopifyFunctionsErrorHistory
     */
    public function getErrorHistory(): ?ShopifyFunctionsErrorHistory
    {
        return $this->errorHistory;
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
            if (isset($data['appDiscountType']) && $data['appDiscountType'] !== null) {
                $instance->appDiscountType = ShopifyAppDiscountType::fromArray($data['appDiscountType']);
            }
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
            if (isset($data['discountClass']) && $data['discountClass'] !== null) {
                $instance->discountClass = $data['discountClass'];
            }
            if (isset($data['discountClasses']) && $data['discountClasses'] !== null) {
                $instance->discountClasses = $data['discountClasses'];
            }
            if (isset($data['discountId']) && $data['discountId'] !== null) {
                $instance->discountId = $data['discountId'];
            }
            if (isset($data['endsAt']) && $data['endsAt'] !== null) {
                $instance->endsAt = new Carbon($data['endsAt']);
            }
            if (isset($data['errorHistory']) && $data['errorHistory'] !== null) {
                $instance->errorHistory = ShopifyFunctionsErrorHistory::fromArray($data['errorHistory']);
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['recurringCycleLimit']) && $data['recurringCycleLimit'] !== null) {
                $instance->recurringCycleLimit = $data['recurringCycleLimit'];
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
            if ($this->appDiscountType !== null) {
                $data['appDiscountType'] = $this->appDiscountType->asArray();
            }
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
            if ($this->discountClass !== null) {
                $data['discountClass'] = $this->discountClass;
            }
            if ($this->discountClasses !== null) {
                $data['discountClasses'] = $this->discountClasses;
            }
            if ($this->discountId !== null) {
                $data['discountId'] = $this->discountId;
            }
            if ($this->endsAt !== null) {
                $data['endsAt'] = $this->endsAt->toIso8601String();
            }
            if ($this->errorHistory !== null) {
                $data['errorHistory'] = $this->errorHistory->asArray();
            }
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->recurringCycleLimit !== null) {
                $data['recurringCycleLimit'] = $this->recurringCycleLimit;
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
