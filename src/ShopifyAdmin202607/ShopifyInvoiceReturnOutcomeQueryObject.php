<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The financial transfer details for a return outcome that results in an invoice.
 */
class ShopifyInvoiceReturnOutcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InvoiceReturnOutcome";

    /**
     * The total monetary value to be invoiced in shop and presentment currencies.
     */
    public function selectAmount(?ShopifyInvoiceReturnOutcomeAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
