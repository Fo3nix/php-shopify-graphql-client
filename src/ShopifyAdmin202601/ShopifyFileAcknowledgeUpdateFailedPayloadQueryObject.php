<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fileAcknowledgeUpdateFailed` mutation.
 */
class ShopifyFileAcknowledgeUpdateFailedPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FileAcknowledgeUpdateFailedPayload";

    /**
     * The updated file(s).
     */
    public function selectFiles(?ShopifyFileAcknowledgeUpdateFailedPayloadFilesArgumentsObject $argsObject = null): ShopifyFileInterfaceObject
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
    public function selectUserErrors(?ShopifyFileAcknowledgeUpdateFailedPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFilesUserErrorQueryObject
    {
        $object = new ShopifyFilesUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
