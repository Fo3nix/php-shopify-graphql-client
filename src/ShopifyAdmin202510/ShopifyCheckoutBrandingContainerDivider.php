<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

class ShopifyCheckoutBrandingContainerDivider
{
    protected $borderStyle;
    protected $borderWidth;
    protected $visibility;

    
    /**
     * @return ShopifyCheckoutBrandingBorderStyleEnumObject
     */
    public function getBorderStyle()
    {
        return $this->borderStyle;
    }

    
    /**
     * @return ShopifyCheckoutBrandingBorderWidthEnumObject
     */
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }

    
    /**
     * @return ShopifyCheckoutBrandingVisibilityEnumObject
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['borderStyle']) && $data['borderStyle'] !== null) {
                $instance->borderStyle = $data['borderStyle'];
            }
            if (isset($data['borderWidth']) && $data['borderWidth'] !== null) {
                $instance->borderWidth = $data['borderWidth'];
            }
            if (isset($data['visibility']) && $data['visibility'] !== null) {
                $instance->visibility = $data['visibility'];
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
            if ($this->borderStyle !== null) {
                $data['borderStyle'] = $this->borderStyle;
            }
            if ($this->borderWidth !== null) {
                $data['borderWidth'] = $this->borderWidth;
            }
            if ($this->visibility !== null) {
                $data['visibility'] = $this->visibility;
            }
            return $data;
        }
}
