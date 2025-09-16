<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItem";

    public function selectFinancialSummaries(FulfillmentOrderLineItemFinancialSummariesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLineItemFinancialSummaryQueryObject("financialSummaries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage(FulfillmentOrderLineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryItemId()
    {
        $this->selectField("inventoryItemId");

        return $this;
    }

    public function selectLineItem(FulfillmentOrderLineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new LineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `financialSummaries` instead.
     */
    public function selectOriginalUnitPriceSet(FulfillmentOrderLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductTitle()
    {
        $this->selectField("productTitle");

        return $this;
    }

    public function selectRemainingQuantity()
    {
        $this->selectField("remainingQuantity");

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

    public function selectTotalQuantity()
    {
        $this->selectField("totalQuantity");

        return $this;
    }

    public function selectVariant(FulfillmentOrderLineItemVariantArgumentsObject $argsObject = null)
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

    public function selectWarnings(FulfillmentOrderLineItemWarningsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLineItemWarningQueryObject("warnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWeight(FulfillmentOrderLineItemWeightArgumentsObject $argsObject = null)
    {
        $object = new WeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
