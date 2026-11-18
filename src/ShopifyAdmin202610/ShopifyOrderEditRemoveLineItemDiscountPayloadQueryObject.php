<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderEditRemoveLineItemDiscount` mutation.
 */
class ShopifyOrderEditRemoveLineItemDiscountPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditRemoveLineItemDiscountPayload";

    /**
     * The calculated line item after removal of the discount.
     */
    public function selectCalculatedLineItem(?ShopifyOrderEditRemoveLineItemDiscountPayloadCalculatedLineItemArgumentsObject $argsObject = null): ShopifyCalculatedLineItemQueryObject
    {
        $object = new ShopifyCalculatedLineItemQueryObject("calculatedLineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An order with the edits applied but not saved.
     */
    public function selectCalculatedOrder(?ShopifyOrderEditRemoveLineItemDiscountPayloadCalculatedOrderArgumentsObject $argsObject = null): ShopifyCalculatedOrderQueryObject
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
    public function selectOrderEditSession(?ShopifyOrderEditRemoveLineItemDiscountPayloadOrderEditSessionArgumentsObject $argsObject = null): ShopifyOrderEditSessionQueryObject
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
    public function selectUserErrors(?ShopifyOrderEditRemoveLineItemDiscountPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
