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

/**
 * The `Refund` object represents a financial record of money returned to a customer from an order.
 * It provides a comprehensive view of all refunded amounts, transactions, and restocking instructions
 * associated with returning products or correcting order issues.
 *
 * The `Refund` object provides information to:
 *
 * - Process customer returns and issue payments back to customers
 * - Handle partial or full refunds for line items with optional inventory restocking
 * - Refund shipping costs, duties, and additional fees
 * - Issue store credit refunds as an alternative to original payment method returns
 * - Track and reconcile all financial transactions related to refunds
 *
 * Each `Refund` object maintains detailed records of what was refunded, how much was refunded,
 * which payment transactions were involved, and any inventory restocking that occurred. The refund
 * can include multiple components such as product line items, shipping charges, taxes, duties, and
 * additional fees, all calculated with proper currency handling for international orders.
 *
 * Refunds are always associated with an [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order)
 * and can optionally be linked to a [return](https://shopify.dev/docs/api/admin-graphql/latest/objects/Return)
 * if the refund was initiated through the returns process. The refund tracks both the presentment currency
 * (what the customer sees) and the shop currency for accurate financial reporting.
 *
 * > Note:
 * > The existence of a `Refund` object doesn't guarantee that the money has been returned to the customer.
 * > The actual financial processing happens through associated
 * > [`OrderTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderTransaction)
 * > objects, which can be in various states, such as pending, processing, success, or failure.
 * > To determine if money has actually been refunded, check the
 * > [status](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderTransaction#field-OrderTransaction.fields.status)
 * > of the associated transactions.
 *
 * Learn more about
 * [managing returns](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management),
 * [refunding duties](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/view-and-refund-duties), and
 * [processing refunds](https://shopify.dev/docs/api/admin-graphql/latest/mutations/refundCreate).
 */
class ShopifyRefund implements ShopifyLegacyInteroperability, ShopifyNode
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
     * The date and time when the refund was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * A list of the refunded duties as part of this refund.
     *
     * @return ShopifyRefundDuty[]
     */
    public function getDuties(): ?array
    {
        return $this->duties;
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
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The optional note associated with the refund.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The order associated with the refund.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The order adjustments that are attached with the refund.
     *
     * @return ShopifyOrderAdjustmentConnection
     */
    public function getOrderAdjustments(): ?ShopifyOrderAdjustmentConnection
    {
        return $this->orderAdjustments;
    }

    
    /**
     * The date and time when the refund was processed.
     *
     * @return Carbon
     */
    public function getProcessedAt(): ?Carbon
    {
        return $this->processedAt;
    }

    
    /**
     * The `RefundLineItem` resources attached to the refund.
     *
     * @return ShopifyRefundLineItemConnection
     */
    public function getRefundLineItems(): ?ShopifyRefundLineItemConnection
    {
        return $this->refundLineItems;
    }

    
    /**
     * The `RefundShippingLine` resources attached to the refund.
     *
     * @return ShopifyRefundShippingLineConnection
     */
    public function getRefundShippingLines(): ?ShopifyRefundShippingLineConnection
    {
        return $this->refundShippingLines;
    }

    
    /**
     * The return associated with the refund.
     *
     * @return ShopifyReturn
     */
    public function getReturn(): ?ShopifyReturn
    {
        return $this->return;
    }

    
    /**
     * The staff member who created the refund.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

    
    /**
     * The total amount across all transactions for the refund.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalRefunded(): ?ShopifyMoneyV2
    {
        return $this->totalRefunded;
    }

    
    /**
     * The total amount across all transactions for the refund, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalRefundedSet(): ?ShopifyMoneyBag
    {
        return $this->totalRefundedSet;
    }

    
    /**
     * The transactions associated with the refund.
     *
     * @return ShopifyOrderTransactionConnection
     */
    public function getTransactions(): ?ShopifyOrderTransactionConnection
    {
        return $this->transactions;
    }

    
    /**
     * The date and time when the refund was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
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
