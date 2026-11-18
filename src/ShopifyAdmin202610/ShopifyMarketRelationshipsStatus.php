<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The state of the shop's market relationships, which are the parent and child relationships between the shop's markets. The relationships are rebuilt asynchronously after a market, market condition, or market region changes.
 */
class ShopifyMarketRelationshipsStatus
{
    protected $version;

    
    /**
     * An opaque UUID identifying the build of the market relationships that the API returns at the moment this field is read. The value changes when a rebuild advances the materialized graph version and is stable at all other times, so a client can compare it against a previously read value to tell whether the relationships have changed.
     *
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['version']) && $data['version'] !== null) {
                $instance->version = $data['version'];
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
            if ($this->version !== null) {
                $data['version'] = $this->version;
            }
            return $data;
        }
}
