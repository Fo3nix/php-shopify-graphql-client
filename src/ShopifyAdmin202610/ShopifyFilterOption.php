<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A filter option is one possible value in a search filter.
 */
class ShopifyFilterOption
{
    protected $label;
    protected $value;

    
    /**
     * The filter option's label for display purposes.
     *
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    
    /**
     * The filter option's value.
     *
     * @return string
     */
    public function getValue(): ?string
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
            if (isset($data['label']) && $data['label'] !== null) {
                $instance->label = $data['label'];
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
            if ($this->label !== null) {
                $data['label'] = $this->label;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
