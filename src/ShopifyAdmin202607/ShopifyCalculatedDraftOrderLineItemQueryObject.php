<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedDraftOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedDraftOrderLineItem";

    public function selectAppliedDiscount(ShopifyCalculatedDraftOrderLineItemAppliedDiscountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderAppliedDiscountQueryObject("appliedDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApproximateDiscountedUnitPriceSet(ShopifyCalculatedDraftOrderLineItemApproximateDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("approximateDiscountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `components` instead.
     */
    public function selectBundleComponents(ShopifyCalculatedDraftOrderLineItemBundleComponentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedDraftOrderLineItemQueryObject("bundleComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComponents(ShopifyCalculatedDraftOrderLineItemComponentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedDraftOrderLineItemQueryObject("components");
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

    public function selectCustomAttributes(ShopifyCalculatedDraftOrderLineItemCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomAttributesV2(ShopifyCalculatedDraftOrderLineItemCustomAttributesV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTypedAttributeQueryObject("customAttributesV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedTotal(ShopifyCalculatedDraftOrderLineItemDiscountedTotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("discountedTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedTotalSet(ShopifyCalculatedDraftOrderLineItemDiscountedTotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `approximateDiscountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPrice(ShopifyCalculatedDraftOrderLineItemDiscountedUnitPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("discountedUnitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `approximateDiscountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPriceSet(ShopifyCalculatedDraftOrderLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentService(ShopifyCalculatedDraftOrderLineItemFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectImage(ShopifyCalculatedDraftOrderLineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
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

    public function selectOriginalTotal(ShopifyCalculatedDraftOrderLineItemOriginalTotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("originalTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotalSet(ShopifyCalculatedDraftOrderLineItemOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPrice(ShopifyCalculatedDraftOrderLineItemOriginalUnitPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("originalUnitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceSet(ShopifyCalculatedDraftOrderLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceWithCurrency(ShopifyCalculatedDraftOrderLineItemOriginalUnitPriceWithCurrencyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("originalUnitPriceWithCurrency");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceOverride(ShopifyCalculatedDraftOrderLineItemPriceOverrideArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("priceOverride");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(ShopifyCalculatedDraftOrderLineItemProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
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

    public function selectTotalDiscount(ShopifyCalculatedDraftOrderLineItemTotalDiscountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDiscountSet(ShopifyCalculatedDraftOrderLineItemTotalDiscountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountSet");
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

    public function selectVariant(ShopifyCalculatedDraftOrderLineItemVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("variant");
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

    public function selectWeight(ShopifyCalculatedDraftOrderLineItemWeightArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
