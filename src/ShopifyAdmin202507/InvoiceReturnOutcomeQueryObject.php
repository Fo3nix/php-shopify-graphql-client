<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InvoiceReturnOutcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InvoiceReturnOutcome";

    public function selectAmount(InvoiceReturnOutcomeAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
