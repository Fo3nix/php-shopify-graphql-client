<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `returnLineItemRemoveFromReturn` mutation.
 */
class ShopifyReturnLineItemRemoveFromReturnPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnLineItemRemoveFromReturnPayload";

    /**
     * The modified return.
     */
    public function selectReturn(?ShopifyReturnLineItemRemoveFromReturnPayloadReturnArgumentsObject $argsObject = null): ShopifyReturnQueryObject
    {
        $object = new ShopifyReturnQueryObject("return");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyReturnLineItemRemoveFromReturnPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyReturnUserErrorQueryObject
    {
        $object = new ShopifyReturnUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
