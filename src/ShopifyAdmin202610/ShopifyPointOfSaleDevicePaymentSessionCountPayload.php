<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPointOfSaleDevicePaymentSession;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPointOfSaleDevicePaymentSessionCountUserError;

/**
 * Return type for `pointOfSaleDevicePaymentSessionCount` mutation.
 */
class ShopifyPointOfSaleDevicePaymentSessionCountPayload
{
    protected $pointOfSaleDevicePaymentSession;
    protected $userErrors;

    
    /**
     * The point of sale device payment session after recording the count.
     *
     * @return ShopifyPointOfSaleDevicePaymentSession
     */
    public function getPointOfSaleDevicePaymentSession(): ?ShopifyPointOfSaleDevicePaymentSession
    {
        return $this->pointOfSaleDevicePaymentSession;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPointOfSaleDevicePaymentSessionCountUserError[]
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
            if (isset($data['pointOfSaleDevicePaymentSession']) && $data['pointOfSaleDevicePaymentSession'] !== null) {
                $instance->pointOfSaleDevicePaymentSession = ShopifyPointOfSaleDevicePaymentSession::fromArray($data['pointOfSaleDevicePaymentSession']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPointOfSaleDevicePaymentSessionCountUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->pointOfSaleDevicePaymentSession !== null) {
                $data['pointOfSaleDevicePaymentSession'] = $this->pointOfSaleDevicePaymentSession->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
