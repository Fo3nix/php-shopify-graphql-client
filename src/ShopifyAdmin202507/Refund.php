<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\RefundDuty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderAdjustmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\RefundLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\RefundShippingLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Return;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderTransactionConnection;

class Refund
{
    protected $createdAt;
    protected $duties;
    protected $id;
    protected $legacyResourceId;
    protected $note;
    protected $order;
    protected $orderAdjustments;
    protected $refundLineItems;
    protected $refundShippingLines;
    protected $return;
    protected $staffMember;
    protected $totalRefunded;
    protected $totalRefundedSet;
    protected $transactions;
    protected $updatedAt;

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return RefundDuty[]
     */
    public function getDuties()
    {
        return $this->duties;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return OrderAdjustmentConnection
     */
    public function getOrderAdjustments()
    {
        return $this->orderAdjustments;
    }

    
    /**
     * @return RefundLineItemConnection
     */
    public function getRefundLineItems()
    {
        return $this->refundLineItems;
    }

    
    /**
     * @return RefundShippingLineConnection
     */
    public function getRefundShippingLines()
    {
        return $this->refundShippingLines;
    }

    
    /**
     * @return Return
     */
    public function getReturn()
    {
        return $this->return;
    }

    
    /**
     * @return StaffMember
     */
    public function getStaffMember()
    {
        return $this->staffMember;
    }

    
    /**
     * @return MoneyV2
     */
    public function getTotalRefunded()
    {
        return $this->totalRefunded;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalRefundedSet()
    {
        return $this->totalRefundedSet;
    }

    
    /**
     * @return OrderTransactionConnection
     */
    public function getTransactions()
    {
        return $this->transactions;
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['duties']) && $data['duties'] !== null) {
                $instance->duties = array_map(function($item) { return RefundDuty::fromArray($item); }, $data['duties']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = Order::fromArray($data['order']);
            }
            if (isset($data['orderAdjustments']) && $data['orderAdjustments'] !== null) {
                $instance->orderAdjustments = OrderAdjustmentConnection::fromArray($data['orderAdjustments']);
            }
            if (isset($data['refundLineItems']) && $data['refundLineItems'] !== null) {
                $instance->refundLineItems = RefundLineItemConnection::fromArray($data['refundLineItems']);
            }
            if (isset($data['refundShippingLines']) && $data['refundShippingLines'] !== null) {
                $instance->refundShippingLines = RefundShippingLineConnection::fromArray($data['refundShippingLines']);
            }
            if (isset($data['return']) && $data['return'] !== null) {
                $instance->return = Return::fromArray($data['return']);
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = StaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['totalRefunded']) && $data['totalRefunded'] !== null) {
                $instance->totalRefunded = MoneyV2::fromArray($data['totalRefunded']);
            }
            if (isset($data['totalRefundedSet']) && $data['totalRefundedSet'] !== null) {
                $instance->totalRefundedSet = MoneyBag::fromArray($data['totalRefundedSet']);
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = OrderTransactionConnection::fromArray($data['transactions']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->duties !== null) {
                $data['duties'] = array_map(function($item) { return $item->asArray(); }, $this->duties);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->orderAdjustments !== null) {
                $data['orderAdjustments'] = $this->orderAdjustments->asArray();
            }
            if ($this->refundLineItems !== null) {
                $data['refundLineItems'] = $this->refundLineItems->asArray();
            }
            if ($this->refundShippingLines !== null) {
                $data['refundShippingLines'] = $this->refundShippingLines->asArray();
            }
            if ($this->return !== null) {
                $data['return'] = $this->return->asArray();
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->totalRefunded !== null) {
                $data['totalRefunded'] = $this->totalRefunded->asArray();
            }
            if ($this->totalRefundedSet !== null) {
                $data['totalRefundedSet'] = $this->totalRefundedSet->asArray();
            }
            if ($this->transactions !== null) {
                $data['transactions'] = $this->transactions->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
