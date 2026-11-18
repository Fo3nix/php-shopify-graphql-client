<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pageCreate` mutation.
 */
class ShopifyPageCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PageCreatePayload";

    /**
     * The page that was created.
     */
    public function selectPage(?ShopifyPageCreatePayloadPageArgumentsObject $argsObject = null): ShopifyPageQueryObject
    {
        $object = new ShopifyPageQueryObject("page");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPageCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPageCreateUserErrorQueryObject
    {
        $object = new ShopifyPageCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
