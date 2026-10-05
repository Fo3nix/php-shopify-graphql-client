<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingBaseColorRoles;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingControlColorRoles;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingPrimaryButtonColorRoles;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingSecondaryButtonColorRoles;

class ShopifyCheckoutAndAccountsConfigurationBrandingColors
{
    protected $base;
    protected $control;
    protected $primaryButton;
    protected $secondaryButton;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingBaseColorRoles
     */
    public function getBase()
    {
        return $this->base;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingControlColorRoles
     */
    public function getControl()
    {
        return $this->control;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingPrimaryButtonColorRoles
     */
    public function getPrimaryButton()
    {
        return $this->primaryButton;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSecondaryButtonColorRoles
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
                $instance->base = ShopifyCheckoutAndAccountsConfigurationBrandingBaseColorRoles::fromArray($data['base']);
            }
            if (isset($data['control']) && $data['control'] !== null) {
                $instance->control = ShopifyCheckoutAndAccountsConfigurationBrandingControlColorRoles::fromArray($data['control']);
            }
            if (isset($data['primaryButton']) && $data['primaryButton'] !== null) {
                $instance->primaryButton = ShopifyCheckoutAndAccountsConfigurationBrandingPrimaryButtonColorRoles::fromArray($data['primaryButton']);
            }
            if (isset($data['secondaryButton']) && $data['secondaryButton'] !== null) {
                $instance->secondaryButton = ShopifyCheckoutAndAccountsConfigurationBrandingSecondaryButtonColorRoles::fromArray($data['secondaryButton']);
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
