<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `returnRequest` mutation.
 */
class ShopifyReturnRequestPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnRequestPayload";

    /**
     * The requested return.
     */
    public function selectReturn(?ShopifyReturnRequestPayloadReturnArgumentsObject $argsObject = null): ShopifyReturnQueryObject
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
    public function selectUserErrors(?ShopifyReturnRequestPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyReturnUserErrorQueryObject
    {
        $object = new ShopifyReturnUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
