<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderCreate` mutation.
 */
class ShopifyOrderCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCreatePayload";

    /**
     * The order that was created.
     */
    public function selectOrder(?ShopifyOrderCreatePayloadOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
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
    public function selectUserErrors(?ShopifyOrderCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderCreateUserErrorQueryObject
    {
        $object = new ShopifyOrderCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
