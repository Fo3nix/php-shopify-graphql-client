<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderCustomerSet` mutation.
 */
class ShopifyOrderCustomerSetPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCustomerSetPayload";

    /**
     * The order that had a customer set.
     */
    public function selectOrder(?ShopifyOrderCustomerSetPayloadOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
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
    public function selectUserErrors(?ShopifyOrderCustomerSetPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderCustomerSetUserErrorQueryObject
    {
        $object = new ShopifyOrderCustomerSetUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
