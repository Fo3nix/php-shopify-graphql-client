<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReverseDelivery;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReturnUserError;

/**
 * Return type for `reverseDeliveryCreateWithShipping` mutation.
 */
class ShopifyReverseDeliveryCreateWithShippingPayload
{
    protected $reverseDelivery;
    protected $userErrors;

    
    /**
     * The created reverse delivery.
     *
     * @return ShopifyReverseDelivery
     */
    public function getReverseDelivery(): ?ShopifyReverseDelivery
    {
        return $this->reverseDelivery;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyReturnUserError[]
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
            if (isset($data['reverseDelivery']) && $data['reverseDelivery'] !== null) {
                $instance->reverseDelivery = ShopifyReverseDelivery::fromArray($data['reverseDelivery']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyReturnUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->reverseDelivery !== null) {
                $data['reverseDelivery'] = $this->reverseDelivery->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
