<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\RowCount;

class PublicationResourceOperation
{
    protected $id;
    protected $processedRowCount;
    protected $rowCount;
    protected $status;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return int
     */
    public function getProcessedRowCount()
    {
        return $this->processedRowCount;
    }

    
    /**
     * @return RowCount
     */
    public function getRowCount()
    {
        return $this->rowCount;
    }

    
    /**
     * @return ResourceOperationStatusEnumObject
     */
    public function getStatus()
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
                $instance->rowCount = RowCount::fromArray($data['rowCount']);
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
