<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopAlert;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTaxonomyCategory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAnalyticsAnnotationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAvailableChannelDefinitionsByChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCountriesInShippingZones;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCurrencyFormats;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCurrencySettingConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerAccountsV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStringConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDomain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyEntitlementsType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopFeatures;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLimitedPendingOrderCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMerchantApprovalSignals;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyNavigationItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPaymentSettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopPlan;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyImageConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopResourceLimits;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySearchResultConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySearchFilterOptions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStaffMemberConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStorefrontAccessTokenConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTranslation;

/**
 * The central configuration and settings hub for a Shopify store. Access business information, operational preferences, feature availability, and store-wide settings that control how the shop operates.
 *
 * Includes core business details like the shop name, contact emails, billing address, and currency settings. The shop configuration determines customer account requirements, available sales channels, enabled features, payment settings, and policy documents. Also provides access to shop-level resources such as staff members, fulfillment services, navigation settings, and storefront access tokens.
 */
class ShopifyShop implements ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyHasPublishedTranslations, ShopifyNode
{
    protected $accountOwner;
    protected $alerts;
    protected $allProductCategories;
    protected $allProductCategoriesList;
    protected $analyticsAnnotations;
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
    protected $shopAddress;
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
     * Account owner information.
     *
     * @return ShopifyStaffMember
     */
    public function getAccountOwner(): ?ShopifyStaffMember
    {
        return $this->accountOwner;
    }

    
    /**
     * A list of the shop's active alert messages that appear in the Shopify admin.
     *
     * @return ShopifyShopAlert[]
     */
    public function getAlerts(): ?array
    {
        return $this->alerts;
    }

    
    /**
     * A list of the shop's product categories. Limit: 500 product categories.
     *
     * @return ShopifyProductCategory[]
     */
    public function getAllProductCategories(): ?array
    {
        return $this->allProductCategories;
    }

    
    /**
     * A list of the shop's product categories. Limit: 500 product categories.
     *
     * @return ShopifyTaxonomyCategory[]
     */
    public function getAllProductCategoriesList(): ?array
    {
        return $this->allProductCategoriesList;
    }

    
    /**
     * Returns a paginated list of [analytics annotations](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsAnnotation)
     * for the shop, including Shopify-generated annotations and annotations created by staff members or apps.
     * Annotations are markers that can be overlaid on analytics charts to give merchants context for changes in
     * their metrics.
     *
     * Supports filtering by title, type, source, start date and time, end date and time, creation date and time, and
     * update date and time. Results can be sorted by ID or by any of the supported date and time fields. Use the
     * [`analyticsAnnotationCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsAnnotationCreate)
     * mutation to add new app-created annotations.
     *
     * @return ShopifyAnalyticsAnnotationConnection
     */
    public function getAnalyticsAnnotations(): ?ShopifyAnalyticsAnnotationConnection
    {
        return $this->analyticsAnnotations;
    }

    
    /**
     * The token required to query the shop's reports or dashboards.
     *
     * @return string
     */
    public function getAnalyticsToken(): ?string
    {
        return $this->analyticsToken;
    }

    
    /**
     * The paginated list of fulfillment orders assigned to the shop locations owned by the app.
     *
     * Assigned fulfillment orders are fulfillment orders that are set to be fulfilled from locations
     * managed by
     * [fulfillment services](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentService)
     * that are registered by the app.
     * One app (api_client) can host multiple fulfillment services on a shop.
     * Each fulfillment service manages a dedicated location on a shop.
     * Assigned fulfillment orders can have associated
     * [fulfillment requests](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderRequestStatus),
     * or might currently not be requested to be fulfilled.
     *
     * The app must have `read_assigned_fulfillment_orders`
     * [access scope](https://shopify.dev/docs/api/usage/access-scopes)
     * to be able to retrieve fulfillment orders assigned to its locations.
     *
     * All assigned fulfillment orders (except those with the `CLOSED` status) will be returned by default.
     * Perform filtering with the `assignmentStatus` argument
     * to receive only fulfillment orders that have been requested to be fulfilled.
     *
     * @return ShopifyFulfillmentOrderConnection
     */
    public function getAssignedFulfillmentOrders(): ?ShopifyFulfillmentOrderConnection
    {
        return $this->assignedFulfillmentOrders;
    }

    
    /**
     * The list of sales channels not currently installed on the shop.
     *
     * @return ShopifyAppConnection
     */
    public function getAvailableChannelApps(): ?ShopifyAppConnection
    {
        return $this->availableChannelApps;
    }

    
    /**
     * The shop's billing address information.
     *
     * @return ShopifyShopAddress
     */
    public function getBillingAddress(): ?ShopifyShopAddress
    {
        return $this->billingAddress;
    }

    
    /**
     * List of all channel definitions associated with a shop.
     *
     * @return ShopifyAvailableChannelDefinitionsByChannel[]
     */
    public function getChannelDefinitionsForInstalledChannels(): ?array
    {
        return $this->channelDefinitionsForInstalledChannels;
    }

    
    /**
     * List of the shop's active sales channels.
     *
     * @return ShopifyChannelConnection
     */
    public function getChannels(): ?ShopifyChannelConnection
    {
        return $this->channels;
    }

    
    /**
     * Specifies whether the shop supports checkouts via Checkout API.
     *
     * @return bool
     */
    public function getCheckoutApiSupported(): ?bool
    {
        return $this->checkoutApiSupported;
    }

    
    /**
     * List of the shop's collections.
     *
     * @return ShopifyCollectionConnection
     */
    public function getCollections(): ?ShopifyCollectionConnection
    {
        return $this->collections;
    }

    
    /**
     * The public-facing contact email address for the shop.
     * Customers will use this email to communicate with the shop owner.
     *
     * @return string
     */
    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    
    /**
     * Countries that have been defined in shipping zones for the shop.
     *
     * @return ShopifyCountriesInShippingZones
     */
    public function getCountriesInShippingZones(): ?ShopifyCountriesInShippingZones
    {
        return $this->countriesInShippingZones;
    }

    
    /**
     * The date and time when the shop was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The three letter code for the currency that the shop sells in.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    
    /**
     * How currencies are displayed on your store.
     *
     * @return ShopifyCurrencyFormats
     */
    public function getCurrencyFormats(): ?ShopifyCurrencyFormats
    {
        return $this->currencyFormats;
    }

    
    /**
     * The presentment currency settings for the shop excluding the shop's own currency.
     *
     * @return ShopifyCurrencySettingConnection
     */
    public function getCurrencySettings(): ?ShopifyCurrencySettingConnection
    {
        return $this->currencySettings;
    }

    
    /**
     * Whether customer accounts are required, optional, or disabled for the shop.
     *
     * @return string A ShopifyShopCustomerAccountsSettingEnumObject value
     */
    public function getCustomerAccounts(): ?string
    {
        return $this->customerAccounts;
    }

    
    /**
     * Information about the shop's customer accounts.
     *
     * @return ShopifyCustomerAccountsV2
     */
    public function getCustomerAccountsV2(): ?ShopifyCustomerAccountsV2
    {
        return $this->customerAccountsV2;
    }

    
    /**
     * A list of tags that have been added to customer accounts.
     *
     * @return ShopifyStringConnection
     */
    public function getCustomerTags(): ?ShopifyStringConnection
    {
        return $this->customerTags;
    }

    
    /**
     * Customer accounts associated to the shop.
     *
     * @return ShopifyCustomerConnection
     */
    public function getCustomers(): ?ShopifyCustomerConnection
    {
        return $this->customers;
    }

    
    /**
     * The shop's meta description used in search engine results.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The domains configured for the shop.
     *
     * @return ShopifyDomain[]
     */
    public function getDomains(): ?array
    {
        return $this->domains;
    }

    
    /**
     * A list of tags that have been added to draft orders.
     *
     * @return ShopifyStringConnection
     */
    public function getDraftOrderTags(): ?ShopifyStringConnection
    {
        return $this->draftOrderTags;
    }

    
    /**
     * The shop owner's email address.
     * Shopify will use this email address to communicate with the shop owner.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    
    /**
     * The presentment currencies enabled for the shop.
     *
     * @return string[] ShopifyCurrencyCodeEnumObject values
     */
    public function getEnabledPresentmentCurrencies(): ?array
    {
        return $this->enabledPresentmentCurrencies;
    }

    
    /**
     * The entitlements for a shop.
     *
     * @return ShopifyEntitlementsType
     */
    public function getEntitlements(): ?ShopifyEntitlementsType
    {
        return $this->entitlements;
    }

    
    /**
     * The set of features enabled for the shop.
     *
     * @return ShopifyShopFeatures
     */
    public function getFeatures(): ?ShopifyShopFeatures
    {
        return $this->features;
    }

    
    /**
     * The paginated list of merchant-managed and third-party fulfillment orders.
     *
     * @return ShopifyFulfillmentOrderConnection
     */
    public function getFulfillmentOrders(): ?ShopifyFulfillmentOrderConnection
    {
        return $this->fulfillmentOrders;
    }

    
    /**
     * List of the shop's installed fulfillment services.
     *
     * @return ShopifyFulfillmentService[]
     */
    public function getFulfillmentServices(): ?array
    {
        return $this->fulfillmentServices;
    }

    
    /**
     * The shop's time zone as defined by the IANA.
     *
     * @return string
     */
    public function getIanaTimezone(): ?string
    {
        return $this->ianaTimezone;
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
     * List of the shop's inventory items.
     *
     * @return ShopifyInventoryItemConnection
     */
    public function getInventoryItems(): ?ShopifyInventoryItemConnection
    {
        return $this->inventoryItems;
    }

    
    /**
     * The number of pending orders on the shop.
     * Limited to a maximum of 10000.
     *
     * @return ShopifyLimitedPendingOrderCount
     */
    public function getLimitedPendingOrderCount(): ?ShopifyLimitedPendingOrderCount
    {
        return $this->limitedPendingOrderCount;
    }

    
    /**
     * List of active locations of the shop.
     *
     * @return ShopifyLocationConnection
     */
    public function getLocations(): ?ShopifyLocationConnection
    {
        return $this->locations;
    }

    
    /**
     * Whether SMS marketing has been enabled on the shop's checkout configuration settings.
     *
     * @return bool
     */
    public function getMarketingSmsConsentEnabledAtCheckout(): ?bool
    {
        return $this->marketingSmsConsentEnabledAtCheckout;
    }

    
    /**
     * The approval signals for a shop to support onboarding to channel apps.
     *
     * @return ShopifyMerchantApprovalSignals
     */
    public function getMerchantApprovalSignals(): ?ShopifyMerchantApprovalSignals
    {
        return $this->merchantApprovalSignals;
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
     * The shop's .myshopify.com domain name.
     *
     * @return string
     */
    public function getMyshopifyDomain(): ?string
    {
        return $this->myshopifyDomain;
    }

    
    /**
     * The shop's name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The shop's settings related to navigation.
     *
     * @return ShopifyNavigationItem[]
     */
    public function getNavigationSettings(): ?array
    {
        return $this->navigationSettings;
    }

    
    /**
     * The prefix that appears before order numbers.
     *
     * @return string
     */
    public function getOrderNumberFormatPrefix(): ?string
    {
        return $this->orderNumberFormatPrefix;
    }

    
    /**
     * The suffix that appears after order numbers.
     *
     * @return string
     */
    public function getOrderNumberFormatSuffix(): ?string
    {
        return $this->orderNumberFormatSuffix;
    }

    
    /**
     * A list of tags that have been added to orders.
     *
     * @return ShopifyStringConnection
     */
    public function getOrderTags(): ?ShopifyStringConnection
    {
        return $this->orderTags;
    }

    
    /**
     * A list of the shop's orders.
     *
     * @return ShopifyOrderConnection
     */
    public function getOrders(): ?ShopifyOrderConnection
    {
        return $this->orders;
    }

    
    /**
     * The shop's settings related to payments.
     *
     * @return ShopifyPaymentSettings
     */
    public function getPaymentSettings(): ?ShopifyPaymentSettings
    {
        return $this->paymentSettings;
    }

    
    /**
     * The shop's billing plan.
     *
     * @return ShopifyShopPlan
     */
    public function getPlan(): ?ShopifyShopPlan
    {
        return $this->plan;
    }

    
    /**
     * The primary domain of the shop's online store.
     *
     * @return ShopifyDomain
     */
    public function getPrimaryDomain(): ?ShopifyDomain
    {
        return $this->primaryDomain;
    }

    
    /**
     * The list of all images of all products for the shop.
     *
     * @return ShopifyImageConnection
     */
    public function getProductImages(): ?ShopifyImageConnection
    {
        return $this->productImages;
    }

    
    /**
     * A list of tags that have been added to products.
     *
     * @return ShopifyStringConnection
     */
    public function getProductTags(): ?ShopifyStringConnection
    {
        return $this->productTags;
    }

    
    /**
     * The list of types added to products.
     *
     * @return ShopifyStringConnection
     */
    public function getProductTypes(): ?ShopifyStringConnection
    {
        return $this->productTypes;
    }

    
    /**
     * List of the shop's product variants.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getProductVariants(): ?ShopifyProductVariantConnection
    {
        return $this->productVariants;
    }

    
    /**
     * The list of vendors added to products.
     *
     * @return ShopifyStringConnection
     */
    public function getProductVendors(): ?ShopifyStringConnection
    {
        return $this->productVendors;
    }

    
    /**
     * List of the shop's products.
     *
     * @return ShopifyProductConnection
     */
    public function getProducts(): ?ShopifyProductConnection
    {
        return $this->products;
    }

    
    /**
     * The number of publications for the shop.
     *
     * @return int
     */
    public function getPublicationCount(): ?int
    {
        return $this->publicationCount;
    }

    
    /**
     * The shop's limits for specific resources. For example, the maximum number of variants allowed per product, or the maximum number of locations allowed.
     *
     * @return ShopifyShopResourceLimits
     */
    public function getResourceLimits(): ?ShopifyShopResourceLimits
    {
        return $this->resourceLimits;
    }

    
    /**
     * The URL of the rich text editor that can be used for mobile devices.
     *
     * @return string
     */
    public function getRichTextEditorUrl(): mixed
    {
        return $this->richTextEditorUrl;
    }

    
    /**
     * Fetches a list of admin search results by a specified query.
     *
     * @return ShopifySearchResultConnection
     */
    public function getSearch(): ?ShopifySearchResultConnection
    {
        return $this->search;
    }

    
    /**
     * The list of search filter options for the shop. These can be used to filter product visibility for the shop.
     *
     * @return ShopifySearchFilterOptions
     */
    public function getSearchFilters(): ?ShopifySearchFilterOptions
    {
        return $this->searchFilters;
    }

    
    /**
     * Whether the shop has outstanding setup steps.
     *
     * @return bool
     */
    public function getSetupRequired(): ?bool
    {
        return $this->setupRequired;
    }

    
    /**
     * The list of countries that the shop ships to.
     *
     * @return string[] ShopifyCountryCodeEnumObject values
     */
    public function getShipsToCountries(): ?array
    {
        return $this->shipsToCountries;
    }

    
    /**
     * The shop's address information as it will appear to buyers.
     *
     * @return ShopifyShopAddress
     */
    public function getShopAddress(): ?ShopifyShopAddress
    {
        return $this->shopAddress;
    }

    
    /**
     * The name of the shop owner.
     *
     * @return string
     */
    public function getShopOwnerName(): ?string
    {
        return $this->shopOwnerName;
    }

    
    /**
     * The list of all legal policies associated with a shop.
     *
     * @return ShopifyShopPolicy[]
     */
    public function getShopPolicies(): ?array
    {
        return $this->shopPolicies;
    }

    
    /**
     * The paginated list of the shop's staff members.
     *
     * @return ShopifyStaffMemberConnection
     */
    public function getStaffMembers(): ?ShopifyStaffMemberConnection
    {
        return $this->staffMembers;
    }

    
    /**
     * The storefront access token of a private application. These are scoped per-application.
     *
     * @return ShopifyStorefrontAccessTokenConnection
     */
    public function getStorefrontAccessTokens(): ?ShopifyStorefrontAccessTokenConnection
    {
        return $this->storefrontAccessTokens;
    }

    
    /**
     * The URL of the shop's storefront.
     *
     * @return string
     */
    public function getStorefrontUrl(): mixed
    {
        return $this->storefrontUrl;
    }

    
    /**
     * Whether the shop charges taxes for shipping.
     *
     * @return bool
     */
    public function getTaxShipping(): ?bool
    {
        return $this->taxShipping;
    }

    
    /**
     * Whether applicable taxes are included in the shop's product prices.
     *
     * @return bool
     */
    public function getTaxesIncluded(): ?bool
    {
        return $this->taxesIncluded;
    }

    
    /**
     * The shop's time zone abbreviation.
     *
     * @return string
     */
    public function getTimezoneAbbreviation(): ?string
    {
        return $this->timezoneAbbreviation;
    }

    
    /**
     * The shop's time zone offset.
     *
     * @return string
     */
    public function getTimezoneOffset(): ?string
    {
        return $this->timezoneOffset;
    }

    
    /**
     * The shop's time zone offset expressed as a number of minutes.
     *
     * @return int
     */
    public function getTimezoneOffsetMinutes(): ?int
    {
        return $this->timezoneOffsetMinutes;
    }

    
    /**
     * Whether transactional SMS sent by Shopify have been disabled for a shop.
     *
     * @return bool
     */
    public function getTransactionalSmsDisabled(): ?bool
    {
        return $this->transactionalSmsDisabled;
    }

    
    /**
     * The published translations associated with the resource.
     *
     * @return ShopifyTranslation[]
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

    
    /**
     * The shop's unit system for weights and measures.
     *
     * @return string A ShopifyUnitSystemEnumObject value
     */
    public function getUnitSystem(): ?string
    {
        return $this->unitSystem;
    }

    
    /**
     * The date and time when the shop was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The URL of the shop's online store.
     *
     * @return string
     */
    public function getUrl(): mixed
    {
        return $this->url;
    }

    
    /**
     * The shop's primary unit of weight for products and shipping.
     *
     * @return string A ShopifyWeightUnitEnumObject value
     */
    public function getWeightUnit(): ?string
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
            if (isset($data['analyticsAnnotations']) && $data['analyticsAnnotations'] !== null) {
                $instance->analyticsAnnotations = ShopifyAnalyticsAnnotationConnection::fromArray($data['analyticsAnnotations']);
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
            if (isset($data['shopAddress']) && $data['shopAddress'] !== null) {
                $instance->shopAddress = ShopifyShopAddress::fromArray($data['shopAddress']);
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
            if ($this->analyticsAnnotations !== null) {
                $data['analyticsAnnotations'] = $this->analyticsAnnotations->asArray();
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
            if ($this->shopAddress !== null) {
                $data['shopAddress'] = $this->shopAddress->asArray();
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
