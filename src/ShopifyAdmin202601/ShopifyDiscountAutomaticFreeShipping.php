<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountCombinesWith;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountContext;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountShippingDestinationSelection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountMinimumRequirement;

class ShopifyDiscountAutomaticFreeShipping
{
    protected $appliesOnOneTimePurchase;
    protected $appliesOnSubscription;
    protected $asyncUsageCount;
    protected $combinesWith;
    protected $context;
    protected $createdAt;
    protected $destinationSelection;
    protected $discountClass;
    protected $discountClasses;
    protected $endsAt;
    protected $hasTimelineComment;
    protected $maximumShippingPrice;
    protected $minimumRequirement;
    protected $recurringCycleLimit;
    protected $shortSummary;
    protected $startsAt;
    protected $status;
    protected $summary;
    protected $title;
    protected $totalSales;
    protected $updatedAt;

    
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
     * @return int
     */
    public function getAsyncUsageCount()
    {
        return $this->asyncUsageCount;
    }

    
    /**
     * @return ShopifyDiscountCombinesWith
     */
    public function getCombinesWith()
    {
        return $this->combinesWith;
    }

    
    /**
     * @return ShopifyDiscountContext
     */
    public function getContext()
    {
        return $this->context;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyDiscountShippingDestinationSelection
     */
    public function getDestinationSelection()
    {
        return $this->destinationSelection;
    }

    
    /**
     * @return ShopifyShippingDiscountClassEnumObject
     */
    public function getDiscountClass()
    {
        return $this->discountClass;
    }

    
    /**
     * @return ShopifyDiscountClassEnumObject[]
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
     * @return ShopifyMoneyV2
     */
    public function getMaximumShippingPrice()
    {
        return $this->maximumShippingPrice;
    }

    
    /**
     * @return ShopifyDiscountMinimumRequirement
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
     * @return ShopifyDiscountStatusEnumObject
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
     * @return ShopifyMoneyV2
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
            if (isset($data['asyncUsageCount']) && $data['asyncUsageCount'] !== null) {
                $instance->asyncUsageCount = $data['asyncUsageCount'];
            }
            if (isset($data['combinesWith']) && $data['combinesWith'] !== null) {
                $instance->combinesWith = ShopifyDiscountCombinesWith::fromArray($data['combinesWith']);
            }
            if (isset($data['context']) && $data['context'] !== null) {
                $instance->context = ShopifyDiscountContext::fromArray($data['context']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['destinationSelection']) && $data['destinationSelection'] !== null) {
                $instance->destinationSelection = ShopifyDiscountShippingDestinationSelection::fromArray($data['destinationSelection']);
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
                $instance->minimumRequirement = ShopifyDiscountMinimumRequirement::fromArray($data['minimumRequirement']);
            }
            if (isset($data['recurringCycleLimit']) && $data['recurringCycleLimit'] !== null) {
                $instance->recurringCycleLimit = $data['recurringCycleLimit'];
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
                $instance->totalSales = ShopifyMoneyV2::fromArray($data['totalSales']);
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
                $data['context'] = $this->context->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
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
            return $data;
        }
}
