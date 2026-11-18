<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `stagedUploadsCreate` mutation.
 */
class ShopifyStagedUploadsCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "StagedUploadsCreatePayload";

    /**
     * The staged upload targets that were generated.
     */
    public function selectStagedTargets(?ShopifyStagedUploadsCreatePayloadStagedTargetsArgumentsObject $argsObject = null): ShopifyStagedMediaUploadTargetQueryObject
    {
        $object = new ShopifyStagedMediaUploadTargetQueryObject("stagedTargets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyStagedUploadsCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
