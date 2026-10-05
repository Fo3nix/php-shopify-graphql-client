<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySubscriptionDiscountEntitledLines;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySubscriptionDiscountValue;

class ShopifySubscriptionManualDiscount
{
    protected $entitledLines;
    protected $id;
    protected $recurringCycleLimit;
    protected $rejectionReason;
    protected $targetType;
    protected $title;
    protected $type;
    protected $usageCount;
    protected $value;

    
    /**
     * @return ShopifySubscriptionDiscountEntitledLines
     */
    public function getEntitledLines()
    {
        return $this->entitledLines;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return int
     */
    public function getRecurringCycleLimit()
    {
        return $this->recurringCycleLimit;
    }

    
    /**
     * @return ShopifySubscriptionDiscountRejectionReasonEnumObject
     */
    public function getRejectionReason()
    {
        return $this->rejectionReason;
    }

    
    /**
     * @return ShopifyDiscountTargetTypeEnumObject
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return ShopifyDiscountTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return int
     */
    public function getUsageCount()
    {
        return $this->usageCount;
    }

    
    /**
     * @return ShopifySubscriptionDiscountValue
     */
    public function getValue()
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['entitledLines']) && $data['entitledLines'] !== null) {
                $instance->entitledLines = ShopifySubscriptionDiscountEntitledLines::fromArray($data['entitledLines']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['recurringCycleLimit']) && $data['recurringCycleLimit'] !== null) {
                $instance->recurringCycleLimit = $data['recurringCycleLimit'];
            }
            if (isset($data['rejectionReason']) && $data['rejectionReason'] !== null) {
                $instance->rejectionReason = $data['rejectionReason'];
            }
            if (isset($data['targetType']) && $data['targetType'] !== null) {
                $instance->targetType = $data['targetType'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['usageCount']) && $data['usageCount'] !== null) {
                $instance->usageCount = $data['usageCount'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = ShopifySubscriptionDiscountValue::fromArray($data['value']);
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
            if ($this->entitledLines !== null) {
                $data['entitledLines'] = $this->entitledLines->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->recurringCycleLimit !== null) {
                $data['recurringCycleLimit'] = $this->recurringCycleLimit;
            }
            if ($this->rejectionReason !== null) {
                $data['rejectionReason'] = $this->rejectionReason;
            }
            if ($this->targetType !== null) {
                $data['targetType'] = $this->targetType;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->usageCount !== null) {
                $data['usageCount'] = $this->usageCount;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value->asArray();
            }
            return $data;
        }
}
