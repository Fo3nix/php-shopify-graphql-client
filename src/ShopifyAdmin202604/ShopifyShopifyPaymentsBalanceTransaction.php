<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopifyPaymentsAdjustmentOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopifyPaymentsAssociatedOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopifyPaymentsBalanceTransactionAssociatedPayout;
use Carbon\Carbon;

/**
 * A transaction that contributes to a Shopify Payments account balance. Records money movement from charges, refunds, payouts, adjustments, or other payment activities. Includes the gross amount, processing fees, and resulting net amount that affects the account balance. Links to the source of the transaction and associated [`ShopifyPaymentsPayout`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout) details, with optional references to [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) objects or adjustment reasons when applicable.
 */
class ShopifyShopifyPaymentsBalanceTransaction implements ShopifyNode
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
     * The reason for the adjustment that's associated with the transaction.
     *             If the source_type isn't an adjustment, the value will be null.
     *
     * @return string
     */
    public function getAdjustmentReason(): ?string
    {
        return $this->adjustmentReason;
    }

    
    /**
     * The adjustment orders associated to the transaction.
     *
     * @return ShopifyShopifyPaymentsAdjustmentOrder[]
     */
    public function getAdjustmentsOrders(): ?array
    {
        return $this->adjustmentsOrders;
    }

    
    /**
     * The amount contributing to the balance transaction.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * The associated order for the balance transaction.
     *
     * @return ShopifyShopifyPaymentsAssociatedOrder
     */
    public function getAssociatedOrder(): ?ShopifyShopifyPaymentsAssociatedOrder
    {
        return $this->associatedOrder;
    }

    
    /**
     * Payout associated with the transaction.
     *
     * @return ShopifyShopifyPaymentsBalanceTransactionAssociatedPayout
     */
    public function getAssociatedPayout(): ?ShopifyShopifyPaymentsBalanceTransactionAssociatedPayout
    {
        return $this->associatedPayout;
    }

    
    /**
     * The fee amount contributing to the balance transaction.
     *
     * @return ShopifyMoneyV2
     */
    public function getFee(): ?ShopifyMoneyV2
    {
        return $this->fee;
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
     * The net amount contributing to the merchant's balance.
     *
     * @return ShopifyMoneyV2
     */
    public function getNet(): ?ShopifyMoneyV2
    {
        return $this->net;
    }

    
    /**
     * The ID of the resource leading to the transaction.
     *
     * @return string
     */
    public function getSourceId(): mixed
    {
        return $this->sourceId;
    }

    
    /**
     * The id of the
     *             [Order Transaction](https://shopify.dev/docs/admin-api/rest/reference/orders/transaction)
     *
     *             that resulted in this balance transaction.
     *
     * @return string
     */
    public function getSourceOrderTransactionId(): mixed
    {
        return $this->sourceOrderTransactionId;
    }

    
    /**
     * The source type of the balance transaction.
     *
     * @return string A ShopifyShopifyPaymentsSourceTypeEnumObject value
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    
    /**
     * Whether the transaction was created in test mode.
     *
     * @return bool
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    
    /**
     * The date and time when the balance transaction was processed.
     *
     * @return Carbon
     */
    public function getTransactionDate(): ?Carbon
    {
        return $this->transactionDate;
    }

    
    /**
     * The type of transaction.
     *
     * @return string A ShopifyShopifyPaymentsTransactionTypeEnumObject value
     */
    public function getType(): ?string
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
                $instance->adjustmentsOrders = array_map(function($item) { return ShopifyShopifyPaymentsAdjustmentOrder::fromArray($item); }, $data['adjustmentsOrders']);
            }
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
            }
            if (isset($data['associatedOrder']) && $data['associatedOrder'] !== null) {
                $instance->associatedOrder = ShopifyShopifyPaymentsAssociatedOrder::fromArray($data['associatedOrder']);
            }
            if (isset($data['associatedPayout']) && $data['associatedPayout'] !== null) {
                $instance->associatedPayout = ShopifyShopifyPaymentsBalanceTransactionAssociatedPayout::fromArray($data['associatedPayout']);
            }
            if (isset($data['fee']) && $data['fee'] !== null) {
                $instance->fee = ShopifyMoneyV2::fromArray($data['fee']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['net']) && $data['net'] !== null) {
                $instance->net = ShopifyMoneyV2::fromArray($data['net']);
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
