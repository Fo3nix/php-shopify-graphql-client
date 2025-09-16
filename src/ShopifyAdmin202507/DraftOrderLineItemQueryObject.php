<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DraftOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderLineItem";

    public function selectAppliedDiscount(DraftOrderLineItemAppliedDiscountArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderAppliedDiscountQueryObject("appliedDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectApproximateDiscountedUnitPriceSet(DraftOrderLineItemApproximateDiscountedUnitPriceSetArgumentsObject $argsObject = null)
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
    public function selectBundleComponents(DraftOrderLineItemBundleComponentsArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderLineItemQueryObject("bundleComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComponents(DraftOrderLineItemComponentsArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderLineItemQueryObject("components");
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

    public function selectCustomAttributes(DraftOrderLineItemCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomAttributesV2(DraftOrderLineItemCustomAttributesV2ArgumentsObject $argsObject = null)
    {
        $object = new TypedAttributeQueryObject("customAttributesV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `discountedTotalSet` instead.
     */
    public function selectDiscountedTotal()
    {
        $this->selectField("discountedTotal");

        return $this;
    }

    public function selectDiscountedTotalSet(DraftOrderLineItemDiscountedTotalSetArgumentsObject $argsObject = null)
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
    public function selectDiscountedUnitPrice()
    {
        $this->selectField("discountedUnitPrice");

        return $this;
    }

    /**
     * @deprecated Use `approximateDiscountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPriceSet(DraftOrderLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentService(DraftOrderLineItemFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `weight` instead.
     */
    public function selectGrams()
    {
        $this->selectField("grams");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage(DraftOrderLineItemImageArgumentsObject $argsObject = null)
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

    /**
     * @deprecated Use `originalTotalSet` instead.
     */
    public function selectOriginalTotal()
    {
        $this->selectField("originalTotal");

        return $this;
    }

    public function selectOriginalTotalSet(DraftOrderLineItemOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `originalUnitPriceWithCurrency` instead.
     */
    public function selectOriginalUnitPrice()
    {
        $this->selectField("originalUnitPrice");

        return $this;
    }

    public function selectOriginalUnitPriceSet(DraftOrderLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceWithCurrency(DraftOrderLineItemOriginalUnitPriceWithCurrencyArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("originalUnitPriceWithCurrency");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceOverride(DraftOrderLineItemPriceOverrideArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("priceOverride");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(DraftOrderLineItemProductArgumentsObject $argsObject = null)
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

    public function selectTaxLines(DraftOrderLineItemTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    /**
     * @deprecated Use `totalDiscountSet` instead.
     */
    public function selectTotalDiscount()
    {
        $this->selectField("totalDiscount");

        return $this;
    }

    public function selectTotalDiscountSet(DraftOrderLineItemTotalDiscountSetArgumentsObject $argsObject = null)
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

    public function selectVariant(DraftOrderLineItemVariantArgumentsObject $argsObject = null)
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

    public function selectWeight(DraftOrderLineItemWeightArgumentsObject $argsObject = null)
    {
        $object = new WeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
