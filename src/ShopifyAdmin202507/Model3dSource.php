<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class Model3dSource
{
    protected $filesize;
    protected $format;
    protected $mimeType;
    protected $url;

    
    /**
     * @return int
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    
    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['filesize']) && $data['filesize'] !== null) {
                $instance->filesize = $data['filesize'];
            }
            if (isset($data['format']) && $data['format'] !== null) {
                $instance->format = $data['format'];
            }
            if (isset($data['mimeType']) && $data['mimeType'] !== null) {
                $instance->mimeType = $data['mimeType'];
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
            if ($this->filesize !== null) {
                $data['filesize'] = $this->filesize;
            }
            if ($this->format !== null) {
                $data['format'] = $this->format;
            }
            if ($this->mimeType !== null) {
                $data['mimeType'] = $this->mimeType;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
