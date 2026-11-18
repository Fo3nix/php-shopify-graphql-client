<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarket;
use Carbon\Carbon;

/**
 * The market localization of a field within a resource, which is determined by the market ID.
 */
class ShopifyMarketLocalization
{
    protected $key;
    protected $market;
    protected $outdated;
    protected $updatedAt;
    protected $value;

    
    /**
     * A reference to the value being localized on the resource that this market localization belongs to.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The market that the localization is specific to.
     *
     * @return ShopifyMarket
     */
    public function getMarket(): ?ShopifyMarket
    {
        return $this->market;
    }

    
    /**
     * Whether the original content has changed since this market localization was updated.
     *
     * @return bool
     */
    public function getOutdated(): ?bool
    {
        return $this->outdated;
    }

    
    /**
     * The date and time when the market localization was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The value of the market localization.
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
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['market']) && $data['market'] !== null) {
                $instance->market = ShopifyMarket::fromArray($data['market']);
            }
            if (isset($data['outdated']) && $data['outdated'] !== null) {
                $instance->outdated = $data['outdated'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->market !== null) {
                $data['market'] = $this->market->asArray();
            }
            if ($this->outdated !== null) {
                $data['outdated'] = $this->outdated;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
