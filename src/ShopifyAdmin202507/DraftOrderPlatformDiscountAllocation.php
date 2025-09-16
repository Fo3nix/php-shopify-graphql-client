<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderPlatformDiscountAllocationTarget;

class DraftOrderPlatformDiscountAllocation
{
    protected $id;
    protected $quantity;
    protected $reductionAmount;
    protected $reductionAmountSet;
    protected $target;

    
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
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return MoneyV2
     */
    public function getReductionAmount()
    {
        return $this->reductionAmount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getReductionAmountSet()
    {
        return $this->reductionAmountSet;
    }

    
    /**
     * @return DraftOrderPlatformDiscountAllocationTarget
     */
    public function getTarget()
    {
        return $this->target;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['reductionAmount']) && $data['reductionAmount'] !== null) {
                $instance->reductionAmount = MoneyV2::fromArray($data['reductionAmount']);
            }
            if (isset($data['reductionAmountSet']) && $data['reductionAmountSet'] !== null) {
                $instance->reductionAmountSet = MoneyBag::fromArray($data['reductionAmountSet']);
            }
            if (isset($data['target']) && $data['target'] !== null) {
                $instance->target = DraftOrderPlatformDiscountAllocationTarget::fromArray($data['target']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->reductionAmount !== null) {
                $data['reductionAmount'] = $this->reductionAmount->asArray();
            }
            if ($this->reductionAmountSet !== null) {
                $data['reductionAmountSet'] = $this->reductionAmountSet->asArray();
            }
            if ($this->target !== null) {
                $data['target'] = $this->target->asArray();
            }
            return $data;
        }
}
