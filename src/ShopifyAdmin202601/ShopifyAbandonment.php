<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAbandonedCheckout;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyApp;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerVisitProductInfoConnection;

/**
 * Tracks a [customer](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)'s incomplete shopping journey, whether they abandoned while browsing [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), adding items to cart, or during checkout. Provides data about the customer's behavior and products they interacted with.
 *
 * The abandonment includes fields that indicate whether the customer has completed any [orders](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) or [draft orders](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder) after the abandonment occurred. It also tracks when emails were sent and how long since the customer's last activity across different abandonment types.
 */
class ShopifyAbandonment implements ShopifyNode
{
    protected $abandonedCheckoutPayload;
    protected $abandonmentType;
    protected $app;
    protected $cartUrl;
    protected $createdAt;
    protected $customer;
    protected $customerHasNoDraftOrderSinceAbandonment;
    protected $customerHasNoOrderSinceAbandonment;
    protected $daysSinceLastAbandonmentEmail;
    protected $emailSentAt;
    protected $emailState;
    protected $hoursSinceLastAbandonedCheckout;
    protected $id;
    protected $inventoryAvailable;
    protected $isFromCustomStorefront;
    protected $isFromOnlineStore;
    protected $isFromShopApp;
    protected $isFromShopPay;
    protected $isMostSignificantAbandonment;
    protected $lastBrowseAbandonmentDate;
    protected $lastCartAbandonmentDate;
    protected $lastCheckoutAbandonmentDate;
    protected $mostRecentStep;
    protected $productsAddedToCart;
    protected $productsViewed;
    protected $visitStartedAt;

    
    /**
     * The abandonment payload for the abandoned checkout.
     *
     * @return ShopifyAbandonedCheckout
     */
    public function getAbandonedCheckoutPayload(): ?ShopifyAbandonedCheckout
    {
        return $this->abandonedCheckoutPayload;
    }

    
    /**
     * The abandonment type.
     *
     * @return string A ShopifyAbandonmentAbandonmentTypeEnumObject value
     */
    public function getAbandonmentType(): ?string
    {
        return $this->abandonmentType;
    }

    
    /**
     * The app associated with an abandoned checkout.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * Permalink to the cart page.
     *
     * @return string
     */
    public function getCartUrl(): mixed
    {
        return $this->cartUrl;
    }

    
    /**
     * The date and time when the abandonment was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The customer who abandoned this event.
     *
     * @return ShopifyCustomer
     */
    public function getCustomer(): ?ShopifyCustomer
    {
        return $this->customer;
    }

    
    /**
     * Whether the customer has a draft order since this abandonment has been abandoned.
     *
     * @return bool
     */
    public function getCustomerHasNoDraftOrderSinceAbandonment(): ?bool
    {
        return $this->customerHasNoDraftOrderSinceAbandonment;
    }

    
    /**
     * Whether the customer has completed an order since this checkout has been abandoned.
     *
     * @return bool
     */
    public function getCustomerHasNoOrderSinceAbandonment(): ?bool
    {
        return $this->customerHasNoOrderSinceAbandonment;
    }

    
    /**
     * The number of days since the last abandonment email was sent to the customer.
     *
     * @return int
     */
    public function getDaysSinceLastAbandonmentEmail(): ?int
    {
        return $this->daysSinceLastAbandonmentEmail;
    }

    
    /**
     * When the email was sent, if that's the case.
     *
     * @return Carbon
     */
    public function getEmailSentAt(): ?Carbon
    {
        return $this->emailSentAt;
    }

    
    /**
     * The email state (e.g., sent or not sent).
     *
     * @return string A ShopifyAbandonmentEmailStateEnumObject value
     */
    public function getEmailState(): ?string
    {
        return $this->emailState;
    }

    
    /**
     * The number of hours since the customer has last abandoned a checkout.
     *
     * @return float
     */
    public function getHoursSinceLastAbandonedCheckout(): ?float
    {
        return $this->hoursSinceLastAbandonedCheckout;
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
     * Whether the products in abandonment are available.
     *
     * @return bool
     */
    public function getInventoryAvailable(): ?bool
    {
        return $this->inventoryAvailable;
    }

    
    /**
     * Whether the abandonment event comes from a custom storefront channel.
     *
     * @return bool
     */
    public function getIsFromCustomStorefront(): ?bool
    {
        return $this->isFromCustomStorefront;
    }

    
    /**
     * Whether the abandonment event comes from the Online Store sales channel.
     *
     * @return bool
     */
    public function getIsFromOnlineStore(): ?bool
    {
        return $this->isFromOnlineStore;
    }

    
    /**
     * Whether the abandonment event comes from the Shop app sales channel.
     *
     * @return bool
     */
    public function getIsFromShopApp(): ?bool
    {
        return $this->isFromShopApp;
    }

    
    /**
     * Whether the abandonment event comes from Shop Pay.
     *
     * @return bool
     */
    public function getIsFromShopPay(): ?bool
    {
        return $this->isFromShopPay;
    }

    
    /**
     * Whether the customer didn't complete another most significant step since this abandonment.
     *
     * @return bool
     */
    public function getIsMostSignificantAbandonment(): ?bool
    {
        return $this->isMostSignificantAbandonment;
    }

    
    /**
     * The date for the latest browse abandonment.
     *
     * @return Carbon
     */
    public function getLastBrowseAbandonmentDate(): ?Carbon
    {
        return $this->lastBrowseAbandonmentDate;
    }

    
    /**
     * The date for the latest cart abandonment.
     *
     * @return Carbon
     */
    public function getLastCartAbandonmentDate(): ?Carbon
    {
        return $this->lastCartAbandonmentDate;
    }

    
    /**
     * The date for the latest checkout abandonment.
     *
     * @return Carbon
     */
    public function getLastCheckoutAbandonmentDate(): ?Carbon
    {
        return $this->lastCheckoutAbandonmentDate;
    }

    
    /**
     * The most recent step type.
     *
     * @return string A ShopifyAbandonmentAbandonmentTypeEnumObject value
     */
    public function getMostRecentStep(): ?string
    {
        return $this->mostRecentStep;
    }

    
    /**
     * The products added to the cart during the customer abandoned visit.
     *
     * @return ShopifyCustomerVisitProductInfoConnection
     */
    public function getProductsAddedToCart(): ?ShopifyCustomerVisitProductInfoConnection
    {
        return $this->productsAddedToCart;
    }

    
    /**
     * The products viewed during the customer abandoned visit.
     *
     * @return ShopifyCustomerVisitProductInfoConnection
     */
    public function getProductsViewed(): ?ShopifyCustomerVisitProductInfoConnection
    {
        return $this->productsViewed;
    }

    
    /**
     * The date and time when the visit started.
     *
     * @return Carbon
     */
    public function getVisitStartedAt(): ?Carbon
    {
        return $this->visitStartedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['abandonedCheckoutPayload']) && $data['abandonedCheckoutPayload'] !== null) {
                $instance->abandonedCheckoutPayload = ShopifyAbandonedCheckout::fromArray($data['abandonedCheckoutPayload']);
            }
            if (isset($data['abandonmentType']) && $data['abandonmentType'] !== null) {
                $instance->abandonmentType = $data['abandonmentType'];
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['cartUrl']) && $data['cartUrl'] !== null) {
                $instance->cartUrl = $data['cartUrl'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['customerHasNoDraftOrderSinceAbandonment']) && $data['customerHasNoDraftOrderSinceAbandonment'] !== null) {
                $instance->customerHasNoDraftOrderSinceAbandonment = $data['customerHasNoDraftOrderSinceAbandonment'];
            }
            if (isset($data['customerHasNoOrderSinceAbandonment']) && $data['customerHasNoOrderSinceAbandonment'] !== null) {
                $instance->customerHasNoOrderSinceAbandonment = $data['customerHasNoOrderSinceAbandonment'];
            }
            if (isset($data['daysSinceLastAbandonmentEmail']) && $data['daysSinceLastAbandonmentEmail'] !== null) {
                $instance->daysSinceLastAbandonmentEmail = $data['daysSinceLastAbandonmentEmail'];
            }
            if (isset($data['emailSentAt']) && $data['emailSentAt'] !== null) {
                $instance->emailSentAt = new Carbon($data['emailSentAt']);
            }
            if (isset($data['emailState']) && $data['emailState'] !== null) {
                $instance->emailState = $data['emailState'];
            }
            if (isset($data['hoursSinceLastAbandonedCheckout']) && $data['hoursSinceLastAbandonedCheckout'] !== null) {
                $instance->hoursSinceLastAbandonedCheckout = $data['hoursSinceLastAbandonedCheckout'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryAvailable']) && $data['inventoryAvailable'] !== null) {
                $instance->inventoryAvailable = $data['inventoryAvailable'];
            }
            if (isset($data['isFromCustomStorefront']) && $data['isFromCustomStorefront'] !== null) {
                $instance->isFromCustomStorefront = $data['isFromCustomStorefront'];
            }
            if (isset($data['isFromOnlineStore']) && $data['isFromOnlineStore'] !== null) {
                $instance->isFromOnlineStore = $data['isFromOnlineStore'];
            }
            if (isset($data['isFromShopApp']) && $data['isFromShopApp'] !== null) {
                $instance->isFromShopApp = $data['isFromShopApp'];
            }
            if (isset($data['isFromShopPay']) && $data['isFromShopPay'] !== null) {
                $instance->isFromShopPay = $data['isFromShopPay'];
            }
            if (isset($data['isMostSignificantAbandonment']) && $data['isMostSignificantAbandonment'] !== null) {
                $instance->isMostSignificantAbandonment = $data['isMostSignificantAbandonment'];
            }
            if (isset($data['lastBrowseAbandonmentDate']) && $data['lastBrowseAbandonmentDate'] !== null) {
                $instance->lastBrowseAbandonmentDate = new Carbon($data['lastBrowseAbandonmentDate']);
            }
            if (isset($data['lastCartAbandonmentDate']) && $data['lastCartAbandonmentDate'] !== null) {
                $instance->lastCartAbandonmentDate = new Carbon($data['lastCartAbandonmentDate']);
            }
            if (isset($data['lastCheckoutAbandonmentDate']) && $data['lastCheckoutAbandonmentDate'] !== null) {
                $instance->lastCheckoutAbandonmentDate = new Carbon($data['lastCheckoutAbandonmentDate']);
            }
            if (isset($data['mostRecentStep']) && $data['mostRecentStep'] !== null) {
                $instance->mostRecentStep = $data['mostRecentStep'];
            }
            if (isset($data['productsAddedToCart']) && $data['productsAddedToCart'] !== null) {
                $instance->productsAddedToCart = ShopifyCustomerVisitProductInfoConnection::fromArray($data['productsAddedToCart']);
            }
            if (isset($data['productsViewed']) && $data['productsViewed'] !== null) {
                $instance->productsViewed = ShopifyCustomerVisitProductInfoConnection::fromArray($data['productsViewed']);
            }
            if (isset($data['visitStartedAt']) && $data['visitStartedAt'] !== null) {
                $instance->visitStartedAt = new Carbon($data['visitStartedAt']);
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
            if ($this->abandonedCheckoutPayload !== null) {
                $data['abandonedCheckoutPayload'] = $this->abandonedCheckoutPayload->asArray();
            }
            if ($this->abandonmentType !== null) {
                $data['abandonmentType'] = $this->abandonmentType;
            }
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->cartUrl !== null) {
                $data['cartUrl'] = $this->cartUrl;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->customerHasNoDraftOrderSinceAbandonment !== null) {
                $data['customerHasNoDraftOrderSinceAbandonment'] = $this->customerHasNoDraftOrderSinceAbandonment;
            }
            if ($this->customerHasNoOrderSinceAbandonment !== null) {
                $data['customerHasNoOrderSinceAbandonment'] = $this->customerHasNoOrderSinceAbandonment;
            }
            if ($this->daysSinceLastAbandonmentEmail !== null) {
                $data['daysSinceLastAbandonmentEmail'] = $this->daysSinceLastAbandonmentEmail;
            }
            if ($this->emailSentAt !== null) {
                $data['emailSentAt'] = $this->emailSentAt->toIso8601String();
            }
            if ($this->emailState !== null) {
                $data['emailState'] = $this->emailState;
            }
            if ($this->hoursSinceLastAbandonedCheckout !== null) {
                $data['hoursSinceLastAbandonedCheckout'] = $this->hoursSinceLastAbandonedCheckout;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inventoryAvailable !== null) {
                $data['inventoryAvailable'] = $this->inventoryAvailable;
            }
            if ($this->isFromCustomStorefront !== null) {
                $data['isFromCustomStorefront'] = $this->isFromCustomStorefront;
            }
            if ($this->isFromOnlineStore !== null) {
                $data['isFromOnlineStore'] = $this->isFromOnlineStore;
            }
            if ($this->isFromShopApp !== null) {
                $data['isFromShopApp'] = $this->isFromShopApp;
            }
            if ($this->isFromShopPay !== null) {
                $data['isFromShopPay'] = $this->isFromShopPay;
            }
            if ($this->isMostSignificantAbandonment !== null) {
                $data['isMostSignificantAbandonment'] = $this->isMostSignificantAbandonment;
            }
            if ($this->lastBrowseAbandonmentDate !== null) {
                $data['lastBrowseAbandonmentDate'] = $this->lastBrowseAbandonmentDate->toIso8601String();
            }
            if ($this->lastCartAbandonmentDate !== null) {
                $data['lastCartAbandonmentDate'] = $this->lastCartAbandonmentDate->toIso8601String();
            }
            if ($this->lastCheckoutAbandonmentDate !== null) {
                $data['lastCheckoutAbandonmentDate'] = $this->lastCheckoutAbandonmentDate->toIso8601String();
            }
            if ($this->mostRecentStep !== null) {
                $data['mostRecentStep'] = $this->mostRecentStep;
            }
            if ($this->productsAddedToCart !== null) {
                $data['productsAddedToCart'] = $this->productsAddedToCart->asArray();
            }
            if ($this->productsViewed !== null) {
                $data['productsViewed'] = $this->productsViewed->asArray();
            }
            if ($this->visitStartedAt !== null) {
                $data['visitStartedAt'] = $this->visitStartedAt->toIso8601String();
            }
            return $data;
        }
}
