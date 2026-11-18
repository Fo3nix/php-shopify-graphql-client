<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A source for a Shopify-hosted 3d model.
 *
 * Types of sources include GLB and USDZ formatted 3d models, where the former
 * is an original 3d model and the latter has been converted from the original.
 *
 * If the original source is in GLB format and over 15 MBs in size, then both the
 * original and the USDZ formatted source are optimized to reduce the file size.
 */
class ShopifyModel3dSource
{
    protected $filesize;
    protected $format;
    protected $mimeType;
    protected $url;

    
    /**
     * The 3d model source's filesize.
     *
     * @return int
     */
    public function getFilesize(): ?int
    {
        return $this->filesize;
    }

    
    /**
     * The 3d model source's format.
     *
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    
    /**
     * The 3d model source's MIME type.
     *
     * @return string
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    
    /**
     * The 3d model source's URL.
     *
     * @return string
     */
    public function getUrl(): ?string
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
