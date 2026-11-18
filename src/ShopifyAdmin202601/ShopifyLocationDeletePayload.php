<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocationDeleteUserError;

/**
 * Return type for `locationDelete` mutation.
 */
class ShopifyLocationDeletePayload
{
    protected $deletedLocationId;
    protected $locationDeleteUserErrors;

    
    /**
     * The ID of the location that was deleted.
     *
     * @return string
     */
    public function getDeletedLocationId(): ?string
    {
        return $this->deletedLocationId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyLocationDeleteUserError[]
     */
    public function getLocationDeleteUserErrors(): ?array
    {
        return $this->locationDeleteUserErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['deletedLocationId']) && $data['deletedLocationId'] !== null) {
                $instance->deletedLocationId = $data['deletedLocationId'];
            }
            if (isset($data['locationDeleteUserErrors']) && $data['locationDeleteUserErrors'] !== null) {
                $instance->locationDeleteUserErrors = array_map(function($item) { return ShopifyLocationDeleteUserError::fromArray($item); }, $data['locationDeleteUserErrors']);
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
            if ($this->deletedLocationId !== null) {
                $data['deletedLocationId'] = $this->deletedLocationId;
            }
            if ($this->locationDeleteUserErrors !== null) {
                $data['locationDeleteUserErrors'] = array_map(function($item) { return $item->asArray(); }, $this->locationDeleteUserErrors);
            }
            return $data;
        }
}
