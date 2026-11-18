<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDiscountEntitledLines;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDiscountValueHydrator;

/**
 * Custom subscription discount.
 */
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
     * Entitled line items used to apply the subscription discount on.
     *
     * @return ShopifySubscriptionDiscountEntitledLines
     */
    public function getEntitledLines(): ?ShopifySubscriptionDiscountEntitledLines
    {
        return $this->entitledLines;
    }

    
    /**
     * The unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The maximum number of times the subscription discount will be applied on orders.
     *
     * @return int
     */
    public function getRecurringCycleLimit(): ?int
    {
        return $this->recurringCycleLimit;
    }

    
    /**
     * The reason that the discount on the subscription draft is rejected.
     *
     * @return string A ShopifySubscriptionDiscountRejectionReasonEnumObject value
     */
    public function getRejectionReason(): ?string
    {
        return $this->rejectionReason;
    }

    
    /**
     * Type of line the discount applies on.
     *
     * @return string A ShopifyDiscountTargetTypeEnumObject value
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    
    /**
     * The title associated with the subscription discount.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The type of the subscription discount.
     *
     * @return string A ShopifyDiscountTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The number of times the discount was applied.
     *
     * @return int
     */
    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }

    
    /**
     * The value of the subscription discount.
     *
     * @return ShopifySubscriptionDiscountFixedAmountValue|ShopifySubscriptionDiscountPercentageValue
     */
    public function getValue(): ShopifySubscriptionDiscountFixedAmountValue|ShopifySubscriptionDiscountPercentageValue|null
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
                $instance->value = ShopifySubscriptionDiscountValueHydrator::fromArray($data['value']);
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
                $data['value'] = ShopifySubscriptionDiscountValueHydrator::toArray($this->value);
            }
            return $data;
        }
}
