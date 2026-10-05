<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionBillingCycle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionBillingPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionBillingCycleConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDeliveryMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDeliveryOptionResult;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDeliveryPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDiscountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionLineConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionShippingOptionResult;

class ShopifySubscriptionDraft
{
    protected $billingCycle;
    protected $billingPolicy;
    protected $concatenatedBillingCycles;
    protected $currencyCode;
    protected $customAttributes;
    protected $customer;
    protected $customerPaymentMethod;
    protected $deliveryMethod;
    protected $deliveryOptions;
    protected $deliveryPolicy;
    protected $deliveryPrice;
    protected $discounts;
    protected $discountsAdded;
    protected $discountsRemoved;
    protected $discountsUpdated;
    protected $id;
    protected $lines;
    protected $linesAdded;
    protected $linesRemoved;
    protected $nextBillingDate;
    protected $note;
    protected $originalContract;
    protected $shippingOptions;
    protected $status;

    
    /**
     * @return ShopifySubscriptionBillingCycle
     */
    public function getBillingCycle()
    {
        return $this->billingCycle;
    }

    
    /**
     * @return ShopifySubscriptionBillingPolicy
     */
    public function getBillingPolicy()
    {
        return $this->billingPolicy;
    }

    
    /**
     * @return ShopifySubscriptionBillingCycleConnection
     */
    public function getConcatenatedBillingCycles()
    {
        return $this->concatenatedBillingCycles;
    }

    
    /**
     * @return ShopifyCurrencyCodeEnumObject
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    
    /**
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    
    /**
     * @return ShopifyCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    
    /**
     * @return ShopifyCustomerPaymentMethod
     */
    public function getCustomerPaymentMethod()
    {
        return $this->customerPaymentMethod;
    }

    
    /**
     * @return ShopifySubscriptionDeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    
    /**
     * @return ShopifySubscriptionDeliveryOptionResult
     */
    public function getDeliveryOptions()
    {
        return $this->deliveryOptions;
    }

    
    /**
     * @return ShopifySubscriptionDeliveryPolicy
     */
    public function getDeliveryPolicy()
    {
        return $this->deliveryPolicy;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getDeliveryPrice()
    {
        return $this->deliveryPrice;
    }

    
    /**
     * @return ShopifySubscriptionDiscountConnection
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    
    /**
     * @return ShopifySubscriptionDiscountConnection
     */
    public function getDiscountsAdded()
    {
        return $this->discountsAdded;
    }

    
    /**
     * @return ShopifySubscriptionDiscountConnection
     */
    public function getDiscountsRemoved()
    {
        return $this->discountsRemoved;
    }

    
    /**
     * @return ShopifySubscriptionDiscountConnection
     */
    public function getDiscountsUpdated()
    {
        return $this->discountsUpdated;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifySubscriptionLineConnection
     */
    public function getLines()
    {
        return $this->lines;
    }

    
    /**
     * @return ShopifySubscriptionLineConnection
     */
    public function getLinesAdded()
    {
        return $this->linesAdded;
    }

    
    /**
     * @return ShopifySubscriptionLineConnection
     */
    public function getLinesRemoved()
    {
        return $this->linesRemoved;
    }

    
    /**
     * @return Carbon
     */
    public function getNextBillingDate()
    {
        return $this->nextBillingDate;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return ShopifySubscriptionContract
     */
    public function getOriginalContract()
    {
        return $this->originalContract;
    }

    
    /**
     * @return ShopifySubscriptionShippingOptionResult
     */
    public function getShippingOptions()
    {
        return $this->shippingOptions;
    }

    
    /**
     * @return ShopifySubscriptionContractSubscriptionStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['billingCycle']) && $data['billingCycle'] !== null) {
                $instance->billingCycle = ShopifySubscriptionBillingCycle::fromArray($data['billingCycle']);
            }
            if (isset($data['billingPolicy']) && $data['billingPolicy'] !== null) {
                $instance->billingPolicy = ShopifySubscriptionBillingPolicy::fromArray($data['billingPolicy']);
            }
            if (isset($data['concatenatedBillingCycles']) && $data['concatenatedBillingCycles'] !== null) {
                $instance->concatenatedBillingCycles = ShopifySubscriptionBillingCycleConnection::fromArray($data['concatenatedBillingCycles']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['customerPaymentMethod']) && $data['customerPaymentMethod'] !== null) {
                $instance->customerPaymentMethod = ShopifyCustomerPaymentMethod::fromArray($data['customerPaymentMethod']);
            }
            if (isset($data['deliveryMethod']) && $data['deliveryMethod'] !== null) {
                $instance->deliveryMethod = ShopifySubscriptionDeliveryMethod::fromArray($data['deliveryMethod']);
            }
            if (isset($data['deliveryOptions']) && $data['deliveryOptions'] !== null) {
                $instance->deliveryOptions = ShopifySubscriptionDeliveryOptionResult::fromArray($data['deliveryOptions']);
            }
            if (isset($data['deliveryPolicy']) && $data['deliveryPolicy'] !== null) {
                $instance->deliveryPolicy = ShopifySubscriptionDeliveryPolicy::fromArray($data['deliveryPolicy']);
            }
            if (isset($data['deliveryPrice']) && $data['deliveryPrice'] !== null) {
                $instance->deliveryPrice = ShopifyMoneyV2::fromArray($data['deliveryPrice']);
            }
            if (isset($data['discounts']) && $data['discounts'] !== null) {
                $instance->discounts = ShopifySubscriptionDiscountConnection::fromArray($data['discounts']);
            }
            if (isset($data['discountsAdded']) && $data['discountsAdded'] !== null) {
                $instance->discountsAdded = ShopifySubscriptionDiscountConnection::fromArray($data['discountsAdded']);
            }
            if (isset($data['discountsRemoved']) && $data['discountsRemoved'] !== null) {
                $instance->discountsRemoved = ShopifySubscriptionDiscountConnection::fromArray($data['discountsRemoved']);
            }
            if (isset($data['discountsUpdated']) && $data['discountsUpdated'] !== null) {
                $instance->discountsUpdated = ShopifySubscriptionDiscountConnection::fromArray($data['discountsUpdated']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lines']) && $data['lines'] !== null) {
                $instance->lines = ShopifySubscriptionLineConnection::fromArray($data['lines']);
            }
            if (isset($data['linesAdded']) && $data['linesAdded'] !== null) {
                $instance->linesAdded = ShopifySubscriptionLineConnection::fromArray($data['linesAdded']);
            }
            if (isset($data['linesRemoved']) && $data['linesRemoved'] !== null) {
                $instance->linesRemoved = ShopifySubscriptionLineConnection::fromArray($data['linesRemoved']);
            }
            if (isset($data['nextBillingDate']) && $data['nextBillingDate'] !== null) {
                $instance->nextBillingDate = new Carbon($data['nextBillingDate']);
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['originalContract']) && $data['originalContract'] !== null) {
                $instance->originalContract = ShopifySubscriptionContract::fromArray($data['originalContract']);
            }
            if (isset($data['shippingOptions']) && $data['shippingOptions'] !== null) {
                $instance->shippingOptions = ShopifySubscriptionShippingOptionResult::fromArray($data['shippingOptions']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->billingCycle !== null) {
                $data['billingCycle'] = $this->billingCycle->asArray();
            }
            if ($this->billingPolicy !== null) {
                $data['billingPolicy'] = $this->billingPolicy->asArray();
            }
            if ($this->concatenatedBillingCycles !== null) {
                $data['concatenatedBillingCycles'] = $this->concatenatedBillingCycles->asArray();
            }
            if ($this->currencyCode !== null) {
                $data['currencyCode'] = $this->currencyCode;
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->customerPaymentMethod !== null) {
                $data['customerPaymentMethod'] = $this->customerPaymentMethod->asArray();
            }
            if ($this->deliveryMethod !== null) {
                $data['deliveryMethod'] = $this->deliveryMethod->asArray();
            }
            if ($this->deliveryOptions !== null) {
                $data['deliveryOptions'] = $this->deliveryOptions->asArray();
            }
            if ($this->deliveryPolicy !== null) {
                $data['deliveryPolicy'] = $this->deliveryPolicy->asArray();
            }
            if ($this->deliveryPrice !== null) {
                $data['deliveryPrice'] = $this->deliveryPrice->asArray();
            }
            if ($this->discounts !== null) {
                $data['discounts'] = $this->discounts->asArray();
            }
            if ($this->discountsAdded !== null) {
                $data['discountsAdded'] = $this->discountsAdded->asArray();
            }
            if ($this->discountsRemoved !== null) {
                $data['discountsRemoved'] = $this->discountsRemoved->asArray();
            }
            if ($this->discountsUpdated !== null) {
                $data['discountsUpdated'] = $this->discountsUpdated->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lines !== null) {
                $data['lines'] = $this->lines->asArray();
            }
            if ($this->linesAdded !== null) {
                $data['linesAdded'] = $this->linesAdded->asArray();
            }
            if ($this->linesRemoved !== null) {
                $data['linesRemoved'] = $this->linesRemoved->asArray();
            }
            if ($this->nextBillingDate !== null) {
                $data['nextBillingDate'] = $this->nextBillingDate->toIso8601String();
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->originalContract !== null) {
                $data['originalContract'] = $this->originalContract->asArray();
            }
            if ($this->shippingOptions !== null) {
                $data['shippingOptions'] = $this->shippingOptions->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
