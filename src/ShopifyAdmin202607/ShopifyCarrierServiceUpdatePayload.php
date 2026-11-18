<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryCarrierService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCarrierServiceUpdateUserError;

/**
 * Return type for `carrierServiceUpdate` mutation.
 */
class ShopifyCarrierServiceUpdatePayload
{
    protected $carrierService;
    protected $userErrors;

    
    /**
     * The updated carrier service.
     *
     * @return ShopifyDeliveryCarrierService
     */
    public function getCarrierService(): ?ShopifyDeliveryCarrierService
    {
        return $this->carrierService;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCarrierServiceUpdateUserError[]
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
            if (isset($data['carrierService']) && $data['carrierService'] !== null) {
                $instance->carrierService = ShopifyDeliveryCarrierService::fromArray($data['carrierService']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCarrierServiceUpdateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->carrierService !== null) {
                $data['carrierService'] = $this->carrierService->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
