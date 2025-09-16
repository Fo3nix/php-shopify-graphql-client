<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class MetafieldCapabilityUniqueValues
{
    protected $eligible;
    protected $enabled;

    
    /**
     * @return bool
     */
    public function getEligible()
    {
        return $this->eligible;
    }

    
    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['eligible']) && $data['eligible'] !== null) {
                $instance->eligible = $data['eligible'];
            }
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
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
            if ($this->eligible !== null) {
                $data['eligible'] = $this->eligible;
            }
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            return $data;
        }
}
