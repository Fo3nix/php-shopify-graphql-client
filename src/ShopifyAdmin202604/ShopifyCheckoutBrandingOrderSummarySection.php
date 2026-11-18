<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The order summary sections customizations.
 */
class ShopifyCheckoutBrandingOrderSummarySection
{
    protected $background;
    protected $border;
    protected $borderStyle;
    protected $borderWidth;
    protected $colorScheme;
    protected $cornerRadius;
    protected $padding;
    protected $shadow;

    
    /**
     * The background style of the order summary sections.
     *
     * @return string A ShopifyCheckoutBrandingBackgroundEnumObject value
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    
    /**
     * The border for the order summary sections.
     *
     * @return string A ShopifyCheckoutBrandingSimpleBorderEnumObject value
     */
    public function getBorder(): ?string
    {
        return $this->border;
    }

    
    /**
     * The border style of the order summary sections.
     *
     * @return string A ShopifyCheckoutBrandingBorderStyleEnumObject value
     */
    public function getBorderStyle(): ?string
    {
        return $this->borderStyle;
    }

    
    /**
     * The border width of the order summary sections.
     *
     * @return string A ShopifyCheckoutBrandingBorderWidthEnumObject value
     */
    public function getBorderWidth(): ?string
    {
        return $this->borderWidth;
    }

    
    /**
     * The selected color scheme of the order summary sections.
     *
     * @return string A ShopifyCheckoutBrandingColorSchemeSelectionEnumObject value
     */
    public function getColorScheme(): ?string
    {
        return $this->colorScheme;
    }

    
    /**
     * The corner radius of the order summary sections.
     *
     * @return string A ShopifyCheckoutBrandingCornerRadiusEnumObject value
     */
    public function getCornerRadius(): ?string
    {
        return $this->cornerRadius;
    }

    
    /**
     * The padding of the order summary sections.
     *
     * @return string A ShopifyCheckoutBrandingSpacingKeywordEnumObject value
     */
    public function getPadding(): ?string
    {
        return $this->padding;
    }

    
    /**
     * The shadow of the order summary sections.
     *
     * @return string A ShopifyCheckoutBrandingShadowEnumObject value
     */
    public function getShadow(): ?string
    {
        return $this->shadow;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['background']) && $data['background'] !== null) {
                $instance->background = $data['background'];
            }
            if (isset($data['border']) && $data['border'] !== null) {
                $instance->border = $data['border'];
            }
            if (isset($data['borderStyle']) && $data['borderStyle'] !== null) {
                $instance->borderStyle = $data['borderStyle'];
            }
            if (isset($data['borderWidth']) && $data['borderWidth'] !== null) {
                $instance->borderWidth = $data['borderWidth'];
            }
            if (isset($data['colorScheme']) && $data['colorScheme'] !== null) {
                $instance->colorScheme = $data['colorScheme'];
            }
            if (isset($data['cornerRadius']) && $data['cornerRadius'] !== null) {
                $instance->cornerRadius = $data['cornerRadius'];
            }
            if (isset($data['padding']) && $data['padding'] !== null) {
                $instance->padding = $data['padding'];
            }
            if (isset($data['shadow']) && $data['shadow'] !== null) {
                $instance->shadow = $data['shadow'];
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
            if ($this->background !== null) {
                $data['background'] = $this->background;
            }
            if ($this->border !== null) {
                $data['border'] = $this->border;
            }
            if ($this->borderStyle !== null) {
                $data['borderStyle'] = $this->borderStyle;
            }
            if ($this->borderWidth !== null) {
                $data['borderWidth'] = $this->borderWidth;
            }
            if ($this->colorScheme !== null) {
                $data['colorScheme'] = $this->colorScheme;
            }
            if ($this->cornerRadius !== null) {
                $data['cornerRadius'] = $this->cornerRadius;
            }
            if ($this->padding !== null) {
                $data['padding'] = $this->padding;
            }
            if ($this->shadow !== null) {
                $data['shadow'] = $this->shadow;
            }
            return $data;
        }
}
