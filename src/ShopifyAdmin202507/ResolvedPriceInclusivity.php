<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ResolvedPriceInclusivity
{
    protected $dutiesIncluded;
    protected $taxesIncluded;

    
    /**
     * @return bool
     */
    public function getDutiesIncluded()
    {
        return $this->dutiesIncluded;
    }

    
    /**
     * @return bool
     */
    public function getTaxesIncluded()
    {
        return $this->taxesIncluded;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['dutiesIncluded']) && $data['dutiesIncluded'] !== null) {
                $instance->dutiesIncluded = $data['dutiesIncluded'];
            }
            if (isset($data['taxesIncluded']) && $data['taxesIncluded'] !== null) {
                $instance->taxesIncluded = $data['taxesIncluded'];
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
            if ($this->dutiesIncluded !== null) {
                $data['dutiesIncluded'] = $this->dutiesIncluded;
            }
            if ($this->taxesIncluded !== null) {
                $data['taxesIncluded'] = $this->taxesIncluded;
            }
            return $data;
        }
}
