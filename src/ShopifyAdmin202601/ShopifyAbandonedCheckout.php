<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMailingAddress;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAbandonedCheckoutLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTaxLine;

/**
 * An incomplete checkout where the customer added items and provided contact information but didn't complete the purchase. Tracks the customer's cart contents, pricing details, addresses, and timestamps to enable recovery campaigns and abandonment analytics.
 *
 * The checkout includes a recovery URL that merchants can send to customers to resume their purchase. [`AbandonedCheckoutLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AbandonedCheckoutLineItem) objects preserve the original [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) selections, quantities, and pricing at the time of abandonment.
 */
class ShopifyAbandonedCheckout implements ShopifyNavigable, ShopifyNode
{
    protected $abandonedCheckoutUrl;
    protected $billingAddress;
    protected $completedAt;
    protected $createdAt;
    protected $customAttributes;
    protected $customer;
    protected $defaultCursor;
    protected $discountCodes;
    protected $id;
    protected $lineItems;
    protected $lineItemsQuantity;
    protected $name;
    protected $note;
    protected $shippingAddress;
    protected $subtotalPriceSet;
    protected $taxLines;
    protected $taxesIncluded;
    protected $totalDiscountSet;
    protected $totalDutiesSet;
    protected $totalLineItemsPriceSet;
    protected $totalPriceSet;
    protected $totalTaxSet;
    protected $updatedAt;

    
    /**
     * The URL for the buyer to recover their checkout.
     *
     * @return string
     */
    public function getAbandonedCheckoutUrl(): mixed
    {
        return $this->abandonedCheckoutUrl;
    }

    
    /**
     * The billing address provided by the buyer.
     * Null if the user didn't provide a billing address.
     *
     * @return ShopifyMailingAddress
     */
    public function getBillingAddress(): ?ShopifyMailingAddress
    {
        return $this->billingAddress;
    }

    
    /**
     * The date and time when the buyer completed the checkout.
     * Null if the checkout hasn't been completed.
     *
     * @return Carbon
     */
    public function getCompletedAt(): ?Carbon
    {
        return $this->completedAt;
    }

    
    /**
     * The date and time when the checkout was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * A list of extra information that has been added to the checkout.
     *
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    
    /**
     * The customer who created this checkout.
     * May be null if the checkout was created from a draft order or via an app.
     *
     * @return ShopifyCustomer
     */
    public function getCustomer(): ?ShopifyCustomer
    {
        return $this->customer;
    }

    
    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     *
     * @return string
     */
    public function getDefaultCursor(): ?string
    {
        return $this->defaultCursor;
    }

    
    /**
     * The discount codes entered by the buyer at checkout.
     *
     * @return string[]
     */
    public function getDiscountCodes(): ?array
    {
        return $this->discountCodes;
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
     * A list of the line items in this checkout.
     *
     * @return ShopifyAbandonedCheckoutLineItemConnection
     */
    public function getLineItems(): ?ShopifyAbandonedCheckoutLineItemConnection
    {
        return $this->lineItems;
    }

    
    /**
     * The number of products in the checkout.
     *
     * @return int
     */
    public function getLineItemsQuantity(): ?int
    {
        return $this->lineItemsQuantity;
    }

    
    /**
     * Unique merchant-facing identifier for the checkout.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * A merchant-facing note added to the checkout. Not visible to the buyer.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The shipping address to where the line items will be shipped.
     * Null if the user didn't provide a shipping address.
     *
     * @return ShopifyMailingAddress
     */
    public function getShippingAddress(): ?ShopifyMailingAddress
    {
        return $this->shippingAddress;
    }

    
    /**
     * The sum of all items in the checkout, including discounts but excluding shipping, taxes and tips.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * Individual taxes charged on the checkout.
     *
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }

    
    /**
     * Whether taxes are included in line item and shipping line prices.
     *
     * @return bool
     */
    public function getTaxesIncluded(): ?bool
    {
        return $this->taxesIncluded;
    }

    
    /**
     * The total amount of discounts to be applied.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountSet(): ?ShopifyMoneyBag
    {
        return $this->totalDiscountSet;
    }

    
    /**
     * The total duties applied to the checkout.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDutiesSet(): ?ShopifyMoneyBag
    {
        return $this->totalDutiesSet;
    }

    
    /**
     * The sum of the prices of all line items in the checkout.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalLineItemsPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalLineItemsPriceSet;
    }

    
    /**
     * The sum of all items in the checkout, including discounts, shipping, taxes, and tips.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalPriceSet;
    }

    
    /**
     * The total tax applied to the checkout.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalTaxSet(): ?ShopifyMoneyBag
    {
        return $this->totalTaxSet;
    }

    
    /**
     * The date and time when the checkout was most recently updated.
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
            if (isset($data['abandonedCheckoutUrl']) && $data['abandonedCheckoutUrl'] !== null) {
                $instance->abandonedCheckoutUrl = $data['abandonedCheckoutUrl'];
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyMailingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['completedAt']) && $data['completedAt'] !== null) {
                $instance->completedAt = new Carbon($data['completedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['discountCodes']) && $data['discountCodes'] !== null) {
                $instance->discountCodes = $data['discountCodes'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyAbandonedCheckoutLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['lineItemsQuantity']) && $data['lineItemsQuantity'] !== null) {
                $instance->lineItemsQuantity = $data['lineItemsQuantity'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = ShopifyMailingAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = ShopifyMoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['taxesIncluded']) && $data['taxesIncluded'] !== null) {
                $instance->taxesIncluded = $data['taxesIncluded'];
            }
            if (isset($data['totalDiscountSet']) && $data['totalDiscountSet'] !== null) {
                $instance->totalDiscountSet = ShopifyMoneyBag::fromArray($data['totalDiscountSet']);
            }
            if (isset($data['totalDutiesSet']) && $data['totalDutiesSet'] !== null) {
                $instance->totalDutiesSet = ShopifyMoneyBag::fromArray($data['totalDutiesSet']);
            }
            if (isset($data['totalLineItemsPriceSet']) && $data['totalLineItemsPriceSet'] !== null) {
                $instance->totalLineItemsPriceSet = ShopifyMoneyBag::fromArray($data['totalLineItemsPriceSet']);
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = ShopifyMoneyBag::fromArray($data['totalPriceSet']);
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = ShopifyMoneyBag::fromArray($data['totalTaxSet']);
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
            if ($this->abandonedCheckoutUrl !== null) {
                $data['abandonedCheckoutUrl'] = $this->abandonedCheckoutUrl;
            }
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->completedAt !== null) {
                $data['completedAt'] = $this->completedAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->discountCodes !== null) {
                $data['discountCodes'] = $this->discountCodes;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->lineItemsQuantity !== null) {
                $data['lineItemsQuantity'] = $this->lineItemsQuantity;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->shippingAddress !== null) {
                $data['shippingAddress'] = $this->shippingAddress->asArray();
            }
            if ($this->subtotalPriceSet !== null) {
                $data['subtotalPriceSet'] = $this->subtotalPriceSet->asArray();
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->taxesIncluded !== null) {
                $data['taxesIncluded'] = $this->taxesIncluded;
            }
            if ($this->totalDiscountSet !== null) {
                $data['totalDiscountSet'] = $this->totalDiscountSet->asArray();
            }
            if ($this->totalDutiesSet !== null) {
                $data['totalDutiesSet'] = $this->totalDutiesSet->asArray();
            }
            if ($this->totalLineItemsPriceSet !== null) {
                $data['totalLineItemsPriceSet'] = $this->totalLineItemsPriceSet->asArray();
            }
            if ($this->totalPriceSet !== null) {
                $data['totalPriceSet'] = $this->totalPriceSet->asArray();
            }
            if ($this->totalTaxSet !== null) {
                $data['totalTaxSet'] = $this->totalTaxSet->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
