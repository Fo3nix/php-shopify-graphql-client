<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionBillingPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDeliveryMethodHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDeliveryPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionManualDiscountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionGroupedLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionLineConnection;

/**
 * A calculated subscription contract that can be previewed before committing.
 */
class ShopifySubscriptionCalculatedContract
{
    protected $billingPolicy;
    protected $currencyCode;
    protected $customAttributes;
    protected $customer;
    protected $customerPaymentMethod;
    protected $deliveryMethod;
    protected $deliveryPolicy;
    protected $deliveryPrice;
    protected $discounts;
    protected $groupedLines;
    protected $lines;
    protected $note;

    
    /**
     * The billing policy associated with the subscription contract.
     *
     * @return ShopifySubscriptionBillingPolicy
     */
    public function getBillingPolicy(): ?ShopifySubscriptionBillingPolicy
    {
        return $this->billingPolicy;
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
     * The delivery policy associated with the subscription contract.
     *
     * @return ShopifySubscriptionDeliveryPolicy
     */
    public function getDeliveryPolicy(): ?ShopifySubscriptionDeliveryPolicy
    {
        return $this->deliveryPolicy;
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
     * The list of subscription lines grouped by bundle parent, with bundle components nested under their parent line.
     *
     * @return ShopifySubscriptionGroupedLineConnection
     */
    public function getGroupedLines(): ?ShopifySubscriptionGroupedLineConnection
    {
        return $this->groupedLines;
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
     * The note field that will be applied to the generated orders.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['billingPolicy']) && $data['billingPolicy'] !== null) {
                $instance->billingPolicy = ShopifySubscriptionBillingPolicy::fromArray($data['billingPolicy']);
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
            if (isset($data['deliveryPolicy']) && $data['deliveryPolicy'] !== null) {
                $instance->deliveryPolicy = ShopifySubscriptionDeliveryPolicy::fromArray($data['deliveryPolicy']);
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
            if (isset($data['lines']) && $data['lines'] !== null) {
                $instance->lines = ShopifySubscriptionLineConnection::fromArray($data['lines']);
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
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
            if ($this->billingPolicy !== null) {
                $data['billingPolicy'] = $this->billingPolicy->asArray();
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
            if ($this->deliveryPolicy !== null) {
                $data['deliveryPolicy'] = $this->deliveryPolicy->asArray();
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
            if ($this->lines !== null) {
                $data['lines'] = $this->lines->asArray();
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            return $data;
        }
}
