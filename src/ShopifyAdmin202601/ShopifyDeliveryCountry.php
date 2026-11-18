<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryCountryCodeOrRestOfWorld;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryProvince;

/**
 * A country that is used to define a shipping zone.
 */
class ShopifyDeliveryCountry implements ShopifyNode
{
    protected $code;
    protected $id;
    protected $name;
    protected $provinces;
    protected $translatedName;

    
    /**
     * A two-letter country code in ISO 3166-1 alpha-2 standard.
     * It also includes a flag indicating whether the country should be
     * a part of the 'Rest Of World' shipping zone.
     *
     * @return ShopifyDeliveryCountryCodeOrRestOfWorld
     */
    public function getCode(): ?ShopifyDeliveryCountryCodeOrRestOfWorld
    {
        return $this->code;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The full name of the country.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The list of regions associated with this country.
     *
     * @return ShopifyDeliveryProvince[]
     */
    public function getProvinces(): ?array
    {
        return $this->provinces;
    }

    
    /**
     * The translated name of the country. The translation returned is based on the system's locale.
     *
     * @return string
     */
    public function getTranslatedName(): ?string
    {
        return $this->translatedName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = ShopifyDeliveryCountryCodeOrRestOfWorld::fromArray($data['code']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['provinces']) && $data['provinces'] !== null) {
                $instance->provinces = array_map(function($item) { return ShopifyDeliveryProvince::fromArray($item); }, $data['provinces']);
            }
            if (isset($data['translatedName']) && $data['translatedName'] !== null) {
                $instance->translatedName = $data['translatedName'];
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
            if ($this->code !== null) {
                $data['code'] = $this->code->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->provinces !== null) {
                $data['provinces'] = array_map(function($item) { return $item->asArray(); }, $this->provinces);
            }
            if ($this->translatedName !== null) {
                $data['translatedName'] = $this->translatedName;
            }
            return $data;
        }
}
