<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingCycle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingCycleConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDeliveryMethodHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDeliveryOptionResultHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDeliveryPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDiscountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionLineConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionShippingOptionResultHydrator;

/**
 * The `SubscriptionDraft` object represents a draft version of a
 * [subscription contract](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionContract)
 * before it's committed. It serves as a staging area for making changes to an existing subscription or creating
 * a new one. The draft allows you to preview and modify various aspects of a subscription before applying the changes.
 * This object is deprecated in favor of the
 * [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api).
 *
 * Use the `SubscriptionDraft` object to:
 *
 * - Add, remove, or modify subscription lines and their quantities
 * - Manage discounts (add, remove, or update manual and code-based discounts)
 * - Configure delivery options and shipping methods
 * - Set up billing and delivery policies
 * - Manage customer payment methods
 * - Add custom attributes and notes to generated orders
 * - Configure billing cycles and next billing dates
 * - Preview the projected state of the subscription
 *
 * Each `SubscriptionDraft` object maintains a projected state that shows how the subscription will look after the changes
 * are committed. This allows you to preview the impact of your modifications before applying them. The draft can be
 * associated with an existing subscription contract (for modifications) or used to create a new subscription.
 *
 * The draft remains in a draft state until it's committed, at which point the changes are applied to the subscription
 * contract and the draft is no longer accessible.
 *
 * Learn more about
 * [how subscription contracts work](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts)
 * and how to [build](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract),
 * [update](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/update-a-subscription-contract), and
 * [combine](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/combine-subscription-contracts) subscription contracts.
 */
class ShopifySubscriptionDraft implements ShopifyNode
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
     * The billing cycle that the subscription contract will be associated with.
     *
     * @return ShopifySubscriptionBillingCycle
     */
    public function getBillingCycle(): ?ShopifySubscriptionBillingCycle
    {
        return $this->billingCycle;
    }

    
    /**
     * The billing policy for the subscription contract.
     *
     * @return ShopifySubscriptionBillingPolicy
     */
    public function getBillingPolicy(): ?ShopifySubscriptionBillingPolicy
    {
        return $this->billingPolicy;
    }

    
    /**
     * The billing cycles of the contracts that will be concatenated to the subscription contract.
     *
     * @return ShopifySubscriptionBillingCycleConnection
     */
    public function getConcatenatedBillingCycles(): ?ShopifySubscriptionBillingCycleConnection
    {
        return $this->concatenatedBillingCycles;
    }

    
    /**
     * The currency used for the subscription contract.
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
     * The customer payment method used for the subscription contract.
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
     * The available delivery options for a given delivery address. Returns `null` for pending requests.
     *
     * @return ShopifySubscriptionDeliveryOptionResultFailure|ShopifySubscriptionDeliveryOptionResultSuccess
     */
    public function getDeliveryOptions(): ShopifySubscriptionDeliveryOptionResultFailure|ShopifySubscriptionDeliveryOptionResultSuccess|null
    {
        return $this->deliveryOptions;
    }

    
    /**
     * The delivery policy for the subscription contract.
     *
     * @return ShopifySubscriptionDeliveryPolicy
     */
    public function getDeliveryPolicy(): ?ShopifySubscriptionDeliveryPolicy
    {
        return $this->deliveryPolicy;
    }

    
    /**
     * The delivery price for each billing the subscription contract.
     *
     * @return ShopifyMoneyV2
     */
    public function getDeliveryPrice(): ?ShopifyMoneyV2
    {
        return $this->deliveryPrice;
    }

    
    /**
     * The list of subscription discounts which will be associated with the subscription contract.
     *
     * @return ShopifySubscriptionDiscountConnection
     */
    public function getDiscounts(): ?ShopifySubscriptionDiscountConnection
    {
        return $this->discounts;
    }

    
    /**
     * The list of subscription discounts to be added to the subscription contract.
     *
     * @return ShopifySubscriptionDiscountConnection
     */
    public function getDiscountsAdded(): ?ShopifySubscriptionDiscountConnection
    {
        return $this->discountsAdded;
    }

    
    /**
     * The list of subscription discounts to be removed from the subscription contract.
     *
     * @return ShopifySubscriptionDiscountConnection
     */
    public function getDiscountsRemoved(): ?ShopifySubscriptionDiscountConnection
    {
        return $this->discountsRemoved;
    }

    
    /**
     * The list of subscription discounts to be updated on the subscription contract.
     *
     * @return ShopifySubscriptionDiscountConnection
     */
    public function getDiscountsUpdated(): ?ShopifySubscriptionDiscountConnection
    {
        return $this->discountsUpdated;
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
     * The list of subscription lines which will be associated with the subscription contract.
     *
     * @return ShopifySubscriptionLineConnection
     */
    public function getLines(): ?ShopifySubscriptionLineConnection
    {
        return $this->lines;
    }

    
    /**
     * The list of subscription lines to be added to the subscription contract.
     *
     * @return ShopifySubscriptionLineConnection
     */
    public function getLinesAdded(): ?ShopifySubscriptionLineConnection
    {
        return $this->linesAdded;
    }

    
    /**
     * The list of subscription lines to be removed from the subscription contract.
     *
     * @return ShopifySubscriptionLineConnection
     */
    public function getLinesRemoved(): ?ShopifySubscriptionLineConnection
    {
        return $this->linesRemoved;
    }

    
    /**
     * The next billing date for the subscription contract.
     *
     * @return Carbon
     */
    public function getNextBillingDate(): ?Carbon
    {
        return $this->nextBillingDate;
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
     * The original subscription contract.
     *
     * @return ShopifySubscriptionContract
     */
    public function getOriginalContract(): ?ShopifySubscriptionContract
    {
        return $this->originalContract;
    }

    
    /**
     * Available Shipping Options for a given delivery address. Returns NULL for pending requests.
     *
     * @return ShopifySubscriptionShippingOptionResultFailure|ShopifySubscriptionShippingOptionResultSuccess
     */
    public function getShippingOptions(): ShopifySubscriptionShippingOptionResultFailure|ShopifySubscriptionShippingOptionResultSuccess|null
    {
        return $this->shippingOptions;
    }

    
    /**
     * The current status of the subscription contract.
     *
     * @return string A ShopifySubscriptionContractSubscriptionStatusEnumObject value
     */
    public function getStatus(): ?string
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
                $instance->deliveryMethod = ShopifySubscriptionDeliveryMethodHydrator::fromArray($data['deliveryMethod']);
            }
            if (isset($data['deliveryOptions']) && $data['deliveryOptions'] !== null) {
                $instance->deliveryOptions = ShopifySubscriptionDeliveryOptionResultHydrator::fromArray($data['deliveryOptions']);
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
                $instance->shippingOptions = ShopifySubscriptionShippingOptionResultHydrator::fromArray($data['shippingOptions']);
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
                $data['deliveryMethod'] = ShopifySubscriptionDeliveryMethodHydrator::toArray($this->deliveryMethod);
            }
            if ($this->deliveryOptions !== null) {
                $data['deliveryOptions'] = ShopifySubscriptionDeliveryOptionResultHydrator::toArray($this->deliveryOptions);
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
                $data['shippingOptions'] = ShopifySubscriptionShippingOptionResultHydrator::toArray($this->shippingOptions);
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
