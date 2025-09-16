<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingTypographyStyle;

class CheckoutBrandingButton
{
    protected $background;
    protected $blockPadding;
    protected $border;
    protected $cornerRadius;
    protected $inlinePadding;
    protected $typography;

    
    /**
     * @return CheckoutBrandingBackgroundStyleEnumObject
     */
    public function getBackground()
    {
        return $this->background;
    }

    
    /**
     * @return CheckoutBrandingSpacingEnumObject
     */
    public function getBlockPadding()
    {
        return $this->blockPadding;
    }

    
    /**
     * @return CheckoutBrandingSimpleBorderEnumObject
     */
    public function getBorder()
    {
        return $this->border;
    }

    
    /**
     * @return CheckoutBrandingCornerRadiusEnumObject
     */
    public function getCornerRadius()
    {
        return $this->cornerRadius;
    }

    
    /**
     * @return CheckoutBrandingSpacingEnumObject
     */
    public function getInlinePadding()
    {
        return $this->inlinePadding;
    }

    
    /**
     * @return CheckoutBrandingTypographyStyle
     */
    public function getTypography()
    {
        return $this->typography;
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
            if (isset($data['blockPadding']) && $data['blockPadding'] !== null) {
                $instance->blockPadding = $data['blockPadding'];
            }
            if (isset($data['border']) && $data['border'] !== null) {
                $instance->border = $data['border'];
            }
            if (isset($data['cornerRadius']) && $data['cornerRadius'] !== null) {
                $instance->cornerRadius = $data['cornerRadius'];
            }
            if (isset($data['inlinePadding']) && $data['inlinePadding'] !== null) {
                $instance->inlinePadding = $data['inlinePadding'];
            }
            if (isset($data['typography']) && $data['typography'] !== null) {
                $instance->typography = CheckoutBrandingTypographyStyle::fromArray($data['typography']);
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
            if ($this->blockPadding !== null) {
                $data['blockPadding'] = $this->blockPadding;
            }
            if ($this->border !== null) {
                $data['border'] = $this->border;
            }
            if ($this->cornerRadius !== null) {
                $data['cornerRadius'] = $this->cornerRadius;
            }
            if ($this->inlinePadding !== null) {
                $data['inlinePadding'] = $this->inlinePadding;
            }
            if ($this->typography !== null) {
                $data['typography'] = $this->typography->asArray();
            }
            return $data;
        }
}
