<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\UrlRedirectImportPreview;

class UrlRedirectImport
{
    protected $count;
    protected $createdCount;
    protected $failedCount;
    protected $finished;
    protected $finishedAt;
    protected $id;
    protected $previewRedirects;
    protected $updatedCount;

    
    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    
    /**
     * @return int
     */
    public function getCreatedCount()
    {
        return $this->createdCount;
    }

    
    /**
     * @return int
     */
    public function getFailedCount()
    {
        return $this->failedCount;
    }

    
    /**
     * @return bool
     */
    public function getFinished()
    {
        return $this->finished;
    }

    
    /**
     * @return Carbon
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return UrlRedirectImportPreview[]
     */
    public function getPreviewRedirects()
    {
        return $this->previewRedirects;
    }

    
    /**
     * @return int
     */
    public function getUpdatedCount()
    {
        return $this->updatedCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['count']) && $data['count'] !== null) {
                $instance->count = $data['count'];
            }
            if (isset($data['createdCount']) && $data['createdCount'] !== null) {
                $instance->createdCount = $data['createdCount'];
            }
            if (isset($data['failedCount']) && $data['failedCount'] !== null) {
                $instance->failedCount = $data['failedCount'];
            }
            if (isset($data['finished']) && $data['finished'] !== null) {
                $instance->finished = $data['finished'];
            }
            if (isset($data['finishedAt']) && $data['finishedAt'] !== null) {
                $instance->finishedAt = new Carbon($data['finishedAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['previewRedirects']) && $data['previewRedirects'] !== null) {
                $instance->previewRedirects = array_map(function($item) { return UrlRedirectImportPreview::fromArray($item); }, $data['previewRedirects']);
            }
            if (isset($data['updatedCount']) && $data['updatedCount'] !== null) {
                $instance->updatedCount = $data['updatedCount'];
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
            if ($this->count !== null) {
                $data['count'] = $this->count;
            }
            if ($this->createdCount !== null) {
                $data['createdCount'] = $this->createdCount;
            }
            if ($this->failedCount !== null) {
                $data['failedCount'] = $this->failedCount;
            }
            if ($this->finished !== null) {
                $data['finished'] = $this->finished;
            }
            if ($this->finishedAt !== null) {
                $data['finishedAt'] = $this->finishedAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->previewRedirects !== null) {
                $data['previewRedirects'] = array_map(function($item) { return $item->asArray(); }, $this->previewRedirects);
            }
            if ($this->updatedCount !== null) {
                $data['updatedCount'] = $this->updatedCount;
            }
            return $data;
        }
}
