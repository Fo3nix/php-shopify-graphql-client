<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingTypographyStyle;

class ShopifyCheckoutBrandingTextField
{
    protected $border;
    protected $typography;

    
    /**
     * @return ShopifyCheckoutBrandingBorderEnumObject
     */
    public function getBorder()
    {
        return $this->border;
    }

    
    /**
     * @return ShopifyCheckoutBrandingTypographyStyle
     */
    public function getTypography()
    {
        return $this->typography;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['border']) && $data['border'] !== null) {
                $instance->border = $data['border'];
            }
            if (isset($data['typography']) && $data['typography'] !== null) {
                $instance->typography = ShopifyCheckoutBrandingTypographyStyle::fromArray($data['typography']);
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
            if ($this->border !== null) {
                $data['border'] = $this->border;
            }
            if ($this->typography !== null) {
                $data['typography'] = $this->typography->asArray();
            }
            return $data;
        }
}
