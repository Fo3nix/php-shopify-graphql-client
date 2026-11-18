<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionBillingAttemptConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionBillingPolicy;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionDeliveryMethodHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionDeliveryPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionManualDiscountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrder;

/**
 * A subscription contract that defines recurring purchases for a customer. Each contract specifies what products to deliver, when to bill and ship them, and at what price.
 *
 * The contract includes [`SubscriptionBillingPolicy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionBillingPolicy) and [`SubscriptionDeliveryPolicy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionDeliveryPolicy) that control the frequency of charges and fulfillments. [`SubscriptionLine`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionLine) items define the products, quantities, and pricing for each recurring [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order). The contract tracks [`SubscriptionBillingAttempt`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionBillingAttempt) records, payment status, and generated orders throughout its lifecycle. [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) instances manage contracts through various status transitions including active, paused, failed, cancelled, or expired states.
 *
 * Learn more about [building subscription contracts](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract) and [updating subscription contracts](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/update-a-subscription-contract).
 */
class ShopifySubscriptionContract implements ShopifyNode, ShopifySubscriptionContractBase
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
     * The list of billing attempts associated with the subscription contract.
     *
     * @return ShopifySubscriptionBillingAttemptConnection
     */
    public function getBillingAttempts(): ?ShopifySubscriptionBillingAttemptConnection
    {
        return $this->billingAttempts;
    }

    
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
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The last billing error type of the contract.
     *
     * @return string A ShopifySubscriptionContractLastBillingErrorTypeEnumObject value
     */
    public function getLastBillingAttemptErrorType(): ?string
    {
        return $this->lastBillingAttemptErrorType;
    }

    
    /**
     * The current status of the last payment.
     *
     * @return string A ShopifySubscriptionContractLastPaymentStatusEnumObject value
     */
    public function getLastPaymentStatus(): ?string
    {
        return $this->lastPaymentStatus;
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
     * The next billing date for the subscription contract. This field is managed by the apps.
     *         Alternatively you can utilize our
     *         [Billing Cycles APIs](https://shopify.dev/docs/apps/selling-strategies/subscriptions/billing-cycles),
     *         which provide auto-computed billing dates and additional functionalities.
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
     * A list of the subscription contract's orders.
     *
     * @return ShopifyOrderConnection
     */
    public function getOrders(): ?ShopifyOrderConnection
    {
        return $this->orders;
    }

    
    /**
     * The order from which this contract originated.
     *
     * @return ShopifyOrder
     */
    public function getOriginOrder(): ?ShopifyOrder
    {
        return $this->originOrder;
    }

    
    /**
     * The revision id of the contract.
     *
     * @return string
     */
    public function getRevisionId(): mixed
    {
        return $this->revisionId;
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
