<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyNodeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyNode
     */
    public static function fromArray(array $data): ShopifyNode
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate Node: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AbandonedCheckout':
                return ShopifyAbandonedCheckout::fromArray($data);
            case 'AbandonedCheckoutLineItem':
                return ShopifyAbandonedCheckoutLineItem::fromArray($data);
            case 'Abandonment':
                return ShopifyAbandonment::fromArray($data);
            case 'AddAllProductsOperation':
                return ShopifyAddAllProductsOperation::fromArray($data);
            case 'AdditionalFee':
                return ShopifyAdditionalFee::fromArray($data);
            case 'App':
                return ShopifyApp::fromArray($data);
            case 'AppCatalog':
                return ShopifyAppCatalog::fromArray($data);
            case 'AppCredit':
                return ShopifyAppCredit::fromArray($data);
            case 'AppInstallation':
                return ShopifyAppInstallation::fromArray($data);
            case 'AppPurchaseOneTime':
                return ShopifyAppPurchaseOneTime::fromArray($data);
            case 'AppRevenueAttributionRecord':
                return ShopifyAppRevenueAttributionRecord::fromArray($data);
            case 'AppSubscription':
                return ShopifyAppSubscription::fromArray($data);
            case 'AppUsageRecord':
                return ShopifyAppUsageRecord::fromArray($data);
            case 'Article':
                return ShopifyArticle::fromArray($data);
            case 'BasicEvent':
                return ShopifyBasicEvent::fromArray($data);
            case 'Blog':
                return ShopifyBlog::fromArray($data);
            case 'BulkOperation':
                return ShopifyBulkOperation::fromArray($data);
            case 'BusinessEntity':
                return ShopifyBusinessEntity::fromArray($data);
            case 'CalculatedOrder':
                return ShopifyCalculatedOrder::fromArray($data);
            case 'CartTransform':
                return ShopifyCartTransform::fromArray($data);
            case 'CashTrackingAdjustment':
                return ShopifyCashTrackingAdjustment::fromArray($data);
            case 'CashTrackingSession':
                return ShopifyCashTrackingSession::fromArray($data);
            case 'CatalogCsvOperation':
                return ShopifyCatalogCsvOperation::fromArray($data);
            case 'Channel':
                return ShopifyChannel::fromArray($data);
            case 'ChannelDefinition':
                return ShopifyChannelDefinition::fromArray($data);
            case 'ChannelInformation':
                return ShopifyChannelInformation::fromArray($data);
            case 'CheckoutProfile':
                return ShopifyCheckoutProfile::fromArray($data);
            case 'Collection':
                return ShopifyCollection::fromArray($data);
            case 'Comment':
                return ShopifyComment::fromArray($data);
            case 'CommentEvent':
                return ShopifyCommentEvent::fromArray($data);
            case 'Company':
                return ShopifyCompany::fromArray($data);
            case 'CompanyAddress':
                return ShopifyCompanyAddress::fromArray($data);
            case 'CompanyContact':
                return ShopifyCompanyContact::fromArray($data);
            case 'CompanyContactRole':
                return ShopifyCompanyContactRole::fromArray($data);
            case 'CompanyContactRoleAssignment':
                return ShopifyCompanyContactRoleAssignment::fromArray($data);
            case 'CompanyLocation':
                return ShopifyCompanyLocation::fromArray($data);
            case 'CompanyLocationCatalog':
                return ShopifyCompanyLocationCatalog::fromArray($data);
            case 'CompanyLocationStaffMemberAssignment':
                return ShopifyCompanyLocationStaffMemberAssignment::fromArray($data);
            case 'ConsentPolicy':
                return ShopifyConsentPolicy::fromArray($data);
            case 'CurrencyExchangeAdjustment':
                return ShopifyCurrencyExchangeAdjustment::fromArray($data);
            case 'Customer':
                return ShopifyCustomer::fromArray($data);
            case 'CustomerAccountAppExtensionPage':
                return ShopifyCustomerAccountAppExtensionPage::fromArray($data);
            case 'CustomerAccountNativePage':
                return ShopifyCustomerAccountNativePage::fromArray($data);
            case 'CustomerPaymentMethod':
                return ShopifyCustomerPaymentMethod::fromArray($data);
            case 'CustomerSegmentMembersQuery':
                return ShopifyCustomerSegmentMembersQuery::fromArray($data);
            case 'CustomerVisit':
                return ShopifyCustomerVisit::fromArray($data);
            case 'DeliveryCarrierService':
                return ShopifyDeliveryCarrierService::fromArray($data);
            case 'DeliveryCondition':
                return ShopifyDeliveryCondition::fromArray($data);
            case 'DeliveryCountry':
                return ShopifyDeliveryCountry::fromArray($data);
            case 'DeliveryCustomization':
                return ShopifyDeliveryCustomization::fromArray($data);
            case 'DeliveryLocationGroup':
                return ShopifyDeliveryLocationGroup::fromArray($data);
            case 'DeliveryMethod':
                return ShopifyDeliveryMethod::fromArray($data);
            case 'DeliveryMethodDefinition':
                return ShopifyDeliveryMethodDefinition::fromArray($data);
            case 'DeliveryParticipant':
                return ShopifyDeliveryParticipant::fromArray($data);
            case 'DeliveryProfile':
                return ShopifyDeliveryProfile::fromArray($data);
            case 'DeliveryProfileItem':
                return ShopifyDeliveryProfileItem::fromArray($data);
            case 'DeliveryPromiseParticipant':
                return ShopifyDeliveryPromiseParticipant::fromArray($data);
            case 'DeliveryPromiseProvider':
                return ShopifyDeliveryPromiseProvider::fromArray($data);
            case 'DeliveryProvince':
                return ShopifyDeliveryProvince::fromArray($data);
            case 'DeliveryRateDefinition':
                return ShopifyDeliveryRateDefinition::fromArray($data);
            case 'DeliveryZone':
                return ShopifyDeliveryZone::fromArray($data);
            case 'DiscountAutomaticBxgy':
                return ShopifyDiscountAutomaticBxgy::fromArray($data);
            case 'DiscountAutomaticNode':
                return ShopifyDiscountAutomaticNode::fromArray($data);
            case 'DiscountCodeNode':
                return ShopifyDiscountCodeNode::fromArray($data);
            case 'DiscountNode':
                return ShopifyDiscountNode::fromArray($data);
            case 'DiscountRedeemCodeBulkCreation':
                return ShopifyDiscountRedeemCodeBulkCreation::fromArray($data);
            case 'Domain':
                return ShopifyDomain::fromArray($data);
            case 'DraftOrder':
                return ShopifyDraftOrder::fromArray($data);
            case 'DraftOrderLineItem':
                return ShopifyDraftOrderLineItem::fromArray($data);
            case 'DraftOrderTag':
                return ShopifyDraftOrderTag::fromArray($data);
            case 'Duty':
                return ShopifyDuty::fromArray($data);
            case 'ExchangeLineItem':
                return ShopifyExchangeLineItem::fromArray($data);
            case 'ExchangeV2':
                return ShopifyExchangeV2::fromArray($data);
            case 'ExternalVideo':
                return ShopifyExternalVideo::fromArray($data);
            case 'Fulfillment':
                return ShopifyFulfillment::fromArray($data);
            case 'FulfillmentConstraintRule':
                return ShopifyFulfillmentConstraintRule::fromArray($data);
            case 'FulfillmentEvent':
                return ShopifyFulfillmentEvent::fromArray($data);
            case 'FulfillmentHold':
                return ShopifyFulfillmentHold::fromArray($data);
            case 'FulfillmentLineItem':
                return ShopifyFulfillmentLineItem::fromArray($data);
            case 'FulfillmentOrder':
                return ShopifyFulfillmentOrder::fromArray($data);
            case 'FulfillmentOrderDestination':
                return ShopifyFulfillmentOrderDestination::fromArray($data);
            case 'FulfillmentOrderLineItem':
                return ShopifyFulfillmentOrderLineItem::fromArray($data);
            case 'FulfillmentOrderMerchantRequest':
                return ShopifyFulfillmentOrderMerchantRequest::fromArray($data);
            case 'GenericFile':
                return ShopifyGenericFile::fromArray($data);
            case 'GiftCard':
                return ShopifyGiftCard::fromArray($data);
            case 'GiftCardCreditTransaction':
                return ShopifyGiftCardCreditTransaction::fromArray($data);
            case 'GiftCardDebitTransaction':
                return ShopifyGiftCardDebitTransaction::fromArray($data);
            case 'InventoryAdjustmentGroup':
                return ShopifyInventoryAdjustmentGroup::fromArray($data);
            case 'InventoryItem':
                return ShopifyInventoryItem::fromArray($data);
            case 'InventoryItemMeasurement':
                return ShopifyInventoryItemMeasurement::fromArray($data);
            case 'InventoryLevel':
                return ShopifyInventoryLevel::fromArray($data);
            case 'InventoryQuantity':
                return ShopifyInventoryQuantity::fromArray($data);
            case 'InventoryShipment':
                return ShopifyInventoryShipment::fromArray($data);
            case 'InventoryShipmentLineItem':
                return ShopifyInventoryShipmentLineItem::fromArray($data);
            case 'InventoryTransfer':
                return ShopifyInventoryTransfer::fromArray($data);
            case 'InventoryTransferLineItem':
                return ShopifyInventoryTransferLineItem::fromArray($data);
            case 'LineItem':
                return ShopifyLineItem::fromArray($data);
            case 'LineItemGroup':
                return ShopifyLineItemGroup::fromArray($data);
            case 'Location':
                return ShopifyLocation::fromArray($data);
            case 'MailingAddress':
                return ShopifyMailingAddress::fromArray($data);
            case 'Market':
                return ShopifyMarket::fromArray($data);
            case 'MarketCatalog':
                return ShopifyMarketCatalog::fromArray($data);
            case 'MarketRegionCountry':
                return ShopifyMarketRegionCountry::fromArray($data);
            case 'MarketWebPresence':
                return ShopifyMarketWebPresence::fromArray($data);
            case 'MarketingActivity':
                return ShopifyMarketingActivity::fromArray($data);
            case 'MarketingEvent':
                return ShopifyMarketingEvent::fromArray($data);
            case 'MediaImage':
                return ShopifyMediaImage::fromArray($data);
            case 'Menu':
                return ShopifyMenu::fromArray($data);
            case 'Metafield':
                return ShopifyMetafield::fromArray($data);
            case 'MetafieldDefinition':
                return ShopifyMetafieldDefinition::fromArray($data);
            case 'Metaobject':
                return ShopifyMetaobject::fromArray($data);
            case 'MetaobjectDefinition':
                return ShopifyMetaobjectDefinition::fromArray($data);
            case 'Model3d':
                return ShopifyModel3d::fromArray($data);
            case 'OnlineStoreTheme':
                return ShopifyOnlineStoreTheme::fromArray($data);
            case 'Order':
                return ShopifyOrder::fromArray($data);
            case 'OrderAdjustment':
                return ShopifyOrderAdjustment::fromArray($data);
            case 'OrderDisputeSummary':
                return ShopifyOrderDisputeSummary::fromArray($data);
            case 'OrderEditSession':
                return ShopifyOrderEditSession::fromArray($data);
            case 'OrderTransaction':
                return ShopifyOrderTransaction::fromArray($data);
            case 'Page':
                return ShopifyPage::fromArray($data);
            case 'PaymentCustomization':
                return ShopifyPaymentCustomization::fromArray($data);
            case 'PaymentMandate':
                return ShopifyPaymentMandate::fromArray($data);
            case 'PaymentSchedule':
                return ShopifyPaymentSchedule::fromArray($data);
            case 'PaymentTerms':
                return ShopifyPaymentTerms::fromArray($data);
            case 'PaymentTermsTemplate':
                return ShopifyPaymentTermsTemplate::fromArray($data);
            case 'PointOfSaleDevice':
                return ShopifyPointOfSaleDevice::fromArray($data);
            case 'PriceList':
                return ShopifyPriceList::fromArray($data);
            case 'PriceRule':
                return ShopifyPriceRule::fromArray($data);
            case 'PriceRuleDiscountCode':
                return ShopifyPriceRuleDiscountCode::fromArray($data);
            case 'Product':
                return ShopifyProduct::fromArray($data);
            case 'ProductBundleOperation':
                return ShopifyProductBundleOperation::fromArray($data);
            case 'ProductDeleteOperation':
                return ShopifyProductDeleteOperation::fromArray($data);
            case 'ProductDuplicateOperation':
                return ShopifyProductDuplicateOperation::fromArray($data);
            case 'ProductFeed':
                return ShopifyProductFeed::fromArray($data);
            case 'ProductOption':
                return ShopifyProductOption::fromArray($data);
            case 'ProductOptionValue':
                return ShopifyProductOptionValue::fromArray($data);
            case 'ProductSetOperation':
                return ShopifyProductSetOperation::fromArray($data);
            case 'ProductTaxonomyNode':
                return ShopifyProductTaxonomyNode::fromArray($data);
            case 'ProductVariant':
                return ShopifyProductVariant::fromArray($data);
            case 'ProductVariantComponent':
                return ShopifyProductVariantComponent::fromArray($data);
            case 'Publication':
                return ShopifyPublication::fromArray($data);
            case 'PublicationResourceOperation':
                return ShopifyPublicationResourceOperation::fromArray($data);
            case 'QuantityPriceBreak':
                return ShopifyQuantityPriceBreak::fromArray($data);
            case 'Refund':
                return ShopifyRefund::fromArray($data);
            case 'RefundShippingLine':
                return ShopifyRefundShippingLine::fromArray($data);
            case 'Return':
                return ShopifyReturn::fromArray($data);
            case 'ReturnLineItem':
                return ShopifyReturnLineItem::fromArray($data);
            case 'ReturnReasonDefinition':
                return ShopifyReturnReasonDefinition::fromArray($data);
            case 'ReturnableFulfillment':
                return ShopifyReturnableFulfillment::fromArray($data);
            case 'ReverseDelivery':
                return ShopifyReverseDelivery::fromArray($data);
            case 'ReverseDeliveryLineItem':
                return ShopifyReverseDeliveryLineItem::fromArray($data);
            case 'ReverseFulfillmentOrder':
                return ShopifyReverseFulfillmentOrder::fromArray($data);
            case 'ReverseFulfillmentOrderDisposition':
                return ShopifyReverseFulfillmentOrderDisposition::fromArray($data);
            case 'ReverseFulfillmentOrderLineItem':
                return ShopifyReverseFulfillmentOrderLineItem::fromArray($data);
            case 'SaleAdditionalFee':
                return ShopifySaleAdditionalFee::fromArray($data);
            case 'SavedSearch':
                return ShopifySavedSearch::fromArray($data);
            case 'ScriptTag':
                return ShopifyScriptTag::fromArray($data);
            case 'Segment':
                return ShopifySegment::fromArray($data);
            case 'SellingPlan':
                return ShopifySellingPlan::fromArray($data);
            case 'SellingPlanGroup':
                return ShopifySellingPlanGroup::fromArray($data);
            case 'ServerPixel':
                return ShopifyServerPixel::fromArray($data);
            case 'Shop':
                return ShopifyShop::fromArray($data);
            case 'ShopAddress':
                return ShopifyShopAddress::fromArray($data);
            case 'ShopPolicy':
                return ShopifyShopPolicy::fromArray($data);
            case 'ShopifyPaymentsAccount':
                return ShopifyShopifyPaymentsAccount::fromArray($data);
            case 'ShopifyPaymentsBalanceTransaction':
                return ShopifyShopifyPaymentsBalanceTransaction::fromArray($data);
            case 'ShopifyPaymentsBankAccount':
                return ShopifyShopifyPaymentsBankAccount::fromArray($data);
            case 'ShopifyPaymentsDispute':
                return ShopifyShopifyPaymentsDispute::fromArray($data);
            case 'ShopifyPaymentsDisputeEvidence':
                return ShopifyShopifyPaymentsDisputeEvidence::fromArray($data);
            case 'ShopifyPaymentsDisputeFileUpload':
                return ShopifyShopifyPaymentsDisputeFileUpload::fromArray($data);
            case 'ShopifyPaymentsDisputeFulfillment':
                return ShopifyShopifyPaymentsDisputeFulfillment::fromArray($data);
            case 'ShopifyPaymentsPayout':
                return ShopifyShopifyPaymentsPayout::fromArray($data);
            case 'StaffMember':
                return ShopifyStaffMember::fromArray($data);
            case 'StandardMetafieldDefinitionTemplate':
                return ShopifyStandardMetafieldDefinitionTemplate::fromArray($data);
            case 'StoreCreditAccount':
                return ShopifyStoreCreditAccount::fromArray($data);
            case 'StoreCreditAccountCreditTransaction':
                return ShopifyStoreCreditAccountCreditTransaction::fromArray($data);
            case 'StoreCreditAccountDebitRevertTransaction':
                return ShopifyStoreCreditAccountDebitRevertTransaction::fromArray($data);
            case 'StoreCreditAccountDebitTransaction':
                return ShopifyStoreCreditAccountDebitTransaction::fromArray($data);
            case 'StorefrontAccessToken':
                return ShopifyStorefrontAccessToken::fromArray($data);
            case 'SubscriptionBillingAttempt':
                return ShopifySubscriptionBillingAttempt::fromArray($data);
            case 'SubscriptionContract':
                return ShopifySubscriptionContract::fromArray($data);
            case 'SubscriptionDraft':
                return ShopifySubscriptionDraft::fromArray($data);
            case 'TaxonomyAttribute':
                return ShopifyTaxonomyAttribute::fromArray($data);
            case 'TaxonomyCategory':
                return ShopifyTaxonomyCategory::fromArray($data);
            case 'TaxonomyChoiceListAttribute':
                return ShopifyTaxonomyChoiceListAttribute::fromArray($data);
            case 'TaxonomyMeasurementAttribute':
                return ShopifyTaxonomyMeasurementAttribute::fromArray($data);
            case 'TaxonomyValue':
                return ShopifyTaxonomyValue::fromArray($data);
            case 'TenderTransaction':
                return ShopifyTenderTransaction::fromArray($data);
            case 'TransactionFee':
                return ShopifyTransactionFee::fromArray($data);
            case 'UnverifiedReturnLineItem':
                return ShopifyUnverifiedReturnLineItem::fromArray($data);
            case 'UrlRedirect':
                return ShopifyUrlRedirect::fromArray($data);
            case 'UrlRedirectImport':
                return ShopifyUrlRedirectImport::fromArray($data);
            case 'Validation':
                return ShopifyValidation::fromArray($data);
            case 'Video':
                return ShopifyVideo::fromArray($data);
            case 'WebPixel':
                return ShopifyWebPixel::fromArray($data);
            case 'WebhookSubscription':
                return ShopifyWebhookSubscription::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate Node: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyNode $object
     * @return array
     */
    public static function toArray(ShopifyNode $object): array
    {
        if ($object instanceof ShopifyAbandonedCheckout) {
            return ['__typename' => 'AbandonedCheckout'] + $object->asArray();
        }
        if ($object instanceof ShopifyAbandonedCheckoutLineItem) {
            return ['__typename' => 'AbandonedCheckoutLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyAbandonment) {
            return ['__typename' => 'Abandonment'] + $object->asArray();
        }
        if ($object instanceof ShopifyAddAllProductsOperation) {
            return ['__typename' => 'AddAllProductsOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyAdditionalFee) {
            return ['__typename' => 'AdditionalFee'] + $object->asArray();
        }
        if ($object instanceof ShopifyApp) {
            return ['__typename' => 'App'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppCatalog) {
            return ['__typename' => 'AppCatalog'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppCredit) {
            return ['__typename' => 'AppCredit'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppInstallation) {
            return ['__typename' => 'AppInstallation'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppPurchaseOneTime) {
            return ['__typename' => 'AppPurchaseOneTime'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppRevenueAttributionRecord) {
            return ['__typename' => 'AppRevenueAttributionRecord'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppSubscription) {
            return ['__typename' => 'AppSubscription'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppUsageRecord) {
            return ['__typename' => 'AppUsageRecord'] + $object->asArray();
        }
        if ($object instanceof ShopifyArticle) {
            return ['__typename' => 'Article'] + $object->asArray();
        }
        if ($object instanceof ShopifyBasicEvent) {
            return ['__typename' => 'BasicEvent'] + $object->asArray();
        }
        if ($object instanceof ShopifyBlog) {
            return ['__typename' => 'Blog'] + $object->asArray();
        }
        if ($object instanceof ShopifyBulkOperation) {
            return ['__typename' => 'BulkOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyBusinessEntity) {
            return ['__typename' => 'BusinessEntity'] + $object->asArray();
        }
        if ($object instanceof ShopifyCalculatedOrder) {
            return ['__typename' => 'CalculatedOrder'] + $object->asArray();
        }
        if ($object instanceof ShopifyCartTransform) {
            return ['__typename' => 'CartTransform'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashTrackingAdjustment) {
            return ['__typename' => 'CashTrackingAdjustment'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashTrackingSession) {
            return ['__typename' => 'CashTrackingSession'] + $object->asArray();
        }
        if ($object instanceof ShopifyCatalogCsvOperation) {
            return ['__typename' => 'CatalogCsvOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyChannel) {
            return ['__typename' => 'Channel'] + $object->asArray();
        }
        if ($object instanceof ShopifyChannelDefinition) {
            return ['__typename' => 'ChannelDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyChannelInformation) {
            return ['__typename' => 'ChannelInformation'] + $object->asArray();
        }
        if ($object instanceof ShopifyCheckoutProfile) {
            return ['__typename' => 'CheckoutProfile'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollection) {
            return ['__typename' => 'Collection'] + $object->asArray();
        }
        if ($object instanceof ShopifyComment) {
            return ['__typename' => 'Comment'] + $object->asArray();
        }
        if ($object instanceof ShopifyCommentEvent) {
            return ['__typename' => 'CommentEvent'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompany) {
            return ['__typename' => 'Company'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyAddress) {
            return ['__typename' => 'CompanyAddress'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyContact) {
            return ['__typename' => 'CompanyContact'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyContactRole) {
            return ['__typename' => 'CompanyContactRole'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyContactRoleAssignment) {
            return ['__typename' => 'CompanyContactRoleAssignment'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyLocation) {
            return ['__typename' => 'CompanyLocation'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyLocationCatalog) {
            return ['__typename' => 'CompanyLocationCatalog'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyLocationStaffMemberAssignment) {
            return ['__typename' => 'CompanyLocationStaffMemberAssignment'] + $object->asArray();
        }
        if ($object instanceof ShopifyConsentPolicy) {
            return ['__typename' => 'ConsentPolicy'] + $object->asArray();
        }
        if ($object instanceof ShopifyCurrencyExchangeAdjustment) {
            return ['__typename' => 'CurrencyExchangeAdjustment'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomer) {
            return ['__typename' => 'Customer'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerAccountAppExtensionPage) {
            return ['__typename' => 'CustomerAccountAppExtensionPage'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerAccountNativePage) {
            return ['__typename' => 'CustomerAccountNativePage'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerPaymentMethod) {
            return ['__typename' => 'CustomerPaymentMethod'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerSegmentMembersQuery) {
            return ['__typename' => 'CustomerSegmentMembersQuery'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerVisit) {
            return ['__typename' => 'CustomerVisit'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryCarrierService) {
            return ['__typename' => 'DeliveryCarrierService'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryCondition) {
            return ['__typename' => 'DeliveryCondition'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryCountry) {
            return ['__typename' => 'DeliveryCountry'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryCustomization) {
            return ['__typename' => 'DeliveryCustomization'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryLocationGroup) {
            return ['__typename' => 'DeliveryLocationGroup'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryMethod) {
            return ['__typename' => 'DeliveryMethod'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryMethodDefinition) {
            return ['__typename' => 'DeliveryMethodDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryParticipant) {
            return ['__typename' => 'DeliveryParticipant'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryProfile) {
            return ['__typename' => 'DeliveryProfile'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryProfileItem) {
            return ['__typename' => 'DeliveryProfileItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryPromiseParticipant) {
            return ['__typename' => 'DeliveryPromiseParticipant'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryPromiseProvider) {
            return ['__typename' => 'DeliveryPromiseProvider'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryProvince) {
            return ['__typename' => 'DeliveryProvince'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryRateDefinition) {
            return ['__typename' => 'DeliveryRateDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryZone) {
            return ['__typename' => 'DeliveryZone'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountAutomaticBxgy) {
            return ['__typename' => 'DiscountAutomaticBxgy'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountAutomaticNode) {
            return ['__typename' => 'DiscountAutomaticNode'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCodeNode) {
            return ['__typename' => 'DiscountCodeNode'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountNode) {
            return ['__typename' => 'DiscountNode'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountRedeemCodeBulkCreation) {
            return ['__typename' => 'DiscountRedeemCodeBulkCreation'] + $object->asArray();
        }
        if ($object instanceof ShopifyDomain) {
            return ['__typename' => 'Domain'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrder) {
            return ['__typename' => 'DraftOrder'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrderLineItem) {
            return ['__typename' => 'DraftOrderLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrderTag) {
            return ['__typename' => 'DraftOrderTag'] + $object->asArray();
        }
        if ($object instanceof ShopifyDuty) {
            return ['__typename' => 'Duty'] + $object->asArray();
        }
        if ($object instanceof ShopifyExchangeLineItem) {
            return ['__typename' => 'ExchangeLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyExchangeV2) {
            return ['__typename' => 'ExchangeV2'] + $object->asArray();
        }
        if ($object instanceof ShopifyExternalVideo) {
            return ['__typename' => 'ExternalVideo'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillment) {
            return ['__typename' => 'Fulfillment'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentConstraintRule) {
            return ['__typename' => 'FulfillmentConstraintRule'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentEvent) {
            return ['__typename' => 'FulfillmentEvent'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentHold) {
            return ['__typename' => 'FulfillmentHold'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentLineItem) {
            return ['__typename' => 'FulfillmentLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrder) {
            return ['__typename' => 'FulfillmentOrder'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderDestination) {
            return ['__typename' => 'FulfillmentOrderDestination'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderLineItem) {
            return ['__typename' => 'FulfillmentOrderLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderMerchantRequest) {
            return ['__typename' => 'FulfillmentOrderMerchantRequest'] + $object->asArray();
        }
        if ($object instanceof ShopifyGenericFile) {
            return ['__typename' => 'GenericFile'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCard) {
            return ['__typename' => 'GiftCard'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardCreditTransaction) {
            return ['__typename' => 'GiftCardCreditTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardDebitTransaction) {
            return ['__typename' => 'GiftCardDebitTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryAdjustmentGroup) {
            return ['__typename' => 'InventoryAdjustmentGroup'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryItem) {
            return ['__typename' => 'InventoryItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryItemMeasurement) {
            return ['__typename' => 'InventoryItemMeasurement'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryLevel) {
            return ['__typename' => 'InventoryLevel'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryQuantity) {
            return ['__typename' => 'InventoryQuantity'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipment) {
            return ['__typename' => 'InventoryShipment'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentLineItem) {
            return ['__typename' => 'InventoryShipmentLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransfer) {
            return ['__typename' => 'InventoryTransfer'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferLineItem) {
            return ['__typename' => 'InventoryTransferLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyLineItem) {
            return ['__typename' => 'LineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyLineItemGroup) {
            return ['__typename' => 'LineItemGroup'] + $object->asArray();
        }
        if ($object instanceof ShopifyLocation) {
            return ['__typename' => 'Location'] + $object->asArray();
        }
        if ($object instanceof ShopifyMailingAddress) {
            return ['__typename' => 'MailingAddress'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarket) {
            return ['__typename' => 'Market'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketCatalog) {
            return ['__typename' => 'MarketCatalog'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketRegionCountry) {
            return ['__typename' => 'MarketRegionCountry'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketWebPresence) {
            return ['__typename' => 'MarketWebPresence'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketingActivity) {
            return ['__typename' => 'MarketingActivity'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketingEvent) {
            return ['__typename' => 'MarketingEvent'] + $object->asArray();
        }
        if ($object instanceof ShopifyMediaImage) {
            return ['__typename' => 'MediaImage'] + $object->asArray();
        }
        if ($object instanceof ShopifyMenu) {
            return ['__typename' => 'Menu'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafield) {
            return ['__typename' => 'Metafield'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafieldDefinition) {
            return ['__typename' => 'MetafieldDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetaobject) {
            return ['__typename' => 'Metaobject'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetaobjectDefinition) {
            return ['__typename' => 'MetaobjectDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyModel3d) {
            return ['__typename' => 'Model3d'] + $object->asArray();
        }
        if ($object instanceof ShopifyOnlineStoreTheme) {
            return ['__typename' => 'OnlineStoreTheme'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrder) {
            return ['__typename' => 'Order'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderAdjustment) {
            return ['__typename' => 'OrderAdjustment'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderDisputeSummary) {
            return ['__typename' => 'OrderDisputeSummary'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderEditSession) {
            return ['__typename' => 'OrderEditSession'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderTransaction) {
            return ['__typename' => 'OrderTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyPage) {
            return ['__typename' => 'Page'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentCustomization) {
            return ['__typename' => 'PaymentCustomization'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentMandate) {
            return ['__typename' => 'PaymentMandate'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentSchedule) {
            return ['__typename' => 'PaymentSchedule'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentTerms) {
            return ['__typename' => 'PaymentTerms'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentTermsTemplate) {
            return ['__typename' => 'PaymentTermsTemplate'] + $object->asArray();
        }
        if ($object instanceof ShopifyPointOfSaleDevice) {
            return ['__typename' => 'PointOfSaleDevice'] + $object->asArray();
        }
        if ($object instanceof ShopifyPriceList) {
            return ['__typename' => 'PriceList'] + $object->asArray();
        }
        if ($object instanceof ShopifyPriceRule) {
            return ['__typename' => 'PriceRule'] + $object->asArray();
        }
        if ($object instanceof ShopifyPriceRuleDiscountCode) {
            return ['__typename' => 'PriceRuleDiscountCode'] + $object->asArray();
        }
        if ($object instanceof ShopifyProduct) {
            return ['__typename' => 'Product'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductBundleOperation) {
            return ['__typename' => 'ProductBundleOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductDeleteOperation) {
            return ['__typename' => 'ProductDeleteOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductDuplicateOperation) {
            return ['__typename' => 'ProductDuplicateOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductFeed) {
            return ['__typename' => 'ProductFeed'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductOption) {
            return ['__typename' => 'ProductOption'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductOptionValue) {
            return ['__typename' => 'ProductOptionValue'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductSetOperation) {
            return ['__typename' => 'ProductSetOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductTaxonomyNode) {
            return ['__typename' => 'ProductTaxonomyNode'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariant) {
            return ['__typename' => 'ProductVariant'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariantComponent) {
            return ['__typename' => 'ProductVariantComponent'] + $object->asArray();
        }
        if ($object instanceof ShopifyPublication) {
            return ['__typename' => 'Publication'] + $object->asArray();
        }
        if ($object instanceof ShopifyPublicationResourceOperation) {
            return ['__typename' => 'PublicationResourceOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyQuantityPriceBreak) {
            return ['__typename' => 'QuantityPriceBreak'] + $object->asArray();
        }
        if ($object instanceof ShopifyRefund) {
            return ['__typename' => 'Refund'] + $object->asArray();
        }
        if ($object instanceof ShopifyRefundShippingLine) {
            return ['__typename' => 'RefundShippingLine'] + $object->asArray();
        }
        if ($object instanceof ShopifyReturn) {
            return ['__typename' => 'Return'] + $object->asArray();
        }
        if ($object instanceof ShopifyReturnLineItem) {
            return ['__typename' => 'ReturnLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyReturnReasonDefinition) {
            return ['__typename' => 'ReturnReasonDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyReturnableFulfillment) {
            return ['__typename' => 'ReturnableFulfillment'] + $object->asArray();
        }
        if ($object instanceof ShopifyReverseDelivery) {
            return ['__typename' => 'ReverseDelivery'] + $object->asArray();
        }
        if ($object instanceof ShopifyReverseDeliveryLineItem) {
            return ['__typename' => 'ReverseDeliveryLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyReverseFulfillmentOrder) {
            return ['__typename' => 'ReverseFulfillmentOrder'] + $object->asArray();
        }
        if ($object instanceof ShopifyReverseFulfillmentOrderDisposition) {
            return ['__typename' => 'ReverseFulfillmentOrderDisposition'] + $object->asArray();
        }
        if ($object instanceof ShopifyReverseFulfillmentOrderLineItem) {
            return ['__typename' => 'ReverseFulfillmentOrderLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifySaleAdditionalFee) {
            return ['__typename' => 'SaleAdditionalFee'] + $object->asArray();
        }
        if ($object instanceof ShopifySavedSearch) {
            return ['__typename' => 'SavedSearch'] + $object->asArray();
        }
        if ($object instanceof ShopifyScriptTag) {
            return ['__typename' => 'ScriptTag'] + $object->asArray();
        }
        if ($object instanceof ShopifySegment) {
            return ['__typename' => 'Segment'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlan) {
            return ['__typename' => 'SellingPlan'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlanGroup) {
            return ['__typename' => 'SellingPlanGroup'] + $object->asArray();
        }
        if ($object instanceof ShopifyServerPixel) {
            return ['__typename' => 'ServerPixel'] + $object->asArray();
        }
        if ($object instanceof ShopifyShop) {
            return ['__typename' => 'Shop'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopAddress) {
            return ['__typename' => 'ShopAddress'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopPolicy) {
            return ['__typename' => 'ShopPolicy'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsAccount) {
            return ['__typename' => 'ShopifyPaymentsAccount'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsBalanceTransaction) {
            return ['__typename' => 'ShopifyPaymentsBalanceTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsBankAccount) {
            return ['__typename' => 'ShopifyPaymentsBankAccount'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsDispute) {
            return ['__typename' => 'ShopifyPaymentsDispute'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsDisputeEvidence) {
            return ['__typename' => 'ShopifyPaymentsDisputeEvidence'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsDisputeFileUpload) {
            return ['__typename' => 'ShopifyPaymentsDisputeFileUpload'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsDisputeFulfillment) {
            return ['__typename' => 'ShopifyPaymentsDisputeFulfillment'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsPayout) {
            return ['__typename' => 'ShopifyPaymentsPayout'] + $object->asArray();
        }
        if ($object instanceof ShopifyStaffMember) {
            return ['__typename' => 'StaffMember'] + $object->asArray();
        }
        if ($object instanceof ShopifyStandardMetafieldDefinitionTemplate) {
            return ['__typename' => 'StandardMetafieldDefinitionTemplate'] + $object->asArray();
        }
        if ($object instanceof ShopifyStoreCreditAccount) {
            return ['__typename' => 'StoreCreditAccount'] + $object->asArray();
        }
        if ($object instanceof ShopifyStoreCreditAccountCreditTransaction) {
            return ['__typename' => 'StoreCreditAccountCreditTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyStoreCreditAccountDebitRevertTransaction) {
            return ['__typename' => 'StoreCreditAccountDebitRevertTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyStoreCreditAccountDebitTransaction) {
            return ['__typename' => 'StoreCreditAccountDebitTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyStorefrontAccessToken) {
            return ['__typename' => 'StorefrontAccessToken'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingAttempt) {
            return ['__typename' => 'SubscriptionBillingAttempt'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionContract) {
            return ['__typename' => 'SubscriptionContract'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionDraft) {
            return ['__typename' => 'SubscriptionDraft'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxonomyAttribute) {
            return ['__typename' => 'TaxonomyAttribute'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxonomyCategory) {
            return ['__typename' => 'TaxonomyCategory'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxonomyChoiceListAttribute) {
            return ['__typename' => 'TaxonomyChoiceListAttribute'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxonomyMeasurementAttribute) {
            return ['__typename' => 'TaxonomyMeasurementAttribute'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxonomyValue) {
            return ['__typename' => 'TaxonomyValue'] + $object->asArray();
        }
        if ($object instanceof ShopifyTenderTransaction) {
            return ['__typename' => 'TenderTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyTransactionFee) {
            return ['__typename' => 'TransactionFee'] + $object->asArray();
        }
        if ($object instanceof ShopifyUnverifiedReturnLineItem) {
            return ['__typename' => 'UnverifiedReturnLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyUrlRedirect) {
            return ['__typename' => 'UrlRedirect'] + $object->asArray();
        }
        if ($object instanceof ShopifyUrlRedirectImport) {
            return ['__typename' => 'UrlRedirectImport'] + $object->asArray();
        }
        if ($object instanceof ShopifyValidation) {
            return ['__typename' => 'Validation'] + $object->asArray();
        }
        if ($object instanceof ShopifyVideo) {
            return ['__typename' => 'Video'] + $object->asArray();
        }
        if ($object instanceof ShopifyWebPixel) {
            return ['__typename' => 'WebPixel'] + $object->asArray();
        }
        if ($object instanceof ShopifyWebhookSubscription) {
            return ['__typename' => 'WebhookSubscription'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of Node');
    }
}
