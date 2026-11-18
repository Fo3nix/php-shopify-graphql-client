<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fileDelete` mutation.
 */
class ShopifyFileDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FileDeletePayload";

    /**
     * The IDs of the deleted files.
     */
    public function selectDeletedFileIds(): static
    {
        $this->selectField("deletedFileIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFileDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFilesUserErrorQueryObject
    {
        $object = new ShopifyFilesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
