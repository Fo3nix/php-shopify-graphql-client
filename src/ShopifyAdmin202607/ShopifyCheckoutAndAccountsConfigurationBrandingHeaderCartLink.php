<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator;

/**
 * The header cart link customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLink
{
    protected $contentType;
    protected $image;

    
    /**
     * The content type for the header back to cart link in 1-page checkout. Setting this to image will render the custom image provided using the image field on the header cart_link object. If no image is provided, the default cart icon will be used.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingCartLinkContentTypeEnumObject value
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    
    /**
     * The image that's used for the header back to cart link in 1-page checkout when the content type is set to image.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingImage
     */
    public function getImage(): ?ShopifyCheckoutAndAccountsConfigurationBrandingImage
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
                $instance->image = ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator::fromArray($data['image']);
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
                $data['image'] = ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator::toArray($this->image);
            }
            return $data;
        }
}
