<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfiguration;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationUserError;

/**
 * Return type for `checkoutAndAccountsConfigurationUpdate` mutation.
 */
class ShopifyCheckoutAndAccountsConfigurationUpdatePayload
{
    protected $configuration;
    protected $userErrors;

    
    /**
     * The updated configuration.
     *
     * @return ShopifyCheckoutAndAccountsConfiguration
     */
    public function getConfiguration(): ?ShopifyCheckoutAndAccountsConfiguration
    {
        return $this->configuration;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationUserError[]
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
            if (isset($data['configuration']) && $data['configuration'] !== null) {
                $instance->configuration = ShopifyCheckoutAndAccountsConfiguration::fromArray($data['configuration']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCheckoutAndAccountsConfigurationUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->configuration !== null) {
                $data['configuration'] = $this->configuration->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
