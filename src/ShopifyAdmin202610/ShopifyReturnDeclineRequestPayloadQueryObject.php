<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `returnDeclineRequest` mutation.
 */
class ShopifyReturnDeclineRequestPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnDeclineRequestPayload";

    /**
     * The declined return.
     */
    public function selectReturn(?ShopifyReturnDeclineRequestPayloadReturnArgumentsObject $argsObject = null): ShopifyReturnQueryObject
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
    public function selectUserErrors(?ShopifyReturnDeclineRequestPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyReturnUserErrorQueryObject
    {
        $object = new ShopifyReturnUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
