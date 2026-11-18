<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAppDiscountType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountCombinesWith;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountContextHydrator;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFunctionsErrorHistory;

/**
 * The `DiscountAutomaticApp` object stores information about automatic discounts
 * that are managed by an app using
 * [Shopify Functions](https://shopify.dev/docs/apps/build/functions).
 * Use `DiscountAutomaticApp`when you need advanced, custom, or
 * dynamic discount capabilities that aren't supported by
 * [Shopify's native discount types](https://help.shopify.com/manual/discounts/discount-types).
 *
 * Learn more about creating
 * [custom discount functionality](https://shopify.dev/docs/apps/build/discounts/build-discount-function).
 *
 * > Note:
 * > The [`DiscountCodeApp`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCodeApp)
 * object has similar functionality to the `DiscountAutomaticApp` object, with the exception that `DiscountCodeApp`
 * stores information about discount codes that are managed by an app using Shopify Functions.
 * >
 * > API versions prior to `2025-10` only return automatic discounts with `context` set to `all`, discounts with other values are filtered out.
 */
class ShopifyDiscountAutomaticApp
{
    protected $appDiscountType;
    protected $appliesOnOneTimePurchase;
    protected $appliesOnSubscription;
    protected $asyncUsageCount;
    protected $combinesWith;
    protected $context;
    protected $createdAt;
    protected $discountClass;
    protected $discountClasses;
    protected $discountId;
    protected $endsAt;
    protected $errorHistory;
    protected $recurringCycleLimit;
    protected $startsAt;
    protected $status;
    protected $tags;
    protected $title;
    protected $updatedAt;

    
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
     * Whether the discount applies on one-time purchases.
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
     * The date and time when the discount was updated.
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
            if (isset($data['appDiscountType']) && $data['appDiscountType'] !== null) {
                $instance->appDiscountType = ShopifyAppDiscountType::fromArray($data['appDiscountType']);
            }
            if (isset($data['appliesOnOneTimePurchase']) && $data['appliesOnOneTimePurchase'] !== null) {
                $instance->appliesOnOneTimePurchase = $data['appliesOnOneTimePurchase'];
            }
            if (isset($data['appliesOnSubscription']) && $data['appliesOnSubscription'] !== null) {
                $instance->appliesOnSubscription = $data['appliesOnSubscription'];
            }
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
            if (isset($data['recurringCycleLimit']) && $data['recurringCycleLimit'] !== null) {
                $instance->recurringCycleLimit = $data['recurringCycleLimit'];
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
            if ($this->appDiscountType !== null) {
                $data['appDiscountType'] = $this->appDiscountType->asArray();
            }
            if ($this->appliesOnOneTimePurchase !== null) {
                $data['appliesOnOneTimePurchase'] = $this->appliesOnOneTimePurchase;
            }
            if ($this->appliesOnSubscription !== null) {
                $data['appliesOnSubscription'] = $this->appliesOnSubscription;
            }
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
            if ($this->recurringCycleLimit !== null) {
                $data['recurringCycleLimit'] = $this->recurringCycleLimit;
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
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
