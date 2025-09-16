<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddress;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Attribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Customer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AbandonedCheckoutLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TaxLine;

class AbandonedCheckout
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
     * @return string
     */
    public function getAbandonedCheckoutUrl()
    {
        return $this->abandonedCheckoutUrl;
    }

    
    /**
     * @return MailingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return Carbon
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return Attribute[]
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    
    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    
    /**
     * @return string
     */
    public function getDefaultCursor()
    {
        return $this->defaultCursor;
    }

    
    /**
     * @return string[]
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return AbandonedCheckoutLineItemConnection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return int
     */
    public function getLineItemsQuantity()
    {
        return $this->lineItemsQuantity;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return MailingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    
    /**
     * @return MoneyBag
     */
    public function getSubtotalPriceSet()
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * @return TaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    
    /**
     * @return bool
     */
    public function getTaxesIncluded()
    {
        return $this->taxesIncluded;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalDiscountSet()
    {
        return $this->totalDiscountSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalDutiesSet()
    {
        return $this->totalDutiesSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalLineItemsPriceSet()
    {
        return $this->totalLineItemsPriceSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalPriceSet()
    {
        return $this->totalPriceSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalTaxSet()
    {
        return $this->totalTaxSet;
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
            if (isset($data['abandonedCheckoutUrl']) && $data['abandonedCheckoutUrl'] !== null) {
                $instance->abandonedCheckoutUrl = $data['abandonedCheckoutUrl'];
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = MailingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['completedAt']) && $data['completedAt'] !== null) {
                $instance->completedAt = new Carbon($data['completedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return Attribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = Customer::fromArray($data['customer']);
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
                $instance->lineItems = AbandonedCheckoutLineItemConnection::fromArray($data['lineItems']);
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
                $instance->shippingAddress = MailingAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = MoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return TaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['taxesIncluded']) && $data['taxesIncluded'] !== null) {
                $instance->taxesIncluded = $data['taxesIncluded'];
            }
            if (isset($data['totalDiscountSet']) && $data['totalDiscountSet'] !== null) {
                $instance->totalDiscountSet = MoneyBag::fromArray($data['totalDiscountSet']);
            }
            if (isset($data['totalDutiesSet']) && $data['totalDutiesSet'] !== null) {
                $instance->totalDutiesSet = MoneyBag::fromArray($data['totalDutiesSet']);
            }
            if (isset($data['totalLineItemsPriceSet']) && $data['totalLineItemsPriceSet'] !== null) {
                $instance->totalLineItemsPriceSet = MoneyBag::fromArray($data['totalLineItemsPriceSet']);
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = MoneyBag::fromArray($data['totalPriceSet']);
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = MoneyBag::fromArray($data['totalTaxSet']);
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
