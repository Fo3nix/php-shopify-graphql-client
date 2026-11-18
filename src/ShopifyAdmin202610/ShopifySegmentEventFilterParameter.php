<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The parameters for an event segment filter.
 */
class ShopifySegmentEventFilterParameter
{
    protected $acceptsMultipleValues;
    protected $localizedDescription;
    protected $localizedName;
    protected $maxRange;
    protected $minRange;
    protected $optional;
    protected $parameterType;
    protected $queryName;

    
    /**
     * Whether the parameter accepts a list of values.
     *
     * @return bool
     */
    public function getAcceptsMultipleValues(): ?bool
    {
        return $this->acceptsMultipleValues;
    }

    
    /**
     * The localized description of the parameter.
     *
     * @return string
     */
    public function getLocalizedDescription(): ?string
    {
        return $this->localizedDescription;
    }

    
    /**
     * The localized name of the parameter.
     *
     * @return string
     */
    public function getLocalizedName(): ?string
    {
        return $this->localizedName;
    }

    
    /**
     * The parameter maximum value range.
     *
     * @return float
     */
    public function getMaxRange(): ?float
    {
        return $this->maxRange;
    }

    
    /**
     * The parameter minimum value range.
     *
     * @return float
     */
    public function getMinRange(): ?float
    {
        return $this->minRange;
    }

    
    /**
     * Whether the parameter is optional.
     *
     * @return bool
     */
    public function getOptional(): ?bool
    {
        return $this->optional;
    }

    
    /**
     * The type of the parameter.
     *
     * @return string
     */
    public function getParameterType(): ?string
    {
        return $this->parameterType;
    }

    
    /**
     * The query name of the parameter.
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
            if (isset($data['acceptsMultipleValues']) && $data['acceptsMultipleValues'] !== null) {
                $instance->acceptsMultipleValues = $data['acceptsMultipleValues'];
            }
            if (isset($data['localizedDescription']) && $data['localizedDescription'] !== null) {
                $instance->localizedDescription = $data['localizedDescription'];
            }
            if (isset($data['localizedName']) && $data['localizedName'] !== null) {
                $instance->localizedName = $data['localizedName'];
            }
            if (isset($data['maxRange']) && $data['maxRange'] !== null) {
                $instance->maxRange = $data['maxRange'];
            }
            if (isset($data['minRange']) && $data['minRange'] !== null) {
                $instance->minRange = $data['minRange'];
            }
            if (isset($data['optional']) && $data['optional'] !== null) {
                $instance->optional = $data['optional'];
            }
            if (isset($data['parameterType']) && $data['parameterType'] !== null) {
                $instance->parameterType = $data['parameterType'];
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
            if ($this->acceptsMultipleValues !== null) {
                $data['acceptsMultipleValues'] = $this->acceptsMultipleValues;
            }
            if ($this->localizedDescription !== null) {
                $data['localizedDescription'] = $this->localizedDescription;
            }
            if ($this->localizedName !== null) {
                $data['localizedName'] = $this->localizedName;
            }
            if ($this->maxRange !== null) {
                $data['maxRange'] = $this->maxRange;
            }
            if ($this->minRange !== null) {
                $data['minRange'] = $this->minRange;
            }
            if ($this->optional !== null) {
                $data['optional'] = $this->optional;
            }
            if ($this->parameterType !== null) {
                $data['parameterType'] = $this->parameterType;
            }
            if ($this->queryName !== null) {
                $data['queryName'] = $this->queryName;
            }
            return $data;
        }
}
