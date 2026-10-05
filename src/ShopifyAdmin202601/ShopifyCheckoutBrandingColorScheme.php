<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingColorRoles;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingControlColorRoles;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingButtonColorRoles;

class ShopifyCheckoutBrandingColorScheme
{
    protected $base;
    protected $control;
    protected $primaryButton;
    protected $secondaryButton;

    
    /**
     * @return ShopifyCheckoutBrandingColorRoles
     */
    public function getBase()
    {
        return $this->base;
    }

    
    /**
     * @return ShopifyCheckoutBrandingControlColorRoles
     */
    public function getControl()
    {
        return $this->control;
    }

    
    /**
     * @return ShopifyCheckoutBrandingButtonColorRoles
     */
    public function getPrimaryButton()
    {
        return $this->primaryButton;
    }

    
    /**
     * @return ShopifyCheckoutBrandingButtonColorRoles
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
                $instance->base = ShopifyCheckoutBrandingColorRoles::fromArray($data['base']);
            }
            if (isset($data['control']) && $data['control'] !== null) {
                $instance->control = ShopifyCheckoutBrandingControlColorRoles::fromArray($data['control']);
            }
            if (isset($data['primaryButton']) && $data['primaryButton'] !== null) {
                $instance->primaryButton = ShopifyCheckoutBrandingButtonColorRoles::fromArray($data['primaryButton']);
            }
            if (isset($data['secondaryButton']) && $data['secondaryButton'] !== null) {
                $instance->secondaryButton = ShopifyCheckoutBrandingButtonColorRoles::fromArray($data['secondaryButton']);
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
