<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountRedeemCodeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountCombinesWith;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountCustomerSelection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountShippingDestinationSelection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountMinimumRequirement;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountShareableUrl;

class DiscountCodeFreeShipping
{
    protected $appliesOnOneTimePurchase;
    protected $appliesOnSubscription;
    protected $appliesOncePerCustomer;
    protected $asyncUsageCount;
    protected $codes;
    protected $codesCount;
    protected $combinesWith;
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
    protected $title;
    protected $totalSales;
    protected $updatedAt;
    protected $usageLimit;

    
    /**
     * @return bool
     */
    public function getAppliesOnOneTimePurchase()
    {
        return $this->appliesOnOneTimePurchase;
    }

    
    /**
     * @return bool
     */
    public function getAppliesOnSubscription()
    {
        return $this->appliesOnSubscription;
    }

    
    /**
     * @return bool
     */
    public function getAppliesOncePerCustomer()
    {
        return $this->appliesOncePerCustomer;
    }

    
    /**
     * @return int
     */
    public function getAsyncUsageCount()
    {
        return $this->asyncUsageCount;
    }

    
    /**
     * @return DiscountRedeemCodeConnection
     */
    public function getCodes()
    {
        return $this->codes;
    }

    
    /**
     * @return Count
     */
    public function getCodesCount()
    {
        return $this->codesCount;
    }

    
    /**
     * @return DiscountCombinesWith
     */
    public function getCombinesWith()
    {
        return $this->combinesWith;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return DiscountCustomerSelection
     */
    public function getCustomerSelection()
    {
        return $this->customerSelection;
    }

    
    /**
     * @return DiscountShippingDestinationSelection
     */
    public function getDestinationSelection()
    {
        return $this->destinationSelection;
    }

    
    /**
     * @return ShippingDiscountClassEnumObject
     */
    public function getDiscountClass()
    {
        return $this->discountClass;
    }

    
    /**
     * @return DiscountClassEnumObject[]
     */
    public function getDiscountClasses()
    {
        return $this->discountClasses;
    }

    
    /**
     * @return Carbon
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    
    /**
     * @return bool
     */
    public function getHasTimelineComment()
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * @return MoneyV2
     */
    public function getMaximumShippingPrice()
    {
        return $this->maximumShippingPrice;
    }

    
    /**
     * @return DiscountMinimumRequirement
     */
    public function getMinimumRequirement()
    {
        return $this->minimumRequirement;
    }

    
    /**
     * @return int
     */
    public function getRecurringCycleLimit()
    {
        return $this->recurringCycleLimit;
    }

    
    /**
     * @return DiscountShareableUrl[]
     */
    public function getShareableUrls()
    {
        return $this->shareableUrls;
    }

    
    /**
     * @return string
     */
    public function getShortSummary()
    {
        return $this->shortSummary;
    }

    
    /**
     * @return Carbon
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    
    /**
     * @return DiscountStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return MoneyV2
     */
    public function getTotalSales()
    {
        return $this->totalSales;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return int
     */
    public function getUsageLimit()
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
                $instance->codes = DiscountRedeemCodeConnection::fromArray($data['codes']);
            }
            if (isset($data['codesCount']) && $data['codesCount'] !== null) {
                $instance->codesCount = Count::fromArray($data['codesCount']);
            }
            if (isset($data['combinesWith']) && $data['combinesWith'] !== null) {
                $instance->combinesWith = DiscountCombinesWith::fromArray($data['combinesWith']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customerSelection']) && $data['customerSelection'] !== null) {
                $instance->customerSelection = DiscountCustomerSelection::fromArray($data['customerSelection']);
            }
            if (isset($data['destinationSelection']) && $data['destinationSelection'] !== null) {
                $instance->destinationSelection = DiscountShippingDestinationSelection::fromArray($data['destinationSelection']);
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
                $instance->maximumShippingPrice = MoneyV2::fromArray($data['maximumShippingPrice']);
            }
            if (isset($data['minimumRequirement']) && $data['minimumRequirement'] !== null) {
                $instance->minimumRequirement = DiscountMinimumRequirement::fromArray($data['minimumRequirement']);
            }
            if (isset($data['recurringCycleLimit']) && $data['recurringCycleLimit'] !== null) {
                $instance->recurringCycleLimit = $data['recurringCycleLimit'];
            }
            if (isset($data['shareableUrls']) && $data['shareableUrls'] !== null) {
                $instance->shareableUrls = array_map(function($item) { return DiscountShareableUrl::fromArray($item); }, $data['shareableUrls']);
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
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalSales']) && $data['totalSales'] !== null) {
                $instance->totalSales = MoneyV2::fromArray($data['totalSales']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customerSelection !== null) {
                $data['customerSelection'] = $this->customerSelection->asArray();
            }
            if ($this->destinationSelection !== null) {
                $data['destinationSelection'] = $this->destinationSelection->asArray();
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
                $data['minimumRequirement'] = $this->minimumRequirement->asArray();
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
