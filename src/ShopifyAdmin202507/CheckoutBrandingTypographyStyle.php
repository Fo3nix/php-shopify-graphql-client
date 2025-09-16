<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CheckoutBrandingTypographyStyle
{
    protected $font;
    protected $kerning;
    protected $letterCase;
    protected $size;
    protected $weight;

    
    /**
     * @return CheckoutBrandingTypographyFontEnumObject
     */
    public function getFont()
    {
        return $this->font;
    }

    
    /**
     * @return CheckoutBrandingTypographyKerningEnumObject
     */
    public function getKerning()
    {
        return $this->kerning;
    }

    
    /**
     * @return CheckoutBrandingTypographyLetterCaseEnumObject
     */
    public function getLetterCase()
    {
        return $this->letterCase;
    }

    
    /**
     * @return CheckoutBrandingTypographySizeEnumObject
     */
    public function getSize()
    {
        return $this->size;
    }

    
    /**
     * @return CheckoutBrandingTypographyWeightEnumObject
     */
    public function getWeight()
    {
        return $this->weight;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['font']) && $data['font'] !== null) {
                $instance->font = $data['font'];
            }
            if (isset($data['kerning']) && $data['kerning'] !== null) {
                $instance->kerning = $data['kerning'];
            }
            if (isset($data['letterCase']) && $data['letterCase'] !== null) {
                $instance->letterCase = $data['letterCase'];
            }
            if (isset($data['size']) && $data['size'] !== null) {
                $instance->size = $data['size'];
            }
            if (isset($data['weight']) && $data['weight'] !== null) {
                $instance->weight = $data['weight'];
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
            if ($this->font !== null) {
                $data['font'] = $this->font;
            }
            if ($this->kerning !== null) {
                $data['kerning'] = $this->kerning;
            }
            if ($this->letterCase !== null) {
                $data['letterCase'] = $this->letterCase;
            }
            if ($this->size !== null) {
                $data['size'] = $this->size;
            }
            if ($this->weight !== null) {
                $data['weight'] = $this->weight;
            }
            return $data;
        }
}
