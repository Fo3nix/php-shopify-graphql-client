<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReturnDecline;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyExchangeLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyRefundConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReturnLineItemTypeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReturnShippingFee;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReverseFulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySuggestedReturnFinancialOutcome;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySuggestedReturnRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderTransactionConnection;

/**
 * The `Return` object represents the intent of a buyer to ship one or more items from an order back to a merchant
 * or a third-party fulfillment location. A return is associated with an [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order)
 * and can include multiple return [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem).
 * Each return has a [status](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps#return-statuses),
 * which indicates the state of the return.
 *
 * Use the `Return` object to capture the financial, logistical,
 * and business intent of a return. For example, you can identify eligible items for a return and issue customers
 * a refund for returned items on behalf of the merchant.
 *
 * Learn more about providing a
 * [return management workflow](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management)
 * for merchants. You can also manage [exchanges](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-exchanges),
 * [reverse fulfillment orders](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-reverse-fulfillment-orders),
 * and [reverse deliveries](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-reverse-deliveries)
 * on behalf of merchants.
 */
class ShopifyReturn implements ShopifyNode
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
     * The date and time when the return was closed.
     *
     * @return Carbon
     */
    public function getClosedAt(): ?Carbon
    {
        return $this->closedAt;
    }

    
    /**
     * The date and time when the return was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Additional information about the declined return.
     *
     * @return ShopifyReturnDecline
     */
    public function getDecline(): ?ShopifyReturnDecline
    {
        return $this->decline;
    }

    
    /**
     * The exchange line items attached to the return.
     *
     * @return ShopifyExchangeLineItemConnection
     */
    public function getExchangeLineItems(): ?ShopifyExchangeLineItemConnection
    {
        return $this->exchangeLineItems;
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
     * The name of the return.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The order that the return belongs to.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The list of refunds associated with the return.
     *
     * @return ShopifyRefundConnection
     */
    public function getRefunds(): ?ShopifyRefundConnection
    {
        return $this->refunds;
    }

    
    /**
     * The date and time when the return was approved.
     *
     * @return Carbon
     */
    public function getRequestApprovedAt(): ?Carbon
    {
        return $this->requestApprovedAt;
    }

    
    /**
     * The return line items attached to the return.
     *
     * @return ShopifyReturnLineItemTypeConnection
     */
    public function getReturnLineItems(): ?ShopifyReturnLineItemTypeConnection
    {
        return $this->returnLineItems;
    }

    
    /**
     * The return shipping fees for the return.
     *
     * @return ShopifyReturnShippingFee[]
     */
    public function getReturnShippingFees(): ?array
    {
        return $this->returnShippingFees;
    }

    
    /**
     * The list of reverse fulfillment orders for the return.
     *
     * @return ShopifyReverseFulfillmentOrderConnection
     */
    public function getReverseFulfillmentOrders(): ?ShopifyReverseFulfillmentOrderConnection
    {
        return $this->reverseFulfillmentOrders;
    }

    
    /**
     * The staff member that created the return.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

    
    /**
     * The status of the return.
     *
     * @return string A ShopifyReturnStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * A suggested financial outcome for the return.
     *
     * @return ShopifySuggestedReturnFinancialOutcome
     */
    public function getSuggestedFinancialOutcome(): ?ShopifySuggestedReturnFinancialOutcome
    {
        return $this->suggestedFinancialOutcome;
    }

    
    /**
     * A suggested refund for the return.
     *
     * @return ShopifySuggestedReturnRefund
     */
    public function getSuggestedRefund(): ?ShopifySuggestedReturnRefund
    {
        return $this->suggestedRefund;
    }

    
    /**
     * The sum of all return line item quantities for the return.
     *
     * @return int
     */
    public function getTotalQuantity(): ?int
    {
        return $this->totalQuantity;
    }

    
    /**
     * The order transactions created from the return.
     *
     * @return ShopifyOrderTransactionConnection
     */
    public function getTransactions(): ?ShopifyOrderTransactionConnection
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
