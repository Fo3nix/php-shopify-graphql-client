<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `scriptTagCreate` mutation.
 */
class ShopifyScriptTagCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ScriptTagCreatePayload";

    /**
     * The script tag that was created.
     */
    public function selectScriptTag(?ShopifyScriptTagCreatePayloadScriptTagArgumentsObject $argsObject = null): ShopifyScriptTagQueryObject
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
    public function selectUserErrors(?ShopifyScriptTagCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
