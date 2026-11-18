<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderCancel` mutation.
 */
class ShopifyOrderCancelPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCancelPayload";

    /**
     * The job that asynchronously cancels the order.
     */
    public function selectJob(?ShopifyOrderCancelPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectOrderCancelUserErrors(?ShopifyOrderCancelPayloadOrderCancelUserErrorsArgumentsObject $argsObject = null): ShopifyOrderCancelUserErrorQueryObject
    {
        $object = new ShopifyOrderCancelUserErrorQueryObject("orderCancelUserErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @deprecated Use `orderCancelUserErrors` instead.
     */
    public function selectUserErrors(?ShopifyOrderCancelPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
