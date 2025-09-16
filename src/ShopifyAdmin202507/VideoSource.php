<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class VideoSource
{
    protected $fileSize;
    protected $format;
    protected $height;
    protected $mimeType;
    protected $url;
    protected $width;

    
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
    public function getFormat()
    {
        return $this->format;
    }

    
    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    
    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    
    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['fileSize']) && $data['fileSize'] !== null) {
                $instance->fileSize = $data['fileSize'];
            }
            if (isset($data['format']) && $data['format'] !== null) {
                $instance->format = $data['format'];
            }
            if (isset($data['height']) && $data['height'] !== null) {
                $instance->height = $data['height'];
            }
            if (isset($data['mimeType']) && $data['mimeType'] !== null) {
                $instance->mimeType = $data['mimeType'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
            }
            if (isset($data['width']) && $data['width'] !== null) {
                $instance->width = $data['width'];
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
            if ($this->fileSize !== null) {
                $data['fileSize'] = $this->fileSize;
            }
            if ($this->format !== null) {
                $data['format'] = $this->format;
            }
            if ($this->height !== null) {
                $data['height'] = $this->height;
            }
            if ($this->mimeType !== null) {
                $data['mimeType'] = $this->mimeType;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            if ($this->width !== null) {
                $data['width'] = $this->width;
            }
            return $data;
        }
}
