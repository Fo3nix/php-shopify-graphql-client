<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class SegmentValue
{
    protected $localizedValue;
    protected $queryName;

    
    /**
     * @return string
     */
    public function getLocalizedValue()
    {
        return $this->localizedValue;
    }

    
    /**
     * @return string
     */
    public function getQueryName()
    {
        return $this->queryName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['localizedValue']) && $data['localizedValue'] !== null) {
                $instance->localizedValue = $data['localizedValue'];
            }
            if (isset($data['queryName']) && $data['queryName'] !== null) {
                $instance->queryName = $data['queryName'];
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
            if ($this->localizedValue !== null) {
                $data['localizedValue'] = $this->localizedValue;
            }
            if ($this->queryName !== null) {
                $data['queryName'] = $this->queryName;
            }
            return $data;
        }
}
