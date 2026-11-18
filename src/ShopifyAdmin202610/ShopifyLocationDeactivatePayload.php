<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocationDeactivateUserError;

/**
 * Return type for `locationDeactivate` mutation.
 */
class ShopifyLocationDeactivatePayload
{
    protected $location;
    protected $locationDeactivateUserErrors;

    
    /**
     * The location that was deactivated.
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
     * @return ShopifyLocationDeactivateUserError[]
     */
    public function getLocationDeactivateUserErrors(): ?array
    {
        return $this->locationDeactivateUserErrors;
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
            if (isset($data['locationDeactivateUserErrors']) && $data['locationDeactivateUserErrors'] !== null) {
                $instance->locationDeactivateUserErrors = array_map(function($item) { return ShopifyLocationDeactivateUserError::fromArray($item); }, $data['locationDeactivateUserErrors']);
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
            if ($this->locationDeactivateUserErrors !== null) {
                $data['locationDeactivateUserErrors'] = array_map(function($item) { return $item->asArray(); }, $this->locationDeactivateUserErrors);
            }
            return $data;
        }
}
