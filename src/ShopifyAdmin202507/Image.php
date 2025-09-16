<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;

class Image
{
    protected $altText;
    protected $height;
    protected $id;
    protected $metafield;
    protected $metafields;
    protected $originalSrc;
    protected $src;
    protected $thumbhash;
    protected $transformedSrc;
    protected $url;
    protected $width;

    
    /**
     * @return string
     */
    public function getAltText()
    {
        return $this->altText;
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
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getOriginalSrc()
    {
        return $this->originalSrc;
    }

    
    /**
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    
    /**
     * @return string
     */
    public function getThumbhash()
    {
        return $this->thumbhash;
    }

    
    /**
     * @return string
     */
    public function getTransformedSrc()
    {
        return $this->transformedSrc;
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
            if (isset($data['altText']) && $data['altText'] !== null) {
                $instance->altText = $data['altText'];
            }
            if (isset($data['height']) && $data['height'] !== null) {
                $instance->height = $data['height'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['originalSrc']) && $data['originalSrc'] !== null) {
                $instance->originalSrc = $data['originalSrc'];
            }
            if (isset($data['src']) && $data['src'] !== null) {
                $instance->src = $data['src'];
            }
            if (isset($data['thumbhash']) && $data['thumbhash'] !== null) {
                $instance->thumbhash = $data['thumbhash'];
            }
            if (isset($data['transformedSrc']) && $data['transformedSrc'] !== null) {
                $instance->transformedSrc = $data['transformedSrc'];
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
            if ($this->altText !== null) {
                $data['altText'] = $this->altText;
            }
            if ($this->height !== null) {
                $data['height'] = $this->height;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->originalSrc !== null) {
                $data['originalSrc'] = $this->originalSrc;
            }
            if ($this->src !== null) {
                $data['src'] = $this->src;
            }
            if ($this->thumbhash !== null) {
                $data['thumbhash'] = $this->thumbhash;
            }
            if ($this->transformedSrc !== null) {
                $data['transformedSrc'] = $this->transformedSrc;
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
