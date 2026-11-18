<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFileError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMediaError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMediaWarning;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMediaImageOriginalSource;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMediaPreviewImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTranslation;

/**
 * The `MediaImage` object represents an image hosted on Shopify's
 * [content delivery network (CDN)](https://shopify.dev/docs/storefronts/themes/best-practices/performance/platform#shopify-cdn).
 * Shopify CDN is a content system that serves as the primary way to store,
 * manage, and deliver visual content for products, variants, and other resources across the Shopify platform.
 *
 * The `MediaImage` object provides information to:
 *
 * - Store and display product and variant images across online stores, admin interfaces, and mobile apps.
 * - Retrieve visual branding elements, including logos, banners, favicons, and background images in checkout flows.
 * - Retrieve signed URLs for secure, time-limited access to original image files.
 *
 * Each `MediaImage` object provides both the processed image data (with automatic optimization and CDN delivery)
 * and access to the original source file. The image processing is handled asynchronously, so images
 * might not be immediately available after upload. The
 * [`status`](https://shopify.dev/docs/api/admin-graphql/latest/objects/mediaimage#field-MediaImage.fields.status)
 * field indicates when processing is complete and the image is ready for use.
 *
 * The `MediaImage` object implements the [`Media`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Media)
 * interface alongside other media types, like videos and 3D models.
 *
 * Learn about
 * managing media for [products](https://shopify.dev/docs/apps/build/online-store/product-media),
 * [product variants](https://shopify.dev/docs/apps/build/online-store/product-variant-media), and
 * [asynchronous media management](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components#asynchronous-media-management).
 */
class ShopifyMediaImage implements ShopifyFile, ShopifyHasMetafields, ShopifyHasPublishedTranslations, ShopifyMedia, ShopifyNode
{
    protected $alt;
    protected $createdAt;
    protected $fileErrors;
    protected $fileStatus;
    protected $id;
    protected $image;
    protected $mediaContentType;
    protected $mediaErrors;
    protected $mediaWarnings;
    protected $metafield;
    protected $metafields;
    protected $mimeType;
    protected $originalSource;
    protected $preview;
    protected $status;
    protected $translations;
    protected $updatedAt;

    
    /**
     * A word or phrase to share the nature or contents of a media.
     *
     * @return string
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Any errors that have occurred on the file.
     *
     * @return ShopifyFileError[]
     */
    public function getFileErrors(): ?array
    {
        return $this->fileErrors;
    }

    
    /**
     * The status of the file.
     *
     * @return string A ShopifyFileStatusEnumObject value
     */
    public function getFileStatus(): ?string
    {
        return $this->fileStatus;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The image for the media. Returns `null` until `status` is `READY`.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * The media content type.
     *
     * @return string A ShopifyMediaContentTypeEnumObject value
     */
    public function getMediaContentType(): ?string
    {
        return $this->mediaContentType;
    }

    
    /**
     * Any errors which have occurred on the media.
     *
     * @return ShopifyMediaError[]
     */
    public function getMediaErrors(): ?array
    {
        return $this->mediaErrors;
    }

    
    /**
     * The warnings attached to the media.
     *
     * @return ShopifyMediaWarning[]
     */
    public function getMediaWarnings(): ?array
    {
        return $this->mediaWarnings;
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
     * The MIME type of the image.
     *
     * @return string
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    
    /**
     * The original source of the image.
     *
     * @return ShopifyMediaImageOriginalSource
     */
    public function getOriginalSource(): ?ShopifyMediaImageOriginalSource
    {
        return $this->originalSource;
    }

    
    /**
     * The preview image for the media.
     *
     * @return ShopifyMediaPreviewImage
     */
    public function getPreview(): ?ShopifyMediaPreviewImage
    {
        return $this->preview;
    }

    
    /**
     * Current status of the media.
     *
     * @return string A ShopifyMediaStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
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
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['alt']) && $data['alt'] !== null) {
                $instance->alt = $data['alt'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['fileErrors']) && $data['fileErrors'] !== null) {
                $instance->fileErrors = array_map(function($item) { return ShopifyFileError::fromArray($item); }, $data['fileErrors']);
            }
            if (isset($data['fileStatus']) && $data['fileStatus'] !== null) {
                $instance->fileStatus = $data['fileStatus'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['mediaContentType']) && $data['mediaContentType'] !== null) {
                $instance->mediaContentType = $data['mediaContentType'];
            }
            if (isset($data['mediaErrors']) && $data['mediaErrors'] !== null) {
                $instance->mediaErrors = array_map(function($item) { return ShopifyMediaError::fromArray($item); }, $data['mediaErrors']);
            }
            if (isset($data['mediaWarnings']) && $data['mediaWarnings'] !== null) {
                $instance->mediaWarnings = array_map(function($item) { return ShopifyMediaWarning::fromArray($item); }, $data['mediaWarnings']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['mimeType']) && $data['mimeType'] !== null) {
                $instance->mimeType = $data['mimeType'];
            }
            if (isset($data['originalSource']) && $data['originalSource'] !== null) {
                $instance->originalSource = ShopifyMediaImageOriginalSource::fromArray($data['originalSource']);
            }
            if (isset($data['preview']) && $data['preview'] !== null) {
                $instance->preview = ShopifyMediaPreviewImage::fromArray($data['preview']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->alt !== null) {
                $data['alt'] = $this->alt;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->fileErrors !== null) {
                $data['fileErrors'] = array_map(function($item) { return $item->asArray(); }, $this->fileErrors);
            }
            if ($this->fileStatus !== null) {
                $data['fileStatus'] = $this->fileStatus;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->mediaContentType !== null) {
                $data['mediaContentType'] = $this->mediaContentType;
            }
            if ($this->mediaErrors !== null) {
                $data['mediaErrors'] = array_map(function($item) { return $item->asArray(); }, $this->mediaErrors);
            }
            if ($this->mediaWarnings !== null) {
                $data['mediaWarnings'] = array_map(function($item) { return $item->asArray(); }, $this->mediaWarnings);
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->mimeType !== null) {
                $data['mimeType'] = $this->mimeType;
            }
            if ($this->originalSource !== null) {
                $data['originalSource'] = $this->originalSource->asArray();
            }
            if ($this->preview !== null) {
                $data['preview'] = $this->preview->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
