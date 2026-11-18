<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * One of the actions that the fulfillment order supports in its current state.
 */
class ShopifyFulfillmentOrderSupportedAction
{
    protected $action;
    protected $externalUrl;

    
    /**
     * The action value.
     *
     * @return string A ShopifyFulfillmentOrderActionEnumObject value
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    
    /**
     * The external URL to be used to initiate the fulfillment process outside Shopify.
     * Applicable only when the `action` value is `EXTERNAL`.
     *
     * @return string
     */
    public function getExternalUrl(): mixed
    {
        return $this->externalUrl;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['action']) && $data['action'] !== null) {
                $instance->action = $data['action'];
            }
            if (isset($data['externalUrl']) && $data['externalUrl'] !== null) {
                $instance->externalUrl = $data['externalUrl'];
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
                $data['action'] = $this->action;
            }
            if ($this->externalUrl !== null) {
                $data['externalUrl'] = $this->externalUrl;
            }
            return $data;
        }
}
