<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingFooterContent;

/**
 * A container for the footer section customizations.
 */
class ShopifyCheckoutBrandingFooter
{
    protected $alignment;
    protected $colorScheme;
    protected $content;
    protected $divided;
    protected $padding;
    protected $position;

    
    /**
     * The footer alignment.
     *
     * @return string A ShopifyCheckoutBrandingFooterAlignmentEnumObject value
     */
    public function getAlignment(): ?string
    {
        return $this->alignment;
    }

    
    /**
     * The selected color scheme of the footer container.
     *
     * @return string A ShopifyCheckoutBrandingColorSchemeSelectionEnumObject value
     */
    public function getColorScheme(): ?string
    {
        return $this->colorScheme;
    }

    
    /**
     * The footer content settings.
     *
     * @return ShopifyCheckoutBrandingFooterContent
     */
    public function getContent(): ?ShopifyCheckoutBrandingFooterContent
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
     * @return string A ShopifyCheckoutBrandingSpacingKeywordEnumObject value
     */
    public function getPadding(): ?string
    {
        return $this->padding;
    }

    
    /**
     * The footer position.
     *
     * @return string A ShopifyCheckoutBrandingFooterPositionEnumObject value
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
            if (isset($data['colorScheme']) && $data['colorScheme'] !== null) {
                $instance->colorScheme = $data['colorScheme'];
            }
            if (isset($data['content']) && $data['content'] !== null) {
                $instance->content = ShopifyCheckoutBrandingFooterContent::fromArray($data['content']);
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
            if ($this->colorScheme !== null) {
                $data['colorScheme'] = $this->colorScheme;
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
