<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pageUpdate` mutation.
 */
class ShopifyPageUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PageUpdatePayload";

    /**
     * The page that was updated.
     */
    public function selectPage(?ShopifyPageUpdatePayloadPageArgumentsObject $argsObject = null): ShopifyPageQueryObject
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
    public function selectUserErrors(?ShopifyPageUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPageUpdateUserErrorQueryObject
    {
        $object = new ShopifyPageUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
