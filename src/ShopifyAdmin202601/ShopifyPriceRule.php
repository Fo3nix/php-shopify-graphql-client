<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountCombinesWith;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleCustomerSelection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleDiscountCodeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleEntitlementToPrerequisiteQuantityRatio;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleItemEntitlements;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleLineItemPrerequisites;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleQuantityRange;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleMoneyRange;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRulePrerequisiteToEntitlementQuantityRatio;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleShareableUrl;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleShippingLineEntitlements;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleValidityPeriod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceRuleValueHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPricingValueHydrator;

/**
 * A set of conditions, including entitlements and prerequisites, that must be met for a discount code to apply.
 *
 * > Note:
 * > Use the types and queries included our [discount tutorials](https://shopify.dev/docs/apps/selling-strategies/discounts/getting-started) instead. These will replace the GraphQL Admin API's [`PriceRule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceRule) object and [`DiscountCode`](https://shopify.dev/docs/api/admin-graphql/latest/unions/DiscountCode) union, and the REST Admin API's deprecated[`PriceRule`](https://shopify.dev/docs/api/admin-rest/unstable/resources/pricerule) resource.
 */
class ShopifyPriceRule implements ShopifyCommentEventSubject, ShopifyHasEvents, ShopifyLegacyInteroperability, ShopifyNode
{
    protected $allocationLimit;
    protected $allocationMethod;
    protected $app;
    protected $combinesWith;
    protected $createdAt;
    protected $customerSelection;
    protected $discountClass;
    protected $discountClasses;
    protected $discountCodes;
    protected $discountCodesCount;
    protected $endsAt;
    protected $entitlementToPrerequisiteQuantityRatio;
    protected $events;
    protected $features;
    protected $hasTimelineComment;
    protected $id;
    protected $itemEntitlements;
    protected $itemPrerequisites;
    protected $legacyResourceId;
    protected $oncePerCustomer;
    protected $prerequisiteQuantityRange;
    protected $prerequisiteShippingPriceRange;
    protected $prerequisiteSubtotalRange;
    protected $prerequisiteToEntitlementQuantityRatio;
    protected $shareableUrls;
    protected $shippingEntitlements;
    protected $startsAt;
    protected $status;
    protected $summary;
    protected $target;
    protected $title;
    protected $totalSales;
    protected $traits;
    protected $usageCount;
    protected $usageLimit;
    protected $validityPeriod;
    protected $value;
    protected $valueV2;

    
    /**
     * The maximum number of times that the price rule can be allocated onto an order.
     *
     * @return int
     */
    public function getAllocationLimit(): ?int
    {
        return $this->allocationLimit;
    }

    
    /**
     * The method by which the price rule's value is allocated to its entitled items.
     *
     * @return string A ShopifyPriceRuleAllocationMethodEnumObject value
     */
    public function getAllocationMethod(): ?string
    {
        return $this->allocationMethod;
    }

    
    /**
     * The application that created the price rule.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
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
     * The date and time when the price rule was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The customers that can use this price rule.
     *
     * @return ShopifyPriceRuleCustomerSelection
     */
    public function getCustomerSelection(): ?ShopifyPriceRuleCustomerSelection
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
     * List of the price rule's discount codes.
     *
     * @return ShopifyPriceRuleDiscountCodeConnection
     */
    public function getDiscountCodes(): ?ShopifyPriceRuleDiscountCodeConnection
    {
        return $this->discountCodes;
    }

    
    /**
     * How many discount codes associated with the price rule.
     *
     * @return ShopifyCount
     */
    public function getDiscountCodesCount(): ?ShopifyCount
    {
        return $this->discountCodesCount;
    }

    
    /**
     * The date and time when the price rule ends. For open-ended price rules, use `null`.
     *
     * @return Carbon
     */
    public function getEndsAt(): ?Carbon
    {
        return $this->endsAt;
    }

    
    /**
     * Quantity of prerequisite items required for the price rule to be applicable,  compared to quantity of entitled items.
     *
     * @return ShopifyPriceRuleEntitlementToPrerequisiteQuantityRatio
     */
    public function getEntitlementToPrerequisiteQuantityRatio(): ?ShopifyPriceRuleEntitlementToPrerequisiteQuantityRatio
    {
        return $this->entitlementToPrerequisiteQuantityRatio;
    }

    
    /**
     * The paginated list of events associated with the price rule.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
    }

    
    /**
     * A list of the price rule's features.
     *
     * @return string[] ShopifyPriceRuleFeatureEnumObject values
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    
    /**
     * Indicates whether there are any timeline comments on the price rule.
     *
     * @return bool
     */
    public function getHasTimelineComment(): ?bool
    {
        return $this->hasTimelineComment;
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
     * The items to which the price rule applies.
     *
     * @return ShopifyPriceRuleItemEntitlements
     */
    public function getItemEntitlements(): ?ShopifyPriceRuleItemEntitlements
    {
        return $this->itemEntitlements;
    }

    
    /**
     * The items required for the price rule to be applicable.
     *
     * @return ShopifyPriceRuleLineItemPrerequisites
     */
    public function getItemPrerequisites(): ?ShopifyPriceRuleLineItemPrerequisites
    {
        return $this->itemPrerequisites;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * Whether the price rule can be applied only once per customer.
     *
     * @return bool
     */
    public function getOncePerCustomer(): ?bool
    {
        return $this->oncePerCustomer;
    }

    
    /**
     * The number of the entitled items must fall within this range for the price rule to be applicable.
     *
     * @return ShopifyPriceRuleQuantityRange
     */
    public function getPrerequisiteQuantityRange(): ?ShopifyPriceRuleQuantityRange
    {
        return $this->prerequisiteQuantityRange;
    }

    
    /**
     * The shipping cost must fall within this range for the price rule to be applicable.
     *
     * @return ShopifyPriceRuleMoneyRange
     */
    public function getPrerequisiteShippingPriceRange(): ?ShopifyPriceRuleMoneyRange
    {
        return $this->prerequisiteShippingPriceRange;
    }

    
    /**
     * The sum of the entitled items subtotal prices must fall within this range for the price rule to be applicable.
     *
     * @return ShopifyPriceRuleMoneyRange
     */
    public function getPrerequisiteSubtotalRange(): ?ShopifyPriceRuleMoneyRange
    {
        return $this->prerequisiteSubtotalRange;
    }

    
    /**
     * Quantity of prerequisite items required for the price rule to be applicable,  compared to quantity of entitled items.
     *
     * @return ShopifyPriceRulePrerequisiteToEntitlementQuantityRatio
     */
    public function getPrerequisiteToEntitlementQuantityRatio(): ?ShopifyPriceRulePrerequisiteToEntitlementQuantityRatio
    {
        return $this->prerequisiteToEntitlementQuantityRatio;
    }

    
    /**
     * URLs that can be used to share the discount.
     *
     * @return ShopifyPriceRuleShareableUrl[]
     */
    public function getShareableUrls(): ?array
    {
        return $this->shareableUrls;
    }

    
    /**
     * The shipping lines to which the price rule applies.
     *
     * @return ShopifyPriceRuleShippingLineEntitlements
     */
    public function getShippingEntitlements(): ?ShopifyPriceRuleShippingLineEntitlements
    {
        return $this->shippingEntitlements;
    }

    
    /**
     * The date and time when the price rule starts.
     *
     * @return Carbon
     */
    public function getStartsAt(): ?Carbon
    {
        return $this->startsAt;
    }

    
    /**
     * The status of the price rule.
     *
     * @return string A ShopifyPriceRuleStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * A detailed summary of the price rule.
     *
     * @return string
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    
    /**
     * The type of lines (line_item or shipping_line) to which the price rule applies.
     *
     * @return string A ShopifyPriceRuleTargetEnumObject value
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

    
    /**
     * The title of the price rule.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The total sales from orders where the price rule was used.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalSales(): ?ShopifyMoneyV2
    {
        return $this->totalSales;
    }

    
    /**
     * A list of the price rule's features.
     *
     * @return string[] ShopifyPriceRuleTraitEnumObject values
     */
    public function getTraits(): ?array
    {
        return $this->traits;
    }

    
    /**
     * The number of times that the price rule has been used. This value is updated asynchronously and can be different than the actual usage count.
     *
     * @return int
     */
    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }

    
    /**
     * The maximum number of times that the price rule can be used in total.
     *
     * @return int
     */
    public function getUsageLimit(): ?int
    {
        return $this->usageLimit;
    }

    
    /**
     * A time period during which a price rule is applicable.
     *
     * @return ShopifyPriceRuleValidityPeriod
     */
    public function getValidityPeriod(): ?ShopifyPriceRuleValidityPeriod
    {
        return $this->validityPeriod;
    }

    
    /**
     * The value of the price rule.
     *
     * @return ShopifyPriceRuleFixedAmountValue|ShopifyPriceRulePercentValue
     */
    public function getValue(): ShopifyPriceRuleFixedAmountValue|ShopifyPriceRulePercentValue|null
    {
        return $this->value;
    }

    
    /**
     * The value of the price rule.
     *
     * @return ShopifyMoneyV2|ShopifyPricingPercentageValue
     */
    public function getValueV2(): ShopifyMoneyV2|ShopifyPricingPercentageValue|null
    {
        return $this->valueV2;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allocationLimit']) && $data['allocationLimit'] !== null) {
                $instance->allocationLimit = $data['allocationLimit'];
            }
            if (isset($data['allocationMethod']) && $data['allocationMethod'] !== null) {
                $instance->allocationMethod = $data['allocationMethod'];
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['combinesWith']) && $data['combinesWith'] !== null) {
                $instance->combinesWith = ShopifyDiscountCombinesWith::fromArray($data['combinesWith']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customerSelection']) && $data['customerSelection'] !== null) {
                $instance->customerSelection = ShopifyPriceRuleCustomerSelection::fromArray($data['customerSelection']);
            }
            if (isset($data['discountClass']) && $data['discountClass'] !== null) {
                $instance->discountClass = $data['discountClass'];
            }
            if (isset($data['discountClasses']) && $data['discountClasses'] !== null) {
                $instance->discountClasses = $data['discountClasses'];
            }
            if (isset($data['discountCodes']) && $data['discountCodes'] !== null) {
                $instance->discountCodes = ShopifyPriceRuleDiscountCodeConnection::fromArray($data['discountCodes']);
            }
            if (isset($data['discountCodesCount']) && $data['discountCodesCount'] !== null) {
                $instance->discountCodesCount = ShopifyCount::fromArray($data['discountCodesCount']);
            }
            if (isset($data['endsAt']) && $data['endsAt'] !== null) {
                $instance->endsAt = new Carbon($data['endsAt']);
            }
            if (isset($data['entitlementToPrerequisiteQuantityRatio']) && $data['entitlementToPrerequisiteQuantityRatio'] !== null) {
                $instance->entitlementToPrerequisiteQuantityRatio = ShopifyPriceRuleEntitlementToPrerequisiteQuantityRatio::fromArray($data['entitlementToPrerequisiteQuantityRatio']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['features']) && $data['features'] !== null) {
                $instance->features = $data['features'];
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['itemEntitlements']) && $data['itemEntitlements'] !== null) {
                $instance->itemEntitlements = ShopifyPriceRuleItemEntitlements::fromArray($data['itemEntitlements']);
            }
            if (isset($data['itemPrerequisites']) && $data['itemPrerequisites'] !== null) {
                $instance->itemPrerequisites = ShopifyPriceRuleLineItemPrerequisites::fromArray($data['itemPrerequisites']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['oncePerCustomer']) && $data['oncePerCustomer'] !== null) {
                $instance->oncePerCustomer = $data['oncePerCustomer'];
            }
            if (isset($data['prerequisiteQuantityRange']) && $data['prerequisiteQuantityRange'] !== null) {
                $instance->prerequisiteQuantityRange = ShopifyPriceRuleQuantityRange::fromArray($data['prerequisiteQuantityRange']);
            }
            if (isset($data['prerequisiteShippingPriceRange']) && $data['prerequisiteShippingPriceRange'] !== null) {
                $instance->prerequisiteShippingPriceRange = ShopifyPriceRuleMoneyRange::fromArray($data['prerequisiteShippingPriceRange']);
            }
            if (isset($data['prerequisiteSubtotalRange']) && $data['prerequisiteSubtotalRange'] !== null) {
                $instance->prerequisiteSubtotalRange = ShopifyPriceRuleMoneyRange::fromArray($data['prerequisiteSubtotalRange']);
            }
            if (isset($data['prerequisiteToEntitlementQuantityRatio']) && $data['prerequisiteToEntitlementQuantityRatio'] !== null) {
                $instance->prerequisiteToEntitlementQuantityRatio = ShopifyPriceRulePrerequisiteToEntitlementQuantityRatio::fromArray($data['prerequisiteToEntitlementQuantityRatio']);
            }
            if (isset($data['shareableUrls']) && $data['shareableUrls'] !== null) {
                $instance->shareableUrls = array_map(function($item) { return ShopifyPriceRuleShareableUrl::fromArray($item); }, $data['shareableUrls']);
            }
            if (isset($data['shippingEntitlements']) && $data['shippingEntitlements'] !== null) {
                $instance->shippingEntitlements = ShopifyPriceRuleShippingLineEntitlements::fromArray($data['shippingEntitlements']);
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
            if (isset($data['target']) && $data['target'] !== null) {
                $instance->target = $data['target'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalSales']) && $data['totalSales'] !== null) {
                $instance->totalSales = ShopifyMoneyV2::fromArray($data['totalSales']);
            }
            if (isset($data['traits']) && $data['traits'] !== null) {
                $instance->traits = $data['traits'];
            }
            if (isset($data['usageCount']) && $data['usageCount'] !== null) {
                $instance->usageCount = $data['usageCount'];
            }
            if (isset($data['usageLimit']) && $data['usageLimit'] !== null) {
                $instance->usageLimit = $data['usageLimit'];
            }
            if (isset($data['validityPeriod']) && $data['validityPeriod'] !== null) {
                $instance->validityPeriod = ShopifyPriceRuleValidityPeriod::fromArray($data['validityPeriod']);
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = ShopifyPriceRuleValueHydrator::fromArray($data['value']);
            }
            if (isset($data['valueV2']) && $data['valueV2'] !== null) {
                $instance->valueV2 = ShopifyPricingValueHydrator::fromArray($data['valueV2']);
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
            if ($this->allocationLimit !== null) {
                $data['allocationLimit'] = $this->allocationLimit;
            }
            if ($this->allocationMethod !== null) {
                $data['allocationMethod'] = $this->allocationMethod;
            }
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->combinesWith !== null) {
                $data['combinesWith'] = $this->combinesWith->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customerSelection !== null) {
                $data['customerSelection'] = $this->customerSelection->asArray();
            }
            if ($this->discountClass !== null) {
                $data['discountClass'] = $this->discountClass;
            }
            if ($this->discountClasses !== null) {
                $data['discountClasses'] = $this->discountClasses;
            }
            if ($this->discountCodes !== null) {
                $data['discountCodes'] = $this->discountCodes->asArray();
            }
            if ($this->discountCodesCount !== null) {
                $data['discountCodesCount'] = $this->discountCodesCount->asArray();
            }
            if ($this->endsAt !== null) {
                $data['endsAt'] = $this->endsAt->toIso8601String();
            }
            if ($this->entitlementToPrerequisiteQuantityRatio !== null) {
                $data['entitlementToPrerequisiteQuantityRatio'] = $this->entitlementToPrerequisiteQuantityRatio->asArray();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->features !== null) {
                $data['features'] = $this->features;
            }
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->itemEntitlements !== null) {
                $data['itemEntitlements'] = $this->itemEntitlements->asArray();
            }
            if ($this->itemPrerequisites !== null) {
                $data['itemPrerequisites'] = $this->itemPrerequisites->asArray();
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->oncePerCustomer !== null) {
                $data['oncePerCustomer'] = $this->oncePerCustomer;
            }
            if ($this->prerequisiteQuantityRange !== null) {
                $data['prerequisiteQuantityRange'] = $this->prerequisiteQuantityRange->asArray();
            }
            if ($this->prerequisiteShippingPriceRange !== null) {
                $data['prerequisiteShippingPriceRange'] = $this->prerequisiteShippingPriceRange->asArray();
            }
            if ($this->prerequisiteSubtotalRange !== null) {
                $data['prerequisiteSubtotalRange'] = $this->prerequisiteSubtotalRange->asArray();
            }
            if ($this->prerequisiteToEntitlementQuantityRatio !== null) {
                $data['prerequisiteToEntitlementQuantityRatio'] = $this->prerequisiteToEntitlementQuantityRatio->asArray();
            }
            if ($this->shareableUrls !== null) {
                $data['shareableUrls'] = array_map(function($item) { return $item->asArray(); }, $this->shareableUrls);
            }
            if ($this->shippingEntitlements !== null) {
                $data['shippingEntitlements'] = $this->shippingEntitlements->asArray();
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
            if ($this->target !== null) {
                $data['target'] = $this->target;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->totalSales !== null) {
                $data['totalSales'] = $this->totalSales->asArray();
            }
            if ($this->traits !== null) {
                $data['traits'] = $this->traits;
            }
            if ($this->usageCount !== null) {
                $data['usageCount'] = $this->usageCount;
            }
            if ($this->usageLimit !== null) {
                $data['usageLimit'] = $this->usageLimit;
            }
            if ($this->validityPeriod !== null) {
                $data['validityPeriod'] = $this->validityPeriod->asArray();
            }
            if ($this->value !== null) {
                $data['value'] = ShopifyPriceRuleValueHydrator::toArray($this->value);
            }
            if ($this->valueV2 !== null) {
                $data['valueV2'] = ShopifyPricingValueHydrator::toArray($this->valueV2);
            }
            return $data;
        }
}
