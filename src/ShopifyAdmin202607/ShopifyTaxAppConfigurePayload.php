<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxAppConfiguration;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxAppConfigureUserError;

/**
 * Return type for `taxAppConfigure` mutation.
 */
class ShopifyTaxAppConfigurePayload
{
    protected $taxAppConfiguration;
    protected $userErrors;

    
    /**
     * The updated tax app configuration.
     *
     * @return ShopifyTaxAppConfiguration
     */
    public function getTaxAppConfiguration(): ?ShopifyTaxAppConfiguration
    {
        return $this->taxAppConfiguration;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyTaxAppConfigureUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['taxAppConfiguration']) && $data['taxAppConfiguration'] !== null) {
                $instance->taxAppConfiguration = ShopifyTaxAppConfiguration::fromArray($data['taxAppConfiguration']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyTaxAppConfigureUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->taxAppConfiguration !== null) {
                $data['taxAppConfiguration'] = $this->taxAppConfiguration->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
