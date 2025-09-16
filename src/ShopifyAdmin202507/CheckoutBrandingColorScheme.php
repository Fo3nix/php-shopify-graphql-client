<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingColorRoles;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingControlColorRoles;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingButtonColorRoles;

class CheckoutBrandingColorScheme
{
    protected $base;
    protected $control;
    protected $primaryButton;
    protected $secondaryButton;

    
    /**
     * @return CheckoutBrandingColorRoles
     */
    public function getBase()
    {
        return $this->base;
    }

    
    /**
     * @return CheckoutBrandingControlColorRoles
     */
    public function getControl()
    {
        return $this->control;
    }

    
    /**
     * @return CheckoutBrandingButtonColorRoles
     */
    public function getPrimaryButton()
    {
        return $this->primaryButton;
    }

    
    /**
     * @return CheckoutBrandingButtonColorRoles
     */
    public function getSecondaryButton()
    {
        return $this->secondaryButton;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['base']) && $data['base'] !== null) {
                $instance->base = CheckoutBrandingColorRoles::fromArray($data['base']);
            }
            if (isset($data['control']) && $data['control'] !== null) {
                $instance->control = CheckoutBrandingControlColorRoles::fromArray($data['control']);
            }
            if (isset($data['primaryButton']) && $data['primaryButton'] !== null) {
                $instance->primaryButton = CheckoutBrandingButtonColorRoles::fromArray($data['primaryButton']);
            }
            if (isset($data['secondaryButton']) && $data['secondaryButton'] !== null) {
                $instance->secondaryButton = CheckoutBrandingButtonColorRoles::fromArray($data['secondaryButton']);
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
            if ($this->base !== null) {
                $data['base'] = $this->base->asArray();
            }
            if ($this->control !== null) {
                $data['control'] = $this->control->asArray();
            }
            if ($this->primaryButton !== null) {
                $data['primaryButton'] = $this->primaryButton->asArray();
            }
            if ($this->secondaryButton !== null) {
                $data['secondaryButton'] = $this->secondaryButton->asArray();
            }
            return $data;
        }
}
