<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddressConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyContact;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerEmailAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerPhoneNumber;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerEmailMarketingConsentState;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Market;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerMergeable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerPaymentMethodConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerSmsMarketingConsentState;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerStatistics;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StoreCreditAccountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionContractConnection;

class Customer
{
    protected $addresses;
    protected $addressesV2;
    protected $amountSpent;
    protected $canDelete;
    protected $companyContactProfiles;
    protected $createdAt;
    protected $dataSaleOptOut;
    protected $defaultAddress;
    protected $defaultEmailAddress;
    protected $defaultPhoneNumber;
    protected $displayName;
    protected $email;
    protected $emailMarketingConsent;
    protected $events;
    protected $firstName;
    protected $hasTimelineComment;
    protected $id;
    protected $image;
    protected $lastName;
    protected $lastOrder;
    protected $legacyResourceId;
    protected $lifetimeDuration;
    protected $locale;
    protected $market;
    protected $mergeable;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $multipassIdentifier;
    protected $note;
    protected $numberOfOrders;
    protected $orders;
    protected $paymentMethods;
    protected $phone;
    protected $productSubscriberStatus;
    protected $smsMarketingConsent;
    protected $state;
    protected $statistics;
    protected $storeCreditAccounts;
    protected $subscriptionContracts;
    protected $tags;
    protected $taxExempt;
    protected $taxExemptions;
    protected $unsubscribeUrl;
    protected $updatedAt;
    protected $validEmailAddress;
    protected $verifiedEmail;

    
    /**
     * @return MailingAddress[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    
    /**
     * @return MailingAddressConnection
     */
    public function getAddressesV2()
    {
        return $this->addressesV2;
    }

    
    /**
     * @return MoneyV2
     */
    public function getAmountSpent()
    {
        return $this->amountSpent;
    }

    
    /**
     * @return bool
     */
    public function getCanDelete()
    {
        return $this->canDelete;
    }

    
    /**
     * @return CompanyContact[]
     */
    public function getCompanyContactProfiles()
    {
        return $this->companyContactProfiles;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return bool
     */
    public function getDataSaleOptOut()
    {
        return $this->dataSaleOptOut;
    }

    
    /**
     * @return MailingAddress
     */
    public function getDefaultAddress()
    {
        return $this->defaultAddress;
    }

    
    /**
     * @return CustomerEmailAddress
     */
    public function getDefaultEmailAddress()
    {
        return $this->defaultEmailAddress;
    }

    
    /**
     * @return CustomerPhoneNumber
     */
    public function getDefaultPhoneNumber()
    {
        return $this->defaultPhoneNumber;
    }

    
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    
    /**
     * @return CustomerEmailMarketingConsentState
     */
    public function getEmailMarketingConsent()
    {
        return $this->emailMarketingConsent;
    }

    
    /**
     * @return EventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    
    /**
     * @return bool
     */
    public function getHasTimelineComment()
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    
    /**
     * @return Order
     */
    public function getLastOrder()
    {
        return $this->lastOrder;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return string
     */
    public function getLifetimeDuration()
    {
        return $this->lifetimeDuration;
    }

    
    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    
    /**
     * @return Market
     */
    public function getMarket()
    {
        return $this->market;
    }

    
    /**
     * @return CustomerMergeable
     */
    public function getMergeable()
    {
        return $this->mergeable;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getMultipassIdentifier()
    {
        return $this->multipassIdentifier;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return string
     */
    public function getNumberOfOrders()
    {
        return $this->numberOfOrders;
    }

    
    /**
     * @return OrderConnection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    
    /**
     * @return CustomerPaymentMethodConnection
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    
    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    
    /**
     * @return CustomerProductSubscriberStatusEnumObject
     */
    public function getProductSubscriberStatus()
    {
        return $this->productSubscriberStatus;
    }

    
    /**
     * @return CustomerSmsMarketingConsentState
     */
    public function getSmsMarketingConsent()
    {
        return $this->smsMarketingConsent;
    }

    
    /**
     * @return CustomerStateEnumObject
     */
    public function getState()
    {
        return $this->state;
    }

    
    /**
     * @return CustomerStatistics
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    
    /**
     * @return StoreCreditAccountConnection
     */
    public function getStoreCreditAccounts()
    {
        return $this->storeCreditAccounts;
    }

    
    /**
     * @return SubscriptionContractConnection
     */
    public function getSubscriptionContracts()
    {
        return $this->subscriptionContracts;
    }

    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    
    /**
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->taxExempt;
    }

    
    /**
     * @return TaxExemptionEnumObject[]
     */
    public function getTaxExemptions()
    {
        return $this->taxExemptions;
    }

    
    /**
     * @return string
     */
    public function getUnsubscribeUrl()
    {
        return $this->unsubscribeUrl;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return bool
     */
    public function getValidEmailAddress()
    {
        return $this->validEmailAddress;
    }

    
    /**
     * @return bool
     */
    public function getVerifiedEmail()
    {
        return $this->verifiedEmail;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['addresses']) && $data['addresses'] !== null) {
                $instance->addresses = array_map(function($item) { return MailingAddress::fromArray($item); }, $data['addresses']);
            }
            if (isset($data['addressesV2']) && $data['addressesV2'] !== null) {
                $instance->addressesV2 = MailingAddressConnection::fromArray($data['addressesV2']);
            }
            if (isset($data['amountSpent']) && $data['amountSpent'] !== null) {
                $instance->amountSpent = MoneyV2::fromArray($data['amountSpent']);
            }
            if (isset($data['canDelete']) && $data['canDelete'] !== null) {
                $instance->canDelete = $data['canDelete'];
            }
            if (isset($data['companyContactProfiles']) && $data['companyContactProfiles'] !== null) {
                $instance->companyContactProfiles = array_map(function($item) { return CompanyContact::fromArray($item); }, $data['companyContactProfiles']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['dataSaleOptOut']) && $data['dataSaleOptOut'] !== null) {
                $instance->dataSaleOptOut = $data['dataSaleOptOut'];
            }
            if (isset($data['defaultAddress']) && $data['defaultAddress'] !== null) {
                $instance->defaultAddress = MailingAddress::fromArray($data['defaultAddress']);
            }
            if (isset($data['defaultEmailAddress']) && $data['defaultEmailAddress'] !== null) {
                $instance->defaultEmailAddress = CustomerEmailAddress::fromArray($data['defaultEmailAddress']);
            }
            if (isset($data['defaultPhoneNumber']) && $data['defaultPhoneNumber'] !== null) {
                $instance->defaultPhoneNumber = CustomerPhoneNumber::fromArray($data['defaultPhoneNumber']);
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['emailMarketingConsent']) && $data['emailMarketingConsent'] !== null) {
                $instance->emailMarketingConsent = CustomerEmailMarketingConsentState::fromArray($data['emailMarketingConsent']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = EventConnection::fromArray($data['events']);
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = Image::fromArray($data['image']);
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['lastOrder']) && $data['lastOrder'] !== null) {
                $instance->lastOrder = Order::fromArray($data['lastOrder']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['lifetimeDuration']) && $data['lifetimeDuration'] !== null) {
                $instance->lifetimeDuration = $data['lifetimeDuration'];
            }
            if (isset($data['locale']) && $data['locale'] !== null) {
                $instance->locale = $data['locale'];
            }
            if (isset($data['market']) && $data['market'] !== null) {
                $instance->market = Market::fromArray($data['market']);
            }
            if (isset($data['mergeable']) && $data['mergeable'] !== null) {
                $instance->mergeable = CustomerMergeable::fromArray($data['mergeable']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = MetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['multipassIdentifier']) && $data['multipassIdentifier'] !== null) {
                $instance->multipassIdentifier = $data['multipassIdentifier'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['numberOfOrders']) && $data['numberOfOrders'] !== null) {
                $instance->numberOfOrders = $data['numberOfOrders'];
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = OrderConnection::fromArray($data['orders']);
            }
            if (isset($data['paymentMethods']) && $data['paymentMethods'] !== null) {
                $instance->paymentMethods = CustomerPaymentMethodConnection::fromArray($data['paymentMethods']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['productSubscriberStatus']) && $data['productSubscriberStatus'] !== null) {
                $instance->productSubscriberStatus = $data['productSubscriberStatus'];
            }
            if (isset($data['smsMarketingConsent']) && $data['smsMarketingConsent'] !== null) {
                $instance->smsMarketingConsent = CustomerSmsMarketingConsentState::fromArray($data['smsMarketingConsent']);
            }
            if (isset($data['state']) && $data['state'] !== null) {
                $instance->state = $data['state'];
            }
            if (isset($data['statistics']) && $data['statistics'] !== null) {
                $instance->statistics = CustomerStatistics::fromArray($data['statistics']);
            }
            if (isset($data['storeCreditAccounts']) && $data['storeCreditAccounts'] !== null) {
                $instance->storeCreditAccounts = StoreCreditAccountConnection::fromArray($data['storeCreditAccounts']);
            }
            if (isset($data['subscriptionContracts']) && $data['subscriptionContracts'] !== null) {
                $instance->subscriptionContracts = SubscriptionContractConnection::fromArray($data['subscriptionContracts']);
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
            }
            if (isset($data['taxExempt']) && $data['taxExempt'] !== null) {
                $instance->taxExempt = $data['taxExempt'];
            }
            if (isset($data['taxExemptions']) && $data['taxExemptions'] !== null) {
                $instance->taxExemptions = $data['taxExemptions'];
            }
            if (isset($data['unsubscribeUrl']) && $data['unsubscribeUrl'] !== null) {
                $instance->unsubscribeUrl = $data['unsubscribeUrl'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['validEmailAddress']) && $data['validEmailAddress'] !== null) {
                $instance->validEmailAddress = $data['validEmailAddress'];
            }
            if (isset($data['verifiedEmail']) && $data['verifiedEmail'] !== null) {
                $instance->verifiedEmail = $data['verifiedEmail'];
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
            if ($this->addresses !== null) {
                $data['addresses'] = array_map(function($item) { return $item->asArray(); }, $this->addresses);
            }
            if ($this->addressesV2 !== null) {
                $data['addressesV2'] = $this->addressesV2->asArray();
            }
            if ($this->amountSpent !== null) {
                $data['amountSpent'] = $this->amountSpent->asArray();
            }
            if ($this->canDelete !== null) {
                $data['canDelete'] = $this->canDelete;
            }
            if ($this->companyContactProfiles !== null) {
                $data['companyContactProfiles'] = array_map(function($item) { return $item->asArray(); }, $this->companyContactProfiles);
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->dataSaleOptOut !== null) {
                $data['dataSaleOptOut'] = $this->dataSaleOptOut;
            }
            if ($this->defaultAddress !== null) {
                $data['defaultAddress'] = $this->defaultAddress->asArray();
            }
            if ($this->defaultEmailAddress !== null) {
                $data['defaultEmailAddress'] = $this->defaultEmailAddress->asArray();
            }
            if ($this->defaultPhoneNumber !== null) {
                $data['defaultPhoneNumber'] = $this->defaultPhoneNumber->asArray();
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->email !== null) {
                $data['email'] = $this->email;
            }
            if ($this->emailMarketingConsent !== null) {
                $data['emailMarketingConsent'] = $this->emailMarketingConsent->asArray();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->firstName !== null) {
                $data['firstName'] = $this->firstName;
            }
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->lastName !== null) {
                $data['lastName'] = $this->lastName;
            }
            if ($this->lastOrder !== null) {
                $data['lastOrder'] = $this->lastOrder->asArray();
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->lifetimeDuration !== null) {
                $data['lifetimeDuration'] = $this->lifetimeDuration;
            }
            if ($this->locale !== null) {
                $data['locale'] = $this->locale;
            }
            if ($this->market !== null) {
                $data['market'] = $this->market->asArray();
            }
            if ($this->mergeable !== null) {
                $data['mergeable'] = $this->mergeable->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->multipassIdentifier !== null) {
                $data['multipassIdentifier'] = $this->multipassIdentifier;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->numberOfOrders !== null) {
                $data['numberOfOrders'] = $this->numberOfOrders;
            }
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->paymentMethods !== null) {
                $data['paymentMethods'] = $this->paymentMethods->asArray();
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->productSubscriberStatus !== null) {
                $data['productSubscriberStatus'] = $this->productSubscriberStatus;
            }
            if ($this->smsMarketingConsent !== null) {
                $data['smsMarketingConsent'] = $this->smsMarketingConsent->asArray();
            }
            if ($this->state !== null) {
                $data['state'] = $this->state;
            }
            if ($this->statistics !== null) {
                $data['statistics'] = $this->statistics->asArray();
            }
            if ($this->storeCreditAccounts !== null) {
                $data['storeCreditAccounts'] = $this->storeCreditAccounts->asArray();
            }
            if ($this->subscriptionContracts !== null) {
                $data['subscriptionContracts'] = $this->subscriptionContracts->asArray();
            }
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            if ($this->taxExempt !== null) {
                $data['taxExempt'] = $this->taxExempt;
            }
            if ($this->taxExemptions !== null) {
                $data['taxExemptions'] = $this->taxExemptions;
            }
            if ($this->unsubscribeUrl !== null) {
                $data['unsubscribeUrl'] = $this->unsubscribeUrl;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->validEmailAddress !== null) {
                $data['validEmailAddress'] = $this->validEmailAddress;
            }
            if ($this->verifiedEmail !== null) {
                $data['verifiedEmail'] = $this->verifiedEmail;
            }
            return $data;
        }
}
