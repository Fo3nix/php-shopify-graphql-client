<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDeliveryPromiseParticipant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `deliveryPromiseParticipantsUpdate` mutation.
 */
class ShopifyDeliveryPromiseParticipantsUpdatePayload
{
    protected $promiseParticipants;
    protected $userErrors;

    
    /**
     * The promise participants that were added.
     *
     * @return ShopifyDeliveryPromiseParticipant[]
     */
    public function getPromiseParticipants(): ?array
    {
        return $this->promiseParticipants;
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
            if (isset($data['promiseParticipants']) && $data['promiseParticipants'] !== null) {
                $instance->promiseParticipants = array_map(function($item) { return ShopifyDeliveryPromiseParticipant::fromArray($item); }, $data['promiseParticipants']);
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
            if ($this->promiseParticipants !== null) {
                $data['promiseParticipants'] = array_map(function($item) { return $item->asArray(); }, $this->promiseParticipants);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
