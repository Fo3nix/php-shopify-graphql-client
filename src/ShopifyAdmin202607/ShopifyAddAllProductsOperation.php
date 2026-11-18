<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyRowCount;

/**
 * Represents an operation publishing all products to a publication.
 */
class ShopifyAddAllProductsOperation implements ShopifyNode, ShopifyResourceOperation
{
    protected $id;
    protected $processedRowCount;
    protected $rowCount;
    protected $status;

    
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
     * The count of processed rows, summing imported, failed, and skipped rows.
     *
     * @return int
     */
    public function getProcessedRowCount(): ?int
    {
        return $this->processedRowCount;
    }

    
    /**
     * Represents a rows objects within this background operation.
     *
     * @return ShopifyRowCount
     */
    public function getRowCount(): ?ShopifyRowCount
    {
        return $this->rowCount;
    }

    
    /**
     * The status of this operation.
     *
     * @return string A ShopifyResourceOperationStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['processedRowCount']) && $data['processedRowCount'] !== null) {
                $instance->processedRowCount = $data['processedRowCount'];
            }
            if (isset($data['rowCount']) && $data['rowCount'] !== null) {
                $instance->rowCount = ShopifyRowCount::fromArray($data['rowCount']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->processedRowCount !== null) {
                $data['processedRowCount'] = $this->processedRowCount;
            }
            if ($this->rowCount !== null) {
                $data['rowCount'] = $this->rowCount->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
