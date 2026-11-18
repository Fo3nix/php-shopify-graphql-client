<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingColorRoles;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingControlColorRoles;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingButtonColorRoles;

/**
 * A base set of color customizations that's applied to an area of Checkout, from which every component
 * pulls its colors.
 */
class ShopifyCheckoutBrandingColorScheme
{
    protected $base;
    protected $control;
    protected $primaryButton;
    protected $secondaryButton;

    
    /**
     * The main colors of a scheme. Used for the surface background, text, links, and more.
     *
     * @return ShopifyCheckoutBrandingColorRoles
     */
    public function getBase(): ?ShopifyCheckoutBrandingColorRoles
    {
        return $this->base;
    }

    
    /**
     * The colors of form controls, such as the [`TextField`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/textfield) and [`ChoiceList`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/choicelist) components.
     *
     * @return ShopifyCheckoutBrandingControlColorRoles
     */
    public function getControl(): ?ShopifyCheckoutBrandingControlColorRoles
    {
        return $this->control;
    }

    
    /**
     * The colors of the primary button. For example, the main payment, or **Pay now** button.
     *
     * @return ShopifyCheckoutBrandingButtonColorRoles
     */
    public function getPrimaryButton(): ?ShopifyCheckoutBrandingButtonColorRoles
    {
        return $this->primaryButton;
    }

    
    /**
     * The colors of the secondary button, which is used for secondary actions. For example, **Buy again**.
     *
     * @return ShopifyCheckoutBrandingButtonColorRoles
     */
    public function getSecondaryButton(): ?ShopifyCheckoutBrandingButtonColorRoles
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
