<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "Order";

    public function selectAdditionalFees(OrderAdditionalFeesArgumentsObject $argsObject = null)
    {
        $object = new AdditionalFeeQueryObject("additionalFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAgreements(OrderAgreementsArgumentsObject $argsObject = null)
    {
        $object = new SalesAgreementConnectionQueryObject("agreements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAlerts(OrderAlertsArgumentsObject $argsObject = null)
    {
        $object = new ResourceAlertQueryObject("alerts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApp(OrderAppArgumentsObject $argsObject = null)
    {
        $object = new OrderAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingAddress(OrderBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("billingAddress");
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

    public function selectCancellation(OrderCancellationArgumentsObject $argsObject = null)
    {
        $object = new OrderCancellationQueryObject("cancellation");
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

    public function selectCartDiscountAmountSet(OrderCartDiscountAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("cartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `publication` instead.
     */
    public function selectChannel(OrderChannelArgumentsObject $argsObject = null)
    {
        $object = new ChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChannelInformation(OrderChannelInformationArgumentsObject $argsObject = null)
    {
        $object = new ChannelInformationQueryObject("channelInformation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectCurrentCartDiscountAmountSet(OrderCurrentCartDiscountAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("currentCartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentShippingPriceSet(OrderCurrentShippingPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("currentShippingPriceSet");
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

    public function selectCurrentSubtotalPriceSet(OrderCurrentSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("currentSubtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTaxLines(OrderCurrentTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("currentTaxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalAdditionalFeesSet(OrderCurrentTotalAdditionalFeesSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("currentTotalAdditionalFeesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalDiscountsSet(OrderCurrentTotalDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("currentTotalDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalDutiesSet(OrderCurrentTotalDutiesSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("currentTotalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalPriceSet(OrderCurrentTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("currentTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentTotalTaxSet(OrderCurrentTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("currentTotalTaxSet");
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

    public function selectCustomAttributes(OrderCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(OrderCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
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
    public function selectCustomerJourney(OrderCustomerJourneyArgumentsObject $argsObject = null)
    {
        $object = new CustomerJourneyQueryObject("customerJourney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerJourneySummary(OrderCustomerJourneySummaryArgumentsObject $argsObject = null)
    {
        $object = new CustomerJourneySummaryQueryObject("customerJourneySummary");
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

    public function selectDiscountApplications(OrderDiscountApplicationsArgumentsObject $argsObject = null)
    {
        $object = new DiscountApplicationConnectionQueryObject("discountApplications");
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

    public function selectDisplayAddress(OrderDisplayAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("displayAddress");
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

    public function selectDisputes(OrderDisputesArgumentsObject $argsObject = null)
    {
        $object = new OrderDisputeSummaryQueryObject("disputes");
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

    public function selectEvents(OrderEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `returns` instead.
     */
    public function selectExchangeV2s(OrderExchangeV2sArgumentsObject $argsObject = null)
    {
        $object = new ExchangeV2ConnectionQueryObject("exchangeV2s");
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

    public function selectFulfillmentOrders(OrderFulfillmentOrdersArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillments(OrderFulfillmentsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentQueryObject("fulfillments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentsCount(OrderFulfillmentsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("fulfillmentsCount");
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

    public function selectLineItems(OrderLineItemsArgumentsObject $argsObject = null)
    {
        $object = new LineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This connection will be removed in a future version. Use `localizedFields` instead.
     */
    public function selectLocalizationExtensions(OrderLocalizationExtensionsArgumentsObject $argsObject = null)
    {
        $object = new LocalizationExtensionConnectionQueryObject("localizationExtensions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocalizedFields(OrderLocalizedFieldsArgumentsObject $argsObject = null)
    {
        $object = new LocalizedFieldConnectionQueryObject("localizedFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMerchantBusinessEntity(OrderMerchantBusinessEntityArgumentsObject $argsObject = null)
    {
        $object = new BusinessEntityQueryObject("merchantBusinessEntity");
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

    public function selectMerchantOfRecordApp(OrderMerchantOfRecordAppArgumentsObject $argsObject = null)
    {
        $object = new OrderAppQueryObject("merchantOfRecordApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(OrderMetafieldArgumentsObject $argsObject = null)
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
    public function selectMetafieldDefinitions(OrderMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(OrderMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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

    public function selectNetPaymentSet(OrderNetPaymentSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("netPaymentSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNonFulfillableLineItems(OrderNonFulfillableLineItemsArgumentsObject $argsObject = null)
    {
        $object = new LineItemConnectionQueryObject("nonFulfillableLineItems");
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

    public function selectOriginalTotalAdditionalFeesSet(OrderOriginalTotalAdditionalFeesSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalTotalAdditionalFeesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotalDutiesSet(OrderOriginalTotalDutiesSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalTotalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotalPriceSet(OrderOriginalTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentCollectionDetails(OrderPaymentCollectionDetailsArgumentsObject $argsObject = null)
    {
        $object = new OrderPaymentCollectionDetailsQueryObject("paymentCollectionDetails");
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

    public function selectPaymentTerms(OrderPaymentTermsArgumentsObject $argsObject = null)
    {
        $object = new PaymentTermsQueryObject("paymentTerms");
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
    public function selectPhysicalLocation(OrderPhysicalLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("physicalLocation");
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

    public function selectPublication(OrderPublicationArgumentsObject $argsObject = null)
    {
        $object = new PublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPurchasingEntity(OrderPurchasingEntityArgumentsObject $argsObject = null)
    {
        $object = new PurchasingEntityUnionObject("purchasingEntity");
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

    public function selectRefundDiscrepancySet(OrderRefundDiscrepancySetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("refundDiscrepancySet");
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

    public function selectRefunds(OrderRefundsArgumentsObject $argsObject = null)
    {
        $object = new RefundQueryObject("refunds");
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

    public function selectRetailLocation(OrderRetailLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("retailLocation");
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

    public function selectReturns(OrderReturnsArgumentsObject $argsObject = null)
    {
        $object = new ReturnConnectionQueryObject("returns");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRisk(OrderRiskArgumentsObject $argsObject = null)
    {
        $object = new OrderRiskSummaryQueryObject("risk");
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
    public function selectRisks(OrderRisksArgumentsObject $argsObject = null)
    {
        $object = new OrderRiskQueryObject("risks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingAddress(OrderShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingLine(OrderShippingLineArgumentsObject $argsObject = null)
    {
        $object = new ShippingLineQueryObject("shippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingLines(OrderShippingLinesArgumentsObject $argsObject = null)
    {
        $object = new ShippingLineConnectionQueryObject("shippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyProtect(OrderShopifyProtectArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProtectOrderSummaryQueryObject("shopifyProtect");
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

    public function selectStaffMember(OrderStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("staffMember");
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

    public function selectSubtotalPriceSet(OrderSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuggestedRefund(OrderSuggestedRefundArgumentsObject $argsObject = null)
    {
        $object = new SuggestedRefundQueryObject("suggestedRefund");
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

    public function selectTaxLines(OrderTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("taxLines");
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

    public function selectTotalCapturableSet(OrderTotalCapturableSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalCapturableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCashRoundingAdjustment(OrderTotalCashRoundingAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new CashRoundingAdjustmentQueryObject("totalCashRoundingAdjustment");
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

    public function selectTotalDiscountsSet(OrderTotalDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalOutstandingSet(OrderTotalOutstandingSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalOutstandingSet");
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

    public function selectTotalPriceSet(OrderTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalPriceSet");
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

    public function selectTotalReceivedSet(OrderTotalReceivedSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalReceivedSet");
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

    public function selectTotalRefundedSet(OrderTotalRefundedSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalRefundedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalRefundedShippingSet(OrderTotalRefundedShippingSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalRefundedShippingSet");
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

    public function selectTotalShippingPriceSet(OrderTotalShippingPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalShippingPriceSet");
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

    public function selectTotalTaxSet(OrderTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `totalTipReceivedSet` instead.
     */
    public function selectTotalTipReceived(OrderTotalTipReceivedArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalTipReceived");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTipReceivedSet(OrderTotalTipReceivedSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalTipReceivedSet");
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

    public function selectTransactions(OrderTransactionsArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTransactionsCount(OrderTransactionsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("transactionsCount");
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
