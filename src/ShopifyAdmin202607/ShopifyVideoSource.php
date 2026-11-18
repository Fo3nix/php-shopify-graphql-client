<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Represents a source for a Shopify hosted video.
 *
 * Types of sources include the original video, lower resolution versions of the original video,
 * and an m3u8 playlist file.
 *
 * Only [videos](https://shopify.dev/api/admin-graphql/latest/objects/video) with a status field
 * of [READY](https://shopify.dev/api/admin-graphql/latest/enums/MediaStatus#value-ready) have sources.
 */
class ShopifyVideoSource
{
    protected $fileSize;
    protected $format;
    protected $height;
    protected $mimeType;
    protected $url;
    protected $width;

    
    /**
     * The video source's file size in bytes.
     *
     * @return int
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    
    /**
     * The video source's file format extension.
     *
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    
    /**
     * The video source's height.
     *
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    
    /**
     * The video source's MIME type.
     *
     * @return string
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    
    /**
     * The video source's URL.
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    
    /**
     * The video source's width.
     *
     * @return int
     */
    public function getWidth(): ?int
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
