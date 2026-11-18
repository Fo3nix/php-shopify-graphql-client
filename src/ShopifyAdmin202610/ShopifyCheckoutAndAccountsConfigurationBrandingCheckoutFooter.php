<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingColors;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingFooterContent;

/**
 * A container for the checkout footer section customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooter
{
    protected $alignment;
    protected $background;
    protected $colors;
    protected $content;
    protected $divided;
    protected $padding;
    protected $position;

    
    /**
     * The footer alignment.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingFooterAlignmentEnumObject value
     */
    public function getAlignment(): ?string
    {
        return $this->alignment;
    }

    
    /**
     * The background style of the footer container.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingBackgroundEnumObject value
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    
    /**
     * The colors customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingColors
     */
    public function getColors(): ?ShopifyCheckoutAndAccountsConfigurationBrandingColors
    {
        return $this->colors;
    }

    
    /**
     * The footer content settings.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingFooterContent
     */
    public function getContent(): ?ShopifyCheckoutAndAccountsConfigurationBrandingFooterContent
    {
        return $this->content;
    }

    
    /**
     * The divided setting.
     *
     * @return bool
     */
    public function getDivided(): ?bool
    {
        return $this->divided;
    }

    
    /**
     * The padding of the footer container.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingSpacingKeywordEnumObject value
     */
    public function getPadding(): ?string
    {
        return $this->padding;
    }

    
    /**
     * The footer position.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingFooterPositionEnumObject value
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['alignment']) && $data['alignment'] !== null) {
                $instance->alignment = $data['alignment'];
            }
            if (isset($data['background']) && $data['background'] !== null) {
                $instance->background = $data['background'];
            }
            if (isset($data['colors']) && $data['colors'] !== null) {
                $instance->colors = ShopifyCheckoutAndAccountsConfigurationBrandingColors::fromArray($data['colors']);
            }
            if (isset($data['content']) && $data['content'] !== null) {
                $instance->content = ShopifyCheckoutAndAccountsConfigurationBrandingFooterContent::fromArray($data['content']);
            }
            if (isset($data['divided']) && $data['divided'] !== null) {
                $instance->divided = $data['divided'];
            }
            if (isset($data['padding']) && $data['padding'] !== null) {
                $instance->padding = $data['padding'];
            }
            if (isset($data['position']) && $data['position'] !== null) {
                $instance->position = $data['position'];
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
            if ($this->alignment !== null) {
                $data['alignment'] = $this->alignment;
            }
            if ($this->background !== null) {
                $data['background'] = $this->background;
            }
            if ($this->colors !== null) {
                $data['colors'] = $this->colors->asArray();
            }
            if ($this->content !== null) {
                $data['content'] = $this->content->asArray();
            }
            if ($this->divided !== null) {
                $data['divided'] = $this->divided;
            }
            if ($this->padding !== null) {
                $data['padding'] = $this->padding;
            }
            if ($this->position !== null) {
                $data['position'] = $this->position;
            }
            return $data;
        }
}
