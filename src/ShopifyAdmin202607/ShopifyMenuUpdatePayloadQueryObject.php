<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `menuUpdate` mutation.
 */
class ShopifyMenuUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MenuUpdatePayload";

    /**
     * The updated menu.
     */
    public function selectMenu(?ShopifyMenuUpdatePayloadMenuArgumentsObject $argsObject = null): ShopifyMenuQueryObject
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
    public function selectUserErrors(?ShopifyMenuUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMenuUpdateUserErrorQueryObject
    {
        $object = new ShopifyMenuUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
