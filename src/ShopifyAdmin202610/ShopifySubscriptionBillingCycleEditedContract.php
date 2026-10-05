<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionBillingCycleConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDeliveryMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionManualDiscountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionGroupedLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationProjectedOrderTotals;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderConnection;

class ShopifySubscriptionBillingCycleEditedContract
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
    protected $groupedLines;
    protected $latestCommittedProjectedOrderTotals;
    protected $lineCount;
    protected $lines;
    protected $linesCount;
    protected $note;
    protected $orders;
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
     * @return ShopifySubscriptionBillingCycleConnection
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
     * @return ShopifySubscriptionGroupedLineConnection
     */
    public function getGroupedLines()
    {
        return $this->groupedLines;
    }

    
    /**
     * @return ShopifySubscriptionContractCalculationProjectedOrderTotals
     */
    public function getLatestCommittedProjectedOrderTotals()
    {
        return $this->latestCommittedProjectedOrderTotals;
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
            if (isset($data['billingCycles']) && $data['billingCycles'] !== null) {
                $instance->billingCycles = ShopifySubscriptionBillingCycleConnection::fromArray($data['billingCycles']);
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
            if (isset($data['deliveryPrice']) && $data['deliveryPrice'] !== null) {
                $instance->deliveryPrice = ShopifyMoneyV2::fromArray($data['deliveryPrice']);
            }
            if (isset($data['discounts']) && $data['discounts'] !== null) {
                $instance->discounts = ShopifySubscriptionManualDiscountConnection::fromArray($data['discounts']);
            }
            if (isset($data['groupedLines']) && $data['groupedLines'] !== null) {
                $instance->groupedLines = ShopifySubscriptionGroupedLineConnection::fromArray($data['groupedLines']);
            }
            if (isset($data['latestCommittedProjectedOrderTotals']) && $data['latestCommittedProjectedOrderTotals'] !== null) {
                $instance->latestCommittedProjectedOrderTotals = ShopifySubscriptionContractCalculationProjectedOrderTotals::fromArray($data['latestCommittedProjectedOrderTotals']);
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
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = ShopifyOrderConnection::fromArray($data['orders']);
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
            if ($this->groupedLines !== null) {
                $data['groupedLines'] = $this->groupedLines->asArray();
            }
            if ($this->latestCommittedProjectedOrderTotals !== null) {
                $data['latestCommittedProjectedOrderTotals'] = $this->latestCommittedProjectedOrderTotals->asArray();
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
