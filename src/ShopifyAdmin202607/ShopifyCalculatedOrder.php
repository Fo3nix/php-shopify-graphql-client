<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCalculatedDiscountApplicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCalculatedLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCalculatedShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderStagedChangeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxLine;

/**
 * An order during an active edit session with all proposed changes applied but not yet committed. When you begin editing an order with the [`orderEditBegin`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditBegin) mutation, the system creates a [`CalculatedOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CalculatedOrder) that shows how the [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) will look after your changes. The calculated order tracks the original order state and all staged modifications (added or removed [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects, quantity adjustments, discount changes, and [`ShippingLine`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShippingLine) updates). Use the calculated order to preview the financial impact of edits before committing them with the [`orderEditCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditCommit) mutation.
 *
 * Learn more about [editing existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders).
 */
class ShopifyCalculatedOrder implements ShopifyNode
{
    protected $addedDiscountApplications;
    protected $addedLineItems;
    protected $cartDiscountAmountSet;
    protected $committed;
    protected $id;
    protected $lineItems;
    protected $notificationPreviewHtml;
    protected $notificationPreviewTitle;
    protected $originalOrder;
    protected $shippingLines;
    protected $stagedChanges;
    protected $subtotalLineItemsQuantity;
    protected $subtotalPriceSet;
    protected $taxLines;
    protected $totalOutstandingSet;
    protected $totalPriceSet;

    
    /**
     * Returns only the new discount applications being added to the order in the current edit.
     *
     * @return ShopifyCalculatedDiscountApplicationConnection
     */
    public function getAddedDiscountApplications(): ?ShopifyCalculatedDiscountApplicationConnection
    {
        return $this->addedDiscountApplications;
    }

    
    /**
     * Returns only the new line items being added to the order during the current edit.
     *
     * @return ShopifyCalculatedLineItemConnection
     */
    public function getAddedLineItems(): ?ShopifyCalculatedLineItemConnection
    {
        return $this->addedLineItems;
    }

    
    /**
     * Amount of the order-level discount (doesn't contain any line item discounts) in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getCartDiscountAmountSet(): ?ShopifyMoneyBag
    {
        return $this->cartDiscountAmountSet;
    }

    
    /**
     * Whether the changes have been applied and saved to the order.
     *
     * @return bool
     */
    public function getCommitted(): ?bool
    {
        return $this->committed;
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
     * Returns all items on the order that existed before starting the edit.
     * Will include any changes that have been made.
     * Will not include line items added during the current edit.
     *
     * @return ShopifyCalculatedLineItemConnection
     */
    public function getLineItems(): ?ShopifyCalculatedLineItemConnection
    {
        return $this->lineItems;
    }

    
    /**
     * The HTML of the customer notification for the order edit.
     *
     * @return string
     */
    public function getNotificationPreviewHtml(): mixed
    {
        return $this->notificationPreviewHtml;
    }

    
    /**
     * The customer notification title.
     *
     * @return string
     */
    public function getNotificationPreviewTitle(): ?string
    {
        return $this->notificationPreviewTitle;
    }

    
    /**
     * The order without any changes applied.
     *
     * @return ShopifyOrder
     */
    public function getOriginalOrder(): ?ShopifyOrder
    {
        return $this->originalOrder;
    }

    
    /**
     * Returns the shipping lines on the order that existed before starting the edit.
     * Will include any changes that have been made as well as shipping lines added during the current edit.
     * Returns only the first 250 shipping lines.
     *
     * @return ShopifyCalculatedShippingLine[]
     */
    public function getShippingLines(): ?array
    {
        return $this->shippingLines;
    }

    
    /**
     * List of changes made to the order during the current edit.
     *
     * @return ShopifyOrderStagedChangeConnection
     */
    public function getStagedChanges(): ?ShopifyOrderStagedChangeConnection
    {
        return $this->stagedChanges;
    }

    
    /**
     * The sum of the quantities for the line items that contribute to the order's subtotal.
     *
     * @return int
     */
    public function getSubtotalLineItemsQuantity(): ?int
    {
        return $this->subtotalLineItemsQuantity;
    }

    
    /**
     * The subtotal of the line items, in shop and presentment currencies, after all the discounts are applied.  The subtotal doesn't include shipping.  The subtotal includes taxes for taxes-included orders and excludes taxes for taxes-excluded orders.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * Taxes charged for the line item.
     *
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }

    
    /**
     * Total price of the order less the total amount received from the customer in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalOutstandingSet(): ?ShopifyMoneyBag
    {
        return $this->totalOutstandingSet;
    }

    
    /**
     * Total amount of the order (includes taxes and discounts) in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalPriceSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['addedDiscountApplications']) && $data['addedDiscountApplications'] !== null) {
                $instance->addedDiscountApplications = ShopifyCalculatedDiscountApplicationConnection::fromArray($data['addedDiscountApplications']);
            }
            if (isset($data['addedLineItems']) && $data['addedLineItems'] !== null) {
                $instance->addedLineItems = ShopifyCalculatedLineItemConnection::fromArray($data['addedLineItems']);
            }
            if (isset($data['cartDiscountAmountSet']) && $data['cartDiscountAmountSet'] !== null) {
                $instance->cartDiscountAmountSet = ShopifyMoneyBag::fromArray($data['cartDiscountAmountSet']);
            }
            if (isset($data['committed']) && $data['committed'] !== null) {
                $instance->committed = $data['committed'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyCalculatedLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['notificationPreviewHtml']) && $data['notificationPreviewHtml'] !== null) {
                $instance->notificationPreviewHtml = $data['notificationPreviewHtml'];
            }
            if (isset($data['notificationPreviewTitle']) && $data['notificationPreviewTitle'] !== null) {
                $instance->notificationPreviewTitle = $data['notificationPreviewTitle'];
            }
            if (isset($data['originalOrder']) && $data['originalOrder'] !== null) {
                $instance->originalOrder = ShopifyOrder::fromArray($data['originalOrder']);
            }
            if (isset($data['shippingLines']) && $data['shippingLines'] !== null) {
                $instance->shippingLines = array_map(function($item) { return ShopifyCalculatedShippingLine::fromArray($item); }, $data['shippingLines']);
            }
            if (isset($data['stagedChanges']) && $data['stagedChanges'] !== null) {
                $instance->stagedChanges = ShopifyOrderStagedChangeConnection::fromArray($data['stagedChanges']);
            }
            if (isset($data['subtotalLineItemsQuantity']) && $data['subtotalLineItemsQuantity'] !== null) {
                $instance->subtotalLineItemsQuantity = $data['subtotalLineItemsQuantity'];
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = ShopifyMoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['totalOutstandingSet']) && $data['totalOutstandingSet'] !== null) {
                $instance->totalOutstandingSet = ShopifyMoneyBag::fromArray($data['totalOutstandingSet']);
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = ShopifyMoneyBag::fromArray($data['totalPriceSet']);
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
            if ($this->addedDiscountApplications !== null) {
                $data['addedDiscountApplications'] = $this->addedDiscountApplications->asArray();
            }
            if ($this->addedLineItems !== null) {
                $data['addedLineItems'] = $this->addedLineItems->asArray();
            }
            if ($this->cartDiscountAmountSet !== null) {
                $data['cartDiscountAmountSet'] = $this->cartDiscountAmountSet->asArray();
            }
            if ($this->committed !== null) {
                $data['committed'] = $this->committed;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->notificationPreviewHtml !== null) {
                $data['notificationPreviewHtml'] = $this->notificationPreviewHtml;
            }
            if ($this->notificationPreviewTitle !== null) {
                $data['notificationPreviewTitle'] = $this->notificationPreviewTitle;
            }
            if ($this->originalOrder !== null) {
                $data['originalOrder'] = $this->originalOrder->asArray();
            }
            if ($this->shippingLines !== null) {
                $data['shippingLines'] = array_map(function($item) { return $item->asArray(); }, $this->shippingLines);
            }
            if ($this->stagedChanges !== null) {
                $data['stagedChanges'] = $this->stagedChanges->asArray();
            }
            if ($this->subtotalLineItemsQuantity !== null) {
                $data['subtotalLineItemsQuantity'] = $this->subtotalLineItemsQuantity;
            }
            if ($this->subtotalPriceSet !== null) {
                $data['subtotalPriceSet'] = $this->subtotalPriceSet->asArray();
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->totalOutstandingSet !== null) {
                $data['totalOutstandingSet'] = $this->totalOutstandingSet->asArray();
            }
            if ($this->totalPriceSet !== null) {
                $data['totalPriceSet'] = $this->totalPriceSet->asArray();
            }
            return $data;
        }
}
