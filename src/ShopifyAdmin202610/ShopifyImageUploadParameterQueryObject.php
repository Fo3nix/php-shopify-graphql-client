<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A parameter to upload an image.
 *
 * Deprecated in favor of
 * [StagedUploadParameter](https://shopify.dev/api/admin-graphql/latest/objects/StagedUploadParameter),
 * which is used in
 * [StagedMediaUploadTarget](https://shopify.dev/api/admin-graphql/latest/objects/StagedMediaUploadTarget)
 * and returned by the
 * [stagedUploadsCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/stagedUploadsCreate).
 */
class ShopifyImageUploadParameterQueryObject extends QueryObject
{
    const OBJECT_NAME = "ImageUploadParameter";

    /**
     * The parameter name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The parameter value.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
