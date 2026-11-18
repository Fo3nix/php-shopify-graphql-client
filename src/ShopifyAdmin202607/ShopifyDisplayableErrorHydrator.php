<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyDisplayableErrorHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDisplayableError
     */
    public static function fromArray(array $data): ShopifyDisplayableError
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DisplayableError: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AbandonmentEmailStateUpdateUserError':
                return ShopifyAbandonmentEmailStateUpdateUserError::fromArray($data);
            case 'AbandonmentUpdateActivitiesDeliveryStatusesUserError':
                return ShopifyAbandonmentUpdateActivitiesDeliveryStatusesUserError::fromArray($data);
            case 'AppRevokeAccessScopesAppRevokeScopeError':
                return ShopifyAppRevokeAccessScopesAppRevokeScopeError::fromArray($data);
            case 'AppSubscriptionTrialExtendUserError':
                return ShopifyAppSubscriptionTrialExtendUserError::fromArray($data);
            case 'AppUninstallAppUninstallError':
                return ShopifyAppUninstallAppUninstallError::fromArray($data);
            case 'ArticleCreateUserError':
                return ShopifyArticleCreateUserError::fromArray($data);
            case 'ArticleDeleteUserError':
                return ShopifyArticleDeleteUserError::fromArray($data);
            case 'ArticleUpdateUserError':
                return ShopifyArticleUpdateUserError::fromArray($data);
            case 'BillingAttemptUserError':
                return ShopifyBillingAttemptUserError::fromArray($data);
            case 'BlogCreateUserError':
                return ShopifyBlogCreateUserError::fromArray($data);
            case 'BlogDeleteUserError':
                return ShopifyBlogDeleteUserError::fromArray($data);
            case 'BlogUpdateUserError':
                return ShopifyBlogUpdateUserError::fromArray($data);
            case 'BulkMutationUserError':
                return ShopifyBulkMutationUserError::fromArray($data);
            case 'BulkOperationUserError':
                return ShopifyBulkOperationUserError::fromArray($data);
            case 'BulkProductResourceFeedbackCreateUserError':
                return ShopifyBulkProductResourceFeedbackCreateUserError::fromArray($data);
            case 'BusinessCustomerUserError':
                return ShopifyBusinessCustomerUserError::fromArray($data);
            case 'CarrierServiceCreateUserError':
                return ShopifyCarrierServiceCreateUserError::fromArray($data);
            case 'CarrierServiceDeleteUserError':
                return ShopifyCarrierServiceDeleteUserError::fromArray($data);
            case 'CarrierServiceUpdateUserError':
                return ShopifyCarrierServiceUpdateUserError::fromArray($data);
            case 'CartTransformCreateUserError':
                return ShopifyCartTransformCreateUserError::fromArray($data);
            case 'CartTransformDeleteUserError':
                return ShopifyCartTransformDeleteUserError::fromArray($data);
            case 'CashDrawerCreateUserError':
                return ShopifyCashDrawerCreateUserError::fromArray($data);
            case 'CashDrawerFindOrCreateUserError':
                return ShopifyCashDrawerFindOrCreateUserError::fromArray($data);
            case 'CashDrawerUpdateUserError':
                return ShopifyCashDrawerUpdateUserError::fromArray($data);
            case 'CashManagementReasonCodeCreateUserError':
                return ShopifyCashManagementReasonCodeCreateUserError::fromArray($data);
            case 'CashManagementReasonCodeDeleteUserError':
                return ShopifyCashManagementReasonCodeDeleteUserError::fromArray($data);
            case 'CatalogUserError':
                return ShopifyCatalogUserError::fromArray($data);
            case 'ChannelCreateUserError':
                return ShopifyChannelCreateUserError::fromArray($data);
            case 'ChannelDeleteUserError':
                return ShopifyChannelDeleteUserError::fromArray($data);
            case 'ChannelFullSyncUserError':
                return ShopifyChannelFullSyncUserError::fromArray($data);
            case 'ChannelUpdateUserError':
                return ShopifyChannelUpdateUserError::fromArray($data);
            case 'CheckoutAndAccountsConfigurationUserError':
                return ShopifyCheckoutAndAccountsConfigurationUserError::fromArray($data);
            case 'CheckoutBrandingUpsertUserError':
                return ShopifyCheckoutBrandingUpsertUserError::fromArray($data);
            case 'CollectionAddProductsV2UserError':
                return ShopifyCollectionAddProductsV2UserError::fromArray($data);
            case 'CollectionDuplicateUserError':
                return ShopifyCollectionDuplicateUserError::fromArray($data);
            case 'CollectionReorderProductsUserError':
                return ShopifyCollectionReorderProductsUserError::fromArray($data);
            case 'CombinedListingUpdateUserError':
                return ShopifyCombinedListingUpdateUserError::fromArray($data);
            case 'CommentApproveUserError':
                return ShopifyCommentApproveUserError::fromArray($data);
            case 'CommentDeleteUserError':
                return ShopifyCommentDeleteUserError::fromArray($data);
            case 'CommentNotSpamUserError':
                return ShopifyCommentNotSpamUserError::fromArray($data);
            case 'CommentSpamUserError':
                return ShopifyCommentSpamUserError::fromArray($data);
            case 'ConsentPolicyError':
                return ShopifyConsentPolicyError::fromArray($data);
            case 'CustomerCancelDataErasureUserError':
                return ShopifyCustomerCancelDataErasureUserError::fromArray($data);
            case 'CustomerEmailMarketingConsentUpdateUserError':
                return ShopifyCustomerEmailMarketingConsentUpdateUserError::fromArray($data);
            case 'CustomerMarketingConsentError':
                return ShopifyCustomerMarketingConsentError::fromArray($data);
            case 'CustomerMergeUserError':
                return ShopifyCustomerMergeUserError::fromArray($data);
            case 'CustomerPaymentMethodCreateFromDuplicationDataUserError':
                return ShopifyCustomerPaymentMethodCreateFromDuplicationDataUserError::fromArray($data);
            case 'CustomerPaymentMethodGetDuplicationDataUserError':
                return ShopifyCustomerPaymentMethodGetDuplicationDataUserError::fromArray($data);
            case 'CustomerPaymentMethodGetUpdateUrlUserError':
                return ShopifyCustomerPaymentMethodGetUpdateUrlUserError::fromArray($data);
            case 'CustomerPaymentMethodRemoteUserError':
                return ShopifyCustomerPaymentMethodRemoteUserError::fromArray($data);
            case 'CustomerPaymentMethodUserError':
                return ShopifyCustomerPaymentMethodUserError::fromArray($data);
            case 'CustomerRequestDataErasureUserError':
                return ShopifyCustomerRequestDataErasureUserError::fromArray($data);
            case 'CustomerSegmentMembersQueryUserError':
                return ShopifyCustomerSegmentMembersQueryUserError::fromArray($data);
            case 'CustomerSendAccountInviteEmailUserError':
                return ShopifyCustomerSendAccountInviteEmailUserError::fromArray($data);
            case 'CustomerSetUserError':
                return ShopifyCustomerSetUserError::fromArray($data);
            case 'CustomerSmsMarketingConsentError':
                return ShopifyCustomerSmsMarketingConsentError::fromArray($data);
            case 'DataSaleOptOutUserError':
                return ShopifyDataSaleOptOutUserError::fromArray($data);
            case 'DelegateAccessTokenCreateUserError':
                return ShopifyDelegateAccessTokenCreateUserError::fromArray($data);
            case 'DelegateAccessTokenDestroyUserError':
                return ShopifyDelegateAccessTokenDestroyUserError::fromArray($data);
            case 'DeliveryCustomizationError':
                return ShopifyDeliveryCustomizationError::fromArray($data);
            case 'DeliveryLocationLocalPickupSettingsError':
                return ShopifyDeliveryLocationLocalPickupSettingsError::fromArray($data);
            case 'DeliveryPromiseProviderUpsertUserError':
                return ShopifyDeliveryPromiseProviderUpsertUserError::fromArray($data);
            case 'DiscountUserError':
                return ShopifyDiscountUserError::fromArray($data);
            case 'DisputeEvidenceUpdateUserError':
                return ShopifyDisputeEvidenceUpdateUserError::fromArray($data);
            case 'ErrorsServerPixelUserError':
                return ShopifyErrorsServerPixelUserError::fromArray($data);
            case 'ErrorsWebPixelUserError':
                return ShopifyErrorsWebPixelUserError::fromArray($data);
            case 'FilesUserError':
                return ShopifyFilesUserError::fromArray($data);
            case 'FulfillmentConstraintRuleCreateUserError':
                return ShopifyFulfillmentConstraintRuleCreateUserError::fromArray($data);
            case 'FulfillmentConstraintRuleDeleteUserError':
                return ShopifyFulfillmentConstraintRuleDeleteUserError::fromArray($data);
            case 'FulfillmentConstraintRuleUpdateUserError':
                return ShopifyFulfillmentConstraintRuleUpdateUserError::fromArray($data);
            case 'FulfillmentOrderCancelError':
                return ShopifyFulfillmentOrderCancelError::fromArray($data);
            case 'FulfillmentOrderHoldUserError':
                return ShopifyFulfillmentOrderHoldUserError::fromArray($data);
            case 'FulfillmentOrderLineItemsPreparedForPickupUserError':
                return ShopifyFulfillmentOrderLineItemsPreparedForPickupUserError::fromArray($data);
            case 'FulfillmentOrderMergeUserError':
                return ShopifyFulfillmentOrderMergeUserError::fromArray($data);
            case 'FulfillmentOrderMoveFulfillmentOrderMoveUserError':
                return ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserError::fromArray($data);
            case 'FulfillmentOrderReleaseHoldUserError':
                return ShopifyFulfillmentOrderReleaseHoldUserError::fromArray($data);
            case 'FulfillmentOrderReportProgressUserError':
                return ShopifyFulfillmentOrderReportProgressUserError::fromArray($data);
            case 'FulfillmentOrderRescheduleUserError':
                return ShopifyFulfillmentOrderRescheduleUserError::fromArray($data);
            case 'FulfillmentOrderSplitUserError':
                return ShopifyFulfillmentOrderSplitUserError::fromArray($data);
            case 'FulfillmentOrdersRerouteUserError':
                return ShopifyFulfillmentOrdersRerouteUserError::fromArray($data);
            case 'FulfillmentOrdersSetFulfillmentDeadlineUserError':
                return ShopifyFulfillmentOrdersSetFulfillmentDeadlineUserError::fromArray($data);
            case 'GiftCardDeactivateUserError':
                return ShopifyGiftCardDeactivateUserError::fromArray($data);
            case 'GiftCardProductSetUserError':
                return ShopifyGiftCardProductSetUserError::fromArray($data);
            case 'GiftCardSendNotificationToCustomerUserError':
                return ShopifyGiftCardSendNotificationToCustomerUserError::fromArray($data);
            case 'GiftCardSendNotificationToRecipientUserError':
                return ShopifyGiftCardSendNotificationToRecipientUserError::fromArray($data);
            case 'GiftCardTransactionUserError':
                return ShopifyGiftCardTransactionUserError::fromArray($data);
            case 'GiftCardUserError':
                return ShopifyGiftCardUserError::fromArray($data);
            case 'InventoryAdjustQuantitiesUserError':
                return ShopifyInventoryAdjustQuantitiesUserError::fromArray($data);
            case 'InventoryBulkToggleActivationUserError':
                return ShopifyInventoryBulkToggleActivationUserError::fromArray($data);
            case 'InventoryMoveQuantitiesUserError':
                return ShopifyInventoryMoveQuantitiesUserError::fromArray($data);
            case 'InventorySetOnHandQuantitiesUserError':
                return ShopifyInventorySetOnHandQuantitiesUserError::fromArray($data);
            case 'InventorySetQuantitiesUserError':
                return ShopifyInventorySetQuantitiesUserError::fromArray($data);
            case 'InventoryShipmentAddItemsUserError':
                return ShopifyInventoryShipmentAddItemsUserError::fromArray($data);
            case 'InventoryShipmentCreateInTransitUserError':
                return ShopifyInventoryShipmentCreateInTransitUserError::fromArray($data);
            case 'InventoryShipmentCreateUserError':
                return ShopifyInventoryShipmentCreateUserError::fromArray($data);
            case 'InventoryShipmentDeleteUserError':
                return ShopifyInventoryShipmentDeleteUserError::fromArray($data);
            case 'InventoryShipmentMarkInTransitUserError':
                return ShopifyInventoryShipmentMarkInTransitUserError::fromArray($data);
            case 'InventoryShipmentReceiveUserError':
                return ShopifyInventoryShipmentReceiveUserError::fromArray($data);
            case 'InventoryShipmentRemoveItemsUserError':
                return ShopifyInventoryShipmentRemoveItemsUserError::fromArray($data);
            case 'InventoryShipmentSetBarcodeUserError':
                return ShopifyInventoryShipmentSetBarcodeUserError::fromArray($data);
            case 'InventoryShipmentSetTrackingUserError':
                return ShopifyInventoryShipmentSetTrackingUserError::fromArray($data);
            case 'InventoryShipmentUpdateItemQuantitiesUserError':
                return ShopifyInventoryShipmentUpdateItemQuantitiesUserError::fromArray($data);
            case 'InventoryTransferCancelUserError':
                return ShopifyInventoryTransferCancelUserError::fromArray($data);
            case 'InventoryTransferCreateAsReadyToShipUserError':
                return ShopifyInventoryTransferCreateAsReadyToShipUserError::fromArray($data);
            case 'InventoryTransferCreateUserError':
                return ShopifyInventoryTransferCreateUserError::fromArray($data);
            case 'InventoryTransferDeleteUserError':
                return ShopifyInventoryTransferDeleteUserError::fromArray($data);
            case 'InventoryTransferDuplicateUserError':
                return ShopifyInventoryTransferDuplicateUserError::fromArray($data);
            case 'InventoryTransferEditUserError':
                return ShopifyInventoryTransferEditUserError::fromArray($data);
            case 'InventoryTransferMarkAsReadyToShipUserError':
                return ShopifyInventoryTransferMarkAsReadyToShipUserError::fromArray($data);
            case 'InventoryTransferRemoveItemsUserError':
                return ShopifyInventoryTransferRemoveItemsUserError::fromArray($data);
            case 'InventoryTransferSetItemsUserError':
                return ShopifyInventoryTransferSetItemsUserError::fromArray($data);
            case 'LocationActivateUserError':
                return ShopifyLocationActivateUserError::fromArray($data);
            case 'LocationAddUserError':
                return ShopifyLocationAddUserError::fromArray($data);
            case 'LocationDeactivateUserError':
                return ShopifyLocationDeactivateUserError::fromArray($data);
            case 'LocationDeleteUserError':
                return ShopifyLocationDeleteUserError::fromArray($data);
            case 'LocationEditUserError':
                return ShopifyLocationEditUserError::fromArray($data);
            case 'MarketCurrencySettingsUserError':
                return ShopifyMarketCurrencySettingsUserError::fromArray($data);
            case 'MarketUserError':
                return ShopifyMarketUserError::fromArray($data);
            case 'MarketingActivityUserError':
                return ShopifyMarketingActivityUserError::fromArray($data);
            case 'MediaUserError':
                return ShopifyMediaUserError::fromArray($data);
            case 'MenuCreateUserError':
                return ShopifyMenuCreateUserError::fromArray($data);
            case 'MenuDeleteUserError':
                return ShopifyMenuDeleteUserError::fromArray($data);
            case 'MenuUpdateUserError':
                return ShopifyMenuUpdateUserError::fromArray($data);
            case 'MetafieldDefinitionCreateUserError':
                return ShopifyMetafieldDefinitionCreateUserError::fromArray($data);
            case 'MetafieldDefinitionDeleteUserError':
                return ShopifyMetafieldDefinitionDeleteUserError::fromArray($data);
            case 'MetafieldDefinitionPinUserError':
                return ShopifyMetafieldDefinitionPinUserError::fromArray($data);
            case 'MetafieldDefinitionUnpinUserError':
                return ShopifyMetafieldDefinitionUnpinUserError::fromArray($data);
            case 'MetafieldDefinitionUpdateUserError':
                return ShopifyMetafieldDefinitionUpdateUserError::fromArray($data);
            case 'MetafieldsSetUserError':
                return ShopifyMetafieldsSetUserError::fromArray($data);
            case 'MetaobjectUserError':
                return ShopifyMetaobjectUserError::fromArray($data);
            case 'MobilePlatformApplicationUserError':
                return ShopifyMobilePlatformApplicationUserError::fromArray($data);
            case 'OnlineStoreThemeFilesUserErrors':
                return ShopifyOnlineStoreThemeFilesUserErrors::fromArray($data);
            case 'OrderAttributionDefinitionDeleteUserError':
                return ShopifyOrderAttributionDefinitionDeleteUserError::fromArray($data);
            case 'OrderAttributionDefinitionUpsertUserError':
                return ShopifyOrderAttributionDefinitionUpsertUserError::fromArray($data);
            case 'OrderCancelUserError':
                return ShopifyOrderCancelUserError::fromArray($data);
            case 'OrderCreateMandatePaymentUserError':
                return ShopifyOrderCreateMandatePaymentUserError::fromArray($data);
            case 'OrderCreateManualPaymentOrderCreateManualPaymentError':
                return ShopifyOrderCreateManualPaymentOrderCreateManualPaymentError::fromArray($data);
            case 'OrderCreateUserError':
                return ShopifyOrderCreateUserError::fromArray($data);
            case 'OrderCustomerRemoveUserError':
                return ShopifyOrderCustomerRemoveUserError::fromArray($data);
            case 'OrderCustomerSetUserError':
                return ShopifyOrderCustomerSetUserError::fromArray($data);
            case 'OrderDeleteUserError':
                return ShopifyOrderDeleteUserError::fromArray($data);
            case 'OrderEditAddShippingLineUserError':
                return ShopifyOrderEditAddShippingLineUserError::fromArray($data);
            case 'OrderEditRemoveDiscountUserError':
                return ShopifyOrderEditRemoveDiscountUserError::fromArray($data);
            case 'OrderEditRemoveShippingLineUserError':
                return ShopifyOrderEditRemoveShippingLineUserError::fromArray($data);
            case 'OrderEditUpdateDiscountUserError':
                return ShopifyOrderEditUpdateDiscountUserError::fromArray($data);
            case 'OrderEditUpdateShippingLineUserError':
                return ShopifyOrderEditUpdateShippingLineUserError::fromArray($data);
            case 'OrderInvoiceSendUserError':
                return ShopifyOrderInvoiceSendUserError::fromArray($data);
            case 'OrderRiskAssessmentCreateUserError':
                return ShopifyOrderRiskAssessmentCreateUserError::fromArray($data);
            case 'PageCreateUserError':
                return ShopifyPageCreateUserError::fromArray($data);
            case 'PageDeleteUserError':
                return ShopifyPageDeleteUserError::fromArray($data);
            case 'PageUpdateUserError':
                return ShopifyPageUpdateUserError::fromArray($data);
            case 'PaymentCustomizationError':
                return ShopifyPaymentCustomizationError::fromArray($data);
            case 'PaymentReminderSendUserError':
                return ShopifyPaymentReminderSendUserError::fromArray($data);
            case 'PaymentScheduleCaptureUserError':
                return ShopifyPaymentScheduleCaptureUserError::fromArray($data);
            case 'PaymentTermsCreateUserError':
                return ShopifyPaymentTermsCreateUserError::fromArray($data);
            case 'PaymentTermsDeleteUserError':
                return ShopifyPaymentTermsDeleteUserError::fromArray($data);
            case 'PaymentTermsUpdateUserError':
                return ShopifyPaymentTermsUpdateUserError::fromArray($data);
            case 'PointOfSaleDeviceAssignToCashDrawerUserError':
                return ShopifyPointOfSaleDeviceAssignToCashDrawerUserError::fromArray($data);
            case 'PointOfSaleDevicePaymentSessionCloseUserError':
                return ShopifyPointOfSaleDevicePaymentSessionCloseUserError::fromArray($data);
            case 'PointOfSaleDevicePaymentSessionCountUserError':
                return ShopifyPointOfSaleDevicePaymentSessionCountUserError::fromArray($data);
            case 'PointOfSaleDevicePaymentSessionOpenUserError':
                return ShopifyPointOfSaleDevicePaymentSessionOpenUserError::fromArray($data);
            case 'PreviewInstallUserError':
                return ShopifyPreviewInstallUserError::fromArray($data);
            case 'PriceListFixedPricesByProductBulkUpdateUserError':
                return ShopifyPriceListFixedPricesByProductBulkUpdateUserError::fromArray($data);
            case 'PriceListPriceUserError':
                return ShopifyPriceListPriceUserError::fromArray($data);
            case 'PriceListUserError':
                return ShopifyPriceListUserError::fromArray($data);
            case 'PrivacyFeaturesDisableUserError':
                return ShopifyPrivacyFeaturesDisableUserError::fromArray($data);
            case 'ProductBundleMutationUserError':
                return ShopifyProductBundleMutationUserError::fromArray($data);
            case 'ProductChangeStatusUserError':
                return ShopifyProductChangeStatusUserError::fromArray($data);
            case 'ProductFeedCreateUserError':
                return ShopifyProductFeedCreateUserError::fromArray($data);
            case 'ProductFeedDeleteUserError':
                return ShopifyProductFeedDeleteUserError::fromArray($data);
            case 'ProductFullSyncUserError':
                return ShopifyProductFullSyncUserError::fromArray($data);
            case 'ProductOptionUpdateUserError':
                return ShopifyProductOptionUpdateUserError::fromArray($data);
            case 'ProductOptionsCreateUserError':
                return ShopifyProductOptionsCreateUserError::fromArray($data);
            case 'ProductOptionsDeleteUserError':
                return ShopifyProductOptionsDeleteUserError::fromArray($data);
            case 'ProductOptionsReorderUserError':
                return ShopifyProductOptionsReorderUserError::fromArray($data);
            case 'ProductSetUserError':
                return ShopifyProductSetUserError::fromArray($data);
            case 'ProductVariantRelationshipBulkUpdateUserError':
                return ShopifyProductVariantRelationshipBulkUpdateUserError::fromArray($data);
            case 'ProductVariantsBulkCreateUserError':
                return ShopifyProductVariantsBulkCreateUserError::fromArray($data);
            case 'ProductVariantsBulkDeleteUserError':
                return ShopifyProductVariantsBulkDeleteUserError::fromArray($data);
            case 'ProductVariantsBulkReorderUserError':
                return ShopifyProductVariantsBulkReorderUserError::fromArray($data);
            case 'ProductVariantsBulkUpdateUserError':
                return ShopifyProductVariantsBulkUpdateUserError::fromArray($data);
            case 'PubSubWebhookSubscriptionCreateUserError':
                return ShopifyPubSubWebhookSubscriptionCreateUserError::fromArray($data);
            case 'PubSubWebhookSubscriptionUpdateUserError':
                return ShopifyPubSubWebhookSubscriptionUpdateUserError::fromArray($data);
            case 'PublicationUserError':
                return ShopifyPublicationUserError::fromArray($data);
            case 'QuantityPricingByVariantUserError':
                return ShopifyQuantityPricingByVariantUserError::fromArray($data);
            case 'QuantityRuleUserError':
                return ShopifyQuantityRuleUserError::fromArray($data);
            case 'ReturnUserError':
                return ShopifyReturnUserError::fromArray($data);
            case 'SellingPlanGroupUserError':
                return ShopifySellingPlanGroupUserError::fromArray($data);
            case 'ShippingLabelPurchaseError':
                return ShopifyShippingLabelPurchaseError::fromArray($data);
            case 'ShippingLabelPurchaseUserError':
                return ShopifyShippingLabelPurchaseUserError::fromArray($data);
            case 'ShopPolicyUserError':
                return ShopifyShopPolicyUserError::fromArray($data);
            case 'ShopResourceFeedbackCreateUserError':
                return ShopifyShopResourceFeedbackCreateUserError::fromArray($data);
            case 'ShopifyPaymentsPayoutAlternateCurrencyCreateUserError':
                return ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserError::fromArray($data);
            case 'StandardMetafieldDefinitionEnableUserError':
                return ShopifyStandardMetafieldDefinitionEnableUserError::fromArray($data);
            case 'StoreCreditAccountCreditUserError':
                return ShopifyStoreCreditAccountCreditUserError::fromArray($data);
            case 'StoreCreditAccountDebitUserError':
                return ShopifyStoreCreditAccountDebitUserError::fromArray($data);
            case 'SubscriptionBillingCycleBulkUserError':
                return ShopifySubscriptionBillingCycleBulkUserError::fromArray($data);
            case 'SubscriptionBillingCycleSkipUserError':
                return ShopifySubscriptionBillingCycleSkipUserError::fromArray($data);
            case 'SubscriptionBillingCycleUnskipUserError':
                return ShopifySubscriptionBillingCycleUnskipUserError::fromArray($data);
            case 'SubscriptionBillingCycleUserError':
                return ShopifySubscriptionBillingCycleUserError::fromArray($data);
            case 'SubscriptionContractStatusUpdateUserError':
                return ShopifySubscriptionContractStatusUpdateUserError::fromArray($data);
            case 'SubscriptionContractUserError':
                return ShopifySubscriptionContractUserError::fromArray($data);
            case 'SubscriptionDraftUserError':
                return ShopifySubscriptionDraftUserError::fromArray($data);
            case 'TaxAppConfigureUserError':
                return ShopifyTaxAppConfigureUserError::fromArray($data);
            case 'TaxSummaryCreateUserError':
                return ShopifyTaxSummaryCreateUserError::fromArray($data);
            case 'ThemeCreateUserError':
                return ShopifyThemeCreateUserError::fromArray($data);
            case 'ThemeDeleteUserError':
                return ShopifyThemeDeleteUserError::fromArray($data);
            case 'ThemeDuplicateUserError':
                return ShopifyThemeDuplicateUserError::fromArray($data);
            case 'ThemePublishUserError':
                return ShopifyThemePublishUserError::fromArray($data);
            case 'ThemeUpdateUserError':
                return ShopifyThemeUpdateUserError::fromArray($data);
            case 'TransactionVoidUserError':
                return ShopifyTransactionVoidUserError::fromArray($data);
            case 'TranslationUserError':
                return ShopifyTranslationUserError::fromArray($data);
            case 'UrlRedirectBulkDeleteByIdsUserError':
                return ShopifyUrlRedirectBulkDeleteByIdsUserError::fromArray($data);
            case 'UrlRedirectBulkDeleteBySavedSearchUserError':
                return ShopifyUrlRedirectBulkDeleteBySavedSearchUserError::fromArray($data);
            case 'UrlRedirectBulkDeleteBySearchUserError':
                return ShopifyUrlRedirectBulkDeleteBySearchUserError::fromArray($data);
            case 'UrlRedirectImportUserError':
                return ShopifyUrlRedirectImportUserError::fromArray($data);
            case 'UrlRedirectUserError':
                return ShopifyUrlRedirectUserError::fromArray($data);
            case 'UserError':
                return ShopifyUserError::fromArray($data);
            case 'ValidationUserError':
                return ShopifyValidationUserError::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DisplayableError: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDisplayableError $object
     * @return array
     */
    public static function toArray(ShopifyDisplayableError $object): array
    {
        if ($object instanceof ShopifyAbandonmentEmailStateUpdateUserError) {
            return ['__typename' => 'AbandonmentEmailStateUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyAbandonmentUpdateActivitiesDeliveryStatusesUserError) {
            return ['__typename' => 'AbandonmentUpdateActivitiesDeliveryStatusesUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppRevokeAccessScopesAppRevokeScopeError) {
            return ['__typename' => 'AppRevokeAccessScopesAppRevokeScopeError'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppSubscriptionTrialExtendUserError) {
            return ['__typename' => 'AppSubscriptionTrialExtendUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppUninstallAppUninstallError) {
            return ['__typename' => 'AppUninstallAppUninstallError'] + $object->asArray();
        }
        if ($object instanceof ShopifyArticleCreateUserError) {
            return ['__typename' => 'ArticleCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyArticleDeleteUserError) {
            return ['__typename' => 'ArticleDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyArticleUpdateUserError) {
            return ['__typename' => 'ArticleUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyBillingAttemptUserError) {
            return ['__typename' => 'BillingAttemptUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyBlogCreateUserError) {
            return ['__typename' => 'BlogCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyBlogDeleteUserError) {
            return ['__typename' => 'BlogDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyBlogUpdateUserError) {
            return ['__typename' => 'BlogUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyBulkMutationUserError) {
            return ['__typename' => 'BulkMutationUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyBulkOperationUserError) {
            return ['__typename' => 'BulkOperationUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyBulkProductResourceFeedbackCreateUserError) {
            return ['__typename' => 'BulkProductResourceFeedbackCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyBusinessCustomerUserError) {
            return ['__typename' => 'BusinessCustomerUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCarrierServiceCreateUserError) {
            return ['__typename' => 'CarrierServiceCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCarrierServiceDeleteUserError) {
            return ['__typename' => 'CarrierServiceDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCarrierServiceUpdateUserError) {
            return ['__typename' => 'CarrierServiceUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCartTransformCreateUserError) {
            return ['__typename' => 'CartTransformCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCartTransformDeleteUserError) {
            return ['__typename' => 'CartTransformDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashDrawerCreateUserError) {
            return ['__typename' => 'CashDrawerCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashDrawerFindOrCreateUserError) {
            return ['__typename' => 'CashDrawerFindOrCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashDrawerUpdateUserError) {
            return ['__typename' => 'CashDrawerUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashManagementReasonCodeCreateUserError) {
            return ['__typename' => 'CashManagementReasonCodeCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashManagementReasonCodeDeleteUserError) {
            return ['__typename' => 'CashManagementReasonCodeDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCatalogUserError) {
            return ['__typename' => 'CatalogUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyChannelCreateUserError) {
            return ['__typename' => 'ChannelCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyChannelDeleteUserError) {
            return ['__typename' => 'ChannelDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyChannelFullSyncUserError) {
            return ['__typename' => 'ChannelFullSyncUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyChannelUpdateUserError) {
            return ['__typename' => 'ChannelUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCheckoutAndAccountsConfigurationUserError) {
            return ['__typename' => 'CheckoutAndAccountsConfigurationUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCheckoutBrandingUpsertUserError) {
            return ['__typename' => 'CheckoutBrandingUpsertUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionAddProductsV2UserError) {
            return ['__typename' => 'CollectionAddProductsV2UserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionDuplicateUserError) {
            return ['__typename' => 'CollectionDuplicateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionReorderProductsUserError) {
            return ['__typename' => 'CollectionReorderProductsUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCombinedListingUpdateUserError) {
            return ['__typename' => 'CombinedListingUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCommentApproveUserError) {
            return ['__typename' => 'CommentApproveUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCommentDeleteUserError) {
            return ['__typename' => 'CommentDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCommentNotSpamUserError) {
            return ['__typename' => 'CommentNotSpamUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCommentSpamUserError) {
            return ['__typename' => 'CommentSpamUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyConsentPolicyError) {
            return ['__typename' => 'ConsentPolicyError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerCancelDataErasureUserError) {
            return ['__typename' => 'CustomerCancelDataErasureUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerEmailMarketingConsentUpdateUserError) {
            return ['__typename' => 'CustomerEmailMarketingConsentUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerMarketingConsentError) {
            return ['__typename' => 'CustomerMarketingConsentError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerMergeUserError) {
            return ['__typename' => 'CustomerMergeUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerPaymentMethodCreateFromDuplicationDataUserError) {
            return ['__typename' => 'CustomerPaymentMethodCreateFromDuplicationDataUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerPaymentMethodGetDuplicationDataUserError) {
            return ['__typename' => 'CustomerPaymentMethodGetDuplicationDataUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerPaymentMethodGetUpdateUrlUserError) {
            return ['__typename' => 'CustomerPaymentMethodGetUpdateUrlUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerPaymentMethodRemoteUserError) {
            return ['__typename' => 'CustomerPaymentMethodRemoteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerPaymentMethodUserError) {
            return ['__typename' => 'CustomerPaymentMethodUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerRequestDataErasureUserError) {
            return ['__typename' => 'CustomerRequestDataErasureUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerSegmentMembersQueryUserError) {
            return ['__typename' => 'CustomerSegmentMembersQueryUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerSendAccountInviteEmailUserError) {
            return ['__typename' => 'CustomerSendAccountInviteEmailUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerSetUserError) {
            return ['__typename' => 'CustomerSetUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerSmsMarketingConsentError) {
            return ['__typename' => 'CustomerSmsMarketingConsentError'] + $object->asArray();
        }
        if ($object instanceof ShopifyDataSaleOptOutUserError) {
            return ['__typename' => 'DataSaleOptOutUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyDelegateAccessTokenCreateUserError) {
            return ['__typename' => 'DelegateAccessTokenCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyDelegateAccessTokenDestroyUserError) {
            return ['__typename' => 'DelegateAccessTokenDestroyUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryCustomizationError) {
            return ['__typename' => 'DeliveryCustomizationError'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryLocationLocalPickupSettingsError) {
            return ['__typename' => 'DeliveryLocationLocalPickupSettingsError'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryPromiseProviderUpsertUserError) {
            return ['__typename' => 'DeliveryPromiseProviderUpsertUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountUserError) {
            return ['__typename' => 'DiscountUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyDisputeEvidenceUpdateUserError) {
            return ['__typename' => 'DisputeEvidenceUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyErrorsServerPixelUserError) {
            return ['__typename' => 'ErrorsServerPixelUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyErrorsWebPixelUserError) {
            return ['__typename' => 'ErrorsWebPixelUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFilesUserError) {
            return ['__typename' => 'FilesUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentConstraintRuleCreateUserError) {
            return ['__typename' => 'FulfillmentConstraintRuleCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentConstraintRuleDeleteUserError) {
            return ['__typename' => 'FulfillmentConstraintRuleDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentConstraintRuleUpdateUserError) {
            return ['__typename' => 'FulfillmentConstraintRuleUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderCancelError) {
            return ['__typename' => 'FulfillmentOrderCancelError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderHoldUserError) {
            return ['__typename' => 'FulfillmentOrderHoldUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderLineItemsPreparedForPickupUserError) {
            return ['__typename' => 'FulfillmentOrderLineItemsPreparedForPickupUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderMergeUserError) {
            return ['__typename' => 'FulfillmentOrderMergeUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserError) {
            return ['__typename' => 'FulfillmentOrderMoveFulfillmentOrderMoveUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderReleaseHoldUserError) {
            return ['__typename' => 'FulfillmentOrderReleaseHoldUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderReportProgressUserError) {
            return ['__typename' => 'FulfillmentOrderReportProgressUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderRescheduleUserError) {
            return ['__typename' => 'FulfillmentOrderRescheduleUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrderSplitUserError) {
            return ['__typename' => 'FulfillmentOrderSplitUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrdersRerouteUserError) {
            return ['__typename' => 'FulfillmentOrdersRerouteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillmentOrdersSetFulfillmentDeadlineUserError) {
            return ['__typename' => 'FulfillmentOrdersSetFulfillmentDeadlineUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardDeactivateUserError) {
            return ['__typename' => 'GiftCardDeactivateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardProductSetUserError) {
            return ['__typename' => 'GiftCardProductSetUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardSendNotificationToCustomerUserError) {
            return ['__typename' => 'GiftCardSendNotificationToCustomerUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardSendNotificationToRecipientUserError) {
            return ['__typename' => 'GiftCardSendNotificationToRecipientUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardTransactionUserError) {
            return ['__typename' => 'GiftCardTransactionUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardUserError) {
            return ['__typename' => 'GiftCardUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryAdjustQuantitiesUserError) {
            return ['__typename' => 'InventoryAdjustQuantitiesUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryBulkToggleActivationUserError) {
            return ['__typename' => 'InventoryBulkToggleActivationUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryMoveQuantitiesUserError) {
            return ['__typename' => 'InventoryMoveQuantitiesUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventorySetOnHandQuantitiesUserError) {
            return ['__typename' => 'InventorySetOnHandQuantitiesUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventorySetQuantitiesUserError) {
            return ['__typename' => 'InventorySetQuantitiesUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentAddItemsUserError) {
            return ['__typename' => 'InventoryShipmentAddItemsUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentCreateInTransitUserError) {
            return ['__typename' => 'InventoryShipmentCreateInTransitUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentCreateUserError) {
            return ['__typename' => 'InventoryShipmentCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentDeleteUserError) {
            return ['__typename' => 'InventoryShipmentDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentMarkInTransitUserError) {
            return ['__typename' => 'InventoryShipmentMarkInTransitUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentReceiveUserError) {
            return ['__typename' => 'InventoryShipmentReceiveUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentRemoveItemsUserError) {
            return ['__typename' => 'InventoryShipmentRemoveItemsUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentSetBarcodeUserError) {
            return ['__typename' => 'InventoryShipmentSetBarcodeUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentSetTrackingUserError) {
            return ['__typename' => 'InventoryShipmentSetTrackingUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryShipmentUpdateItemQuantitiesUserError) {
            return ['__typename' => 'InventoryShipmentUpdateItemQuantitiesUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferCancelUserError) {
            return ['__typename' => 'InventoryTransferCancelUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferCreateAsReadyToShipUserError) {
            return ['__typename' => 'InventoryTransferCreateAsReadyToShipUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferCreateUserError) {
            return ['__typename' => 'InventoryTransferCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferDeleteUserError) {
            return ['__typename' => 'InventoryTransferDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferDuplicateUserError) {
            return ['__typename' => 'InventoryTransferDuplicateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferEditUserError) {
            return ['__typename' => 'InventoryTransferEditUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferMarkAsReadyToShipUserError) {
            return ['__typename' => 'InventoryTransferMarkAsReadyToShipUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferRemoveItemsUserError) {
            return ['__typename' => 'InventoryTransferRemoveItemsUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransferSetItemsUserError) {
            return ['__typename' => 'InventoryTransferSetItemsUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyLocationActivateUserError) {
            return ['__typename' => 'LocationActivateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyLocationAddUserError) {
            return ['__typename' => 'LocationAddUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyLocationDeactivateUserError) {
            return ['__typename' => 'LocationDeactivateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyLocationDeleteUserError) {
            return ['__typename' => 'LocationDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyLocationEditUserError) {
            return ['__typename' => 'LocationEditUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketCurrencySettingsUserError) {
            return ['__typename' => 'MarketCurrencySettingsUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketUserError) {
            return ['__typename' => 'MarketUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketingActivityUserError) {
            return ['__typename' => 'MarketingActivityUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMediaUserError) {
            return ['__typename' => 'MediaUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMenuCreateUserError) {
            return ['__typename' => 'MenuCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMenuDeleteUserError) {
            return ['__typename' => 'MenuDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMenuUpdateUserError) {
            return ['__typename' => 'MenuUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafieldDefinitionCreateUserError) {
            return ['__typename' => 'MetafieldDefinitionCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafieldDefinitionDeleteUserError) {
            return ['__typename' => 'MetafieldDefinitionDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafieldDefinitionPinUserError) {
            return ['__typename' => 'MetafieldDefinitionPinUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafieldDefinitionUnpinUserError) {
            return ['__typename' => 'MetafieldDefinitionUnpinUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafieldDefinitionUpdateUserError) {
            return ['__typename' => 'MetafieldDefinitionUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafieldsSetUserError) {
            return ['__typename' => 'MetafieldsSetUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetaobjectUserError) {
            return ['__typename' => 'MetaobjectUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyMobilePlatformApplicationUserError) {
            return ['__typename' => 'MobilePlatformApplicationUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOnlineStoreThemeFilesUserErrors) {
            return ['__typename' => 'OnlineStoreThemeFilesUserErrors'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderAttributionDefinitionDeleteUserError) {
            return ['__typename' => 'OrderAttributionDefinitionDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderAttributionDefinitionUpsertUserError) {
            return ['__typename' => 'OrderAttributionDefinitionUpsertUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderCancelUserError) {
            return ['__typename' => 'OrderCancelUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderCreateMandatePaymentUserError) {
            return ['__typename' => 'OrderCreateMandatePaymentUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderCreateManualPaymentOrderCreateManualPaymentError) {
            return ['__typename' => 'OrderCreateManualPaymentOrderCreateManualPaymentError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderCreateUserError) {
            return ['__typename' => 'OrderCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderCustomerRemoveUserError) {
            return ['__typename' => 'OrderCustomerRemoveUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderCustomerSetUserError) {
            return ['__typename' => 'OrderCustomerSetUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderDeleteUserError) {
            return ['__typename' => 'OrderDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderEditAddShippingLineUserError) {
            return ['__typename' => 'OrderEditAddShippingLineUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderEditRemoveDiscountUserError) {
            return ['__typename' => 'OrderEditRemoveDiscountUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderEditRemoveShippingLineUserError) {
            return ['__typename' => 'OrderEditRemoveShippingLineUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderEditUpdateDiscountUserError) {
            return ['__typename' => 'OrderEditUpdateDiscountUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderEditUpdateShippingLineUserError) {
            return ['__typename' => 'OrderEditUpdateShippingLineUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderInvoiceSendUserError) {
            return ['__typename' => 'OrderInvoiceSendUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderRiskAssessmentCreateUserError) {
            return ['__typename' => 'OrderRiskAssessmentCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPageCreateUserError) {
            return ['__typename' => 'PageCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPageDeleteUserError) {
            return ['__typename' => 'PageDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPageUpdateUserError) {
            return ['__typename' => 'PageUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentCustomizationError) {
            return ['__typename' => 'PaymentCustomizationError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentReminderSendUserError) {
            return ['__typename' => 'PaymentReminderSendUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentScheduleCaptureUserError) {
            return ['__typename' => 'PaymentScheduleCaptureUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentTermsCreateUserError) {
            return ['__typename' => 'PaymentTermsCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentTermsDeleteUserError) {
            return ['__typename' => 'PaymentTermsDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentTermsUpdateUserError) {
            return ['__typename' => 'PaymentTermsUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPointOfSaleDeviceAssignToCashDrawerUserError) {
            return ['__typename' => 'PointOfSaleDeviceAssignToCashDrawerUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPointOfSaleDevicePaymentSessionCloseUserError) {
            return ['__typename' => 'PointOfSaleDevicePaymentSessionCloseUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPointOfSaleDevicePaymentSessionCountUserError) {
            return ['__typename' => 'PointOfSaleDevicePaymentSessionCountUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPointOfSaleDevicePaymentSessionOpenUserError) {
            return ['__typename' => 'PointOfSaleDevicePaymentSessionOpenUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPreviewInstallUserError) {
            return ['__typename' => 'PreviewInstallUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPriceListFixedPricesByProductBulkUpdateUserError) {
            return ['__typename' => 'PriceListFixedPricesByProductBulkUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPriceListPriceUserError) {
            return ['__typename' => 'PriceListPriceUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPriceListUserError) {
            return ['__typename' => 'PriceListUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPrivacyFeaturesDisableUserError) {
            return ['__typename' => 'PrivacyFeaturesDisableUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductBundleMutationUserError) {
            return ['__typename' => 'ProductBundleMutationUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductChangeStatusUserError) {
            return ['__typename' => 'ProductChangeStatusUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductFeedCreateUserError) {
            return ['__typename' => 'ProductFeedCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductFeedDeleteUserError) {
            return ['__typename' => 'ProductFeedDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductFullSyncUserError) {
            return ['__typename' => 'ProductFullSyncUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductOptionUpdateUserError) {
            return ['__typename' => 'ProductOptionUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductOptionsCreateUserError) {
            return ['__typename' => 'ProductOptionsCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductOptionsDeleteUserError) {
            return ['__typename' => 'ProductOptionsDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductOptionsReorderUserError) {
            return ['__typename' => 'ProductOptionsReorderUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductSetUserError) {
            return ['__typename' => 'ProductSetUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariantRelationshipBulkUpdateUserError) {
            return ['__typename' => 'ProductVariantRelationshipBulkUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariantsBulkCreateUserError) {
            return ['__typename' => 'ProductVariantsBulkCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariantsBulkDeleteUserError) {
            return ['__typename' => 'ProductVariantsBulkDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariantsBulkReorderUserError) {
            return ['__typename' => 'ProductVariantsBulkReorderUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariantsBulkUpdateUserError) {
            return ['__typename' => 'ProductVariantsBulkUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPubSubWebhookSubscriptionCreateUserError) {
            return ['__typename' => 'PubSubWebhookSubscriptionCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPubSubWebhookSubscriptionUpdateUserError) {
            return ['__typename' => 'PubSubWebhookSubscriptionUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyPublicationUserError) {
            return ['__typename' => 'PublicationUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyQuantityPricingByVariantUserError) {
            return ['__typename' => 'QuantityPricingByVariantUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyQuantityRuleUserError) {
            return ['__typename' => 'QuantityRuleUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyReturnUserError) {
            return ['__typename' => 'ReturnUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlanGroupUserError) {
            return ['__typename' => 'SellingPlanGroupUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyShippingLabelPurchaseError) {
            return ['__typename' => 'ShippingLabelPurchaseError'] + $object->asArray();
        }
        if ($object instanceof ShopifyShippingLabelPurchaseUserError) {
            return ['__typename' => 'ShippingLabelPurchaseUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopPolicyUserError) {
            return ['__typename' => 'ShopPolicyUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopResourceFeedbackCreateUserError) {
            return ['__typename' => 'ShopResourceFeedbackCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserError) {
            return ['__typename' => 'ShopifyPaymentsPayoutAlternateCurrencyCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyStandardMetafieldDefinitionEnableUserError) {
            return ['__typename' => 'StandardMetafieldDefinitionEnableUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyStoreCreditAccountCreditUserError) {
            return ['__typename' => 'StoreCreditAccountCreditUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyStoreCreditAccountDebitUserError) {
            return ['__typename' => 'StoreCreditAccountDebitUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingCycleBulkUserError) {
            return ['__typename' => 'SubscriptionBillingCycleBulkUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingCycleSkipUserError) {
            return ['__typename' => 'SubscriptionBillingCycleSkipUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingCycleUnskipUserError) {
            return ['__typename' => 'SubscriptionBillingCycleUnskipUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingCycleUserError) {
            return ['__typename' => 'SubscriptionBillingCycleUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionContractStatusUpdateUserError) {
            return ['__typename' => 'SubscriptionContractStatusUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionContractUserError) {
            return ['__typename' => 'SubscriptionContractUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionDraftUserError) {
            return ['__typename' => 'SubscriptionDraftUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxAppConfigureUserError) {
            return ['__typename' => 'TaxAppConfigureUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxSummaryCreateUserError) {
            return ['__typename' => 'TaxSummaryCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyThemeCreateUserError) {
            return ['__typename' => 'ThemeCreateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyThemeDeleteUserError) {
            return ['__typename' => 'ThemeDeleteUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyThemeDuplicateUserError) {
            return ['__typename' => 'ThemeDuplicateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyThemePublishUserError) {
            return ['__typename' => 'ThemePublishUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyThemeUpdateUserError) {
            return ['__typename' => 'ThemeUpdateUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyTransactionVoidUserError) {
            return ['__typename' => 'TransactionVoidUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyTranslationUserError) {
            return ['__typename' => 'TranslationUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyUrlRedirectBulkDeleteByIdsUserError) {
            return ['__typename' => 'UrlRedirectBulkDeleteByIdsUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyUrlRedirectBulkDeleteBySavedSearchUserError) {
            return ['__typename' => 'UrlRedirectBulkDeleteBySavedSearchUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyUrlRedirectBulkDeleteBySearchUserError) {
            return ['__typename' => 'UrlRedirectBulkDeleteBySearchUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyUrlRedirectImportUserError) {
            return ['__typename' => 'UrlRedirectImportUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyUrlRedirectUserError) {
            return ['__typename' => 'UrlRedirectUserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyUserError) {
            return ['__typename' => 'UserError'] + $object->asArray();
        }
        if ($object instanceof ShopifyValidationUserError) {
            return ['__typename' => 'ValidationUserError'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DisplayableError');
    }
}
