<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Calculated pricing, taxes, and discounts for a [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder). Includes the complete financial breakdown with line items, discounts, shipping costs, tax calculations, and totals in both shop and presentment currencies.
 *
 * Available [`ShippingRate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShippingRate) options are included when a valid shipping address and line items are present.
 *
 * > Note:
 * > Returns alerts and warnings when issues occur during calculation, such as insufficient inventory or incompatible discounts.
 */
class ShopifyCalculatedDraftOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedDraftOrder";

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
     * The list of alerts raised while calculating.
     */
    public function selectAlerts(?ShopifyCalculatedDraftOrderAlertsArgumentsObject $argsObject = null): ShopifyResourceAlertQueryObject
    {
        $object = new ShopifyResourceAlertQueryObject("alerts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The amount due later.
     * When there are payment terms, this is the total price minus the deposit amount (if any).
     * When there are no payment terms, this is 0.
     */
    public function selectAmountDueLaterSet(?ShopifyCalculatedDraftOrderAmountDueLaterSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountDueLaterSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount due now.
     * When there are payment terms this is the value of the deposit (0 by default).
     * When there are no payment terms, this is the total price.
     */
    public function selectAmountDueNowSet(?ShopifyCalculatedDraftOrderAmountDueNowSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountDueNowSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectAppliedDiscount(?ShopifyCalculatedDraftOrderAppliedDiscountArgumentsObject $argsObject = null): ShopifyDraftOrderAppliedDiscountQueryObject
    {
        $object = new ShopifyDraftOrderAppliedDiscountQueryObject("appliedDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The available shipping rates.
     * Requires a customer with a valid shipping address and at least one line item.
     */
    public function selectAvailableShippingRates(?ShopifyCalculatedDraftOrderAvailableShippingRatesArgumentsObject $argsObject = null): ShopifyShippingRateQueryObject
    {
        $object = new ShopifyShippingRateQueryObject("availableShippingRates");
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
     * The shop currency used for calculation.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * The customer who will be sent an invoice.
     */
    public function selectCustomer(?ShopifyCalculatedDraftOrderCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The portion required to be paid at checkout.
     */
    public function selectDeposit(?ShopifyCalculatedDraftOrderDepositArgumentsObject $argsObject = null): ShopifyDepositConfigurationUnionObject
    {
        $object = new ShopifyDepositConfigurationUnionObject("deposit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The list of the line items in the calculated draft order.
     */
    public function selectLineItems(?ShopifyCalculatedDraftOrderLineItemsArgumentsObject $argsObject = null): ShopifyCalculatedDraftOrderLineItemQueryObject
    {
        $object = new ShopifyCalculatedDraftOrderLineItemQueryObject("lineItems");
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
    public function selectLineItemsSubtotalPrice(?ShopifyCalculatedDraftOrderLineItemsSubtotalPriceArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("lineItemsSubtotalPrice");
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
    public function selectPlatformDiscounts(?ShopifyCalculatedDraftOrderPlatformDiscountsArgumentsObject $argsObject = null): ShopifyDraftOrderPlatformDiscountQueryObject
    {
        $object = new ShopifyDraftOrderPlatformDiscountQueryObject("platformDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectPurchasingEntity(?ShopifyCalculatedDraftOrderPurchasingEntityArgumentsObject $argsObject = null): ShopifyPurchasingEntityUnionObject
    {
        $object = new ShopifyPurchasingEntityUnionObject("purchasingEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The line item containing the shipping information and costs.
     */
    public function selectShippingLine(?ShopifyCalculatedDraftOrderShippingLineArgumentsObject $argsObject = null): ShopifyShippingLineQueryObject
    {
        $object = new ShopifyShippingLineQueryObject("shippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectSubtotalPriceSet(?ShopifyCalculatedDraftOrderSubtotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of taxes lines charged for each line item and shipping line.
     */
    public function selectTaxLines(?ShopifyCalculatedDraftOrderTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
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
    public function selectTotalDiscountsSet(?ShopifyCalculatedDraftOrderTotalDiscountsSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalLineItemsPriceSet(?ShopifyCalculatedDraftOrderTotalLineItemsPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalPriceSet(?ShopifyCalculatedDraftOrderTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalShippingPriceSet(?ShopifyCalculatedDraftOrderTotalShippingPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalTaxSet(?ShopifyCalculatedDraftOrderTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The list of warnings raised while calculating.
     */
    public function selectWarnings(?ShopifyCalculatedDraftOrderWarningsArgumentsObject $argsObject = null): ShopifyDraftOrderWarningInterfaceObject
    {
        $object = new ShopifyDraftOrderWarningInterfaceObject("warnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
