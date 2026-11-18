<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocationActivateUserError;

/**
 * Return type for `locationActivate` mutation.
 */
class ShopifyLocationActivatePayload
{
    protected $location;
    protected $locationActivateUserErrors;

    
    /**
     * The location that was activated.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyLocationActivateUserError[]
     */
    public function getLocationActivateUserErrors(): ?array
    {
        return $this->locationActivateUserErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['locationActivateUserErrors']) && $data['locationActivateUserErrors'] !== null) {
                $instance->locationActivateUserErrors = array_map(function($item) { return ShopifyLocationActivateUserError::fromArray($item); }, $data['locationActivateUserErrors']);
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
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->locationActivateUserErrors !== null) {
                $data['locationActivateUserErrors'] = array_map(function($item) { return $item->asArray(); }, $this->locationActivateUserErrors);
            }
            return $data;
        }
}
