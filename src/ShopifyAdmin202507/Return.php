<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReturnDecline;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ExchangeLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\RefundConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReturnLineItemTypeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReturnShippingFee;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReverseFulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SuggestedReturnFinancialOutcome;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SuggestedReturnRefund;

class Return
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
    protected $status;
    protected $suggestedFinancialOutcome;
    protected $suggestedRefund;
    protected $totalQuantity;

    
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
     * @return ReturnDecline
     */
    public function getDecline()
    {
        return $this->decline;
    }

    
    /**
     * @return ExchangeLineItemConnection
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
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return RefundConnection
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
     * @return ReturnLineItemTypeConnection
     */
    public function getReturnLineItems()
    {
        return $this->returnLineItems;
    }

    
    /**
     * @return ReturnShippingFee[]
     */
    public function getReturnShippingFees()
    {
        return $this->returnShippingFees;
    }

    
    /**
     * @return ReverseFulfillmentOrderConnection
     */
    public function getReverseFulfillmentOrders()
    {
        return $this->reverseFulfillmentOrders;
    }

    
    /**
     * @return ReturnStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return SuggestedReturnFinancialOutcome
     */
    public function getSuggestedFinancialOutcome()
    {
        return $this->suggestedFinancialOutcome;
    }

    
    /**
     * @return SuggestedReturnRefund
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
                $instance->decline = ReturnDecline::fromArray($data['decline']);
            }
            if (isset($data['exchangeLineItems']) && $data['exchangeLineItems'] !== null) {
                $instance->exchangeLineItems = ExchangeLineItemConnection::fromArray($data['exchangeLineItems']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = Order::fromArray($data['order']);
            }
            if (isset($data['refunds']) && $data['refunds'] !== null) {
                $instance->refunds = RefundConnection::fromArray($data['refunds']);
            }
            if (isset($data['requestApprovedAt']) && $data['requestApprovedAt'] !== null) {
                $instance->requestApprovedAt = new Carbon($data['requestApprovedAt']);
            }
            if (isset($data['returnLineItems']) && $data['returnLineItems'] !== null) {
                $instance->returnLineItems = ReturnLineItemTypeConnection::fromArray($data['returnLineItems']);
            }
            if (isset($data['returnShippingFees']) && $data['returnShippingFees'] !== null) {
                $instance->returnShippingFees = array_map(function($item) { return ReturnShippingFee::fromArray($item); }, $data['returnShippingFees']);
            }
            if (isset($data['reverseFulfillmentOrders']) && $data['reverseFulfillmentOrders'] !== null) {
                $instance->reverseFulfillmentOrders = ReverseFulfillmentOrderConnection::fromArray($data['reverseFulfillmentOrders']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['suggestedFinancialOutcome']) && $data['suggestedFinancialOutcome'] !== null) {
                $instance->suggestedFinancialOutcome = SuggestedReturnFinancialOutcome::fromArray($data['suggestedFinancialOutcome']);
            }
            if (isset($data['suggestedRefund']) && $data['suggestedRefund'] !== null) {
                $instance->suggestedRefund = SuggestedReturnRefund::fromArray($data['suggestedRefund']);
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
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
            return $data;
        }
}
