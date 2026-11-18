<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fileCreate` mutation.
 */
class ShopifyFileCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FileCreatePayload";

    /**
     * The newly created files.
     */
    public function selectFiles(?ShopifyFileCreatePayloadFilesArgumentsObject $argsObject = null): ShopifyFileInterfaceObject
    {
        $object = new ShopifyFileInterfaceObject("files");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFileCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFilesUserErrorQueryObject
    {
        $object = new ShopifyFilesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
