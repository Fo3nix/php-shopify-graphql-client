<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `taxSummaryCreate` mutation.
 */
class ShopifyTaxSummaryCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxSummaryCreatePayload";

    /**
     * A list of orders that were successfully enqueued to create a tax summary.
     */
    public function selectEnqueuedOrders(?ShopifyTaxSummaryCreatePayloadEnqueuedOrdersArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("enqueuedOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyTaxSummaryCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyTaxSummaryCreateUserErrorQueryObject
    {
        $object = new ShopifyTaxSummaryCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
