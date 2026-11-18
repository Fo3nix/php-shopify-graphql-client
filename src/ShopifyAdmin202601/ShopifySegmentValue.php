<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A list of suggested values associated with an individual segment. A
 * segment is a group of members, such as customers, that meet specific
 * criteria.
 */
class ShopifySegmentValue
{
    protected $localizedValue;
    protected $queryName;

    
    /**
     * The localized version of the value's name. This name is displayed to the merchant.
     *
     * @return string
     */
    public function getLocalizedValue(): ?string
    {
        return $this->localizedValue;
    }

    
    /**
     * The name of the query associated with the suggestion.
     *
     * @return string
     */
    public function getQueryName(): ?string
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
