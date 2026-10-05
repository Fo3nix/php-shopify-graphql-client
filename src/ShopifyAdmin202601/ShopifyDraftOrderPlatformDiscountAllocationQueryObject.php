<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDraftOrderPlatformDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderPlatformDiscountAllocation";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectReductionAmount(ShopifyDraftOrderPlatformDiscountAllocationReductionAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("reductionAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReductionAmountSet(ShopifyDraftOrderPlatformDiscountAllocationReductionAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("reductionAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTarget(ShopifyDraftOrderPlatformDiscountAllocationTargetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderPlatformDiscountAllocationTargetUnionObject("target");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
