<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `stagedUploadTargetGenerate` mutation.
 */
class ShopifyStagedUploadTargetGeneratePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "StagedUploadTargetGeneratePayload";

    /**
     * The signed parameters that can be used to upload the asset.
     */
    public function selectParameters(?ShopifyStagedUploadTargetGeneratePayloadParametersArgumentsObject $argsObject = null): ShopifyMutationsStagedUploadTargetGenerateUploadParameterQueryObject
    {
        $object = new ShopifyMutationsStagedUploadTargetGenerateUploadParameterQueryObject("parameters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The signed URL where the asset can be uploaded.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyStagedUploadTargetGeneratePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
