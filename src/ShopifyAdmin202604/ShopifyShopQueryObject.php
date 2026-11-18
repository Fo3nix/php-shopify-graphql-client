<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The central configuration and settings hub for a Shopify store. Access business information, operational preferences, feature availability, and store-wide settings that control how the shop operates.
 *
 * Includes core business details like the shop name, contact emails, billing address, and currency settings. The shop configuration determines customer account requirements, available sales channels, enabled features, payment settings, and policy documents. Also provides access to shop-level resources such as staff members, fulfillment services, navigation settings, and storefront access tokens.
 */
class ShopifyShopQueryObject extends QueryObject
{
    const OBJECT_NAME = "Shop";

    /**
     * Account owner information.
     */
    public function selectAccountOwner(?ShopifyShopAccountOwnerArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("accountOwner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the shop's active alert messages that appear in the Shopify admin.
     */
    public function selectAlerts(?ShopifyShopAlertsArgumentsObject $argsObject = null): ShopifyShopAlertQueryObject
    {
        $object = new ShopifyShopAlertQueryObject("alerts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the shop's product categories. Limit: 500 product categories.
     *
     * @deprecated Use `allProductCategoriesList` instead.
     */
    public function selectAllProductCategories(?ShopifyShopAllProductCategoriesArgumentsObject $argsObject = null): ShopifyProductCategoryQueryObject
    {
        $object = new ShopifyProductCategoryQueryObject("allProductCategories");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the shop's product categories. Limit: 500 product categories.
     */
    public function selectAllProductCategoriesList(?ShopifyShopAllProductCategoriesListArgumentsObject $argsObject = null): ShopifyTaxonomyCategoryQueryObject
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("allProductCategoriesList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The token required to query the shop's reports or dashboards.
     *
     * @deprecated Not supported anymore.
     */
    public function selectAnalyticsToken(): static
    {
        $this->selectField("analyticsToken");

        return $this;
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
     * @deprecated Use `QueryRoot.assignedFulfillmentOrders` instead. Details: https://shopify.dev/changelog/moving-the-shop-assignedfulfillmentorders-connection-to-queryroot
     */
    public function selectAssignedFulfillmentOrders(?ShopifyShopAssignedFulfillmentOrdersArgumentsObject $argsObject = null): ShopifyFulfillmentOrderConnectionQueryObject
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("assignedFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of sales channels not currently installed on the shop.
     */
    public function selectAvailableChannelApps(?ShopifyShopAvailableChannelAppsArgumentsObject $argsObject = null): ShopifyAppConnectionQueryObject
    {
        $object = new ShopifyAppConnectionQueryObject("availableChannelApps");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop's billing address information.
     *
     * @deprecated Use `shopAddress` instead.
     */
    public function selectBillingAddress(?ShopifyShopBillingAddressArgumentsObject $argsObject = null): ShopifyShopAddressQueryObject
    {
        $object = new ShopifyShopAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of all channel definitions associated with a shop.
     *
     * @deprecated Use [`QueryRoot.orderAttributionDefinitions`](https://shopify.dev/docs/api/admin-graphql/latest/queries/orderAttributionDefinitions) and select `id`, `handle`, `displayName`, and `icon` instead.
     */
    public function selectChannelDefinitionsForInstalledChannels(?ShopifyShopChannelDefinitionsForInstalledChannelsArgumentsObject $argsObject = null): ShopifyAvailableChannelDefinitionsByChannelQueryObject
    {
        $object = new ShopifyAvailableChannelDefinitionsByChannelQueryObject("channelDefinitionsForInstalledChannels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's active sales channels.
     *
     * @deprecated Use `QueryRoot.channels` instead.
     */
    public function selectChannels(?ShopifyShopChannelsArgumentsObject $argsObject = null): ShopifyChannelConnectionQueryObject
    {
        $object = new ShopifyChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Specifies whether the shop supports checkouts via Checkout API.
     */
    public function selectCheckoutApiSupported(): static
    {
        $this->selectField("checkoutApiSupported");

        return $this;
    }

    /**
     * List of the shop's collections.
     *
     * @deprecated Use `QueryRoot.collections` instead.
     */
    public function selectCollections(?ShopifyShopCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The public-facing contact email address for the shop.
     * Customers will use this email to communicate with the shop owner.
     */
    public function selectContactEmail(): static
    {
        $this->selectField("contactEmail");

        return $this;
    }

    /**
     * Countries that have been defined in shipping zones for the shop.
     */
    public function selectCountriesInShippingZones(?ShopifyShopCountriesInShippingZonesArgumentsObject $argsObject = null): ShopifyCountriesInShippingZonesQueryObject
    {
        $object = new ShopifyCountriesInShippingZonesQueryObject("countriesInShippingZones");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the shop was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The three letter code for the currency that the shop sells in.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * How currencies are displayed on your store.
     */
    public function selectCurrencyFormats(?ShopifyShopCurrencyFormatsArgumentsObject $argsObject = null): ShopifyCurrencyFormatsQueryObject
    {
        $object = new ShopifyCurrencyFormatsQueryObject("currencyFormats");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The presentment currency settings for the shop excluding the shop's own currency.
     */
    public function selectCurrencySettings(?ShopifyShopCurrencySettingsArgumentsObject $argsObject = null): ShopifyCurrencySettingConnectionQueryObject
    {
        $object = new ShopifyCurrencySettingConnectionQueryObject("currencySettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether customer accounts are required, optional, or disabled for the shop.
     */
    public function selectCustomerAccounts(): static
    {
        $this->selectField("customerAccounts");

        return $this;
    }

    /**
     * Information about the shop's customer accounts.
     */
    public function selectCustomerAccountsV2(?ShopifyShopCustomerAccountsV2ArgumentsObject $argsObject = null): ShopifyCustomerAccountsV2QueryObject
    {
        $object = new ShopifyCustomerAccountsV2QueryObject("customerAccountsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of tags that have been added to customer accounts.
     */
    public function selectCustomerTags(ShopifyShopCustomerTagsArgumentsObject $argsObject): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("customerTags");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Customer accounts associated to the shop.
     *
     * @deprecated Use `QueryRoot.customers` instead.
     */
    public function selectCustomers(?ShopifyShopCustomersArgumentsObject $argsObject = null): ShopifyCustomerConnectionQueryObject
    {
        $object = new ShopifyCustomerConnectionQueryObject("customers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop's meta description used in search engine results.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The domains configured for the shop.
     *
     * @deprecated Use `domainsPaginated` instead.
     */
    public function selectDomains(?ShopifyShopDomainsArgumentsObject $argsObject = null): ShopifyDomainQueryObject
    {
        $object = new ShopifyDomainQueryObject("domains");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of tags that have been added to draft orders.
     */
    public function selectDraftOrderTags(ShopifyShopDraftOrderTagsArgumentsObject $argsObject): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("draftOrderTags");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop owner's email address.
     * Shopify will use this email address to communicate with the shop owner.
     */
    public function selectEmail(): static
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * The presentment currencies enabled for the shop.
     */
    public function selectEnabledPresentmentCurrencies(): static
    {
        $this->selectField("enabledPresentmentCurrencies");

        return $this;
    }

    /**
     * The entitlements for a shop.
     */
    public function selectEntitlements(?ShopifyShopEntitlementsArgumentsObject $argsObject = null): ShopifyEntitlementsTypeQueryObject
    {
        $object = new ShopifyEntitlementsTypeQueryObject("entitlements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The set of features enabled for the shop.
     */
    public function selectFeatures(?ShopifyShopFeaturesArgumentsObject $argsObject = null): ShopifyShopFeaturesQueryObject
    {
        $object = new ShopifyShopFeaturesQueryObject("features");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The paginated list of merchant-managed and third-party fulfillment orders.
     *
     * @deprecated Use `QueryRoot.fulfillmentOrders` instead.
     */
    public function selectFulfillmentOrders(?ShopifyShopFulfillmentOrdersArgumentsObject $argsObject = null): ShopifyFulfillmentOrderConnectionQueryObject
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's installed fulfillment services.
     */
    public function selectFulfillmentServices(?ShopifyShopFulfillmentServicesArgumentsObject $argsObject = null): ShopifyFulfillmentServiceQueryObject
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop's time zone as defined by the IANA.
     */
    public function selectIanaTimezone(): static
    {
        $this->selectField("ianaTimezone");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * List of the shop's inventory items.
     *
     * @deprecated Use `QueryRoot.inventoryItems` instead.
     */
    public function selectInventoryItems(?ShopifyShopInventoryItemsArgumentsObject $argsObject = null): ShopifyInventoryItemConnectionQueryObject
    {
        $object = new ShopifyInventoryItemConnectionQueryObject("inventoryItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of pending orders on the shop.
     * Limited to a maximum of 10000.
     *
     * @deprecated Use `QueryRoot.pendingOrdersCount` instead.
     */
    public function selectLimitedPendingOrderCount(?ShopifyShopLimitedPendingOrderCountArgumentsObject $argsObject = null): ShopifyLimitedPendingOrderCountQueryObject
    {
        $object = new ShopifyLimitedPendingOrderCountQueryObject("limitedPendingOrderCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of active locations of the shop.
     *
     * @deprecated Use `QueryRoot.locations` instead.
     */
    public function selectLocations(?ShopifyShopLocationsArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
    {
        $object = new ShopifyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether SMS marketing has been enabled on the shop's checkout configuration settings.
     */
    public function selectMarketingSmsConsentEnabledAtCheckout(): static
    {
        $this->selectField("marketingSmsConsentEnabledAtCheckout");

        return $this;
    }

    /**
     * The approval signals for a shop to support onboarding to channel apps.
     */
    public function selectMerchantApprovalSignals(?ShopifyShopMerchantApprovalSignalsArgumentsObject $argsObject = null): ShopifyMerchantApprovalSignalsQueryObject
    {
        $object = new ShopifyMerchantApprovalSignalsQueryObject("merchantApprovalSignals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyShopMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyShopMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyShopMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop's .myshopify.com domain name.
     */
    public function selectMyshopifyDomain(): static
    {
        $this->selectField("myshopifyDomain");

        return $this;
    }

    /**
     * The shop's name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The shop's settings related to navigation.
     */
    public function selectNavigationSettings(?ShopifyShopNavigationSettingsArgumentsObject $argsObject = null): ShopifyNavigationItemQueryObject
    {
        $object = new ShopifyNavigationItemQueryObject("navigationSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The prefix that appears before order numbers.
     */
    public function selectOrderNumberFormatPrefix(): static
    {
        $this->selectField("orderNumberFormatPrefix");

        return $this;
    }

    /**
     * The suffix that appears after order numbers.
     */
    public function selectOrderNumberFormatSuffix(): static
    {
        $this->selectField("orderNumberFormatSuffix");

        return $this;
    }

    /**
     * A list of tags that have been added to orders.
     */
    public function selectOrderTags(ShopifyShopOrderTagsArgumentsObject $argsObject): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("orderTags");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the shop's orders.
     *
     * @deprecated Use `QueryRoot.orders` instead.
     */
    public function selectOrders(?ShopifyShopOrdersArgumentsObject $argsObject = null): ShopifyOrderConnectionQueryObject
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop's settings related to payments.
     */
    public function selectPaymentSettings(?ShopifyShopPaymentSettingsArgumentsObject $argsObject = null): ShopifyPaymentSettingsQueryObject
    {
        $object = new ShopifyPaymentSettingsQueryObject("paymentSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop's billing plan.
     */
    public function selectPlan(?ShopifyShopPlanArgumentsObject $argsObject = null): ShopifyShopPlanQueryObject
    {
        $object = new ShopifyShopPlanQueryObject("plan");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The primary domain of the shop's online store.
     */
    public function selectPrimaryDomain(?ShopifyShopPrimaryDomainArgumentsObject $argsObject = null): ShopifyDomainQueryObject
    {
        $object = new ShopifyDomainQueryObject("primaryDomain");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of all images of all products for the shop.
     *
     * @deprecated Use `files` instead. See [filesQuery](https://shopify.dev/docs/api/admin-graphql/latest/queries/files) and its [query](https://shopify.dev/docs/api/admin-graphql/latest/queries/files#argument-query) argument for more information.
     */
    public function selectProductImages(?ShopifyShopProductImagesArgumentsObject $argsObject = null): ShopifyImageConnectionQueryObject
    {
        $object = new ShopifyImageConnectionQueryObject("productImages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of tags that have been added to products.
     *
     * @deprecated Use `QueryRoot.productTags` instead.
     */
    public function selectProductTags(ShopifyShopProductTagsArgumentsObject $argsObject): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("productTags");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of types added to products.
     *
     * @deprecated Use `QueryRoot.productTypes` instead.
     */
    public function selectProductTypes(ShopifyShopProductTypesArgumentsObject $argsObject): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("productTypes");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's product variants.
     *
     * @deprecated Use `QueryRoot.productVariants` instead.
     */
    public function selectProductVariants(?ShopifyShopProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of vendors added to products.
     *
     * @deprecated Use `QueryRoot.productVendors` instead.
     */
    public function selectProductVendors(ShopifyShopProductVendorsArgumentsObject $argsObject): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("productVendors");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's products.
     *
     * @deprecated Use `QueryRoot.products`.
     */
    public function selectProducts(?ShopifyShopProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of publications for the shop.
     *
     * @deprecated Use `QueryRoot.publicationsCount` instead.
     */
    public function selectPublicationCount(): static
    {
        $this->selectField("publicationCount");

        return $this;
    }

    /**
     * The shop's limits for specific resources. For example, the maximum number of variants allowed per product, or the maximum number of locations allowed.
     */
    public function selectResourceLimits(?ShopifyShopResourceLimitsArgumentsObject $argsObject = null): ShopifyShopResourceLimitsQueryObject
    {
        $object = new ShopifyShopResourceLimitsQueryObject("resourceLimits");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL of the rich text editor that can be used for mobile devices.
     */
    public function selectRichTextEditorUrl(): static
    {
        $this->selectField("richTextEditorUrl");

        return $this;
    }

    /**
     * Fetches a list of admin search results by a specified query.
     */
    public function selectSearch(ShopifyShopSearchArgumentsObject $argsObject): ShopifySearchResultConnectionQueryObject
    {
        $object = new ShopifySearchResultConnectionQueryObject("search");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of search filter options for the shop. These can be used to filter product visibility for the shop.
     */
    public function selectSearchFilters(?ShopifyShopSearchFiltersArgumentsObject $argsObject = null): ShopifySearchFilterOptionsQueryObject
    {
        $object = new ShopifySearchFilterOptionsQueryObject("searchFilters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the shop has outstanding setup steps.
     */
    public function selectSetupRequired(): static
    {
        $this->selectField("setupRequired");

        return $this;
    }

    /**
     * The list of countries that the shop ships to.
     */
    public function selectShipsToCountries(): static
    {
        $this->selectField("shipsToCountries");

        return $this;
    }

    /**
     * The shop's address information as it will appear to buyers.
     */
    public function selectShopAddress(?ShopifyShopShopAddressArgumentsObject $argsObject = null): ShopifyShopAddressQueryObject
    {
        $object = new ShopifyShopAddressQueryObject("shopAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the shop owner.
     */
    public function selectShopOwnerName(): static
    {
        $this->selectField("shopOwnerName");

        return $this;
    }

    /**
     * The list of all legal policies associated with a shop.
     */
    public function selectShopPolicies(?ShopifyShopShopPoliciesArgumentsObject $argsObject = null): ShopifyShopPolicyQueryObject
    {
        $object = new ShopifyShopPolicyQueryObject("shopPolicies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The paginated list of the shop's staff members.
     *
     * @deprecated Use `QueryRoot.staffMembers` instead.
     */
    public function selectStaffMembers(?ShopifyShopStaffMembersArgumentsObject $argsObject = null): ShopifyStaffMemberConnectionQueryObject
    {
        $object = new ShopifyStaffMemberConnectionQueryObject("staffMembers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The storefront access token of a private application. These are scoped per-application.
     */
    public function selectStorefrontAccessTokens(?ShopifyShopStorefrontAccessTokensArgumentsObject $argsObject = null): ShopifyStorefrontAccessTokenConnectionQueryObject
    {
        $object = new ShopifyStorefrontAccessTokenConnectionQueryObject("storefrontAccessTokens");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL of the shop's storefront.
     *
     * @deprecated Use `url` instead.
     */
    public function selectStorefrontUrl(): static
    {
        $this->selectField("storefrontUrl");

        return $this;
    }

    /**
     * Whether the shop charges taxes for shipping.
     */
    public function selectTaxShipping(): static
    {
        $this->selectField("taxShipping");

        return $this;
    }

    /**
     * Whether applicable taxes are included in the shop's product prices.
     */
    public function selectTaxesIncluded(): static
    {
        $this->selectField("taxesIncluded");

        return $this;
    }

    /**
     * The shop's time zone abbreviation.
     */
    public function selectTimezoneAbbreviation(): static
    {
        $this->selectField("timezoneAbbreviation");

        return $this;
    }

    /**
     * The shop's time zone offset.
     */
    public function selectTimezoneOffset(): static
    {
        $this->selectField("timezoneOffset");

        return $this;
    }

    /**
     * The shop's time zone offset expressed as a number of minutes.
     */
    public function selectTimezoneOffsetMinutes(): static
    {
        $this->selectField("timezoneOffsetMinutes");

        return $this;
    }

    /**
     * Whether transactional SMS sent by Shopify have been disabled for a shop.
     */
    public function selectTransactionalSmsDisabled(): static
    {
        $this->selectField("transactionalSmsDisabled");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyShopTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop's unit system for weights and measures.
     */
    public function selectUnitSystem(): static
    {
        $this->selectField("unitSystem");

        return $this;
    }

    /**
     * The date and time when the shop was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The URL of the shop's online store.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }

    /**
     * The shop's primary unit of weight for products and shipping.
     */
    public function selectWeightUnit(): static
    {
        $this->selectField("weightUnit");

        return $this;
    }
}
