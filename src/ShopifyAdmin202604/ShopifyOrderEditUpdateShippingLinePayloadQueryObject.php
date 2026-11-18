<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderEditUpdateShippingLine` mutation.
 */
class ShopifyOrderEditUpdateShippingLinePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditUpdateShippingLinePayload";

    /**
     * An order with the edits applied but not saved.
     */
    public function selectCalculatedOrder(?ShopifyOrderEditUpdateShippingLinePayloadCalculatedOrderArgumentsObject $argsObject = null): ShopifyCalculatedOrderQueryObject
    {
        $object = new ShopifyCalculatedOrderQueryObject("calculatedOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order edit session with the edits applied but not saved.
     */
    public function selectOrderEditSession(?ShopifyOrderEditUpdateShippingLinePayloadOrderEditSessionArgumentsObject $argsObject = null): ShopifyOrderEditSessionQueryObject
    {
        $object = new ShopifyOrderEditSessionQueryObject("orderEditSession");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderEditUpdateShippingLinePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderEditUpdateShippingLineUserErrorQueryObject
    {
        $object = new ShopifyOrderEditUpdateShippingLineUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
