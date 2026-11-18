<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShippingLine;

/**
 * A shipping line removed during an order edit.
 */
class ShopifyOrderStagedChangeRemoveShippingLine
{
    protected $shippingLine;

    
    /**
     * The removed shipping line.
     *
     * @return ShopifyShippingLine
     */
    public function getShippingLine(): ?ShopifyShippingLine
    {
        return $this->shippingLine;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['shippingLine']) && $data['shippingLine'] !== null) {
                $instance->shippingLine = ShopifyShippingLine::fromArray($data['shippingLine']);
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
            if ($this->shippingLine !== null) {
                $data['shippingLine'] = $this->shippingLine->asArray();
            }
            return $data;
        }
}
