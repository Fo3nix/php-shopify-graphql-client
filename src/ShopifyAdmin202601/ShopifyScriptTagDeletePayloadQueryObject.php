<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `scriptTagDelete` mutation.
 */
class ShopifyScriptTagDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ScriptTagDeletePayload";

    /**
     * The ID of the deleted script tag.
     */
    public function selectDeletedScriptTagId(): static
    {
        $this->selectField("deletedScriptTagId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyScriptTagDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
