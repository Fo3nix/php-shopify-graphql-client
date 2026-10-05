<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedRequestedOrderEditQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRequestedOrderEdit";

    public function selectFinancialSummary(ShopifyCalculatedRequestedOrderEditFinancialSummaryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditFinancialSummaryQueryObject("financialSummary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItems(ShopifyCalculatedRequestedOrderEditLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedRequestedOrderEditLineItemsQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
