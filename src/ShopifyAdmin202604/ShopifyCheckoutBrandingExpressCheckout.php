<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutBrandingExpressCheckoutButton;

class ShopifyCheckoutBrandingExpressCheckout
{
    protected $button;

    
    /**
     * @return ShopifyCheckoutBrandingExpressCheckoutButton
     */
    public function getButton()
    {
        return $this->button;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['button']) && $data['button'] !== null) {
                $instance->button = ShopifyCheckoutBrandingExpressCheckoutButton::fromArray($data['button']);
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
            if ($this->button !== null) {
                $data['button'] = $this->button->asArray();
            }
            return $data;
        }
}
