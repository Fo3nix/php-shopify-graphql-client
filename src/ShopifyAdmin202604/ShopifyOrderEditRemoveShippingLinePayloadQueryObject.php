<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderEditRemoveShippingLine` mutation.
 */
class ShopifyOrderEditRemoveShippingLinePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditRemoveShippingLinePayload";

    /**
     * The [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * with the edits applied but not saved.
     */
    public function selectCalculatedOrder(?ShopifyOrderEditRemoveShippingLinePayloadCalculatedOrderArgumentsObject $argsObject = null): ShopifyCalculatedOrderQueryObject
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
    public function selectOrderEditSession(?ShopifyOrderEditRemoveShippingLinePayloadOrderEditSessionArgumentsObject $argsObject = null): ShopifyOrderEditSessionQueryObject
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
    public function selectUserErrors(?ShopifyOrderEditRemoveShippingLinePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderEditRemoveShippingLineUserErrorQueryObject
    {
        $object = new ShopifyOrderEditRemoveShippingLineUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
