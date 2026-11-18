<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPointOfSaleDevice;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPointOfSaleDeviceAssignToCashDrawerUserError;

/**
 * Return type for `pointOfSaleDeviceAssignToCashDrawer` mutation.
 */
class ShopifyPointOfSaleDeviceAssignToCashDrawerPayload
{
    protected $pointOfSaleDevice;
    protected $userErrors;

    
    /**
     * The point of sale device.
     *
     * @return ShopifyPointOfSaleDevice
     */
    public function getPointOfSaleDevice(): ?ShopifyPointOfSaleDevice
    {
        return $this->pointOfSaleDevice;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPointOfSaleDeviceAssignToCashDrawerUserError[]
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
            if (isset($data['pointOfSaleDevice']) && $data['pointOfSaleDevice'] !== null) {
                $instance->pointOfSaleDevice = ShopifyPointOfSaleDevice::fromArray($data['pointOfSaleDevice']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPointOfSaleDeviceAssignToCashDrawerUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->pointOfSaleDevice !== null) {
                $data['pointOfSaleDevice'] = $this->pointOfSaleDevice->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
