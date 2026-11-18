<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;

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
class ShopifyBulkOperation implements ShopifyNode
{
    protected $completedAt;
    protected $createdAt;
    protected $errorCode;
    protected $fileSize;
    protected $id;
    protected $objectCount;
    protected $partialDataUrl;
    protected $rootObjectCount;
    protected $status;
    protected $type;
    protected $url;

    
    /**
     * When the bulk operation was successfully completed.
     *
     * @return Carbon
     */
    public function getCompletedAt(): ?Carbon
    {
        return $this->completedAt;
    }

    
    /**
     * When the bulk operation was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Error code for failed operations.
     *
     * @return string A ShopifyBulkOperationErrorCodeEnumObject value
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    
    /**
     * File size in bytes of the file in the `url` field.
     *
     * @return string
     */
    public function getFileSize(): mixed
    {
        return $this->fileSize;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * A running count of all the objects processed.
     * For example, when fetching all the products and their variants, this field counts both products and variants.
     * This field can be used to track operation progress.
     *
     * @return string
     */
    public function getObjectCount(): mixed
    {
        return $this->objectCount;
    }

    
    /**
     * The URL that points to the partial or incomplete response data (in [JSONL](http://jsonlines.org/) format) that was returned by a failed operation.
     * The URL expires 7 days after the operation fails. Returns `null` when there's no data available.
     *
     * @return string
     */
    public function getPartialDataUrl(): mixed
    {
        return $this->partialDataUrl;
    }

    
    /**
     * A running count of all the objects that are processed at the root of the query.
     * For example, when fetching all the products and their variants, this field only counts products.
     * This field can be used to track operation progress.
     *
     * @return string
     */
    public function getRootObjectCount(): mixed
    {
        return $this->rootObjectCount;
    }

    
    /**
     * Status of the bulk operation.
     *
     * @return string A ShopifyBulkOperationStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The bulk operation's type.
     *
     * @return string A ShopifyBulkOperationTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The URL that points to the response data in [JSONL](http://jsonlines.org/) format.
     * The URL expires 7 days after the operation completes.
     *
     * @return string
     */
    public function getUrl(): mixed
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['completedAt']) && $data['completedAt'] !== null) {
                $instance->completedAt = new Carbon($data['completedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['errorCode']) && $data['errorCode'] !== null) {
                $instance->errorCode = $data['errorCode'];
            }
            if (isset($data['fileSize']) && $data['fileSize'] !== null) {
                $instance->fileSize = $data['fileSize'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['objectCount']) && $data['objectCount'] !== null) {
                $instance->objectCount = $data['objectCount'];
            }
            if (isset($data['partialDataUrl']) && $data['partialDataUrl'] !== null) {
                $instance->partialDataUrl = $data['partialDataUrl'];
            }
            if (isset($data['rootObjectCount']) && $data['rootObjectCount'] !== null) {
                $instance->rootObjectCount = $data['rootObjectCount'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->completedAt !== null) {
                $data['completedAt'] = $this->completedAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->errorCode !== null) {
                $data['errorCode'] = $this->errorCode;
            }
            if ($this->fileSize !== null) {
                $data['fileSize'] = $this->fileSize;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->objectCount !== null) {
                $data['objectCount'] = $this->objectCount;
            }
            if ($this->partialDataUrl !== null) {
                $data['partialDataUrl'] = $this->partialDataUrl;
            }
            if ($this->rootObjectCount !== null) {
                $data['rootObjectCount'] = $this->rootObjectCount;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
