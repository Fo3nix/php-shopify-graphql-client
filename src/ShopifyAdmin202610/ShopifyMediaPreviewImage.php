<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyImage;

/**
 * Represents the preview image for a media.
 */
class ShopifyMediaPreviewImage
{
    protected $image;
    protected $status;

    
    /**
     * The preview image for the media. Returns `null` until `status` is `READY`.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * Current status of the preview image.
     *
     * @return string A ShopifyMediaPreviewImageStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
