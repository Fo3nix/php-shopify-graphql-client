<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A filter with a date value that's been added to a segment query.
 */
class ShopifySegmentDateFilter implements ShopifySegmentFilter
{
    protected $localizedName;
    protected $multiValue;
    protected $queryName;

    
    /**
     * The localized name of the filter.
     *
     * @return string
     */
    public function getLocalizedName(): ?string
    {
        return $this->localizedName;
    }

    
    /**
     * Whether a file can have multiple values for a single customer.
     *
     * @return bool
     */
    public function getMultiValue(): ?bool
    {
        return $this->multiValue;
    }

    
    /**
     * The query name of the filter.
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
            if (isset($data['localizedName']) && $data['localizedName'] !== null) {
                $instance->localizedName = $data['localizedName'];
            }
            if (isset($data['multiValue']) && $data['multiValue'] !== null) {
                $instance->multiValue = $data['multiValue'];
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
            if ($this->localizedName !== null) {
                $data['localizedName'] = $this->localizedName;
            }
            if ($this->multiValue !== null) {
                $data['multiValue'] = $this->multiValue;
            }
            if ($this->queryName !== null) {
                $data['queryName'] = $this->queryName;
            }
            return $data;
        }
}
