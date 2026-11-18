<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingCycleConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDeliveryMethodHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionManualDiscountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrderConnection;

/**
 * Represents a subscription contract with billing cycles.
 */
class ShopifySubscriptionBillingCycleEditedContract implements ShopifySubscriptionContractBase
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
     * The subscription app that the subscription contract is registered to.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The URL of the subscription contract page on the subscription app.
     *
     * @return string
     */
    public function getAppAdminUrl(): mixed
    {
        return $this->appAdminUrl;
    }

    
    /**
     * The billing cycles that the edited contract belongs to.
     *
     * @return ShopifySubscriptionBillingCycleConnection
     */
    public function getBillingCycles(): ?ShopifySubscriptionBillingCycleConnection
    {
        return $this->billingCycles;
    }

    
    /**
     * The date and time when the subscription contract was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The currency that's used for the subscription contract.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    
    /**
     * A list of the custom attributes to be added to the generated orders.
     *
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    
    /**
     * The customer to whom the subscription contract belongs.
     *
     * @return ShopifyCustomer
     */
    public function getCustomer(): ?ShopifyCustomer
    {
        return $this->customer;
    }

    
    /**
     * The customer payment method that's used for the subscription contract.
     *
     * @return ShopifyCustomerPaymentMethod
     */
    public function getCustomerPaymentMethod(): ?ShopifyCustomerPaymentMethod
    {
        return $this->customerPaymentMethod;
    }

    
    /**
     * The delivery method for each billing of the subscription contract.
     *
     * @return ShopifySubscriptionDeliveryMethodLocalDelivery|ShopifySubscriptionDeliveryMethodPickup|ShopifySubscriptionDeliveryMethodShipping
     */
    public function getDeliveryMethod(): ShopifySubscriptionDeliveryMethodLocalDelivery|ShopifySubscriptionDeliveryMethodPickup|ShopifySubscriptionDeliveryMethodShipping|null
    {
        return $this->deliveryMethod;
    }

    
    /**
     * The delivery price for each billing of the subscription contract.
     *
     * @return ShopifyMoneyV2
     */
    public function getDeliveryPrice(): ?ShopifyMoneyV2
    {
        return $this->deliveryPrice;
    }

    
    /**
     * The list of subscription discounts associated with the subscription contract.
     *
     * @return ShopifySubscriptionManualDiscountConnection
     */
    public function getDiscounts(): ?ShopifySubscriptionManualDiscountConnection
    {
        return $this->discounts;
    }

    
    /**
     * The number of lines associated with the subscription contract.
     *
     * @return int
     */
    public function getLineCount(): ?int
    {
        return $this->lineCount;
    }

    
    /**
     * The list of subscription lines associated with the subscription contract.
     *
     * @return ShopifySubscriptionLineConnection
     */
    public function getLines(): ?ShopifySubscriptionLineConnection
    {
        return $this->lines;
    }

    
    /**
     * The number of lines associated with the subscription contract.
     *
     * @return ShopifyCount
     */
    public function getLinesCount(): ?ShopifyCount
    {
        return $this->linesCount;
    }

    
    /**
     * The note field that will be applied to the generated orders.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * A list of the subscription contract's orders.
     *
     * @return ShopifyOrderConnection
     */
    public function getOrders(): ?ShopifyOrderConnection
    {
        return $this->orders;
    }

    
    /**
     * The date and time when the subscription contract was updated.
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
                $instance->deliveryMethod = ShopifySubscriptionDeliveryMethodHydrator::fromArray($data['deliveryMethod']);
            }
            if (isset($data['deliveryPrice']) && $data['deliveryPrice'] !== null) {
                $instance->deliveryPrice = ShopifyMoneyV2::fromArray($data['deliveryPrice']);
            }
            if (isset($data['discounts']) && $data['discounts'] !== null) {
                $instance->discounts = ShopifySubscriptionManualDiscountConnection::fromArray($data['discounts']);
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
                $data['deliveryMethod'] = ShopifySubscriptionDeliveryMethodHydrator::toArray($this->deliveryMethod);
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
