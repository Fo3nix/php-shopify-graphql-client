<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The calculated line item for a draft order.
 */
class ShopifyCalculatedDraftOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedDraftOrderLineItem";

    /**
     * The custom applied discount.
     */
    public function selectAppliedDiscount(?ShopifyCalculatedDraftOrderLineItemAppliedDiscountArgumentsObject $argsObject = null): ShopifyDraftOrderAppliedDiscountQueryObject
    {
        $object = new ShopifyDraftOrderAppliedDiscountQueryObject("appliedDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The `discountedTotal` divided by `quantity`,
     * equal to the average value of the line item price per unit after discounts are applied.
     * This value doesn't include discounts applied to the entire draft order.
     */
    public function selectApproximateDiscountedUnitPriceSet(?ShopifyCalculatedDraftOrderLineItemApproximateDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("approximateDiscountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The bundle components of the draft order line item.
     *
     * @deprecated Use `components` instead.
     */
    public function selectBundleComponents(?ShopifyCalculatedDraftOrderLineItemBundleComponentsArgumentsObject $argsObject = null): ShopifyCalculatedDraftOrderLineItemQueryObject
    {
        $object = new ShopifyCalculatedDraftOrderLineItemQueryObject("bundleComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The components of the draft order line item.
     */
    public function selectComponents(?ShopifyCalculatedDraftOrderLineItemComponentsArgumentsObject $argsObject = null): ShopifyCalculatedDraftOrderLineItemQueryObject
    {
        $object = new ShopifyCalculatedDraftOrderLineItemQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the line item is custom (`true`) or contains a product variant (`false`).
     */
    public function selectCustom(): static
    {
        $this->selectField("custom");

        return $this;
    }

    /**
     * A list of attributes that represent custom features or special requests.
     */
    public function selectCustomAttributes(?ShopifyCalculatedDraftOrderLineItemCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of additional information (metafields) with the associated types.
     */
    public function selectCustomAttributesV2(?ShopifyCalculatedDraftOrderLineItemCustomAttributesV2ArgumentsObject $argsObject = null): ShopifyTypedAttributeQueryObject
    {
        $object = new ShopifyTypedAttributeQueryObject("customAttributesV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price with discounts applied.
     */
    public function selectDiscountedTotal(?ShopifyCalculatedDraftOrderLineItemDiscountedTotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("discountedTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price with discounts applied.
     */
    public function selectDiscountedTotalSet(?ShopifyCalculatedDraftOrderLineItemDiscountedTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unit price with discounts applied.
     *
     * @deprecated Use `approximateDiscountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPrice(?ShopifyCalculatedDraftOrderLineItemDiscountedUnitPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("discountedUnitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unit price with discounts applied.
     *
     * @deprecated Use `approximateDiscountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPriceSet(?ShopifyCalculatedDraftOrderLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Name of the service provider who fulfilled the order.
     *
     * Valid values are either **manual** or the name of the provider.
     * For example, **amazon**, **shipwire**.
     *
     * Deleted fulfillment services will return null.
     */
    public function selectFulfillmentService(?ShopifyCalculatedDraftOrderLineItemFulfillmentServiceArgumentsObject $argsObject = null): ShopifyFulfillmentServiceQueryObject
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The image associated with the draft order line item.
     */
    public function selectImage(?ShopifyCalculatedDraftOrderLineItemImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the line item represents the purchase of a gift card.
     */
    public function selectIsGiftCard(): static
    {
        $this->selectField("isGiftCard");

        return $this;
    }

    /**
     * The name of the product.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The total price, excluding discounts, equal to the original unit price multiplied by quantity.
     */
    public function selectOriginalTotal(?ShopifyCalculatedDraftOrderLineItemOriginalTotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("originalTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price excluding discounts, equal to the original unit price multiplied by quantity.
     */
    public function selectOriginalTotalSet(?ShopifyCalculatedDraftOrderLineItemOriginalTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The line item price without any discounts applied.
     */
    public function selectOriginalUnitPrice(?ShopifyCalculatedDraftOrderLineItemOriginalUnitPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("originalUnitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price without any discounts applied.
     */
    public function selectOriginalUnitPriceSet(?ShopifyCalculatedDraftOrderLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The original custom line item input price.
     */
    public function selectOriginalUnitPriceWithCurrency(?ShopifyCalculatedDraftOrderLineItemOriginalUnitPriceWithCurrencyArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("originalUnitPriceWithCurrency");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price override for the line item.
     */
    public function selectPriceOverride(?ShopifyCalculatedDraftOrderLineItemPriceOverrideArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("priceOverride");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product for the line item.
     */
    public function selectProduct(?ShopifyCalculatedDraftOrderLineItemProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of items. For a bundle item, this is the quantity of bundles,
     * not the quantity of items contained in the bundles themselves.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * Whether physical shipping is required for the variant.
     */
    public function selectRequiresShipping(): static
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    /**
     * The SKU number of the product variant.
     */
    public function selectSku(): static
    {
        $this->selectField("sku");

        return $this;
    }

    /**
     * Whether the variant is taxable.
     */
    public function selectTaxable(): static
    {
        $this->selectField("taxable");

        return $this;
    }

    /**
     * The title of the product or variant. This field only applies to custom line items.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The total value of the discount.
     */
    public function selectTotalDiscount(?ShopifyCalculatedDraftOrderLineItemTotalDiscountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total discount amount.
     */
    public function selectTotalDiscountSet(?ShopifyCalculatedDraftOrderLineItemTotalDiscountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The UUID of the draft order line item. Must be unique and consistent across requests.
     * This field is mandatory in order to manipulate drafts with bundles.
     */
    public function selectUuid(): static
    {
        $this->selectField("uuid");

        return $this;
    }

    /**
     * The product variant for the line item.
     */
    public function selectVariant(?ShopifyCalculatedDraftOrderLineItemVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the variant.
     */
    public function selectVariantTitle(): static
    {
        $this->selectField("variantTitle");

        return $this;
    }

    /**
     * The name of the vendor who created the product variant.
     */
    public function selectVendor(): static
    {
        $this->selectField("vendor");

        return $this;
    }

    /**
     * The weight unit and value.
     */
    public function selectWeight(?ShopifyCalculatedDraftOrderLineItemWeightArgumentsObject $argsObject = null): ShopifyWeightQueryObject
    {
        $object = new ShopifyWeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
