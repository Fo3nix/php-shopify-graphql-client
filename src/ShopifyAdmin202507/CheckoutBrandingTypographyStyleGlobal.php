<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CheckoutBrandingTypographyStyleGlobal
{
    protected $kerning;
    protected $letterCase;

    
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['kerning']) && $data['kerning'] !== null) {
                $instance->kerning = $data['kerning'];
            }
            if (isset($data['letterCase']) && $data['letterCase'] !== null) {
                $instance->letterCase = $data['letterCase'];
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
            if ($this->kerning !== null) {
                $data['kerning'] = $this->kerning;
            }
            if ($this->letterCase !== null) {
                $data['letterCase'] = $this->letterCase;
            }
            return $data;
        }
}
