<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ShopifyPaymentsDisputeFileUpload
{
    protected $disputeEvidenceType;
    protected $fileSize;
    protected $fileType;
    protected $id;
    protected $originalFileName;
    protected $url;

    
    /**
     * @return ShopifyPaymentsDisputeEvidenceFileTypeEnumObject
     */
    public function getDisputeEvidenceType()
    {
        return $this->disputeEvidenceType;
    }

    
    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    
    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
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
    public function getOriginalFileName()
    {
        return $this->originalFileName;
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
            if (isset($data['disputeEvidenceType']) && $data['disputeEvidenceType'] !== null) {
                $instance->disputeEvidenceType = $data['disputeEvidenceType'];
            }
            if (isset($data['fileSize']) && $data['fileSize'] !== null) {
                $instance->fileSize = $data['fileSize'];
            }
            if (isset($data['fileType']) && $data['fileType'] !== null) {
                $instance->fileType = $data['fileType'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['originalFileName']) && $data['originalFileName'] !== null) {
                $instance->originalFileName = $data['originalFileName'];
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
            if ($this->disputeEvidenceType !== null) {
                $data['disputeEvidenceType'] = $this->disputeEvidenceType;
            }
            if ($this->fileSize !== null) {
                $data['fileSize'] = $this->fileSize;
            }
            if ($this->fileType !== null) {
                $data['fileType'] = $this->fileType;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->originalFileName !== null) {
                $data['originalFileName'] = $this->originalFileName;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
