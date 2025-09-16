<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RefundShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundShippingLine";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectShippingLine(RefundShippingLineShippingLineArgumentsObject $argsObject = null)
    {
        $object = new ShippingLineQueryObject("shippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalAmountSet(RefundShippingLineSubtotalAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxAmountSet(RefundShippingLineTaxAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("taxAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
