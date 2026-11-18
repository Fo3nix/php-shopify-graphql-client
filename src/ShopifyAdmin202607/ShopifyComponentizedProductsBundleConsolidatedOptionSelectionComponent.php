<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A component that's included in a bundle consolidated option selection.
 */
class ShopifyComponentizedProductsBundleConsolidatedOptionSelectionComponent
{
    protected $optionId;
    protected $value;

    
    /**
     * The ID of the component's option that's included in this consolidated option selection.
     *
     * @return string
     */
    public function getOptionId(): ?string
    {
        return $this->optionId;
    }

    
    /**
     * The value of the component's option value that's included in this consolidated option selection.
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
            if (isset($data['optionId']) && $data['optionId'] !== null) {
                $instance->optionId = $data['optionId'];
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
            if ($this->optionId !== null) {
                $data['optionId'] = $this->optionId;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
