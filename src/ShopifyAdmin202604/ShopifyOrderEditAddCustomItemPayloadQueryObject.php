<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderEditAddCustomItem` mutation.
 */
class ShopifyOrderEditAddCustomItemPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditAddCustomItemPayload";

    /**
     * The custom line item that will be added to the order based on the current edits.
     */
    public function selectCalculatedLineItem(?ShopifyOrderEditAddCustomItemPayloadCalculatedLineItemArgumentsObject $argsObject = null): ShopifyCalculatedLineItemQueryObject
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
    public function selectCalculatedOrder(?ShopifyOrderEditAddCustomItemPayloadCalculatedOrderArgumentsObject $argsObject = null): ShopifyCalculatedOrderQueryObject
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
    public function selectOrderEditSession(?ShopifyOrderEditAddCustomItemPayloadOrderEditSessionArgumentsObject $argsObject = null): ShopifyOrderEditSessionQueryObject
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
    public function selectUserErrors(?ShopifyOrderEditAddCustomItemPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
