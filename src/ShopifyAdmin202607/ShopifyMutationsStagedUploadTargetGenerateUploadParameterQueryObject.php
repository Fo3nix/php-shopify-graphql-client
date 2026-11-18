<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A signed upload parameter for uploading an asset to Shopify.
 *
 * Deprecated in favor of
 * [StagedUploadParameter](https://shopify.dev/api/admin-graphql/latest/objects/StagedUploadParameter),
 * which is used in
 * [StagedMediaUploadTarget](https://shopify.dev/api/admin-graphql/latest/objects/StagedMediaUploadTarget)
 * and returned by the
 * [stagedUploadsCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/stagedUploadsCreate).
 */
class ShopifyMutationsStagedUploadTargetGenerateUploadParameterQueryObject extends QueryObject
{
    const OBJECT_NAME = "MutationsStagedUploadTargetGenerateUploadParameter";

    /**
     * The upload parameter name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The upload parameter value.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
