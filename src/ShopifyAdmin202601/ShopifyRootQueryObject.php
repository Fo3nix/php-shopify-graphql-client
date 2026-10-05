<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRootQueryObject extends QueryObject
{
    const OBJECT_NAME = "";

    public function selectAbandonedCheckouts(ShopifyRootAbandonedCheckoutsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutConnectionQueryObject("abandonedCheckouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAbandonedCheckoutsCount(ShopifyRootAbandonedCheckoutsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("abandonedCheckoutsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAbandonment(ShopifyRootAbandonmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonmentQueryObject("abandonment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAbandonmentByAbandonedCheckoutId(ShopifyRootAbandonmentByAbandonedCheckoutIdArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonmentQueryObject("abandonmentByAbandonedCheckoutId");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApp(ShopifyRootAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppByHandle(ShopifyRootAppByHandleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("appByHandle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppByKey(ShopifyRootAppByKeyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("appByKey");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppDiscountType(ShopifyRootAppDiscountTypeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppDiscountTypeQueryObject("appDiscountType");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppDiscountTypes(ShopifyRootAppDiscountTypesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppDiscountTypeQueryObject("appDiscountTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppDiscountTypesNodes(ShopifyRootAppDiscountTypesNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppDiscountTypeConnectionQueryObject("appDiscountTypesNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppInstallation(ShopifyRootAppInstallationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppInstallationQueryObject("appInstallation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppInstallations(ShopifyRootAppInstallationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppInstallationConnectionQueryObject("appInstallations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectArticle(ShopifyRootArticleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyArticleQueryObject("article");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectArticleAuthors(ShopifyRootArticleAuthorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyArticleAuthorConnectionQueryObject("articleAuthors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectArticleTags()
    {
        $this->selectField("articleTags");

        return $this;
    }

    public function selectArticles(ShopifyRootArticlesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyArticleConnectionQueryObject("articles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAssignedFulfillmentOrders(ShopifyRootAssignedFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("assignedFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `automaticDiscountNode` instead.
     */
    public function selectAutomaticDiscount(ShopifyRootAutomaticDiscountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticUnionObject("automaticDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `discountNode` instead.
     */
    public function selectAutomaticDiscountNode(ShopifyRootAutomaticDiscountNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject("automaticDiscountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `discountNodes` instead.
     */
    public function selectAutomaticDiscountNodes(ShopifyRootAutomaticDiscountNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticNodeConnectionQueryObject("automaticDiscountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAutomaticDiscountSavedSearches(ShopifyRootAutomaticDiscountSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("automaticDiscountSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `automaticDiscountNodes` instead. This will be removed in 2027-01.
     */
    public function selectAutomaticDiscounts(ShopifyRootAutomaticDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticConnectionQueryObject("automaticDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableCarrierServices(ShopifyRootAvailableCarrierServicesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCarrierServiceAndLocationsQueryObject("availableCarrierServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableLocales(ShopifyRootAvailableLocalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocaleQueryObject("availableLocales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBlog(ShopifyRootBlogArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBlogQueryObject("blog");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBlogs(ShopifyRootBlogsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBlogConnectionQueryObject("blogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBlogsCount(ShopifyRootBlogsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("blogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBulkOperation(ShopifyRootBulkOperationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBulkOperationQueryObject("bulkOperation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBulkOperations(ShopifyRootBulkOperationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBulkOperationConnectionQueryObject("bulkOperations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBusinessEntities(ShopifyRootBusinessEntitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBusinessEntityQueryObject("businessEntities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBusinessEntity(ShopifyRootBusinessEntityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBusinessEntityQueryObject("businessEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCarrierService(ShopifyRootCarrierServiceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCarrierServices(ShopifyRootCarrierServicesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCarrierServiceConnectionQueryObject("carrierServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCartTransforms(ShopifyRootCartTransformsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCartTransformConnectionQueryObject("cartTransforms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashTrackingSession(ShopifyRootCashTrackingSessionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashTrackingSessionQueryObject("cashTrackingSession");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashTrackingSessions(ShopifyRootCashTrackingSessionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashTrackingSessionConnectionQueryObject("cashTrackingSessions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogs(ShopifyRootCatalogsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogsCount(ShopifyRootCatalogsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("catalogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannel(ShopifyRootChannelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannels(ShopifyRootChannelsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `checkoutAndAccountsConfiguration` instead.
     */
    public function selectCheckoutBranding(ShopifyRootCheckoutBrandingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingQueryObject("checkoutBranding");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `checkoutAndAccountsConfiguration` instead.
     */
    public function selectCheckoutProfile(ShopifyRootCheckoutProfileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutProfileQueryObject("checkoutProfile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `checkoutAndAccountsConfigurations` instead.
     */
    public function selectCheckoutProfiles(ShopifyRootCheckoutProfilesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutProfileConnectionQueryObject("checkoutProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `discountNode` instead.
     */
    public function selectCodeDiscountNode(ShopifyRootCodeDiscountNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCodeNodeQueryObject("codeDiscountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodeDiscountNodeByCode(ShopifyRootCodeDiscountNodeByCodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCodeNodeQueryObject("codeDiscountNodeByCode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `discountNodes` instead.
     */
    public function selectCodeDiscountNodes(ShopifyRootCodeDiscountNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCodeNodeConnectionQueryObject("codeDiscountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodeDiscountSavedSearches(ShopifyRootCodeDiscountSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("codeDiscountSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollection(ShopifyRootCollectionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionQueryObject("collection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `collectionByIdentifier` instead.
     */
    public function selectCollectionByHandle(ShopifyRootCollectionByHandleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionQueryObject("collectionByHandle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionByIdentifier(ShopifyRootCollectionByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionQueryObject("collectionByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionRulesConditions(ShopifyRootCollectionRulesConditionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionRuleConditionsQueryObject("collectionRulesConditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionSavedSearches(ShopifyRootCollectionSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("collectionSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollections(ShopifyRootCollectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionsCount(ShopifyRootCollectionsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("collectionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComment(ShopifyRootCommentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCommentQueryObject("comment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComments(ShopifyRootCommentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCommentConnectionQueryObject("comments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanies(ShopifyRootCompaniesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyConnectionQueryObject("companies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompaniesCount(ShopifyRootCompaniesCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("companiesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompany(ShopifyRootCompanyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyContact(ShopifyRootCompanyContactArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactQueryObject("companyContact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyContactRole(ShopifyRootCompanyContactRoleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleQueryObject("companyContactRole");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyLocation(ShopifyRootCompanyLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationQueryObject("companyLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyLocations(ShopifyRootCompanyLocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationConnectionQueryObject("companyLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConsentPolicy(ShopifyRootConsentPolicyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyConsentPolicyQueryObject("consentPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConsentPolicyRegions(ShopifyRootConsentPolicyRegionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyConsentPolicyRegionQueryObject("consentPolicyRegions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentAppInstallation(ShopifyRootCurrentAppInstallationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppInstallationQueryObject("currentAppInstallation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `bulkOperations` with status filter instead.
     */
    public function selectCurrentBulkOperation(ShopifyRootCurrentBulkOperationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBulkOperationQueryObject("currentBulkOperation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentStaffMember(ShopifyRootCurrentStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("currentStaffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(ShopifyRootCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerAccountPages(ShopifyRootCustomerAccountPagesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerAccountPageConnectionQueryObject("customerAccountPages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerByIdentifier(ShopifyRootCustomerByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customerByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerMergeJobStatus(ShopifyRootCustomerMergeJobStatusArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergeRequestQueryObject("customerMergeJobStatus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerMergePreview(ShopifyRootCustomerMergePreviewArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergePreviewQueryObject("customerMergePreview");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerPaymentMethod(ShopifyRootCustomerPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `segments` instead.
     */
    public function selectCustomerSavedSearches(ShopifyRootCustomerSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("customerSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerSegmentMembers(ShopifyRootCustomerSegmentMembersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerSegmentMemberConnectionQueryObject("customerSegmentMembers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerSegmentMembersQuery(ShopifyRootCustomerSegmentMembersQueryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerSegmentMembersQueryQueryObject("customerSegmentMembersQuery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerSegmentMembership(ShopifyRootCustomerSegmentMembershipArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentMembershipResponseQueryObject("customerSegmentMembership");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomers(ShopifyRootCustomersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerConnectionQueryObject("customers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomersCount(ShopifyRootCustomersCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("customersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `events` instead.
     */
    public function selectDeletionEvents(ShopifyRootDeletionEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeletionEventConnectionQueryObject("deletionEvents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryCustomization(ShopifyRootDeliveryCustomizationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCustomizationQueryObject("deliveryCustomization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryCustomizations(ShopifyRootDeliveryCustomizationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCustomizationConnectionQueryObject("deliveryCustomizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryProfile(ShopifyRootDeliveryProfileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileQueryObject("deliveryProfile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryProfiles(ShopifyRootDeliveryProfilesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileConnectionQueryObject("deliveryProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPromiseParticipants(ShopifyRootDeliveryPromiseParticipantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryPromiseParticipantConnectionQueryObject("deliveryPromiseParticipants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPromiseProvider(ShopifyRootDeliveryPromiseProviderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryPromiseProviderQueryObject("deliveryPromiseProvider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPromiseSettings(ShopifyRootDeliveryPromiseSettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryPromiseSettingQueryObject("deliveryPromiseSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliverySettings(ShopifyRootDeliverySettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliverySettingQueryObject("deliverySettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountCodesCount(ShopifyRootDiscountCodesCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("discountCodesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountNode(ShopifyRootDiscountNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountNodeQueryObject("discountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountNodes(ShopifyRootDiscountNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountNodeConnectionQueryObject("discountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountNodesCount(ShopifyRootDiscountNodesCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("discountNodesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountRedeemCodeBulkCreation(ShopifyRootDiscountRedeemCodeBulkCreationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationQueryObject("discountRedeemCodeBulkCreation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountRedeemCodeSavedSearches(ShopifyRootDiscountRedeemCodeSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("discountRedeemCodeSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDispute(ShopifyRootDisputeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeQueryObject("dispute");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisputeEvidence(ShopifyRootDisputeEvidenceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeEvidenceQueryObject("disputeEvidence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisputes(ShopifyRootDisputesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeConnectionQueryObject("disputes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDomain(ShopifyRootDomainArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDomainQueryObject("domain");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrder(ShopifyRootDraftOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderQueryObject("draftOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrderAvailableDeliveryOptions(ShopifyRootDraftOrderAvailableDeliveryOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderAvailableDeliveryOptionsQueryObject("draftOrderAvailableDeliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrderSavedSearches(ShopifyRootDraftOrderSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("draftOrderSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrderTag(ShopifyRootDraftOrderTagArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderTagQueryObject("draftOrderTag");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrders(ShopifyRootDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrdersCount(ShopifyRootDraftOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("draftOrdersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvents(ShopifyRootEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEventsCount(ShopifyRootEventsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("eventsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFileSavedSearches(ShopifyRootFileSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("fileSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFiles(ShopifyRootFilesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFileConnectionQueryObject("files");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinanceAppAccessPolicy(ShopifyRootFinanceAppAccessPolicyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFinanceAppAccessPolicyQueryObject("financeAppAccessPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinanceKycInformation(ShopifyRootFinanceKycInformationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFinanceKycInformationQueryObject("financeKycInformation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillment(ShopifyRootFulfillmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentQueryObject("fulfillment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentConstraintRules(ShopifyRootFulfillmentConstraintRulesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentConstraintRuleQueryObject("fulfillmentConstraintRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentOrder(ShopifyRootFulfillmentOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentOrders(ShopifyRootFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentService(ShopifyRootFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCard(ShopifyRootGiftCardArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardQueryObject("giftCard");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCardConfiguration(ShopifyRootGiftCardConfigurationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardConfigurationQueryObject("giftCardConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCards(ShopifyRootGiftCardsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardConnectionQueryObject("giftCards");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCardsCount(ShopifyRootGiftCardsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("giftCardsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryItem(ShopifyRootInventoryItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryItems(ShopifyRootInventoryItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemConnectionQueryObject("inventoryItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryLevel(ShopifyRootInventoryLevelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryLevelQueryObject("inventoryLevel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryProperties(ShopifyRootInventoryPropertiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryPropertiesQueryObject("inventoryProperties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryShipment(ShopifyRootInventoryShipmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryShipmentQueryObject("inventoryShipment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryTransfer(ShopifyRootInventoryTransferArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryTransferQueryObject("inventoryTransfer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryTransfers(ShopifyRootInventoryTransfersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryTransferConnectionQueryObject("inventoryTransfers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectJob(ShopifyRootJobArgumentsObject $argsObject = null)
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(ShopifyRootLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationByIdentifier(ShopifyRootLocationByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("locationByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocations(ShopifyRootLocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `locationsAvailableForDeliveryProfilesConnection` instead.
     */
    public function selectLocationsAvailableForDeliveryProfiles(ShopifyRootLocationsAvailableForDeliveryProfilesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("locationsAvailableForDeliveryProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsAvailableForDeliveryProfilesConnection(ShopifyRootLocationsAvailableForDeliveryProfilesConnectionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationConnectionQueryObject("locationsAvailableForDeliveryProfilesConnection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsCount(ShopifyRootLocationsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectManualHoldsFulfillmentOrders(ShopifyRootManualHoldsFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("manualHoldsFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarket(ShopifyRootMarketArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This `market_by_geography` field will be removed in a future version of the API.
     */
    public function selectMarketByGeography(ShopifyRootMarketByGeographyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("marketByGeography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketLocalizableResource(ShopifyRootMarketLocalizableResourceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketLocalizableResourceQueryObject("marketLocalizableResource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketLocalizableResources(ShopifyRootMarketLocalizableResourcesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketLocalizableResourceConnectionQueryObject("marketLocalizableResources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketLocalizableResourcesByIds(ShopifyRootMarketLocalizableResourcesByIdsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketLocalizableResourceConnectionQueryObject("marketLocalizableResourcesByIds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketingActivities(ShopifyRootMarketingActivitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingActivityConnectionQueryObject("marketingActivities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketingActivity(ShopifyRootMarketingActivityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingActivityQueryObject("marketingActivity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketingEvent(ShopifyRootMarketingEventArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingEventQueryObject("marketingEvent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketingEvents(ShopifyRootMarketingEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingEventConnectionQueryObject("marketingEvents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarkets(ShopifyRootMarketsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketsResolvedValues(ShopifyRootMarketsResolvedValuesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketsResolvedValuesQueryObject("marketsResolvedValues");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMenu(ShopifyRootMenuArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMenuQueryObject("menu");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMenus(ShopifyRootMenusArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMenuConnectionQueryObject("menus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafieldDefinition(ShopifyRootMetafieldDefinitionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("metafieldDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafieldDefinitionTypes(ShopifyRootMetafieldDefinitionTypesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("metafieldDefinitionTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafieldDefinitions(ShopifyRootMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobject(ShopifyRootMetaobjectArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectQueryObject("metaobject");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjectByHandle(ShopifyRootMetaobjectByHandleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectQueryObject("metaobjectByHandle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjectDefinition(ShopifyRootMetaobjectDefinitionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("metaobjectDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjectDefinitionByType(ShopifyRootMetaobjectDefinitionByTypeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("metaobjectDefinitionByType");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjectDefinitions(ShopifyRootMetaobjectDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectDefinitionConnectionQueryObject("metaobjectDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjects(ShopifyRootMetaobjectsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectConnectionQueryObject("metaobjects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMobilePlatformApplication(ShopifyRootMobilePlatformApplicationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMobilePlatformApplicationUnionObject("mobilePlatformApplication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMobilePlatformApplications(ShopifyRootMobilePlatformApplicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMobilePlatformApplicationConnectionQueryObject("mobilePlatformApplications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOnlineStore(ShopifyRootOnlineStoreArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreQueryObject("onlineStore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrder(ShopifyRootOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderByIdentifier(ShopifyRootOrderByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("orderByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderEditSession(ShopifyRootOrderEditSessionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderEditSessionQueryObject("orderEditSession");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderPaymentStatus(ShopifyRootOrderPaymentStatusArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderPaymentStatusQueryObject("orderPaymentStatus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderSavedSearches(ShopifyRootOrderSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("orderSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrders(ShopifyRootOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrdersCount(ShopifyRootOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("ordersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPage(ShopifyRootPageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageQueryObject("page");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPages(ShopifyRootPagesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageConnectionQueryObject("pages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPagesCount(ShopifyRootPagesCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("pagesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentCustomization(ShopifyRootPaymentCustomizationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentCustomizationQueryObject("paymentCustomization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentCustomizations(ShopifyRootPaymentCustomizationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentCustomizationConnectionQueryObject("paymentCustomizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentTermsTemplates(ShopifyRootPaymentTermsTemplatesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentTermsTemplateQueryObject("paymentTermsTemplates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPendingOrdersCount(ShopifyRootPendingOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("pendingOrdersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPointOfSaleDevice(ShopifyRootPointOfSaleDeviceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("pointOfSaleDevice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceList(ShopifyRootPriceListArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceLists(ShopifyRootPriceListsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListConnectionQueryObject("priceLists");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `backupRegion` instead.
     */
    public function selectPrimaryMarket(ShopifyRootPrimaryMarketArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("primaryMarket");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrivacySettings(ShopifyRootPrivacySettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPrivacySettingsQueryObject("privacySettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(ShopifyRootProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `productByIdentifier` instead.
     */
    public function selectProductByHandle(ShopifyRootProductByHandleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("productByHandle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductByIdentifier(ShopifyRootProductByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("productByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductDuplicateJob(ShopifyRootProductDuplicateJobArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductDuplicateJobQueryObject("productDuplicateJob");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductFeed(ShopifyRootProductFeedArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductFeedQueryObject("productFeed");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductFeeds(ShopifyRootProductFeedsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductFeedConnectionQueryObject("productFeeds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductResourceFeedback(ShopifyRootProductResourceFeedbackArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductResourceFeedbackQueryObject("productResourceFeedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductSavedSearches(ShopifyRootProductSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("productSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductTags(ShopifyRootProductTagsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringConnectionQueryObject("productTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductTypes(ShopifyRootProductTypesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringConnectionQueryObject("productTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariant(ShopifyRootProductVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("productVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariantByIdentifier(ShopifyRootProductVariantByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("productVariantByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariants(ShopifyRootProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariantsCount(ShopifyRootProductVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("productVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVendors(ShopifyRootProductVendorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringConnectionQueryObject("productVendors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(ShopifyRootProductsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductsCount(ShopifyRootProductsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("productsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublicApiVersions(ShopifyRootPublicApiVersionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyApiVersionQueryObject("publicApiVersions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublication(ShopifyRootPublicationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublications(ShopifyRootPublicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPublicationConnectionQueryObject("publications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublicationsCount(ShopifyRootPublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("publicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublishedProductsCount(ShopifyRootPublishedProductsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("publishedProductsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefund(ShopifyRootRefundArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundQueryObject("refund");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturn(ShopifyRootReturnArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnQueryObject("return");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnCalculate(ShopifyRootReturnCalculateArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedReturnQueryObject("returnCalculate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnReasonDefinitions(ShopifyRootReturnReasonDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnReasonDefinitionConnectionQueryObject("returnReasonDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnableFulfillment(ShopifyRootReturnableFulfillmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnableFulfillmentQueryObject("returnableFulfillment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnableFulfillments(ShopifyRootReturnableFulfillmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnableFulfillmentConnectionQueryObject("returnableFulfillments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseDelivery(ShopifyRootReverseDeliveryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryQueryObject("reverseDelivery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseFulfillmentOrder(ShopifyRootReverseFulfillmentOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderQueryObject("reverseFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScriptTag(ShopifyRootScriptTagArgumentsObject $argsObject = null)
    {
        $object = new ShopifyScriptTagQueryObject("scriptTag");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScriptTags(ShopifyRootScriptTagsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyScriptTagConnectionQueryObject("scriptTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegment(ShopifyRootSegmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentQueryObject("segment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegmentFilterSuggestions(ShopifyRootSegmentFilterSuggestionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentFilterConnectionQueryObject("segmentFilterSuggestions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegmentFilters(ShopifyRootSegmentFiltersArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentFilterConnectionQueryObject("segmentFilters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use the migrated segment ID and query `segment` directly.
     */
    public function selectSegmentMigrations(ShopifyRootSegmentMigrationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentMigrationConnectionQueryObject("segmentMigrations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegmentValueSuggestions(ShopifyRootSegmentValueSuggestionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentValueConnectionQueryObject("segmentValueSuggestions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegments(ShopifyRootSegmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentConnectionQueryObject("segments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegmentsCount(ShopifyRootSegmentsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("segmentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroup(ShopifyRootSellingPlanGroupArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanGroupQueryObject("sellingPlanGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroups(ShopifyRootSellingPlanGroupsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectServerPixel(ShopifyRootServerPixelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyServerPixelQueryObject("serverPixel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShop(ShopifyRootShopArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopBillingPreferences(ShopifyRootShopBillingPreferencesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopBillingPreferencesQueryObject("shopBillingPreferences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopLocales(ShopifyRootShopLocalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopLocaleQueryObject("shopLocales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopPayPaymentRequestReceipt(ShopifyRootShopPayPaymentRequestReceiptArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestReceiptQueryObject("shopPayPaymentRequestReceipt");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopPayPaymentRequestReceipts(ShopifyRootShopPayPaymentRequestReceiptsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestReceiptConnectionQueryObject("shopPayPaymentRequestReceipts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyFunction(ShopifyRootShopifyFunctionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyFunctionQueryObject("shopifyFunction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyFunctions(ShopifyRootShopifyFunctionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyFunctionConnectionQueryObject("shopifyFunctions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyPaymentsAccount(ShopifyRootShopifyPaymentsAccountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsAccountQueryObject("shopifyPaymentsAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyqlQuery(ShopifyRootShopifyqlQueryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyqlQueryResponseQueryObject("shopifyqlQuery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMember(ShopifyRootStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMembers(ShopifyRootStaffMembersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberConnectionQueryObject("staffMembers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStandardMetafieldDefinitionTemplates(ShopifyRootStandardMetafieldDefinitionTemplatesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStandardMetafieldDefinitionTemplateConnectionQueryObject("standardMetafieldDefinitionTemplates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStoreCreditAccount(ShopifyRootStoreCreditAccountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStoreCreditAccountQueryObject("storeCreditAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingAttempt(ShopifyRootSubscriptionBillingAttemptArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptQueryObject("subscriptionBillingAttempt");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingAttempts(ShopifyRootSubscriptionBillingAttemptsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptConnectionQueryObject("subscriptionBillingAttempts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingCycle(ShopifyRootSubscriptionBillingCycleArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleQueryObject("subscriptionBillingCycle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingCycleBulkResults(ShopifyRootSubscriptionBillingCycleBulkResultsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleConnectionQueryObject("subscriptionBillingCycleBulkResults");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingCycles(ShopifyRootSubscriptionBillingCyclesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleConnectionQueryObject("subscriptionBillingCycles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionContract(ShopifyRootSubscriptionContractArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractQueryObject("subscriptionContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionContracts(ShopifyRootSubscriptionContractsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractConnectionQueryObject("subscriptionContracts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraft(ShopifyRootSubscriptionDraftArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDraftQueryObject("subscriptionDraft");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxonomy(ShopifyRootTaxonomyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyQueryObject("taxonomy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTenderTransactions(ShopifyRootTenderTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTenderTransactionConnectionQueryObject("tenderTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTheme(ShopifyRootThemeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreThemeQueryObject("theme");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectThemes(ShopifyRootThemesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreThemeConnectionQueryObject("themes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatableResource(ShopifyRootTranslatableResourceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslatableResourceQueryObject("translatableResource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatableResources(ShopifyRootTranslatableResourcesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslatableResourceConnectionQueryObject("translatableResources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatableResourcesByIds(ShopifyRootTranslatableResourcesByIdsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslatableResourceConnectionQueryObject("translatableResourcesByIds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirect(ShopifyRootUrlRedirectArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUrlRedirectQueryObject("urlRedirect");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirectImport(ShopifyRootUrlRedirectImportArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUrlRedirectImportQueryObject("urlRedirectImport");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirectSavedSearches(ShopifyRootUrlRedirectSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchConnectionQueryObject("urlRedirectSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirects(ShopifyRootUrlRedirectsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUrlRedirectConnectionQueryObject("urlRedirects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirectsCount(ShopifyRootUrlRedirectsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("urlRedirectsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValidation(ShopifyRootValidationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyValidationQueryObject("validation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValidations(ShopifyRootValidationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyValidationConnectionQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebPixel(ShopifyRootWebPixelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWebPixelQueryObject("webPixel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebPresences(ShopifyRootWebPresencesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceConnectionQueryObject("webPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebhookSubscription(ShopifyRootWebhookSubscriptionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWebhookSubscriptionQueryObject("webhookSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebhookSubscriptions(ShopifyRootWebhookSubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWebhookSubscriptionConnectionQueryObject("webhookSubscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebhookSubscriptionsCount(ShopifyRootWebhookSubscriptionsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("webhookSubscriptionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
