<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A line item in a draft order. Line items are either [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects or custom items created manually with specific pricing and attributes.
 *
 * Each line item includes [quantity](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrderLineItem#field-DraftOrderLineItem.fields.quantity), [pricing](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrderLineItem#field-DraftOrderLineItem.fields.originalUnitPrice), [discounts](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrderLineItem#field-DraftOrderLineItem.fields.discountedTotal), [tax information](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrderLineItem#field-DraftOrderLineItem.fields.taxLines), and [custom attributes](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrderLineItem#field-DraftOrderLineItem.fields.customAttributes). For [bundle products](https://shopify.dev/docs/apps/build/products/bundles), the line item includes components that define the individual products within the bundle.
 */
class ShopifyDraftOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderLineItem";

    /**
     * The custom applied discount.
     */
    public function selectAppliedDiscount(?ShopifyDraftOrderLineItemAppliedDiscountArgumentsObject $argsObject = null): ShopifyDraftOrderAppliedDiscountQueryObject
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
    public function selectApproximateDiscountedUnitPriceSet(?ShopifyDraftOrderLineItemApproximateDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("approximateDiscountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of bundle components if applicable.
     *
     * @deprecated Use `components` instead.
     */
    public function selectBundleComponents(?ShopifyDraftOrderLineItemBundleComponentsArgumentsObject $argsObject = null): ShopifyDraftOrderLineItemQueryObject
    {
        $object = new ShopifyDraftOrderLineItemQueryObject("bundleComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The components of the draft order line item.
     */
    public function selectComponents(?ShopifyDraftOrderLineItemComponentsArgumentsObject $argsObject = null): ShopifyDraftOrderLineItemQueryObject
    {
        $object = new ShopifyDraftOrderLineItemQueryObject("components");
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
    public function selectCustomAttributes(?ShopifyDraftOrderLineItemCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
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
    public function selectCustomAttributesV2(?ShopifyDraftOrderLineItemCustomAttributesV2ArgumentsObject $argsObject = null): ShopifyTypedAttributeQueryObject
    {
        $object = new ShopifyTypedAttributeQueryObject("customAttributesV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The line item price, in shop currency, after discounts are applied.
     *
     * @deprecated Use `discountedTotalSet` instead.
     */
    public function selectDiscountedTotal(): static
    {
        $this->selectField("discountedTotal");

        return $this;
    }

    /**
     * The total price with discounts applied.
     */
    public function selectDiscountedTotalSet(?ShopifyDraftOrderLineItemDiscountedTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The `discountedTotal` divided by `quantity`, equal to the value of the discount per unit in the shop currency.
     *
     * @deprecated Use `approximateDiscountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPrice(): static
    {
        $this->selectField("discountedUnitPrice");

        return $this;
    }

    /**
     * The unit price with discounts applied.
     *
     * @deprecated Use `approximateDiscountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPriceSet(?ShopifyDraftOrderLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectFulfillmentService(?ShopifyDraftOrderLineItemFulfillmentServiceArgumentsObject $argsObject = null): ShopifyFulfillmentServiceQueryObject
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The weight of the line item in grams.
     *
     * @deprecated Use `weight` instead.
     */
    public function selectGrams(): static
    {
        $this->selectField("grams");

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
     * The image of the product variant.
     */
    public function selectImage(?ShopifyDraftOrderLineItemImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
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
     * The total price, in shop currency, excluding discounts, equal to the original unit price multiplied by quantity.
     *
     * @deprecated Use `originalTotalSet` instead.
     */
    public function selectOriginalTotal(): static
    {
        $this->selectField("originalTotal");

        return $this;
    }

    /**
     * The total price excluding discounts, equal to the original unit price multiplied by quantity.
     */
    public function selectOriginalTotalSet(?ShopifyDraftOrderLineItemOriginalTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price, in shop currency, without any discounts applied.
     *
     * @deprecated Use `originalUnitPriceWithCurrency` instead.
     */
    public function selectOriginalUnitPrice(): static
    {
        $this->selectField("originalUnitPrice");

        return $this;
    }

    /**
     * The price without any discounts applied.
     */
    public function selectOriginalUnitPriceSet(?ShopifyDraftOrderLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectOriginalUnitPriceWithCurrency(?ShopifyDraftOrderLineItemOriginalUnitPriceWithCurrencyArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectPriceOverride(?ShopifyDraftOrderLineItemPriceOverrideArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectProduct(?ShopifyDraftOrderLineItemProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
     * A list of tax lines.
     */
    public function selectTaxLines(?ShopifyDraftOrderLineItemTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The total discount applied in shop currency.
     *
     * @deprecated Use `totalDiscountSet` instead.
     */
    public function selectTotalDiscount(): static
    {
        $this->selectField("totalDiscount");

        return $this;
    }

    /**
     * The total discount amount.
     */
    public function selectTotalDiscountSet(?ShopifyDraftOrderLineItemTotalDiscountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectVariant(?ShopifyDraftOrderLineItemVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
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
    public function selectWeight(?ShopifyDraftOrderLineItemWeightArgumentsObject $argsObject = null): ShopifyWeightQueryObject
    {
        $object = new ShopifyWeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
