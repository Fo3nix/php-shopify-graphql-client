<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderEditUpdateDiscount` mutation.
 */
class ShopifyOrderEditUpdateDiscountPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditUpdateDiscountPayload";

    /**
     * An order with the edits applied but not saved.
     */
    public function selectCalculatedOrder(?ShopifyOrderEditUpdateDiscountPayloadCalculatedOrderArgumentsObject $argsObject = null): ShopifyCalculatedOrderQueryObject
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
    public function selectOrderEditSession(?ShopifyOrderEditUpdateDiscountPayloadOrderEditSessionArgumentsObject $argsObject = null): ShopifyOrderEditSessionQueryObject
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
    public function selectUserErrors(?ShopifyOrderEditUpdateDiscountPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderEditUpdateDiscountUserErrorQueryObject
    {
        $object = new ShopifyOrderEditUpdateDiscountUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
