<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopQueryObject extends QueryObject
{
    const OBJECT_NAME = "Shop";

    public function selectAccountOwner(ShopifyShopAccountOwnerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("accountOwner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAlerts(ShopifyShopAlertsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopAlertQueryObject("alerts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `allProductCategoriesList` instead.
     */
    public function selectAllProductCategories(ShopifyShopAllProductCategoriesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductCategoryQueryObject("allProductCategories");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllProductCategoriesList(ShopifyShopAllProductCategoriesListArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("allProductCategoriesList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAnalyticsAnnotations(ShopifyShopAnalyticsAnnotationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAnalyticsAnnotationConnectionQueryObject("analyticsAnnotations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Not supported anymore.
     */
    public function selectAnalyticsToken()
    {
        $this->selectField("analyticsToken");

        return $this;
    }

    /**
     * @deprecated Use `QueryRoot.assignedFulfillmentOrders` instead. Details: https://shopify.dev/changelog/moving-the-shop-assignedfulfillmentorders-connection-to-queryroot
     */
    public function selectAssignedFulfillmentOrders(ShopifyShopAssignedFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("assignedFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableChannelApps(ShopifyShopAvailableChannelAppsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppConnectionQueryObject("availableChannelApps");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `shopAddress` instead.
     */
    public function selectBillingAddress(ShopifyShopBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use [`QueryRoot.orderAttributionDefinitions`](https://shopify.dev/docs/api/admin-graphql/latest/queries/orderAttributionDefinitions) and select `id`, `handle`, `displayName`, and `icon` instead.
     */
    public function selectChannelDefinitionsForInstalledChannels(ShopifyShopChannelDefinitionsForInstalledChannelsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAvailableChannelDefinitionsByChannelQueryObject("channelDefinitionsForInstalledChannels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.channels` instead.
     */
    public function selectChannels(ShopifyShopChannelsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCheckoutApiSupported()
    {
        $this->selectField("checkoutApiSupported");

        return $this;
    }

    /**
     * @deprecated Use `QueryRoot.collections` instead.
     */
    public function selectCollections(ShopifyShopCollectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContactEmail()
    {
        $this->selectField("contactEmail");

        return $this;
    }

    public function selectCountriesInShippingZones(ShopifyShopCountriesInShippingZonesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountriesInShippingZonesQueryObject("countriesInShippingZones");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCurrencyCode()
    {
        $this->selectField("currencyCode");

        return $this;
    }

    public function selectCurrencyFormats(ShopifyShopCurrencyFormatsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCurrencyFormatsQueryObject("currencyFormats");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrencySettings(ShopifyShopCurrencySettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCurrencySettingConnectionQueryObject("currencySettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerAccounts()
    {
        $this->selectField("customerAccounts");

        return $this;
    }

    public function selectCustomerAccountsV2(ShopifyShopCustomerAccountsV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerAccountsV2QueryObject("customerAccountsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerTags(ShopifyShopCustomerTagsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringConnectionQueryObject("customerTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.customers` instead.
     */
    public function selectCustomers(ShopifyShopCustomersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerConnectionQueryObject("customers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * @deprecated Use `domainsPaginated` instead.
     */
    public function selectDomains(ShopifyShopDomainsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDomainQueryObject("domains");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrderTags(ShopifyShopDraftOrderTagsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringConnectionQueryObject("draftOrderTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectEnabledPresentmentCurrencies()
    {
        $this->selectField("enabledPresentmentCurrencies");

        return $this;
    }

    public function selectEntitlements(ShopifyShopEntitlementsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEntitlementsTypeQueryObject("entitlements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFeatures(ShopifyShopFeaturesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopFeaturesQueryObject("features");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.fulfillmentOrders` instead.
     */
    public function selectFulfillmentOrders(ShopifyShopFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentServices(ShopifyShopFulfillmentServicesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectIanaTimezone()
    {
        $this->selectField("ianaTimezone");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * @deprecated Use `QueryRoot.inventoryItems` instead.
     */
    public function selectInventoryItems(ShopifyShopInventoryItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemConnectionQueryObject("inventoryItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.pendingOrdersCount` instead.
     */
    public function selectLimitedPendingOrderCount(ShopifyShopLimitedPendingOrderCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLimitedPendingOrderCountQueryObject("limitedPendingOrderCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.locations` instead.
     */
    public function selectLocations(ShopifyShopLocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketingSmsConsentEnabledAtCheckout()
    {
        $this->selectField("marketingSmsConsentEnabledAtCheckout");

        return $this;
    }

    public function selectMerchantApprovalSignals(ShopifyShopMerchantApprovalSignalsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMerchantApprovalSignalsQueryObject("merchantApprovalSignals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ShopifyShopMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ShopifyShopMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyShopMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMyshopifyDomain()
    {
        $this->selectField("myshopifyDomain");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNavigationSettings(ShopifyShopNavigationSettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyNavigationItemQueryObject("navigationSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderNumberFormatPrefix()
    {
        $this->selectField("orderNumberFormatPrefix");

        return $this;
    }

    public function selectOrderNumberFormatSuffix()
    {
        $this->selectField("orderNumberFormatSuffix");

        return $this;
    }

    public function selectOrderTags(ShopifyShopOrderTagsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringConnectionQueryObject("orderTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.orders` instead.
     */
    public function selectOrders(ShopifyShopOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentSettings(ShopifyShopPaymentSettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentSettingsQueryObject("paymentSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPlan(ShopifyShopPlanArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPlanQueryObject("plan");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrimaryDomain(ShopifyShopPrimaryDomainArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDomainQueryObject("primaryDomain");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `files` instead. See [filesQuery](https://shopify.dev/docs/api/admin-graphql/latest/queries/files) and its [query](https://shopify.dev/docs/api/admin-graphql/latest/queries/files#argument-query) argument for more information.
     */
    public function selectProductImages(ShopifyShopProductImagesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageConnectionQueryObject("productImages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.productTags` instead.
     */
    public function selectProductTags(ShopifyShopProductTagsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringConnectionQueryObject("productTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.productTypes` instead.
     */
    public function selectProductTypes(ShopifyShopProductTypesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringConnectionQueryObject("productTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.productVariants` instead.
     */
    public function selectProductVariants(ShopifyShopProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.productVendors` instead.
     */
    public function selectProductVendors(ShopifyShopProductVendorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringConnectionQueryObject("productVendors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.products`.
     */
    public function selectProducts(ShopifyShopProductsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.publicationsCount` instead.
     */
    public function selectPublicationCount()
    {
        $this->selectField("publicationCount");

        return $this;
    }

    public function selectResourceLimits(ShopifyShopResourceLimitsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopResourceLimitsQueryObject("resourceLimits");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRichTextEditorUrl()
    {
        $this->selectField("richTextEditorUrl");

        return $this;
    }

    public function selectSearch(ShopifyShopSearchArgumentsObject $argsObject = null)
    {
        $object = new ShopifySearchResultConnectionQueryObject("search");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSearchFilters(ShopifyShopSearchFiltersArgumentsObject $argsObject = null)
    {
        $object = new ShopifySearchFilterOptionsQueryObject("searchFilters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSetupRequired()
    {
        $this->selectField("setupRequired");

        return $this;
    }

    public function selectShipsToCountries()
    {
        $this->selectField("shipsToCountries");

        return $this;
    }

    public function selectShopAddress(ShopifyShopShopAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopAddressQueryObject("shopAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopOwnerName()
    {
        $this->selectField("shopOwnerName");

        return $this;
    }

    public function selectShopPolicies(ShopifyShopShopPoliciesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPolicyQueryObject("shopPolicies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.staffMembers` instead.
     */
    public function selectStaffMembers(ShopifyShopStaffMembersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberConnectionQueryObject("staffMembers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStorefrontAccessTokens(ShopifyShopStorefrontAccessTokensArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStorefrontAccessTokenConnectionQueryObject("storefrontAccessTokens");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `url` instead.
     */
    public function selectStorefrontUrl()
    {
        $this->selectField("storefrontUrl");

        return $this;
    }

    public function selectTaxShipping()
    {
        $this->selectField("taxShipping");

        return $this;
    }

    public function selectTaxesIncluded()
    {
        $this->selectField("taxesIncluded");

        return $this;
    }

    public function selectTimezoneAbbreviation()
    {
        $this->selectField("timezoneAbbreviation");

        return $this;
    }

    public function selectTimezoneOffset()
    {
        $this->selectField("timezoneOffset");

        return $this;
    }

    public function selectTimezoneOffsetMinutes()
    {
        $this->selectField("timezoneOffsetMinutes");

        return $this;
    }

    public function selectTransactionalSmsDisabled()
    {
        $this->selectField("transactionalSmsDisabled");

        return $this;
    }

    public function selectTranslations(ShopifyShopTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnitSystem()
    {
        $this->selectField("unitSystem");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }

    public function selectWeightUnit()
    {
        $this->selectField("weightUnit");

        return $this;
    }
}
