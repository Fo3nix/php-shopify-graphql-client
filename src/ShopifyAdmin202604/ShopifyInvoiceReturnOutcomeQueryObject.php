<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInvoiceReturnOutcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InvoiceReturnOutcome";

    public function selectAmount(ShopifyInvoiceReturnOutcomeAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
