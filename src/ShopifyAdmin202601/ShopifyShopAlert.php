<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyShopAlertAction;

class ShopifyShopAlert
{
    protected $action;
    protected $description;

    
    /**
     * @return ShopifyShopAlertAction
     */
    public function getAction()
    {
        return $this->action;
    }

    
    /**
     * @return string
     */
    public function getDescription()
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
