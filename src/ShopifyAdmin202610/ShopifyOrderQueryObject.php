<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "Order";

    public function selectAdditionalFees(ShopifyOrderAdditionalFeesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAdditionalFeeQueryObject("additionalFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAgreements(ShopifyOrderAgreementsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySalesAgreementConnectionQueryObject("agreements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAlerts(ShopifyOrderAlertsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourceAlertQueryObject("alerts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApp(ShopifyOrderAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAttribution(ShopifyOrderAttributionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAttributionQueryObject("attribution");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingAddress(ShopifyOrderBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingAddressMatchesShippingAddress()
    {
        $this->selectField("billingAddressMatchesShippingAddress");

        return $this;
    }

    public function selectCanMarkAsPaid()
    {
        $this->selectField("canMarkAsPaid");

        return $this;
    }

    public function selectCanNotifyCustomer()
    {
        $this->selectField("canNotifyCustomer");

        return $this;
    }

    public function selectCancelReason()
    {
        $this->selectField("cancelReason");

        return $this;
    }

    public function selectCancellation(ShopifyOrderCancellationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderCancellationQueryObject("cancellation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCancelledAt()
    {
        $this->selectField("cancelledAt");

        return $this;
    }

    public function selectCapturable()
    {
        $this->selectField("capturable");

        return $this;
    }

    /**
     * @deprecated Use `cartDiscountAmountSet` instead.
     */
    public function selectCartDiscountAmount()
    {
        $this->selectField("cartDiscountAmount");

        return $this;
    }

    public function selectCartDiscountAmountSet(ShopifyOrderCartDiscountAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("cartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCartToken()
    {
        $this->selectField("cartToken");

        return $this;
    }

    /**
     * @deprecated Use `publication` instead.
     */
    public function selectChannel(ShopifyOrderChannelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `attribution` instead.
     */
    public function selectChannelInformation(ShopifyOrderChannelInformationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelInformationQueryObject("channelInformation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCheckoutToken()
    {
        $this->selectField("checkoutToken");

        return $this;
    }

    public function selectClientIp()
    {
        $this->selectField("clientIp");

        return $this;
    }

    public function selectClosed()
    {
        $this->selectField("closed");

        return $this;
    }

    public function selectClosedAt()
    {
        $this->selectField("closedAt");

        return $this;
    }

    public function selectConfirmationNumber()
    {
        $this->selectField("confirmationNumber");

        return $this;
    }

    public function selectConfirmed()
    {
        $this->selectField("confirmed");

        return $this;
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

    public function selectCurrentCartDiscountAmountSet(ShopifyOrderCurrentCartDiscountAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("currentCartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentShippingPriceSet(ShopifyOrderCurrentShippingPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("currentShippingPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentSubtotalLineItemsQuantity()
    {
        $this->selectField("currentSubtotalLineItemsQuantity");

        return $this;
    }

    public function selectCurrentSubtotalPriceSet(ShopifyOrderCurrentSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("currentSubtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTaxLines(ShopifyOrderCurrentTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxLineQueryObject("currentTaxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalAdditionalFeesSet(ShopifyOrderCurrentTotalAdditionalFeesSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalAdditionalFeesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalDiscountsSet(ShopifyOrderCurrentTotalDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalDutiesSet(ShopifyOrderCurrentTotalDutiesSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalPriceSet(ShopifyOrderCurrentTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalTaxSet(ShopifyOrderCurrentTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalWeight()
    {
        $this->selectField("currentTotalWeight");

        return $this;
    }

    public function selectCustomAttributes(ShopifyOrderCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(ShopifyOrderCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerAcceptsMarketing()
    {
        $this->selectField("customerAcceptsMarketing");

        return $this;
    }

    /**
     * @deprecated Use `customerJourneySummary` instead.
     */
    public function selectCustomerJourney(ShopifyOrderCustomerJourneyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerJourneyQueryObject("customerJourney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerJourneySummary(ShopifyOrderCustomerJourneySummaryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerJourneySummaryQueryObject("customerJourneySummary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerLocale()
    {
        $this->selectField("customerLocale");

        return $this;
    }

    public function selectDiscountApplications(ShopifyOrderDiscountApplicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountApplicationConnectionQueryObject("discountApplications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountCode()
    {
        $this->selectField("discountCode");

        return $this;
    }

    public function selectDiscountCodes()
    {
        $this->selectField("discountCodes");

        return $this;
    }

    public function selectDisplayAddress(ShopifyOrderDisplayAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("displayAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisplayFinancialStatus()
    {
        $this->selectField("displayFinancialStatus");

        return $this;
    }

    public function selectDisplayFulfillmentStatus()
    {
        $this->selectField("displayFulfillmentStatus");

        return $this;
    }

    public function selectDisplayRequestedEditStatus()
    {
        $this->selectField("displayRequestedEditStatus");

        return $this;
    }

    public function selectDisputes(ShopifyOrderDisputesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderDisputeSummaryQueryObject("disputes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDutiesIncluded()
    {
        $this->selectField("dutiesIncluded");

        return $this;
    }

    public function selectEdited()
    {
        $this->selectField("edited");

        return $this;
    }

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectEstimatedTaxes()
    {
        $this->selectField("estimatedTaxes");

        return $this;
    }

    public function selectEvents(ShopifyOrderEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `returns` instead.
     */
    public function selectExchangeV2s(ShopifyOrderExchangeV2sArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeV2ConnectionQueryObject("exchangeV2s");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillable()
    {
        $this->selectField("fulfillable");

        return $this;
    }

    public function selectFulfillmentOrders(ShopifyOrderFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillments(ShopifyOrderFulfillmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentQueryObject("fulfillments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentsCount(ShopifyOrderFulfillmentsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("fulfillmentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFullyPaid()
    {
        $this->selectField("fullyPaid");

        return $this;
    }

    public function selectHasTimelineComment()
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * @deprecated Use `customerJourneySummary.lastVisit.landingPageHtml` instead
     */
    public function selectLandingPageDisplayText()
    {
        $this->selectField("landingPageDisplayText");

        return $this;
    }

    /**
     * @deprecated Use `customerJourneySummary.lastVisit.landingPage` instead
     */
    public function selectLandingPageUrl()
    {
        $this->selectField("landingPageUrl");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectLineItems(ShopifyOrderLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This connection will be removed in a future version. Use `localizedFields` instead.
     */
    public function selectLocalizationExtensions(ShopifyOrderLocalizationExtensionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizationExtensionConnectionQueryObject("localizationExtensions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocalizedFields(ShopifyOrderLocalizedFieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizedFieldConnectionQueryObject("localizedFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMerchantBusinessEntity(ShopifyOrderMerchantBusinessEntityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBusinessEntityQueryObject("merchantBusinessEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMerchantEditable()
    {
        $this->selectField("merchantEditable");

        return $this;
    }

    public function selectMerchantEditableErrors()
    {
        $this->selectField("merchantEditableErrors");

        return $this;
    }

    public function selectMerchantOfRecordApp(ShopifyOrderMerchantOfRecordAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAppQueryObject("merchantOfRecordApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ShopifyOrderMetafieldArgumentsObject $argsObject = null)
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
    public function selectMetafieldDefinitions(ShopifyOrderMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyOrderMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * @deprecated Use `netPaymentSet` instead.
     */
    public function selectNetPayment()
    {
        $this->selectField("netPayment");

        return $this;
    }

    public function selectNetPaymentSet(ShopifyOrderNetPaymentSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("netPaymentSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNonFulfillableLineItems(ShopifyOrderNonFulfillableLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemConnectionQueryObject("nonFulfillableLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectNumber()
    {
        $this->selectField("number");

        return $this;
    }

    public function selectOriginalTotalAdditionalFeesSet(ShopifyOrderOriginalTotalAdditionalFeesSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalAdditionalFeesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotalDutiesSet(ShopifyOrderOriginalTotalDutiesSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotalPriceSet(ShopifyOrderOriginalTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentCollectionDetails(ShopifyOrderPaymentCollectionDetailsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderPaymentCollectionDetailsQueryObject("paymentCollectionDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentGatewayNames()
    {
        $this->selectField("paymentGatewayNames");

        return $this;
    }

    public function selectPaymentTerms(ShopifyOrderPaymentTermsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentTermsQueryObject("paymentTerms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * @deprecated Use `fulfillmentOrders` to get the fulfillment location for the order
     */
    public function selectPhysicalLocation(ShopifyOrderPhysicalLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("physicalLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPoNumber()
    {
        $this->selectField("poNumber");

        return $this;
    }

    public function selectPresentmentCurrencyCode()
    {
        $this->selectField("presentmentCurrencyCode");

        return $this;
    }

    public function selectProcessedAt()
    {
        $this->selectField("processedAt");

        return $this;
    }

    public function selectProductNetwork()
    {
        $this->selectField("productNetwork");

        return $this;
    }

    public function selectPublication(ShopifyOrderPublicationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPurchasingEntity(ShopifyOrderPurchasingEntityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPurchasingEntityUnionObject("purchasingEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `customerJourneySummary.lastVisit.referralCode` instead
     */
    public function selectReferralCode()
    {
        $this->selectField("referralCode");

        return $this;
    }

    /**
     * @deprecated Use `customerJourneySummary.lastVisit.referralInfoHtml` instead
     */
    public function selectReferrerDisplayText()
    {
        $this->selectField("referrerDisplayText");

        return $this;
    }

    /**
     * @deprecated Use `customerJourneySummary.lastVisit.referrerUrl` instead
     */
    public function selectReferrerUrl()
    {
        $this->selectField("referrerUrl");

        return $this;
    }

    public function selectRefundDiscrepancySet(ShopifyOrderRefundDiscrepancySetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("refundDiscrepancySet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundable()
    {
        $this->selectField("refundable");

        return $this;
    }

    public function selectRefunds(ShopifyOrderRefundsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundQueryObject("refunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRegisteredSourceUrl()
    {
        $this->selectField("registeredSourceUrl");

        return $this;
    }

    public function selectRequestedOrderEdits(ShopifyOrderRequestedOrderEditsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditConnectionQueryObject("requestedOrderEdits");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRequiresShipping()
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    public function selectRestockable()
    {
        $this->selectField("restockable");

        return $this;
    }

    public function selectRetailLocation(ShopifyOrderRetailLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("retailLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnStatus()
    {
        $this->selectField("returnStatus");

        return $this;
    }

    public function selectReturns(ShopifyOrderReturnsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnConnectionQueryObject("returns");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRisk(ShopifyOrderRiskArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderRiskSummaryQueryObject("risk");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field is deprecated in favor of OrderRiskAssessment.riskLevel which allows for more granular risk levels, including PENDING and NONE.
     */
    public function selectRiskLevel()
    {
        $this->selectField("riskLevel");

        return $this;
    }

    /**
     * @deprecated This field is deprecated in favor of OrderRiskAssessment, which provides enhanced capabilities such as distinguishing risks from their provider.
     */
    public function selectRisks(ShopifyOrderRisksArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderRiskQueryObject("risks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingAddress(ShopifyOrderShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingLine(ShopifyOrderShippingLineArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingLineQueryObject("shippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingLines(ShopifyOrderShippingLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingLineConnectionQueryObject("shippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyProtect(ShopifyOrderShopifyProtectArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyProtectOrderSummaryQueryObject("shopifyProtect");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSourceIdentifier()
    {
        $this->selectField("sourceIdentifier");

        return $this;
    }

    public function selectSourceName()
    {
        $this->selectField("sourceName");

        return $this;
    }

    public function selectStaffMember(ShopifyOrderStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatusPageUrl()
    {
        $this->selectField("statusPageUrl");

        return $this;
    }

    public function selectSubtotalLineItemsQuantity()
    {
        $this->selectField("subtotalLineItemsQuantity");

        return $this;
    }

    /**
     * @deprecated Use `subtotalPriceSet` instead.
     */
    public function selectSubtotalPrice()
    {
        $this->selectField("subtotalPrice");

        return $this;
    }

    public function selectSubtotalPriceSet(ShopifyOrderSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuggestedRefund(ShopifyOrderSuggestedRefundArgumentsObject $argsObject = null)
    {
        $object = new ShopifySuggestedRefundQueryObject("suggestedRefund");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTags()
    {
        $this->selectField("tags");

        return $this;
    }

    public function selectTaxExempt()
    {
        $this->selectField("taxExempt");

        return $this;
    }

    public function selectTaxLines(ShopifyOrderTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxesIncluded()
    {
        $this->selectField("taxesIncluded");

        return $this;
    }

    public function selectTest()
    {
        $this->selectField("test");

        return $this;
    }

    /**
     * @deprecated Use `totalCapturableSet` instead.
     */
    public function selectTotalCapturable()
    {
        $this->selectField("totalCapturable");

        return $this;
    }

    public function selectTotalCapturableSet(ShopifyOrderTotalCapturableSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalCapturableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCashRoundingAdjustment(ShopifyOrderTotalCashRoundingAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashRoundingAdjustmentQueryObject("totalCashRoundingAdjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalDiscountsSet` instead.
     */
    public function selectTotalDiscounts()
    {
        $this->selectField("totalDiscounts");

        return $this;
    }

    public function selectTotalDiscountsSet(ShopifyOrderTotalDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalOutstandingSet(ShopifyOrderTotalOutstandingSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalOutstandingSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalPriceSet` instead.
     */
    public function selectTotalPrice()
    {
        $this->selectField("totalPrice");

        return $this;
    }

    public function selectTotalPriceSet(ShopifyOrderTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalReceivedSet` instead.
     */
    public function selectTotalReceived()
    {
        $this->selectField("totalReceived");

        return $this;
    }

    public function selectTotalReceivedSet(ShopifyOrderTotalReceivedSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalReceivedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalRefundedSet` instead.
     */
    public function selectTotalRefunded()
    {
        $this->selectField("totalRefunded");

        return $this;
    }

    public function selectTotalRefundedSet(ShopifyOrderTotalRefundedSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalRefundedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalRefundedShippingSet(ShopifyOrderTotalRefundedShippingSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalRefundedShippingSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalShippingPriceSet` instead.
     */
    public function selectTotalShippingPrice()
    {
        $this->selectField("totalShippingPrice");

        return $this;
    }

    public function selectTotalShippingPriceSet(ShopifyOrderTotalShippingPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalShippingPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalTaxSet` instead.
     */
    public function selectTotalTax()
    {
        $this->selectField("totalTax");

        return $this;
    }

    public function selectTotalTaxSet(ShopifyOrderTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalTipReceivedSet` instead.
     */
    public function selectTotalTipReceived(ShopifyOrderTotalTipReceivedArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalTipReceived");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTipReceivedSet(ShopifyOrderTotalTipReceivedSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalTipReceivedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalWeight()
    {
        $this->selectField("totalWeight");

        return $this;
    }

    public function selectTransactions(ShopifyOrderTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTransactionsCount(ShopifyOrderTransactionsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("transactionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnpaid()
    {
        $this->selectField("unpaid");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
