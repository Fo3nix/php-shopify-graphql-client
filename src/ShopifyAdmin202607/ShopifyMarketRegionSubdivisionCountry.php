<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A country that a subdivision belongs to.
 */
class ShopifyMarketRegionSubdivisionCountry
{
    protected $code;
    protected $name;

    
    /**
     * The ISO code identifying the country.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The name of the country.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
                $data['code'] = $this->code;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
