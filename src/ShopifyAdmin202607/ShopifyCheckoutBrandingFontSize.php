<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The font size.
 */
class ShopifyCheckoutBrandingFontSize
{
    protected $base;
    protected $ratio;

    
    /**
     * The base font size.
     *
     * @return float
     */
    public function getBase(): ?float
    {
        return $this->base;
    }

    
    /**
     * The scale ratio used to derive all font sizes such as small and large.
     *
     * @return float
     */
    public function getRatio(): ?float
    {
        return $this->ratio;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['base']) && $data['base'] !== null) {
                $instance->base = $data['base'];
            }
            if (isset($data['ratio']) && $data['ratio'] !== null) {
                $instance->ratio = $data['ratio'];
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
            if ($this->base !== null) {
                $data['base'] = $this->base;
            }
            if ($this->ratio !== null) {
                $data['ratio'] = $this->ratio;
            }
            return $data;
        }
}
