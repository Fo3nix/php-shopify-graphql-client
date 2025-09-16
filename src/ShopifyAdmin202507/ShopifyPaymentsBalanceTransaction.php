<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsAdjustmentOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsAssociatedOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsBalanceTransactionAssociatedPayout;
use Carbon\Carbon;

class ShopifyPaymentsBalanceTransaction
{
    protected $adjustmentReason;
    protected $adjustmentsOrders;
    protected $amount;
    protected $associatedOrder;
    protected $associatedPayout;
    protected $fee;
    protected $id;
    protected $net;
    protected $sourceId;
    protected $sourceOrderTransactionId;
    protected $sourceType;
    protected $test;
    protected $transactionDate;
    protected $type;

    
    /**
     * @return string
     */
    public function getAdjustmentReason()
    {
        return $this->adjustmentReason;
    }

    
    /**
     * @return ShopifyPaymentsAdjustmentOrder[]
     */
    public function getAdjustmentsOrders()
    {
        return $this->adjustmentsOrders;
    }

    
    /**
     * @return MoneyV2
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return ShopifyPaymentsAssociatedOrder
     */
    public function getAssociatedOrder()
    {
        return $this->associatedOrder;
    }

    
    /**
     * @return ShopifyPaymentsBalanceTransactionAssociatedPayout
     */
    public function getAssociatedPayout()
    {
        return $this->associatedPayout;
    }

    
    /**
     * @return MoneyV2
     */
    public function getFee()
    {
        return $this->fee;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return MoneyV2
     */
    public function getNet()
    {
        return $this->net;
    }

    
    /**
     * @return string
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    
    /**
     * @return string
     */
    public function getSourceOrderTransactionId()
    {
        return $this->sourceOrderTransactionId;
    }

    
    /**
     * @return ShopifyPaymentsSourceTypeEnumObject
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    
    /**
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }

    
    /**
     * @return Carbon
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    
    /**
     * @return ShopifyPaymentsTransactionTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adjustmentReason']) && $data['adjustmentReason'] !== null) {
                $instance->adjustmentReason = $data['adjustmentReason'];
            }
            if (isset($data['adjustmentsOrders']) && $data['adjustmentsOrders'] !== null) {
                $instance->adjustmentsOrders = array_map(function($item) { return ShopifyPaymentsAdjustmentOrder::fromArray($item); }, $data['adjustmentsOrders']);
            }
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = MoneyV2::fromArray($data['amount']);
            }
            if (isset($data['associatedOrder']) && $data['associatedOrder'] !== null) {
                $instance->associatedOrder = ShopifyPaymentsAssociatedOrder::fromArray($data['associatedOrder']);
            }
            if (isset($data['associatedPayout']) && $data['associatedPayout'] !== null) {
                $instance->associatedPayout = ShopifyPaymentsBalanceTransactionAssociatedPayout::fromArray($data['associatedPayout']);
            }
            if (isset($data['fee']) && $data['fee'] !== null) {
                $instance->fee = MoneyV2::fromArray($data['fee']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['net']) && $data['net'] !== null) {
                $instance->net = MoneyV2::fromArray($data['net']);
            }
            if (isset($data['sourceId']) && $data['sourceId'] !== null) {
                $instance->sourceId = $data['sourceId'];
            }
            if (isset($data['sourceOrderTransactionId']) && $data['sourceOrderTransactionId'] !== null) {
                $instance->sourceOrderTransactionId = $data['sourceOrderTransactionId'];
            }
            if (isset($data['sourceType']) && $data['sourceType'] !== null) {
                $instance->sourceType = $data['sourceType'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
            }
            if (isset($data['transactionDate']) && $data['transactionDate'] !== null) {
                $instance->transactionDate = new Carbon($data['transactionDate']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->adjustmentReason !== null) {
                $data['adjustmentReason'] = $this->adjustmentReason;
            }
            if ($this->adjustmentsOrders !== null) {
                $data['adjustmentsOrders'] = array_map(function($item) { return $item->asArray(); }, $this->adjustmentsOrders);
            }
            if ($this->amount !== null) {
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->associatedOrder !== null) {
                $data['associatedOrder'] = $this->associatedOrder->asArray();
            }
            if ($this->associatedPayout !== null) {
                $data['associatedPayout'] = $this->associatedPayout->asArray();
            }
            if ($this->fee !== null) {
                $data['fee'] = $this->fee->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->net !== null) {
                $data['net'] = $this->net->asArray();
            }
            if ($this->sourceId !== null) {
                $data['sourceId'] = $this->sourceId;
            }
            if ($this->sourceOrderTransactionId !== null) {
                $data['sourceOrderTransactionId'] = $this->sourceOrderTransactionId;
            }
            if ($this->sourceType !== null) {
                $data['sourceType'] = $this->sourceType;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            if ($this->transactionDate !== null) {
                $data['transactionDate'] = $this->transactionDate->toIso8601String();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
