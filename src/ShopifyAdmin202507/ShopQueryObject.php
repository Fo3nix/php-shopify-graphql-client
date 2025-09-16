<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopQueryObject extends QueryObject
{
    const OBJECT_NAME = "Shop";

    public function selectAccountOwner(ShopAccountOwnerArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("accountOwner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAlerts(ShopAlertsArgumentsObject $argsObject = null)
    {
        $object = new ShopAlertQueryObject("alerts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `allProductCategoriesList` instead.
     */
    public function selectAllProductCategories(ShopAllProductCategoriesArgumentsObject $argsObject = null)
    {
        $object = new ProductCategoryQueryObject("allProductCategories");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllProductCategoriesList(ShopAllProductCategoriesListArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryQueryObject("allProductCategoriesList");
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
    public function selectAssignedFulfillmentOrders(ShopAssignedFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderConnectionQueryObject("assignedFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableChannelApps(ShopAvailableChannelAppsArgumentsObject $argsObject = null)
    {
        $object = new AppConnectionQueryObject("availableChannelApps");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingAddress(ShopBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannelDefinitionsForInstalledChannels(ShopChannelDefinitionsForInstalledChannelsArgumentsObject $argsObject = null)
    {
        $object = new AvailableChannelDefinitionsByChannelQueryObject("channelDefinitionsForInstalledChannels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.channels` instead.
     */
    public function selectChannels(ShopChannelsArgumentsObject $argsObject = null)
    {
        $object = new ChannelConnectionQueryObject("channels");
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
    public function selectCollections(ShopCollectionsArgumentsObject $argsObject = null)
    {
        $object = new CollectionConnectionQueryObject("collections");
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

    public function selectCountriesInShippingZones(ShopCountriesInShippingZonesArgumentsObject $argsObject = null)
    {
        $object = new CountriesInShippingZonesQueryObject("countriesInShippingZones");
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

    public function selectCurrencyFormats(ShopCurrencyFormatsArgumentsObject $argsObject = null)
    {
        $object = new CurrencyFormatsQueryObject("currencyFormats");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrencySettings(ShopCurrencySettingsArgumentsObject $argsObject = null)
    {
        $object = new CurrencySettingConnectionQueryObject("currencySettings");
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

    public function selectCustomerAccountsV2(ShopCustomerAccountsV2ArgumentsObject $argsObject = null)
    {
        $object = new CustomerAccountsV2QueryObject("customerAccountsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerTags(ShopCustomerTagsArgumentsObject $argsObject = null)
    {
        $object = new StringConnectionQueryObject("customerTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.customers` instead.
     */
    public function selectCustomers(ShopCustomersArgumentsObject $argsObject = null)
    {
        $object = new CustomerConnectionQueryObject("customers");
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
    public function selectDomains(ShopDomainsArgumentsObject $argsObject = null)
    {
        $object = new DomainQueryObject("domains");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrderTags(ShopDraftOrderTagsArgumentsObject $argsObject = null)
    {
        $object = new StringConnectionQueryObject("draftOrderTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.draftOrders` instead.
     */
    public function selectDraftOrders(ShopDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderConnectionQueryObject("draftOrders");
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

    public function selectEntitlements(ShopEntitlementsArgumentsObject $argsObject = null)
    {
        $object = new EntitlementsTypeQueryObject("entitlements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFeatures(ShopFeaturesArgumentsObject $argsObject = null)
    {
        $object = new ShopFeaturesQueryObject("features");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.fulfillmentOrders` instead.
     */
    public function selectFulfillmentOrders(ShopFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentServices(ShopFulfillmentServicesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentServiceQueryObject("fulfillmentServices");
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
    public function selectInventoryItems(ShopInventoryItemsArgumentsObject $argsObject = null)
    {
        $object = new InventoryItemConnectionQueryObject("inventoryItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.pendingOrdersCount` instead.
     */
    public function selectLimitedPendingOrderCount(ShopLimitedPendingOrderCountArgumentsObject $argsObject = null)
    {
        $object = new LimitedPendingOrderCountQueryObject("limitedPendingOrderCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.locations` instead.
     */
    public function selectLocations(ShopLocationsArgumentsObject $argsObject = null)
    {
        $object = new LocationConnectionQueryObject("locations");
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

    public function selectMerchantApprovalSignals(ShopMerchantApprovalSignalsArgumentsObject $argsObject = null)
    {
        $object = new MerchantApprovalSignalsQueryObject("merchantApprovalSignals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ShopMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ShopMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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

    public function selectNavigationSettings(ShopNavigationSettingsArgumentsObject $argsObject = null)
    {
        $object = new NavigationItemQueryObject("navigationSettings");
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

    public function selectOrderTags(ShopOrderTagsArgumentsObject $argsObject = null)
    {
        $object = new StringConnectionQueryObject("orderTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.orders` instead.
     */
    public function selectOrders(ShopOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentSettings(ShopPaymentSettingsArgumentsObject $argsObject = null)
    {
        $object = new PaymentSettingsQueryObject("paymentSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPlan(ShopPlanArgumentsObject $argsObject = null)
    {
        $object = new ShopPlanQueryObject("plan");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrimaryDomain(ShopPrimaryDomainArgumentsObject $argsObject = null)
    {
        $object = new DomainQueryObject("primaryDomain");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `files` instead. See [filesQuery](https://shopify.dev/docs/api/admin-graphql/latest/queries/files) and its [query](https://shopify.dev/docs/api/admin-graphql/latest/queries/files#argument-query) argument for more information.
     */
    public function selectProductImages(ShopProductImagesArgumentsObject $argsObject = null)
    {
        $object = new ImageConnectionQueryObject("productImages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.productTags` instead.
     */
    public function selectProductTags(ShopProductTagsArgumentsObject $argsObject = null)
    {
        $object = new StringConnectionQueryObject("productTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.productTypes` instead.
     */
    public function selectProductTypes(ShopProductTypesArgumentsObject $argsObject = null)
    {
        $object = new StringConnectionQueryObject("productTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.productVariants` instead.
     */
    public function selectProductVariants(ShopProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.productVendors` instead.
     */
    public function selectProductVendors(ShopProductVendorsArgumentsObject $argsObject = null)
    {
        $object = new StringConnectionQueryObject("productVendors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.products`.
     */
    public function selectProducts(ShopProductsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("products");
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

    public function selectResourceLimits(ShopResourceLimitsArgumentsObject $argsObject = null)
    {
        $object = new ShopResourceLimitsQueryObject("resourceLimits");
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

    public function selectSearch(ShopSearchArgumentsObject $argsObject = null)
    {
        $object = new SearchResultConnectionQueryObject("search");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSearchFilters(ShopSearchFiltersArgumentsObject $argsObject = null)
    {
        $object = new SearchFilterOptionsQueryObject("searchFilters");
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

    public function selectShopOwnerName()
    {
        $this->selectField("shopOwnerName");

        return $this;
    }

    public function selectShopPolicies(ShopShopPoliciesArgumentsObject $argsObject = null)
    {
        $object = new ShopPolicyQueryObject("shopPolicies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `QueryRoot.staffMembers` instead.
     */
    public function selectStaffMembers(ShopStaffMembersArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberConnectionQueryObject("staffMembers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStorefrontAccessTokens(ShopStorefrontAccessTokensArgumentsObject $argsObject = null)
    {
        $object = new StorefrontAccessTokenConnectionQueryObject("storefrontAccessTokens");
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

    public function selectTranslations(ShopTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
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
