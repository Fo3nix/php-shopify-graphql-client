<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMailingAddressConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyContact;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerEmailAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPhoneNumber;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerEmailMarketingConsentState;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyIdentityProviderSubject;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarket;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerMergeable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPaymentMethodConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerSmsMarketingConsentState;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerStatistics;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStoreCreditAccountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTaxSettings;

/**
 * Information about a customer of the shop, such as the customer's contact details, purchase history, and marketing preferences.
 *
 * Tracks the customer's total spending through the [`amountSpent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer#field-amountSpent) field and provides access to associated data such as payment methods and subscription contracts.
 *
 * > Caution:
 * > Only use this data if it's required for your app's functionality. Shopify will restrict [access to scopes](https://shopify.dev/api/usage/access-scopes) for apps that don't have a legitimate use for the associated data.
 */
class ShopifyCustomer implements ShopifyCommentEventSubject, ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyHasStoreCreditAccounts, ShopifyLegacyInteroperability, ShopifyNode
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
    protected $identityProviderSubjects;
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
    protected $taxSettings;
    protected $unsubscribeUrl;
    protected $updatedAt;
    protected $validEmailAddress;
    protected $verifiedEmail;

    
    /**
     * A list of addresses associated with the customer. Limited to 250 addresses. Use `addressesV2` for paginated access to all addresses.
     *
     * @return ShopifyMailingAddress[]
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }

    
    /**
     * The addresses associated with the customer.
     *
     * @return ShopifyMailingAddressConnection
     */
    public function getAddressesV2(): ?ShopifyMailingAddressConnection
    {
        return $this->addressesV2;
    }

    
    /**
     * The total amount that the customer has spent on orders in their lifetime.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmountSpent(): ?ShopifyMoneyV2
    {
        return $this->amountSpent;
    }

    
    /**
     * Whether the merchant can delete the customer from their store.
     *
     * A customer can be deleted from a store only if they haven't yet made an order. After a customer makes an
     * order, they can't be deleted from a store.
     *
     * @return bool
     */
    public function getCanDelete(): ?bool
    {
        return $this->canDelete;
    }

    
    /**
     * A list of the customer's company contact profiles.
     *
     * @return ShopifyCompanyContact[]
     */
    public function getCompanyContactProfiles(): ?array
    {
        return $this->companyContactProfiles;
    }

    
    /**
     * The date and time when the customer was added to the store.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Whether the customer has opted out of having their data sold.
     *
     * @return bool
     */
    public function getDataSaleOptOut(): ?bool
    {
        return $this->dataSaleOptOut;
    }

    
    /**
     * The default address associated with the customer.
     *
     * @return ShopifyMailingAddress
     */
    public function getDefaultAddress(): ?ShopifyMailingAddress
    {
        return $this->defaultAddress;
    }

    
    /**
     * The customer's default email address.
     *
     * @return ShopifyCustomerEmailAddress
     */
    public function getDefaultEmailAddress(): ?ShopifyCustomerEmailAddress
    {
        return $this->defaultEmailAddress;
    }

    
    /**
     * The customer's default phone number.
     *
     * @return ShopifyCustomerPhoneNumber
     */
    public function getDefaultPhoneNumber(): ?ShopifyCustomerPhoneNumber
    {
        return $this->defaultPhoneNumber;
    }

    
    /**
     * The full name of the customer, based on the values for first_name and last_name. If the first_name and
     * last_name are not available, then this falls back to the customer's email address, and if that is not available, the customer's phone number.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    
    /**
     * The customer's email address.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    
    /**
     * The current email marketing state for the customer.
     * If the customer doesn't have an email address, then this property is `null`.
     *
     * @return ShopifyCustomerEmailMarketingConsentState
     */
    public function getEmailMarketingConsent(): ?ShopifyCustomerEmailMarketingConsentState
    {
        return $this->emailMarketingConsent;
    }

    
    /**
     * A list of events associated with the customer.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
    }

    
    /**
     * The customer's first name.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    
    /**
     * Whether the merchant has added timeline comments about the customer on the customer's page.
     *
     * @return bool
     */
    public function getHasTimelineComment(): ?bool
    {
        return $this->hasTimelineComment;
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
     * The identity provider subject identifiers associated with this customer.
     *
     * @return ShopifyIdentityProviderSubject[]
     */
    public function getIdentityProviderSubjects(): ?array
    {
        return $this->identityProviderSubjects;
    }

    
    /**
     * The image associated with the customer.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * The customer's last name.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    
    /**
     * The customer's last order.
     *
     * @return ShopifyOrder
     */
    public function getLastOrder(): ?ShopifyOrder
    {
        return $this->lastOrder;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The amount of time since the customer was first added to the store.
     *
     * Example: 'about 12 years'.
     *
     * @return string
     */
    public function getLifetimeDuration(): ?string
    {
        return $this->lifetimeDuration;
    }

    
    /**
     * The customer's locale.
     *
     * @return string
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    
    /**
     * The market that applies to the customer’s default address country. In cases where multiple markets match, this returns the most-specific country region market.
     *
     * @return ShopifyMarket
     */
    public function getMarket(): ?ShopifyMarket
    {
        return $this->market;
    }

    
    /**
     * Whether the customer can be merged with another customer.
     *
     * @return ShopifyCustomerMergeable
     */
    public function getMergeable(): ?ShopifyCustomerMergeable
    {
        return $this->mergeable;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * A unique identifier for the customer that's used with Multipass login.
     *
     * @return string
     */
    public function getMultipassIdentifier(): ?string
    {
        return $this->multipassIdentifier;
    }

    
    /**
     * A note about the customer.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The number of orders that the customer has made at the store in their lifetime.
     *
     * @return string
     */
    public function getNumberOfOrders(): mixed
    {
        return $this->numberOfOrders;
    }

    
    /**
     * A list of the customer's orders.
     *
     * @return ShopifyOrderConnection
     */
    public function getOrders(): ?ShopifyOrderConnection
    {
        return $this->orders;
    }

    
    /**
     * A list of the customer's payment methods.
     *
     * @return ShopifyCustomerPaymentMethodConnection
     */
    public function getPaymentMethods(): ?ShopifyCustomerPaymentMethodConnection
    {
        return $this->paymentMethods;
    }

    
    /**
     * The customer's phone number.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * Possible subscriber states of a customer defined by their subscription contracts.
     *
     * @return string A ShopifyCustomerProductSubscriberStatusEnumObject value
     */
    public function getProductSubscriberStatus(): ?string
    {
        return $this->productSubscriberStatus;
    }

    
    /**
     * The current SMS marketing state for the customer's phone number.
     *
     * If the customer does not have a phone number, then this property is `null`.
     *
     * @return ShopifyCustomerSmsMarketingConsentState
     */
    public function getSmsMarketingConsent(): ?ShopifyCustomerSmsMarketingConsentState
    {
        return $this->smsMarketingConsent;
    }

    
    /**
     * The state of the customer's account with the shop.
     *
     * With legacy customer accounts, the state follows the account invite and activation. With customer
     * accounts, signing in changes the state to `ENABLED`.
     *
     * @return string A ShopifyCustomerStateEnumObject value
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    
    /**
     * The statistics for a given customer.
     *
     * @return ShopifyCustomerStatistics
     */
    public function getStatistics(): ?ShopifyCustomerStatistics
    {
        return $this->statistics;
    }

    
    /**
     * Returns a list of store credit accounts that belong to the owner resource.
     * A store credit account owner can hold multiple accounts each with a different currency.
     *
     * @return ShopifyStoreCreditAccountConnection
     */
    public function getStoreCreditAccounts(): ?ShopifyStoreCreditAccountConnection
    {
        return $this->storeCreditAccounts;
    }

    
    /**
     * A list of the customer's subscription contracts.
     *
     * @return ShopifySubscriptionContractConnection
     */
    public function getSubscriptionContracts(): ?ShopifySubscriptionContractConnection
    {
        return $this->subscriptionContracts;
    }

    
    /**
     * A comma separated list of tags that have been added to the customer.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    
    /**
     * Whether the customer is exempt from being charged taxes on their orders.
     *
     * @return bool
     */
    public function getTaxExempt(): ?bool
    {
        return $this->taxExempt;
    }

    
    /**
     * The list of tax exemptions applied to the customer.
     *
     * @return string[] ShopifyTaxExemptionEnumObject values
     */
    public function getTaxExemptions(): ?array
    {
        return $this->taxExemptions;
    }

    
    /**
     * The customer's tax settings.
     *
     * @return ShopifyTaxSettings
     */
    public function getTaxSettings(): ?ShopifyTaxSettings
    {
        return $this->taxSettings;
    }

    
    /**
     * The URL to unsubscribe the customer from the mailing list.
     *
     * @return string
     */
    public function getUnsubscribeUrl(): mixed
    {
        return $this->unsubscribeUrl;
    }

    
    /**
     * The date and time when the customer was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * Whether the email address is formatted correctly.
     *
     * Returns `true` when the email is formatted correctly and
     * belongs to an existing domain. This doesn't guarantee that
     * the email address actually exists.
     *
     * @return bool
     */
    public function getValidEmailAddress(): ?bool
    {
        return $this->validEmailAddress;
    }

    
    /**
     * Whether the customer has verified their email address. Defaults to `true` if the customer is created through the Shopify admin or API.
     *
     * @return bool
     */
    public function getVerifiedEmail(): ?bool
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
                $instance->addresses = array_map(function($item) { return ShopifyMailingAddress::fromArray($item); }, $data['addresses']);
            }
            if (isset($data['addressesV2']) && $data['addressesV2'] !== null) {
                $instance->addressesV2 = ShopifyMailingAddressConnection::fromArray($data['addressesV2']);
            }
            if (isset($data['amountSpent']) && $data['amountSpent'] !== null) {
                $instance->amountSpent = ShopifyMoneyV2::fromArray($data['amountSpent']);
            }
            if (isset($data['canDelete']) && $data['canDelete'] !== null) {
                $instance->canDelete = $data['canDelete'];
            }
            if (isset($data['companyContactProfiles']) && $data['companyContactProfiles'] !== null) {
                $instance->companyContactProfiles = array_map(function($item) { return ShopifyCompanyContact::fromArray($item); }, $data['companyContactProfiles']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['dataSaleOptOut']) && $data['dataSaleOptOut'] !== null) {
                $instance->dataSaleOptOut = $data['dataSaleOptOut'];
            }
            if (isset($data['defaultAddress']) && $data['defaultAddress'] !== null) {
                $instance->defaultAddress = ShopifyMailingAddress::fromArray($data['defaultAddress']);
            }
            if (isset($data['defaultEmailAddress']) && $data['defaultEmailAddress'] !== null) {
                $instance->defaultEmailAddress = ShopifyCustomerEmailAddress::fromArray($data['defaultEmailAddress']);
            }
            if (isset($data['defaultPhoneNumber']) && $data['defaultPhoneNumber'] !== null) {
                $instance->defaultPhoneNumber = ShopifyCustomerPhoneNumber::fromArray($data['defaultPhoneNumber']);
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['emailMarketingConsent']) && $data['emailMarketingConsent'] !== null) {
                $instance->emailMarketingConsent = ShopifyCustomerEmailMarketingConsentState::fromArray($data['emailMarketingConsent']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
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
            if (isset($data['identityProviderSubjects']) && $data['identityProviderSubjects'] !== null) {
                $instance->identityProviderSubjects = array_map(function($item) { return ShopifyIdentityProviderSubject::fromArray($item); }, $data['identityProviderSubjects']);
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['lastOrder']) && $data['lastOrder'] !== null) {
                $instance->lastOrder = ShopifyOrder::fromArray($data['lastOrder']);
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
                $instance->market = ShopifyMarket::fromArray($data['market']);
            }
            if (isset($data['mergeable']) && $data['mergeable'] !== null) {
                $instance->mergeable = ShopifyCustomerMergeable::fromArray($data['mergeable']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
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
                $instance->orders = ShopifyOrderConnection::fromArray($data['orders']);
            }
            if (isset($data['paymentMethods']) && $data['paymentMethods'] !== null) {
                $instance->paymentMethods = ShopifyCustomerPaymentMethodConnection::fromArray($data['paymentMethods']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['productSubscriberStatus']) && $data['productSubscriberStatus'] !== null) {
                $instance->productSubscriberStatus = $data['productSubscriberStatus'];
            }
            if (isset($data['smsMarketingConsent']) && $data['smsMarketingConsent'] !== null) {
                $instance->smsMarketingConsent = ShopifyCustomerSmsMarketingConsentState::fromArray($data['smsMarketingConsent']);
            }
            if (isset($data['state']) && $data['state'] !== null) {
                $instance->state = $data['state'];
            }
            if (isset($data['statistics']) && $data['statistics'] !== null) {
                $instance->statistics = ShopifyCustomerStatistics::fromArray($data['statistics']);
            }
            if (isset($data['storeCreditAccounts']) && $data['storeCreditAccounts'] !== null) {
                $instance->storeCreditAccounts = ShopifyStoreCreditAccountConnection::fromArray($data['storeCreditAccounts']);
            }
            if (isset($data['subscriptionContracts']) && $data['subscriptionContracts'] !== null) {
                $instance->subscriptionContracts = ShopifySubscriptionContractConnection::fromArray($data['subscriptionContracts']);
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
            if (isset($data['taxSettings']) && $data['taxSettings'] !== null) {
                $instance->taxSettings = ShopifyTaxSettings::fromArray($data['taxSettings']);
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
            if ($this->identityProviderSubjects !== null) {
                $data['identityProviderSubjects'] = array_map(function($item) { return $item->asArray(); }, $this->identityProviderSubjects);
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
            if ($this->taxSettings !== null) {
                $data['taxSettings'] = $this->taxSettings->asArray();
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
