<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An asynchronous operation that exports large datasets or imports data in bulk. Create bulk operations using [bulkOperationRunQuery](https://shopify.dev/docs/api/admin-graphql/latest/mutations/bulkOperationRunQuery) to export data or [bulkOperationRunMutation](https://shopify.dev/docs/api/admin-graphql/latest/mutations/bulkOperationRunMutation) to import data.
 *
 * After creation, check the [`status`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BulkOperation#field-BulkOperation.fields.status) field to track progress. When completed, the [`url`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BulkOperation#field-BulkOperation.fields.url) field contains a link to download results in [JSONL](http://jsonlines.org/) format. The [`objectCount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BulkOperation#field-BulkOperation.fields.objectCount) field shows the running total of processed objects, while [`rootObjectCount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BulkOperation#field-BulkOperation.fields.rootObjectCount) tracks only root-level objects in nested queries.
 *
 * If an operation fails but retrieves partial data, then the [`partialDataUrl`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BulkOperation#field-BulkOperation.fields.partialDataUrl) field provides access to incomplete results.
 *
 * > Note: `url` and `partialDataUrl` values expire after seven days.
 *
 * Learn more about [exporting](https://shopify.dev/docs/api/usage/bulk-operations/queries) and [importing](https://shopify.dev/docs/api/usage/bulk-operations/imports) data in bulk.
 */
class ShopifyBulkOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "BulkOperation";

    /**
     * When the bulk operation was successfully completed.
     */
    public function selectCompletedAt(): static
    {
        $this->selectField("completedAt");

        return $this;
    }

    /**
     * When the bulk operation was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Error code for failed operations.
     */
    public function selectErrorCode(): static
    {
        $this->selectField("errorCode");

        return $this;
    }

    /**
     * File size in bytes of the file in the `url` field.
     */
    public function selectFileSize(): static
    {
        $this->selectField("fileSize");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * A running count of all the objects processed.
     * For example, when fetching all the products and their variants, this field counts both products and variants.
     * This field can be used to track operation progress.
     */
    public function selectObjectCount(): static
    {
        $this->selectField("objectCount");

        return $this;
    }

    /**
     * The URL that points to the partial or incomplete response data (in [JSONL](http://jsonlines.org/) format) that was returned by a failed operation.
     * The URL expires 7 days after the operation fails. Returns `null` when there's no data available.
     */
    public function selectPartialDataUrl(): static
    {
        $this->selectField("partialDataUrl");

        return $this;
    }

    /**
     * A running count of all the objects that are processed at the root of the query.
     * For example, when fetching all the products and their variants, this field only counts products.
     * This field can be used to track operation progress.
     */
    public function selectRootObjectCount(): static
    {
        $this->selectField("rootObjectCount");

        return $this;
    }

    /**
     * Status of the bulk operation.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The bulk operation's type.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The URL that points to the response data in [JSONL](http://jsonlines.org/) format.
     * The URL expires 7 days after the operation completes.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
