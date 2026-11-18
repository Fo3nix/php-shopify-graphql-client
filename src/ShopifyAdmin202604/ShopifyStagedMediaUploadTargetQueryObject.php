<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about a staged upload target, which should be used to send a request to upload
 * the file.
 *
 * For more information on the upload process, refer to
 * [Upload media to Shopify](https://shopify.dev/apps/online-store/media/products#step-1-upload-media-to-shopify).
 */
class ShopifyStagedMediaUploadTargetQueryObject extends QueryObject
{
    const OBJECT_NAME = "StagedMediaUploadTarget";

    /**
     * Parameters needed to authenticate a request to upload the file.
     */
    public function selectParameters(?ShopifyStagedMediaUploadTargetParametersArgumentsObject $argsObject = null): ShopifyStagedUploadParameterQueryObject
    {
        $object = new ShopifyStagedUploadParameterQueryObject("parameters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL to be passed as `originalSource` in
     * [CreateMediaInput](https://shopify.dev/api/admin-graphql/latest/input-objects/CreateMediaInput)
     * and [FileCreateInput](https://shopify.dev/api/admin-graphql/2022-04/input-objects/FileCreateInput)
     * for the [productCreateMedia](https://shopify.dev/api/admin-graphql/2022-04/mutations/productCreateMedia)
     * and [fileCreate](https://shopify.dev/api/admin-graphql/2022-04/mutations/fileCreate)
     * mutations.
     */
    public function selectResourceUrl(): static
    {
        $this->selectField("resourceUrl");

        return $this;
    }

    /**
     * The URL to use when sending an request to upload the file. Should be used in conjunction with
     * the parameters field.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
