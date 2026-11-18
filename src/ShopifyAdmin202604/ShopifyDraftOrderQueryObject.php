<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An order that a merchant creates on behalf of a customer. Draft orders are useful for merchants that need to do the following tasks:
 *
 * - Create new orders for sales made by phone, in person, by chat, or elsewhere. When a merchant accepts payment for a draft order, an order is created.
 * - Send invoices to customers to pay with a secure checkout link.
 * - Use custom items to represent additional costs or products that aren't displayed in a shop's inventory.
 * - Re-create orders manually from active sales channels.
 * - Sell products at discount or wholesale rates.
 * - Take pre-orders.
 *
 * For draft orders in multiple currencies `presentment_money` is the source of truth for what a customer is going to be charged and `shop_money` is an estimate of what the merchant might receive in their shop currency.
 *
 * **Caution:** Only use this data if it's required for your app's functionality. Shopify will restrict [access to scopes](https://shopify.dev/api/usage/access-scopes) for apps that don't have a legitimate use for the associated data.
 *
 * Draft orders created on or after April 1, 2025 will be automatically purged after one year of inactivity.
 */
class ShopifyDraftOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrder";

    /**
     * Whether or not to accept automatic discounts on the draft order during calculation.
     * If false, only discount codes and custom draft order discounts (see `appliedDiscount`) will be applied.
     * If true, eligible automatic discounts will be applied in addition to discount codes and custom draft order discounts.
     */
    public function selectAcceptAutomaticDiscounts(): static
    {
        $this->selectField("acceptAutomaticDiscounts");

        return $this;
    }

    /**
     * Whether all variant prices have been overridden.
     */
    public function selectAllVariantPricesOverridden(): static
    {
        $this->selectField("allVariantPricesOverridden");

        return $this;
    }

    /**
     * Whether discount codes are allowed during checkout of this draft order.
     */
    public function selectAllowDiscountCodesInCheckout(): static
    {
        $this->selectField("allowDiscountCodesInCheckout");

        return $this;
    }

    /**
     * Whether any variant prices have been overridden.
     */
    public function selectAnyVariantPricesOverridden(): static
    {
        $this->selectField("anyVariantPricesOverridden");

        return $this;
    }

    /**
     * The custom order-level discount applied.
     */
    public function selectAppliedDiscount(?ShopifyDraftOrderAppliedDiscountArgumentsObject $argsObject = null): ShopifyDraftOrderAppliedDiscountQueryObject
    {
        $object = new ShopifyDraftOrderAppliedDiscountQueryObject("appliedDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The billing address of the customer.
     */
    public function selectBillingAddress(?ShopifyDraftOrderBillingAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the billing address matches the shipping address.
     */
    public function selectBillingAddressMatchesShippingAddress(): static
    {
        $this->selectField("billingAddressMatchesShippingAddress");

        return $this;
    }

    /**
     * The date and time when the draft order was converted to a new order,
     * and had it's status changed to **Completed**.
     */
    public function selectCompletedAt(): static
    {
        $this->selectField("completedAt");

        return $this;
    }

    /**
     * The date and time when the draft order was created in Shopify.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The shop currency used for calculation.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * The custom information added to the draft order on behalf of the customer.
     */
    public function selectCustomAttributes(?ShopifyDraftOrderCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer who will be sent an invoice.
     */
    public function selectCustomer(?ShopifyDraftOrderCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     */
    public function selectDefaultCursor(): static
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    /**
     * All discount codes applied.
     */
    public function selectDiscountCodes(): static
    {
        $this->selectField("discountCodes");

        return $this;
    }

    /**
     * The email address of the customer, which is used to send notifications.
     */
    public function selectEmail(): static
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * The list of events associated with the draft order.
     */
    public function selectEvents(?ShopifyDraftOrderEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the merchant has added timeline comments to the draft order.
     */
    public function selectHasTimelineComment(): static
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The subject defined for the draft invoice email template.
     */
    public function selectInvoiceEmailTemplateSubject(): static
    {
        $this->selectField("invoiceEmailTemplateSubject");

        return $this;
    }

    /**
     * The date and time when the invoice was last emailed to the customer.
     */
    public function selectInvoiceSentAt(): static
    {
        $this->selectField("invoiceSentAt");

        return $this;
    }

    /**
     * The link to the checkout, which is sent to the customer in the invoice email.
     */
    public function selectInvoiceUrl(): static
    {
        $this->selectField("invoiceUrl");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The list of the line items in the draft order.
     */
    public function selectLineItems(?ShopifyDraftOrderLineItemsArgumentsObject $argsObject = null): ShopifyDraftOrderLineItemConnectionQueryObject
    {
        $object = new ShopifyDraftOrderLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A subtotal of the line items and corresponding discounts,
     * excluding shipping charges, shipping discounts, taxes, or order discounts.
     */
    public function selectLineItemsSubtotalPrice(?ShopifyDraftOrderLineItemsSubtotalPriceArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("lineItemsSubtotalPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of localization extensions for the resource.
     *
     * @deprecated This connection will be removed in a future version. Use `localizedFields` instead.
     */
    public function selectLocalizationExtensions(?ShopifyDraftOrderLocalizationExtensionsArgumentsObject $argsObject = null): ShopifyLocalizationExtensionConnectionQueryObject
    {
        $object = new ShopifyLocalizationExtensionConnectionQueryObject("localizationExtensions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of localized fields for the resource.
     */
    public function selectLocalizedFields(?ShopifyDraftOrderLocalizedFieldsArgumentsObject $argsObject = null): ShopifyLocalizedFieldConnectionQueryObject
    {
        $object = new ShopifyLocalizedFieldConnectionQueryObject("localizedFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the selected market.
     *
     * @deprecated This field is now incompatible with Markets.
     */
    public function selectMarketName(): static
    {
        $this->selectField("marketName");

        return $this;
    }

    /**
     * The selected country code that determines the pricing.
     *
     * @deprecated This field is now incompatible with Markets.
     */
    public function selectMarketRegionCountryCode(): static
    {
        $this->selectField("marketRegionCountryCode");

        return $this;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyDraftOrderMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyDraftOrderMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The identifier for the draft order, which is unique within the store. For example, _#D1223_.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The text from an optional note attached to the draft order.
     */
    public function selectNote2(): static
    {
        $this->selectField("note2");

        return $this;
    }

    /**
     * The order that was created from the draft order.
     */
    public function selectOrder(?ShopifyDraftOrderOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The associated payment terms for this draft order.
     */
    public function selectPaymentTerms(?ShopifyDraftOrderPaymentTermsArgumentsObject $argsObject = null): ShopifyPaymentTermsQueryObject
    {
        $object = new ShopifyPaymentTermsQueryObject("paymentTerms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The assigned phone number.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The list of platform discounts applied.
     */
    public function selectPlatformDiscounts(?ShopifyDraftOrderPlatformDiscountsArgumentsObject $argsObject = null): ShopifyDraftOrderPlatformDiscountQueryObject
    {
        $object = new ShopifyDraftOrderPlatformDiscountQueryObject("platformDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The purchase order number.
     */
    public function selectPoNumber(): static
    {
        $this->selectField("poNumber");

        return $this;
    }

    /**
     * The payment currency used for calculation.
     */
    public function selectPresentmentCurrencyCode(): static
    {
        $this->selectField("presentmentCurrencyCode");

        return $this;
    }

    /**
     * The purchasing entity.
     */
    public function selectPurchasingEntity(?ShopifyDraftOrderPurchasingEntityArgumentsObject $argsObject = null): ShopifyPurchasingEntityUnionObject
    {
        $object = new ShopifyPurchasingEntityUnionObject("purchasingEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the draft order is ready and can be completed.
     * Draft orders might have asynchronous operations that can take time to finish.
     */
    public function selectReady(): static
    {
        $this->selectField("ready");

        return $this;
    }

    /**
     * The time after which inventory will automatically be restocked.
     */
    public function selectReserveInventoryUntil(): static
    {
        $this->selectField("reserveInventoryUntil");

        return $this;
    }

    /**
     * The shipping address of the customer.
     */
    public function selectShippingAddress(?ShopifyDraftOrderShippingAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The line item containing the shipping information and costs.
     */
    public function selectShippingLine(?ShopifyDraftOrderShippingLineArgumentsObject $argsObject = null): ShopifyShippingLineQueryObject
    {
        $object = new ShopifyShippingLineQueryObject("shippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the draft order.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The subtotal, in shop currency, of the line items and their discounts, excluding shipping charges, shipping discounts, and taxes.
     *
     * @deprecated Use `subtotalPriceSet` instead.
     */
    public function selectSubtotalPrice(): static
    {
        $this->selectField("subtotalPrice");

        return $this;
    }

    /**
     * The subtotal, of the line items and their discounts, excluding shipping charges, shipping discounts, and taxes.
     */
    public function selectSubtotalPriceSet(?ShopifyDraftOrderSubtotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The comma separated list of tags associated with the draft order.
     * Updating `tags` overwrites any existing tags that were previously added to the draft order.
     * To add new tags without overwriting existing tags, use the [tagsAdd](https://shopify.dev/api/admin-graphql/latest/mutations/tagsadd) mutation.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

        return $this;
    }

    /**
     * Whether the draft order is tax exempt.
     */
    public function selectTaxExempt(): static
    {
        $this->selectField("taxExempt");

        return $this;
    }

    /**
     * The list of taxes lines charged for each line item and shipping line.
     */
    public function selectTaxLines(?ShopifyDraftOrderTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the line item prices include taxes.
     */
    public function selectTaxesIncluded(): static
    {
        $this->selectField("taxesIncluded");

        return $this;
    }

    /**
     * Total discounts.
     */
    public function selectTotalDiscountsSet(?ShopifyDraftOrderTotalDiscountsSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total price of line items, excluding discounts.
     */
    public function selectTotalLineItemsPriceSet(?ShopifyDraftOrderTotalLineItemsPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalLineItemsPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price, in shop currency, includes taxes, shipping charges, and discounts.
     *
     * @deprecated Use `totalPriceSet` instead.
     */
    public function selectTotalPrice(): static
    {
        $this->selectField("totalPrice");

        return $this;
    }

    /**
     * The total price, includes taxes, shipping charges, and discounts.
     */
    public function selectTotalPriceSet(?ShopifyDraftOrderTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of individual line item quantities.
     * If the draft order has bundle items, this is the sum containing the quantities of individual items in the bundle.
     */
    public function selectTotalQuantityOfLineItems(): static
    {
        $this->selectField("totalQuantityOfLineItems");

        return $this;
    }

    /**
     * The total shipping price in shop currency.
     *
     * @deprecated Use `totalShippingPriceSet` instead.
     */
    public function selectTotalShippingPrice(): static
    {
        $this->selectField("totalShippingPrice");

        return $this;
    }

    /**
     * The total shipping price.
     */
    public function selectTotalShippingPriceSet(?ShopifyDraftOrderTotalShippingPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalShippingPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total tax in shop currency.
     *
     * @deprecated Use `totalTaxSet` instead.
     */
    public function selectTotalTax(): static
    {
        $this->selectField("totalTax");

        return $this;
    }

    /**
     * The total tax.
     */
    public function selectTotalTaxSet(?ShopifyDraftOrderTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total weight in grams of the draft order.
     */
    public function selectTotalWeight(): static
    {
        $this->selectField("totalWeight");

        return $this;
    }

    /**
     * Fingerprint of the current cart.
     * In order to have bundles work, the fingerprint must be passed to
     * each request as it was previously returned, unmodified.
     */
    public function selectTransformerFingerprint(): static
    {
        $this->selectField("transformerFingerprint");

        return $this;
    }

    /**
     * The date and time when the draft order was last changed.
     * The format is YYYY-MM-DD HH:mm:ss. For example, 2016-02-05 17:04:01.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * Whether the draft order will be visible to the customer on the self-serve portal.
     */
    public function selectVisibleToCustomer(): static
    {
        $this->selectField("visibleToCustomer");

        return $this;
    }

    /**
     * The list of warnings raised while calculating.
     */
    public function selectWarnings(?ShopifyDraftOrderWarningsArgumentsObject $argsObject = null): ShopifyDraftOrderWarningInterfaceObject
    {
        $object = new ShopifyDraftOrderWarningInterfaceObject("warnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
