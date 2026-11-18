<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about the staged target.
 *
 * Deprecated in favor of
 * [StagedMediaUploadTarget](https://shopify.dev/api/admin-graphql/latest/objects/StagedMediaUploadTarget),
 * which is returned by the
 * [stagedUploadsCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/stagedUploadsCreate).
 */
class ShopifyStagedUploadTargetQueryObject extends QueryObject
{
    const OBJECT_NAME = "StagedUploadTarget";

    /**
     * The parameters of an image to be uploaded.
     */
    public function selectParameters(?ShopifyStagedUploadTargetParametersArgumentsObject $argsObject = null): ShopifyImageUploadParameterQueryObject
    {
        $object = new ShopifyImageUploadParameterQueryObject("parameters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The image URL.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
