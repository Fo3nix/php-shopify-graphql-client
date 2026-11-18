<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Represents the value captured by a localized field. Localized fields are additional fields required by certain countries on international orders. For example, some countries require additional fields for customs information or tax identification numbers.
 */
class ShopifyLocalizedField
{
    protected $countryCode;
    protected $key;
    protected $purpose;
    protected $title;
    protected $value;

    
    /**
     * Country ISO 3166-1 alpha-2 code.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * The localized field keys that are allowed.
     *
     * @return string A ShopifyLocalizedFieldKeyEnumObject value
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The purpose of this localized field.
     *
     * @return string A ShopifyLocalizedFieldPurposeEnumObject value
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    
    /**
     * The localized field title.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The value of the field.
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
            if (isset($data['countryCode']) && $data['countryCode'] !== null) {
                $instance->countryCode = $data['countryCode'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['purpose']) && $data['purpose'] !== null) {
                $instance->purpose = $data['purpose'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->countryCode !== null) {
                $data['countryCode'] = $this->countryCode;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->purpose !== null) {
                $data['purpose'] = $this->purpose;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
