<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The schema's entry-point for queries. This acts as the public, top-level API from which all queries must start.
 */
class ShopifyRootQueryObject extends QueryObject
{
    const OBJECT_NAME = "";

    /**
     * Returns a list of abandoned checkouts. A checkout is considered abandoned when a customer adds contact information but doesn't complete their purchase. Includes both abandoned and recovered checkouts.
     *
     * Each checkout provides [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) details, [`AbandonedCheckoutLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AbandonedCheckoutLineItem) objects, pricing information, and a recovery URL for re-engaging customers who didn't complete their purchase.
     */
    public function selectAbandonedCheckouts(?ShopifyRootAbandonedCheckoutsArgumentsObject $argsObject = null): ShopifyAbandonedCheckoutConnectionQueryObject
    {
        $object = new ShopifyAbandonedCheckoutConnectionQueryObject("abandonedCheckouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the count of abandoned checkouts for the given shop. Limited to a maximum of 10000 by default.
     */
    public function selectAbandonedCheckoutsCount(?ShopifyRootAbandonedCheckoutsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("abandonedCheckoutsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Abandonment` resource by ID.
     */
    public function selectAbandonment(ShopifyRootAbandonmentArgumentsObject $argsObject): ShopifyAbandonmentQueryObject
    {
        $object = new ShopifyAbandonmentQueryObject("abandonment");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns an Abandonment by the Abandoned Checkout ID.
     */
    public function selectAbandonmentByAbandonedCheckoutId(ShopifyRootAbandonmentByAbandonedCheckoutIdArgumentsObject $argsObject): ShopifyAbandonmentQueryObject
    {
        $object = new ShopifyAbandonmentQueryObject("abandonmentByAbandonedCheckoutId");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [analytics targets](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget)
     * for the shop. Each target represents a merchant-defined goal for a specific metric over a date range.
     *
     * Results can be filtered by metric, name, date range, or filter expression, and sorted by fields
     * such as `start_date`, `expected_value`, or `metric`.
     *
     * Use the [`analyticsTargetCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetCreate)
     * mutation to add new targets.
     */
    public function selectAnalyticsTargets(?ShopifyRootAnalyticsTargetsArgumentsObject $argsObject = null): ShopifyAnalyticsTargetConnectionQueryObject
    {
        $object = new ShopifyAnalyticsTargetConnectionQueryObject("analyticsTargets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves an [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) by its ID. If no ID is provided, returns details about the currently authenticated app. The query provides access to app details including title, icon, and pricing information.
     *
     * If the app isn't installed on the current shop, then the [`installation`](https://shopify.dev/docs/api/admin-graphql/latest/queries/app#returns-App.fields.installation) field will be `null`.
     */
    public function selectApp(?ShopifyRootAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves an app by its unique handle. The handle is a URL-friendly identifier for the app.
     *
     * Returns the [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) if found, or `null` if no app exists with the specified handle.
     */
    public function selectAppByHandle(ShopifyRootAppByHandleArgumentsObject $argsObject): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("appByHandle");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves an [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) by its client ID (API key). Returns the app's configuration, installation status, [`AccessScope`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AccessScope) objects, and developer information.
     *
     * Returns `null` if no app exists with the specified client ID.
     */
    public function selectAppByKey(ShopifyRootAppByKeyArgumentsObject $argsObject): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("appByKey");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * An app discount type.
     */
    public function selectAppDiscountType(ShopifyRootAppDiscountTypeArgumentsObject $argsObject): ShopifyAppDiscountTypeQueryObject
    {
        $object = new ShopifyAppDiscountTypeQueryObject("appDiscountType");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of app discount types installed by apps.
     */
    public function selectAppDiscountTypes(?ShopifyRootAppDiscountTypesArgumentsObject $argsObject = null): ShopifyAppDiscountTypeQueryObject
    {
        $object = new ShopifyAppDiscountTypeQueryObject("appDiscountTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of app discount types installed by apps.
     */
    public function selectAppDiscountTypesNodes(?ShopifyRootAppDiscountTypesNodesArgumentsObject $argsObject = null): ShopifyAppDiscountTypeConnectionQueryObject
    {
        $object = new ShopifyAppDiscountTypeConnectionQueryObject("appDiscountTypesNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves an [`AppInstallation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppInstallation) by ID. If no ID is provided, returns the installation for the currently authenticated [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App). The query provides essential data for validating installation state and managing app functionality within a store.
     *
     * Use this query to access installation details including granted [`AccessScope`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AccessScope) objects, active [`AppSubscription`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscription) objects, [`AppCredit`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppCredit) objects, [`AppPurchaseOneTime`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppPurchaseOneTime) objects, and app-specific metadata.
     *
     * Learn more about [app installation](https://shopify.dev/docs/apps/build/authentication-authorization/app-installation).
     */
    public function selectAppInstallation(?ShopifyRootAppInstallationArgumentsObject $argsObject = null): ShopifyAppInstallationQueryObject
    {
        $object = new ShopifyAppInstallationQueryObject("appInstallation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of [`AppInstallation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppInstallation) objects across multiple stores where your app is installed. Use this query to monitor installation status, track billing and subscriptions through [`AppSubscription`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscription) objects, and review granted [`AccessScope`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AccessScope) objects.
     *
     * Filter by [`AppInstallationCategory`](https://shopify.dev/docs/api/admin-graphql/latest/enums/AppInstallationCategory) to find specific types of installations (such as POS or channel apps) and by [`AppInstallationPrivacy`](https://shopify.dev/docs/api/admin-graphql/latest/enums/AppInstallationPrivacy) to scope to public or private installations.
     */
    public function selectAppInstallations(?ShopifyRootAppInstallationsArgumentsObject $argsObject = null): ShopifyAppInstallationConnectionQueryObject
    {
        $object = new ShopifyAppInstallationConnectionQueryObject("appInstallations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Article` resource by ID.
     */
    public function selectArticle(ShopifyRootArticleArgumentsObject $argsObject): ShopifyArticleQueryObject
    {
        $object = new ShopifyArticleQueryObject("article");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of article authors for the shop.
     */
    public function selectArticleAuthors(?ShopifyRootArticleAuthorsArgumentsObject $argsObject = null): ShopifyArticleAuthorConnectionQueryObject
    {
        $object = new ShopifyArticleAuthorConnectionQueryObject("articleAuthors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of all article tags.
     */
    public function selectArticleTags(): static
    {
        $this->selectField("articleTags");

        return $this;
    }

    /**
     * Returns a paginated list of articles from the shop's blogs. [`Article`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Article) objects are blog posts that contain content like text, images, and tags.
     *
     * Supports [cursor-based pagination](https://shopify.dev/docs/api/usage/pagination-graphql) to control the number of articles returned and their order. Use the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/articles#arguments-query) argument to filter results by specific criteria.
     */
    public function selectArticles(?ShopifyRootArticlesArgumentsObject $argsObject = null): ShopifyArticleConnectionQueryObject
    {
        $object = new ShopifyArticleConnectionQueryObject("articles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The app must have the `read_assigned_fulfillment_orders`
     * [access scope](https://shopify.dev/docs/api/usage/access-scopes)
     * to be able to retrieve the fulfillment orders assigned to its locations.
     *
     * All assigned fulfillment orders (except those with the `CLOSED` status) will be returned by default.
     * Perform filtering with the `assignmentStatus` argument
     * to receive only fulfillment orders that have been requested to be fulfilled.
     */
    public function selectAssignedFulfillmentOrders(?ShopifyRootAssignedFulfillmentOrdersArgumentsObject $argsObject = null): ShopifyFulfillmentOrderConnectionQueryObject
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("assignedFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `DiscountAutomatic` resource by ID.
     *
     * @deprecated Use `automaticDiscountNode` instead.
     */
    public function selectAutomaticDiscount(ShopifyRootAutomaticDiscountArgumentsObject $argsObject): ShopifyDiscountAutomaticUnionObject
    {
        $object = new ShopifyDiscountAutomaticUnionObject("automaticDiscount");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `DiscountAutomaticNode` resource by ID.
     *
     * @deprecated Use `discountNode` instead.
     */
    public function selectAutomaticDiscountNode(ShopifyRootAutomaticDiscountNodeArgumentsObject $argsObject): ShopifyDiscountAutomaticNodeQueryObject
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject("automaticDiscountNode");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of [automatic discounts](https://help.shopify.com/manual/discounts/discount-types#automatic-discounts).
     *
     * @deprecated Use `discountNodes` instead.
     */
    public function selectAutomaticDiscountNodes(?ShopifyRootAutomaticDiscountNodesArgumentsObject $argsObject = null): ShopifyDiscountAutomaticNodeConnectionQueryObject
    {
        $object = new ShopifyDiscountAutomaticNodeConnectionQueryObject("automaticDiscountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's automatic discount saved searches.
     */
    public function selectAutomaticDiscountSavedSearches(?ShopifyRootAutomaticDiscountSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("automaticDiscountSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of automatic discounts that are applied in the cart and at checkout without requiring a discount code.
     *
     * @deprecated Use `automaticDiscountNodes` instead. This will be removed in 2027-01.
     */
    public function selectAutomaticDiscounts(?ShopifyRootAutomaticDiscountsArgumentsObject $argsObject = null): ShopifyDiscountAutomaticConnectionQueryObject
    {
        $object = new ShopifyDiscountAutomaticConnectionQueryObject("automaticDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The geographic regions that you can set as the [`Shop`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Shop)'s backup region. The backup region serves as a fallback when the system can't determine a buyer's actual location.
     */
    public function selectAvailableBackupRegions(?ShopifyRootAvailableBackupRegionsArgumentsObject $argsObject = null): ShopifyMarketRegionInterfaceObject
    {
        $object = new ShopifyMarketRegionInterfaceObject("availableBackupRegions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of activated carrier services and associated shop locations that support them.
     */
    public function selectAvailableCarrierServices(?ShopifyRootAvailableCarrierServicesArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceAndLocationsQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceAndLocationsQueryObject("availableCarrierServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns all locales that Shopify supports. Each [`Locale`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Locale) includes an ISO code and human-readable name. Use this query to discover which locales you can enable on a shop with the [`shopLocaleEnable`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/shopLocaleEnable) mutation.
     */
    public function selectAvailableLocales(?ShopifyRootAvailableLocalesArgumentsObject $argsObject = null): ShopifyLocaleQueryObject
    {
        $object = new ShopifyLocaleQueryObject("availableLocales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The backup region of the shop.
     */
    public function selectBackupRegion(?ShopifyRootBackupRegionArgumentsObject $argsObject = null): ShopifyMarketRegionInterfaceObject
    {
        $object = new ShopifyMarketRegionInterfaceObject("backupRegion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Blog` resource by ID.
     */
    public function selectBlog(ShopifyRootBlogArgumentsObject $argsObject): ShopifyBlogQueryObject
    {
        $object = new ShopifyBlogQueryObject("blog");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of the shop's [`Blog`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Blog) objects. Blogs serve as containers for [`Article`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Article) objects and provide content management capabilities for the store's editorial content.
     *
     * Supports [cursor-based pagination](https://shopify.dev/docs/api/usage/pagination-graphql) to control the number of blogs returned and their order. Use the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/blogs#arguments-query) argument to filter results by specific criteria.
     */
    public function selectBlogs(?ShopifyRootBlogsArgumentsObject $argsObject = null): ShopifyBlogConnectionQueryObject
    {
        $object = new ShopifyBlogConnectionQueryObject("blogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of blogs. Limited to a maximum of 10000 by default.
     */
    public function selectBlogsCount(?ShopifyRootBlogsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("blogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `BulkOperation` resource by ID.
     */
    public function selectBulkOperation(ShopifyRootBulkOperationArgumentsObject $argsObject): ShopifyBulkOperationQueryObject
    {
        $object = new ShopifyBulkOperationQueryObject("bulkOperation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the app's bulk operations meeting the specified filters. Defaults to sorting by created_at, with newest operations first.
     */
    public function selectBulkOperations(?ShopifyRootBulkOperationsArgumentsObject $argsObject = null): ShopifyBulkOperationConnectionQueryObject
    {
        $object = new ShopifyBulkOperationConnectionQueryObject("bulkOperations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the list of [business entities](https://shopify.dev/docs/api/admin-graphql/latest/objects/BusinessEntity) associated with the shop. Use this query to retrieve business entities for assigning to markets, managing payment providers per entity, or viewing entity attribution on orders.
     *
     * Each shop can have multiple business entities with one designated as primary. To identify the primary entity in the query results, set the [`primary`](https://shopify.dev/docs/api/admin-graphql/latest/queries/businessEntities#returns-BusinessEntity.fields.primary) field to `true`.
     *
     * Learn more about [managing multiple legal entities](https://shopify.dev/docs/apps/build/markets/multiple-entities).
     */
    public function selectBusinessEntities(?ShopifyRootBusinessEntitiesArgumentsObject $argsObject = null): ShopifyBusinessEntityQueryObject
    {
        $object = new ShopifyBusinessEntityQueryObject("businessEntities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a Business Entity by ID.
     */
    public function selectBusinessEntity(?ShopifyRootBusinessEntityArgumentsObject $argsObject = null): ShopifyBusinessEntityQueryObject
    {
        $object = new ShopifyBusinessEntityQueryObject("businessEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `DeliveryCarrierService` resource by ID.
     */
    public function selectCarrierService(ShopifyRootCarrierServiceArgumentsObject $argsObject): ShopifyDeliveryCarrierServiceQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of carrier services configured for the shop. Carrier services provide real-time shipping rates from external providers like FedEx, UPS, or custom shipping solutions. Use the `query` parameter to filter results by attributes such as active status.
     */
    public function selectCarrierServices(?ShopifyRootCarrierServicesArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceConnectionQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceConnectionQueryObject("carrierServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves all cart transform functions currently deployed by your app within the merchant's store. This query provides comprehensive access to your active cart modification logic, enabling management and monitoring of bundling and merchandising features.
     *
     * The query returns paginated results with full cart transform details, including function IDs, configuration settings, and operational status.
     *
     * Cart Transform ownership is scoped to your API client, ensuring you only see and manage functions deployed by your specific app. This isolation prevents conflicts between different apps while maintaining security boundaries for sensitive merchandising logic.
     *
     * Learn more about [managing cart transforms](https://shopify.dev/docs/api/functions/latest/cart-transform).
     */
    public function selectCartTransforms(?ShopifyRootCartTransformsArgumentsObject $argsObject = null): ShopifyCartTransformConnectionQueryObject
    {
        $object = new ShopifyCartTransformConnectionQueryObject("cartTransforms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `CashDrawer` resource by ID.
     */
    public function selectCashDrawer(ShopifyRootCashDrawerArgumentsObject $argsObject): ShopifyCashDrawerQueryObject
    {
        $object = new ShopifyCashDrawerQueryObject("cashDrawer");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of cash drawers in the shop.
     */
    public function selectCashDrawers(?ShopifyRootCashDrawersArgumentsObject $argsObject = null): ShopifyCashDrawerConnectionQueryObject
    {
        $object = new ShopifyCashDrawerConnectionQueryObject("cashDrawers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Summary of cash management data for a location. Data is returned only if the location has a POS Pro subscription.
     */
    public function selectCashManagementLocationSummary(ShopifyRootCashManagementLocationSummaryArgumentsObject $argsObject): ShopifyCashManagementSummaryQueryObject
    {
        $object = new ShopifyCashManagementSummaryQueryObject("cashManagementLocationSummary");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the cash management reason codes for the shop.
     */
    public function selectCashManagementReasonCodes(?ShopifyRootCashManagementReasonCodesArgumentsObject $argsObject = null): ShopifyCashManagementReasonCodeConnectionQueryObject
    {
        $object = new ShopifyCashManagementReasonCodeConnectionQueryObject("cashManagementReasonCodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Summary of cash management data across all locations with a POS Pro subscription for a shop, filtered by currency.
     */
    public function selectCashManagementShopSummary(ShopifyRootCashManagementShopSummaryArgumentsObject $argsObject): ShopifyCashManagementSummaryQueryObject
    {
        $object = new ShopifyCashManagementSummaryQueryObject("cashManagementShopSummary");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `CashTrackingSession` resource by ID.
     */
    public function selectCashTrackingSession(ShopifyRootCashTrackingSessionArgumentsObject $argsObject): ShopifyCashTrackingSessionQueryObject
    {
        $object = new ShopifyCashTrackingSessionQueryObject("cashTrackingSession");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a shop's cash tracking sessions for locations with a POS Pro subscription.
     *
     * Tip: To query for cash tracking sessions in bulk, you can
     * [perform a bulk operation](https://shopify.dev/docs/api/usage/bulk-operations/queries).
     */
    public function selectCashTrackingSessions(?ShopifyRootCashTrackingSessionsArgumentsObject $argsObject = null): ShopifyCashTrackingSessionConnectionQueryObject
    {
        $object = new ShopifyCashTrackingSessionConnectionQueryObject("cashTrackingSessions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [catalog](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) by its ID.
     * A catalog represents a list of products with publishing and pricing information,
     * and can be associated with a context, such as a market, company location, or app.
     *
     * Use the `catalog` query to retrieve information associated with the following workflows:
     *
     * - Managing product publications across different contexts
     * - Setting up contextual pricing with price lists
     * - Managing market-specific product availability
     * - Configuring B2B customer catalogs
     *
     * There are several types of catalogs:
     *
     * - [`MarketCatalog`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketCatalog)
     * - [`AppCatalog`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppCatalog)
     * - [`CompanyLocationCatalog`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocationCatalog)
     *
     * Learn more about [catalogs for different markets](https://shopify.dev/docs/apps/build/markets/catalogs-different-markets).
     */
    public function selectCatalog(ShopifyRootCatalogArgumentsObject $argsObject): ShopifyCatalogInterfaceObject
    {
        $object = new ShopifyCatalogInterfaceObject("catalog");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the most recent catalog operations for the shop.
     */
    public function selectCatalogOperations(?ShopifyRootCatalogOperationsArgumentsObject $argsObject = null): ShopifyResourceOperationInterfaceObject
    {
        $object = new ShopifyResourceOperationInterfaceObject("catalogOperations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of catalogs for the shop. Catalogs control which products are published and how they're priced in different contexts, such as international markets (Canada vs. United States), B2B company locations (different branches of the same business), or specific sales channels (such as online store vs. POS).
     *
     * Filter catalogs by [`type`](https://shopify.dev/docs/api/admin-graphql/latest/queries/catalogs#arguments-type) and use the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/catalogs#arguments-query) argument to search and filter by additional criteria.
     *
     * Learn more about [Shopify Catalogs](https://shopify.dev/docs/apps/build/markets/catalogs-different-markets).
     */
    public function selectCatalogs(?ShopifyRootCatalogsArgumentsObject $argsObject = null): ShopifyCatalogConnectionQueryObject
    {
        $object = new ShopifyCatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The count of catalogs belonging to the shop. Limited to a maximum of 10000 by default.
     */
    public function selectCatalogsCount(?ShopifyRootCatalogsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("catalogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) by ID. The channel must belong to the calling application.
     */
    public function selectChannel(ShopifyRootChannelArgumentsObject $argsObject): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject("channel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) by its unique string handle. The handle is either set explicitly during [`channelCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/channelCreate) or auto-generated from the specification handle and account ID. The channel must belong to the calling application.
     */
    public function selectChannelByHandle(ShopifyRootChannelByHandleArgumentsObject $argsObject): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject("channelByHandle");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) objects on the shop. When the calling application supports multi-channel, only channels established by the calling application are returned. Each channel represents an authenticated connection to an external selling platform such as a marketplace, social media platform, online store, or point-of-sale system.
     */
    public function selectChannels(?ShopifyRootChannelsArgumentsObject $argsObject = null): ShopifyChannelConnectionQueryObject
    {
        $object = new ShopifyChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A checkout and accounts configuration for a shop.
     */
    public function selectCheckoutAndAccountsConfiguration(ShopifyRootCheckoutAndAccountsConfigurationArgumentsObject $argsObject): ShopifyCheckoutAndAccountsConfigurationQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationQueryObject("checkoutAndAccountsConfiguration");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of checkout and accounts configurations on a shop.
     */
    public function selectCheckoutAndAccountsConfigurations(?ShopifyRootCheckoutAndAccountsConfigurationsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationConnectionQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationConnectionQueryObject("checkoutAndAccountsConfigurations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the visual customizations for checkout for a given [checkout profile](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutProfile).
     *
     * To update checkout branding settings, use the [`checkoutBrandingUpsert`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/checkoutBrandingUpsert) mutation. Learn more about [customizing checkout's appearance](https://shopify.dev/docs/apps/build/checkout/styling).
     *
     * @deprecated Use `checkoutAndAccountsConfiguration` instead.
     */
    public function selectCheckoutBranding(ShopifyRootCheckoutBrandingArgumentsObject $argsObject): ShopifyCheckoutBrandingQueryObject
    {
        $object = new ShopifyCheckoutBrandingQueryObject("checkoutBranding");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a [`CheckoutProfile`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutProfile). Checkout profiles define the branding settings and UI extensions for a store's checkout experience. Stores can have one published profile that renders on their live checkout and multiple draft profiles for testing customizations in the checkout editor.
     *
     * @deprecated Use `checkoutAndAccountsConfiguration` instead.
     */
    public function selectCheckoutProfile(ShopifyRootCheckoutProfileArgumentsObject $argsObject): ShopifyCheckoutProfileQueryObject
    {
        $object = new ShopifyCheckoutProfileQueryObject("checkoutProfile");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of checkout profiles on a shop.
     *
     * @deprecated Use `checkoutAndAccountsConfigurations` instead.
     */
    public function selectCheckoutProfiles(?ShopifyRootCheckoutProfilesArgumentsObject $argsObject = null): ShopifyCheckoutProfileConnectionQueryObject
    {
        $object = new ShopifyCheckoutProfileConnectionQueryObject("checkoutProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a [code discount](https://help.shopify.com/manual/discounts/discount-types#discount-codes) resource by ID.
     *
     * @deprecated Use `discountNode` instead.
     */
    public function selectCodeDiscountNode(ShopifyRootCodeDiscountNodeArgumentsObject $argsObject): ShopifyDiscountCodeNodeQueryObject
    {
        $object = new ShopifyDiscountCodeNodeQueryObject("codeDiscountNode");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [code discount](https://help.shopify.com/manual/discounts/discount-types#discount-codes) by its discount code. The search is case-insensitive, enabling you to find discounts regardless of how customers enter the code.
     *
     * Returns a [`DiscountCodeNode`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCodeNode) that contains the underlying discount details, which could be a basic [amount off discount](https://help.shopify.com/manual/discounts/discount-types/percentage-fixed-amount), a ["Buy X Get Y" (BXGY) discount](https://help.shopify.com/manual/discounts/discount-types/buy-x-get-y), a [free shipping discount](https://help.shopify.com/manual/discounts/discount-types/free-shipping), or an [app-provided discount](https://help.shopify.com/manual/discounts/discount-types/discounts-with-apps).
     *
     * Learn more about working with [Shopify's discount model](https://shopify.dev/docs/apps/build/discounts).
     */
    public function selectCodeDiscountNodeByCode(ShopifyRootCodeDiscountNodeByCodeArgumentsObject $argsObject): ShopifyDiscountCodeNodeQueryObject
    {
        $object = new ShopifyDiscountCodeNodeQueryObject("codeDiscountNodeByCode");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of [code-based discounts](https://help.shopify.com/manual/discounts/discount-types#discount-codes).
     *
     * @deprecated Use `discountNodes` instead.
     */
    public function selectCodeDiscountNodes(?ShopifyRootCodeDiscountNodesArgumentsObject $argsObject = null): ShopifyDiscountCodeNodeConnectionQueryObject
    {
        $object = new ShopifyDiscountCodeNodeConnectionQueryObject("codeDiscountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's code discount saved searches.
     */
    public function selectCodeDiscountSavedSearches(?ShopifyRootCodeDiscountSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("codeDiscountSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [collection](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) by its ID.
     * A collection represents a grouping of [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product)
     * that merchants can display and sell as a group in their [online store](https://shopify.dev/docs/apps/build/online-store) and
     * other [sales channels](https://shopify.dev/docs/apps/build/sales-channels).
     *
     * Use the `collection` query when you need to:
     *
     * - Manage collection publishing across sales channels
     * - Access collection metadata and SEO information
     * - Work with collection conditions and product relationships
     *
     * A collection determines which products it includes through conditions that automatically include
     * products that match, and through manual selections of individual products. Each collection has
     * associated metadata including title, description, handle, image, and
     * [metafields](https://shopify.dev/docs/apps/build/custom-data/metafields).
     */
    public function selectCollection(ShopifyRootCollectionArgumentsObject $argsObject): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("collection");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a collection by its unique handle identifier. Handles provide a URL-friendly way to reference collections and are commonly used in storefront URLs and navigation.
     *
     * For example, a collection with the title "Summer Sale" might have the handle `summer-sale`, allowing you to fetch it directly without knowing the internal ID.
     *
     * Use `CollectionByHandle` to:
     * - Fetch collections for storefront display and navigation
     * - Build collection-based URLs and routing systems
     * - Validate collection existence before displaying content
     *
     * Handles are automatically generated from collection titles but can be customized by merchants for SEO and branding purposes.
     *
     * Learn more about [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection).
     *
     * @deprecated Use `collectionByIdentifier` instead.
     */
    public function selectCollectionByHandle(ShopifyRootCollectionByHandleArgumentsObject $argsObject): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("collectionByHandle");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Return a collection by an identifier.
     */
    public function selectCollectionByIdentifier(ShopifyRootCollectionByIdentifierArgumentsObject $argsObject): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("collectionByIdentifier");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Lists all metafield definitions that can be used to create collection conditions.
     */
    public function selectCollectionConditionMetafieldDefinitions(?ShopifyRootCollectionConditionMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyCollectionConditionMetafieldDefinitionInterfaceInterfaceObject
    {
        $object = new ShopifyCollectionConditionMetafieldDefinitionInterfaceInterfaceObject("collectionConditionMetafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the shareable collection sources owned by the given app for the shop.
     */
    public function selectCollectionConditionsSources(ShopifyRootCollectionConditionsSourcesArgumentsObject $argsObject): ShopifyCollectionConditionsSourceConnectionQueryObject
    {
        $object = new ShopifyCollectionConditionsSourceConnectionQueryObject("collectionConditionsSources");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the apps that publish shareable collection sources for the shop, paginated.
     */
    public function selectCollectionConditionsSourcesByApp(?ShopifyRootCollectionConditionsSourcesByAppArgumentsObject $argsObject = null): ShopifyCollectionConditionsSourcesByAppConnectionQueryObject
    {
        $object = new ShopifyCollectionConditionsSourcesByAppConnectionQueryObject("collectionConditionsSourcesByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Lists all rules that can be used to create collections.
     *
     * @deprecated Use `CollectionSourceInclusionCondition*` and `CollectionSourceExclusionCondition*` types instead.
     */
    public function selectCollectionRulesConditions(?ShopifyRootCollectionRulesConditionsArgumentsObject $argsObject = null): ShopifyCollectionRuleConditionsQueryObject
    {
        $object = new ShopifyCollectionRuleConditionsQueryObject("collectionRulesConditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of the shop's collection saved searches.
     */
    public function selectCollectionSavedSearches(?ShopifyRootCollectionSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("collectionSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a list of [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection)
     * in a store. Collections are groups of [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product)
     * that merchants can organize for display in their [online store](https://shopify.dev/docs/apps/build/online-store) and
     * other [sales channels](https://shopify.dev/docs/apps/build/sales-channels).
     * For example, an athletics store might create different collections for running attire, shoes, and accessories.
     *
     * Use the `collections` query when you need to:
     *
     * - Build a browsing interface for a store's product groupings.
     * - Create collection searching, sorting, and filtering experiences (for example, by title, type, or published status).
     * - Sync collection data with external systems.
     *
     * The `collections` query supports [pagination](https://shopify.dev/docs/api/usage/pagination-graphql)
     * for large catalogs and [saved searches](https://shopify.dev/docs/api/admin-graphql/latest/queries/collections#arguments-savedSearchId)
     * for frequently used collection queries.
     *
     * The `collections` query returns collections with their associated metadata, including:
     *
     * - Basic collection information (title, description, handle, and type)
     * - Collection image and SEO metadata
     * - Product count and product relationships
     * - Collection rules or conditions
     * - Publishing status and publication details
     * - Metafields and custom attributes
     *
     * Learn more about [using metafields with collection conditions](https://shopify.dev/docs/apps/build/custom-data/metafields/use-metafield-capabilities).
     */
    public function selectCollections(?ShopifyRootCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of collections. Limited to a maximum of 10000 by default.
     */
    public function selectCollectionsCount(?ShopifyRootCollectionsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("collectionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Comment` resource by ID.
     */
    public function selectComment(ShopifyRootCommentArgumentsObject $argsObject): ShopifyCommentQueryObject
    {
        $object = new ShopifyCommentQueryObject("comment");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's comments.
     */
    public function selectComments(?ShopifyRootCommentsArgumentsObject $argsObject = null): ShopifyCommentConnectionQueryObject
    {
        $object = new ShopifyCommentConnectionQueryObject("comments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of companies in the shop. [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company) objects are business entities that purchase from the merchant.
     *
     * Use the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/companies#arguments-query) argument to filter companies by attributes like name or externalId. Sort and paginate results to handle large datasets efficiently. Learn more about [Shopify API search syntax](https://shopify.dev/docs/api/usage/search-syntax).
     */
    public function selectCompanies(?ShopifyRootCompaniesArgumentsObject $argsObject = null): ShopifyCompanyConnectionQueryObject
    {
        $object = new ShopifyCompanyConnectionQueryObject("companies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of companies for a shop. Limited to a maximum of 10000 by default.
     */
    public function selectCompaniesCount(?ShopifyRootCompaniesCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("companiesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Company` resource by ID.
     */
    public function selectCompany(ShopifyRootCompanyArgumentsObject $argsObject): ShopifyCompanyQueryObject
    {
        $object = new ShopifyCompanyQueryObject("company");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `CompanyContact` resource by ID.
     */
    public function selectCompanyContact(ShopifyRootCompanyContactArgumentsObject $argsObject): ShopifyCompanyContactQueryObject
    {
        $object = new ShopifyCompanyContactQueryObject("companyContact");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `CompanyContactRole` resource by ID.
     */
    public function selectCompanyContactRole(ShopifyRootCompanyContactRoleArgumentsObject $argsObject): ShopifyCompanyContactRoleQueryObject
    {
        $object = new ShopifyCompanyContactRoleQueryObject("companyContactRole");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `CompanyLocation` resource by ID.
     */
    public function selectCompanyLocation(ShopifyRootCompanyLocationArgumentsObject $argsObject): ShopifyCompanyLocationQueryObject
    {
        $object = new ShopifyCompanyLocationQueryObject("companyLocation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation) objects for B2B customers. Company locations represent individual branches or offices of a [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company) where B2B orders can be placed.
     *
     * Each location can have its own billing and shipping addresses, tax settings, [`PaymentTerms`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentTerms), and [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) assignments with custom pricing. Use the query parameter to search locations by name or other attributes.
     *
     * Learn more about [managing company locations](https://shopify.dev/docs/apps/build/b2b/manage-client-company-locations).
     */
    public function selectCompanyLocations(?ShopifyRootCompanyLocationsArgumentsObject $argsObject = null): ShopifyCompanyLocationConnectionQueryObject
    {
        $object = new ShopifyCompanyLocationConnectionQueryObject("companyLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the customer privacy consent policies of a shop.
     */
    public function selectConsentPolicy(?ShopifyRootConsentPolicyArgumentsObject $argsObject = null): ShopifyConsentPolicyQueryObject
    {
        $object = new ShopifyConsentPolicyQueryObject("consentPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of countries and regions for which consent policies can be created or updated.
     */
    public function selectConsentPolicyRegions(?ShopifyRootConsentPolicyRegionsArgumentsObject $argsObject = null): ShopifyConsentPolicyRegionQueryObject
    {
        $object = new ShopifyConsentPolicyRegionQueryObject("consentPolicyRegions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the [`AppInstallation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppInstallation) for the currently authenticated app. Provides access to granted access scopes, active [`AppSubscription`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscription) objects, and billing information for your app.
     *
     * Use this query to check which permissions your app has, monitor subscription status, or retrieve [`AppCredit`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppCredit) objects. Learn more about [managing access scopes](https://shopify.dev/docs/api/usage/access-scopes#checking-granted-access-scopes), [subscription billing](https://shopify.dev/docs/apps/launch/billing/subscription-billing), and [app credits](https://shopify.dev/docs/apps/launch/billing/award-app-credits).
     */
    public function selectCurrentAppInstallation(?ShopifyRootCurrentAppInstallationArgumentsObject $argsObject = null): ShopifyAppInstallationQueryObject
    {
        $object = new ShopifyAppInstallationQueryObject("currentAppInstallation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the current app's most recent [`BulkOperation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BulkOperation). Bulk query and bulk mutation operations can run at the same time per shop. The number of concurrent operations that an app can run depends on the API version. For the applicable concurrency limits, refer to the [bulk operations guide](https://shopify.dev/docs/api/usage/bulk-operations/queries).
     *
     * The operation type parameter determines whether to retrieve the most recent query or mutation bulk operation. Use this query to check the operation's status, track its progress, and retrieve the result URL when it completes.
     *
     * @deprecated Use `bulkOperations` with status filter instead.
     */
    public function selectCurrentBulkOperation(?ShopifyRootCurrentBulkOperationArgumentsObject $argsObject = null): ShopifyBulkOperationQueryObject
    {
        $object = new ShopifyBulkOperationQueryObject("currentBulkOperation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member making the API request.
     */
    public function selectCurrentStaffMember(?ShopifyRootCurrentStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("currentStaffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Customer` resource by ID.
     */
    public function selectCustomer(ShopifyRootCustomerArgumentsObject $argsObject): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `CustomerAccountPage` resource by ID.
     */
    public function selectCustomerAccountPage(ShopifyRootCustomerAccountPageArgumentsObject $argsObject): ShopifyCustomerAccountPageInterfaceObject
    {
        $object = new ShopifyCustomerAccountPageInterfaceObject("customerAccountPage");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's customer account pages.
     */
    public function selectCustomerAccountPages(?ShopifyRootCustomerAccountPagesArgumentsObject $argsObject = null): ShopifyCustomerAccountPageConnectionQueryObject
    {
        $object = new ShopifyCustomerAccountPageConnectionQueryObject("customerAccountPages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Return a customer by an identifier.
     */
    public function selectCustomerByIdentifier(ShopifyRootCustomerByIdentifierArgumentsObject $argsObject): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customerByIdentifier");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the status of a customer merge request job.
     */
    public function selectCustomerMergeJobStatus(ShopifyRootCustomerMergeJobStatusArgumentsObject $argsObject): ShopifyCustomerMergeRequestQueryObject
    {
        $object = new ShopifyCustomerMergeRequestQueryObject("customerMergeJobStatus");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a preview of a customer merge request.
     *
     * The `customerOneId` and `customerTwoId` arguments don't guarantee which customer is kept. Shopify
     * selects the resulting customer in this order:
     * 1. If `overrideFields.customerIdOfEmailToKeep` is provided and valid, then the selected customer is kept.
     * 2. If exactly one customer has an email address, then that customer is kept.
     * 3. If both customers have email addresses, then account state and email marketing consent determine
     *    the customer that's kept: an `enabled` account wins over other account states; otherwise, an
     *    `invited` account can win when consent doesn't already prefer `subscribed` or `pending`; otherwise
     *    the consent result is used. If those rules don't prefer either customer, then `customerTwoId` is kept.
     * 4. If neither customer has an email address, then `customerTwoId` is kept.
     */
    public function selectCustomerMergePreview(ShopifyRootCustomerMergePreviewArgumentsObject $argsObject): ShopifyCustomerMergePreviewQueryObject
    {
        $object = new ShopifyCustomerMergePreviewQueryObject("customerMergePreview");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a vaulted customer payment method by its ID, including the instrument type (credit card, PayPal, etc.), billing address, and current status. Optionally includes revoked payment methods. Use this to look up a specific saved payment method for a customer — for example, to check whether a subscription's payment method is still valid or to display stored payment details.
     */
    public function selectCustomerPaymentMethod(ShopifyRootCustomerPaymentMethodArgumentsObject $argsObject): ShopifyCustomerPaymentMethodQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("customerPaymentMethod");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's customer saved searches.
     *
     * @deprecated Use `segments` instead.
     */
    public function selectCustomerSavedSearches(?ShopifyRootCustomerSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("customerSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of customers that belong to an individual [`Segment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Segment). Segments group customers based on criteria defined through [ShopifyQL queries](https://shopify.dev/docs/api/shopifyql/segment-query-language-reference). Access segment members with their profile information and purchase summary data. The connection includes statistics for analyzing segment attributes (such as average and sum calculations) and a total count of all members.
     * The maximum page size is 1000.
     */
    public function selectCustomerSegmentMembers(?ShopifyRootCustomerSegmentMembersArgumentsObject $argsObject = null): ShopifyCustomerSegmentMemberConnectionQueryObject
    {
        $object = new ShopifyCustomerSegmentMemberConnectionQueryObject("customerSegmentMembers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `CustomerSegmentMembersQuery` resource by ID.
     */
    public function selectCustomerSegmentMembersQuery(ShopifyRootCustomerSegmentMembersQueryArgumentsObject $argsObject): ShopifyCustomerSegmentMembersQueryQueryObject
    {
        $object = new ShopifyCustomerSegmentMembersQueryQueryObject("customerSegmentMembersQuery");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether a member, which is a customer, belongs to a segment.
     */
    public function selectCustomerSegmentMembership(ShopifyRootCustomerSegmentMembershipArgumentsObject $argsObject): ShopifySegmentMembershipResponseQueryObject
    {
        $object = new ShopifySegmentMembershipResponseQueryObject("customerSegmentMembership");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of [customers](https://shopify.dev/api/admin-graphql/latest/objects/Customer) in your Shopify store, including key information such as name, email, location, and purchase history.
     * Use this query to segment your audience, personalize marketing campaigns, or analyze customer behavior by applying filters based on location, order history, marketing preferences and tags.
     * The `customers` query supports [pagination](https://shopify.dev/api/usage/pagination-graphql) and [sorting](https://shopify.dev/api/admin-graphql/latest/enums/CustomerSortKeys).
     */
    public function selectCustomers(?ShopifyRootCustomersArgumentsObject $argsObject = null): ShopifyCustomerConnectionQueryObject
    {
        $object = new ShopifyCustomerConnectionQueryObject("customers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of customers. Limited to a maximum of 10000 by default.
     */
    public function selectCustomersCount(?ShopifyRootCustomersCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("customersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The paginated list of deletion events.
     *
     * @deprecated Use `events` instead.
     */
    public function selectDeletionEvents(?ShopifyRootDeletionEventsArgumentsObject $argsObject = null): ShopifyDeletionEventConnectionQueryObject
    {
        $object = new ShopifyDeletionEventConnectionQueryObject("deletionEvents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery customization.
     */
    public function selectDeliveryCustomization(ShopifyRootDeliveryCustomizationArgumentsObject $argsObject): ShopifyDeliveryCustomizationQueryObject
    {
        $object = new ShopifyDeliveryCustomizationQueryObject("deliveryCustomization");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery customizations.
     */
    public function selectDeliveryCustomizations(?ShopifyRootDeliveryCustomizationsArgumentsObject $argsObject = null): ShopifyDeliveryCustomizationConnectionQueryObject
    {
        $object = new ShopifyDeliveryCustomizationConnectionQueryObject("deliveryCustomizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`DeliveryProfile`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryProfile) by ID. Delivery profiles group shipping settings for specific [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects that ship from selected [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects to [delivery zones](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryZone with defined rates.
     *
     * If the shop uses market-driven shipping, checkout ignores the zones and rates on merchant-managed profiles, so they can differ from what buyers pay. See [`DeliveryProfile`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryProfile) for details.
     *
     * Learn more about [delivery profiles](https://shopify.dev/docs/apps/build/purchase-options/deferred/delivery-and-deferment#whats-a-delivery-profile).
     */
    public function selectDeliveryProfile(ShopifyRootDeliveryProfileArgumentsObject $argsObject): ShopifyDeliveryProfileQueryObject
    {
        $object = new ShopifyDeliveryProfileQueryObject("deliveryProfile");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`DeliveryProfile`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryProfile) objects for the shop. Delivery profiles group [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects that share shipping rates and zones.
     *
     * Each profile contains [`DeliveryLocationGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryLocationGroup) objects that organize fulfillment [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects and their associated delivery zones. [`DeliveryZone`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryZone) objects define geographic regions with specific shipping methods and rates. Use the [`merchantOwnedOnly`](https://shopify.dev/docs/api/admin-graphql/latest/queries/deliveryProfiles#arguments-merchantOwnedOnly) filter to exclude profiles that third-party apps manage.
     *
     * If the shop uses market-driven shipping, checkout ignores the zones and rates on merchant-managed profiles, so they can differ from what buyers pay. See [`DeliveryProfile`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryProfile) for details.
     *
     * Learn more about [delivery profiles](https://shopify.dev/docs/apps/build/purchase-options/deferred/delivery-and-deferment#whats-a-delivery-profile).
     */
    public function selectDeliveryProfiles(?ShopifyRootDeliveryProfilesArgumentsObject $argsObject = null): ShopifyDeliveryProfileConnectionQueryObject
    {
        $object = new ShopifyDeliveryProfileConnectionQueryObject("deliveryProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns delivery promise participants.
     */
    public function selectDeliveryPromiseParticipants(ShopifyRootDeliveryPromiseParticipantsArgumentsObject $argsObject): ShopifyDeliveryPromiseParticipantConnectionQueryObject
    {
        $object = new ShopifyDeliveryPromiseParticipantConnectionQueryObject("deliveryPromiseParticipants");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Lookup a delivery promise provider.
     */
    public function selectDeliveryPromiseProvider(ShopifyRootDeliveryPromiseProviderArgumentsObject $argsObject): ShopifyDeliveryPromiseProviderQueryObject
    {
        $object = new ShopifyDeliveryPromiseProviderQueryObject("deliveryPromiseProvider");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Represents the delivery promise settings for a shop.
     */
    public function selectDeliveryPromiseSettings(?ShopifyRootDeliveryPromiseSettingsArgumentsObject $argsObject = null): ShopifyDeliveryPromiseSettingQueryObject
    {
        $object = new ShopifyDeliveryPromiseSettingQueryObject("deliveryPromiseSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of discount codes for the shop. Limited to a maximum of 10000 by default.
     */
    public function selectDiscountCodesCount(?ShopifyRootDiscountCodesCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("discountCodesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `DiscountNode` resource by ID.
     */
    public function selectDiscountNode(ShopifyRootDiscountNodeArgumentsObject $argsObject): ShopifyDiscountNodeQueryObject
    {
        $object = new ShopifyDiscountNodeQueryObject("discountNode");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of discounts.
     */
    public function selectDiscountNodes(?ShopifyRootDiscountNodesArgumentsObject $argsObject = null): ShopifyDiscountNodeConnectionQueryObject
    {
        $object = new ShopifyDiscountNodeConnectionQueryObject("discountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of discounts for the shop. Limited to a maximum of 10000 by default.
     */
    public function selectDiscountNodesCount(?ShopifyRootDiscountNodesCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("discountNodesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `DiscountRedeemCodeBulkCreation` resource by ID.
     */
    public function selectDiscountRedeemCodeBulkCreation(ShopifyRootDiscountRedeemCodeBulkCreationArgumentsObject $argsObject): ShopifyDiscountRedeemCodeBulkCreationQueryObject
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationQueryObject("discountRedeemCodeBulkCreation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's redeemed discount code saved searches.
     */
    public function selectDiscountRedeemCodeSavedSearches(?ShopifyRootDiscountRedeemCodeSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("discountRedeemCodeSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of tags associated to discounts.
     */
    public function selectDiscountTags(?ShopifyRootDiscountTagsArgumentsObject $argsObject = null): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("discountTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `ShopifyPaymentsDispute` resource by ID.
     */
    public function selectDispute(ShopifyRootDisputeArgumentsObject $argsObject): ShopifyShopifyPaymentsDisputeQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeQueryObject("dispute");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `ShopifyPaymentsDisputeEvidence` resource by ID.
     */
    public function selectDisputeEvidence(ShopifyRootDisputeEvidenceArgumentsObject $argsObject): ShopifyShopifyPaymentsDisputeEvidenceQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeEvidenceQueryObject("disputeEvidence");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of all Shopify Payments disputes for the shop. Disputes occur when a buyer files a complaint with their payments provider, and the merchant must provide evidence to contest it. Each dispute includes the status, amount, reason, and associated order. Use this to monitor and manage open chargebacks and track dispute resolution outcomes.
     */
    public function selectDisputes(?ShopifyRootDisputesArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeConnectionQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeConnectionQueryObject("disputes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Domain` resource by ID.
     */
    public function selectDomain(ShopifyRootDomainArgumentsObject $argsObject): ShopifyDomainQueryObject
    {
        $object = new ShopifyDomainQueryObject("domain");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [draft order](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder) by its ID.
     * A draft order is an order created by a merchant on behalf of their
     * customers. Draft orders contain all necessary order details (products, pricing, customer information)
     * but require payment to be accepted before they can be converted into
     * [completed orders](https://shopify.dev/docs/api/admin-graphql/latest/mutations/draftOrderComplete).
     *
     * Use the `draftOrder` query to retrieve information associated with the following workflows:
     *
     * - Creating orders for phone, in-person, or chat sales
     * - Sending invoices to customers with secure checkout links
     * - Managing custom items and additional costs
     * - Selling products at discount or wholesale rates
     * - Processing pre-orders and saving drafts for later completion
     *
     * A draft order is associated with a
     * [customer](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)
     * and contains multiple [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrderLineItem).
     * Each draft order has a [status](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder#field-DraftOrder.fields.status),
     * which indicates its progress through the sales workflow.
     */
    public function selectDraftOrder(ShopifyRootDraftOrderArgumentsObject $argsObject): ShopifyDraftOrderQueryObject
    {
        $object = new ShopifyDraftOrderQueryObject("draftOrder");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Available delivery options for a [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder) based on the provided input. The query returns shipping rates, local delivery rates, and pickup locations that merchants can choose from when creating draft orders.
     *
     * Accepts draft order details including [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects, [`MailingAddress`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress) for shipping, and discounts to determine which delivery methods are available. Pagination parameters control the number of local pickup options returned.
     */
    public function selectDraftOrderAvailableDeliveryOptions(ShopifyRootDraftOrderAvailableDeliveryOptionsArgumentsObject $argsObject): ShopifyDraftOrderAvailableDeliveryOptionsQueryObject
    {
        $object = new ShopifyDraftOrderAvailableDeliveryOptionsQueryObject("draftOrderAvailableDeliveryOptions");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of the shop's draft order saved searches.
     */
    public function selectDraftOrderSavedSearches(?ShopifyRootDraftOrderSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("draftOrderSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `DraftOrderTag` resource by ID.
     */
    public function selectDraftOrderTag(ShopifyRootDraftOrderTagArgumentsObject $argsObject): ShopifyDraftOrderTagQueryObject
    {
        $object = new ShopifyDraftOrderTagQueryObject("draftOrderTag");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of saved draft orders.
     */
    public function selectDraftOrders(?ShopifyRootDraftOrdersArgumentsObject $argsObject = null): ShopifyDraftOrderConnectionQueryObject
    {
        $object = new ShopifyDraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the number of draft orders that match the query. Limited to a maximum of 10000 by default.
     */
    public function selectDraftOrdersCount(?ShopifyRootDraftOrdersCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("draftOrdersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a single event by ID. Events chronicle activities in your store such as resource creation, updates, or staff comments. The query returns an [`Event`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Event) interface of type [`BasicEvent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BasicEvent) or [`CommentEvent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CommentEvent).
     */
    public function selectEvent(ShopifyRootEventArgumentsObject $argsObject): ShopifyEventInterfaceObject
    {
        $object = new ShopifyEventInterfaceObject("event");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of events that chronicle activities in the store. [`Event`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Event) is an interface implemented by types such as [`BasicEvent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BasicEvent) and [`CommentEvent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CommentEvent) that track actions such as creating [`Article`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Article) objects, fulfilling [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) objects, adding [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects, or staff comments on timelines.
     *
     * The query supports filtering and sorting to help you find specific events or audit store activity over time.
     */
    public function selectEvents(?ShopifyRootEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of events. Limited to a maximum of 10000.
     */
    public function selectEventsCount(?ShopifyRootEventsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("eventsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the shop's file saved searches.
     */
    public function selectFileSavedSearches(?ShopifyRootFileSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("fileSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a paginated list of files that have been uploaded to a Shopify store. Files represent digital assets
     * that merchants can upload to their store for various purposes including product images, marketing materials,
     * documents, and brand assets.
     *
     * Use the `files` query to retrieve information associated with the following workflows:
     *
     * - [Managing product media and images](https://shopify.dev/docs/apps/build/online-store/product-media)
     * - [Theme development and asset management](https://shopify.dev/docs/storefronts/themes/store/success/brand-assets)
     * - Brand asset management and [checkout branding](https://shopify.dev/docs/apps/build/checkout/styling/add-favicon)
     *
     * Files can include multiple [content types](https://shopify.dev/docs/api/admin-graphql/latest/enums/FileContentType),
     * such as images, videos, 3D models, and generic files. Each file has
     * properties like dimensions, file size, alt text for accessibility, and upload status. Files can be filtered
     * by [media type](https://shopify.dev/docs/api/admin-graphql/latest/enums/MediaContentType) and can be associated with
     * [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product),
     * [themes](https://shopify.dev/docs/api/admin-graphql/latest/objects/OnlineStoreTheme),
     * and other store resources.
     */
    public function selectFiles(?ShopifyRootFilesArgumentsObject $argsObject = null): ShopifyFileConnectionQueryObject
    {
        $object = new ShopifyFileConnectionQueryObject("files");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the access policy for a finance app .
     */
    public function selectFinanceAppAccessPolicy(?ShopifyRootFinanceAppAccessPolicyArgumentsObject $argsObject = null): ShopifyFinanceAppAccessPolicyQueryObject
    {
        $object = new ShopifyFinanceAppAccessPolicyQueryObject("financeAppAccessPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns Know Your Customer (KYC) information for the shop's Shopify Payments account. KYC data includes verified identity and business details collected during onboarding. This is primarily used by embedded finance apps (e.g., Shopify Balance, Bill Pay) that need to verify the merchant's identity without requiring a separate KYC process.
     */
    public function selectFinanceKycInformation(?ShopifyRootFinanceKycInformationArgumentsObject $argsObject = null): ShopifyFinanceKycInformationQueryObject
    {
        $object = new ShopifyFinanceKycInformationQueryObject("financeKycInformation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`Fulfillment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Fulfillment) by its ID. A fulfillment is a record that the merchant has completed their work required for one or more line items in an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order). It includes tracking information, [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects, and the status of the fulfillment.
     *
     * Use this query to track the progress of shipped items, view tracking details, or check [fulfillment events](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentEvent) for example when a package is out for delivery or delivered.
     */
    public function selectFulfillment(ShopifyRootFulfillmentArgumentsObject $argsObject): ShopifyFulfillmentQueryObject
    {
        $object = new ShopifyFulfillmentQueryObject("fulfillment");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The fulfillment constraint rules that belong to a shop.
     */
    public function selectFulfillmentConstraintRules(?ShopifyRootFulfillmentConstraintRulesArgumentsObject $argsObject = null): ShopifyFulfillmentConstraintRuleQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleQueryObject("fulfillmentConstraintRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `FulfillmentOrder` resource by ID.
     */
    public function selectFulfillmentOrder(ShopifyRootFulfillmentOrderArgumentsObject $argsObject): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("fulfillmentOrder");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The paginated list of all fulfillment orders.
     * The returned fulfillment orders are filtered according to the
     * [fulfillment order access scopes](https://shopify.dev/api/admin-graphql/latest/objects/fulfillmentorder#api-access-scopes)
     * granted to the app.
     *
     * Use this query to retrieve fulfillment orders assigned to merchant-managed locations,
     * third-party fulfillment service locations, or all kinds of locations together.
     *
     * For fetching only the fulfillment orders assigned to the app's locations, use the
     * [assignedFulfillmentOrders](https://shopify.dev/api/admin-graphql/2024-07/objects/queryroot#connection-assignedfulfillmentorders)
     * connection.
     */
    public function selectFulfillmentOrders(?ShopifyRootFulfillmentOrdersArgumentsObject $argsObject = null): ShopifyFulfillmentOrderConnectionQueryObject
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a [`FulfillmentService`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentService) by its ID. The service can manage inventory, process fulfillment requests, and provide tracking details through callback endpoints or directly calling Shopify's APIs.
     *
     * When you register a fulfillment service, Shopify automatically creates an associated [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) where fulfillment order's can be assigned to be processed.
     *
     * Learn more about [building fulfillment service apps](https://shopify.dev/docs/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services).
     */
    public function selectFulfillmentService(ShopifyRootFulfillmentServiceArgumentsObject $argsObject): ShopifyFulfillmentServiceQueryObject
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentService");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`GiftCard`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCard) by its ID. Returns the gift card's balance, transaction history, [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) information, and whether it's enabled.
     *
     * Additional fields include the initial value, expiration date, deactivation timestamp (if applicable), and the associated [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) if the gift card was purchased by a customer through checkout. Gift cards that merchants create manually won't have an associated order.
     */
    public function selectGiftCard(ShopifyRootGiftCardArgumentsObject $argsObject): ShopifyGiftCardQueryObject
    {
        $object = new ShopifyGiftCardQueryObject("giftCard");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The configuration for the shop's gift cards.
     */
    public function selectGiftCardConfiguration(?ShopifyRootGiftCardConfigurationArgumentsObject $argsObject = null): ShopifyGiftCardConfigurationQueryObject
    {
        $object = new ShopifyGiftCardConfigurationQueryObject("giftCardConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`GiftCard`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCard) objects issued for the shop.
     *
     * You can filter gift cards by attributes such as status, last characters of the code, balance status, and other values using the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/giftCards#arguments-query) parameter. You can also apply [`SavedSearch`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SavedSearch) objects to filter results.
     */
    public function selectGiftCards(?ShopifyRootGiftCardsArgumentsObject $argsObject = null): ShopifyGiftCardConnectionQueryObject
    {
        $object = new ShopifyGiftCardConnectionQueryObject("giftCards");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the total count of gift cards that have been issued by the shop. Use this for dashboard summaries or to understand the scale of a merchant's gift card program. The count includes all gift cards regardless of status (active, disabled, or fully redeemed). Limited to a maximum of 10000 by default.
     */
    public function selectGiftCardsCount(?ShopifyRootGiftCardsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("giftCardsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves an [inventory item](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) by its ID. An inventory item represents the inventory for a [product variant](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant), and holds the stock keeping unit (SKU), whether quantities are tracked, shipping requirements, and customs information.
     *
     * Use the [`inventoryLevels`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem#field-InventoryItem.fields.inventoryLevels) field to get the [inventory level](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel) for each location that stocks the item, and the level's [`quantities`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel#field-InventoryLevel.fields.quantities) field to read its inventory quantities by name.
     *
     * Learn more about [inventory object relationships](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#inventory-object-relationships).
     */
    public function selectInventoryItem(ShopifyRootInventoryItemArgumentsObject $argsObject): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of inventory items.
     */
    public function selectInventoryItems(?ShopifyRootInventoryItemsArgumentsObject $argsObject = null): ShopifyInventoryItemConnectionQueryObject
    {
        $object = new ShopifyInventoryItemConnectionQueryObject("inventoryItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves an [inventory level](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel) by its ID. An inventory level exists for an inventory item at each location that stocks it. Each inventory level has a [`quantities`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel#field-InventoryLevel.fields.quantities) field to read the inventory quantity by name. Quantity names represent the [inventory states](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps#inventory-states) that merchants use to track inventory.
     *
     * The [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) and [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects each have an `inventoryLevels` field. Use it to find the ID of an inventory level.
     *
     * Learn more about [inventory object relationships](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#inventory-object-relationships).
     */
    public function selectInventoryLevel(ShopifyRootInventoryLevelArgumentsObject $argsObject): ShopifyInventoryLevelQueryObject
    {
        $object = new ShopifyInventoryLevelQueryObject("inventoryLevel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the shop's inventory configuration, including all inventory quantity names. Quantity names represent different [inventory states](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps#inventory-states) that merchants use to track inventory.
     */
    public function selectInventoryProperties(?ShopifyRootInventoryPropertiesArgumentsObject $argsObject = null): ShopifyInventoryPropertiesQueryObject
    {
        $object = new ShopifyInventoryPropertiesQueryObject("inventoryProperties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns an `InventoryPurchaseOrder` object by ID.
     */
    public function selectInventoryPurchaseOrder(ShopifyRootInventoryPurchaseOrderArgumentsObject $argsObject): ShopifyInventoryPurchaseOrderQueryObject
    {
        $object = new ShopifyInventoryPurchaseOrderQueryObject("inventoryPurchaseOrder");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of purchase orders.
     */
    public function selectInventoryPurchaseOrders(?ShopifyRootInventoryPurchaseOrdersArgumentsObject $argsObject = null): ShopifyInventoryPurchaseOrderConnectionQueryObject
    {
        $object = new ShopifyInventoryPurchaseOrderConnectionQueryObject("inventoryPurchaseOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves an [`InventoryShipment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryShipment) by ID. Returns tracking details, [`InventoryShipmentLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryShipmentLineItem) objects with quantities, and the shipment's current [`InventoryShipmentStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/InventoryShipmentStatus).
     */
    public function selectInventoryShipment(ShopifyRootInventoryShipmentArgumentsObject $argsObject): ShopifyInventoryShipmentQueryObject
    {
        $object = new ShopifyInventoryShipmentQueryObject("inventoryShipment");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`InventoryShipment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryShipment) objects.
     *
     * Supports filtering by barcode (e.g. `barcode:"12345"`), status (e.g. `status:"draft"` or `status:"in_transit"`), and destination (e.g. `destination_id:12345`).
     */
    public function selectInventoryShipments(?ShopifyRootInventoryShipmentsArgumentsObject $argsObject = null): ShopifyInventoryShipmentConnectionQueryObject
    {
        $object = new ShopifyInventoryShipmentConnectionQueryObject("inventoryShipments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns an [`InventoryTransfer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransfer) by ID. Inventory transfers track the movement of inventory between locations, including origin and destination details, [`InventoryTransferLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransferLineItem) objects, quantities, and [`InventoryTransferStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/InventoryTransferStatus) values.
     */
    public function selectInventoryTransfer(ShopifyRootInventoryTransferArgumentsObject $argsObject): ShopifyInventoryTransferQueryObject
    {
        $object = new ShopifyInventoryTransferQueryObject("inventoryTransfer");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`InventoryTransfer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransfer) objects between locations. Transfers track the movement of [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) objects between [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects.
     *
     * Supports filtering transfers using query parameters and sorting by various criteria. Use the connection's edges to access transfer details including [`InventoryTransferLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransferLineItem) objects, quantities, and shipment status.
     */
    public function selectInventoryTransfers(?ShopifyRootInventoryTransfersArgumentsObject $argsObject = null): ShopifyInventoryTransferConnectionQueryObject
    {
        $object = new ShopifyInventoryTransferConnectionQueryObject("inventoryTransfers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a Job resource by ID. Used to check the status of internal jobs and any applicable changes.
     */
    public function selectJob(ShopifyRootJobArgumentsObject $argsObject): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) by its ID. Locations are physical places where merchants store inventory, such as warehouses, retail stores, or fulfillment centers.
     *
     * Each location tracks inventory levels, fulfillment capabilities, and address information. Active locations can stock products and fulfill orders based on their configuration settings.
     */
    public function selectLocation(?ShopifyRootLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Return a location by an identifier.
     */
    public function selectLocationByIdentifier(ShopifyRootLocationByIdentifierArgumentsObject $argsObject): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("locationByIdentifier");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of inventory locations where merchants can stock [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) items and fulfill [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) items.
     *
     * Returns only active locations by default. Use the [`includeInactive`](https://shopify.dev/docs/api/admin-graphql/latest/queries/locations#arguments-includeInactive) argument to retrieve deactivated locations that can no longer stock inventory or fulfill orders. Use the [`includeLegacy`](https://shopify.dev/docs/api/admin-graphql/latest/queries/locations#arguments-includeLegacy) argument to include locations that [`FulfillmentService`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentService) apps manage. Use the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/locations#arguments-query) argument to filter by location attributes like name, address, and whether local pickup is enabled.
     */
    public function selectLocations(?ShopifyRootLocationsArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
    {
        $object = new ShopifyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of all origin locations available for a delivery profile.
     *
     * @deprecated Use `locationsAvailableForDeliveryProfilesConnection` instead.
     */
    public function selectLocationsAvailableForDeliveryProfiles(?ShopifyRootLocationsAvailableForDeliveryProfilesArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("locationsAvailableForDeliveryProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of all origin locations available for a delivery profile.
     */
    public function selectLocationsAvailableForDeliveryProfilesConnection(?ShopifyRootLocationsAvailableForDeliveryProfilesConnectionArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
    {
        $object = new ShopifyLocationConnectionQueryObject("locationsAvailableForDeliveryProfilesConnection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the count of locations for the given shop. Limited to a maximum of 10000 by default.
     */
    public function selectLocationsCount(?ShopifyRootLocationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of fulfillment orders that are on hold.
     */
    public function selectManualHoldsFulfillmentOrders(?ShopifyRootManualHoldsFulfillmentOrdersArgumentsObject $argsObject = null): ShopifyFulfillmentOrderConnectionQueryObject
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("manualHoldsFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Market` resource by ID.
     */
    public function selectMarket(ShopifyRootMarketArgumentsObject $argsObject): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("market");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the applicable market for a customer based on where they are in the world.
     *
     * @deprecated This `market_by_geography` field will be removed in a future version of the API.
     */
    public function selectMarketByGeography(ShopifyRootMarketByGeographyArgumentsObject $argsObject): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("marketByGeography");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A resource that can have localized values for different markets.
     */
    public function selectMarketLocalizableResource(ShopifyRootMarketLocalizableResourceArgumentsObject $argsObject): ShopifyMarketLocalizableResourceQueryObject
    {
        $object = new ShopifyMarketLocalizableResourceQueryObject("marketLocalizableResource");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Resources that can have localized values for different markets.
     */
    public function selectMarketLocalizableResources(ShopifyRootMarketLocalizableResourcesArgumentsObject $argsObject): ShopifyMarketLocalizableResourceConnectionQueryObject
    {
        $object = new ShopifyMarketLocalizableResourceConnectionQueryObject("marketLocalizableResources");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Resources that can have localized values for different markets.
     */
    public function selectMarketLocalizableResourcesByIds(ShopifyRootMarketLocalizableResourcesByIdsArgumentsObject $argsObject): ShopifyMarketLocalizableResourceConnectionQueryObject
    {
        $object = new ShopifyMarketLocalizableResourceConnectionQueryObject("marketLocalizableResourcesByIds");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The relationships between all markets in the shop. Eventually consistent following a change in market hierarchy.
     * See [`marketRelationshipsStatus`](https://shopify.dev/docs/api/admin-graphql/latest/queries/marketRelationshipsStatus).
     */
    public function selectMarketRelationships(?ShopifyRootMarketRelationshipsArgumentsObject $argsObject = null): ShopifyMarketRelationshipConnectionQueryObject
    {
        $object = new ShopifyMarketRelationshipConnectionQueryObject("marketRelationships");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The state of the shop's market relationships.
     */
    public function selectMarketRelationshipsStatus(?ShopifyRootMarketRelationshipsStatusArgumentsObject $argsObject = null): ShopifyMarketRelationshipsStatusQueryObject
    {
        $object = new ShopifyMarketRelationshipsStatusQueryObject("marketRelationshipsStatus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of marketing activities associated with the marketing app.
     */
    public function selectMarketingActivities(?ShopifyRootMarketingActivitiesArgumentsObject $argsObject = null): ShopifyMarketingActivityConnectionQueryObject
    {
        $object = new ShopifyMarketingActivityConnectionQueryObject("marketingActivities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `MarketingActivity` resource by ID.
     */
    public function selectMarketingActivity(ShopifyRootMarketingActivityArgumentsObject $argsObject): ShopifyMarketingActivityQueryObject
    {
        $object = new ShopifyMarketingActivityQueryObject("marketingActivity");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `MarketingEvent` resource by ID.
     */
    public function selectMarketingEvent(ShopifyRootMarketingEventArgumentsObject $argsObject): ShopifyMarketingEventQueryObject
    {
        $object = new ShopifyMarketingEventQueryObject("marketingEvent");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of marketing events associated with the marketing app.
     */
    public function selectMarketingEvents(?ShopifyRootMarketingEventsArgumentsObject $argsObject = null): ShopifyMarketingEventConnectionQueryObject
    {
        $object = new ShopifyMarketingEventConnectionQueryObject("marketingEvents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) objects configured for the shop. Markets match buyers based on defined conditions to deliver customized shopping experiences.
     *
     * Filter markets by [`MarketType`](https://shopify.dev/docs/api/admin-graphql/latest/enums/MarketType) and [`MarketStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/MarketStatus), search by name, and control sort order. Retrieve market configurations including [`MarketCurrencySettings`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketCurrencySettings), [`MarketWebPresence`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketWebPresence) objects, and [`MarketConditions`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketConditions).
     *
     * Learn more about [Shopify Markets](https://shopify.dev/docs/apps/build/markets).
     */
    public function selectMarkets(?ShopifyRootMarketsArgumentsObject $argsObject = null): ShopifyMarketConnectionQueryObject
    {
        $object = new ShopifyMarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The resolved values for a buyer signal.
     */
    public function selectMarketsResolvedValues(ShopifyRootMarketsResolvedValuesArgumentsObject $argsObject): ShopifyMarketsResolvedValuesQueryObject
    {
        $object = new ShopifyMarketsResolvedValuesQueryObject("marketsResolvedValues");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Menu` resource by ID.
     */
    public function selectMenu(ShopifyRootMenuArgumentsObject $argsObject): ShopifyMenuQueryObject
    {
        $object = new ShopifyMenuQueryObject("menu");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves navigation menus. Menus organize content into hierarchical navigation structures that merchants can display in the online store (for example, in headers, footers, and sidebars) and customer accounts.
     *
     * Each [`Menu`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Menu) contains a handle for identification, a title for display, and a collection of [`MenuItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MenuItem) objects that can be nested up to 3 levels deep. Default menus have protected handles that can't be modified.
     */
    public function selectMenus(?ShopifyRootMenusArgumentsObject $argsObject = null): ShopifyMenuConnectionQueryObject
    {
        $object = new ShopifyMenuConnectionQueryObject("menus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`MetafieldDefinition`](https://shopify.dev/docs/api/admin-graphql/current/objects/MetafieldDefinition) by its identifier. You can identify a definition using either its owner type, namespace, and key, or its global ID.
     *
     * Use this query to inspect a definition's configuration, including its data type, validations, access settings, and the count of [metafields](https://shopify.dev/docs/api/admin-graphql/current/objects/Metafield) using it.
     */
    public function selectMetafieldDefinition(?ShopifyRootMetafieldDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("metafieldDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The available metafield types that you can use when creating [`MetafieldDefinition`](https://shopify.dev/docs/api/admin-graphql/current/objects/MetafieldDefinition) objects. Each type specifies what kind of data it stores (such as boolean, color, date, or references), its category, and which validations it supports.
     *
     * For a list of supported types and their capabilities, refer to the [metafield types documentation](https://shopify.dev/docs/apps/metafields/types).
     */
    public function selectMetafieldDefinitionTypes(?ShopifyRootMetafieldDefinitionTypesArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionTypeQueryObject
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("metafieldDefinitionTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of metafield definitions.
     */
    public function selectMetafieldDefinitions(ShopifyRootMetafieldDefinitionsArgumentsObject $argsObject): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a single [`Metaobject`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) by its global ID. [Metaobjects](https://shopify.dev/docs/apps/build/custom-data#what-are-metaobjects) store custom structured data based on defined schemas. The returned metaobject includes its fields with values, display name, handle, and associated metadata like update timestamps and capabilities.
     */
    public function selectMetaobject(ShopifyRootMetaobjectArgumentsObject $argsObject): ShopifyMetaobjectQueryObject
    {
        $object = new ShopifyMetaobjectQueryObject("metaobject");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`Metaobject`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) by its handle and type. Handles are unique identifiers within a metaobject type.
     */
    public function selectMetaobjectByHandle(ShopifyRootMetaobjectByHandleArgumentsObject $argsObject): ShopifyMetaobjectQueryObject
    {
        $object = new ShopifyMetaobjectQueryObject("metaobjectByHandle");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`MetaobjectDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MetaobjectDefinition) by its global ID. Metaobject definitions provide the structure and fields for metaobjects.
     *
     * The definition includes field configurations, access settings, display preferences, and capabilities that determine how [metaobjects](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) of this type behave across the Shopify platform.
     */
    public function selectMetaobjectDefinition(ShopifyRootMetaobjectDefinitionArgumentsObject $argsObject): ShopifyMetaobjectDefinitionQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("metaobjectDefinition");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`MetaobjectDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MetaobjectDefinition) by its type. The type serves as a unique identifier that distinguishes one metaobject definition from another.
     */
    public function selectMetaobjectDefinitionByType(ShopifyRootMetaobjectDefinitionByTypeArgumentsObject $argsObject): ShopifyMetaobjectDefinitionQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("metaobjectDefinitionByType");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of all [`MetaobjectDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MetaobjectDefinition) objects configured for the store. Metaobject definitions provide the schema for creating custom data structures composed of individual fields. Each definition specifies the field types, access permissions, and capabilities for [`Metaobject`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) entries of that type. Use this query to discover available metaobject types before creating or querying metaobject entries.
     *
     * Learn more about [managing metaobjects](https://shopify.dev/docs/apps/build/custom-data/metaobjects/manage-metaobjects).
     */
    public function selectMetaobjectDefinitions(?ShopifyRootMetaobjectDefinitionsArgumentsObject $argsObject = null): ShopifyMetaobjectDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionConnectionQueryObject("metaobjectDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`Metaobject`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) entries for a specific type. Metaobjects are custom data structures that extend Shopify's data model with merchant or app-specific data types.
     *
     * Filter results using the query parameter with a search syntax for metaobject fields. Use `fields.{key}:{value}` to filter by field values, supporting any field previously marked as filterable.
     *
     * Results are ordered by metaobject ID in ascending order by default. The `sortKey` parameter accepts `id`, `type`, `updated_at`, or `display_name` to control result ordering. Pass `reverse: true` to invert the order.
     *
     * Learn more about [querying metaobjects by field value](https://shopify.dev/docs/apps/build/custom-data/metafields/query-by-metafield-value).
     */
    public function selectMetaobjects(ShopifyRootMetaobjectsArgumentsObject $argsObject): ShopifyMetaobjectConnectionQueryObject
    {
        $object = new ShopifyMetaobjectConnectionQueryObject("metaobjects");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Return a mobile platform application by its ID.
     */
    public function selectMobilePlatformApplication(ShopifyRootMobilePlatformApplicationArgumentsObject $argsObject): ShopifyMobilePlatformApplicationUnionObject
    {
        $object = new ShopifyMobilePlatformApplicationUnionObject("mobilePlatformApplication");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List the mobile platform applications.
     */
    public function selectMobilePlatformApplications(?ShopifyRootMobilePlatformApplicationsArgumentsObject $argsObject = null): ShopifyMobilePlatformApplicationConnectionQueryObject
    {
        $object = new ShopifyMobilePlatformApplicationConnectionQueryObject("mobilePlatformApplications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a specific node (any object that implements the
     * [Node](https://shopify.dev/api/admin-graphql/latest/interfaces/Node)
     * interface) by ID, in accordance with the
     * [Relay specification](https://relay.dev/docs/guides/graphql-server-specification/#object-identification).
     * This field is commonly used for refetching an object.
     */
    public function selectNode(ShopifyRootNodeArgumentsObject $argsObject): ShopifyNodeInterfaceObject
    {
        $object = new ShopifyNodeInterfaceObject("node");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the list of nodes (any objects that implement the
     * [Node](https://shopify.dev/api/admin-graphql/latest/interfaces/Node)
     * interface) with the given IDs, in accordance with the
     * [Relay specification](https://relay.dev/docs/guides/graphql-server-specification/#object-identification).
     */
    public function selectNodes(ShopifyRootNodesArgumentsObject $argsObject): ShopifyNodeInterfaceObject
    {
        $object = new ShopifyNodeInterfaceObject("nodes");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop's online store channel.
     */
    public function selectOnlineStore(?ShopifyRootOnlineStoreArgumentsObject $argsObject = null): ShopifyOnlineStoreQueryObject
    {
        $object = new ShopifyOnlineStoreQueryObject("onlineStore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The `order` query retrieves an [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/order) by its ID. This query provides access to comprehensive order information such as customer details, line items, financial data, and fulfillment status.
     *
     * Use the `order` query to retrieve information associated with the following processes:
     *
     * - [Order management and fulfillment](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps)
     * - [Financial reporting](https://help.shopify.com/manual/finance)
     * - [Customer purchase history](https://help.shopify.com/manual/reports-and-analytics/shopify-reports/report-types/default-reports/customers-reports) and [transaction analysis](https://shopify.dev/docs/apps/launch/billing/view-charges-earnings#transaction-data-through-the-graphql-admin-api)
     * - [Shipping](https://shopify.dev/docs/apps/build/checkout/delivery-shipping) and [inventory management](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps)
     *
     * You can only retrieve the last 60 days worth of orders from a store by default. If you want to access older orders, then you need to [request access to all orders](https://shopify.dev/docs/api/usage/access-scopes#orders-permissions).
     *
     * For large order datasets, consider using [bulk operations](https://shopify.dev/docs/api/usage/bulk-operations/queries).
     * Bulk operations handle pagination automatically and allow you to retrieve data asynchronously without being constrained by API rate limits.
     * Learn more about [creating orders](https://shopify.dev/docs/api/admin-graphql/latest/mutations/ordercreate) and [building order management apps](https://shopify.dev/docs/apps/build/orders-fulfillment).
     */
    public function selectOrder(ShopifyRootOrderArgumentsObject $argsObject): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns approved order attribution definitions for the calling app on the current shop.
     * Learn more in the [order attribution guide](https://shopify.dev/docs/apps/build/sales-channels/order-attribution).
     */
    public function selectOrderAttributionDefinitions(?ShopifyRootOrderAttributionDefinitionsArgumentsObject $argsObject = null): ShopifyOrderAttributionDefinitionConnectionQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionConnectionQueryObject("orderAttributionDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Return an order by an identifier.
     */
    public function selectOrderByIdentifier(ShopifyRootOrderByIdentifierArgumentsObject $argsObject): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("orderByIdentifier");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `OrderEditSession` resource by ID.
     */
    public function selectOrderEditSession(ShopifyRootOrderEditSessionArgumentsObject $argsObject): ShopifyOrderEditSessionQueryObject
    {
        $object = new ShopifyOrderEditSessionQueryObject("orderEditSession");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves the status of a deferred payment by its payment reference ID. Use this query to monitor the processing status of payments that are initiated through payment mutations. Deferred payments are called [payment terms](https://shopify.dev/docs/apps/build/checkout/payments/payment-terms) in the API.
     *
     * The query returns an [`OrderPaymentStatus`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderPaymentStatus) object that includes the current payment status, any error messages, and associated transactions. Poll this query to track [asynchronous payment processing](https://shopify.dev/docs/apps/build/payments/processing) after initiating a deferred payment.
     */
    public function selectOrderPaymentStatus(ShopifyRootOrderPaymentStatusArgumentsObject $argsObject): ShopifyOrderPaymentStatusQueryObject
    {
        $object = new ShopifyOrderPaymentStatusQueryObject("orderPaymentStatus");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns [saved searches](https://shopify.dev/docs/api/admin-graphql/latest/objects/SavedSearch) for orders in the shop. Saved searches store search queries with their filters and search terms.
     */
    public function selectOrderSavedSearches(?ShopifyRootOrderSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("orderSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of [orders](https://shopify.dev/api/admin-graphql/latest/objects/Order) placed in the store, including data such as order status, customer, and line item details.
     * Use the `orders` query to build reports, analyze sales performance, or automate fulfillment workflows. The `orders` query supports [pagination](https://shopify.dev/docs/api/usage/pagination-graphql),
     * [sorting](https://shopify.dev/docs/api/admin-graphql/latest/queries/orders#arguments-sortKey), and [filtering](https://shopify.dev/docs/api/admin-graphql/latest/queries/orders#arguments-query).
     */
    public function selectOrders(?ShopifyRootOrdersArgumentsObject $argsObject = null): ShopifyOrderConnectionQueryObject
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the number of [orders](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) in the shop. You can filter orders using [search syntax](https://shopify.dev/docs/api/usage/search-syntax) or a [`SavedSearch`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SavedSearch), and set a maximum count limit to control query performance.
     *
     * Use the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/ordersCount#arguments-query) argument to filter the count by criteria like order status, financial state, or fulfillment status. The response includes both the count value and its precision, indicating whether the count is exact or an estimate.
     *
     * > Note:
     * > The count is limited to 10,000 orders by default. Use the [`limit`](https://shopify.dev/docs/api/admin-graphql/latest/queries/ordersCount#arguments-limit) argument to adjust this value, or pass `null` for no limit. Limited to a maximum of 10000 by default.
     */
    public function selectOrdersCount(?ShopifyRootOrdersCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("ordersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `Page` resource by ID.
     */
    public function selectPage(ShopifyRootPageArgumentsObject $argsObject): ShopifyPageQueryObject
    {
        $object = new ShopifyPageQueryObject("page");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of pages from the online store. [`Page`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Page) objects are content pages that merchants create to provide information to customers, such as "About Us", "Contact", or policy pages.
     *
     * The query supports filtering with a [search query](https://shopify.dev/docs/api/usage/search-syntax) and sorting by various criteria. Advanced filtering is available through saved searches using the [`savedSearchId`](https://shopify.dev/docs/api/admin-graphql/latest/queries/pages#arguments-savedSearchId) argument.
     */
    public function selectPages(?ShopifyRootPagesArgumentsObject $argsObject = null): ShopifyPageConnectionQueryObject
    {
        $object = new ShopifyPageConnectionQueryObject("pages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of pages. Limited to a maximum of 10000 by default.
     */
    public function selectPagesCount(?ShopifyRootPagesCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("pagesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The payment customization.
     */
    public function selectPaymentCustomization(ShopifyRootPaymentCustomizationArgumentsObject $argsObject): ShopifyPaymentCustomizationQueryObject
    {
        $object = new ShopifyPaymentCustomizationQueryObject("paymentCustomization");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The payment customizations.
     */
    public function selectPaymentCustomizations(?ShopifyRootPaymentCustomizationsArgumentsObject $argsObject = null): ShopifyPaymentCustomizationConnectionQueryObject
    {
        $object = new ShopifyPaymentCustomizationConnectionQueryObject("paymentCustomizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of payment terms templates eligible for all shops and users.
     */
    public function selectPaymentTermsTemplates(?ShopifyRootPaymentTermsTemplatesArgumentsObject $argsObject = null): ShopifyPaymentTermsTemplateQueryObject
    {
        $object = new ShopifyPaymentTermsTemplateQueryObject("paymentTermsTemplates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of pending orders. Limited to a maximum of 10000.
     */
    public function selectPendingOrdersCount(?ShopifyRootPendingOrdersCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("pendingOrdersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `PointOfSaleDevice` resource by ID.
     */
    public function selectPointOfSaleDevice(ShopifyRootPointOfSaleDeviceArgumentsObject $argsObject): ShopifyPointOfSaleDeviceQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("pointOfSaleDevice");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Lookup a point of sale device payment session by ID.
     */
    public function selectPointOfSaleDevicePaymentSession(ShopifyRootPointOfSaleDevicePaymentSessionArgumentsObject $argsObject): ShopifyPointOfSaleDevicePaymentSessionQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionQueryObject("pointOfSaleDevicePaymentSession");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of point of sale device payment sessions in the shop. Cash management data is returned only for locations with a POS Pro subscription.
     */
    public function selectPointOfSaleDevicePaymentSessions(?ShopifyRootPointOfSaleDevicePaymentSessionsArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionConnectionQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionConnectionQueryObject("pointOfSaleDevicePaymentSessions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList) by ID. You can use price lists to specify either fixed prices or adjusted relative prices that override initial [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) prices.
     *
     * Price lists enable contextual pricing for the [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) they are associated to. Each price list can define fixed prices for specific [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects or percentage-based adjustments relative to other prices.
     */
    public function selectPriceList(ShopifyRootPriceListArgumentsObject $argsObject): ShopifyPriceListQueryObject
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * All price lists for a shop.
     */
    public function selectPriceLists(?ShopifyRootPriceListsArgumentsObject $argsObject = null): ShopifyPriceListConnectionQueryObject
    {
        $object = new ShopifyPriceListConnectionQueryObject("priceLists");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The primary market of the shop.
     *
     * @deprecated Use `backupRegion` instead.
     */
    public function selectPrimaryMarket(?ShopifyRootPrimaryMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("primaryMarket");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Privacy related settings for a shop.
     */
    public function selectPrivacySettings(?ShopifyRootPrivacySettingsArgumentsObject $argsObject = null): ShopifyPrivacySettingsQueryObject
    {
        $object = new ShopifyPrivacySettingsQueryObject("privacySettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) by its ID.
     * A product is an item that a merchant can sell in their store.
     *
     * Use the `product` query when you need to:
     *
     * - Access essential product data (for example, title, description, price, images, SEO metadata, and metafields).
     * - Build product detail pages and manage inventory.
     * - Handle international sales with localized pricing and content.
     * - Manage product variants and product options.
     *
     * Learn more about working with [Shopify's product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components).
     */
    public function selectProduct(ShopifyRootProductArgumentsObject $argsObject): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) using its handle. A handle is a unique, URL-friendly string that Shopify automatically generates from the product's title.
     *
     * Returns `null` if no product exists with the specified handle.
     *
     * @deprecated Use `productByIdentifier` instead.
     */
    public function selectProductByHandle(ShopifyRootProductByHandleArgumentsObject $argsObject): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("productByHandle");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Return a product by an identifier.
     */
    public function selectProductByIdentifier(ShopifyRootProductByIdentifierArgumentsObject $argsObject): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("productByIdentifier");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the product duplicate job.
     */
    public function selectProductDuplicateJob(ShopifyRootProductDuplicateJobArgumentsObject $argsObject): ShopifyProductDuplicateJobQueryObject
    {
        $object = new ShopifyProductDuplicateJobQueryObject("productDuplicateJob");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a ProductFeed resource by ID.
     */
    public function selectProductFeed(ShopifyRootProductFeedArgumentsObject $argsObject): ShopifyProductFeedQueryObject
    {
        $object = new ShopifyProductFeedQueryObject("productFeed");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The product feeds for the shop.
     */
    public function selectProductFeeds(?ShopifyRootProductFeedsArgumentsObject $argsObject = null): ShopifyProductFeedConnectionQueryObject
    {
        $object = new ShopifyProductFeedConnectionQueryObject("productFeeds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a ProductOperation resource by ID.
     *
     * This can be used to query the
     * [ProductSetOperation](https://shopify.dev/api/admin-graphql/current/objects/ProductSetOperation), using
     * the ID that was returned
     * [when the product was created or updated](https://shopify.dev/api/admin/migrate/new-product-model/sync-data#create-a-product-with-variants-and-options-asynchronously)
     * by the
     * [ProductSet](https://shopify.dev/api/admin-graphql/current/mutations/productSet) mutation.
     *
     * The `status` field indicates whether the operation is `CREATED`, `ACTIVE`, or `COMPLETE`.
     *
     * The `product` field provides the details of the created or updated product.
     *
     * For the
     * [ProductSetOperation](https://shopify.dev/api/admin-graphql/current/objects/ProductSetOperation), the
     * `userErrors` field provides mutation errors that occurred during the operation.
     */
    public function selectProductOperation(ShopifyRootProductOperationArgumentsObject $argsObject): ShopifyProductOperationInterfaceObject
    {
        $object = new ShopifyProductOperationInterfaceObject("productOperation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves product resource feedback for the currently authenticated app, providing insights into product data quality, completeness, and optimization opportunities. This feedback helps apps guide merchants toward better product listings and improved store performance.
     *
     * For example, an SEO app might receive feedback indicating that certain products lack meta descriptions or have suboptimal titles, enabling the app to provide specific recommendations for improving search visibility and conversion rates.
     *
     * Use `ProductResourceFeedback` to:
     * - Display product optimization recommendations to merchants
     * - Identify data quality issues across product catalogs
     * - Build product improvement workflows and guided experiences
     * - Track progress on product listing completeness and quality
     * - Implement automated product auditing and scoring systems
     * - Generate reports on catalog health and optimization opportunities
     * - Provide contextual suggestions within product editing interfaces
     *
     * The feedback system evaluates products against various criteria including SEO best practices, required fields, media quality, and sales channel requirements. Each feedback item includes specific details about the issue, suggested improvements, and priority levels.
     *
     * Feedback is app-specific and reflects the particular focus of your application - marketing apps receive different insights than inventory management apps. The system continuously updates as merchants make changes, providing real-time guidance for product optimization.
     *
     * This resource is particularly valuable for apps that help merchants improve their product listings, optimize for search engines, or enhance their overall catalog quality. The feedback enables proactive suggestions rather than reactive problem-solving.
     *
     * Learn more about [product optimization](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product).
     */
    public function selectProductResourceFeedback(ShopifyRootProductResourceFeedbackArgumentsObject $argsObject): ShopifyProductResourceFeedbackQueryObject
    {
        $object = new ShopifyProductResourceFeedbackQueryObject("productResourceFeedback");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a list of the shop's product saved searches.
     */
    public function selectProductSavedSearches(?ShopifyRootProductSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("productSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns tags added to [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects in the shop. Provides a paginated list of tag strings.
     *
     * The maximum page size is 5000 tags per request. Tags are returned as simple strings through a [`StringConnection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StringConnection).
     * The maximum page size is 5000.
     */
    public function selectProductTags(?ShopifyRootProductTagsArgumentsObject $argsObject = null): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("productTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of product types assigned to [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) in the store. The maximum page size is 1000.
     * The maximum page size is 1000.
     */
    public function selectProductTypes(?ShopifyRootProductTypesArgumentsObject $argsObject = null): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("productTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [product variant](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) by its ID.
     *
     * A product variant is a specific version of a
     * [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) that comes in more than
     * one [option](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption),
     * such as size or color. For example, if a merchant sells t-shirts with options for size and color,
     * then a small, blue t-shirt would be one product variant and a large, blue t-shirt would be another.
     *
     * Use the `productVariant` query when you need to:
     *
     * - Access essential product variant data (for example, title, price, image, and metafields).
     * - Build product detail pages and manage inventory.
     * - Handle international sales with localized pricing and content.
     * - Manage product variants that are part of a bundle or selling plan.
     *
     * Learn more about working with [Shopify's product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components).
     */
    public function selectProductVariant(ShopifyRootProductVariantArgumentsObject $argsObject): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("productVariant");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Return a product variant by an identifier.
     */
    public function selectProductVariantByIdentifier(ShopifyRootProductVariantByIdentifierArgumentsObject $argsObject): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("productVariantByIdentifier");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a list of [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
     * associated with a [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product).
     *
     * A product variant is a specific version of a product that comes in more than
     * one [option](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption),
     * such as size or color. For example, if a merchant sells t-shirts with options for size and color,
     * then a small, blue t-shirt would be one product variant and a large, blue t-shirt would be another.
     *
     * Use the `productVariants` query when you need to:
     *
     * - Search for product variants by attributes such as SKU, barcode, or inventory quantity.
     * - Filter product variants by attributes, such as whether they're gift cards or have custom metafields.
     * - Fetch product variants for bulk operations, such as updating prices or inventory.
     * - Preload data for product variants, such as inventory items, selected options, or associated products.
     *
     * The `productVariants` query supports [pagination](https://shopify.dev/docs/api/usage/pagination-graphql)
     * to handle large product catalogs and [saved searches](https://shopify.dev/docs/api/admin-graphql/latest/queries/productVariants#arguments-savedSearchId)
     * for frequently used product variant queries.
     *
     * The `productVariants` query returns product variants with their associated metadata, including:
     *
     * - Basic product variant information (for example, title, SKU, barcode, price, and inventory)
     * - Media attachments (for example, images and videos)
     * - Associated products, selling plans, bundles, and metafields
     *
     * Learn more about working with [Shopify's product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components).
     */
    public function selectProductVariants(?ShopifyRootProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of product variants. Limited to a maximum of 10000 by default.
     */
    public function selectProductVariantsCount(?ShopifyRootProductVariantsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("productVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of vendors added to products.
     * The maximum page size is 1000.
     */
    public function selectProductVendors(?ShopifyRootProductVendorsArgumentsObject $argsObject = null): ShopifyStringConnectionQueryObject
    {
        $object = new ShopifyStringConnectionQueryObject("productVendors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a list of [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product)
     * in a store. Products are the items that merchants can sell in their store.
     *
     * Use the `products` query when you need to:
     *
     * - Build a browsing interface for a product catalog.
     * - Create product [searching](https://shopify.dev/docs/api/usage/search-syntax), [sorting](https://shopify.dev/docs/api/admin-graphql/latest/queries/products#arguments-sortKey), and [filtering](https://shopify.dev/docs/api/admin-graphql/latest/queries/products#arguments-query) experiences.
     * - Implement product recommendations.
     * - Sync product data with external systems.
     *
     * The `products` query supports [pagination](https://shopify.dev/docs/api/usage/pagination-graphql)
     * to handle large product catalogs and [saved searches](https://shopify.dev/docs/api/admin-graphql/latest/queries/products#arguments-savedSearchId)
     * for frequently used product queries.
     *
     * The `products` query returns products with their associated metadata, including:
     *
     * - Basic product information (for example, title, description, vendor, and type)
     * - Product options and product variants, with their prices and inventory
     * - Media attachments (for example, images and videos)
     * - SEO metadata
     * - Product categories and tags
     * - Product availability and publishing statuses
     *
     * Learn more about working with [Shopify's product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components).
     */
    public function selectProducts(?ShopifyRootProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of products. Limited to a maximum of 10000 by default.
     */
    public function selectProductsCount(?ShopifyRootProductsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("productsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of publicly-accessible Admin API versions, including supported versions, the release candidate, and unstable versions.
     */
    public function selectPublicApiVersions(?ShopifyRootPublicApiVersionsArgumentsObject $argsObject = null): ShopifyApiVersionQueryObject
    {
        $object = new ShopifyApiVersionQueryObject("publicApiVersions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication) by [`ID`](https://shopify.dev/docs/api/usage/gids).
     *
     * Returns `null` if the publication doesn't exist.
     */
    public function selectPublication(ShopifyRootPublicationArgumentsObject $argsObject): ShopifyPublicationQueryObject
    {
        $object = new ShopifyPublicationQueryObject("publication");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     *
     * Filter publications by [`CatalogType`](https://shopify.dev/docs/api/admin-graphql/latest/enums/CatalogType).
     */
    public function selectPublications(?ShopifyRootPublicationsArgumentsObject $argsObject = null): ShopifyPublicationConnectionQueryObject
    {
        $object = new ShopifyPublicationConnectionQueryObject("publications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of publications. Limited to a maximum of 10000 by default.
     */
    public function selectPublicationsCount(?ShopifyRootPublicationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("publicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a count of published products by publication ID. Limited to a maximum of 10000 by default.
     */
    public function selectPublishedProductsCount(ShopifyRootPublishedProductsCountArgumentsObject $argsObject): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("publishedProductsCount");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [refund](https://shopify.dev/docs/api/admin-graphql/latest/objects/Refund) by its ID.
     * A refund represents a financial record of money returned to a customer from an order.
     * It provides a comprehensive view of all refunded amounts, transactions, and restocking
     * instructions associated with returning products or correcting order issues.
     *
     * Use the `refund` query to retrieve information associated with the following workflows:
     *
     * - Displaying refund details in order management interfaces
     * - Building customer service tools for reviewing refund history
     * - Creating reports on refunded amounts and reasons
     * - Auditing refund transactions and payment gateway records
     * - Tracking inventory impacts from refunded items
     *
     * A refund is associated with an
     * [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order)
     * and includes [refund line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/RefundLineItem)
     * that specify which items were refunded. Each refund processes through
     * [order transactions](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderTransaction)
     * that handle the actual money transfer back to the customer.
     */
    public function selectRefund(ShopifyRootRefundArgumentsObject $argsObject): ShopifyRefundQueryObject
    {
        $object = new ShopifyRefundQueryObject("refund");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The calculated financial outcome of a requested order edit.
     */
    public function selectRequestedOrderEditCalculate(ShopifyRootRequestedOrderEditCalculateArgumentsObject $argsObject): ShopifyCalculatedRequestedOrderEditQueryObject
    {
        $object = new ShopifyCalculatedRequestedOrderEditQueryObject("requestedOrderEditCalculate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a return by its ID. A return represents the intent of a buyer to ship one or more items from an
     * order back to a merchant or a third-party fulfillment location.
     *
     * Use the `return` query to retrieve information associated with the following workflows:
     *
     * - [Managing returns](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management)
     * - [Processing exchanges](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-exchanges)
     * - [Tracking reverse fulfillment orders](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-reverse-fulfillment-orders)
     *
     * A return is associated with an
     * [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order)
     * and can include multiple return [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem).
     * Each return has a [status](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps#return-statuses),
     * which indicates the state of the return.
     */
    public function selectReturn(ShopifyRootReturnArgumentsObject $argsObject): ShopifyReturnQueryObject
    {
        $object = new ShopifyReturnQueryObject("return");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Calculates the financial outcome of a [`Return`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Return) without creating it. Use this query to preview return costs before initiating the actual return process.
     *
     * The calculation provides detailed breakdowns of refund amounts, taxes, [`RestockingFee`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RestockingFee) charges, return shipping fees, and order-level discount adjustments based on the [`FulfillmentLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentLineItem) objects that customers select for return.
     *
     * Learn more about building for [return management](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management).
     */
    public function selectReturnCalculate(ShopifyRootReturnCalculateArgumentsObject $argsObject): ShopifyCalculatedReturnQueryObject
    {
        $object = new ShopifyCalculatedReturnQueryObject("returnCalculate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a return policy profile of a shop.
     */
    public function selectReturnPolicyProfile(ShopifyRootReturnPolicyProfileArgumentsObject $argsObject): ShopifyReturnPolicyProfileQueryObject
    {
        $object = new ShopifyReturnPolicyProfileQueryObject("returnPolicyProfile");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the return policy profiles of a shop.
     */
    public function selectReturnPolicyProfiles(?ShopifyRootReturnPolicyProfilesArgumentsObject $argsObject = null): ShopifyReturnPolicyProfileConnectionQueryObject
    {
        $object = new ShopifyReturnPolicyProfileConnectionQueryObject("returnPolicyProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the full library of available return reason definitions.
     *
     * Use this query to retrieve the standardized return reasons available for creating returns.
     * Filter by IDs or handles to get specific definitions.
     *
     * Only non-deleted reasons should be shown to customers when creating new returns.
     * Deleted reasons have been replaced with better alternatives and are no longer recommended.
     * However, they remain valid options and may still appear on existing returns.
     */
    public function selectReturnReasonDefinitions(?ShopifyRootReturnReasonDefinitionsArgumentsObject $argsObject = null): ShopifyReturnReasonDefinitionConnectionQueryObject
    {
        $object = new ShopifyReturnReasonDefinitionConnectionQueryObject("returnReasonDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `ReturnableFulfillment` resource by ID.
     */
    public function selectReturnableFulfillment(ShopifyRootReturnableFulfillmentArgumentsObject $argsObject): ShopifyReturnableFulfillmentQueryObject
    {
        $object = new ShopifyReturnableFulfillmentQueryObject("returnableFulfillment");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of returnable fulfillments.
     */
    public function selectReturnableFulfillments(ShopifyRootReturnableFulfillmentsArgumentsObject $argsObject): ShopifyReturnableFulfillmentConnectionQueryObject
    {
        $object = new ShopifyReturnableFulfillmentConnectionQueryObject("returnableFulfillments");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Lookup a reverse delivery by ID.
     */
    public function selectReverseDelivery(ShopifyRootReverseDeliveryArgumentsObject $argsObject): ShopifyReverseDeliveryQueryObject
    {
        $object = new ShopifyReverseDeliveryQueryObject("reverseDelivery");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Lookup a reverse fulfillment order by ID.
     */
    public function selectReverseFulfillmentOrder(ShopifyRootReverseFulfillmentOrderArgumentsObject $argsObject): ShopifyReverseFulfillmentOrderQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderQueryObject("reverseFulfillmentOrder");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A rollout on a shop.
     */
    public function selectRollout(ShopifyRootRolloutArgumentsObject $argsObject): ShopifyRolloutQueryObject
    {
        $object = new ShopifyRolloutQueryObject("rollout");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the list of rollouts in the shop.
     */
    public function selectRollouts(?ShopifyRootRolloutsArgumentsObject $argsObject = null): ShopifyRolloutConnectionQueryObject
    {
        $object = new ShopifyRolloutConnectionQueryObject("rollouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * <div class="note"><h4>Theme app extensions</h4>
     *   <p>If your app integrates with a Shopify theme and you plan to submit it to the Shopify App Store, you must use theme app extensions instead of Script tags. Script tags can only be used with vintage themes. <a href="/apps/online-store#what-integration-method-should-i-use" target="_blank">Learn more</a>.</p></div>
     *
     *
     * Returns a `ScriptTag` resource by ID.
     */
    public function selectScriptTag(ShopifyRootScriptTagArgumentsObject $argsObject): ShopifyScriptTagQueryObject
    {
        $object = new ShopifyScriptTagQueryObject("scriptTag");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * <div class="note"><h4>Theme app extensions</h4>
     *   <p>If your app integrates with a Shopify theme and you plan to submit it to the Shopify App Store, you must use theme app extensions instead of Script tags. Script tags can only be used with vintage themes. <a href="/apps/online-store#what-integration-method-should-i-use" target="_blank">Learn more</a>.</p></div>
     *
     *
     * A list of script tags.
     */
    public function selectScriptTags(?ShopifyRootScriptTagsArgumentsObject $argsObject = null): ShopifyScriptTagConnectionQueryObject
    {
        $object = new ShopifyScriptTagConnectionQueryObject("scriptTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a customer [`Segment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Segment) by ID. Segments are dynamic groups of customers that meet specific criteria defined through [ShopifyQL queries](https://shopify.dev/docs/api/shopifyql/segment-query-language-reference).
     *
     * Use segments for targeted marketing campaigns, analyzing customer behavior, or creating personalized experiences. Each segment includes its name, creation date, and the query that defines which [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) objects belong to it.
     */
    public function selectSegment(ShopifyRootSegmentArgumentsObject $argsObject): ShopifySegmentQueryObject
    {
        $object = new ShopifySegmentQueryObject("segment");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of filter suggestions associated with a segment. A segment is a group of members (commonly customers) that meet specific criteria.
     */
    public function selectSegmentFilterSuggestions(ShopifyRootSegmentFilterSuggestionsArgumentsObject $argsObject): ShopifySegmentFilterConnectionQueryObject
    {
        $object = new ShopifySegmentFilterConnectionQueryObject("segmentFilterSuggestions");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of filters.
     */
    public function selectSegmentFilters(?ShopifyRootSegmentFiltersArgumentsObject $argsObject = null): ShopifySegmentFilterConnectionQueryObject
    {
        $object = new ShopifySegmentFilterConnectionQueryObject("segmentFilters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of a shop's segment migrations.
     *
     * @deprecated Use the migrated segment ID and query `segment` directly.
     */
    public function selectSegmentMigrations(?ShopifyRootSegmentMigrationsArgumentsObject $argsObject = null): ShopifySegmentMigrationConnectionQueryObject
    {
        $object = new ShopifySegmentMigrationConnectionQueryObject("segmentMigrations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of suggested values corresponding to a particular filter for a segment. A segment is a group of members, such as customers, that meet specific criteria.
     */
    public function selectSegmentValueSuggestions(ShopifyRootSegmentValueSuggestionsArgumentsObject $argsObject): ShopifySegmentValueConnectionQueryObject
    {
        $object = new ShopifySegmentValueConnectionQueryObject("segmentValueSuggestions");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`Segment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Segment) objects for the shop. Segments are dynamic groups of customers that meet specific criteria defined through [ShopifyQL queries](https://shopify.dev/docs/api/shopifyql/segment-query-language-reference). You can filter segments by search query and sort them by creation date or other criteria.
     *
     * The query supports standard [pagination](https://shopify.dev/docs/api/usage/pagination-graphql) arguments and returns a [`SegmentConnection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SegmentConnection) containing segment details including names, creation dates, and the query definitions that determine segment membership.
     */
    public function selectSegments(?ShopifyRootSegmentsArgumentsObject $argsObject = null): ShopifySegmentConnectionQueryObject
    {
        $object = new ShopifySegmentConnectionQueryObject("segments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of segments for a shop. Limited to a maximum of 10000 by default.
     */
    public function selectSegmentsCount(?ShopifyRootSegmentsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("segmentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `SellingPlanGroup` resource by ID.
     */
    public function selectSellingPlanGroup(ShopifyRootSellingPlanGroupArgumentsObject $argsObject): ShopifySellingPlanGroupQueryObject
    {
        $object = new ShopifySellingPlanGroupQueryObject("sellingPlanGroup");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a paginated list of [`SellingPlanGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlanGroup) objects that belong to the app making the API call. Selling plan groups are selling methods like subscriptions, preorders, or other purchase options that merchants offer to customers.
     *
     * Each group has one or more [`SellingPlan`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlan) objects that define specific billing and delivery schedules, pricing adjustments, and policies. Use the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/sellingPlanGroups#arguments-query) argument to search by name or filter results by other criteria.
     *
     * Learn more about [building selling plans](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans).
     */
    public function selectSellingPlanGroups(?ShopifyRootSellingPlanGroupsArgumentsObject $argsObject = null): ShopifySellingPlanGroupConnectionQueryObject
    {
        $object = new ShopifySellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The server pixel configured by the app.
     */
    public function selectServerPixel(?ShopifyRootServerPixelArgumentsObject $argsObject = null): ShopifyServerPixelQueryObject
    {
        $object = new ShopifyServerPixelQueryObject("serverPixel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `ShippingLabel` resource by ID.
     */
    public function selectShippingLabel(ShopifyRootShippingLabelArgumentsObject $argsObject): ShopifyShippingLabelQueryObject
    {
        $object = new ShopifyShippingLabelQueryObject("shippingLabel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the Shop resource corresponding to the access token used in the request. The Shop resource contains
     * business and store management settings for the shop.
     */
    public function selectShop(?ShopifyRootShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop's billing preferences, including the currency for paying for apps and services. Use this to create [app charges in the merchant's local billing currency](https://shopify.dev/docs/apps/launch/billing#supported-currencies), helping them budget their app spend without exposure to exchange rate fluctuations.
     */
    public function selectShopBillingPreferences(?ShopifyRootShopBillingPreferencesArgumentsObject $argsObject = null): ShopifyShopBillingPreferencesQueryObject
    {
        $object = new ShopifyShopBillingPreferencesQueryObject("shopBillingPreferences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the locales enabled on a shop. Each locale represents a language for translations and determines how content displays to customers in different markets.
     *
     * Use the optional `published` argument to filter for only the locales that are visible to customers. The response includes the ISO locale code, whether it's the shop's primary locale, and which [`MarketWebPresence`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketWebPresence) objects use each locale.
     */
    public function selectShopLocales(?ShopifyRootShopLocalesArgumentsObject $argsObject = null): ShopifyShopLocaleQueryObject
    {
        $object = new ShopifyShopLocaleQueryObject("shopLocales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a single Shop Pay payment request receipt by its ID. Payment request receipts document completed Shop Pay transactions, including the amount, customer details, and payment status. Use this to look up a specific Shop Pay transaction for order reconciliation or customer support.
     */
    public function selectShopPayPaymentRequestReceipt(ShopifyRootShopPayPaymentRequestReceiptArgumentsObject $argsObject): ShopifyShopPayPaymentRequestReceiptQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestReceiptQueryObject("shopPayPaymentRequestReceipt");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of Shop Pay payment request receipts for the shop. Each receipt documents a completed Shop Pay transaction. Use this to review Shop Pay transaction history, generate reports, or audit Shop Pay payment activity.
     */
    public function selectShopPayPaymentRequestReceipts(?ShopifyRootShopPayPaymentRequestReceiptsArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestReceiptConnectionQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestReceiptConnectionQueryObject("shopPayPaymentRequestReceipts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a Shopify Function by its ID.
     * [Functions](https://shopify.dev/apps/build/functions)
     * enable you to customize Shopify's backend logic at defined parts of the commerce loop.
     */
    public function selectShopifyFunction(ShopifyRootShopifyFunctionArgumentsObject $argsObject): ShopifyShopifyFunctionQueryObject
    {
        $object = new ShopifyShopifyFunctionQueryObject("shopifyFunction");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns Shopify Functions owned by the querying API client installed on the shop. [Functions](https://shopify.dev/docs/apps/build/functions) enable you to customize
     * Shopify's backend logic at specific points in the commerce loop, such as discounts,
     * checkout validation, and fulfillment.
     *
     * You can filter the results by API type to find specific function implementations,
     * or by whether they provide a merchant configuration interface in the Shopify Admin.
     *
     * The response includes details about each function's configuration, including its
     * title, description, API version, and the input query used to provide data to the function logic.
     *
     * Learn more about [building functions](https://shopify.dev/docs/api/functions).
     */
    public function selectShopifyFunctions(?ShopifyRootShopifyFunctionsArgumentsObject $argsObject = null): ShopifyShopifyFunctionConnectionQueryObject
    {
        $object = new ShopifyShopifyFunctionConnectionQueryObject("shopifyFunctions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the Shopify Payments account information for the shop. Includes current balances across all currencies, payout schedules, and bank account configurations.
     *
     * The account includes [`ShopifyPaymentsBalanceTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBalanceTransaction) records showing charges, refunds, and adjustments that affect your balance. Also includes [`ShopifyPaymentsDispute`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsDispute) records and [`ShopifyPaymentsPayout`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsPayout) history between the account and connected [`ShopifyPaymentsBankAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopifyPaymentsBankAccount) configurations.
     */
    public function selectShopifyPaymentsAccount(?ShopifyRootShopifyPaymentsAccountArgumentsObject $argsObject = null): ShopifyShopifyPaymentsAccountQueryObject
    {
        $object = new ShopifyShopifyPaymentsAccountQueryObject("shopifyPaymentsAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Executes a [ShopifyQL query](https://shopify.dev/docs/apps/build/shopifyql) to analyze store data and returns results in a tabular format.
     *
     * The response includes column metadata with names, data types, and display names, along with the actual data rows. If the query contains syntax errors, then the response provides parse error messages instead of table data.
     *
     * Read the [ShopifyQL reference documentation](https://shopify.dev/docs/api/shopifyql) for more information on how to write ShopifyQL queries.
     */
    public function selectShopifyqlQuery(ShopifyRootShopifyqlQueryArgumentsObject $argsObject): ShopifyShopifyqlQueryResponseQueryObject
    {
        $object = new ShopifyShopifyqlQueryResponseQueryObject("shopifyqlQuery");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [staff member](https://shopify.dev/docs/api/admin-graphql/latest/objects/StaffMember) by ID. If no ID is provided, the query returns the staff member that's making the request. A staff member is a user who can access the Shopify admin to manage store operations.
     *
     * Provides staff member details such as email, name, and shop owner status. When querying the current user (with or without an ID), additional [private data](https://shopify.dev/docs/api/admin-graphql/latest/queries/staffMember#returns-StaffMember.fields.privateData) becomes available.
     */
    public function selectStaffMember(?ShopifyRootStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`StaffMember`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StaffMember) objects for the shop. Staff members are users who can access the Shopify admin to manage store operations.
     *
     * Supports filtering by account type, email, and name, with an option to sort results. The query returns a [`StaffMemberConnection`](https://shopify.dev/docs/api/admin-graphql/latest/connections/StaffMemberConnection) for [cursor-based pagination](https://shopify.dev/docs/api/usage/pagination-graphql).
     */
    public function selectStaffMembers(?ShopifyRootStaffMembersArgumentsObject $argsObject = null): ShopifyStaffMemberConnectionQueryObject
    {
        $object = new ShopifyStaffMemberConnectionQueryObject("staffMembers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves preset metafield definition templates for common use cases. Each template provides a reserved namespace and key combination for specific purposes like product subtitles, care guides, or ISBN numbers. Use these templates to create standardized metafields across your store. Filter templates by constraint status or exclude those you've already activated.
     *
     * See the [list of standard metafield definitions](https://shopify.dev/docs/apps/build/custom-data/metafields/list-of-standard-definitions) for available templates.
     */
    public function selectStandardMetafieldDefinitionTemplates(?ShopifyRootStandardMetafieldDefinitionTemplatesArgumentsObject $argsObject = null): ShopifyStandardMetafieldDefinitionTemplateConnectionQueryObject
    {
        $object = new ShopifyStandardMetafieldDefinitionTemplateConnectionQueryObject("standardMetafieldDefinitionTemplates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`StoreCreditAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StoreCreditAccount) by ID. Store credit accounts hold monetary balances that account owners can use at checkout. The owner is either a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) or a [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation).
     */
    public function selectStoreCreditAccount(ShopifyRootStoreCreditAccountArgumentsObject $argsObject): ShopifyStoreCreditAccountQueryObject
    {
        $object = new ShopifyStoreCreditAccountQueryObject("storeCreditAccount");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the store credit configuration for a shop, including whether store credit is enabled for customers at checkout. Use this to display the current state of a merchant's store credit program or check eligibility before issuing store credit to customers.
     */
    public function selectStoreCreditConfiguration(?ShopifyRootStoreCreditConfigurationArgumentsObject $argsObject = null): ShopifyStoreCreditConfigurationQueryObject
    {
        $object = new ShopifyStoreCreditConfigurationQueryObject("storeCreditConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `SubscriptionBillingAttempt` resource by ID.
     */
    public function selectSubscriptionBillingAttempt(ShopifyRootSubscriptionBillingAttemptArgumentsObject $argsObject): ShopifySubscriptionBillingAttemptQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptQueryObject("subscriptionBillingAttempt");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns subscription billing attempts on a store.
     */
    public function selectSubscriptionBillingAttempts(?ShopifyRootSubscriptionBillingAttemptsArgumentsObject $argsObject = null): ShopifySubscriptionBillingAttemptConnectionQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptConnectionQueryObject("subscriptionBillingAttempts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a subscription billing cycle found either by cycle index or date.
     */
    public function selectSubscriptionBillingCycle(ShopifyRootSubscriptionBillingCycleArgumentsObject $argsObject): ShopifySubscriptionBillingCycleQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleQueryObject("subscriptionBillingCycle");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves the results of the asynchronous job for the subscription billing cycle bulk action based on the specified job ID.
     * This query can be used to obtain the billing cycles that match the criteria defined in the subscriptionBillingCycleBulkSearch and subscriptionBillingCycleBulkCharge mutations.
     */
    public function selectSubscriptionBillingCycleBulkResults(ShopifyRootSubscriptionBillingCycleBulkResultsArgumentsObject $argsObject): ShopifySubscriptionBillingCycleConnectionQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleConnectionQueryObject("subscriptionBillingCycleBulkResults");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns subscription billing cycles for a contract ID.
     */
    public function selectSubscriptionBillingCycles(ShopifyRootSubscriptionBillingCyclesArgumentsObject $argsObject): ShopifySubscriptionBillingCycleConnectionQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleConnectionQueryObject("subscriptionBillingCycles");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a [`SubscriptionContract`](https://shopify.dev/docs/api/customer/latest/objects/SubscriptionContract) by ID.
     *
     * The contract tracks the subscription's lifecycle through various [statuses](https://shopify.dev/docs/api/admin-graphql/latest/queries/subscriptionContract#returns-SubscriptionContract.fields.status), and links to related billing attempts, generated [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) objects, and the customer's [`CustomerPaymentMethod`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerPaymentMethod).
     */
    public function selectSubscriptionContract(ShopifyRootSubscriptionContractArgumentsObject $argsObject): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject("subscriptionContract");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a subscription contract calculation by ID. Use this query to poll a calculation started by [`subscriptionContractCreateCalculate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionContractCreateCalculate), [`subscriptionContractUpdateCalculate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionContractUpdateCalculate), or [`subscriptionBillingCycleContractEditCalculate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionBillingCycleContractEditCalculate) until it succeeds or fails.
     *
     * The result resolves to a pending, succeeded, or failure type. Commit a succeeded calculation with the [`subscriptionContractCalculationCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionContractCalculationCommit) mutation.
     *
     * Learn how to [build a subscription contract](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract).
     */
    public function selectSubscriptionContractCalculation(ShopifyRootSubscriptionContractCalculationArgumentsObject $argsObject): ShopifySubscriptionContractCalculationUnionObject
    {
        $object = new ShopifySubscriptionContractCalculationUnionObject("subscriptionContractCalculation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a [`SubscriptionContractConnection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionContractConnection) containing [subscription contracts](https://shopify.dev/docs/api/customer/latest/objects/SubscriptionContract). Subscription contracts are agreements between [customers](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) and merchants for recurring purchases with defined billing and delivery schedules.
     *
     * Filter results with the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/subscriptionContracts#arguments-query) argument. You can paginate results using standard [cursor-based pagination](https://shopify.dev/docs/api/usage/pagination-graphql).
     */
    public function selectSubscriptionContracts(?ShopifyRootSubscriptionContractsArgumentsObject $argsObject = null): ShopifySubscriptionContractConnectionQueryObject
    {
        $object = new ShopifySubscriptionContractConnectionQueryObject("subscriptionContracts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a Subscription Draft resource by ID.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraft(ShopifyRootSubscriptionDraftArgumentsObject $argsObject): ShopifySubscriptionDraftQueryObject
    {
        $object = new ShopifySubscriptionDraftQueryObject("subscriptionDraft");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Access to Shopify's [standardized product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17) for categorizing products. The [`Taxonomy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Taxonomy) organizes products into a hierarchical tree structure with categories, attributes, and values.
     *
     * Query categories using search terms, or navigate the hierarchy by requesting children, siblings, or descendants of specific categories. Each [`TaxonomyCategory`](https://shopify.dev/docs/api/admin-graphql/latest/objects/TaxonomyCategory) includes its position in the tree, parent-child relationships, and associated attributes for that product category.
     */
    public function selectTaxonomy(?ShopifyRootTaxonomyArgumentsObject $argsObject = null): ShopifyTaxonomyQueryObject
    {
        $object = new ShopifyTaxonomyQueryObject("taxonomy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Transactions representing a movement of money between customers and the shop. Each transaction records the amount, payment method, processing details, and the associated [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order).
     *
     * Positive amounts indicate customer payments to the merchant. Negative amounts represent refunds from the merchant to the customer. Use the [`query`](https://shopify.dev/docs/api/admin-graphql/latest/queries/tenderTransactions#arguments-query) parameter to filter transactions by attributes such as transaction ID, processing date, and point-of-sale device ID.
     */
    public function selectTenderTransactions(?ShopifyRootTenderTransactionsArgumentsObject $argsObject = null): ShopifyTenderTransactionConnectionQueryObject
    {
        $object = new ShopifyTenderTransactionConnectionQueryObject("tenderTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns an [`OnlineStoreTheme`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OnlineStoreTheme) by its ID. Use this query to retrieve theme metadata and access the theme's [`files`](https://shopify.dev/docs/api/admin-graphql/latest/queries/theme#returns-OnlineStoreTheme.fields.files), which include templates, assets, [translations](https://shopify.dev/docs/api/admin-graphql/latest/objects/OnlineStoreTheme#field-published_translations), and configuration files.
     */
    public function selectTheme(ShopifyRootThemeArgumentsObject $argsObject): ShopifyOnlineStoreThemeQueryObject
    {
        $object = new ShopifyOnlineStoreThemeQueryObject("theme");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`OnlineStoreTheme`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OnlineStoreTheme) objects for the online store. Themes control the appearance and layout of the storefront.
     *
     * You can filter themes by [`role`](https://shopify.dev/docs/api/admin-graphql/latest/queries/themes#arguments-roles) to find specific theme types, such as `MAIN` for the published theme and `UNPUBLISHED` for draft themes.
     */
    public function selectThemes(?ShopifyRootThemesArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeConnectionQueryObject
    {
        $object = new ShopifyOnlineStoreThemeConnectionQueryObject("themes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a resource that has translatable fields. Returns the resource's [`Translation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Translation) objects for different locales and markets, along with the original [`TranslatableContent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/TranslatableContent) and digest values needed to register new translations. Provides access to existing translations, translatable content with digest hashes for translation registration, and nested translatable resources like [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects or [`Metafield`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metafield) objects.
     *
     * Learn more about [managing translated content](https://shopify.dev/docs/apps/build/markets/manage-translated-content).
     */
    public function selectTranslatableResource(ShopifyRootTranslatableResourceArgumentsObject $argsObject): ShopifyTranslatableResourceQueryObject
    {
        $object = new ShopifyTranslatableResourceQueryObject("translatableResource");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`TranslatableResource`](https://shopify.dev/docs/api/admin-graphql/latest/objects/TranslatableResource) objects for a specific resource type. Each resource provides translatable content and digest values needed for the [`translationsRegister`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/translationsRegister) mutation.
     *
     * Learn more about [managing translated content](https://shopify.dev/docs/apps/build/markets/manage-translated-content).
     *
     *         Learn more about [managing translated content](https://shopify.dev/docs/apps/build/markets/manage-translated-content).
     */
    public function selectTranslatableResources(ShopifyRootTranslatableResourcesArgumentsObject $argsObject): ShopifyTranslatableResourceConnectionQueryObject
    {
        $object = new ShopifyTranslatableResourceConnectionQueryObject("translatableResources");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a paginated list of [`TranslatableResource`](https://shopify.dev/docs/api/admin-graphql/latest/objects/TranslatableResource) objects for the specified resource IDs. Each resource provides translatable content and digest values needed for the [`translationsRegister`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/translationsRegister) mutation.
     *
     * Learn more about [managing translated content](https://shopify.dev/docs/apps/build/markets/manage-translated-content).
     */
    public function selectTranslatableResourcesByIds(ShopifyRootTranslatableResourcesByIdsArgumentsObject $argsObject): ShopifyTranslatableResourceConnectionQueryObject
    {
        $object = new ShopifyTranslatableResourceConnectionQueryObject("translatableResourcesByIds");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `UrlRedirect` resource by ID.
     */
    public function selectUrlRedirect(ShopifyRootUrlRedirectArgumentsObject $argsObject): ShopifyUrlRedirectQueryObject
    {
        $object = new ShopifyUrlRedirectQueryObject("urlRedirect");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a `UrlRedirectImport` resource by ID.
     */
    public function selectUrlRedirectImport(ShopifyRootUrlRedirectImportArgumentsObject $argsObject): ShopifyUrlRedirectImportQueryObject
    {
        $object = new ShopifyUrlRedirectImportQueryObject("urlRedirectImport");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the shop's URL redirect saved searches.
     */
    public function selectUrlRedirectSavedSearches(?ShopifyRootUrlRedirectSavedSearchesArgumentsObject $argsObject = null): ShopifySavedSearchConnectionQueryObject
    {
        $object = new ShopifySavedSearchConnectionQueryObject("urlRedirectSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of redirects for a shop.
     */
    public function selectUrlRedirects(?ShopifyRootUrlRedirectsArgumentsObject $argsObject = null): ShopifyUrlRedirectConnectionQueryObject
    {
        $object = new ShopifyUrlRedirectConnectionQueryObject("urlRedirects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of redirects. Limited to a maximum of 10000 by default.
     */
    public function selectUrlRedirectsCount(?ShopifyRootUrlRedirectsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("urlRedirectsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Validation available on the shop.
     */
    public function selectValidation(ShopifyRootValidationArgumentsObject $argsObject): ShopifyValidationQueryObject
    {
        $object = new ShopifyValidationQueryObject("validation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Validations available on the shop.
     */
    public function selectValidations(?ShopifyRootValidationsArgumentsObject $argsObject = null): ShopifyValidationConnectionQueryObject
    {
        $object = new ShopifyValidationConnectionQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a
     * [web pixel](https://shopify.dev/docs/apps/build/marketing-analytics/build-web-pixels)
     * by ID.
     */
    public function selectWebPixel(?ShopifyRootWebPixelArgumentsObject $argsObject = null): ShopifyWebPixelQueryObject
    {
        $object = new ShopifyWebPixelQueryObject("webPixel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The web presences for the shop.
     */
    public function selectWebPresences(?ShopifyRootWebPresencesArgumentsObject $argsObject = null): ShopifyMarketWebPresenceConnectionQueryObject
    {
        $object = new ShopifyMarketWebPresenceConnectionQueryObject("webPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a webhook subscription by ID.
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe).
     */
    public function selectWebhookSubscription(ShopifyRootWebhookSubscriptionArgumentsObject $argsObject): ShopifyWebhookSubscriptionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("webhookSubscription");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Retrieves a paginated list of webhook subscriptions created using the API for the current app and shop.
     *
     * > Note: Returns only shop-scoped subscriptions, not app-scoped subscriptions configured in TOML files.
     *
     * Subscription details include event topics, endpoint URIs, filtering rules, field inclusion settings, and metafield namespace permissions. Results support cursor-based pagination that you can filter by topic, format, or custom search criteria.
     *
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe).
     */
    public function selectWebhookSubscriptions(?ShopifyRootWebhookSubscriptionsArgumentsObject $argsObject = null): ShopifyWebhookSubscriptionConnectionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionConnectionQueryObject("webhookSubscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The count of webhook subscriptions.
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe). Limited to a maximum of 10000 by default.
     */
    public function selectWebhookSubscriptionsCount(?ShopifyRootWebhookSubscriptionsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("webhookSubscriptionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
