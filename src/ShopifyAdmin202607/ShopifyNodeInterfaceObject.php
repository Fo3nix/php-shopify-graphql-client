<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * An object with an ID field to support global identification, in accordance with the
 * [Relay specification](https://relay.dev/graphql/objectidentification.htm#sec-Node-Interface).
 * This interface is used by the [node](https://shopify.dev/api/admin-graphql/unstable/queries/node)
 * and [nodes](https://shopify.dev/api/admin-graphql/unstable/queries/nodes) queries.
 */
class ShopifyNodeInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "Node";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    public function onAbandonedCheckout(): ShopifyAbandonedCheckoutQueryObject
    {
        $object = new ShopifyAbandonedCheckoutQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAbandonedCheckoutLineItem(): ShopifyAbandonedCheckoutLineItemQueryObject
    {
        $object = new ShopifyAbandonedCheckoutLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAbandonment(): ShopifyAbandonmentQueryObject
    {
        $object = new ShopifyAbandonmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAddAllProductsOperation(): ShopifyAddAllProductsOperationQueryObject
    {
        $object = new ShopifyAddAllProductsOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAdditionalFee(): ShopifyAdditionalFeeQueryObject
    {
        $object = new ShopifyAdditionalFeeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onApp(): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppCatalog(): ShopifyAppCatalogQueryObject
    {
        $object = new ShopifyAppCatalogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppCredit(): ShopifyAppCreditQueryObject
    {
        $object = new ShopifyAppCreditQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppInstallation(): ShopifyAppInstallationQueryObject
    {
        $object = new ShopifyAppInstallationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppPurchaseOneTime(): ShopifyAppPurchaseOneTimeQueryObject
    {
        $object = new ShopifyAppPurchaseOneTimeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppRevenueAttributionRecord(): ShopifyAppRevenueAttributionRecordQueryObject
    {
        $object = new ShopifyAppRevenueAttributionRecordQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppSubscription(): ShopifyAppSubscriptionQueryObject
    {
        $object = new ShopifyAppSubscriptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppUsageRecord(): ShopifyAppUsageRecordQueryObject
    {
        $object = new ShopifyAppUsageRecordQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onArticle(): ShopifyArticleQueryObject
    {
        $object = new ShopifyArticleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBasicEvent(): ShopifyBasicEventQueryObject
    {
        $object = new ShopifyBasicEventQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBlog(): ShopifyBlogQueryObject
    {
        $object = new ShopifyBlogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBulkOperation(): ShopifyBulkOperationQueryObject
    {
        $object = new ShopifyBulkOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBusinessEntity(): ShopifyBusinessEntityQueryObject
    {
        $object = new ShopifyBusinessEntityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCalculatedOrder(): ShopifyCalculatedOrderQueryObject
    {
        $object = new ShopifyCalculatedOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCartTransform(): ShopifyCartTransformQueryObject
    {
        $object = new ShopifyCartTransformQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashDrawer(): ShopifyCashDrawerQueryObject
    {
        $object = new ShopifyCashDrawerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashManagementCustomReasonCode(): ShopifyCashManagementCustomReasonCodeQueryObject
    {
        $object = new ShopifyCashManagementCustomReasonCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashManagementDefaultReasonCode(): ShopifyCashManagementDefaultReasonCodeQueryObject
    {
        $object = new ShopifyCashManagementDefaultReasonCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashManagementSystemReasonCode(): ShopifyCashManagementSystemReasonCodeQueryObject
    {
        $object = new ShopifyCashManagementSystemReasonCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashTrackingAdjustment(): ShopifyCashTrackingAdjustmentQueryObject
    {
        $object = new ShopifyCashTrackingAdjustmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashTrackingSession(): ShopifyCashTrackingSessionQueryObject
    {
        $object = new ShopifyCashTrackingSessionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCatalogCsvOperation(): ShopifyCatalogCsvOperationQueryObject
    {
        $object = new ShopifyCatalogCsvOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onChannel(): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onChannelDefinition(): ShopifyChannelDefinitionQueryObject
    {
        $object = new ShopifyChannelDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onChannelInformation(): ShopifyChannelInformationQueryObject
    {
        $object = new ShopifyChannelInformationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCheckoutAndAccountsConfiguration(): ShopifyCheckoutAndAccountsConfigurationQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCheckoutAndAccountsConfigurationOverride(): ShopifyCheckoutAndAccountsConfigurationOverrideQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationOverrideQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCheckoutProfile(): ShopifyCheckoutProfileQueryObject
    {
        $object = new ShopifyCheckoutProfileQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollection(): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionConditionsSource(): ShopifyCollectionConditionsSourceQueryObject
    {
        $object = new ShopifyCollectionConditionsSourceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSubCollectionsSource(): ShopifyCollectionSubCollectionsSourceQueryObject
    {
        $object = new ShopifyCollectionSubCollectionsSourceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onComment(): ShopifyCommentQueryObject
    {
        $object = new ShopifyCommentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCommentEvent(): ShopifyCommentEventQueryObject
    {
        $object = new ShopifyCommentEventQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompany(): ShopifyCompanyQueryObject
    {
        $object = new ShopifyCompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyAddress(): ShopifyCompanyAddressQueryObject
    {
        $object = new ShopifyCompanyAddressQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyContact(): ShopifyCompanyContactQueryObject
    {
        $object = new ShopifyCompanyContactQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyContactRole(): ShopifyCompanyContactRoleQueryObject
    {
        $object = new ShopifyCompanyContactRoleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyContactRoleAssignment(): ShopifyCompanyContactRoleAssignmentQueryObject
    {
        $object = new ShopifyCompanyContactRoleAssignmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyLocation(): ShopifyCompanyLocationQueryObject
    {
        $object = new ShopifyCompanyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyLocationCatalog(): ShopifyCompanyLocationCatalogQueryObject
    {
        $object = new ShopifyCompanyLocationCatalogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyLocationStaffMemberAssignment(): ShopifyCompanyLocationStaffMemberAssignmentQueryObject
    {
        $object = new ShopifyCompanyLocationStaffMemberAssignmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onConsentPolicy(): ShopifyConsentPolicyQueryObject
    {
        $object = new ShopifyConsentPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCurrencyExchangeAdjustment(): ShopifyCurrencyExchangeAdjustmentQueryObject
    {
        $object = new ShopifyCurrencyExchangeAdjustmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomer(): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerAccountAppExtensionPage(): ShopifyCustomerAccountAppExtensionPageQueryObject
    {
        $object = new ShopifyCustomerAccountAppExtensionPageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerAccountNativePage(): ShopifyCustomerAccountNativePageQueryObject
    {
        $object = new ShopifyCustomerAccountNativePageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerPaymentMethod(): ShopifyCustomerPaymentMethodQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerSegmentMembersQuery(): ShopifyCustomerSegmentMembersQueryQueryObject
    {
        $object = new ShopifyCustomerSegmentMembersQueryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerVisit(): ShopifyCustomerVisitQueryObject
    {
        $object = new ShopifyCustomerVisitQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryCarrierService(): ShopifyDeliveryCarrierServiceQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryCondition(): ShopifyDeliveryConditionQueryObject
    {
        $object = new ShopifyDeliveryConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryCountry(): ShopifyDeliveryCountryQueryObject
    {
        $object = new ShopifyDeliveryCountryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryCustomization(): ShopifyDeliveryCustomizationQueryObject
    {
        $object = new ShopifyDeliveryCustomizationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryLocationGroup(): ShopifyDeliveryLocationGroupQueryObject
    {
        $object = new ShopifyDeliveryLocationGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryMethod(): ShopifyDeliveryMethodQueryObject
    {
        $object = new ShopifyDeliveryMethodQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryMethodDefinition(): ShopifyDeliveryMethodDefinitionQueryObject
    {
        $object = new ShopifyDeliveryMethodDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryParticipant(): ShopifyDeliveryParticipantQueryObject
    {
        $object = new ShopifyDeliveryParticipantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryProfile(): ShopifyDeliveryProfileQueryObject
    {
        $object = new ShopifyDeliveryProfileQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryProfileItem(): ShopifyDeliveryProfileItemQueryObject
    {
        $object = new ShopifyDeliveryProfileItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryPromiseParticipant(): ShopifyDeliveryPromiseParticipantQueryObject
    {
        $object = new ShopifyDeliveryPromiseParticipantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryPromiseProvider(): ShopifyDeliveryPromiseProviderQueryObject
    {
        $object = new ShopifyDeliveryPromiseProviderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryProvince(): ShopifyDeliveryProvinceQueryObject
    {
        $object = new ShopifyDeliveryProvinceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryRateDefinition(): ShopifyDeliveryRateDefinitionQueryObject
    {
        $object = new ShopifyDeliveryRateDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryZone(): ShopifyDeliveryZoneQueryObject
    {
        $object = new ShopifyDeliveryZoneQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticBxgy(): ShopifyDiscountAutomaticBxgyQueryObject
    {
        $object = new ShopifyDiscountAutomaticBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticNode(): ShopifyDiscountAutomaticNodeQueryObject
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeNode(): ShopifyDiscountCodeNodeQueryObject
    {
        $object = new ShopifyDiscountCodeNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountNode(): ShopifyDiscountNodeQueryObject
    {
        $object = new ShopifyDiscountNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountRedeemCodeBulkCreation(): ShopifyDiscountRedeemCodeBulkCreationQueryObject
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDomain(): ShopifyDomainQueryObject
    {
        $object = new ShopifyDomainQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrder(): ShopifyDraftOrderQueryObject
    {
        $object = new ShopifyDraftOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrderLineItem(): ShopifyDraftOrderLineItemQueryObject
    {
        $object = new ShopifyDraftOrderLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrderTag(): ShopifyDraftOrderTagQueryObject
    {
        $object = new ShopifyDraftOrderTagQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDuty(): ShopifyDutyQueryObject
    {
        $object = new ShopifyDutyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onExchangeLineItem(): ShopifyExchangeLineItemQueryObject
    {
        $object = new ShopifyExchangeLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onExchangeV2(): ShopifyExchangeV2QueryObject
    {
        $object = new ShopifyExchangeV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onExternalVideo(): ShopifyExternalVideoQueryObject
    {
        $object = new ShopifyExternalVideoQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillment(): ShopifyFulfillmentQueryObject
    {
        $object = new ShopifyFulfillmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentConstraintRule(): ShopifyFulfillmentConstraintRuleQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentEvent(): ShopifyFulfillmentEventQueryObject
    {
        $object = new ShopifyFulfillmentEventQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentHold(): ShopifyFulfillmentHoldQueryObject
    {
        $object = new ShopifyFulfillmentHoldQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentLineItem(): ShopifyFulfillmentLineItemQueryObject
    {
        $object = new ShopifyFulfillmentLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrder(): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderDestination(): ShopifyFulfillmentOrderDestinationQueryObject
    {
        $object = new ShopifyFulfillmentOrderDestinationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderLineItem(): ShopifyFulfillmentOrderLineItemQueryObject
    {
        $object = new ShopifyFulfillmentOrderLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderMerchantRequest(): ShopifyFulfillmentOrderMerchantRequestQueryObject
    {
        $object = new ShopifyFulfillmentOrderMerchantRequestQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGenericFile(): ShopifyGenericFileQueryObject
    {
        $object = new ShopifyGenericFileQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCard(): ShopifyGiftCardQueryObject
    {
        $object = new ShopifyGiftCardQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardCashOutTransaction(): ShopifyGiftCardCashOutTransactionQueryObject
    {
        $object = new ShopifyGiftCardCashOutTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardCreditTransaction(): ShopifyGiftCardCreditTransactionQueryObject
    {
        $object = new ShopifyGiftCardCreditTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardDebitTransaction(): ShopifyGiftCardDebitTransactionQueryObject
    {
        $object = new ShopifyGiftCardDebitTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onIdentityProviderSubject(): ShopifyIdentityProviderSubjectQueryObject
    {
        $object = new ShopifyIdentityProviderSubjectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryAdjustmentGroup(): ShopifyInventoryAdjustmentGroupQueryObject
    {
        $object = new ShopifyInventoryAdjustmentGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryItem(): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryItemMeasurement(): ShopifyInventoryItemMeasurementQueryObject
    {
        $object = new ShopifyInventoryItemMeasurementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryLevel(): ShopifyInventoryLevelQueryObject
    {
        $object = new ShopifyInventoryLevelQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryQuantity(): ShopifyInventoryQuantityQueryObject
    {
        $object = new ShopifyInventoryQuantityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipment(): ShopifyInventoryShipmentQueryObject
    {
        $object = new ShopifyInventoryShipmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentLineItem(): ShopifyInventoryShipmentLineItemQueryObject
    {
        $object = new ShopifyInventoryShipmentLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransfer(): ShopifyInventoryTransferQueryObject
    {
        $object = new ShopifyInventoryTransferQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferLineItem(): ShopifyInventoryTransferLineItemQueryObject
    {
        $object = new ShopifyInventoryTransferLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLineItem(): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLineItemGroup(): ShopifyLineItemGroupQueryObject
    {
        $object = new ShopifyLineItemGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocation(): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMailingAddress(): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarket(): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketCatalog(): ShopifyMarketCatalogQueryObject
    {
        $object = new ShopifyMarketCatalogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketRegionCountry(): ShopifyMarketRegionCountryQueryObject
    {
        $object = new ShopifyMarketRegionCountryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketRegionSubdivision(): ShopifyMarketRegionSubdivisionQueryObject
    {
        $object = new ShopifyMarketRegionSubdivisionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketWebPresence(): ShopifyMarketWebPresenceQueryObject
    {
        $object = new ShopifyMarketWebPresenceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketingActivity(): ShopifyMarketingActivityQueryObject
    {
        $object = new ShopifyMarketingActivityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketingEvent(): ShopifyMarketingEventQueryObject
    {
        $object = new ShopifyMarketingEventQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMediaImage(): ShopifyMediaImageQueryObject
    {
        $object = new ShopifyMediaImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMenu(): ShopifyMenuQueryObject
    {
        $object = new ShopifyMenuQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafield(): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafieldDefinition(): ShopifyMetafieldDefinitionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetaobject(): ShopifyMetaobjectQueryObject
    {
        $object = new ShopifyMetaobjectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetaobjectDefinition(): ShopifyMetaobjectDefinitionQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onModel3d(): ShopifyModel3dQueryObject
    {
        $object = new ShopifyModel3dQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOnlineStoreTheme(): ShopifyOnlineStoreThemeQueryObject
    {
        $object = new ShopifyOnlineStoreThemeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrder(): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderAdjustment(): ShopifyOrderAdjustmentQueryObject
    {
        $object = new ShopifyOrderAdjustmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderAttributionDefinition(): ShopifyOrderAttributionDefinitionQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderCreateMandatePaymentJobResult(): ShopifyOrderCreateMandatePaymentJobResultQueryObject
    {
        $object = new ShopifyOrderCreateMandatePaymentJobResultQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderDisputeSummary(): ShopifyOrderDisputeSummaryQueryObject
    {
        $object = new ShopifyOrderDisputeSummaryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderEditSession(): ShopifyOrderEditSessionQueryObject
    {
        $object = new ShopifyOrderEditSessionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderTransaction(): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPage(): ShopifyPageQueryObject
    {
        $object = new ShopifyPageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentCustomization(): ShopifyPaymentCustomizationQueryObject
    {
        $object = new ShopifyPaymentCustomizationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentMandate(): ShopifyPaymentMandateQueryObject
    {
        $object = new ShopifyPaymentMandateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentSchedule(): ShopifyPaymentScheduleQueryObject
    {
        $object = new ShopifyPaymentScheduleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentTerms(): ShopifyPaymentTermsQueryObject
    {
        $object = new ShopifyPaymentTermsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentTermsTemplate(): ShopifyPaymentTermsTemplateQueryObject
    {
        $object = new ShopifyPaymentTermsTemplateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPointOfSaleDevice(): ShopifyPointOfSaleDeviceQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPointOfSaleDevicePaymentSession(): ShopifyPointOfSaleDevicePaymentSessionQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPriceList(): ShopifyPriceListQueryObject
    {
        $object = new ShopifyPriceListQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPriceRule(): ShopifyPriceRuleQueryObject
    {
        $object = new ShopifyPriceRuleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPriceRuleDiscountCode(): ShopifyPriceRuleDiscountCodeQueryObject
    {
        $object = new ShopifyPriceRuleDiscountCodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProduct(): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductBundleOperation(): ShopifyProductBundleOperationQueryObject
    {
        $object = new ShopifyProductBundleOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductDeleteOperation(): ShopifyProductDeleteOperationQueryObject
    {
        $object = new ShopifyProductDeleteOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductDuplicateOperation(): ShopifyProductDuplicateOperationQueryObject
    {
        $object = new ShopifyProductDuplicateOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductFeed(): ShopifyProductFeedQueryObject
    {
        $object = new ShopifyProductFeedQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductOption(): ShopifyProductOptionQueryObject
    {
        $object = new ShopifyProductOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductOptionValue(): ShopifyProductOptionValueQueryObject
    {
        $object = new ShopifyProductOptionValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductSetOperation(): ShopifyProductSetOperationQueryObject
    {
        $object = new ShopifyProductSetOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductTaxonomyNode(): ShopifyProductTaxonomyNodeQueryObject
    {
        $object = new ShopifyProductTaxonomyNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariant(): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariantComponent(): ShopifyProductVariantComponentQueryObject
    {
        $object = new ShopifyProductVariantComponentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPublication(): ShopifyPublicationQueryObject
    {
        $object = new ShopifyPublicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPublicationResourceOperation(): ShopifyPublicationResourceOperationQueryObject
    {
        $object = new ShopifyPublicationResourceOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onQuantityPriceBreak(): ShopifyQuantityPriceBreakQueryObject
    {
        $object = new ShopifyQuantityPriceBreakQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRefund(): ShopifyRefundQueryObject
    {
        $object = new ShopifyRefundQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRefundShippingLine(): ShopifyRefundShippingLineQueryObject
    {
        $object = new ShopifyRefundShippingLineQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReturn(): ShopifyReturnQueryObject
    {
        $object = new ShopifyReturnQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReturnLineItem(): ShopifyReturnLineItemQueryObject
    {
        $object = new ShopifyReturnLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReturnReasonDefinition(): ShopifyReturnReasonDefinitionQueryObject
    {
        $object = new ShopifyReturnReasonDefinitionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReturnableFulfillment(): ShopifyReturnableFulfillmentQueryObject
    {
        $object = new ShopifyReturnableFulfillmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReverseDelivery(): ShopifyReverseDeliveryQueryObject
    {
        $object = new ShopifyReverseDeliveryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReverseDeliveryLineItem(): ShopifyReverseDeliveryLineItemQueryObject
    {
        $object = new ShopifyReverseDeliveryLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReverseFulfillmentOrder(): ShopifyReverseFulfillmentOrderQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReverseFulfillmentOrderDisposition(): ShopifyReverseFulfillmentOrderDispositionQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderDispositionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReverseFulfillmentOrderLineItem(): ShopifyReverseFulfillmentOrderLineItemQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSaleAdditionalFee(): ShopifySaleAdditionalFeeQueryObject
    {
        $object = new ShopifySaleAdditionalFeeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSavedSearch(): ShopifySavedSearchQueryObject
    {
        $object = new ShopifySavedSearchQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onScriptTag(): ShopifyScriptTagQueryObject
    {
        $object = new ShopifyScriptTagQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSegment(): ShopifySegmentQueryObject
    {
        $object = new ShopifySegmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlan(): ShopifySellingPlanQueryObject
    {
        $object = new ShopifySellingPlanQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlanGroup(): ShopifySellingPlanGroupQueryObject
    {
        $object = new ShopifySellingPlanGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onServerPixel(): ShopifyServerPixelQueryObject
    {
        $object = new ShopifyServerPixelQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShippingLabel(): ShopifyShippingLabelQueryObject
    {
        $object = new ShopifyShippingLabelQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShippingLabelPurchaseResult(): ShopifyShippingLabelPurchaseResultQueryObject
    {
        $object = new ShopifyShippingLabelPurchaseResultQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShop(): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopAddress(): ShopifyShopAddressQueryObject
    {
        $object = new ShopifyShopAddressQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopPolicy(): ShopifyShopPolicyQueryObject
    {
        $object = new ShopifyShopPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsAccount(): ShopifyShopifyPaymentsAccountQueryObject
    {
        $object = new ShopifyShopifyPaymentsAccountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsBalanceTransaction(): ShopifyShopifyPaymentsBalanceTransactionQueryObject
    {
        $object = new ShopifyShopifyPaymentsBalanceTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsBankAccount(): ShopifyShopifyPaymentsBankAccountQueryObject
    {
        $object = new ShopifyShopifyPaymentsBankAccountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsDispute(): ShopifyShopifyPaymentsDisputeQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsDisputeEvidence(): ShopifyShopifyPaymentsDisputeEvidenceQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeEvidenceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsDisputeFileUpload(): ShopifyShopifyPaymentsDisputeFileUploadQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsDisputeFulfillment(): ShopifyShopifyPaymentsDisputeFulfillmentQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFulfillmentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsPayout(): ShopifyShopifyPaymentsPayoutQueryObject
    {
        $object = new ShopifyShopifyPaymentsPayoutQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStaffMember(): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStandardMetafieldDefinitionTemplate(): ShopifyStandardMetafieldDefinitionTemplateQueryObject
    {
        $object = new ShopifyStandardMetafieldDefinitionTemplateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStoreCreditAccount(): ShopifyStoreCreditAccountQueryObject
    {
        $object = new ShopifyStoreCreditAccountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStoreCreditAccountCreditTransaction(): ShopifyStoreCreditAccountCreditTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountCreditTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStoreCreditAccountDebitRevertTransaction(): ShopifyStoreCreditAccountDebitRevertTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountDebitRevertTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStoreCreditAccountDebitTransaction(): ShopifyStoreCreditAccountDebitTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountDebitTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStorefrontAccessToken(): ShopifyStorefrontAccessTokenQueryObject
    {
        $object = new ShopifyStorefrontAccessTokenQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionBillingAttempt(): ShopifySubscriptionBillingAttemptQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionContract(): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionDraft(): ShopifySubscriptionDraftQueryObject
    {
        $object = new ShopifySubscriptionDraftQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxonomyAttribute(): ShopifyTaxonomyAttributeQueryObject
    {
        $object = new ShopifyTaxonomyAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxonomyCategory(): ShopifyTaxonomyCategoryQueryObject
    {
        $object = new ShopifyTaxonomyCategoryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxonomyChoiceListAttribute(): ShopifyTaxonomyChoiceListAttributeQueryObject
    {
        $object = new ShopifyTaxonomyChoiceListAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxonomyMeasurementAttribute(): ShopifyTaxonomyMeasurementAttributeQueryObject
    {
        $object = new ShopifyTaxonomyMeasurementAttributeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxonomyValue(): ShopifyTaxonomyValueQueryObject
    {
        $object = new ShopifyTaxonomyValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTenderTransaction(): ShopifyTenderTransactionQueryObject
    {
        $object = new ShopifyTenderTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTransactionFee(): ShopifyTransactionFeeQueryObject
    {
        $object = new ShopifyTransactionFeeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUnverifiedReturnLineItem(): ShopifyUnverifiedReturnLineItemQueryObject
    {
        $object = new ShopifyUnverifiedReturnLineItemQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUrlRedirect(): ShopifyUrlRedirectQueryObject
    {
        $object = new ShopifyUrlRedirectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUrlRedirectImport(): ShopifyUrlRedirectImportQueryObject
    {
        $object = new ShopifyUrlRedirectImportQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onValidation(): ShopifyValidationQueryObject
    {
        $object = new ShopifyValidationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onVideo(): ShopifyVideoQueryObject
    {
        $object = new ShopifyVideoQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onWebPixel(): ShopifyWebPixelQueryObject
    {
        $object = new ShopifyWebPixelQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onWebhookSubscription(): ShopifyWebhookSubscriptionQueryObject
    {
        $object = new ShopifyWebhookSubscriptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
