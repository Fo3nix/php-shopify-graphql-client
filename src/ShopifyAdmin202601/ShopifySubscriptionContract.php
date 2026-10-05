<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionBillingAttemptConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionBillingPolicy;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionDeliveryMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionDeliveryPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionManualDiscountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrder;

class ShopifySubscriptionContract
{
    protected $app;
    protected $appAdminUrl;
    protected $billingAttempts;
    protected $billingPolicy;
    protected $createdAt;
    protected $currencyCode;
    protected $customAttributes;
    protected $customer;
    protected $customerPaymentMethod;
    protected $deliveryMethod;
    protected $deliveryPolicy;
    protected $deliveryPrice;
    protected $discounts;
    protected $id;
    protected $lastBillingAttemptErrorType;
    protected $lastPaymentStatus;
    protected $lineCount;
    protected $lines;
    protected $linesCount;
    protected $nextBillingDate;
    protected $note;
    protected $orders;
    protected $originOrder;
    protected $revisionId;
    protected $status;
    protected $updatedAt;

    
    /**
     * @return ShopifyApp
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
     * @return ShopifySubscriptionBillingAttemptConnection
     */
    public function getBillingAttempts()
    {
        return $this->billingAttempts;
    }

    
    /**
     * @return ShopifySubscriptionBillingPolicy
     */
    public function getBillingPolicy()
    {
        return $this->billingPolicy;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * @return ShopifySubscriptionManualDiscountConnection
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifySubscriptionContractLastBillingErrorTypeEnumObject
     */
    public function getLastBillingAttemptErrorType()
    {
        return $this->lastBillingAttemptErrorType;
    }

    
    /**
     * @return ShopifySubscriptionContractLastPaymentStatusEnumObject
     */
    public function getLastPaymentStatus()
    {
        return $this->lastPaymentStatus;
    }

    
    /**
     * @return int
     */
    public function getLineCount()
    {
        return $this->lineCount;
    }

    
    /**
     * @return ShopifySubscriptionLineConnection
     */
    public function getLines()
    {
        return $this->lines;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getLinesCount()
    {
        return $this->linesCount;
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
     * @return ShopifyOrderConnection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    
    /**
     * @return ShopifyOrder
     */
    public function getOriginOrder()
    {
        return $this->originOrder;
    }

    
    /**
     * @return string
     */
    public function getRevisionId()
    {
        return $this->revisionId;
    }

    
    /**
     * @return ShopifySubscriptionContractSubscriptionStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
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
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['appAdminUrl']) && $data['appAdminUrl'] !== null) {
                $instance->appAdminUrl = $data['appAdminUrl'];
            }
            if (isset($data['billingAttempts']) && $data['billingAttempts'] !== null) {
                $instance->billingAttempts = ShopifySubscriptionBillingAttemptConnection::fromArray($data['billingAttempts']);
            }
            if (isset($data['billingPolicy']) && $data['billingPolicy'] !== null) {
                $instance->billingPolicy = ShopifySubscriptionBillingPolicy::fromArray($data['billingPolicy']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
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
            if (isset($data['deliveryPolicy']) && $data['deliveryPolicy'] !== null) {
                $instance->deliveryPolicy = ShopifySubscriptionDeliveryPolicy::fromArray($data['deliveryPolicy']);
            }
            if (isset($data['deliveryPrice']) && $data['deliveryPrice'] !== null) {
                $instance->deliveryPrice = ShopifyMoneyV2::fromArray($data['deliveryPrice']);
            }
            if (isset($data['discounts']) && $data['discounts'] !== null) {
                $instance->discounts = ShopifySubscriptionManualDiscountConnection::fromArray($data['discounts']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lastBillingAttemptErrorType']) && $data['lastBillingAttemptErrorType'] !== null) {
                $instance->lastBillingAttemptErrorType = $data['lastBillingAttemptErrorType'];
            }
            if (isset($data['lastPaymentStatus']) && $data['lastPaymentStatus'] !== null) {
                $instance->lastPaymentStatus = $data['lastPaymentStatus'];
            }
            if (isset($data['lineCount']) && $data['lineCount'] !== null) {
                $instance->lineCount = $data['lineCount'];
            }
            if (isset($data['lines']) && $data['lines'] !== null) {
                $instance->lines = ShopifySubscriptionLineConnection::fromArray($data['lines']);
            }
            if (isset($data['linesCount']) && $data['linesCount'] !== null) {
                $instance->linesCount = ShopifyCount::fromArray($data['linesCount']);
            }
            if (isset($data['nextBillingDate']) && $data['nextBillingDate'] !== null) {
                $instance->nextBillingDate = new Carbon($data['nextBillingDate']);
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = ShopifyOrderConnection::fromArray($data['orders']);
            }
            if (isset($data['originOrder']) && $data['originOrder'] !== null) {
                $instance->originOrder = ShopifyOrder::fromArray($data['originOrder']);
            }
            if (isset($data['revisionId']) && $data['revisionId'] !== null) {
                $instance->revisionId = $data['revisionId'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->billingAttempts !== null) {
                $data['billingAttempts'] = $this->billingAttempts->asArray();
            }
            if ($this->billingPolicy !== null) {
                $data['billingPolicy'] = $this->billingPolicy->asArray();
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
            if ($this->deliveryPolicy !== null) {
                $data['deliveryPolicy'] = $this->deliveryPolicy->asArray();
            }
            if ($this->deliveryPrice !== null) {
                $data['deliveryPrice'] = $this->deliveryPrice->asArray();
            }
            if ($this->discounts !== null) {
                $data['discounts'] = $this->discounts->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lastBillingAttemptErrorType !== null) {
                $data['lastBillingAttemptErrorType'] = $this->lastBillingAttemptErrorType;
            }
            if ($this->lastPaymentStatus !== null) {
                $data['lastPaymentStatus'] = $this->lastPaymentStatus;
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
            if ($this->nextBillingDate !== null) {
                $data['nextBillingDate'] = $this->nextBillingDate->toIso8601String();
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->originOrder !== null) {
                $data['originOrder'] = $this->originOrder->asArray();
            }
            if ($this->revisionId !== null) {
                $data['revisionId'] = $this->revisionId;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
