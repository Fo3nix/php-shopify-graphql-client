<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingCustomizations;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingDesignSystem;

class CheckoutBranding
{
    protected $customizations;
    protected $designSystem;

    
    /**
     * @return CheckoutBrandingCustomizations
     */
    public function getCustomizations()
    {
        return $this->customizations;
    }

    
    /**
     * @return CheckoutBrandingDesignSystem
     */
    public function getDesignSystem()
    {
        return $this->designSystem;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customizations']) && $data['customizations'] !== null) {
                $instance->customizations = CheckoutBrandingCustomizations::fromArray($data['customizations']);
            }
            if (isset($data['designSystem']) && $data['designSystem'] !== null) {
                $instance->designSystem = CheckoutBrandingDesignSystem::fromArray($data['designSystem']);
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
            if ($this->customizations !== null) {
                $data['customizations'] = $this->customizations->asArray();
            }
            if ($this->designSystem !== null) {
                $data['designSystem'] = $this->designSystem->asArray();
            }
            return $data;
        }
}
