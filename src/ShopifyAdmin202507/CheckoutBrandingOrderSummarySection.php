<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CheckoutBrandingOrderSummarySection
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
     * @return CheckoutBrandingBackgroundEnumObject
     */
    public function getBackground()
    {
        return $this->background;
    }

    
    /**
     * @return CheckoutBrandingSimpleBorderEnumObject
     */
    public function getBorder()
    {
        return $this->border;
    }

    
    /**
     * @return CheckoutBrandingBorderStyleEnumObject
     */
    public function getBorderStyle()
    {
        return $this->borderStyle;
    }

    
    /**
     * @return CheckoutBrandingBorderWidthEnumObject
     */
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }

    
    /**
     * @return CheckoutBrandingColorSchemeSelectionEnumObject
     */
    public function getColorScheme()
    {
        return $this->colorScheme;
    }

    
    /**
     * @return CheckoutBrandingCornerRadiusEnumObject
     */
    public function getCornerRadius()
    {
        return $this->cornerRadius;
    }

    
    /**
     * @return CheckoutBrandingSpacingKeywordEnumObject
     */
    public function getPadding()
    {
        return $this->padding;
    }

    
    /**
     * @return CheckoutBrandingShadowEnumObject
     */
    public function getShadow()
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
