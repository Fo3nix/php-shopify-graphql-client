<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingTypographyStyle;

/**
 * The buttons customizations.
 */
class ShopifyCheckoutBrandingButton
{
    protected $background;
    protected $blockPadding;
    protected $border;
    protected $cornerRadius;
    protected $inlinePadding;
    protected $typography;

    
    /**
     * The background style used for buttons.
     *
     * @return string A ShopifyCheckoutBrandingBackgroundStyleEnumObject value
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    
    /**
     * The block padding used for buttons.
     *
     * @return string A ShopifyCheckoutBrandingSpacingEnumObject value
     */
    public function getBlockPadding(): ?string
    {
        return $this->blockPadding;
    }

    
    /**
     * The border used for buttons.
     *
     * @return string A ShopifyCheckoutBrandingSimpleBorderEnumObject value
     */
    public function getBorder(): ?string
    {
        return $this->border;
    }

    
    /**
     * The corner radius used for buttons.
     *
     * @return string A ShopifyCheckoutBrandingCornerRadiusEnumObject value
     */
    public function getCornerRadius(): ?string
    {
        return $this->cornerRadius;
    }

    
    /**
     * The inline padding used for buttons.
     *
     * @return string A ShopifyCheckoutBrandingSpacingEnumObject value
     */
    public function getInlinePadding(): ?string
    {
        return $this->inlinePadding;
    }

    
    /**
     * The typography used for buttons.
     *
     * @return ShopifyCheckoutBrandingTypographyStyle
     */
    public function getTypography(): ?ShopifyCheckoutBrandingTypographyStyle
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
                $instance->typography = ShopifyCheckoutBrandingTypographyStyle::fromArray($data['typography']);
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
