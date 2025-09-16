<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AbandonedCheckout;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Customer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerVisitProductInfoConnection;

class Abandonment
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
     * @return AbandonedCheckout
     */
    public function getAbandonedCheckoutPayload()
    {
        return $this->abandonedCheckoutPayload;
    }

    
    /**
     * @return AbandonmentAbandonmentTypeEnumObject
     */
    public function getAbandonmentType()
    {
        return $this->abandonmentType;
    }

    
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
    public function getCartUrl()
    {
        return $this->cartUrl;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    
    /**
     * @return bool
     */
    public function getCustomerHasNoDraftOrderSinceAbandonment()
    {
        return $this->customerHasNoDraftOrderSinceAbandonment;
    }

    
    /**
     * @return bool
     */
    public function getCustomerHasNoOrderSinceAbandonment()
    {
        return $this->customerHasNoOrderSinceAbandonment;
    }

    
    /**
     * @return int
     */
    public function getDaysSinceLastAbandonmentEmail()
    {
        return $this->daysSinceLastAbandonmentEmail;
    }

    
    /**
     * @return Carbon
     */
    public function getEmailSentAt()
    {
        return $this->emailSentAt;
    }

    
    /**
     * @return AbandonmentEmailStateEnumObject
     */
    public function getEmailState()
    {
        return $this->emailState;
    }

    
    /**
     * @return float
     */
    public function getHoursSinceLastAbandonedCheckout()
    {
        return $this->hoursSinceLastAbandonedCheckout;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getInventoryAvailable()
    {
        return $this->inventoryAvailable;
    }

    
    /**
     * @return bool
     */
    public function getIsFromCustomStorefront()
    {
        return $this->isFromCustomStorefront;
    }

    
    /**
     * @return bool
     */
    public function getIsFromOnlineStore()
    {
        return $this->isFromOnlineStore;
    }

    
    /**
     * @return bool
     */
    public function getIsFromShopApp()
    {
        return $this->isFromShopApp;
    }

    
    /**
     * @return bool
     */
    public function getIsFromShopPay()
    {
        return $this->isFromShopPay;
    }

    
    /**
     * @return bool
     */
    public function getIsMostSignificantAbandonment()
    {
        return $this->isMostSignificantAbandonment;
    }

    
    /**
     * @return Carbon
     */
    public function getLastBrowseAbandonmentDate()
    {
        return $this->lastBrowseAbandonmentDate;
    }

    
    /**
     * @return Carbon
     */
    public function getLastCartAbandonmentDate()
    {
        return $this->lastCartAbandonmentDate;
    }

    
    /**
     * @return Carbon
     */
    public function getLastCheckoutAbandonmentDate()
    {
        return $this->lastCheckoutAbandonmentDate;
    }

    
    /**
     * @return AbandonmentAbandonmentTypeEnumObject
     */
    public function getMostRecentStep()
    {
        return $this->mostRecentStep;
    }

    
    /**
     * @return CustomerVisitProductInfoConnection
     */
    public function getProductsAddedToCart()
    {
        return $this->productsAddedToCart;
    }

    
    /**
     * @return CustomerVisitProductInfoConnection
     */
    public function getProductsViewed()
    {
        return $this->productsViewed;
    }

    
    /**
     * @return Carbon
     */
    public function getVisitStartedAt()
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
                $instance->abandonedCheckoutPayload = AbandonedCheckout::fromArray($data['abandonedCheckoutPayload']);
            }
            if (isset($data['abandonmentType']) && $data['abandonmentType'] !== null) {
                $instance->abandonmentType = $data['abandonmentType'];
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = App::fromArray($data['app']);
            }
            if (isset($data['cartUrl']) && $data['cartUrl'] !== null) {
                $instance->cartUrl = $data['cartUrl'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = Customer::fromArray($data['customer']);
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
                $instance->productsAddedToCart = CustomerVisitProductInfoConnection::fromArray($data['productsAddedToCart']);
            }
            if (isset($data['productsViewed']) && $data['productsViewed'] !== null) {
                $instance->productsViewed = CustomerVisitProductInfoConnection::fromArray($data['productsViewed']);
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
