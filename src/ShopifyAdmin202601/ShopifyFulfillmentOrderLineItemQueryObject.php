<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItem";

    public function selectFinancialSummaries(ShopifyFulfillmentOrderLineItemFinancialSummariesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLineItemFinancialSummaryQueryObject("financialSummaries");
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

    public function selectImage(ShopifyFulfillmentOrderLineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
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

    public function selectLineItem(ShopifyFulfillmentOrderLineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `financialSummaries` instead.
     */
    public function selectOriginalUnitPriceSet(ShopifyFulfillmentOrderLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
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

    public function selectVariant(ShopifyFulfillmentOrderLineItemVariantArgumentsObject $argsObject = null)
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

    public function selectWarnings(ShopifyFulfillmentOrderLineItemWarningsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLineItemWarningQueryObject("warnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWeight(ShopifyFulfillmentOrderLineItemWeightArgumentsObject $argsObject = null)
    {
        $object = new ShopifyWeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
