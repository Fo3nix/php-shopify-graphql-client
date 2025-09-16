<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class BulkOperation
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
     * @return Carbon
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return BulkOperationErrorCodeEnumObject
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    
    /**
     * @return string
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getObjectCount()
    {
        return $this->objectCount;
    }

    
    /**
     * @return string
     */
    public function getPartialDataUrl()
    {
        return $this->partialDataUrl;
    }

    
    /**
     * @return string
     */
    public function getRootObjectCount()
    {
        return $this->rootObjectCount;
    }

    
    /**
     * @return BulkOperationStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return BulkOperationTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return string
     */
    public function getUrl()
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
