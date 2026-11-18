<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyShopAlertAction;

/**
 * An alert message that appears in the Shopify admin about a problem with a store setting, with an action to take. For example, you could show an alert to ask the merchant to enter their billing information to activate Shopify Plus.
 */
class ShopifyShopAlert
{
    protected $action;
    protected $description;

    
    /**
     * The text for the button in the alert that links to related information. For example, _Add credit card_.
     *
     * @return ShopifyShopAlertAction
     */
    public function getAction(): ?ShopifyShopAlertAction
    {
        return $this->action;
    }

    
    /**
     * A description of the alert and further information, such as whether the merchant will be charged.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['action']) && $data['action'] !== null) {
                $instance->action = ShopifyShopAlertAction::fromArray($data['action']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
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
            if ($this->action !== null) {
                $data['action'] = $this->action->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            return $data;
        }
}
