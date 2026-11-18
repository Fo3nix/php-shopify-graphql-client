<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyChannelCreateUserError;

/**
 * Return type for `channelCreate` mutation.
 */
class ShopifyChannelCreatePayload
{
    protected $channel;
    protected $userErrors;

    
    /**
     * The channel that was created.
     *
     * @return ShopifyChannel
     */
    public function getChannel(): ?ShopifyChannel
    {
        return $this->channel;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyChannelCreateUserError[]
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
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = ShopifyChannel::fromArray($data['channel']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyChannelCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->channel !== null) {
                $data['channel'] = $this->channel->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
