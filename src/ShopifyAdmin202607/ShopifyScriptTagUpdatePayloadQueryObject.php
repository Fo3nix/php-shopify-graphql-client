<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `scriptTagUpdate` mutation.
 */
class ShopifyScriptTagUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ScriptTagUpdatePayload";

    /**
     * The script tag that was updated.
     */
    public function selectScriptTag(?ShopifyScriptTagUpdatePayloadScriptTagArgumentsObject $argsObject = null): ShopifyScriptTagQueryObject
    {
        $object = new ShopifyScriptTagQueryObject("scriptTag");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyScriptTagUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
