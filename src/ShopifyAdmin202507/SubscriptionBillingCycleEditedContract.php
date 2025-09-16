<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionBillingCycleConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Attribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Customer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionDeliveryMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionManualDiscountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderConnection;

class SubscriptionBillingCycleEditedContract
{
    protected $app;
    protected $appAdminUrl;
    protected $billingCycles;
    protected $createdAt;
    protected $currencyCode;
    protected $customAttributes;
    protected $customer;
    protected $customerPaymentMethod;
    protected $deliveryMethod;
    protected $deliveryPrice;
    protected $discounts;
    protected $lineCount;
    protected $lines;
    protected $linesCount;
    protected $note;
    protected $orders;
    protected $updatedAt;

    
    /**
     * @return App
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return string
     */
    public function getAppAdminUrl()
    {
        return $this->appAdminUrl;
    }

    
    /**
     * @return SubscriptionBillingCycleConnection
     */
    public function getBillingCycles()
    {
        return $this->billingCycles;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
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
     * @return CustomerPaymentMethod
     */
    public function getCustomerPaymentMethod()
    {
        return $this->customerPaymentMethod;
    }

    
    /**
     * @return SubscriptionDeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    
    /**
     * @return MoneyV2
     */
    public function getDeliveryPrice()
    {
        return $this->deliveryPrice;
    }

    
    /**
     * @return SubscriptionManualDiscountConnection
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    
    /**
     * @return int
     */
    public function getLineCount()
    {
        return $this->lineCount;
    }

    
    /**
     * @return SubscriptionLineConnection
     */
    public function getLines()
    {
        return $this->lines;
    }

    
    /**
     * @return Count
     */
    public function getLinesCount()
    {
        return $this->linesCount;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return OrderConnection
     */
    public function getOrders()
    {
        return $this->orders;
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
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = App::fromArray($data['app']);
            }
            if (isset($data['appAdminUrl']) && $data['appAdminUrl'] !== null) {
                $instance->appAdminUrl = $data['appAdminUrl'];
            }
            if (isset($data['billingCycles']) && $data['billingCycles'] !== null) {
                $instance->billingCycles = SubscriptionBillingCycleConnection::fromArray($data['billingCycles']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return Attribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = Customer::fromArray($data['customer']);
            }
            if (isset($data['customerPaymentMethod']) && $data['customerPaymentMethod'] !== null) {
                $instance->customerPaymentMethod = CustomerPaymentMethod::fromArray($data['customerPaymentMethod']);
            }
            if (isset($data['deliveryMethod']) && $data['deliveryMethod'] !== null) {
                $instance->deliveryMethod = SubscriptionDeliveryMethod::fromArray($data['deliveryMethod']);
            }
            if (isset($data['deliveryPrice']) && $data['deliveryPrice'] !== null) {
                $instance->deliveryPrice = MoneyV2::fromArray($data['deliveryPrice']);
            }
            if (isset($data['discounts']) && $data['discounts'] !== null) {
                $instance->discounts = SubscriptionManualDiscountConnection::fromArray($data['discounts']);
            }
            if (isset($data['lineCount']) && $data['lineCount'] !== null) {
                $instance->lineCount = $data['lineCount'];
            }
            if (isset($data['lines']) && $data['lines'] !== null) {
                $instance->lines = SubscriptionLineConnection::fromArray($data['lines']);
            }
            if (isset($data['linesCount']) && $data['linesCount'] !== null) {
                $instance->linesCount = Count::fromArray($data['linesCount']);
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = OrderConnection::fromArray($data['orders']);
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
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->appAdminUrl !== null) {
                $data['appAdminUrl'] = $this->appAdminUrl;
            }
            if ($this->billingCycles !== null) {
                $data['billingCycles'] = $this->billingCycles->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
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
            if ($this->deliveryPrice !== null) {
                $data['deliveryPrice'] = $this->deliveryPrice->asArray();
            }
            if ($this->discounts !== null) {
                $data['discounts'] = $this->discounts->asArray();
            }
            if ($this->lineCount !== null) {
                $data['lineCount'] = $this->lineCount;
            }
            if ($this->lines !== null) {
                $data['lines'] = $this->lines->asArray();
            }
            if ($this->linesCount !== null) {
                $data['linesCount'] = $this->linesCount->asArray();
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
