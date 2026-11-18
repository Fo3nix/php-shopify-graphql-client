<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The calculated financial outcome of a requested order edit based on the line items requested for editing.
 */
class ShopifyCalculatedRequestedOrderEditQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRequestedOrderEdit";

    /**
     * A breakdown of the monetary values for the calculated edit.
     */
    public function selectFinancialSummary(?ShopifyCalculatedRequestedOrderEditFinancialSummaryArgumentsObject $argsObject = null): ShopifyRequestedOrderEditFinancialSummaryQueryObject
    {
        $object = new ShopifyRequestedOrderEditFinancialSummaryQueryObject("financialSummary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The line item changes being processed for a requested order edit, grouped by the type of change.
     */
    public function selectLineItems(?ShopifyCalculatedRequestedOrderEditLineItemsArgumentsObject $argsObject = null): ShopifyCalculatedRequestedOrderEditLineItemsQueryObject
    {
        $object = new ShopifyCalculatedRequestedOrderEditLineItemsQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
