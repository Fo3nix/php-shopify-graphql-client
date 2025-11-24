<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDraftOrderAppliedDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderAppliedDiscount";

    /**
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount()
    {
        $this->selectField("amount");

        return $this;
    }

    public function selectAmountSet(ShopifyDraftOrderAppliedDiscountAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmountV2(ShopifyDraftOrderAppliedDiscountAmountV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amountV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }

    public function selectValueType()
    {
        $this->selectField("valueType");

        return $this;
    }
}
