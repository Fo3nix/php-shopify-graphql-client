<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyRefundDuty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrderAdjustmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyRefundLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyRefundShippingLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyReturn;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrderTransactionConnection;

class ShopifyRefund
{
    protected $createdAt;
    protected $duties;
    protected $id;
    protected $legacyResourceId;
    protected $note;
    protected $order;
    protected $orderAdjustments;
    protected $processedAt;
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
     * @return ShopifyRefundDuty[]
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
     * @return ShopifyOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return ShopifyOrderAdjustmentConnection
     */
    public function getOrderAdjustments()
    {
        return $this->orderAdjustments;
    }

    
    /**
     * @return Carbon
     */
    public function getProcessedAt()
    {
        return $this->processedAt;
    }

    
    /**
     * @return ShopifyRefundLineItemConnection
     */
    public function getRefundLineItems()
    {
        return $this->refundLineItems;
    }

    
    /**
     * @return ShopifyRefundShippingLineConnection
     */
    public function getRefundShippingLines()
    {
        return $this->refundShippingLines;
    }

    
    /**
     * @return ShopifyReturn
     */
    public function getReturn()
    {
        return $this->return;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getStaffMember()
    {
        return $this->staffMember;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalRefunded()
    {
        return $this->totalRefunded;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalRefundedSet()
    {
        return $this->totalRefundedSet;
    }

    
    /**
     * @return ShopifyOrderTransactionConnection
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
                $instance->duties = array_map(function($item) { return ShopifyRefundDuty::fromArray($item); }, $data['duties']);
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
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['orderAdjustments']) && $data['orderAdjustments'] !== null) {
                $instance->orderAdjustments = ShopifyOrderAdjustmentConnection::fromArray($data['orderAdjustments']);
            }
            if (isset($data['processedAt']) && $data['processedAt'] !== null) {
                $instance->processedAt = new Carbon($data['processedAt']);
            }
            if (isset($data['refundLineItems']) && $data['refundLineItems'] !== null) {
                $instance->refundLineItems = ShopifyRefundLineItemConnection::fromArray($data['refundLineItems']);
            }
            if (isset($data['refundShippingLines']) && $data['refundShippingLines'] !== null) {
                $instance->refundShippingLines = ShopifyRefundShippingLineConnection::fromArray($data['refundShippingLines']);
            }
            if (isset($data['return']) && $data['return'] !== null) {
                $instance->return = ShopifyReturn::fromArray($data['return']);
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['totalRefunded']) && $data['totalRefunded'] !== null) {
                $instance->totalRefunded = ShopifyMoneyV2::fromArray($data['totalRefunded']);
            }
            if (isset($data['totalRefundedSet']) && $data['totalRefundedSet'] !== null) {
                $instance->totalRefundedSet = ShopifyMoneyBag::fromArray($data['totalRefundedSet']);
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = ShopifyOrderTransactionConnection::fromArray($data['transactions']);
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
            if ($this->processedAt !== null) {
                $data['processedAt'] = $this->processedAt->toIso8601String();
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
