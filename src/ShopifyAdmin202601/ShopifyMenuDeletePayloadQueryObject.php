<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `menuDelete` mutation.
 */
class ShopifyMenuDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MenuDeletePayload";

    /**
     * The ID of the deleted menu.
     */
    public function selectDeletedMenuId(): static
    {
        $this->selectField("deletedMenuId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMenuDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMenuDeleteUserErrorQueryObject
    {
        $object = new ShopifyMenuDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
