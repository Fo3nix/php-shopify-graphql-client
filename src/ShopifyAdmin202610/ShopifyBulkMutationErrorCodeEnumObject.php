<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `BulkMutationUserError`.
 */
class ShopifyBulkMutationErrorCodeEnumObject extends EnumObject
{
    /**
     * The operation did not run because another bulk mutation is already running. [Wait for the operation to finish](https://shopify.dev/api/usage/bulk-operations/imports#wait-for-the-operation-to-finish) before retrying this operation.
     */
    const OPERATION_IN_PROGRESS = "OPERATION_IN_PROGRESS";
    /**
     * The operation did not run because the mutation is invalid. Check your mutation syntax and try again.
     */
    const INVALID_MUTATION = "INVALID_MUTATION";
    /**
     * The JSONL file submitted via the `stagedUploadsCreate` mutation is invalid. Update the file and try again.
     */
    const INVALID_STAGED_UPLOAD_FILE = "INVALID_STAGED_UPLOAD_FILE";
    /**
     * The JSONL file could not be found. Try [uploading the file](https://shopify.dev/api/usage/bulk-operations/imports#generate-the-uploaded-url-and-parameters) again, and check that you've entered the URL correctly for the `stagedUploadPath` mutation argument.
     */
    const NO_SUCH_FILE = "NO_SUCH_FILE";
    /**
     * There was a problem reading the JSONL file. This error might be intermittent, so you can try performing the same query again.
     */
    const INTERNAL_FILE_SERVER_ERROR = "INTERNAL_FILE_SERVER_ERROR";
    /**
     * Bulk operations limit reached. Please try again later.
     */
    const LIMIT_REACHED = "LIMIT_REACHED";
}
