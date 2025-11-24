<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopAlert;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyProductCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyTaxonomyCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyFulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyAppConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyAvailableChannelDefinitionsByChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCountriesInShippingZones;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCurrencyFormats;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCurrencySettingConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCustomerAccountsV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyStringConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCustomerConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyDomain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyDraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyEntitlementsType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopFeatures;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyFulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyInventoryItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyLimitedPendingOrderCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyLocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMerchantApprovalSignals;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyNavigationItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyPaymentSettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopPlan;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyImageConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopResourceLimits;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifySearchResultConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifySearchFilterOptions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyStaffMemberConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyStorefrontAccessTokenConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyTranslation;

class ShopifyShop
{
    protected $accountOwner;
    protected $alerts;
    protected $allProductCategories;
    protected $allProductCategoriesList;
    protected $analyticsToken;
    protected $assignedFulfillmentOrders;
    protected $availableChannelApps;
    protected $billingAddress;
    protected $channelDefinitionsForInstalledChannels;
    protected $channels;
    protected $checkoutApiSupported;
    protected $collections;
    protected $contactEmail;
    protected $countriesInShippingZones;
    protected $createdAt;
    protected $currencyCode;
    protected $currencyFormats;
    protected $currencySettings;
    protected $customerAccounts;
    protected $customerAccountsV2;
    protected $customerTags;
    protected $customers;
    protected $description;
    protected $domains;
    protected $draftOrderTags;
    protected $draftOrders;
    protected $email;
    protected $enabledPresentmentCurrencies;
    protected $entitlements;
    protected $features;
    protected $fulfillmentOrders;
    protected $fulfillmentServices;
    protected $ianaTimezone;
    protected $id;
    protected $inventoryItems;
    protected $limitedPendingOrderCount;
    protected $locations;
    protected $marketingSmsConsentEnabledAtCheckout;
    protected $merchantApprovalSignals;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $myshopifyDomain;
    protected $name;
    protected $navigationSettings;
    protected $orderNumberFormatPrefix;
    protected $orderNumberFormatSuffix;
    protected $orderTags;
    protected $orders;
    protected $paymentSettings;
    protected $plan;
    protected $primaryDomain;
    protected $productImages;
    protected $productTags;
    protected $productTypes;
    protected $productVariants;
    protected $productVendors;
    protected $products;
    protected $publicationCount;
    protected $resourceLimits;
    protected $richTextEditorUrl;
    protected $search;
    protected $searchFilters;
    protected $setupRequired;
    protected $shipsToCountries;
    protected $shopOwnerName;
    protected $shopPolicies;
    protected $staffMembers;
    protected $storefrontAccessTokens;
    protected $storefrontUrl;
    protected $taxShipping;
    protected $taxesIncluded;
    protected $timezoneAbbreviation;
    protected $timezoneOffset;
    protected $timezoneOffsetMinutes;
    protected $transactionalSmsDisabled;
    protected $translations;
    protected $unitSystem;
    protected $updatedAt;
    protected $url;
    protected $weightUnit;

    
    /**
     * @return ShopifyStaffMember
     */
    public function getAccountOwner()
    {
        return $this->accountOwner;
    }

    
    /**
     * @return ShopifyShopAlert[]
     */
    public function getAlerts()
    {
        return $this->alerts;
    }

    
    /**
     * @return ShopifyProductCategory[]
     */
    public function getAllProductCategories()
    {
        return $this->allProductCategories;
    }

    
    /**
     * @return ShopifyTaxonomyCategory[]
     */
    public function getAllProductCategoriesList()
    {
        return $this->allProductCategoriesList;
    }

    
    /**
     * @return string
     */
    public function getAnalyticsToken()
    {
        return $this->analyticsToken;
    }

    
    /**
     * @return ShopifyFulfillmentOrderConnection
     */
    public function getAssignedFulfillmentOrders()
    {
        return $this->assignedFulfillmentOrders;
    }

    
    /**
     * @return ShopifyAppConnection
     */
    public function getAvailableChannelApps()
    {
        return $this->availableChannelApps;
    }

    
    /**
     * @return ShopifyShopAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return ShopifyAvailableChannelDefinitionsByChannel[]
     */
    public function getChannelDefinitionsForInstalledChannels()
    {
        return $this->channelDefinitionsForInstalledChannels;
    }

    
    /**
     * @return ShopifyChannelConnection
     */
    public function getChannels()
    {
        return $this->channels;
    }

    
    /**
     * @return bool
     */
    public function getCheckoutApiSupported()
    {
        return $this->checkoutApiSupported;
    }

    
    /**
     * @return ShopifyCollectionConnection
     */
    public function getCollections()
    {
        return $this->collections;
    }

    
    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    
    /**
     * @return ShopifyCountriesInShippingZones
     */
    public function getCountriesInShippingZones()
    {
        return $this->countriesInShippingZones;
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
     * @return ShopifyCurrencyFormats
     */
    public function getCurrencyFormats()
    {
        return $this->currencyFormats;
    }

    
    /**
     * @return ShopifyCurrencySettingConnection
     */
    public function getCurrencySettings()
    {
        return $this->currencySettings;
    }

    
    /**
     * @return ShopifyShopCustomerAccountsSettingEnumObject
     */
    public function getCustomerAccounts()
    {
        return $this->customerAccounts;
    }

    
    /**
     * @return ShopifyCustomerAccountsV2
     */
    public function getCustomerAccountsV2()
    {
        return $this->customerAccountsV2;
    }

    
    /**
     * @return ShopifyStringConnection
     */
    public function getCustomerTags()
    {
        return $this->customerTags;
    }

    
    /**
     * @return ShopifyCustomerConnection
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return ShopifyDomain[]
     */
    public function getDomains()
    {
        return $this->domains;
    }

    
    /**
     * @return ShopifyStringConnection
     */
    public function getDraftOrderTags()
    {
        return $this->draftOrderTags;
    }

    
    /**
     * @return ShopifyDraftOrderConnection
     */
    public function getDraftOrders()
    {
        return $this->draftOrders;
    }

    
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    
    /**
     * @return ShopifyCurrencyCodeEnumObject[]
     */
    public function getEnabledPresentmentCurrencies()
    {
        return $this->enabledPresentmentCurrencies;
    }

    
    /**
     * @return ShopifyEntitlementsType
     */
    public function getEntitlements()
    {
        return $this->entitlements;
    }

    
    /**
     * @return ShopifyShopFeatures
     */
    public function getFeatures()
    {
        return $this->features;
    }

    
    /**
     * @return ShopifyFulfillmentOrderConnection
     */
    public function getFulfillmentOrders()
    {
        return $this->fulfillmentOrders;
    }

    
    /**
     * @return ShopifyFulfillmentService[]
     */
    public function getFulfillmentServices()
    {
        return $this->fulfillmentServices;
    }

    
    /**
     * @return string
     */
    public function getIanaTimezone()
    {
        return $this->ianaTimezone;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyInventoryItemConnection
     */
    public function getInventoryItems()
    {
        return $this->inventoryItems;
    }

    
    /**
     * @return ShopifyLimitedPendingOrderCount
     */
    public function getLimitedPendingOrderCount()
    {
        return $this->limitedPendingOrderCount;
    }

    
    /**
     * @return ShopifyLocationConnection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    
    /**
     * @return bool
     */
    public function getMarketingSmsConsentEnabledAtCheckout()
    {
        return $this->marketingSmsConsentEnabledAtCheckout;
    }

    
    /**
     * @return ShopifyMerchantApprovalSignals
     */
    public function getMerchantApprovalSignals()
    {
        return $this->merchantApprovalSignals;
    }

    
    /**
     * @return ShopifyMetafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getMyshopifyDomain()
    {
        return $this->myshopifyDomain;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyNavigationItem[]
     */
    public function getNavigationSettings()
    {
        return $this->navigationSettings;
    }

    
    /**
     * @return string
     */
    public function getOrderNumberFormatPrefix()
    {
        return $this->orderNumberFormatPrefix;
    }

    
    /**
     * @return string
     */
    public function getOrderNumberFormatSuffix()
    {
        return $this->orderNumberFormatSuffix;
    }

    
    /**
     * @return ShopifyStringConnection
     */
    public function getOrderTags()
    {
        return $this->orderTags;
    }

    
    /**
     * @return ShopifyOrderConnection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    
    /**
     * @return ShopifyPaymentSettings
     */
    public function getPaymentSettings()
    {
        return $this->paymentSettings;
    }

    
    /**
     * @return ShopifyShopPlan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    
    /**
     * @return ShopifyDomain
     */
    public function getPrimaryDomain()
    {
        return $this->primaryDomain;
    }

    
    /**
     * @return ShopifyImageConnection
     */
    public function getProductImages()
    {
        return $this->productImages;
    }

    
    /**
     * @return ShopifyStringConnection
     */
    public function getProductTags()
    {
        return $this->productTags;
    }

    
    /**
     * @return ShopifyStringConnection
     */
    public function getProductTypes()
    {
        return $this->productTypes;
    }

    
    /**
     * @return ShopifyProductVariantConnection
     */
    public function getProductVariants()
    {
        return $this->productVariants;
    }

    
    /**
     * @return ShopifyStringConnection
     */
    public function getProductVendors()
    {
        return $this->productVendors;
    }

    
    /**
     * @return ShopifyProductConnection
     */
    public function getProducts()
    {
        return $this->products;
    }

    
    /**
     * @return int
     */
    public function getPublicationCount()
    {
        return $this->publicationCount;
    }

    
    /**
     * @return ShopifyShopResourceLimits
     */
    public function getResourceLimits()
    {
        return $this->resourceLimits;
    }

    
    /**
     * @return string
     */
    public function getRichTextEditorUrl()
    {
        return $this->richTextEditorUrl;
    }

    
    /**
     * @return ShopifySearchResultConnection
     */
    public function getSearch()
    {
        return $this->search;
    }

    
    /**
     * @return ShopifySearchFilterOptions
     */
    public function getSearchFilters()
    {
        return $this->searchFilters;
    }

    
    /**
     * @return bool
     */
    public function getSetupRequired()
    {
        return $this->setupRequired;
    }

    
    /**
     * @return ShopifyCountryCodeEnumObject[]
     */
    public function getShipsToCountries()
    {
        return $this->shipsToCountries;
    }

    
    /**
     * @return string
     */
    public function getShopOwnerName()
    {
        return $this->shopOwnerName;
    }

    
    /**
     * @return ShopifyShopPolicy[]
     */
    public function getShopPolicies()
    {
        return $this->shopPolicies;
    }

    
    /**
     * @return ShopifyStaffMemberConnection
     */
    public function getStaffMembers()
    {
        return $this->staffMembers;
    }

    
    /**
     * @return ShopifyStorefrontAccessTokenConnection
     */
    public function getStorefrontAccessTokens()
    {
        return $this->storefrontAccessTokens;
    }

    
    /**
     * @return string
     */
    public function getStorefrontUrl()
    {
        return $this->storefrontUrl;
    }

    
    /**
     * @return bool
     */
    public function getTaxShipping()
    {
        return $this->taxShipping;
    }

    
    /**
     * @return bool
     */
    public function getTaxesIncluded()
    {
        return $this->taxesIncluded;
    }

    
    /**
     * @return string
     */
    public function getTimezoneAbbreviation()
    {
        return $this->timezoneAbbreviation;
    }

    
    /**
     * @return string
     */
    public function getTimezoneOffset()
    {
        return $this->timezoneOffset;
    }

    
    /**
     * @return int
     */
    public function getTimezoneOffsetMinutes()
    {
        return $this->timezoneOffsetMinutes;
    }

    
    /**
     * @return bool
     */
    public function getTransactionalSmsDisabled()
    {
        return $this->transactionalSmsDisabled;
    }

    
    /**
     * @return ShopifyTranslation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    
    /**
     * @return ShopifyUnitSystemEnumObject
     */
    public function getUnitSystem()
    {
        return $this->unitSystem;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    
    /**
     * @return ShopifyWeightUnitEnumObject
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accountOwner']) && $data['accountOwner'] !== null) {
                $instance->accountOwner = ShopifyStaffMember::fromArray($data['accountOwner']);
            }
            if (isset($data['alerts']) && $data['alerts'] !== null) {
                $instance->alerts = array_map(function($item) { return ShopifyShopAlert::fromArray($item); }, $data['alerts']);
            }
            if (isset($data['allProductCategories']) && $data['allProductCategories'] !== null) {
                $instance->allProductCategories = array_map(function($item) { return ShopifyProductCategory::fromArray($item); }, $data['allProductCategories']);
            }
            if (isset($data['allProductCategoriesList']) && $data['allProductCategoriesList'] !== null) {
                $instance->allProductCategoriesList = array_map(function($item) { return ShopifyTaxonomyCategory::fromArray($item); }, $data['allProductCategoriesList']);
            }
            if (isset($data['analyticsToken']) && $data['analyticsToken'] !== null) {
                $instance->analyticsToken = $data['analyticsToken'];
            }
            if (isset($data['assignedFulfillmentOrders']) && $data['assignedFulfillmentOrders'] !== null) {
                $instance->assignedFulfillmentOrders = ShopifyFulfillmentOrderConnection::fromArray($data['assignedFulfillmentOrders']);
            }
            if (isset($data['availableChannelApps']) && $data['availableChannelApps'] !== null) {
                $instance->availableChannelApps = ShopifyAppConnection::fromArray($data['availableChannelApps']);
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyShopAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['channelDefinitionsForInstalledChannels']) && $data['channelDefinitionsForInstalledChannels'] !== null) {
                $instance->channelDefinitionsForInstalledChannels = array_map(function($item) { return ShopifyAvailableChannelDefinitionsByChannel::fromArray($item); }, $data['channelDefinitionsForInstalledChannels']);
            }
            if (isset($data['channels']) && $data['channels'] !== null) {
                $instance->channels = ShopifyChannelConnection::fromArray($data['channels']);
            }
            if (isset($data['checkoutApiSupported']) && $data['checkoutApiSupported'] !== null) {
                $instance->checkoutApiSupported = $data['checkoutApiSupported'];
            }
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = ShopifyCollectionConnection::fromArray($data['collections']);
            }
            if (isset($data['contactEmail']) && $data['contactEmail'] !== null) {
                $instance->contactEmail = $data['contactEmail'];
            }
            if (isset($data['countriesInShippingZones']) && $data['countriesInShippingZones'] !== null) {
                $instance->countriesInShippingZones = ShopifyCountriesInShippingZones::fromArray($data['countriesInShippingZones']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['currencyFormats']) && $data['currencyFormats'] !== null) {
                $instance->currencyFormats = ShopifyCurrencyFormats::fromArray($data['currencyFormats']);
            }
            if (isset($data['currencySettings']) && $data['currencySettings'] !== null) {
                $instance->currencySettings = ShopifyCurrencySettingConnection::fromArray($data['currencySettings']);
            }
            if (isset($data['customerAccounts']) && $data['customerAccounts'] !== null) {
                $instance->customerAccounts = $data['customerAccounts'];
            }
            if (isset($data['customerAccountsV2']) && $data['customerAccountsV2'] !== null) {
                $instance->customerAccountsV2 = ShopifyCustomerAccountsV2::fromArray($data['customerAccountsV2']);
            }
            if (isset($data['customerTags']) && $data['customerTags'] !== null) {
                $instance->customerTags = ShopifyStringConnection::fromArray($data['customerTags']);
            }
            if (isset($data['customers']) && $data['customers'] !== null) {
                $instance->customers = ShopifyCustomerConnection::fromArray($data['customers']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['domains']) && $data['domains'] !== null) {
                $instance->domains = array_map(function($item) { return ShopifyDomain::fromArray($item); }, $data['domains']);
            }
            if (isset($data['draftOrderTags']) && $data['draftOrderTags'] !== null) {
                $instance->draftOrderTags = ShopifyStringConnection::fromArray($data['draftOrderTags']);
            }
            if (isset($data['draftOrders']) && $data['draftOrders'] !== null) {
                $instance->draftOrders = ShopifyDraftOrderConnection::fromArray($data['draftOrders']);
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['enabledPresentmentCurrencies']) && $data['enabledPresentmentCurrencies'] !== null) {
                $instance->enabledPresentmentCurrencies = $data['enabledPresentmentCurrencies'];
            }
            if (isset($data['entitlements']) && $data['entitlements'] !== null) {
                $instance->entitlements = ShopifyEntitlementsType::fromArray($data['entitlements']);
            }
            if (isset($data['features']) && $data['features'] !== null) {
                $instance->features = ShopifyShopFeatures::fromArray($data['features']);
            }
            if (isset($data['fulfillmentOrders']) && $data['fulfillmentOrders'] !== null) {
                $instance->fulfillmentOrders = ShopifyFulfillmentOrderConnection::fromArray($data['fulfillmentOrders']);
            }
            if (isset($data['fulfillmentServices']) && $data['fulfillmentServices'] !== null) {
                $instance->fulfillmentServices = array_map(function($item) { return ShopifyFulfillmentService::fromArray($item); }, $data['fulfillmentServices']);
            }
            if (isset($data['ianaTimezone']) && $data['ianaTimezone'] !== null) {
                $instance->ianaTimezone = $data['ianaTimezone'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryItems']) && $data['inventoryItems'] !== null) {
                $instance->inventoryItems = ShopifyInventoryItemConnection::fromArray($data['inventoryItems']);
            }
            if (isset($data['limitedPendingOrderCount']) && $data['limitedPendingOrderCount'] !== null) {
                $instance->limitedPendingOrderCount = ShopifyLimitedPendingOrderCount::fromArray($data['limitedPendingOrderCount']);
            }
            if (isset($data['locations']) && $data['locations'] !== null) {
                $instance->locations = ShopifyLocationConnection::fromArray($data['locations']);
            }
            if (isset($data['marketingSmsConsentEnabledAtCheckout']) && $data['marketingSmsConsentEnabledAtCheckout'] !== null) {
                $instance->marketingSmsConsentEnabledAtCheckout = $data['marketingSmsConsentEnabledAtCheckout'];
            }
            if (isset($data['merchantApprovalSignals']) && $data['merchantApprovalSignals'] !== null) {
                $instance->merchantApprovalSignals = ShopifyMerchantApprovalSignals::fromArray($data['merchantApprovalSignals']);
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
            if (isset($data['myshopifyDomain']) && $data['myshopifyDomain'] !== null) {
                $instance->myshopifyDomain = $data['myshopifyDomain'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['navigationSettings']) && $data['navigationSettings'] !== null) {
                $instance->navigationSettings = array_map(function($item) { return ShopifyNavigationItem::fromArray($item); }, $data['navigationSettings']);
            }
            if (isset($data['orderNumberFormatPrefix']) && $data['orderNumberFormatPrefix'] !== null) {
                $instance->orderNumberFormatPrefix = $data['orderNumberFormatPrefix'];
            }
            if (isset($data['orderNumberFormatSuffix']) && $data['orderNumberFormatSuffix'] !== null) {
                $instance->orderNumberFormatSuffix = $data['orderNumberFormatSuffix'];
            }
            if (isset($data['orderTags']) && $data['orderTags'] !== null) {
                $instance->orderTags = ShopifyStringConnection::fromArray($data['orderTags']);
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = ShopifyOrderConnection::fromArray($data['orders']);
            }
            if (isset($data['paymentSettings']) && $data['paymentSettings'] !== null) {
                $instance->paymentSettings = ShopifyPaymentSettings::fromArray($data['paymentSettings']);
            }
            if (isset($data['plan']) && $data['plan'] !== null) {
                $instance->plan = ShopifyShopPlan::fromArray($data['plan']);
            }
            if (isset($data['primaryDomain']) && $data['primaryDomain'] !== null) {
                $instance->primaryDomain = ShopifyDomain::fromArray($data['primaryDomain']);
            }
            if (isset($data['productImages']) && $data['productImages'] !== null) {
                $instance->productImages = ShopifyImageConnection::fromArray($data['productImages']);
            }
            if (isset($data['productTags']) && $data['productTags'] !== null) {
                $instance->productTags = ShopifyStringConnection::fromArray($data['productTags']);
            }
            if (isset($data['productTypes']) && $data['productTypes'] !== null) {
                $instance->productTypes = ShopifyStringConnection::fromArray($data['productTypes']);
            }
            if (isset($data['productVariants']) && $data['productVariants'] !== null) {
                $instance->productVariants = ShopifyProductVariantConnection::fromArray($data['productVariants']);
            }
            if (isset($data['productVendors']) && $data['productVendors'] !== null) {
                $instance->productVendors = ShopifyStringConnection::fromArray($data['productVendors']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ShopifyProductConnection::fromArray($data['products']);
            }
            if (isset($data['publicationCount']) && $data['publicationCount'] !== null) {
                $instance->publicationCount = $data['publicationCount'];
            }
            if (isset($data['resourceLimits']) && $data['resourceLimits'] !== null) {
                $instance->resourceLimits = ShopifyShopResourceLimits::fromArray($data['resourceLimits']);
            }
            if (isset($data['richTextEditorUrl']) && $data['richTextEditorUrl'] !== null) {
                $instance->richTextEditorUrl = $data['richTextEditorUrl'];
            }
            if (isset($data['search']) && $data['search'] !== null) {
                $instance->search = ShopifySearchResultConnection::fromArray($data['search']);
            }
            if (isset($data['searchFilters']) && $data['searchFilters'] !== null) {
                $instance->searchFilters = ShopifySearchFilterOptions::fromArray($data['searchFilters']);
            }
            if (isset($data['setupRequired']) && $data['setupRequired'] !== null) {
                $instance->setupRequired = $data['setupRequired'];
            }
            if (isset($data['shipsToCountries']) && $data['shipsToCountries'] !== null) {
                $instance->shipsToCountries = $data['shipsToCountries'];
            }
            if (isset($data['shopOwnerName']) && $data['shopOwnerName'] !== null) {
                $instance->shopOwnerName = $data['shopOwnerName'];
            }
            if (isset($data['shopPolicies']) && $data['shopPolicies'] !== null) {
                $instance->shopPolicies = array_map(function($item) { return ShopifyShopPolicy::fromArray($item); }, $data['shopPolicies']);
            }
            if (isset($data['staffMembers']) && $data['staffMembers'] !== null) {
                $instance->staffMembers = ShopifyStaffMemberConnection::fromArray($data['staffMembers']);
            }
            if (isset($data['storefrontAccessTokens']) && $data['storefrontAccessTokens'] !== null) {
                $instance->storefrontAccessTokens = ShopifyStorefrontAccessTokenConnection::fromArray($data['storefrontAccessTokens']);
            }
            if (isset($data['storefrontUrl']) && $data['storefrontUrl'] !== null) {
                $instance->storefrontUrl = $data['storefrontUrl'];
            }
            if (isset($data['taxShipping']) && $data['taxShipping'] !== null) {
                $instance->taxShipping = $data['taxShipping'];
            }
            if (isset($data['taxesIncluded']) && $data['taxesIncluded'] !== null) {
                $instance->taxesIncluded = $data['taxesIncluded'];
            }
            if (isset($data['timezoneAbbreviation']) && $data['timezoneAbbreviation'] !== null) {
                $instance->timezoneAbbreviation = $data['timezoneAbbreviation'];
            }
            if (isset($data['timezoneOffset']) && $data['timezoneOffset'] !== null) {
                $instance->timezoneOffset = $data['timezoneOffset'];
            }
            if (isset($data['timezoneOffsetMinutes']) && $data['timezoneOffsetMinutes'] !== null) {
                $instance->timezoneOffsetMinutes = $data['timezoneOffsetMinutes'];
            }
            if (isset($data['transactionalSmsDisabled']) && $data['transactionalSmsDisabled'] !== null) {
                $instance->transactionalSmsDisabled = $data['transactionalSmsDisabled'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
            }
            if (isset($data['unitSystem']) && $data['unitSystem'] !== null) {
                $instance->unitSystem = $data['unitSystem'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
            }
            if (isset($data['weightUnit']) && $data['weightUnit'] !== null) {
                $instance->weightUnit = $data['weightUnit'];
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
            if ($this->accountOwner !== null) {
                $data['accountOwner'] = $this->accountOwner->asArray();
            }
            if ($this->alerts !== null) {
                $data['alerts'] = array_map(function($item) { return $item->asArray(); }, $this->alerts);
            }
            if ($this->allProductCategories !== null) {
                $data['allProductCategories'] = array_map(function($item) { return $item->asArray(); }, $this->allProductCategories);
            }
            if ($this->allProductCategoriesList !== null) {
                $data['allProductCategoriesList'] = array_map(function($item) { return $item->asArray(); }, $this->allProductCategoriesList);
            }
            if ($this->analyticsToken !== null) {
                $data['analyticsToken'] = $this->analyticsToken;
            }
            if ($this->assignedFulfillmentOrders !== null) {
                $data['assignedFulfillmentOrders'] = $this->assignedFulfillmentOrders->asArray();
            }
            if ($this->availableChannelApps !== null) {
                $data['availableChannelApps'] = $this->availableChannelApps->asArray();
            }
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->channelDefinitionsForInstalledChannels !== null) {
                $data['channelDefinitionsForInstalledChannels'] = array_map(function($item) { return $item->asArray(); }, $this->channelDefinitionsForInstalledChannels);
            }
            if ($this->channels !== null) {
                $data['channels'] = $this->channels->asArray();
            }
            if ($this->checkoutApiSupported !== null) {
                $data['checkoutApiSupported'] = $this->checkoutApiSupported;
            }
            if ($this->collections !== null) {
                $data['collections'] = $this->collections->asArray();
            }
            if ($this->contactEmail !== null) {
                $data['contactEmail'] = $this->contactEmail;
            }
            if ($this->countriesInShippingZones !== null) {
                $data['countriesInShippingZones'] = $this->countriesInShippingZones->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currencyCode !== null) {
                $data['currencyCode'] = $this->currencyCode;
            }
            if ($this->currencyFormats !== null) {
                $data['currencyFormats'] = $this->currencyFormats->asArray();
            }
            if ($this->currencySettings !== null) {
                $data['currencySettings'] = $this->currencySettings->asArray();
            }
            if ($this->customerAccounts !== null) {
                $data['customerAccounts'] = $this->customerAccounts;
            }
            if ($this->customerAccountsV2 !== null) {
                $data['customerAccountsV2'] = $this->customerAccountsV2->asArray();
            }
            if ($this->customerTags !== null) {
                $data['customerTags'] = $this->customerTags->asArray();
            }
            if ($this->customers !== null) {
                $data['customers'] = $this->customers->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->domains !== null) {
                $data['domains'] = array_map(function($item) { return $item->asArray(); }, $this->domains);
            }
            if ($this->draftOrderTags !== null) {
                $data['draftOrderTags'] = $this->draftOrderTags->asArray();
            }
            if ($this->draftOrders !== null) {
                $data['draftOrders'] = $this->draftOrders->asArray();
            }
            if ($this->email !== null) {
                $data['email'] = $this->email;
            }
            if ($this->enabledPresentmentCurrencies !== null) {
                $data['enabledPresentmentCurrencies'] = $this->enabledPresentmentCurrencies;
            }
            if ($this->entitlements !== null) {
                $data['entitlements'] = $this->entitlements->asArray();
            }
            if ($this->features !== null) {
                $data['features'] = $this->features->asArray();
            }
            if ($this->fulfillmentOrders !== null) {
                $data['fulfillmentOrders'] = $this->fulfillmentOrders->asArray();
            }
            if ($this->fulfillmentServices !== null) {
                $data['fulfillmentServices'] = array_map(function($item) { return $item->asArray(); }, $this->fulfillmentServices);
            }
            if ($this->ianaTimezone !== null) {
                $data['ianaTimezone'] = $this->ianaTimezone;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inventoryItems !== null) {
                $data['inventoryItems'] = $this->inventoryItems->asArray();
            }
            if ($this->limitedPendingOrderCount !== null) {
                $data['limitedPendingOrderCount'] = $this->limitedPendingOrderCount->asArray();
            }
            if ($this->locations !== null) {
                $data['locations'] = $this->locations->asArray();
            }
            if ($this->marketingSmsConsentEnabledAtCheckout !== null) {
                $data['marketingSmsConsentEnabledAtCheckout'] = $this->marketingSmsConsentEnabledAtCheckout;
            }
            if ($this->merchantApprovalSignals !== null) {
                $data['merchantApprovalSignals'] = $this->merchantApprovalSignals->asArray();
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
            if ($this->myshopifyDomain !== null) {
                $data['myshopifyDomain'] = $this->myshopifyDomain;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->navigationSettings !== null) {
                $data['navigationSettings'] = array_map(function($item) { return $item->asArray(); }, $this->navigationSettings);
            }
            if ($this->orderNumberFormatPrefix !== null) {
                $data['orderNumberFormatPrefix'] = $this->orderNumberFormatPrefix;
            }
            if ($this->orderNumberFormatSuffix !== null) {
                $data['orderNumberFormatSuffix'] = $this->orderNumberFormatSuffix;
            }
            if ($this->orderTags !== null) {
                $data['orderTags'] = $this->orderTags->asArray();
            }
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->paymentSettings !== null) {
                $data['paymentSettings'] = $this->paymentSettings->asArray();
            }
            if ($this->plan !== null) {
                $data['plan'] = $this->plan->asArray();
            }
            if ($this->primaryDomain !== null) {
                $data['primaryDomain'] = $this->primaryDomain->asArray();
            }
            if ($this->productImages !== null) {
                $data['productImages'] = $this->productImages->asArray();
            }
            if ($this->productTags !== null) {
                $data['productTags'] = $this->productTags->asArray();
            }
            if ($this->productTypes !== null) {
                $data['productTypes'] = $this->productTypes->asArray();
            }
            if ($this->productVariants !== null) {
                $data['productVariants'] = $this->productVariants->asArray();
            }
            if ($this->productVendors !== null) {
                $data['productVendors'] = $this->productVendors->asArray();
            }
            if ($this->products !== null) {
                $data['products'] = $this->products->asArray();
            }
            if ($this->publicationCount !== null) {
                $data['publicationCount'] = $this->publicationCount;
            }
            if ($this->resourceLimits !== null) {
                $data['resourceLimits'] = $this->resourceLimits->asArray();
            }
            if ($this->richTextEditorUrl !== null) {
                $data['richTextEditorUrl'] = $this->richTextEditorUrl;
            }
            if ($this->search !== null) {
                $data['search'] = $this->search->asArray();
            }
            if ($this->searchFilters !== null) {
                $data['searchFilters'] = $this->searchFilters->asArray();
            }
            if ($this->setupRequired !== null) {
                $data['setupRequired'] = $this->setupRequired;
            }
            if ($this->shipsToCountries !== null) {
                $data['shipsToCountries'] = $this->shipsToCountries;
            }
            if ($this->shopOwnerName !== null) {
                $data['shopOwnerName'] = $this->shopOwnerName;
            }
            if ($this->shopPolicies !== null) {
                $data['shopPolicies'] = array_map(function($item) { return $item->asArray(); }, $this->shopPolicies);
            }
            if ($this->staffMembers !== null) {
                $data['staffMembers'] = $this->staffMembers->asArray();
            }
            if ($this->storefrontAccessTokens !== null) {
                $data['storefrontAccessTokens'] = $this->storefrontAccessTokens->asArray();
            }
            if ($this->storefrontUrl !== null) {
                $data['storefrontUrl'] = $this->storefrontUrl;
            }
            if ($this->taxShipping !== null) {
                $data['taxShipping'] = $this->taxShipping;
            }
            if ($this->taxesIncluded !== null) {
                $data['taxesIncluded'] = $this->taxesIncluded;
            }
            if ($this->timezoneAbbreviation !== null) {
                $data['timezoneAbbreviation'] = $this->timezoneAbbreviation;
            }
            if ($this->timezoneOffset !== null) {
                $data['timezoneOffset'] = $this->timezoneOffset;
            }
            if ($this->timezoneOffsetMinutes !== null) {
                $data['timezoneOffsetMinutes'] = $this->timezoneOffsetMinutes;
            }
            if ($this->transactionalSmsDisabled !== null) {
                $data['transactionalSmsDisabled'] = $this->transactionalSmsDisabled;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            if ($this->unitSystem !== null) {
                $data['unitSystem'] = $this->unitSystem;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            if ($this->weightUnit !== null) {
                $data['weightUnit'] = $this->weightUnit;
            }
            return $data;
        }
}
