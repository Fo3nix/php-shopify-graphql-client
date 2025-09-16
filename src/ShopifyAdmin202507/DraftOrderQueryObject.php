<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DraftOrderQueryObject extends QueryObject
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

    public function selectAppliedDiscount(DraftOrderAppliedDiscountArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderAppliedDiscountQueryObject("appliedDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingAddress(DraftOrderBillingAddressArgumentsObject $argsObject = null)
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

    public function selectCustomAttributes(DraftOrderCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(DraftOrderCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
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

    public function selectEvents(DraftOrderEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
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

    public function selectLineItems(DraftOrderLineItemsArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItemsSubtotalPrice(DraftOrderLineItemsSubtotalPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("lineItemsSubtotalPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This connection will be removed in a future version. Use `localizedFields` instead.
     */
    public function selectLocalizationExtensions(DraftOrderLocalizationExtensionsArgumentsObject $argsObject = null)
    {
        $object = new LocalizationExtensionConnectionQueryObject("localizationExtensions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocalizedFields(DraftOrderLocalizedFieldsArgumentsObject $argsObject = null)
    {
        $object = new LocalizedFieldConnectionQueryObject("localizedFields");
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

    public function selectMetafield(DraftOrderMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(DraftOrderMetafieldsArgumentsObject $argsObject = null)
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

    public function selectNote2()
    {
        $this->selectField("note2");

        return $this;
    }

    public function selectOrder(DraftOrderOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentTerms(DraftOrderPaymentTermsArgumentsObject $argsObject = null)
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

    public function selectPlatformDiscounts(DraftOrderPlatformDiscountsArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderPlatformDiscountQueryObject("platformDiscounts");
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

    public function selectPurchasingEntity(DraftOrderPurchasingEntityArgumentsObject $argsObject = null)
    {
        $object = new PurchasingEntityUnionObject("purchasingEntity");
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

    public function selectShippingAddress(DraftOrderShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingLine(DraftOrderShippingLineArgumentsObject $argsObject = null)
    {
        $object = new ShippingLineQueryObject("shippingLine");
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

    public function selectSubtotalPriceSet(DraftOrderSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalPriceSet");
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

    public function selectTaxLines(DraftOrderTaxLinesArgumentsObject $argsObject = null)
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

    public function selectTotalDiscountsSet(DraftOrderTotalDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalLineItemsPriceSet(DraftOrderTotalLineItemsPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalLineItemsPriceSet");
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

    public function selectTotalPriceSet(DraftOrderTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalPriceSet");
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

    public function selectTotalShippingPriceSet(DraftOrderTotalShippingPriceSetArgumentsObject $argsObject = null)
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

    public function selectTotalTaxSet(DraftOrderTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalTaxSet");
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
