<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The parameters required to authenticate a file upload request using a
 * [StagedMediaUploadTarget's url field](https://shopify.dev/api/admin-graphql/latest/objects/StagedMediaUploadTarget#field-stagedmediauploadtarget-url).
 *
 * For more information on the upload process, refer to
 * [Upload media to Shopify](https://shopify.dev/apps/online-store/media/products#step-1-upload-media-to-shopify).
 */
class ShopifyStagedUploadParameterQueryObject extends QueryObject
{
    const OBJECT_NAME = "StagedUploadParameter";

    /**
     * The parameter's name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The parameter's value.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
