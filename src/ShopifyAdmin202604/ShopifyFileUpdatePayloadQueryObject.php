<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fileUpdate` mutation.
 */
class ShopifyFileUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FileUpdatePayload";

    /**
     * The list of updated files.
     */
    public function selectFiles(?ShopifyFileUpdatePayloadFilesArgumentsObject $argsObject = null): ShopifyFileInterfaceObject
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
    public function selectUserErrors(?ShopifyFileUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFilesUserErrorQueryObject
    {
        $object = new ShopifyFilesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
