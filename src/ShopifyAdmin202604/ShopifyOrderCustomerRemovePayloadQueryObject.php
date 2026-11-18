<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderCustomerRemove` mutation.
 */
class ShopifyOrderCustomerRemovePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCustomerRemovePayload";

    /**
     * The order that had its customer removed.
     */
    public function selectOrder(?ShopifyOrderCustomerRemovePayloadOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderCustomerRemovePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderCustomerRemoveUserErrorQueryObject
    {
        $object = new ShopifyOrderCustomerRemoveUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
