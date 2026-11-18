<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketRegionSubdivisionCountry;

/**
 * A subdivision of a country which comprises a market.
 */
class ShopifyMarketRegionSubdivision implements ShopifyMarketRegion, ShopifyNode
{
    protected $code;
    protected $country;
    protected $id;
    protected $name;

    
    /**
     * The ISO code identifying the subdivision.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The country the subdivision belongs to.
     *
     * @return ShopifyMarketRegionSubdivisionCountry
     */
    public function getCountry(): ?ShopifyMarketRegionSubdivisionCountry
    {
        return $this->country;
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
     * The name of the region.
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
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = ShopifyMarketRegionSubdivisionCountry::fromArray($data['country']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->country !== null) {
                $data['country'] = $this->country->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
