<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentEvent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `fulfillmentEventCreate` mutation.
 */
class ShopifyFulfillmentEventCreatePayload
{
    protected $fulfillmentEvent;
    protected $userErrors;

    
    /**
     * The created fulfillment event.
     *
     * @return ShopifyFulfillmentEvent
     */
    public function getFulfillmentEvent(): ?ShopifyFulfillmentEvent
    {
        return $this->fulfillmentEvent;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
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
            if (isset($data['fulfillmentEvent']) && $data['fulfillmentEvent'] !== null) {
                $instance->fulfillmentEvent = ShopifyFulfillmentEvent::fromArray($data['fulfillmentEvent']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->fulfillmentEvent !== null) {
                $data['fulfillmentEvent'] = $this->fulfillmentEvent->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
