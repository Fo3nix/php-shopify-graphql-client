<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The entitlements for catalogs.
 */
class ShopifyMarketsCatalogsEntitlement
{
    protected $enabled;
    protected $limit;

    
    /**
     * Whether catalogs are enabled.
     *
     * @return bool
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    
    /**
     * The maximum number of catalogs allowed.
     *
     * @return int
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
            }
            if (isset($data['limit']) && $data['limit'] !== null) {
                $instance->limit = $data['limit'];
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
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            if ($this->limit !== null) {
                $data['limit'] = $this->limit;
            }
            return $data;
        }
}
