<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class PriceListAdjustmentSettings
{
    protected $compareAtMode;

    
    /**
     * @return PriceListCompareAtModeEnumObject
     */
    public function getCompareAtMode()
    {
        return $this->compareAtMode;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['compareAtMode']) && $data['compareAtMode'] !== null) {
                $instance->compareAtMode = $data['compareAtMode'];
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
            if ($this->compareAtMode !== null) {
                $data['compareAtMode'] = $this->compareAtMode;
            }
            return $data;
        }
}
