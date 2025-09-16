<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DraftOrderAppliedDiscountQueryObject extends QueryObject
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

    public function selectAmountSet(DraftOrderAppliedDiscountAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmountV2(DraftOrderAppliedDiscountAmountV2ArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amountV2");
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
