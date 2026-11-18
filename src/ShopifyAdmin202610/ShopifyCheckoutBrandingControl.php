<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The form controls customizations.
 */
class ShopifyCheckoutBrandingControl
{
    protected $border;
    protected $color;
    protected $cornerRadius;
    protected $labelPosition;

    
    /**
     * The border used for form controls.
     *
     * @return string A ShopifyCheckoutBrandingSimpleBorderEnumObject value
     */
    public function getBorder(): ?string
    {
        return $this->border;
    }

    
    /**
     * Set to TRANSPARENT to define transparent form controls. If null, form controls inherit colors from their scheme settings (for example, the main section inherits from `design_system.colors.schemes.scheme1.control` by default). Note that usage of the `customizations.control.color` setting to customize the form control color is deprecated.
     *
     * @return string A ShopifyCheckoutBrandingColorSelectionEnumObject value
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    
    /**
     * The corner radius used for form controls.
     *
     * @return string A ShopifyCheckoutBrandingCornerRadiusEnumObject value
     */
    public function getCornerRadius(): ?string
    {
        return $this->cornerRadius;
    }

    
    /**
     * The label position used for form controls.
     *
     * @return string A ShopifyCheckoutBrandingLabelPositionEnumObject value
     */
    public function getLabelPosition(): ?string
    {
        return $this->labelPosition;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['border']) && $data['border'] !== null) {
                $instance->border = $data['border'];
            }
            if (isset($data['color']) && $data['color'] !== null) {
                $instance->color = $data['color'];
            }
            if (isset($data['cornerRadius']) && $data['cornerRadius'] !== null) {
                $instance->cornerRadius = $data['cornerRadius'];
            }
            if (isset($data['labelPosition']) && $data['labelPosition'] !== null) {
                $instance->labelPosition = $data['labelPosition'];
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
            if ($this->border !== null) {
                $data['border'] = $this->border;
            }
            if ($this->color !== null) {
                $data['color'] = $this->color;
            }
            if ($this->cornerRadius !== null) {
                $data['cornerRadius'] = $this->cornerRadius;
            }
            if ($this->labelPosition !== null) {
                $data['labelPosition'] = $this->labelPosition;
            }
            return $data;
        }
}
