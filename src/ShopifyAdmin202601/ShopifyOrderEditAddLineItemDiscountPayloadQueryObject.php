<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderEditAddLineItemDiscount` mutation.
 */
class ShopifyOrderEditAddLineItemDiscountPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditAddLineItemDiscountPayload";

    /**
     * The discount applied to a line item during this order edit.
     */
    public function selectAddedDiscountStagedChange(?ShopifyOrderEditAddLineItemDiscountPayloadAddedDiscountStagedChangeArgumentsObject $argsObject = null): ShopifyOrderStagedChangeAddLineItemDiscountQueryObject
    {
        $object = new ShopifyOrderStagedChangeAddLineItemDiscountQueryObject("addedDiscountStagedChange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The line item with the edits applied but not saved.
     */
    public function selectCalculatedLineItem(?ShopifyOrderEditAddLineItemDiscountPayloadCalculatedLineItemArgumentsObject $argsObject = null): ShopifyCalculatedLineItemQueryObject
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
    public function selectCalculatedOrder(?ShopifyOrderEditAddLineItemDiscountPayloadCalculatedOrderArgumentsObject $argsObject = null): ShopifyCalculatedOrderQueryObject
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
    public function selectOrderEditSession(?ShopifyOrderEditAddLineItemDiscountPayloadOrderEditSessionArgumentsObject $argsObject = null): ShopifyOrderEditSessionQueryObject
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
    public function selectUserErrors(?ShopifyOrderEditAddLineItemDiscountPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
