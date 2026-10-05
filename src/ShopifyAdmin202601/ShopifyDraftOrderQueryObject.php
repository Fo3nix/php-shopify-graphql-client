<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDraftOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrder";

    public function selectAcceptAutomaticDiscounts()
    {
        $this->selectField("acceptAutomaticDiscounts");

        return $this;
    }

    public function selectAllVariantPricesOverridden()
    {
        $this->selectField("allVariantPricesOverridden");

        return $this;
    }

    public function selectAllowDiscountCodesInCheckout()
    {
        $this->selectField("allowDiscountCodesInCheckout");

        return $this;
    }

    public function selectAnyVariantPricesOverridden()
    {
        $this->selectField("anyVariantPricesOverridden");

        return $this;
    }

    public function selectAppliedDiscount(ShopifyDraftOrderAppliedDiscountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderAppliedDiscountQueryObject("appliedDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingAddress(ShopifyDraftOrderBillingAddressArgumentsObject $argsObject = null)
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

    public function selectCompletedAt()
    {
        $this->selectField("completedAt");

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

    public function selectCustomAttributes(ShopifyDraftOrderCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(ShopifyDraftOrderCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultCursor()
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    public function selectDiscountCodes()
    {
        $this->selectField("discountCodes");

        return $this;
    }

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectEvents(ShopifyDraftOrderEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectInvoiceEmailTemplateSubject()
    {
        $this->selectField("invoiceEmailTemplateSubject");

        return $this;
    }

    public function selectInvoiceSentAt()
    {
        $this->selectField("invoiceSentAt");

        return $this;
    }

    public function selectInvoiceUrl()
    {
        $this->selectField("invoiceUrl");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectLineItems(ShopifyDraftOrderLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItemsSubtotalPrice(ShopifyDraftOrderLineItemsSubtotalPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("lineItemsSubtotalPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This connection will be removed in a future version. Use `localizedFields` instead.
     */
    public function selectLocalizationExtensions(ShopifyDraftOrderLocalizationExtensionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizationExtensionConnectionQueryObject("localizationExtensions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocalizedFields(ShopifyDraftOrderLocalizedFieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizedFieldConnectionQueryObject("localizedFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field is now incompatible with Markets.
     */
    public function selectMarketName()
    {
        $this->selectField("marketName");

        return $this;
    }

    /**
     * @deprecated This field is now incompatible with Markets.
     */
    public function selectMarketRegionCountryCode()
    {
        $this->selectField("marketRegionCountryCode");

        return $this;
    }

    public function selectMetafield(ShopifyDraftOrderMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyDraftOrderMetafieldsArgumentsObject $argsObject = null)
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

    public function selectNote2()
    {
        $this->selectField("note2");

        return $this;
    }

    public function selectOrder(ShopifyDraftOrderOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentTerms(ShopifyDraftOrderPaymentTermsArgumentsObject $argsObject = null)
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

    public function selectPlatformDiscounts(ShopifyDraftOrderPlatformDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderPlatformDiscountQueryObject("platformDiscounts");
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

    public function selectPurchasingEntity(ShopifyDraftOrderPurchasingEntityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPurchasingEntityUnionObject("purchasingEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReady()
    {
        $this->selectField("ready");

        return $this;
    }

    public function selectReserveInventoryUntil()
    {
        $this->selectField("reserveInventoryUntil");

        return $this;
    }

    public function selectShippingAddress(ShopifyDraftOrderShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingLine(ShopifyDraftOrderShippingLineArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingLineQueryObject("shippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

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

    public function selectSubtotalPriceSet(ShopifyDraftOrderSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
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

    public function selectTaxLines(ShopifyDraftOrderTaxLinesArgumentsObject $argsObject = null)
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

    public function selectTotalDiscountsSet(ShopifyDraftOrderTotalDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalLineItemsPriceSet(ShopifyDraftOrderTotalLineItemsPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalLineItemsPriceSet");
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

    public function selectTotalPriceSet(ShopifyDraftOrderTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalQuantityOfLineItems()
    {
        $this->selectField("totalQuantityOfLineItems");

        return $this;
    }

    /**
     * @deprecated Use `totalShippingPriceSet` instead.
     */
    public function selectTotalShippingPrice()
    {
        $this->selectField("totalShippingPrice");

        return $this;
    }

    public function selectTotalShippingPriceSet(ShopifyDraftOrderTotalShippingPriceSetArgumentsObject $argsObject = null)
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

    public function selectTotalTaxSet(ShopifyDraftOrderTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
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

    public function selectTransformerFingerprint()
    {
        $this->selectField("transformerFingerprint");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectVisibleToCustomer()
    {
        $this->selectField("visibleToCustomer");

        return $this;
    }
}
