<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents an error in the input of a mutation.
 */
class ShopifyDisplayableErrorInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "DisplayableError";

    /**
     * The path to the input field that caused the error.
     */
    public function selectField_(): static
    {
        $this->selectField("field");

        return $this;
    }

    /**
     * The error message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    public function onAbandonmentEmailStateUpdateUserError(): ShopifyAbandonmentEmailStateUpdateUserErrorQueryObject
    {
        $object = new ShopifyAbandonmentEmailStateUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAbandonmentUpdateActivitiesDeliveryStatusesUserError(): ShopifyAbandonmentUpdateActivitiesDeliveryStatusesUserErrorQueryObject
    {
        $object = new ShopifyAbandonmentUpdateActivitiesDeliveryStatusesUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAnalyticsAnnotationCreateUserError(): ShopifyAnalyticsAnnotationCreateUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAnalyticsAnnotationDeleteUserError(): ShopifyAnalyticsAnnotationDeleteUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAnalyticsAnnotationUpdateUserError(): ShopifyAnalyticsAnnotationUpdateUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAnalyticsTargetCreateUserError(): ShopifyAnalyticsTargetCreateUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsTargetCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAnalyticsTargetUpdateUserError(): ShopifyAnalyticsTargetUpdateUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsTargetUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAnalyticsTargetsDeleteUserError(): ShopifyAnalyticsTargetsDeleteUserErrorQueryObject
    {
        $object = new ShopifyAnalyticsTargetsDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppRevokeAccessScopesAppRevokeScopeError(): ShopifyAppRevokeAccessScopesAppRevokeScopeErrorQueryObject
    {
        $object = new ShopifyAppRevokeAccessScopesAppRevokeScopeErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppSubscriptionTrialExtendUserError(): ShopifyAppSubscriptionTrialExtendUserErrorQueryObject
    {
        $object = new ShopifyAppSubscriptionTrialExtendUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppUninstallAppUninstallError(): ShopifyAppUninstallAppUninstallErrorQueryObject
    {
        $object = new ShopifyAppUninstallAppUninstallErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onArticleCreateUserError(): ShopifyArticleCreateUserErrorQueryObject
    {
        $object = new ShopifyArticleCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onArticleDeleteUserError(): ShopifyArticleDeleteUserErrorQueryObject
    {
        $object = new ShopifyArticleDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onArticleUpdateUserError(): ShopifyArticleUpdateUserErrorQueryObject
    {
        $object = new ShopifyArticleUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBillingAttemptUserError(): ShopifyBillingAttemptUserErrorQueryObject
    {
        $object = new ShopifyBillingAttemptUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBlogCreateUserError(): ShopifyBlogCreateUserErrorQueryObject
    {
        $object = new ShopifyBlogCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBlogDeleteUserError(): ShopifyBlogDeleteUserErrorQueryObject
    {
        $object = new ShopifyBlogDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBlogUpdateUserError(): ShopifyBlogUpdateUserErrorQueryObject
    {
        $object = new ShopifyBlogUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBulkMutationUserError(): ShopifyBulkMutationUserErrorQueryObject
    {
        $object = new ShopifyBulkMutationUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBulkOperationUserError(): ShopifyBulkOperationUserErrorQueryObject
    {
        $object = new ShopifyBulkOperationUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBulkProductResourceFeedbackCreateUserError(): ShopifyBulkProductResourceFeedbackCreateUserErrorQueryObject
    {
        $object = new ShopifyBulkProductResourceFeedbackCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBusinessCustomerUserError(): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCarrierServiceCreateUserError(): ShopifyCarrierServiceCreateUserErrorQueryObject
    {
        $object = new ShopifyCarrierServiceCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCarrierServiceDeleteUserError(): ShopifyCarrierServiceDeleteUserErrorQueryObject
    {
        $object = new ShopifyCarrierServiceDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCarrierServiceUpdateUserError(): ShopifyCarrierServiceUpdateUserErrorQueryObject
    {
        $object = new ShopifyCarrierServiceUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCartTransformCreateUserError(): ShopifyCartTransformCreateUserErrorQueryObject
    {
        $object = new ShopifyCartTransformCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCartTransformDeleteUserError(): ShopifyCartTransformDeleteUserErrorQueryObject
    {
        $object = new ShopifyCartTransformDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashDrawerCreateUserError(): ShopifyCashDrawerCreateUserErrorQueryObject
    {
        $object = new ShopifyCashDrawerCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashDrawerFindOrCreateUserError(): ShopifyCashDrawerFindOrCreateUserErrorQueryObject
    {
        $object = new ShopifyCashDrawerFindOrCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashDrawerUpdateUserError(): ShopifyCashDrawerUpdateUserErrorQueryObject
    {
        $object = new ShopifyCashDrawerUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashManagementReasonCodeCreateUserError(): ShopifyCashManagementReasonCodeCreateUserErrorQueryObject
    {
        $object = new ShopifyCashManagementReasonCodeCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashManagementReasonCodeDeleteUserError(): ShopifyCashManagementReasonCodeDeleteUserErrorQueryObject
    {
        $object = new ShopifyCashManagementReasonCodeDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCatalogUserError(): ShopifyCatalogUserErrorQueryObject
    {
        $object = new ShopifyCatalogUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onChannelCreateUserError(): ShopifyChannelCreateUserErrorQueryObject
    {
        $object = new ShopifyChannelCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onChannelDeleteUserError(): ShopifyChannelDeleteUserErrorQueryObject
    {
        $object = new ShopifyChannelDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onChannelFullSyncUserError(): ShopifyChannelFullSyncUserErrorQueryObject
    {
        $object = new ShopifyChannelFullSyncUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onChannelUpdateUserError(): ShopifyChannelUpdateUserErrorQueryObject
    {
        $object = new ShopifyChannelUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCheckoutAndAccountsConfigurationUserError(): ShopifyCheckoutAndAccountsConfigurationUserErrorQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCheckoutBrandingUpsertUserError(): ShopifyCheckoutBrandingUpsertUserErrorQueryObject
    {
        $object = new ShopifyCheckoutBrandingUpsertUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionAddProductsV2UserError(): ShopifyCollectionAddProductsV2UserErrorQueryObject
    {
        $object = new ShopifyCollectionAddProductsV2UserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionDuplicateUserError(): ShopifyCollectionDuplicateUserErrorQueryObject
    {
        $object = new ShopifyCollectionDuplicateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionReorderProductsUserError(): ShopifyCollectionReorderProductsUserErrorQueryObject
    {
        $object = new ShopifyCollectionReorderProductsUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCombinedListingUpdateUserError(): ShopifyCombinedListingUpdateUserErrorQueryObject
    {
        $object = new ShopifyCombinedListingUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCommentApproveUserError(): ShopifyCommentApproveUserErrorQueryObject
    {
        $object = new ShopifyCommentApproveUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCommentDeleteUserError(): ShopifyCommentDeleteUserErrorQueryObject
    {
        $object = new ShopifyCommentDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCommentNotSpamUserError(): ShopifyCommentNotSpamUserErrorQueryObject
    {
        $object = new ShopifyCommentNotSpamUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCommentSpamUserError(): ShopifyCommentSpamUserErrorQueryObject
    {
        $object = new ShopifyCommentSpamUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onConsentPolicyError(): ShopifyConsentPolicyErrorQueryObject
    {
        $object = new ShopifyConsentPolicyErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerCancelDataErasureUserError(): ShopifyCustomerCancelDataErasureUserErrorQueryObject
    {
        $object = new ShopifyCustomerCancelDataErasureUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerEmailMarketingConsentUpdateUserError(): ShopifyCustomerEmailMarketingConsentUpdateUserErrorQueryObject
    {
        $object = new ShopifyCustomerEmailMarketingConsentUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerMarketingConsentError(): ShopifyCustomerMarketingConsentErrorQueryObject
    {
        $object = new ShopifyCustomerMarketingConsentErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerMergeUserError(): ShopifyCustomerMergeUserErrorQueryObject
    {
        $object = new ShopifyCustomerMergeUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerPaymentMethodCreateFromDuplicationDataUserError(): ShopifyCustomerPaymentMethodCreateFromDuplicationDataUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodCreateFromDuplicationDataUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerPaymentMethodGetDuplicationDataUserError(): ShopifyCustomerPaymentMethodGetDuplicationDataUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodGetDuplicationDataUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerPaymentMethodGetUpdateUrlUserError(): ShopifyCustomerPaymentMethodGetUpdateUrlUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodGetUpdateUrlUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerPaymentMethodRemoteUserError(): ShopifyCustomerPaymentMethodRemoteUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodRemoteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerPaymentMethodUserError(): ShopifyCustomerPaymentMethodUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerRequestDataErasureUserError(): ShopifyCustomerRequestDataErasureUserErrorQueryObject
    {
        $object = new ShopifyCustomerRequestDataErasureUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerSegmentMembersQueryUserError(): ShopifyCustomerSegmentMembersQueryUserErrorQueryObject
    {
        $object = new ShopifyCustomerSegmentMembersQueryUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerSendAccountInviteEmailUserError(): ShopifyCustomerSendAccountInviteEmailUserErrorQueryObject
    {
        $object = new ShopifyCustomerSendAccountInviteEmailUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerSetUserError(): ShopifyCustomerSetUserErrorQueryObject
    {
        $object = new ShopifyCustomerSetUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerSmsMarketingConsentError(): ShopifyCustomerSmsMarketingConsentErrorQueryObject
    {
        $object = new ShopifyCustomerSmsMarketingConsentErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDataSaleOptOutUserError(): ShopifyDataSaleOptOutUserErrorQueryObject
    {
        $object = new ShopifyDataSaleOptOutUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDelegateAccessTokenCreateUserError(): ShopifyDelegateAccessTokenCreateUserErrorQueryObject
    {
        $object = new ShopifyDelegateAccessTokenCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDelegateAccessTokenDestroyUserError(): ShopifyDelegateAccessTokenDestroyUserErrorQueryObject
    {
        $object = new ShopifyDelegateAccessTokenDestroyUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryCustomizationError(): ShopifyDeliveryCustomizationErrorQueryObject
    {
        $object = new ShopifyDeliveryCustomizationErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryLocationLocalPickupSettingsError(): ShopifyDeliveryLocationLocalPickupSettingsErrorQueryObject
    {
        $object = new ShopifyDeliveryLocationLocalPickupSettingsErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryPromiseProviderUpsertUserError(): ShopifyDeliveryPromiseProviderUpsertUserErrorQueryObject
    {
        $object = new ShopifyDeliveryPromiseProviderUpsertUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountUserError(): ShopifyDiscountUserErrorQueryObject
    {
        $object = new ShopifyDiscountUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDisputeEvidenceUpdateUserError(): ShopifyDisputeEvidenceUpdateUserErrorQueryObject
    {
        $object = new ShopifyDisputeEvidenceUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onErrorsServerPixelUserError(): ShopifyErrorsServerPixelUserErrorQueryObject
    {
        $object = new ShopifyErrorsServerPixelUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onErrorsWebPixelUserError(): ShopifyErrorsWebPixelUserErrorQueryObject
    {
        $object = new ShopifyErrorsWebPixelUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFilesUserError(): ShopifyFilesUserErrorQueryObject
    {
        $object = new ShopifyFilesUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentConstraintRuleCreateUserError(): ShopifyFulfillmentConstraintRuleCreateUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentConstraintRuleDeleteUserError(): ShopifyFulfillmentConstraintRuleDeleteUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentConstraintRuleUpdateUserError(): ShopifyFulfillmentConstraintRuleUpdateUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderCancelError(): ShopifyFulfillmentOrderCancelErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderCancelErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderHoldUserError(): ShopifyFulfillmentOrderHoldUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderHoldUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderLineItemsPreparedForPickupUserError(): ShopifyFulfillmentOrderLineItemsPreparedForPickupUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderLineItemsPreparedForPickupUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderMergeUserError(): ShopifyFulfillmentOrderMergeUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderMergeUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderMoveFulfillmentOrderMoveUserError(): ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderReleaseHoldUserError(): ShopifyFulfillmentOrderReleaseHoldUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderReleaseHoldUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderReportProgressUserError(): ShopifyFulfillmentOrderReportProgressUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderReportProgressUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderRescheduleUserError(): ShopifyFulfillmentOrderRescheduleUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderRescheduleUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrderSplitUserError(): ShopifyFulfillmentOrderSplitUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderSplitUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrdersRerouteUserError(): ShopifyFulfillmentOrdersRerouteUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrdersRerouteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrdersSetFulfillmentDeadlineUserError(): ShopifyFulfillmentOrdersSetFulfillmentDeadlineUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrdersSetFulfillmentDeadlineUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardDeactivateUserError(): ShopifyGiftCardDeactivateUserErrorQueryObject
    {
        $object = new ShopifyGiftCardDeactivateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardProductSetUserError(): ShopifyGiftCardProductSetUserErrorQueryObject
    {
        $object = new ShopifyGiftCardProductSetUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardSendNotificationToCustomerUserError(): ShopifyGiftCardSendNotificationToCustomerUserErrorQueryObject
    {
        $object = new ShopifyGiftCardSendNotificationToCustomerUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardSendNotificationToRecipientUserError(): ShopifyGiftCardSendNotificationToRecipientUserErrorQueryObject
    {
        $object = new ShopifyGiftCardSendNotificationToRecipientUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardTransactionUserError(): ShopifyGiftCardTransactionUserErrorQueryObject
    {
        $object = new ShopifyGiftCardTransactionUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardUserError(): ShopifyGiftCardUserErrorQueryObject
    {
        $object = new ShopifyGiftCardUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryAdjustQuantitiesUserError(): ShopifyInventoryAdjustQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventoryAdjustQuantitiesUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryBulkToggleActivationUserError(): ShopifyInventoryBulkToggleActivationUserErrorQueryObject
    {
        $object = new ShopifyInventoryBulkToggleActivationUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryMoveQuantitiesUserError(): ShopifyInventoryMoveQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventoryMoveQuantitiesUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventorySetOnHandQuantitiesUserError(): ShopifyInventorySetOnHandQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventorySetOnHandQuantitiesUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventorySetQuantitiesUserError(): ShopifyInventorySetQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventorySetQuantitiesUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentAddItemsUserError(): ShopifyInventoryShipmentAddItemsUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentAddItemsUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentCreateInTransitUserError(): ShopifyInventoryShipmentCreateInTransitUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentCreateInTransitUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentCreateUserError(): ShopifyInventoryShipmentCreateUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentDeleteUserError(): ShopifyInventoryShipmentDeleteUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentMarkInTransitUserError(): ShopifyInventoryShipmentMarkInTransitUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentMarkInTransitUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentReceiveUserError(): ShopifyInventoryShipmentReceiveUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentReceiveUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentRemoveItemsUserError(): ShopifyInventoryShipmentRemoveItemsUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentRemoveItemsUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentSetBarcodeUserError(): ShopifyInventoryShipmentSetBarcodeUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentSetBarcodeUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentSetTrackingUserError(): ShopifyInventoryShipmentSetTrackingUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentSetTrackingUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryShipmentUpdateItemQuantitiesUserError(): ShopifyInventoryShipmentUpdateItemQuantitiesUserErrorQueryObject
    {
        $object = new ShopifyInventoryShipmentUpdateItemQuantitiesUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferCancelUserError(): ShopifyInventoryTransferCancelUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferCancelUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferCreateAsReadyToShipUserError(): ShopifyInventoryTransferCreateAsReadyToShipUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferCreateAsReadyToShipUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferCreateUserError(): ShopifyInventoryTransferCreateUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferDeleteUserError(): ShopifyInventoryTransferDeleteUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferDuplicateUserError(): ShopifyInventoryTransferDuplicateUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferDuplicateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferEditUserError(): ShopifyInventoryTransferEditUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferEditUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferMarkAsReadyToShipUserError(): ShopifyInventoryTransferMarkAsReadyToShipUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferMarkAsReadyToShipUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferRemoveItemsUserError(): ShopifyInventoryTransferRemoveItemsUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferRemoveItemsUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransferSetItemsUserError(): ShopifyInventoryTransferSetItemsUserErrorQueryObject
    {
        $object = new ShopifyInventoryTransferSetItemsUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocationActivateUserError(): ShopifyLocationActivateUserErrorQueryObject
    {
        $object = new ShopifyLocationActivateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocationAddUserError(): ShopifyLocationAddUserErrorQueryObject
    {
        $object = new ShopifyLocationAddUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocationDeactivateUserError(): ShopifyLocationDeactivateUserErrorQueryObject
    {
        $object = new ShopifyLocationDeactivateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocationDeleteUserError(): ShopifyLocationDeleteUserErrorQueryObject
    {
        $object = new ShopifyLocationDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocationEditUserError(): ShopifyLocationEditUserErrorQueryObject
    {
        $object = new ShopifyLocationEditUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketCurrencySettingsUserError(): ShopifyMarketCurrencySettingsUserErrorQueryObject
    {
        $object = new ShopifyMarketCurrencySettingsUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketUserError(): ShopifyMarketUserErrorQueryObject
    {
        $object = new ShopifyMarketUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarketingActivityUserError(): ShopifyMarketingActivityUserErrorQueryObject
    {
        $object = new ShopifyMarketingActivityUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMediaUserError(): ShopifyMediaUserErrorQueryObject
    {
        $object = new ShopifyMediaUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMenuCreateUserError(): ShopifyMenuCreateUserErrorQueryObject
    {
        $object = new ShopifyMenuCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMenuDeleteUserError(): ShopifyMenuDeleteUserErrorQueryObject
    {
        $object = new ShopifyMenuDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMenuUpdateUserError(): ShopifyMenuUpdateUserErrorQueryObject
    {
        $object = new ShopifyMenuUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafieldDefinitionCreateUserError(): ShopifyMetafieldDefinitionCreateUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafieldDefinitionDeleteUserError(): ShopifyMetafieldDefinitionDeleteUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafieldDefinitionPinUserError(): ShopifyMetafieldDefinitionPinUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionPinUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafieldDefinitionUnpinUserError(): ShopifyMetafieldDefinitionUnpinUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionUnpinUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafieldDefinitionUpdateUserError(): ShopifyMetafieldDefinitionUpdateUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafieldsSetUserError(): ShopifyMetafieldsSetUserErrorQueryObject
    {
        $object = new ShopifyMetafieldsSetUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetaobjectUserError(): ShopifyMetaobjectUserErrorQueryObject
    {
        $object = new ShopifyMetaobjectUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMobilePlatformApplicationUserError(): ShopifyMobilePlatformApplicationUserErrorQueryObject
    {
        $object = new ShopifyMobilePlatformApplicationUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOnlineStoreThemeFilesUserErrors(): ShopifyOnlineStoreThemeFilesUserErrorsQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFilesUserErrorsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderAttributionDefinitionDeleteUserError(): ShopifyOrderAttributionDefinitionDeleteUserErrorQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderAttributionDefinitionUpsertUserError(): ShopifyOrderAttributionDefinitionUpsertUserErrorQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionUpsertUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderCancelUserError(): ShopifyOrderCancelUserErrorQueryObject
    {
        $object = new ShopifyOrderCancelUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderCreateMandatePaymentUserError(): ShopifyOrderCreateMandatePaymentUserErrorQueryObject
    {
        $object = new ShopifyOrderCreateMandatePaymentUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderCreateManualPaymentOrderCreateManualPaymentError(): ShopifyOrderCreateManualPaymentOrderCreateManualPaymentErrorQueryObject
    {
        $object = new ShopifyOrderCreateManualPaymentOrderCreateManualPaymentErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderCreateUserError(): ShopifyOrderCreateUserErrorQueryObject
    {
        $object = new ShopifyOrderCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderCustomerRemoveUserError(): ShopifyOrderCustomerRemoveUserErrorQueryObject
    {
        $object = new ShopifyOrderCustomerRemoveUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderCustomerSetUserError(): ShopifyOrderCustomerSetUserErrorQueryObject
    {
        $object = new ShopifyOrderCustomerSetUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderDeleteUserError(): ShopifyOrderDeleteUserErrorQueryObject
    {
        $object = new ShopifyOrderDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderEditAddShippingLineUserError(): ShopifyOrderEditAddShippingLineUserErrorQueryObject
    {
        $object = new ShopifyOrderEditAddShippingLineUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderEditRemoveDiscountUserError(): ShopifyOrderEditRemoveDiscountUserErrorQueryObject
    {
        $object = new ShopifyOrderEditRemoveDiscountUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderEditRemoveShippingLineUserError(): ShopifyOrderEditRemoveShippingLineUserErrorQueryObject
    {
        $object = new ShopifyOrderEditRemoveShippingLineUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderEditUpdateDiscountUserError(): ShopifyOrderEditUpdateDiscountUserErrorQueryObject
    {
        $object = new ShopifyOrderEditUpdateDiscountUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderEditUpdateShippingLineUserError(): ShopifyOrderEditUpdateShippingLineUserErrorQueryObject
    {
        $object = new ShopifyOrderEditUpdateShippingLineUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderInvoiceSendUserError(): ShopifyOrderInvoiceSendUserErrorQueryObject
    {
        $object = new ShopifyOrderInvoiceSendUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrderRiskAssessmentCreateUserError(): ShopifyOrderRiskAssessmentCreateUserErrorQueryObject
    {
        $object = new ShopifyOrderRiskAssessmentCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPageCreateUserError(): ShopifyPageCreateUserErrorQueryObject
    {
        $object = new ShopifyPageCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPageDeleteUserError(): ShopifyPageDeleteUserErrorQueryObject
    {
        $object = new ShopifyPageDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPageUpdateUserError(): ShopifyPageUpdateUserErrorQueryObject
    {
        $object = new ShopifyPageUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentCustomizationError(): ShopifyPaymentCustomizationErrorQueryObject
    {
        $object = new ShopifyPaymentCustomizationErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentReminderSendUserError(): ShopifyPaymentReminderSendUserErrorQueryObject
    {
        $object = new ShopifyPaymentReminderSendUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentScheduleCaptureUserError(): ShopifyPaymentScheduleCaptureUserErrorQueryObject
    {
        $object = new ShopifyPaymentScheduleCaptureUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentTermsCreateUserError(): ShopifyPaymentTermsCreateUserErrorQueryObject
    {
        $object = new ShopifyPaymentTermsCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentTermsDeleteUserError(): ShopifyPaymentTermsDeleteUserErrorQueryObject
    {
        $object = new ShopifyPaymentTermsDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentTermsUpdateUserError(): ShopifyPaymentTermsUpdateUserErrorQueryObject
    {
        $object = new ShopifyPaymentTermsUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPointOfSaleDeviceAssignToCashDrawerUserError(): ShopifyPointOfSaleDeviceAssignToCashDrawerUserErrorQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceAssignToCashDrawerUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPointOfSaleDevicePaymentSessionCloseUserError(): ShopifyPointOfSaleDevicePaymentSessionCloseUserErrorQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionCloseUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPointOfSaleDevicePaymentSessionCountUserError(): ShopifyPointOfSaleDevicePaymentSessionCountUserErrorQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionCountUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPointOfSaleDevicePaymentSessionOpenUserError(): ShopifyPointOfSaleDevicePaymentSessionOpenUserErrorQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionOpenUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPreviewInstallUserError(): ShopifyPreviewInstallUserErrorQueryObject
    {
        $object = new ShopifyPreviewInstallUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPriceListFixedPricesByProductBulkUpdateUserError(): ShopifyPriceListFixedPricesByProductBulkUpdateUserErrorQueryObject
    {
        $object = new ShopifyPriceListFixedPricesByProductBulkUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPriceListPriceUserError(): ShopifyPriceListPriceUserErrorQueryObject
    {
        $object = new ShopifyPriceListPriceUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPriceListUserError(): ShopifyPriceListUserErrorQueryObject
    {
        $object = new ShopifyPriceListUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPrivacyFeaturesDisableUserError(): ShopifyPrivacyFeaturesDisableUserErrorQueryObject
    {
        $object = new ShopifyPrivacyFeaturesDisableUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductBundleMutationUserError(): ShopifyProductBundleMutationUserErrorQueryObject
    {
        $object = new ShopifyProductBundleMutationUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductChangeStatusUserError(): ShopifyProductChangeStatusUserErrorQueryObject
    {
        $object = new ShopifyProductChangeStatusUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductFeedCreateUserError(): ShopifyProductFeedCreateUserErrorQueryObject
    {
        $object = new ShopifyProductFeedCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductFeedDeleteUserError(): ShopifyProductFeedDeleteUserErrorQueryObject
    {
        $object = new ShopifyProductFeedDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductFullSyncUserError(): ShopifyProductFullSyncUserErrorQueryObject
    {
        $object = new ShopifyProductFullSyncUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductOptionUpdateUserError(): ShopifyProductOptionUpdateUserErrorQueryObject
    {
        $object = new ShopifyProductOptionUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductOptionsCreateUserError(): ShopifyProductOptionsCreateUserErrorQueryObject
    {
        $object = new ShopifyProductOptionsCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductOptionsDeleteUserError(): ShopifyProductOptionsDeleteUserErrorQueryObject
    {
        $object = new ShopifyProductOptionsDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductOptionsReorderUserError(): ShopifyProductOptionsReorderUserErrorQueryObject
    {
        $object = new ShopifyProductOptionsReorderUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductSetUserError(): ShopifyProductSetUserErrorQueryObject
    {
        $object = new ShopifyProductSetUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariantRelationshipBulkUpdateUserError(): ShopifyProductVariantRelationshipBulkUpdateUserErrorQueryObject
    {
        $object = new ShopifyProductVariantRelationshipBulkUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariantsBulkCreateUserError(): ShopifyProductVariantsBulkCreateUserErrorQueryObject
    {
        $object = new ShopifyProductVariantsBulkCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariantsBulkDeleteUserError(): ShopifyProductVariantsBulkDeleteUserErrorQueryObject
    {
        $object = new ShopifyProductVariantsBulkDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariantsBulkReorderUserError(): ShopifyProductVariantsBulkReorderUserErrorQueryObject
    {
        $object = new ShopifyProductVariantsBulkReorderUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariantsBulkUpdateUserError(): ShopifyProductVariantsBulkUpdateUserErrorQueryObject
    {
        $object = new ShopifyProductVariantsBulkUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPubSubWebhookSubscriptionCreateUserError(): ShopifyPubSubWebhookSubscriptionCreateUserErrorQueryObject
    {
        $object = new ShopifyPubSubWebhookSubscriptionCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPubSubWebhookSubscriptionUpdateUserError(): ShopifyPubSubWebhookSubscriptionUpdateUserErrorQueryObject
    {
        $object = new ShopifyPubSubWebhookSubscriptionUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPublicationUserError(): ShopifyPublicationUserErrorQueryObject
    {
        $object = new ShopifyPublicationUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onQuantityPricingByVariantUserError(): ShopifyQuantityPricingByVariantUserErrorQueryObject
    {
        $object = new ShopifyQuantityPricingByVariantUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onQuantityRuleUserError(): ShopifyQuantityRuleUserErrorQueryObject
    {
        $object = new ShopifyQuantityRuleUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRequestedOrderEditCreateUserError(): ShopifyRequestedOrderEditCreateUserErrorQueryObject
    {
        $object = new ShopifyRequestedOrderEditCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRequestedOrderEditDeclineUserError(): ShopifyRequestedOrderEditDeclineUserErrorQueryObject
    {
        $object = new ShopifyRequestedOrderEditDeclineUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onRequestedOrderEditResolveUserError(): ShopifyRequestedOrderEditResolveUserErrorQueryObject
    {
        $object = new ShopifyRequestedOrderEditResolveUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReturnUserError(): ShopifyReturnUserErrorQueryObject
    {
        $object = new ShopifyReturnUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlanGroupUserError(): ShopifySellingPlanGroupUserErrorQueryObject
    {
        $object = new ShopifySellingPlanGroupUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShippingLabelPurchaseError(): ShopifyShippingLabelPurchaseErrorQueryObject
    {
        $object = new ShopifyShippingLabelPurchaseErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShippingLabelPurchaseUserError(): ShopifyShippingLabelPurchaseUserErrorQueryObject
    {
        $object = new ShopifyShippingLabelPurchaseUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopPolicyUserError(): ShopifyShopPolicyUserErrorQueryObject
    {
        $object = new ShopifyShopPolicyUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopResourceFeedbackCreateUserError(): ShopifyShopResourceFeedbackCreateUserErrorQueryObject
    {
        $object = new ShopifyShopResourceFeedbackCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentsPayoutAlternateCurrencyCreateUserError(): ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserErrorQueryObject
    {
        $object = new ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStandardMetafieldDefinitionEnableUserError(): ShopifyStandardMetafieldDefinitionEnableUserErrorQueryObject
    {
        $object = new ShopifyStandardMetafieldDefinitionEnableUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStoreCreditAccountCreditUserError(): ShopifyStoreCreditAccountCreditUserErrorQueryObject
    {
        $object = new ShopifyStoreCreditAccountCreditUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStoreCreditAccountDebitUserError(): ShopifyStoreCreditAccountDebitUserErrorQueryObject
    {
        $object = new ShopifyStoreCreditAccountDebitUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionBillingCycleBulkUserError(): ShopifySubscriptionBillingCycleBulkUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleBulkUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionBillingCycleContractEditCalculateUserError(): ShopifySubscriptionBillingCycleContractEditCalculateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleContractEditCalculateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionBillingCycleSkipUserError(): ShopifySubscriptionBillingCycleSkipUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleSkipUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionBillingCycleUnskipUserError(): ShopifySubscriptionBillingCycleUnskipUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleUnskipUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionBillingCycleUserError(): ShopifySubscriptionBillingCycleUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionContractCalculationCommitUserError(): ShopifySubscriptionContractCalculationCommitUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationCommitUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionContractCreateCalculateUserError(): ShopifySubscriptionContractCreateCalculateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractCreateCalculateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionContractStatusUpdateUserError(): ShopifySubscriptionContractStatusUpdateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractStatusUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionContractUpdateCalculateUserError(): ShopifySubscriptionContractUpdateCalculateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractUpdateCalculateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionContractUserError(): ShopifySubscriptionContractUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionDraftUserError(): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxAppConfigureUserError(): ShopifyTaxAppConfigureUserErrorQueryObject
    {
        $object = new ShopifyTaxAppConfigureUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxSummaryCreateUserError(): ShopifyTaxSummaryCreateUserErrorQueryObject
    {
        $object = new ShopifyTaxSummaryCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onThemeCreateUserError(): ShopifyThemeCreateUserErrorQueryObject
    {
        $object = new ShopifyThemeCreateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onThemeDeleteUserError(): ShopifyThemeDeleteUserErrorQueryObject
    {
        $object = new ShopifyThemeDeleteUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onThemeDuplicateUserError(): ShopifyThemeDuplicateUserErrorQueryObject
    {
        $object = new ShopifyThemeDuplicateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onThemePublishUserError(): ShopifyThemePublishUserErrorQueryObject
    {
        $object = new ShopifyThemePublishUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onThemeUpdateUserError(): ShopifyThemeUpdateUserErrorQueryObject
    {
        $object = new ShopifyThemeUpdateUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTransactionVoidUserError(): ShopifyTransactionVoidUserErrorQueryObject
    {
        $object = new ShopifyTransactionVoidUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTranslationUserError(): ShopifyTranslationUserErrorQueryObject
    {
        $object = new ShopifyTranslationUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUrlRedirectBulkDeleteByIdsUserError(): ShopifyUrlRedirectBulkDeleteByIdsUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteByIdsUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUrlRedirectBulkDeleteBySavedSearchUserError(): ShopifyUrlRedirectBulkDeleteBySavedSearchUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteBySavedSearchUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUrlRedirectBulkDeleteBySearchUserError(): ShopifyUrlRedirectBulkDeleteBySearchUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteBySearchUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUrlRedirectImportUserError(): ShopifyUrlRedirectImportUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectImportUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUrlRedirectUserError(): ShopifyUrlRedirectUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onUserError(): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onValidationUserError(): ShopifyValidationUserErrorQueryObject
    {
        $object = new ShopifyValidationUserErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
