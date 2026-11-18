<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfiguration;

/**
 * A rollout treatment change that publishes a checkout and accounts configuration for the buyers the treatment serves, without changing the shop's globally published configuration. Returned by [`RolloutTreatment.changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RolloutTreatment#field-RolloutTreatment.fields.changes).
 */
class ShopifyRolloutCheckoutAndAccountsConfigurationPublishChange implements ShopifyRolloutChange, ShopifyRolloutCheckoutAndAccountsConfigurationChange
{
    protected $checkoutAndAccountsConfiguration;
    protected $id;

    
    /**
     * The configuration that the change applies to. Returns `null` when the configuration has been deleted or the caller can't read it.
     *
     * @return ShopifyCheckoutAndAccountsConfiguration
     */
    public function getCheckoutAndAccountsConfiguration(): ?ShopifyCheckoutAndAccountsConfiguration
    {
        return $this->checkoutAndAccountsConfiguration;
    }

    
    /**
     * A globally unique ID for this change, not the resource it affects.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['checkoutAndAccountsConfiguration']) && $data['checkoutAndAccountsConfiguration'] !== null) {
                $instance->checkoutAndAccountsConfiguration = ShopifyCheckoutAndAccountsConfiguration::fromArray($data['checkoutAndAccountsConfiguration']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->checkoutAndAccountsConfiguration !== null) {
                $data['checkoutAndAccountsConfiguration'] = $this->checkoutAndAccountsConfiguration->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
