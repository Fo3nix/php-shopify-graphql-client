<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `stagedUploadTargetsGenerate` mutation.
 */
class ShopifyStagedUploadTargetsGeneratePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "StagedUploadTargetsGeneratePayload";

    /**
     * The staged upload targets that were generated.
     */
    public function selectUrls(?ShopifyStagedUploadTargetsGeneratePayloadUrlsArgumentsObject $argsObject = null): ShopifyStagedUploadTargetQueryObject
    {
        $object = new ShopifyStagedUploadTargetQueryObject("urls");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyStagedUploadTargetsGeneratePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
