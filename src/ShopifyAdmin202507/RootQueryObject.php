<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RootQueryObject extends QueryObject
{
    const OBJECT_NAME = "";

    public function selectAbandonedCheckouts(RootAbandonedCheckoutsArgumentsObject $argsObject = null)
    {
        $object = new AbandonedCheckoutConnectionQueryObject("abandonedCheckouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAbandonedCheckoutsCount(RootAbandonedCheckoutsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("abandonedCheckoutsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAbandonment(RootAbandonmentArgumentsObject $argsObject = null)
    {
        $object = new AbandonmentQueryObject("abandonment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAbandonmentByAbandonedCheckoutId(RootAbandonmentByAbandonedCheckoutIdArgumentsObject $argsObject = null)
    {
        $object = new AbandonmentQueryObject("abandonmentByAbandonedCheckoutId");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApp(RootAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppByHandle(RootAppByHandleArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("appByHandle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppByKey(RootAppByKeyArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("appByKey");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppDiscountType(RootAppDiscountTypeArgumentsObject $argsObject = null)
    {
        $object = new AppDiscountTypeQueryObject("appDiscountType");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppDiscountTypes(RootAppDiscountTypesArgumentsObject $argsObject = null)
    {
        $object = new AppDiscountTypeQueryObject("appDiscountTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppDiscountTypesNodes(RootAppDiscountTypesNodesArgumentsObject $argsObject = null)
    {
        $object = new AppDiscountTypeConnectionQueryObject("appDiscountTypesNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppInstallation(RootAppInstallationArgumentsObject $argsObject = null)
    {
        $object = new AppInstallationQueryObject("appInstallation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppInstallations(RootAppInstallationsArgumentsObject $argsObject = null)
    {
        $object = new AppInstallationConnectionQueryObject("appInstallations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectArticle(RootArticleArgumentsObject $argsObject = null)
    {
        $object = new ArticleQueryObject("article");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectArticleAuthors(RootArticleAuthorsArgumentsObject $argsObject = null)
    {
        $object = new ArticleAuthorConnectionQueryObject("articleAuthors");
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

    public function selectArticles(RootArticlesArgumentsObject $argsObject = null)
    {
        $object = new ArticleConnectionQueryObject("articles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAssignedFulfillmentOrders(RootAssignedFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderConnectionQueryObject("assignedFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `automaticDiscountNode` instead.
     */
    public function selectAutomaticDiscount(RootAutomaticDiscountArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticUnionObject("automaticDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAutomaticDiscountNode(RootAutomaticDiscountNodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticNodeQueryObject("automaticDiscountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAutomaticDiscountNodes(RootAutomaticDiscountNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticNodeConnectionQueryObject("automaticDiscountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAutomaticDiscountSavedSearches(RootAutomaticDiscountSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("automaticDiscountSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `automaticDiscountNodes` instead.
     */
    public function selectAutomaticDiscounts(RootAutomaticDiscountsArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticConnectionQueryObject("automaticDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableCarrierServices(RootAvailableCarrierServicesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCarrierServiceAndLocationsQueryObject("availableCarrierServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableLocales(RootAvailableLocalesArgumentsObject $argsObject = null)
    {
        $object = new LocaleQueryObject("availableLocales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBlog(RootBlogArgumentsObject $argsObject = null)
    {
        $object = new BlogQueryObject("blog");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBlogs(RootBlogsArgumentsObject $argsObject = null)
    {
        $object = new BlogConnectionQueryObject("blogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBlogsCount(RootBlogsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("blogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBusinessEntities(RootBusinessEntitiesArgumentsObject $argsObject = null)
    {
        $object = new BusinessEntityQueryObject("businessEntities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBusinessEntity(RootBusinessEntityArgumentsObject $argsObject = null)
    {
        $object = new BusinessEntityQueryObject("businessEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCarrierService(RootCarrierServiceArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCarrierServices(RootCarrierServicesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCarrierServiceConnectionQueryObject("carrierServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCartTransforms(RootCartTransformsArgumentsObject $argsObject = null)
    {
        $object = new CartTransformConnectionQueryObject("cartTransforms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashTrackingSession(RootCashTrackingSessionArgumentsObject $argsObject = null)
    {
        $object = new CashTrackingSessionQueryObject("cashTrackingSession");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashTrackingSessions(RootCashTrackingSessionsArgumentsObject $argsObject = null)
    {
        $object = new CashTrackingSessionConnectionQueryObject("cashTrackingSessions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogs(RootCatalogsArgumentsObject $argsObject = null)
    {
        $object = new CatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCatalogsCount(RootCatalogsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("catalogsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `publication` instead.
     */
    public function selectChannel(RootChannelArgumentsObject $argsObject = null)
    {
        $object = new ChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `publications` instead.
     */
    public function selectChannels(RootChannelsArgumentsObject $argsObject = null)
    {
        $object = new ChannelConnectionQueryObject("channels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCheckoutBranding(RootCheckoutBrandingArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingQueryObject("checkoutBranding");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCheckoutProfile(RootCheckoutProfileArgumentsObject $argsObject = null)
    {
        $object = new CheckoutProfileQueryObject("checkoutProfile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCheckoutProfiles(RootCheckoutProfilesArgumentsObject $argsObject = null)
    {
        $object = new CheckoutProfileConnectionQueryObject("checkoutProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodeDiscountNode(RootCodeDiscountNodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountCodeNodeQueryObject("codeDiscountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodeDiscountNodeByCode(RootCodeDiscountNodeByCodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountCodeNodeQueryObject("codeDiscountNodeByCode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodeDiscountNodes(RootCodeDiscountNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountCodeNodeConnectionQueryObject("codeDiscountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodeDiscountSavedSearches(RootCodeDiscountSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("codeDiscountSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollection(RootCollectionArgumentsObject $argsObject = null)
    {
        $object = new CollectionQueryObject("collection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `collectionByIdentifier` instead.
     */
    public function selectCollectionByHandle(RootCollectionByHandleArgumentsObject $argsObject = null)
    {
        $object = new CollectionQueryObject("collectionByHandle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionByIdentifier(RootCollectionByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new CollectionQueryObject("collectionByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionRulesConditions(RootCollectionRulesConditionsArgumentsObject $argsObject = null)
    {
        $object = new CollectionRuleConditionsQueryObject("collectionRulesConditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionSavedSearches(RootCollectionSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("collectionSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollections(RootCollectionsArgumentsObject $argsObject = null)
    {
        $object = new CollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollectionsCount(RootCollectionsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("collectionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComment(RootCommentArgumentsObject $argsObject = null)
    {
        $object = new CommentQueryObject("comment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComments(RootCommentsArgumentsObject $argsObject = null)
    {
        $object = new CommentConnectionQueryObject("comments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanies(RootCompaniesArgumentsObject $argsObject = null)
    {
        $object = new CompanyConnectionQueryObject("companies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompaniesCount(RootCompaniesCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("companiesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompany(RootCompanyArgumentsObject $argsObject = null)
    {
        $object = new CompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyContact(RootCompanyContactArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactQueryObject("companyContact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyContactRole(RootCompanyContactRoleArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleQueryObject("companyContactRole");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyLocation(RootCompanyLocationArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationQueryObject("companyLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompanyLocations(RootCompanyLocationsArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationConnectionQueryObject("companyLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConsentPolicy(RootConsentPolicyArgumentsObject $argsObject = null)
    {
        $object = new ConsentPolicyQueryObject("consentPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConsentPolicyRegions(RootConsentPolicyRegionsArgumentsObject $argsObject = null)
    {
        $object = new ConsentPolicyRegionQueryObject("consentPolicyRegions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentAppInstallation(RootCurrentAppInstallationArgumentsObject $argsObject = null)
    {
        $object = new AppInstallationQueryObject("currentAppInstallation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentBulkOperation(RootCurrentBulkOperationArgumentsObject $argsObject = null)
    {
        $object = new BulkOperationQueryObject("currentBulkOperation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentStaffMember(RootCurrentStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("currentStaffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(RootCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerAccountPages(RootCustomerAccountPagesArgumentsObject $argsObject = null)
    {
        $object = new CustomerAccountPageConnectionQueryObject("customerAccountPages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerByIdentifier(RootCustomerByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customerByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerMergeJobStatus(RootCustomerMergeJobStatusArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergeRequestQueryObject("customerMergeJobStatus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerMergePreview(RootCustomerMergePreviewArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergePreviewQueryObject("customerMergePreview");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerPaymentMethod(RootCustomerPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerSavedSearches(RootCustomerSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("customerSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerSegmentMembers(RootCustomerSegmentMembersArgumentsObject $argsObject = null)
    {
        $object = new CustomerSegmentMemberConnectionQueryObject("customerSegmentMembers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerSegmentMembersQuery(RootCustomerSegmentMembersQueryArgumentsObject $argsObject = null)
    {
        $object = new CustomerSegmentMembersQueryQueryObject("customerSegmentMembersQuery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerSegmentMembership(RootCustomerSegmentMembershipArgumentsObject $argsObject = null)
    {
        $object = new SegmentMembershipResponseQueryObject("customerSegmentMembership");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomers(RootCustomersArgumentsObject $argsObject = null)
    {
        $object = new CustomerConnectionQueryObject("customers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomersCount(RootCustomersCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("customersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `events` instead.
     */
    public function selectDeletionEvents(RootDeletionEventsArgumentsObject $argsObject = null)
    {
        $object = new DeletionEventConnectionQueryObject("deletionEvents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryCustomization(RootDeliveryCustomizationArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCustomizationQueryObject("deliveryCustomization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryCustomizations(RootDeliveryCustomizationsArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCustomizationConnectionQueryObject("deliveryCustomizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryProfile(RootDeliveryProfileArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileQueryObject("deliveryProfile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryProfiles(RootDeliveryProfilesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileConnectionQueryObject("deliveryProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPromiseParticipants(RootDeliveryPromiseParticipantsArgumentsObject $argsObject = null)
    {
        $object = new DeliveryPromiseParticipantConnectionQueryObject("deliveryPromiseParticipants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPromiseProvider(RootDeliveryPromiseProviderArgumentsObject $argsObject = null)
    {
        $object = new DeliveryPromiseProviderQueryObject("deliveryPromiseProvider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliveryPromiseSettings(RootDeliveryPromiseSettingsArgumentsObject $argsObject = null)
    {
        $object = new DeliveryPromiseSettingQueryObject("deliveryPromiseSettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeliverySettings(RootDeliverySettingsArgumentsObject $argsObject = null)
    {
        $object = new DeliverySettingQueryObject("deliverySettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountCodesCount(RootDiscountCodesCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("discountCodesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountNode(RootDiscountNodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountNodeQueryObject("discountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountNodes(RootDiscountNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountNodeConnectionQueryObject("discountNodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountNodesCount(RootDiscountNodesCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("discountNodesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountRedeemCodeBulkCreation(RootDiscountRedeemCodeBulkCreationArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeBulkCreationQueryObject("discountRedeemCodeBulkCreation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountRedeemCodeSavedSearches(RootDiscountRedeemCodeSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("discountRedeemCodeSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDispute(RootDisputeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeQueryObject("dispute");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisputeEvidence(RootDisputeEvidenceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeEvidenceQueryObject("disputeEvidence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisputes(RootDisputesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeConnectionQueryObject("disputes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDomain(RootDomainArgumentsObject $argsObject = null)
    {
        $object = new DomainQueryObject("domain");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrder(RootDraftOrderArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderQueryObject("draftOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrderAvailableDeliveryOptions(RootDraftOrderAvailableDeliveryOptionsArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderAvailableDeliveryOptionsQueryObject("draftOrderAvailableDeliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrderSavedSearches(RootDraftOrderSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("draftOrderSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrderTag(RootDraftOrderTagArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderTagQueryObject("draftOrderTag");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrders(RootDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrdersCount(RootDraftOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("draftOrdersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvents(RootEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEventsCount(RootEventsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("eventsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFileSavedSearches(RootFileSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("fileSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFiles(RootFilesArgumentsObject $argsObject = null)
    {
        $object = new FileConnectionQueryObject("files");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinanceAppAccessPolicy(RootFinanceAppAccessPolicyArgumentsObject $argsObject = null)
    {
        $object = new FinanceAppAccessPolicyQueryObject("financeAppAccessPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinanceKycInformation(RootFinanceKycInformationArgumentsObject $argsObject = null)
    {
        $object = new FinanceKycInformationQueryObject("financeKycInformation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillment(RootFulfillmentArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentQueryObject("fulfillment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentConstraintRules(RootFulfillmentConstraintRulesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentConstraintRuleQueryObject("fulfillmentConstraintRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentOrder(RootFulfillmentOrderArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentOrders(RootFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentService(RootFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCard(RootGiftCardArgumentsObject $argsObject = null)
    {
        $object = new GiftCardQueryObject("giftCard");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCardConfiguration(RootGiftCardConfigurationArgumentsObject $argsObject = null)
    {
        $object = new GiftCardConfigurationQueryObject("giftCardConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCards(RootGiftCardsArgumentsObject $argsObject = null)
    {
        $object = new GiftCardConnectionQueryObject("giftCards");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCardsCount(RootGiftCardsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("giftCardsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryItem(RootInventoryItemArgumentsObject $argsObject = null)
    {
        $object = new InventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryItems(RootInventoryItemsArgumentsObject $argsObject = null)
    {
        $object = new InventoryItemConnectionQueryObject("inventoryItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryLevel(RootInventoryLevelArgumentsObject $argsObject = null)
    {
        $object = new InventoryLevelQueryObject("inventoryLevel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryProperties(RootInventoryPropertiesArgumentsObject $argsObject = null)
    {
        $object = new InventoryPropertiesQueryObject("inventoryProperties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryShipment(RootInventoryShipmentArgumentsObject $argsObject = null)
    {
        $object = new InventoryShipmentQueryObject("inventoryShipment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryTransfer(RootInventoryTransferArgumentsObject $argsObject = null)
    {
        $object = new InventoryTransferQueryObject("inventoryTransfer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryTransfers(RootInventoryTransfersArgumentsObject $argsObject = null)
    {
        $object = new InventoryTransferConnectionQueryObject("inventoryTransfers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectJob(RootJobArgumentsObject $argsObject = null)
    {
        $object = new JobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(RootLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationByIdentifier(RootLocationByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("locationByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocations(RootLocationsArgumentsObject $argsObject = null)
    {
        $object = new LocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `locationsAvailableForDeliveryProfilesConnection` instead.
     */
    public function selectLocationsAvailableForDeliveryProfiles(RootLocationsAvailableForDeliveryProfilesArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("locationsAvailableForDeliveryProfiles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsAvailableForDeliveryProfilesConnection(RootLocationsAvailableForDeliveryProfilesConnectionArgumentsObject $argsObject = null)
    {
        $object = new LocationConnectionQueryObject("locationsAvailableForDeliveryProfilesConnection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsCount(RootLocationsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectManualHoldsFulfillmentOrders(RootManualHoldsFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderConnectionQueryObject("manualHoldsFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarket(RootMarketArgumentsObject $argsObject = null)
    {
        $object = new MarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This `market_by_geography` field will be removed in a future version of the API.
     */
    public function selectMarketByGeography(RootMarketByGeographyArgumentsObject $argsObject = null)
    {
        $object = new MarketQueryObject("marketByGeography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketLocalizableResource(RootMarketLocalizableResourceArgumentsObject $argsObject = null)
    {
        $object = new MarketLocalizableResourceQueryObject("marketLocalizableResource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketLocalizableResources(RootMarketLocalizableResourcesArgumentsObject $argsObject = null)
    {
        $object = new MarketLocalizableResourceConnectionQueryObject("marketLocalizableResources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketLocalizableResourcesByIds(RootMarketLocalizableResourcesByIdsArgumentsObject $argsObject = null)
    {
        $object = new MarketLocalizableResourceConnectionQueryObject("marketLocalizableResourcesByIds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketingActivities(RootMarketingActivitiesArgumentsObject $argsObject = null)
    {
        $object = new MarketingActivityConnectionQueryObject("marketingActivities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketingActivity(RootMarketingActivityArgumentsObject $argsObject = null)
    {
        $object = new MarketingActivityQueryObject("marketingActivity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketingEvent(RootMarketingEventArgumentsObject $argsObject = null)
    {
        $object = new MarketingEventQueryObject("marketingEvent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketingEvents(RootMarketingEventsArgumentsObject $argsObject = null)
    {
        $object = new MarketingEventConnectionQueryObject("marketingEvents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarkets(RootMarketsArgumentsObject $argsObject = null)
    {
        $object = new MarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketsResolvedValues(RootMarketsResolvedValuesArgumentsObject $argsObject = null)
    {
        $object = new MarketsResolvedValuesQueryObject("marketsResolvedValues");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMenu(RootMenuArgumentsObject $argsObject = null)
    {
        $object = new MenuQueryObject("menu");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMenus(RootMenusArgumentsObject $argsObject = null)
    {
        $object = new MenuConnectionQueryObject("menus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafieldDefinition(RootMetafieldDefinitionArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionQueryObject("metafieldDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafieldDefinitionTypes(RootMetafieldDefinitionTypesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionTypeQueryObject("metafieldDefinitionTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafieldDefinitions(RootMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobject(RootMetaobjectArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectQueryObject("metaobject");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjectByHandle(RootMetaobjectByHandleArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectQueryObject("metaobjectByHandle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjectDefinition(RootMetaobjectDefinitionArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectDefinitionQueryObject("metaobjectDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjectDefinitionByType(RootMetaobjectDefinitionByTypeArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectDefinitionQueryObject("metaobjectDefinitionByType");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjectDefinitions(RootMetaobjectDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectDefinitionConnectionQueryObject("metaobjectDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjects(RootMetaobjectsArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectConnectionQueryObject("metaobjects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMobilePlatformApplication(RootMobilePlatformApplicationArgumentsObject $argsObject = null)
    {
        $object = new MobilePlatformApplicationUnionObject("mobilePlatformApplication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMobilePlatformApplications(RootMobilePlatformApplicationsArgumentsObject $argsObject = null)
    {
        $object = new MobilePlatformApplicationConnectionQueryObject("mobilePlatformApplications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOnlineStore(RootOnlineStoreArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreQueryObject("onlineStore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrder(RootOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderByIdentifier(RootOrderByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("orderByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderPaymentStatus(RootOrderPaymentStatusArgumentsObject $argsObject = null)
    {
        $object = new OrderPaymentStatusQueryObject("orderPaymentStatus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderSavedSearches(RootOrderSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("orderSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrders(RootOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrdersCount(RootOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("ordersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPage(RootPageArgumentsObject $argsObject = null)
    {
        $object = new PageQueryObject("page");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPages(RootPagesArgumentsObject $argsObject = null)
    {
        $object = new PageConnectionQueryObject("pages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPagesCount(RootPagesCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("pagesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentCustomization(RootPaymentCustomizationArgumentsObject $argsObject = null)
    {
        $object = new PaymentCustomizationQueryObject("paymentCustomization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentCustomizations(RootPaymentCustomizationsArgumentsObject $argsObject = null)
    {
        $object = new PaymentCustomizationConnectionQueryObject("paymentCustomizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentTermsTemplates(RootPaymentTermsTemplatesArgumentsObject $argsObject = null)
    {
        $object = new PaymentTermsTemplateQueryObject("paymentTermsTemplates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPendingOrdersCount(RootPendingOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("pendingOrdersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPointOfSaleDevice(RootPointOfSaleDeviceArgumentsObject $argsObject = null)
    {
        $object = new PointOfSaleDeviceQueryObject("pointOfSaleDevice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceList(RootPriceListArgumentsObject $argsObject = null)
    {
        $object = new PriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceLists(RootPriceListsArgumentsObject $argsObject = null)
    {
        $object = new PriceListConnectionQueryObject("priceLists");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `backupRegion` instead.
     */
    public function selectPrimaryMarket(RootPrimaryMarketArgumentsObject $argsObject = null)
    {
        $object = new MarketQueryObject("primaryMarket");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrivacySettings(RootPrivacySettingsArgumentsObject $argsObject = null)
    {
        $object = new PrivacySettingsQueryObject("privacySettings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(RootProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `productByIdentifier` instead.
     */
    public function selectProductByHandle(RootProductByHandleArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("productByHandle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductByIdentifier(RootProductByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("productByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductDuplicateJob(RootProductDuplicateJobArgumentsObject $argsObject = null)
    {
        $object = new ProductDuplicateJobQueryObject("productDuplicateJob");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductFeed(RootProductFeedArgumentsObject $argsObject = null)
    {
        $object = new ProductFeedQueryObject("productFeed");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductFeeds(RootProductFeedsArgumentsObject $argsObject = null)
    {
        $object = new ProductFeedConnectionQueryObject("productFeeds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductResourceFeedback(RootProductResourceFeedbackArgumentsObject $argsObject = null)
    {
        $object = new ProductResourceFeedbackQueryObject("productResourceFeedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductSavedSearches(RootProductSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("productSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductTags(RootProductTagsArgumentsObject $argsObject = null)
    {
        $object = new StringConnectionQueryObject("productTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductTypes(RootProductTypesArgumentsObject $argsObject = null)
    {
        $object = new StringConnectionQueryObject("productTypes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariant(RootProductVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("productVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariantByIdentifier(RootProductVariantByIdentifierArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("productVariantByIdentifier");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariants(RootProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariantsCount(RootProductVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("productVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVendors(RootProductVendorsArgumentsObject $argsObject = null)
    {
        $object = new StringConnectionQueryObject("productVendors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(RootProductsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductsCount(RootProductsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("productsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublicApiVersions(RootPublicApiVersionsArgumentsObject $argsObject = null)
    {
        $object = new ApiVersionQueryObject("publicApiVersions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublication(RootPublicationArgumentsObject $argsObject = null)
    {
        $object = new PublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublications(RootPublicationsArgumentsObject $argsObject = null)
    {
        $object = new PublicationConnectionQueryObject("publications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublicationsCount(RootPublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("publicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublishedProductsCount(RootPublishedProductsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("publishedProductsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefund(RootRefundArgumentsObject $argsObject = null)
    {
        $object = new RefundQueryObject("refund");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturn(RootReturnArgumentsObject $argsObject = null)
    {
        $object = new ReturnQueryObject("return");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnCalculate(RootReturnCalculateArgumentsObject $argsObject = null)
    {
        $object = new CalculatedReturnQueryObject("returnCalculate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnableFulfillment(RootReturnableFulfillmentArgumentsObject $argsObject = null)
    {
        $object = new ReturnableFulfillmentQueryObject("returnableFulfillment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnableFulfillments(RootReturnableFulfillmentsArgumentsObject $argsObject = null)
    {
        $object = new ReturnableFulfillmentConnectionQueryObject("returnableFulfillments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseDelivery(RootReverseDeliveryArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryQueryObject("reverseDelivery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseFulfillmentOrder(RootReverseFulfillmentOrderArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderQueryObject("reverseFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScriptTag(RootScriptTagArgumentsObject $argsObject = null)
    {
        $object = new ScriptTagQueryObject("scriptTag");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScriptTags(RootScriptTagsArgumentsObject $argsObject = null)
    {
        $object = new ScriptTagConnectionQueryObject("scriptTags");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegment(RootSegmentArgumentsObject $argsObject = null)
    {
        $object = new SegmentQueryObject("segment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegmentFilterSuggestions(RootSegmentFilterSuggestionsArgumentsObject $argsObject = null)
    {
        $object = new SegmentFilterConnectionQueryObject("segmentFilterSuggestions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegmentFilters(RootSegmentFiltersArgumentsObject $argsObject = null)
    {
        $object = new SegmentFilterConnectionQueryObject("segmentFilters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegmentMigrations(RootSegmentMigrationsArgumentsObject $argsObject = null)
    {
        $object = new SegmentMigrationConnectionQueryObject("segmentMigrations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegmentValueSuggestions(RootSegmentValueSuggestionsArgumentsObject $argsObject = null)
    {
        $object = new SegmentValueConnectionQueryObject("segmentValueSuggestions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegments(RootSegmentsArgumentsObject $argsObject = null)
    {
        $object = new SegmentConnectionQueryObject("segments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSegmentsCount(RootSegmentsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("segmentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroup(RootSellingPlanGroupArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanGroupQueryObject("sellingPlanGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroups(RootSellingPlanGroupsArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectServerPixel(RootServerPixelArgumentsObject $argsObject = null)
    {
        $object = new ServerPixelQueryObject("serverPixel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShop(RootShopArgumentsObject $argsObject = null)
    {
        $object = new ShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopBillingPreferences(RootShopBillingPreferencesArgumentsObject $argsObject = null)
    {
        $object = new ShopBillingPreferencesQueryObject("shopBillingPreferences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopLocales(RootShopLocalesArgumentsObject $argsObject = null)
    {
        $object = new ShopLocaleQueryObject("shopLocales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopPayPaymentRequestReceipt(RootShopPayPaymentRequestReceiptArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestReceiptQueryObject("shopPayPaymentRequestReceipt");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopPayPaymentRequestReceipts(RootShopPayPaymentRequestReceiptsArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestReceiptConnectionQueryObject("shopPayPaymentRequestReceipts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyFunction(RootShopifyFunctionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFunctionQueryObject("shopifyFunction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyFunctions(RootShopifyFunctionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFunctionConnectionQueryObject("shopifyFunctions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyPaymentsAccount(RootShopifyPaymentsAccountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsAccountQueryObject("shopifyPaymentsAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMember(RootStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStaffMembers(RootStaffMembersArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberConnectionQueryObject("staffMembers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStandardMetafieldDefinitionTemplates(RootStandardMetafieldDefinitionTemplatesArgumentsObject $argsObject = null)
    {
        $object = new StandardMetafieldDefinitionTemplateConnectionQueryObject("standardMetafieldDefinitionTemplates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStoreCreditAccount(RootStoreCreditAccountArgumentsObject $argsObject = null)
    {
        $object = new StoreCreditAccountQueryObject("storeCreditAccount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingAttempt(RootSubscriptionBillingAttemptArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingAttemptQueryObject("subscriptionBillingAttempt");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingAttempts(RootSubscriptionBillingAttemptsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingAttemptConnectionQueryObject("subscriptionBillingAttempts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingCycle(RootSubscriptionBillingCycleArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleQueryObject("subscriptionBillingCycle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingCycleBulkResults(RootSubscriptionBillingCycleBulkResultsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleConnectionQueryObject("subscriptionBillingCycleBulkResults");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionBillingCycles(RootSubscriptionBillingCyclesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleConnectionQueryObject("subscriptionBillingCycles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionContract(RootSubscriptionContractArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractQueryObject("subscriptionContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionContracts(RootSubscriptionContractsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractConnectionQueryObject("subscriptionContracts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionDraft(RootSubscriptionDraftArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDraftQueryObject("subscriptionDraft");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxonomy(RootTaxonomyArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyQueryObject("taxonomy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTenderTransactions(RootTenderTransactionsArgumentsObject $argsObject = null)
    {
        $object = new TenderTransactionConnectionQueryObject("tenderTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTheme(RootThemeArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeQueryObject("theme");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectThemes(RootThemesArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeConnectionQueryObject("themes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatableResource(RootTranslatableResourceArgumentsObject $argsObject = null)
    {
        $object = new TranslatableResourceQueryObject("translatableResource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatableResources(RootTranslatableResourcesArgumentsObject $argsObject = null)
    {
        $object = new TranslatableResourceConnectionQueryObject("translatableResources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslatableResourcesByIds(RootTranslatableResourcesByIdsArgumentsObject $argsObject = null)
    {
        $object = new TranslatableResourceConnectionQueryObject("translatableResourcesByIds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirect(RootUrlRedirectArgumentsObject $argsObject = null)
    {
        $object = new UrlRedirectQueryObject("urlRedirect");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirectImport(RootUrlRedirectImportArgumentsObject $argsObject = null)
    {
        $object = new UrlRedirectImportQueryObject("urlRedirectImport");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirectSavedSearches(RootUrlRedirectSavedSearchesArgumentsObject $argsObject = null)
    {
        $object = new SavedSearchConnectionQueryObject("urlRedirectSavedSearches");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirects(RootUrlRedirectsArgumentsObject $argsObject = null)
    {
        $object = new UrlRedirectConnectionQueryObject("urlRedirects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlRedirectsCount(RootUrlRedirectsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("urlRedirectsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValidation(RootValidationArgumentsObject $argsObject = null)
    {
        $object = new ValidationQueryObject("validation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValidations(RootValidationsArgumentsObject $argsObject = null)
    {
        $object = new ValidationConnectionQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebPixel(RootWebPixelArgumentsObject $argsObject = null)
    {
        $object = new WebPixelQueryObject("webPixel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebPresences(RootWebPresencesArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceConnectionQueryObject("webPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebhookSubscription(RootWebhookSubscriptionArgumentsObject $argsObject = null)
    {
        $object = new WebhookSubscriptionQueryObject("webhookSubscription");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebhookSubscriptions(RootWebhookSubscriptionsArgumentsObject $argsObject = null)
    {
        $object = new WebhookSubscriptionConnectionQueryObject("webhookSubscriptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebhookSubscriptionsCount(RootWebhookSubscriptionsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("webhookSubscriptionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
