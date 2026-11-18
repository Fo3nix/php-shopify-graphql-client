<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible HTTP methods that can be used when sending a request to upload a file using information from a
 * [StagedMediaUploadTarget](https://shopify.dev/api/admin-graphql/latest/objects/StagedMediaUploadTarget).
 */
class ShopifyStagedUploadHttpMethodTypeEnumObject extends EnumObject
{
    /**
     * The POST HTTP method.
     */
    const POST = "POST";
    /**
     * The PUT HTTP method.
     */
    const PUT = "PUT";
}
