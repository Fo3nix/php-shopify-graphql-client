<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnDecline;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyExchangeLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRefundConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnLineItemTypeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnShippingFee;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReverseFulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySuggestedReturnFinancialOutcome;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySuggestedReturnRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderTransactionConnection;

class ShopifyReturn
{
    protected $closedAt;
    protected $createdAt;
    protected $decline;
    protected $exchangeLineItems;
    protected $id;
    protected $name;
    protected $order;
    protected $refunds;
    protected $requestApprovedAt;
    protected $returnLineItems;
    protected $returnShippingFees;
    protected $reverseFulfillmentOrders;
    protected $staffMember;
    protected $status;
    protected $suggestedFinancialOutcome;
    protected $suggestedRefund;
    protected $totalQuantity;
    protected $transactions;

    
    /**
     * @return Carbon
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyReturnDecline
     */
    public function getDecline()
    {
        return $this->decline;
    }

    
    /**
     * @return ShopifyExchangeLineItemConnection
     */
    public function getExchangeLineItems()
    {
        return $this->exchangeLineItems;
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
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return ShopifyRefundConnection
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    
    /**
     * @return Carbon
     */
    public function getRequestApprovedAt()
    {
        return $this->requestApprovedAt;
    }

    
    /**
     * @return ShopifyReturnLineItemTypeConnection
     */
    public function getReturnLineItems()
    {
        return $this->returnLineItems;
    }

    
    /**
     * @return ShopifyReturnShippingFee[]
     */
    public function getReturnShippingFees()
    {
        return $this->returnShippingFees;
    }

    
    /**
     * @return ShopifyReverseFulfillmentOrderConnection
     */
    public function getReverseFulfillmentOrders()
    {
        return $this->reverseFulfillmentOrders;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getStaffMember()
    {
        return $this->staffMember;
    }

    
    /**
     * @return ShopifyReturnStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return ShopifySuggestedReturnFinancialOutcome
     */
    public function getSuggestedFinancialOutcome()
    {
        return $this->suggestedFinancialOutcome;
    }

    
    /**
     * @return ShopifySuggestedReturnRefund
     */
    public function getSuggestedRefund()
    {
        return $this->suggestedRefund;
    }

    
    /**
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    
    /**
     * @return ShopifyOrderTransactionConnection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['closedAt']) && $data['closedAt'] !== null) {
                $instance->closedAt = new Carbon($data['closedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['decline']) && $data['decline'] !== null) {
                $instance->decline = ShopifyReturnDecline::fromArray($data['decline']);
            }
            if (isset($data['exchangeLineItems']) && $data['exchangeLineItems'] !== null) {
                $instance->exchangeLineItems = ShopifyExchangeLineItemConnection::fromArray($data['exchangeLineItems']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['refunds']) && $data['refunds'] !== null) {
                $instance->refunds = ShopifyRefundConnection::fromArray($data['refunds']);
            }
            if (isset($data['requestApprovedAt']) && $data['requestApprovedAt'] !== null) {
                $instance->requestApprovedAt = new Carbon($data['requestApprovedAt']);
            }
            if (isset($data['returnLineItems']) && $data['returnLineItems'] !== null) {
                $instance->returnLineItems = ShopifyReturnLineItemTypeConnection::fromArray($data['returnLineItems']);
            }
            if (isset($data['returnShippingFees']) && $data['returnShippingFees'] !== null) {
                $instance->returnShippingFees = array_map(function($item) { return ShopifyReturnShippingFee::fromArray($item); }, $data['returnShippingFees']);
            }
            if (isset($data['reverseFulfillmentOrders']) && $data['reverseFulfillmentOrders'] !== null) {
                $instance->reverseFulfillmentOrders = ShopifyReverseFulfillmentOrderConnection::fromArray($data['reverseFulfillmentOrders']);
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['suggestedFinancialOutcome']) && $data['suggestedFinancialOutcome'] !== null) {
                $instance->suggestedFinancialOutcome = ShopifySuggestedReturnFinancialOutcome::fromArray($data['suggestedFinancialOutcome']);
            }
            if (isset($data['suggestedRefund']) && $data['suggestedRefund'] !== null) {
                $instance->suggestedRefund = ShopifySuggestedReturnRefund::fromArray($data['suggestedRefund']);
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = ShopifyOrderTransactionConnection::fromArray($data['transactions']);
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
            if ($this->closedAt !== null) {
                $data['closedAt'] = $this->closedAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->decline !== null) {
                $data['decline'] = $this->decline->asArray();
            }
            if ($this->exchangeLineItems !== null) {
                $data['exchangeLineItems'] = $this->exchangeLineItems->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->refunds !== null) {
                $data['refunds'] = $this->refunds->asArray();
            }
            if ($this->requestApprovedAt !== null) {
                $data['requestApprovedAt'] = $this->requestApprovedAt->toIso8601String();
            }
            if ($this->returnLineItems !== null) {
                $data['returnLineItems'] = $this->returnLineItems->asArray();
            }
            if ($this->returnShippingFees !== null) {
                $data['returnShippingFees'] = array_map(function($item) { return $item->asArray(); }, $this->returnShippingFees);
            }
            if ($this->reverseFulfillmentOrders !== null) {
                $data['reverseFulfillmentOrders'] = $this->reverseFulfillmentOrders->asArray();
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->suggestedFinancialOutcome !== null) {
                $data['suggestedFinancialOutcome'] = $this->suggestedFinancialOutcome->asArray();
            }
            if ($this->suggestedRefund !== null) {
                $data['suggestedRefund'] = $this->suggestedRefund->asArray();
            }
            if ($this->totalQuantity !== null) {
                $data['totalQuantity'] = $this->totalQuantity;
            }
            if ($this->transactions !== null) {
                $data['transactions'] = $this->transactions->asArray();
            }
            return $data;
        }
}
