<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ProductBundleComponentOptionSelectionValue
{
    protected $selectionStatus;
    protected $value;

    
    /**
     * @return ProductBundleComponentOptionSelectionStatusEnumObject
     */
    public function getSelectionStatus()
    {
        return $this->selectionStatus;
    }

    
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['selectionStatus']) && $data['selectionStatus'] !== null) {
                $instance->selectionStatus = $data['selectionStatus'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->selectionStatus !== null) {
                $data['selectionStatus'] = $this->selectionStatus;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
