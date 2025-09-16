<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopAlert;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TaxonomyCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AvailableChannelDefinitionsByChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CountriesInShippingZones;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CurrencyFormats;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CurrencySettingConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerAccountsV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StringConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Domain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EntitlementsType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopFeatures;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LimitedPendingOrderCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MerchantApprovalSignals;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\NavigationItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PaymentSettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPlan;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ImageConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopResourceLimits;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SearchResultConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SearchFilterOptions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StaffMemberConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StorefrontAccessTokenConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Translation;

class Shop
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
     * @return StaffMember
     */
    public function getAccountOwner()
    {
        return $this->accountOwner;
    }

    
    /**
     * @return ShopAlert[]
     */
    public function getAlerts()
    {
        return $this->alerts;
    }

    
    /**
     * @return ProductCategory[]
     */
    public function getAllProductCategories()
    {
        return $this->allProductCategories;
    }

    
    /**
     * @return TaxonomyCategory[]
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
     * @return FulfillmentOrderConnection
     */
    public function getAssignedFulfillmentOrders()
    {
        return $this->assignedFulfillmentOrders;
    }

    
    /**
     * @return AppConnection
     */
    public function getAvailableChannelApps()
    {
        return $this->availableChannelApps;
    }

    
    /**
     * @return ShopAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return AvailableChannelDefinitionsByChannel[]
     */
    public function getChannelDefinitionsForInstalledChannels()
    {
        return $this->channelDefinitionsForInstalledChannels;
    }

    
    /**
     * @return ChannelConnection
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
     * @return CollectionConnection
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
     * @return CountriesInShippingZones
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
     * @return CurrencyCodeEnumObject
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    
    /**
     * @return CurrencyFormats
     */
    public function getCurrencyFormats()
    {
        return $this->currencyFormats;
    }

    
    /**
     * @return CurrencySettingConnection
     */
    public function getCurrencySettings()
    {
        return $this->currencySettings;
    }

    
    /**
     * @return ShopCustomerAccountsSettingEnumObject
     */
    public function getCustomerAccounts()
    {
        return $this->customerAccounts;
    }

    
    /**
     * @return CustomerAccountsV2
     */
    public function getCustomerAccountsV2()
    {
        return $this->customerAccountsV2;
    }

    
    /**
     * @return StringConnection
     */
    public function getCustomerTags()
    {
        return $this->customerTags;
    }

    
    /**
     * @return CustomerConnection
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
     * @return Domain[]
     */
    public function getDomains()
    {
        return $this->domains;
    }

    
    /**
     * @return StringConnection
     */
    public function getDraftOrderTags()
    {
        return $this->draftOrderTags;
    }

    
    /**
     * @return DraftOrderConnection
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
     * @return CurrencyCodeEnumObject[]
     */
    public function getEnabledPresentmentCurrencies()
    {
        return $this->enabledPresentmentCurrencies;
    }

    
    /**
     * @return EntitlementsType
     */
    public function getEntitlements()
    {
        return $this->entitlements;
    }

    
    /**
     * @return ShopFeatures
     */
    public function getFeatures()
    {
        return $this->features;
    }

    
    /**
     * @return FulfillmentOrderConnection
     */
    public function getFulfillmentOrders()
    {
        return $this->fulfillmentOrders;
    }

    
    /**
     * @return FulfillmentService[]
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
     * @return InventoryItemConnection
     */
    public function getInventoryItems()
    {
        return $this->inventoryItems;
    }

    
    /**
     * @return LimitedPendingOrderCount
     */
    public function getLimitedPendingOrderCount()
    {
        return $this->limitedPendingOrderCount;
    }

    
    /**
     * @return LocationConnection
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
     * @return MerchantApprovalSignals
     */
    public function getMerchantApprovalSignals()
    {
        return $this->merchantApprovalSignals;
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
     * @return NavigationItem[]
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
     * @return StringConnection
     */
    public function getOrderTags()
    {
        return $this->orderTags;
    }

    
    /**
     * @return OrderConnection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    
    /**
     * @return PaymentSettings
     */
    public function getPaymentSettings()
    {
        return $this->paymentSettings;
    }

    
    /**
     * @return ShopPlan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    
    /**
     * @return Domain
     */
    public function getPrimaryDomain()
    {
        return $this->primaryDomain;
    }

    
    /**
     * @return ImageConnection
     */
    public function getProductImages()
    {
        return $this->productImages;
    }

    
    /**
     * @return StringConnection
     */
    public function getProductTags()
    {
        return $this->productTags;
    }

    
    /**
     * @return StringConnection
     */
    public function getProductTypes()
    {
        return $this->productTypes;
    }

    
    /**
     * @return ProductVariantConnection
     */
    public function getProductVariants()
    {
        return $this->productVariants;
    }

    
    /**
     * @return StringConnection
     */
    public function getProductVendors()
    {
        return $this->productVendors;
    }

    
    /**
     * @return ProductConnection
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
     * @return ShopResourceLimits
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
     * @return SearchResultConnection
     */
    public function getSearch()
    {
        return $this->search;
    }

    
    /**
     * @return SearchFilterOptions
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
     * @return CountryCodeEnumObject[]
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
     * @return ShopPolicy[]
     */
    public function getShopPolicies()
    {
        return $this->shopPolicies;
    }

    
    /**
     * @return StaffMemberConnection
     */
    public function getStaffMembers()
    {
        return $this->staffMembers;
    }

    
    /**
     * @return StorefrontAccessTokenConnection
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
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    
    /**
     * @return UnitSystemEnumObject
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
     * @return WeightUnitEnumObject
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
                $instance->accountOwner = StaffMember::fromArray($data['accountOwner']);
            }
            if (isset($data['alerts']) && $data['alerts'] !== null) {
                $instance->alerts = array_map(function($item) { return ShopAlert::fromArray($item); }, $data['alerts']);
            }
            if (isset($data['allProductCategories']) && $data['allProductCategories'] !== null) {
                $instance->allProductCategories = array_map(function($item) { return ProductCategory::fromArray($item); }, $data['allProductCategories']);
            }
            if (isset($data['allProductCategoriesList']) && $data['allProductCategoriesList'] !== null) {
                $instance->allProductCategoriesList = array_map(function($item) { return TaxonomyCategory::fromArray($item); }, $data['allProductCategoriesList']);
            }
            if (isset($data['analyticsToken']) && $data['analyticsToken'] !== null) {
                $instance->analyticsToken = $data['analyticsToken'];
            }
            if (isset($data['assignedFulfillmentOrders']) && $data['assignedFulfillmentOrders'] !== null) {
                $instance->assignedFulfillmentOrders = FulfillmentOrderConnection::fromArray($data['assignedFulfillmentOrders']);
            }
            if (isset($data['availableChannelApps']) && $data['availableChannelApps'] !== null) {
                $instance->availableChannelApps = AppConnection::fromArray($data['availableChannelApps']);
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['channelDefinitionsForInstalledChannels']) && $data['channelDefinitionsForInstalledChannels'] !== null) {
                $instance->channelDefinitionsForInstalledChannels = array_map(function($item) { return AvailableChannelDefinitionsByChannel::fromArray($item); }, $data['channelDefinitionsForInstalledChannels']);
            }
            if (isset($data['channels']) && $data['channels'] !== null) {
                $instance->channels = ChannelConnection::fromArray($data['channels']);
            }
            if (isset($data['checkoutApiSupported']) && $data['checkoutApiSupported'] !== null) {
                $instance->checkoutApiSupported = $data['checkoutApiSupported'];
            }
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = CollectionConnection::fromArray($data['collections']);
            }
            if (isset($data['contactEmail']) && $data['contactEmail'] !== null) {
                $instance->contactEmail = $data['contactEmail'];
            }
            if (isset($data['countriesInShippingZones']) && $data['countriesInShippingZones'] !== null) {
                $instance->countriesInShippingZones = CountriesInShippingZones::fromArray($data['countriesInShippingZones']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['currencyFormats']) && $data['currencyFormats'] !== null) {
                $instance->currencyFormats = CurrencyFormats::fromArray($data['currencyFormats']);
            }
            if (isset($data['currencySettings']) && $data['currencySettings'] !== null) {
                $instance->currencySettings = CurrencySettingConnection::fromArray($data['currencySettings']);
            }
            if (isset($data['customerAccounts']) && $data['customerAccounts'] !== null) {
                $instance->customerAccounts = $data['customerAccounts'];
            }
            if (isset($data['customerAccountsV2']) && $data['customerAccountsV2'] !== null) {
                $instance->customerAccountsV2 = CustomerAccountsV2::fromArray($data['customerAccountsV2']);
            }
            if (isset($data['customerTags']) && $data['customerTags'] !== null) {
                $instance->customerTags = StringConnection::fromArray($data['customerTags']);
            }
            if (isset($data['customers']) && $data['customers'] !== null) {
                $instance->customers = CustomerConnection::fromArray($data['customers']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['domains']) && $data['domains'] !== null) {
                $instance->domains = array_map(function($item) { return Domain::fromArray($item); }, $data['domains']);
            }
            if (isset($data['draftOrderTags']) && $data['draftOrderTags'] !== null) {
                $instance->draftOrderTags = StringConnection::fromArray($data['draftOrderTags']);
            }
            if (isset($data['draftOrders']) && $data['draftOrders'] !== null) {
                $instance->draftOrders = DraftOrderConnection::fromArray($data['draftOrders']);
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['enabledPresentmentCurrencies']) && $data['enabledPresentmentCurrencies'] !== null) {
                $instance->enabledPresentmentCurrencies = $data['enabledPresentmentCurrencies'];
            }
            if (isset($data['entitlements']) && $data['entitlements'] !== null) {
                $instance->entitlements = EntitlementsType::fromArray($data['entitlements']);
            }
            if (isset($data['features']) && $data['features'] !== null) {
                $instance->features = ShopFeatures::fromArray($data['features']);
            }
            if (isset($data['fulfillmentOrders']) && $data['fulfillmentOrders'] !== null) {
                $instance->fulfillmentOrders = FulfillmentOrderConnection::fromArray($data['fulfillmentOrders']);
            }
            if (isset($data['fulfillmentServices']) && $data['fulfillmentServices'] !== null) {
                $instance->fulfillmentServices = array_map(function($item) { return FulfillmentService::fromArray($item); }, $data['fulfillmentServices']);
            }
            if (isset($data['ianaTimezone']) && $data['ianaTimezone'] !== null) {
                $instance->ianaTimezone = $data['ianaTimezone'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryItems']) && $data['inventoryItems'] !== null) {
                $instance->inventoryItems = InventoryItemConnection::fromArray($data['inventoryItems']);
            }
            if (isset($data['limitedPendingOrderCount']) && $data['limitedPendingOrderCount'] !== null) {
                $instance->limitedPendingOrderCount = LimitedPendingOrderCount::fromArray($data['limitedPendingOrderCount']);
            }
            if (isset($data['locations']) && $data['locations'] !== null) {
                $instance->locations = LocationConnection::fromArray($data['locations']);
            }
            if (isset($data['marketingSmsConsentEnabledAtCheckout']) && $data['marketingSmsConsentEnabledAtCheckout'] !== null) {
                $instance->marketingSmsConsentEnabledAtCheckout = $data['marketingSmsConsentEnabledAtCheckout'];
            }
            if (isset($data['merchantApprovalSignals']) && $data['merchantApprovalSignals'] !== null) {
                $instance->merchantApprovalSignals = MerchantApprovalSignals::fromArray($data['merchantApprovalSignals']);
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
            if (isset($data['myshopifyDomain']) && $data['myshopifyDomain'] !== null) {
                $instance->myshopifyDomain = $data['myshopifyDomain'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['navigationSettings']) && $data['navigationSettings'] !== null) {
                $instance->navigationSettings = array_map(function($item) { return NavigationItem::fromArray($item); }, $data['navigationSettings']);
            }
            if (isset($data['orderNumberFormatPrefix']) && $data['orderNumberFormatPrefix'] !== null) {
                $instance->orderNumberFormatPrefix = $data['orderNumberFormatPrefix'];
            }
            if (isset($data['orderNumberFormatSuffix']) && $data['orderNumberFormatSuffix'] !== null) {
                $instance->orderNumberFormatSuffix = $data['orderNumberFormatSuffix'];
            }
            if (isset($data['orderTags']) && $data['orderTags'] !== null) {
                $instance->orderTags = StringConnection::fromArray($data['orderTags']);
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = OrderConnection::fromArray($data['orders']);
            }
            if (isset($data['paymentSettings']) && $data['paymentSettings'] !== null) {
                $instance->paymentSettings = PaymentSettings::fromArray($data['paymentSettings']);
            }
            if (isset($data['plan']) && $data['plan'] !== null) {
                $instance->plan = ShopPlan::fromArray($data['plan']);
            }
            if (isset($data['primaryDomain']) && $data['primaryDomain'] !== null) {
                $instance->primaryDomain = Domain::fromArray($data['primaryDomain']);
            }
            if (isset($data['productImages']) && $data['productImages'] !== null) {
                $instance->productImages = ImageConnection::fromArray($data['productImages']);
            }
            if (isset($data['productTags']) && $data['productTags'] !== null) {
                $instance->productTags = StringConnection::fromArray($data['productTags']);
            }
            if (isset($data['productTypes']) && $data['productTypes'] !== null) {
                $instance->productTypes = StringConnection::fromArray($data['productTypes']);
            }
            if (isset($data['productVariants']) && $data['productVariants'] !== null) {
                $instance->productVariants = ProductVariantConnection::fromArray($data['productVariants']);
            }
            if (isset($data['productVendors']) && $data['productVendors'] !== null) {
                $instance->productVendors = StringConnection::fromArray($data['productVendors']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ProductConnection::fromArray($data['products']);
            }
            if (isset($data['publicationCount']) && $data['publicationCount'] !== null) {
                $instance->publicationCount = $data['publicationCount'];
            }
            if (isset($data['resourceLimits']) && $data['resourceLimits'] !== null) {
                $instance->resourceLimits = ShopResourceLimits::fromArray($data['resourceLimits']);
            }
            if (isset($data['richTextEditorUrl']) && $data['richTextEditorUrl'] !== null) {
                $instance->richTextEditorUrl = $data['richTextEditorUrl'];
            }
            if (isset($data['search']) && $data['search'] !== null) {
                $instance->search = SearchResultConnection::fromArray($data['search']);
            }
            if (isset($data['searchFilters']) && $data['searchFilters'] !== null) {
                $instance->searchFilters = SearchFilterOptions::fromArray($data['searchFilters']);
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
                $instance->shopPolicies = array_map(function($item) { return ShopPolicy::fromArray($item); }, $data['shopPolicies']);
            }
            if (isset($data['staffMembers']) && $data['staffMembers'] !== null) {
                $instance->staffMembers = StaffMemberConnection::fromArray($data['staffMembers']);
            }
            if (isset($data['storefrontAccessTokens']) && $data['storefrontAccessTokens'] !== null) {
                $instance->storefrontAccessTokens = StorefrontAccessTokenConnection::fromArray($data['storefrontAccessTokens']);
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
                $instance->translations = array_map(function($item) { return Translation::fromArray($item); }, $data['translations']);
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
