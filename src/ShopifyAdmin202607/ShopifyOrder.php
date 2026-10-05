<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAdditionalFee;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySalesAgreementConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyResourceAlert;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderAttribution;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderCancellation;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyChannelInformation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomerJourney;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomerJourneySummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountApplicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderDisputeSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyExchangeV2Connection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocalizationExtensionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocalizedFieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyBusinessEntity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderPaymentCollectionDetails;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPaymentTerms;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPublication;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPurchasingEntity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReturnConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderRiskSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderRisk;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyProtectOrderSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySuggestedRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCashRoundingAdjustment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderTransaction;

class ShopifyOrder
{
    protected $additionalFees;
    protected $agreements;
    protected $alerts;
    protected $app;
    protected $attribution;
    protected $billingAddress;
    protected $billingAddressMatchesShippingAddress;
    protected $canMarkAsPaid;
    protected $canNotifyCustomer;
    protected $cancelReason;
    protected $cancellation;
    protected $cancelledAt;
    protected $capturable;
    protected $cartDiscountAmount;
    protected $cartDiscountAmountSet;
    protected $cartToken;
    protected $channel;
    protected $channelInformation;
    protected $checkoutToken;
    protected $clientIp;
    protected $closed;
    protected $closedAt;
    protected $confirmationNumber;
    protected $confirmed;
    protected $createdAt;
    protected $currencyCode;
    protected $currentCartDiscountAmountSet;
    protected $currentShippingPriceSet;
    protected $currentSubtotalLineItemsQuantity;
    protected $currentSubtotalPriceSet;
    protected $currentTaxLines;
    protected $currentTotalAdditionalFeesSet;
    protected $currentTotalDiscountsSet;
    protected $currentTotalDutiesSet;
    protected $currentTotalPriceSet;
    protected $currentTotalTaxSet;
    protected $currentTotalWeight;
    protected $customAttributes;
    protected $customer;
    protected $customerAcceptsMarketing;
    protected $customerJourney;
    protected $customerJourneySummary;
    protected $customerLocale;
    protected $discountApplications;
    protected $discountCode;
    protected $discountCodes;
    protected $displayAddress;
    protected $displayFinancialStatus;
    protected $displayFulfillmentStatus;
    protected $disputes;
    protected $dutiesIncluded;
    protected $edited;
    protected $email;
    protected $estimatedTaxes;
    protected $events;
    protected $exchangeV2s;
    protected $fulfillable;
    protected $fulfillmentOrders;
    protected $fulfillments;
    protected $fulfillmentsCount;
    protected $fullyPaid;
    protected $hasTimelineComment;
    protected $id;
    protected $landingPageDisplayText;
    protected $landingPageUrl;
    protected $legacyResourceId;
    protected $lineItems;
    protected $localizationExtensions;
    protected $localizedFields;
    protected $merchantBusinessEntity;
    protected $merchantEditable;
    protected $merchantEditableErrors;
    protected $merchantOfRecordApp;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $netPayment;
    protected $netPaymentSet;
    protected $nonFulfillableLineItems;
    protected $note;
    protected $number;
    protected $originalTotalAdditionalFeesSet;
    protected $originalTotalDutiesSet;
    protected $originalTotalPriceSet;
    protected $paymentCollectionDetails;
    protected $paymentGatewayNames;
    protected $paymentTerms;
    protected $phone;
    protected $physicalLocation;
    protected $poNumber;
    protected $presentmentCurrencyCode;
    protected $processedAt;
    protected $productNetwork;
    protected $publication;
    protected $purchasingEntity;
    protected $referralCode;
    protected $referrerDisplayText;
    protected $referrerUrl;
    protected $refundDiscrepancySet;
    protected $refundable;
    protected $refunds;
    protected $registeredSourceUrl;
    protected $requiresShipping;
    protected $restockable;
    protected $retailLocation;
    protected $returnStatus;
    protected $returns;
    protected $risk;
    protected $riskLevel;
    protected $risks;
    protected $shippingAddress;
    protected $shippingLine;
    protected $shippingLines;
    protected $shopifyProtect;
    protected $sourceIdentifier;
    protected $sourceName;
    protected $staffMember;
    protected $statusPageUrl;
    protected $subtotalLineItemsQuantity;
    protected $subtotalPrice;
    protected $subtotalPriceSet;
    protected $suggestedRefund;
    protected $tags;
    protected $taxExempt;
    protected $taxLines;
    protected $taxesIncluded;
    protected $test;
    protected $totalCapturable;
    protected $totalCapturableSet;
    protected $totalCashRoundingAdjustment;
    protected $totalDiscounts;
    protected $totalDiscountsSet;
    protected $totalOutstandingSet;
    protected $totalPrice;
    protected $totalPriceSet;
    protected $totalReceived;
    protected $totalReceivedSet;
    protected $totalRefunded;
    protected $totalRefundedSet;
    protected $totalRefundedShippingSet;
    protected $totalShippingPrice;
    protected $totalShippingPriceSet;
    protected $totalTax;
    protected $totalTaxSet;
    protected $totalTipReceived;
    protected $totalTipReceivedSet;
    protected $totalWeight;
    protected $transactions;
    protected $transactionsCount;
    protected $unpaid;
    protected $updatedAt;

    
    /**
     * @return ShopifyAdditionalFee[]
     */
    public function getAdditionalFees()
    {
        return $this->additionalFees;
    }

    
    /**
     * @return ShopifySalesAgreementConnection
     */
    public function getAgreements()
    {
        return $this->agreements;
    }

    
    /**
     * @return ShopifyResourceAlert[]
     */
    public function getAlerts()
    {
        return $this->alerts;
    }

    
    /**
     * @return ShopifyOrderApp
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return ShopifyOrderAttribution
     */
    public function getAttribution()
    {
        return $this->attribution;
    }

    
    /**
     * @return ShopifyMailingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return bool
     */
    public function getBillingAddressMatchesShippingAddress()
    {
        return $this->billingAddressMatchesShippingAddress;
    }

    
    /**
     * @return bool
     */
    public function getCanMarkAsPaid()
    {
        return $this->canMarkAsPaid;
    }

    
    /**
     * @return bool
     */
    public function getCanNotifyCustomer()
    {
        return $this->canNotifyCustomer;
    }

    
    /**
     * @return ShopifyOrderCancelReasonEnumObject
     */
    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    
    /**
     * @return ShopifyOrderCancellation
     */
    public function getCancellation()
    {
        return $this->cancellation;
    }

    
    /**
     * @return Carbon
     */
    public function getCancelledAt()
    {
        return $this->cancelledAt;
    }

    
    /**
     * @return bool
     */
    public function getCapturable()
    {
        return $this->capturable;
    }

    
    /**
     * @return string
     */
    public function getCartDiscountAmount()
    {
        return $this->cartDiscountAmount;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCartDiscountAmountSet()
    {
        return $this->cartDiscountAmountSet;
    }

    
    /**
     * @return string
     */
    public function getCartToken()
    {
        return $this->cartToken;
    }

    
    /**
     * @return ShopifyChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    
    /**
     * @return ShopifyChannelInformation
     */
    public function getChannelInformation()
    {
        return $this->channelInformation;
    }

    
    /**
     * @return string
     */
    public function getCheckoutToken()
    {
        return $this->checkoutToken;
    }

    
    /**
     * @return string
     */
    public function getClientIp()
    {
        return $this->clientIp;
    }

    
    /**
     * @return bool
     */
    public function getClosed()
    {
        return $this->closed;
    }

    
    /**
     * @return Carbon
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    
    /**
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    
    /**
     * @return bool
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyCurrencyCodeEnumObject
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCurrentCartDiscountAmountSet()
    {
        return $this->currentCartDiscountAmountSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCurrentShippingPriceSet()
    {
        return $this->currentShippingPriceSet;
    }

    
    /**
     * @return int
     */
    public function getCurrentSubtotalLineItemsQuantity()
    {
        return $this->currentSubtotalLineItemsQuantity;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCurrentSubtotalPriceSet()
    {
        return $this->currentSubtotalPriceSet;
    }

    
    /**
     * @return ShopifyTaxLine[]
     */
    public function getCurrentTaxLines()
    {
        return $this->currentTaxLines;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalAdditionalFeesSet()
    {
        return $this->currentTotalAdditionalFeesSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalDiscountsSet()
    {
        return $this->currentTotalDiscountsSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalDutiesSet()
    {
        return $this->currentTotalDutiesSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalPriceSet()
    {
        return $this->currentTotalPriceSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalTaxSet()
    {
        return $this->currentTotalTaxSet;
    }

    
    /**
     * @return string
     */
    public function getCurrentTotalWeight()
    {
        return $this->currentTotalWeight;
    }

    
    /**
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    
    /**
     * @return ShopifyCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    
    /**
     * @return bool
     */
    public function getCustomerAcceptsMarketing()
    {
        return $this->customerAcceptsMarketing;
    }

    
    /**
     * @return ShopifyCustomerJourney
     */
    public function getCustomerJourney()
    {
        return $this->customerJourney;
    }

    
    /**
     * @return ShopifyCustomerJourneySummary
     */
    public function getCustomerJourneySummary()
    {
        return $this->customerJourneySummary;
    }

    
    /**
     * @return string
     */
    public function getCustomerLocale()
    {
        return $this->customerLocale;
    }

    
    /**
     * @return ShopifyDiscountApplicationConnection
     */
    public function getDiscountApplications()
    {
        return $this->discountApplications;
    }

    
    /**
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    
    /**
     * @return string[]
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
    }

    
    /**
     * @return ShopifyMailingAddress
     */
    public function getDisplayAddress()
    {
        return $this->displayAddress;
    }

    
    /**
     * @return ShopifyOrderDisplayFinancialStatusEnumObject
     */
    public function getDisplayFinancialStatus()
    {
        return $this->displayFinancialStatus;
    }

    
    /**
     * @return ShopifyOrderDisplayFulfillmentStatusEnumObject
     */
    public function getDisplayFulfillmentStatus()
    {
        return $this->displayFulfillmentStatus;
    }

    
    /**
     * @return ShopifyOrderDisputeSummary[]
     */
    public function getDisputes()
    {
        return $this->disputes;
    }

    
    /**
     * @return bool
     */
    public function getDutiesIncluded()
    {
        return $this->dutiesIncluded;
    }

    
    /**
     * @return bool
     */
    public function getEdited()
    {
        return $this->edited;
    }

    
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    
    /**
     * @return bool
     */
    public function getEstimatedTaxes()
    {
        return $this->estimatedTaxes;
    }

    
    /**
     * @return ShopifyEventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return ShopifyExchangeV2Connection
     */
    public function getExchangeV2s()
    {
        return $this->exchangeV2s;
    }

    
    /**
     * @return bool
     */
    public function getFulfillable()
    {
        return $this->fulfillable;
    }

    
    /**
     * @return ShopifyFulfillmentOrderConnection
     */
    public function getFulfillmentOrders()
    {
        return $this->fulfillmentOrders;
    }

    
    /**
     * @return ShopifyFulfillment[]
     */
    public function getFulfillments()
    {
        return $this->fulfillments;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getFulfillmentsCount()
    {
        return $this->fulfillmentsCount;
    }

    
    /**
     * @return bool
     */
    public function getFullyPaid()
    {
        return $this->fullyPaid;
    }

    
    /**
     * @return bool
     */
    public function getHasTimelineComment()
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getLandingPageDisplayText()
    {
        return $this->landingPageDisplayText;
    }

    
    /**
     * @return string
     */
    public function getLandingPageUrl()
    {
        return $this->landingPageUrl;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return ShopifyLineItemConnection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return ShopifyLocalizationExtensionConnection
     */
    public function getLocalizationExtensions()
    {
        return $this->localizationExtensions;
    }

    
    /**
     * @return ShopifyLocalizedFieldConnection
     */
    public function getLocalizedFields()
    {
        return $this->localizedFields;
    }

    
    /**
     * @return ShopifyBusinessEntity
     */
    public function getMerchantBusinessEntity()
    {
        return $this->merchantBusinessEntity;
    }

    
    /**
     * @return bool
     */
    public function getMerchantEditable()
    {
        return $this->merchantEditable;
    }

    
    /**
     * @return string[]
     */
    public function getMerchantEditableErrors()
    {
        return $this->merchantEditableErrors;
    }

    
    /**
     * @return ShopifyOrderApp
     */
    public function getMerchantOfRecordApp()
    {
        return $this->merchantOfRecordApp;
    }

    
    /**
     * @return ShopifyMetafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getNetPayment()
    {
        return $this->netPayment;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getNetPaymentSet()
    {
        return $this->netPaymentSet;
    }

    
    /**
     * @return ShopifyLineItemConnection
     */
    public function getNonFulfillableLineItems()
    {
        return $this->nonFulfillableLineItems;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalAdditionalFeesSet()
    {
        return $this->originalTotalAdditionalFeesSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalDutiesSet()
    {
        return $this->originalTotalDutiesSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalPriceSet()
    {
        return $this->originalTotalPriceSet;
    }

    
    /**
     * @return ShopifyOrderPaymentCollectionDetails
     */
    public function getPaymentCollectionDetails()
    {
        return $this->paymentCollectionDetails;
    }

    
    /**
     * @return string[]
     */
    public function getPaymentGatewayNames()
    {
        return $this->paymentGatewayNames;
    }

    
    /**
     * @return ShopifyPaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    
    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    
    /**
     * @return ShopifyLocation
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    
    /**
     * @return string
     */
    public function getPoNumber()
    {
        return $this->poNumber;
    }

    
    /**
     * @return ShopifyCurrencyCodeEnumObject
     */
    public function getPresentmentCurrencyCode()
    {
        return $this->presentmentCurrencyCode;
    }

    
    /**
     * @return Carbon
     */
    public function getProcessedAt()
    {
        return $this->processedAt;
    }

    
    /**
     * @return bool
     */
    public function getProductNetwork()
    {
        return $this->productNetwork;
    }

    
    /**
     * @return ShopifyPublication
     */
    public function getPublication()
    {
        return $this->publication;
    }

    
    /**
     * @return ShopifyPurchasingEntity
     */
    public function getPurchasingEntity()
    {
        return $this->purchasingEntity;
    }

    
    /**
     * @return string
     */
    public function getReferralCode()
    {
        return $this->referralCode;
    }

    
    /**
     * @return string
     */
    public function getReferrerDisplayText()
    {
        return $this->referrerDisplayText;
    }

    
    /**
     * @return string
     */
    public function getReferrerUrl()
    {
        return $this->referrerUrl;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getRefundDiscrepancySet()
    {
        return $this->refundDiscrepancySet;
    }

    
    /**
     * @return bool
     */
    public function getRefundable()
    {
        return $this->refundable;
    }

    
    /**
     * @return ShopifyRefund[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    
    /**
     * @return string
     */
    public function getRegisteredSourceUrl()
    {
        return $this->registeredSourceUrl;
    }

    
    /**
     * @return bool
     */
    public function getRequiresShipping()
    {
        return $this->requiresShipping;
    }

    
    /**
     * @return bool
     */
    public function getRestockable()
    {
        return $this->restockable;
    }

    
    /**
     * @return ShopifyLocation
     */
    public function getRetailLocation()
    {
        return $this->retailLocation;
    }

    
    /**
     * @return ShopifyOrderReturnStatusEnumObject
     */
    public function getReturnStatus()
    {
        return $this->returnStatus;
    }

    
    /**
     * @return ShopifyReturnConnection
     */
    public function getReturns()
    {
        return $this->returns;
    }

    
    /**
     * @return ShopifyOrderRiskSummary
     */
    public function getRisk()
    {
        return $this->risk;
    }

    
    /**
     * @return ShopifyOrderRiskLevelEnumObject
     */
    public function getRiskLevel()
    {
        return $this->riskLevel;
    }

    
    /**
     * @return ShopifyOrderRisk[]
     */
    public function getRisks()
    {
        return $this->risks;
    }

    
    /**
     * @return ShopifyMailingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    
    /**
     * @return ShopifyShippingLine
     */
    public function getShippingLine()
    {
        return $this->shippingLine;
    }

    
    /**
     * @return ShopifyShippingLineConnection
     */
    public function getShippingLines()
    {
        return $this->shippingLines;
    }

    
    /**
     * @return ShopifyShopifyProtectOrderSummary
     */
    public function getShopifyProtect()
    {
        return $this->shopifyProtect;
    }

    
    /**
     * @return string
     */
    public function getSourceIdentifier()
    {
        return $this->sourceIdentifier;
    }

    
    /**
     * @return string
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getStaffMember()
    {
        return $this->staffMember;
    }

    
    /**
     * @return string
     */
    public function getStatusPageUrl()
    {
        return $this->statusPageUrl;
    }

    
    /**
     * @return int
     */
    public function getSubtotalLineItemsQuantity()
    {
        return $this->subtotalLineItemsQuantity;
    }

    
    /**
     * @return string
     */
    public function getSubtotalPrice()
    {
        return $this->subtotalPrice;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getSubtotalPriceSet()
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * @return ShopifySuggestedRefund
     */
    public function getSuggestedRefund()
    {
        return $this->suggestedRefund;
    }

    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    
    /**
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->taxExempt;
    }

    
    /**
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    
    /**
     * @return bool
     */
    public function getTaxesIncluded()
    {
        return $this->taxesIncluded;
    }

    
    /**
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }

    
    /**
     * @return string
     */
    public function getTotalCapturable()
    {
        return $this->totalCapturable;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalCapturableSet()
    {
        return $this->totalCapturableSet;
    }

    
    /**
     * @return ShopifyCashRoundingAdjustment
     */
    public function getTotalCashRoundingAdjustment()
    {
        return $this->totalCashRoundingAdjustment;
    }

    
    /**
     * @return string
     */
    public function getTotalDiscounts()
    {
        return $this->totalDiscounts;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountsSet()
    {
        return $this->totalDiscountsSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalOutstandingSet()
    {
        return $this->totalOutstandingSet;
    }

    
    /**
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalPriceSet()
    {
        return $this->totalPriceSet;
    }

    
    /**
     * @return string
     */
    public function getTotalReceived()
    {
        return $this->totalReceived;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalReceivedSet()
    {
        return $this->totalReceivedSet;
    }

    
    /**
     * @return string
     */
    public function getTotalRefunded()
    {
        return $this->totalRefunded;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalRefundedSet()
    {
        return $this->totalRefundedSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalRefundedShippingSet()
    {
        return $this->totalRefundedShippingSet;
    }

    
    /**
     * @return string
     */
    public function getTotalShippingPrice()
    {
        return $this->totalShippingPrice;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalShippingPriceSet()
    {
        return $this->totalShippingPriceSet;
    }

    
    /**
     * @return string
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalTaxSet()
    {
        return $this->totalTaxSet;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalTipReceived()
    {
        return $this->totalTipReceived;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalTipReceivedSet()
    {
        return $this->totalTipReceivedSet;
    }

    
    /**
     * @return string
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    
    /**
     * @return ShopifyOrderTransaction[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getTransactionsCount()
    {
        return $this->transactionsCount;
    }

    
    /**
     * @return bool
     */
    public function getUnpaid()
    {
        return $this->unpaid;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['additionalFees']) && $data['additionalFees'] !== null) {
                $instance->additionalFees = array_map(function($item) { return ShopifyAdditionalFee::fromArray($item); }, $data['additionalFees']);
            }
            if (isset($data['agreements']) && $data['agreements'] !== null) {
                $instance->agreements = ShopifySalesAgreementConnection::fromArray($data['agreements']);
            }
            if (isset($data['alerts']) && $data['alerts'] !== null) {
                $instance->alerts = array_map(function($item) { return ShopifyResourceAlert::fromArray($item); }, $data['alerts']);
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyOrderApp::fromArray($data['app']);
            }
            if (isset($data['attribution']) && $data['attribution'] !== null) {
                $instance->attribution = ShopifyOrderAttribution::fromArray($data['attribution']);
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyMailingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['billingAddressMatchesShippingAddress']) && $data['billingAddressMatchesShippingAddress'] !== null) {
                $instance->billingAddressMatchesShippingAddress = $data['billingAddressMatchesShippingAddress'];
            }
            if (isset($data['canMarkAsPaid']) && $data['canMarkAsPaid'] !== null) {
                $instance->canMarkAsPaid = $data['canMarkAsPaid'];
            }
            if (isset($data['canNotifyCustomer']) && $data['canNotifyCustomer'] !== null) {
                $instance->canNotifyCustomer = $data['canNotifyCustomer'];
            }
            if (isset($data['cancelReason']) && $data['cancelReason'] !== null) {
                $instance->cancelReason = $data['cancelReason'];
            }
            if (isset($data['cancellation']) && $data['cancellation'] !== null) {
                $instance->cancellation = ShopifyOrderCancellation::fromArray($data['cancellation']);
            }
            if (isset($data['cancelledAt']) && $data['cancelledAt'] !== null) {
                $instance->cancelledAt = new Carbon($data['cancelledAt']);
            }
            if (isset($data['capturable']) && $data['capturable'] !== null) {
                $instance->capturable = $data['capturable'];
            }
            if (isset($data['cartDiscountAmount']) && $data['cartDiscountAmount'] !== null) {
                $instance->cartDiscountAmount = $data['cartDiscountAmount'];
            }
            if (isset($data['cartDiscountAmountSet']) && $data['cartDiscountAmountSet'] !== null) {
                $instance->cartDiscountAmountSet = ShopifyMoneyBag::fromArray($data['cartDiscountAmountSet']);
            }
            if (isset($data['cartToken']) && $data['cartToken'] !== null) {
                $instance->cartToken = $data['cartToken'];
            }
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = ShopifyChannel::fromArray($data['channel']);
            }
            if (isset($data['channelInformation']) && $data['channelInformation'] !== null) {
                $instance->channelInformation = ShopifyChannelInformation::fromArray($data['channelInformation']);
            }
            if (isset($data['checkoutToken']) && $data['checkoutToken'] !== null) {
                $instance->checkoutToken = $data['checkoutToken'];
            }
            if (isset($data['clientIp']) && $data['clientIp'] !== null) {
                $instance->clientIp = $data['clientIp'];
            }
            if (isset($data['closed']) && $data['closed'] !== null) {
                $instance->closed = $data['closed'];
            }
            if (isset($data['closedAt']) && $data['closedAt'] !== null) {
                $instance->closedAt = new Carbon($data['closedAt']);
            }
            if (isset($data['confirmationNumber']) && $data['confirmationNumber'] !== null) {
                $instance->confirmationNumber = $data['confirmationNumber'];
            }
            if (isset($data['confirmed']) && $data['confirmed'] !== null) {
                $instance->confirmed = $data['confirmed'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['currentCartDiscountAmountSet']) && $data['currentCartDiscountAmountSet'] !== null) {
                $instance->currentCartDiscountAmountSet = ShopifyMoneyBag::fromArray($data['currentCartDiscountAmountSet']);
            }
            if (isset($data['currentShippingPriceSet']) && $data['currentShippingPriceSet'] !== null) {
                $instance->currentShippingPriceSet = ShopifyMoneyBag::fromArray($data['currentShippingPriceSet']);
            }
            if (isset($data['currentSubtotalLineItemsQuantity']) && $data['currentSubtotalLineItemsQuantity'] !== null) {
                $instance->currentSubtotalLineItemsQuantity = $data['currentSubtotalLineItemsQuantity'];
            }
            if (isset($data['currentSubtotalPriceSet']) && $data['currentSubtotalPriceSet'] !== null) {
                $instance->currentSubtotalPriceSet = ShopifyMoneyBag::fromArray($data['currentSubtotalPriceSet']);
            }
            if (isset($data['currentTaxLines']) && $data['currentTaxLines'] !== null) {
                $instance->currentTaxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['currentTaxLines']);
            }
            if (isset($data['currentTotalAdditionalFeesSet']) && $data['currentTotalAdditionalFeesSet'] !== null) {
                $instance->currentTotalAdditionalFeesSet = ShopifyMoneyBag::fromArray($data['currentTotalAdditionalFeesSet']);
            }
            if (isset($data['currentTotalDiscountsSet']) && $data['currentTotalDiscountsSet'] !== null) {
                $instance->currentTotalDiscountsSet = ShopifyMoneyBag::fromArray($data['currentTotalDiscountsSet']);
            }
            if (isset($data['currentTotalDutiesSet']) && $data['currentTotalDutiesSet'] !== null) {
                $instance->currentTotalDutiesSet = ShopifyMoneyBag::fromArray($data['currentTotalDutiesSet']);
            }
            if (isset($data['currentTotalPriceSet']) && $data['currentTotalPriceSet'] !== null) {
                $instance->currentTotalPriceSet = ShopifyMoneyBag::fromArray($data['currentTotalPriceSet']);
            }
            if (isset($data['currentTotalTaxSet']) && $data['currentTotalTaxSet'] !== null) {
                $instance->currentTotalTaxSet = ShopifyMoneyBag::fromArray($data['currentTotalTaxSet']);
            }
            if (isset($data['currentTotalWeight']) && $data['currentTotalWeight'] !== null) {
                $instance->currentTotalWeight = $data['currentTotalWeight'];
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['customerAcceptsMarketing']) && $data['customerAcceptsMarketing'] !== null) {
                $instance->customerAcceptsMarketing = $data['customerAcceptsMarketing'];
            }
            if (isset($data['customerJourney']) && $data['customerJourney'] !== null) {
                $instance->customerJourney = ShopifyCustomerJourney::fromArray($data['customerJourney']);
            }
            if (isset($data['customerJourneySummary']) && $data['customerJourneySummary'] !== null) {
                $instance->customerJourneySummary = ShopifyCustomerJourneySummary::fromArray($data['customerJourneySummary']);
            }
            if (isset($data['customerLocale']) && $data['customerLocale'] !== null) {
                $instance->customerLocale = $data['customerLocale'];
            }
            if (isset($data['discountApplications']) && $data['discountApplications'] !== null) {
                $instance->discountApplications = ShopifyDiscountApplicationConnection::fromArray($data['discountApplications']);
            }
            if (isset($data['discountCode']) && $data['discountCode'] !== null) {
                $instance->discountCode = $data['discountCode'];
            }
            if (isset($data['discountCodes']) && $data['discountCodes'] !== null) {
                $instance->discountCodes = $data['discountCodes'];
            }
            if (isset($data['displayAddress']) && $data['displayAddress'] !== null) {
                $instance->displayAddress = ShopifyMailingAddress::fromArray($data['displayAddress']);
            }
            if (isset($data['displayFinancialStatus']) && $data['displayFinancialStatus'] !== null) {
                $instance->displayFinancialStatus = $data['displayFinancialStatus'];
            }
            if (isset($data['displayFulfillmentStatus']) && $data['displayFulfillmentStatus'] !== null) {
                $instance->displayFulfillmentStatus = $data['displayFulfillmentStatus'];
            }
            if (isset($data['disputes']) && $data['disputes'] !== null) {
                $instance->disputes = array_map(function($item) { return ShopifyOrderDisputeSummary::fromArray($item); }, $data['disputes']);
            }
            if (isset($data['dutiesIncluded']) && $data['dutiesIncluded'] !== null) {
                $instance->dutiesIncluded = $data['dutiesIncluded'];
            }
            if (isset($data['edited']) && $data['edited'] !== null) {
                $instance->edited = $data['edited'];
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['estimatedTaxes']) && $data['estimatedTaxes'] !== null) {
                $instance->estimatedTaxes = $data['estimatedTaxes'];
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['exchangeV2s']) && $data['exchangeV2s'] !== null) {
                $instance->exchangeV2s = ShopifyExchangeV2Connection::fromArray($data['exchangeV2s']);
            }
            if (isset($data['fulfillable']) && $data['fulfillable'] !== null) {
                $instance->fulfillable = $data['fulfillable'];
            }
            if (isset($data['fulfillmentOrders']) && $data['fulfillmentOrders'] !== null) {
                $instance->fulfillmentOrders = ShopifyFulfillmentOrderConnection::fromArray($data['fulfillmentOrders']);
            }
            if (isset($data['fulfillments']) && $data['fulfillments'] !== null) {
                $instance->fulfillments = array_map(function($item) { return ShopifyFulfillment::fromArray($item); }, $data['fulfillments']);
            }
            if (isset($data['fulfillmentsCount']) && $data['fulfillmentsCount'] !== null) {
                $instance->fulfillmentsCount = ShopifyCount::fromArray($data['fulfillmentsCount']);
            }
            if (isset($data['fullyPaid']) && $data['fullyPaid'] !== null) {
                $instance->fullyPaid = $data['fullyPaid'];
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['landingPageDisplayText']) && $data['landingPageDisplayText'] !== null) {
                $instance->landingPageDisplayText = $data['landingPageDisplayText'];
            }
            if (isset($data['landingPageUrl']) && $data['landingPageUrl'] !== null) {
                $instance->landingPageUrl = $data['landingPageUrl'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['localizationExtensions']) && $data['localizationExtensions'] !== null) {
                $instance->localizationExtensions = ShopifyLocalizationExtensionConnection::fromArray($data['localizationExtensions']);
            }
            if (isset($data['localizedFields']) && $data['localizedFields'] !== null) {
                $instance->localizedFields = ShopifyLocalizedFieldConnection::fromArray($data['localizedFields']);
            }
            if (isset($data['merchantBusinessEntity']) && $data['merchantBusinessEntity'] !== null) {
                $instance->merchantBusinessEntity = ShopifyBusinessEntity::fromArray($data['merchantBusinessEntity']);
            }
            if (isset($data['merchantEditable']) && $data['merchantEditable'] !== null) {
                $instance->merchantEditable = $data['merchantEditable'];
            }
            if (isset($data['merchantEditableErrors']) && $data['merchantEditableErrors'] !== null) {
                $instance->merchantEditableErrors = $data['merchantEditableErrors'];
            }
            if (isset($data['merchantOfRecordApp']) && $data['merchantOfRecordApp'] !== null) {
                $instance->merchantOfRecordApp = ShopifyOrderApp::fromArray($data['merchantOfRecordApp']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['netPayment']) && $data['netPayment'] !== null) {
                $instance->netPayment = $data['netPayment'];
            }
            if (isset($data['netPaymentSet']) && $data['netPaymentSet'] !== null) {
                $instance->netPaymentSet = ShopifyMoneyBag::fromArray($data['netPaymentSet']);
            }
            if (isset($data['nonFulfillableLineItems']) && $data['nonFulfillableLineItems'] !== null) {
                $instance->nonFulfillableLineItems = ShopifyLineItemConnection::fromArray($data['nonFulfillableLineItems']);
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['number']) && $data['number'] !== null) {
                $instance->number = $data['number'];
            }
            if (isset($data['originalTotalAdditionalFeesSet']) && $data['originalTotalAdditionalFeesSet'] !== null) {
                $instance->originalTotalAdditionalFeesSet = ShopifyMoneyBag::fromArray($data['originalTotalAdditionalFeesSet']);
            }
            if (isset($data['originalTotalDutiesSet']) && $data['originalTotalDutiesSet'] !== null) {
                $instance->originalTotalDutiesSet = ShopifyMoneyBag::fromArray($data['originalTotalDutiesSet']);
            }
            if (isset($data['originalTotalPriceSet']) && $data['originalTotalPriceSet'] !== null) {
                $instance->originalTotalPriceSet = ShopifyMoneyBag::fromArray($data['originalTotalPriceSet']);
            }
            if (isset($data['paymentCollectionDetails']) && $data['paymentCollectionDetails'] !== null) {
                $instance->paymentCollectionDetails = ShopifyOrderPaymentCollectionDetails::fromArray($data['paymentCollectionDetails']);
            }
            if (isset($data['paymentGatewayNames']) && $data['paymentGatewayNames'] !== null) {
                $instance->paymentGatewayNames = $data['paymentGatewayNames'];
            }
            if (isset($data['paymentTerms']) && $data['paymentTerms'] !== null) {
                $instance->paymentTerms = ShopifyPaymentTerms::fromArray($data['paymentTerms']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['physicalLocation']) && $data['physicalLocation'] !== null) {
                $instance->physicalLocation = ShopifyLocation::fromArray($data['physicalLocation']);
            }
            if (isset($data['poNumber']) && $data['poNumber'] !== null) {
                $instance->poNumber = $data['poNumber'];
            }
            if (isset($data['presentmentCurrencyCode']) && $data['presentmentCurrencyCode'] !== null) {
                $instance->presentmentCurrencyCode = $data['presentmentCurrencyCode'];
            }
            if (isset($data['processedAt']) && $data['processedAt'] !== null) {
                $instance->processedAt = new Carbon($data['processedAt']);
            }
            if (isset($data['productNetwork']) && $data['productNetwork'] !== null) {
                $instance->productNetwork = $data['productNetwork'];
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = ShopifyPublication::fromArray($data['publication']);
            }
            if (isset($data['purchasingEntity']) && $data['purchasingEntity'] !== null) {
                $instance->purchasingEntity = ShopifyPurchasingEntity::fromArray($data['purchasingEntity']);
            }
            if (isset($data['referralCode']) && $data['referralCode'] !== null) {
                $instance->referralCode = $data['referralCode'];
            }
            if (isset($data['referrerDisplayText']) && $data['referrerDisplayText'] !== null) {
                $instance->referrerDisplayText = $data['referrerDisplayText'];
            }
            if (isset($data['referrerUrl']) && $data['referrerUrl'] !== null) {
                $instance->referrerUrl = $data['referrerUrl'];
            }
            if (isset($data['refundDiscrepancySet']) && $data['refundDiscrepancySet'] !== null) {
                $instance->refundDiscrepancySet = ShopifyMoneyBag::fromArray($data['refundDiscrepancySet']);
            }
            if (isset($data['refundable']) && $data['refundable'] !== null) {
                $instance->refundable = $data['refundable'];
            }
            if (isset($data['refunds']) && $data['refunds'] !== null) {
                $instance->refunds = array_map(function($item) { return ShopifyRefund::fromArray($item); }, $data['refunds']);
            }
            if (isset($data['registeredSourceUrl']) && $data['registeredSourceUrl'] !== null) {
                $instance->registeredSourceUrl = $data['registeredSourceUrl'];
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['restockable']) && $data['restockable'] !== null) {
                $instance->restockable = $data['restockable'];
            }
            if (isset($data['retailLocation']) && $data['retailLocation'] !== null) {
                $instance->retailLocation = ShopifyLocation::fromArray($data['retailLocation']);
            }
            if (isset($data['returnStatus']) && $data['returnStatus'] !== null) {
                $instance->returnStatus = $data['returnStatus'];
            }
            if (isset($data['returns']) && $data['returns'] !== null) {
                $instance->returns = ShopifyReturnConnection::fromArray($data['returns']);
            }
            if (isset($data['risk']) && $data['risk'] !== null) {
                $instance->risk = ShopifyOrderRiskSummary::fromArray($data['risk']);
            }
            if (isset($data['riskLevel']) && $data['riskLevel'] !== null) {
                $instance->riskLevel = $data['riskLevel'];
            }
            if (isset($data['risks']) && $data['risks'] !== null) {
                $instance->risks = array_map(function($item) { return ShopifyOrderRisk::fromArray($item); }, $data['risks']);
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = ShopifyMailingAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['shippingLine']) && $data['shippingLine'] !== null) {
                $instance->shippingLine = ShopifyShippingLine::fromArray($data['shippingLine']);
            }
            if (isset($data['shippingLines']) && $data['shippingLines'] !== null) {
                $instance->shippingLines = ShopifyShippingLineConnection::fromArray($data['shippingLines']);
            }
            if (isset($data['shopifyProtect']) && $data['shopifyProtect'] !== null) {
                $instance->shopifyProtect = ShopifyShopifyProtectOrderSummary::fromArray($data['shopifyProtect']);
            }
            if (isset($data['sourceIdentifier']) && $data['sourceIdentifier'] !== null) {
                $instance->sourceIdentifier = $data['sourceIdentifier'];
            }
            if (isset($data['sourceName']) && $data['sourceName'] !== null) {
                $instance->sourceName = $data['sourceName'];
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['statusPageUrl']) && $data['statusPageUrl'] !== null) {
                $instance->statusPageUrl = $data['statusPageUrl'];
            }
            if (isset($data['subtotalLineItemsQuantity']) && $data['subtotalLineItemsQuantity'] !== null) {
                $instance->subtotalLineItemsQuantity = $data['subtotalLineItemsQuantity'];
            }
            if (isset($data['subtotalPrice']) && $data['subtotalPrice'] !== null) {
                $instance->subtotalPrice = $data['subtotalPrice'];
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = ShopifyMoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['suggestedRefund']) && $data['suggestedRefund'] !== null) {
                $instance->suggestedRefund = ShopifySuggestedRefund::fromArray($data['suggestedRefund']);
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
            }
            if (isset($data['taxExempt']) && $data['taxExempt'] !== null) {
                $instance->taxExempt = $data['taxExempt'];
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['taxesIncluded']) && $data['taxesIncluded'] !== null) {
                $instance->taxesIncluded = $data['taxesIncluded'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
            }
            if (isset($data['totalCapturable']) && $data['totalCapturable'] !== null) {
                $instance->totalCapturable = $data['totalCapturable'];
            }
            if (isset($data['totalCapturableSet']) && $data['totalCapturableSet'] !== null) {
                $instance->totalCapturableSet = ShopifyMoneyBag::fromArray($data['totalCapturableSet']);
            }
            if (isset($data['totalCashRoundingAdjustment']) && $data['totalCashRoundingAdjustment'] !== null) {
                $instance->totalCashRoundingAdjustment = ShopifyCashRoundingAdjustment::fromArray($data['totalCashRoundingAdjustment']);
            }
            if (isset($data['totalDiscounts']) && $data['totalDiscounts'] !== null) {
                $instance->totalDiscounts = $data['totalDiscounts'];
            }
            if (isset($data['totalDiscountsSet']) && $data['totalDiscountsSet'] !== null) {
                $instance->totalDiscountsSet = ShopifyMoneyBag::fromArray($data['totalDiscountsSet']);
            }
            if (isset($data['totalOutstandingSet']) && $data['totalOutstandingSet'] !== null) {
                $instance->totalOutstandingSet = ShopifyMoneyBag::fromArray($data['totalOutstandingSet']);
            }
            if (isset($data['totalPrice']) && $data['totalPrice'] !== null) {
                $instance->totalPrice = $data['totalPrice'];
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = ShopifyMoneyBag::fromArray($data['totalPriceSet']);
            }
            if (isset($data['totalReceived']) && $data['totalReceived'] !== null) {
                $instance->totalReceived = $data['totalReceived'];
            }
            if (isset($data['totalReceivedSet']) && $data['totalReceivedSet'] !== null) {
                $instance->totalReceivedSet = ShopifyMoneyBag::fromArray($data['totalReceivedSet']);
            }
            if (isset($data['totalRefunded']) && $data['totalRefunded'] !== null) {
                $instance->totalRefunded = $data['totalRefunded'];
            }
            if (isset($data['totalRefundedSet']) && $data['totalRefundedSet'] !== null) {
                $instance->totalRefundedSet = ShopifyMoneyBag::fromArray($data['totalRefundedSet']);
            }
            if (isset($data['totalRefundedShippingSet']) && $data['totalRefundedShippingSet'] !== null) {
                $instance->totalRefundedShippingSet = ShopifyMoneyBag::fromArray($data['totalRefundedShippingSet']);
            }
            if (isset($data['totalShippingPrice']) && $data['totalShippingPrice'] !== null) {
                $instance->totalShippingPrice = $data['totalShippingPrice'];
            }
            if (isset($data['totalShippingPriceSet']) && $data['totalShippingPriceSet'] !== null) {
                $instance->totalShippingPriceSet = ShopifyMoneyBag::fromArray($data['totalShippingPriceSet']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = $data['totalTax'];
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = ShopifyMoneyBag::fromArray($data['totalTaxSet']);
            }
            if (isset($data['totalTipReceived']) && $data['totalTipReceived'] !== null) {
                $instance->totalTipReceived = ShopifyMoneyV2::fromArray($data['totalTipReceived']);
            }
            if (isset($data['totalTipReceivedSet']) && $data['totalTipReceivedSet'] !== null) {
                $instance->totalTipReceivedSet = ShopifyMoneyBag::fromArray($data['totalTipReceivedSet']);
            }
            if (isset($data['totalWeight']) && $data['totalWeight'] !== null) {
                $instance->totalWeight = $data['totalWeight'];
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = array_map(function($item) { return ShopifyOrderTransaction::fromArray($item); }, $data['transactions']);
            }
            if (isset($data['transactionsCount']) && $data['transactionsCount'] !== null) {
                $instance->transactionsCount = ShopifyCount::fromArray($data['transactionsCount']);
            }
            if (isset($data['unpaid']) && $data['unpaid'] !== null) {
                $instance->unpaid = $data['unpaid'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->additionalFees !== null) {
                $data['additionalFees'] = array_map(function($item) { return $item->asArray(); }, $this->additionalFees);
            }
            if ($this->agreements !== null) {
                $data['agreements'] = $this->agreements->asArray();
            }
            if ($this->alerts !== null) {
                $data['alerts'] = array_map(function($item) { return $item->asArray(); }, $this->alerts);
            }
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->attribution !== null) {
                $data['attribution'] = $this->attribution->asArray();
            }
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->billingAddressMatchesShippingAddress !== null) {
                $data['billingAddressMatchesShippingAddress'] = $this->billingAddressMatchesShippingAddress;
            }
            if ($this->canMarkAsPaid !== null) {
                $data['canMarkAsPaid'] = $this->canMarkAsPaid;
            }
            if ($this->canNotifyCustomer !== null) {
                $data['canNotifyCustomer'] = $this->canNotifyCustomer;
            }
            if ($this->cancelReason !== null) {
                $data['cancelReason'] = $this->cancelReason;
            }
            if ($this->cancellation !== null) {
                $data['cancellation'] = $this->cancellation->asArray();
            }
            if ($this->cancelledAt !== null) {
                $data['cancelledAt'] = $this->cancelledAt->toIso8601String();
            }
            if ($this->capturable !== null) {
                $data['capturable'] = $this->capturable;
            }
            if ($this->cartDiscountAmount !== null) {
                $data['cartDiscountAmount'] = $this->cartDiscountAmount;
            }
            if ($this->cartDiscountAmountSet !== null) {
                $data['cartDiscountAmountSet'] = $this->cartDiscountAmountSet->asArray();
            }
            if ($this->cartToken !== null) {
                $data['cartToken'] = $this->cartToken;
            }
            if ($this->channel !== null) {
                $data['channel'] = $this->channel->asArray();
            }
            if ($this->channelInformation !== null) {
                $data['channelInformation'] = $this->channelInformation->asArray();
            }
            if ($this->checkoutToken !== null) {
                $data['checkoutToken'] = $this->checkoutToken;
            }
            if ($this->clientIp !== null) {
                $data['clientIp'] = $this->clientIp;
            }
            if ($this->closed !== null) {
                $data['closed'] = $this->closed;
            }
            if ($this->closedAt !== null) {
                $data['closedAt'] = $this->closedAt->toIso8601String();
            }
            if ($this->confirmationNumber !== null) {
                $data['confirmationNumber'] = $this->confirmationNumber;
            }
            if ($this->confirmed !== null) {
                $data['confirmed'] = $this->confirmed;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currencyCode !== null) {
                $data['currencyCode'] = $this->currencyCode;
            }
            if ($this->currentCartDiscountAmountSet !== null) {
                $data['currentCartDiscountAmountSet'] = $this->currentCartDiscountAmountSet->asArray();
            }
            if ($this->currentShippingPriceSet !== null) {
                $data['currentShippingPriceSet'] = $this->currentShippingPriceSet->asArray();
            }
            if ($this->currentSubtotalLineItemsQuantity !== null) {
                $data['currentSubtotalLineItemsQuantity'] = $this->currentSubtotalLineItemsQuantity;
            }
            if ($this->currentSubtotalPriceSet !== null) {
                $data['currentSubtotalPriceSet'] = $this->currentSubtotalPriceSet->asArray();
            }
            if ($this->currentTaxLines !== null) {
                $data['currentTaxLines'] = array_map(function($item) { return $item->asArray(); }, $this->currentTaxLines);
            }
            if ($this->currentTotalAdditionalFeesSet !== null) {
                $data['currentTotalAdditionalFeesSet'] = $this->currentTotalAdditionalFeesSet->asArray();
            }
            if ($this->currentTotalDiscountsSet !== null) {
                $data['currentTotalDiscountsSet'] = $this->currentTotalDiscountsSet->asArray();
            }
            if ($this->currentTotalDutiesSet !== null) {
                $data['currentTotalDutiesSet'] = $this->currentTotalDutiesSet->asArray();
            }
            if ($this->currentTotalPriceSet !== null) {
                $data['currentTotalPriceSet'] = $this->currentTotalPriceSet->asArray();
            }
            if ($this->currentTotalTaxSet !== null) {
                $data['currentTotalTaxSet'] = $this->currentTotalTaxSet->asArray();
            }
            if ($this->currentTotalWeight !== null) {
                $data['currentTotalWeight'] = $this->currentTotalWeight;
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->customerAcceptsMarketing !== null) {
                $data['customerAcceptsMarketing'] = $this->customerAcceptsMarketing;
            }
            if ($this->customerJourney !== null) {
                $data['customerJourney'] = $this->customerJourney->asArray();
            }
            if ($this->customerJourneySummary !== null) {
                $data['customerJourneySummary'] = $this->customerJourneySummary->asArray();
            }
            if ($this->customerLocale !== null) {
                $data['customerLocale'] = $this->customerLocale;
            }
            if ($this->discountApplications !== null) {
                $data['discountApplications'] = $this->discountApplications->asArray();
            }
            if ($this->discountCode !== null) {
                $data['discountCode'] = $this->discountCode;
            }
            if ($this->discountCodes !== null) {
                $data['discountCodes'] = $this->discountCodes;
            }
            if ($this->displayAddress !== null) {
                $data['displayAddress'] = $this->displayAddress->asArray();
            }
            if ($this->displayFinancialStatus !== null) {
                $data['displayFinancialStatus'] = $this->displayFinancialStatus;
            }
            if ($this->displayFulfillmentStatus !== null) {
                $data['displayFulfillmentStatus'] = $this->displayFulfillmentStatus;
            }
            if ($this->disputes !== null) {
                $data['disputes'] = array_map(function($item) { return $item->asArray(); }, $this->disputes);
            }
            if ($this->dutiesIncluded !== null) {
                $data['dutiesIncluded'] = $this->dutiesIncluded;
            }
            if ($this->edited !== null) {
                $data['edited'] = $this->edited;
            }
            if ($this->email !== null) {
                $data['email'] = $this->email;
            }
            if ($this->estimatedTaxes !== null) {
                $data['estimatedTaxes'] = $this->estimatedTaxes;
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->exchangeV2s !== null) {
                $data['exchangeV2s'] = $this->exchangeV2s->asArray();
            }
            if ($this->fulfillable !== null) {
                $data['fulfillable'] = $this->fulfillable;
            }
            if ($this->fulfillmentOrders !== null) {
                $data['fulfillmentOrders'] = $this->fulfillmentOrders->asArray();
            }
            if ($this->fulfillments !== null) {
                $data['fulfillments'] = array_map(function($item) { return $item->asArray(); }, $this->fulfillments);
            }
            if ($this->fulfillmentsCount !== null) {
                $data['fulfillmentsCount'] = $this->fulfillmentsCount->asArray();
            }
            if ($this->fullyPaid !== null) {
                $data['fullyPaid'] = $this->fullyPaid;
            }
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->landingPageDisplayText !== null) {
                $data['landingPageDisplayText'] = $this->landingPageDisplayText;
            }
            if ($this->landingPageUrl !== null) {
                $data['landingPageUrl'] = $this->landingPageUrl;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->localizationExtensions !== null) {
                $data['localizationExtensions'] = $this->localizationExtensions->asArray();
            }
            if ($this->localizedFields !== null) {
                $data['localizedFields'] = $this->localizedFields->asArray();
            }
            if ($this->merchantBusinessEntity !== null) {
                $data['merchantBusinessEntity'] = $this->merchantBusinessEntity->asArray();
            }
            if ($this->merchantEditable !== null) {
                $data['merchantEditable'] = $this->merchantEditable;
            }
            if ($this->merchantEditableErrors !== null) {
                $data['merchantEditableErrors'] = $this->merchantEditableErrors;
            }
            if ($this->merchantOfRecordApp !== null) {
                $data['merchantOfRecordApp'] = $this->merchantOfRecordApp->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->netPayment !== null) {
                $data['netPayment'] = $this->netPayment;
            }
            if ($this->netPaymentSet !== null) {
                $data['netPaymentSet'] = $this->netPaymentSet->asArray();
            }
            if ($this->nonFulfillableLineItems !== null) {
                $data['nonFulfillableLineItems'] = $this->nonFulfillableLineItems->asArray();
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->number !== null) {
                $data['number'] = $this->number;
            }
            if ($this->originalTotalAdditionalFeesSet !== null) {
                $data['originalTotalAdditionalFeesSet'] = $this->originalTotalAdditionalFeesSet->asArray();
            }
            if ($this->originalTotalDutiesSet !== null) {
                $data['originalTotalDutiesSet'] = $this->originalTotalDutiesSet->asArray();
            }
            if ($this->originalTotalPriceSet !== null) {
                $data['originalTotalPriceSet'] = $this->originalTotalPriceSet->asArray();
            }
            if ($this->paymentCollectionDetails !== null) {
                $data['paymentCollectionDetails'] = $this->paymentCollectionDetails->asArray();
            }
            if ($this->paymentGatewayNames !== null) {
                $data['paymentGatewayNames'] = $this->paymentGatewayNames;
            }
            if ($this->paymentTerms !== null) {
                $data['paymentTerms'] = $this->paymentTerms->asArray();
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->physicalLocation !== null) {
                $data['physicalLocation'] = $this->physicalLocation->asArray();
            }
            if ($this->poNumber !== null) {
                $data['poNumber'] = $this->poNumber;
            }
            if ($this->presentmentCurrencyCode !== null) {
                $data['presentmentCurrencyCode'] = $this->presentmentCurrencyCode;
            }
            if ($this->processedAt !== null) {
                $data['processedAt'] = $this->processedAt->toIso8601String();
            }
            if ($this->productNetwork !== null) {
                $data['productNetwork'] = $this->productNetwork;
            }
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->purchasingEntity !== null) {
                $data['purchasingEntity'] = $this->purchasingEntity->asArray();
            }
            if ($this->referralCode !== null) {
                $data['referralCode'] = $this->referralCode;
            }
            if ($this->referrerDisplayText !== null) {
                $data['referrerDisplayText'] = $this->referrerDisplayText;
            }
            if ($this->referrerUrl !== null) {
                $data['referrerUrl'] = $this->referrerUrl;
            }
            if ($this->refundDiscrepancySet !== null) {
                $data['refundDiscrepancySet'] = $this->refundDiscrepancySet->asArray();
            }
            if ($this->refundable !== null) {
                $data['refundable'] = $this->refundable;
            }
            if ($this->refunds !== null) {
                $data['refunds'] = array_map(function($item) { return $item->asArray(); }, $this->refunds);
            }
            if ($this->registeredSourceUrl !== null) {
                $data['registeredSourceUrl'] = $this->registeredSourceUrl;
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->restockable !== null) {
                $data['restockable'] = $this->restockable;
            }
            if ($this->retailLocation !== null) {
                $data['retailLocation'] = $this->retailLocation->asArray();
            }
            if ($this->returnStatus !== null) {
                $data['returnStatus'] = $this->returnStatus;
            }
            if ($this->returns !== null) {
                $data['returns'] = $this->returns->asArray();
            }
            if ($this->risk !== null) {
                $data['risk'] = $this->risk->asArray();
            }
            if ($this->riskLevel !== null) {
                $data['riskLevel'] = $this->riskLevel;
            }
            if ($this->risks !== null) {
                $data['risks'] = array_map(function($item) { return $item->asArray(); }, $this->risks);
            }
            if ($this->shippingAddress !== null) {
                $data['shippingAddress'] = $this->shippingAddress->asArray();
            }
            if ($this->shippingLine !== null) {
                $data['shippingLine'] = $this->shippingLine->asArray();
            }
            if ($this->shippingLines !== null) {
                $data['shippingLines'] = $this->shippingLines->asArray();
            }
            if ($this->shopifyProtect !== null) {
                $data['shopifyProtect'] = $this->shopifyProtect->asArray();
            }
            if ($this->sourceIdentifier !== null) {
                $data['sourceIdentifier'] = $this->sourceIdentifier;
            }
            if ($this->sourceName !== null) {
                $data['sourceName'] = $this->sourceName;
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->statusPageUrl !== null) {
                $data['statusPageUrl'] = $this->statusPageUrl;
            }
            if ($this->subtotalLineItemsQuantity !== null) {
                $data['subtotalLineItemsQuantity'] = $this->subtotalLineItemsQuantity;
            }
            if ($this->subtotalPrice !== null) {
                $data['subtotalPrice'] = $this->subtotalPrice;
            }
            if ($this->subtotalPriceSet !== null) {
                $data['subtotalPriceSet'] = $this->subtotalPriceSet->asArray();
            }
            if ($this->suggestedRefund !== null) {
                $data['suggestedRefund'] = $this->suggestedRefund->asArray();
            }
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            if ($this->taxExempt !== null) {
                $data['taxExempt'] = $this->taxExempt;
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->taxesIncluded !== null) {
                $data['taxesIncluded'] = $this->taxesIncluded;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            if ($this->totalCapturable !== null) {
                $data['totalCapturable'] = $this->totalCapturable;
            }
            if ($this->totalCapturableSet !== null) {
                $data['totalCapturableSet'] = $this->totalCapturableSet->asArray();
            }
            if ($this->totalCashRoundingAdjustment !== null) {
                $data['totalCashRoundingAdjustment'] = $this->totalCashRoundingAdjustment->asArray();
            }
            if ($this->totalDiscounts !== null) {
                $data['totalDiscounts'] = $this->totalDiscounts;
            }
            if ($this->totalDiscountsSet !== null) {
                $data['totalDiscountsSet'] = $this->totalDiscountsSet->asArray();
            }
            if ($this->totalOutstandingSet !== null) {
                $data['totalOutstandingSet'] = $this->totalOutstandingSet->asArray();
            }
            if ($this->totalPrice !== null) {
                $data['totalPrice'] = $this->totalPrice;
            }
            if ($this->totalPriceSet !== null) {
                $data['totalPriceSet'] = $this->totalPriceSet->asArray();
            }
            if ($this->totalReceived !== null) {
                $data['totalReceived'] = $this->totalReceived;
            }
            if ($this->totalReceivedSet !== null) {
                $data['totalReceivedSet'] = $this->totalReceivedSet->asArray();
            }
            if ($this->totalRefunded !== null) {
                $data['totalRefunded'] = $this->totalRefunded;
            }
            if ($this->totalRefundedSet !== null) {
                $data['totalRefundedSet'] = $this->totalRefundedSet->asArray();
            }
            if ($this->totalRefundedShippingSet !== null) {
                $data['totalRefundedShippingSet'] = $this->totalRefundedShippingSet->asArray();
            }
            if ($this->totalShippingPrice !== null) {
                $data['totalShippingPrice'] = $this->totalShippingPrice;
            }
            if ($this->totalShippingPriceSet !== null) {
                $data['totalShippingPriceSet'] = $this->totalShippingPriceSet->asArray();
            }
            if ($this->totalTax !== null) {
                $data['totalTax'] = $this->totalTax;
            }
            if ($this->totalTaxSet !== null) {
                $data['totalTaxSet'] = $this->totalTaxSet->asArray();
            }
            if ($this->totalTipReceived !== null) {
                $data['totalTipReceived'] = $this->totalTipReceived->asArray();
            }
            if ($this->totalTipReceivedSet !== null) {
                $data['totalTipReceivedSet'] = $this->totalTipReceivedSet->asArray();
            }
            if ($this->totalWeight !== null) {
                $data['totalWeight'] = $this->totalWeight;
            }
            if ($this->transactions !== null) {
                $data['transactions'] = array_map(function($item) { return $item->asArray(); }, $this->transactions);
            }
            if ($this->transactionsCount !== null) {
                $data['transactionsCount'] = $this->transactionsCount->asArray();
            }
            if ($this->unpaid !== null) {
                $data['unpaid'] = $this->unpaid;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
