<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketWebPresence;

/**
 * Return type for `webPresenceCreate` mutation.
 */
class ShopifyWebPresenceCreatePayload
{
    protected $userErrors;
    protected $webPresence;

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMarketUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

    
    /**
     * The created web presence object.
     *
     * @return ShopifyMarketWebPresence
     */
    public function getWebPresence(): ?ShopifyMarketWebPresence
    {
        return $this->webPresence;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMarketUserError::fromArray($item); }, $data['userErrors']);
            }
            if (isset($data['webPresence']) && $data['webPresence'] !== null) {
                $instance->webPresence = ShopifyMarketWebPresence::fromArray($data['webPresence']);
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
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            if ($this->webPresence !== null) {
                $data['webPresence'] = $this->webPresence->asArray();
            }
            return $data;
        }
}
