<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTranslation;

/**
 * Represents an image resource.
 */
class ShopifyImage implements ShopifyHasMetafields, ShopifyHasPublishedTranslations
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
    protected $translations;
    protected $url;
    protected $width;

    
    /**
     * A word or phrase to share the nature or contents of an image.
     *
     * @return string
     */
    public function getAltText(): ?string
    {
        return $this->altText;
    }

    
    /**
     * The original height of the image in pixels. Returns `null` if the image isn't hosted by Shopify.
     *
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    
    /**
     * A unique ID for the image.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * The location of the original image as a URL.
     *
     * If there are any existing transformations in the original source URL, they will remain and not be stripped.
     *
     * @return string
     */
    public function getOriginalSrc(): mixed
    {
        return $this->originalSrc;
    }

    
    /**
     * The location of the image as a URL.
     *
     * @return string
     */
    public function getSrc(): mixed
    {
        return $this->src;
    }

    
    /**
     * The ThumbHash of the image.
     *
     * Useful to display placeholder images while the original image is loading.
     *
     * @return string
     */
    public function getThumbhash(): ?string
    {
        return $this->thumbhash;
    }

    
    /**
     * The location of the transformed image as a URL.
     *
     * All transformation arguments are considered "best-effort". If they can be applied to an image, they will be.
     * Otherwise any transformations which an image type doesn't support will be ignored.
     *
     * @return string
     */
    public function getTransformedSrc(): mixed
    {
        return $this->transformedSrc;
    }

    
    /**
     * The published translations associated with the resource.
     *
     * @return ShopifyTranslation[]
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

    
    /**
     * The location of the image as a URL.
     *
     * If no transform options are specified, then the original image will be preserved including any pre-applied transforms.
     *
     * All transformation options are considered "best-effort". Any transformation that the original image type doesn't support will be ignored.
     *
     * If you need multiple variations of the same image, then you can use [GraphQL aliases](https://graphql.org/learn/queries/#aliases).
     *
     * @return string
     */
    public function getUrl(): mixed
    {
        return $this->url;
    }

    
    /**
     * The original width of the image in pixels. Returns `null` if the image isn't hosted by Shopify.
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
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
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
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
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
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
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
