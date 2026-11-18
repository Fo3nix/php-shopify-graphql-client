<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `menuCreate` mutation.
 */
class ShopifyMenuCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MenuCreatePayload";

    /**
     * The created menu.
     */
    public function selectMenu(?ShopifyMenuCreatePayloadMenuArgumentsObject $argsObject = null): ShopifyMenuQueryObject
    {
        $object = new ShopifyMenuQueryObject("menu");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMenuCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMenuCreateUserErrorQueryObject
    {
        $object = new ShopifyMenuCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
