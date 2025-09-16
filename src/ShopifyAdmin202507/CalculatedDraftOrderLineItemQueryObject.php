<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CalculatedDraftOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedDraftOrderLineItem";

    public function selectAppliedDiscount(CalculatedDraftOrderLineItemAppliedDiscountArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderAppliedDiscountQueryObject("appliedDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApproximateDiscountedUnitPriceSet(CalculatedDraftOrderLineItemApproximateDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("approximateDiscountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `components` instead.
     */
    public function selectBundleComponents(CalculatedDraftOrderLineItemBundleComponentsArgumentsObject $argsObject = null)
    {
        $object = new CalculatedDraftOrderLineItemQueryObject("bundleComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComponents(CalculatedDraftOrderLineItemComponentsArgumentsObject $argsObject = null)
    {
        $object = new CalculatedDraftOrderLineItemQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustom()
    {
        $this->selectField("custom");

        return $this;
    }

    public function selectCustomAttributes(CalculatedDraftOrderLineItemCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomAttributesV2(CalculatedDraftOrderLineItemCustomAttributesV2ArgumentsObject $argsObject = null)
    {
        $object = new TypedAttributeQueryObject("customAttributesV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedTotal(CalculatedDraftOrderLineItemDiscountedTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("discountedTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedTotalSet(CalculatedDraftOrderLineItemDiscountedTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `approximateDiscountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPrice(CalculatedDraftOrderLineItemDiscountedUnitPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("discountedUnitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `approximateDiscountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPriceSet(CalculatedDraftOrderLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentService(CalculatedDraftOrderLineItemFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectImage(CalculatedDraftOrderLineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectIsGiftCard()
    {
        $this->selectField("isGiftCard");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOriginalTotal(CalculatedDraftOrderLineItemOriginalTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("originalTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotalSet(CalculatedDraftOrderLineItemOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPrice(CalculatedDraftOrderLineItemOriginalUnitPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("originalUnitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceSet(CalculatedDraftOrderLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceWithCurrency(CalculatedDraftOrderLineItemOriginalUnitPriceWithCurrencyArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("originalUnitPriceWithCurrency");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceOverride(CalculatedDraftOrderLineItemPriceOverrideArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("priceOverride");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(CalculatedDraftOrderLineItemProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectRequiresShipping()
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    public function selectSku()
    {
        $this->selectField("sku");

        return $this;
    }

    public function selectTaxable()
    {
        $this->selectField("taxable");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectTotalDiscount(CalculatedDraftOrderLineItemTotalDiscountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDiscountSet(CalculatedDraftOrderLineItemTotalDiscountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalDiscountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUuid()
    {
        $this->selectField("uuid");

        return $this;
    }

    public function selectVariant(CalculatedDraftOrderLineItemVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariantTitle()
    {
        $this->selectField("variantTitle");

        return $this;
    }

    public function selectVendor()
    {
        $this->selectField("vendor");

        return $this;
    }

    public function selectWeight(CalculatedDraftOrderLineItemWeightArgumentsObject $argsObject = null)
    {
        $object = new WeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
