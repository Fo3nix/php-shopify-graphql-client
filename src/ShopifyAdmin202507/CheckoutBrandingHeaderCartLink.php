<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;

class CheckoutBrandingHeaderCartLink
{
    protected $contentType;
    protected $image;

    
    /**
     * @return CheckoutBrandingCartLinkContentTypeEnumObject
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    
    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['contentType']) && $data['contentType'] !== null) {
                $instance->contentType = $data['contentType'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = Image::fromArray($data['image']);
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
            if ($this->contentType !== null) {
                $data['contentType'] = $this->contentType;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            return $data;
        }
}
