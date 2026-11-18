<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySegmentEventFilterParameter;

/**
 * A filter that's used to segment customers based on the date that an event occurred. For example, the `product_bought` event filter allows you to segment customers based on what products they've bought.
 */
class ShopifySegmentEventFilter implements ShopifySegmentFilter
{
    protected $localizedName;
    protected $multiValue;
    protected $parameters;
    protected $queryName;
    protected $returnValueType;

    
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
     * The parameters for an event segment filter.
     *
     * @return ShopifySegmentEventFilterParameter[]
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
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
     * The return value type for an event segment filter.
     *
     * @return string
     */
    public function getReturnValueType(): ?string
    {
        return $this->returnValueType;
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
            if (isset($data['parameters']) && $data['parameters'] !== null) {
                $instance->parameters = array_map(function($item) { return ShopifySegmentEventFilterParameter::fromArray($item); }, $data['parameters']);
            }
            if (isset($data['queryName']) && $data['queryName'] !== null) {
                $instance->queryName = $data['queryName'];
            }
            if (isset($data['returnValueType']) && $data['returnValueType'] !== null) {
                $instance->returnValueType = $data['returnValueType'];
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
            if ($this->parameters !== null) {
                $data['parameters'] = array_map(function($item) { return $item->asArray(); }, $this->parameters);
            }
            if ($this->queryName !== null) {
                $data['queryName'] = $this->queryName;
            }
            if ($this->returnValueType !== null) {
                $data['returnValueType'] = $this->returnValueType;
            }
            return $data;
        }
}
