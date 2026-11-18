<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadge;

/**
 * The merchandise thumbnails customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail
{
    protected $badge;
    protected $border;
    protected $cornerRadius;
    protected $fit;

    
    /**
     * The merchandise thumbnail badge.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadge
     */
    public function getBadge(): ?ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadge
    {
        return $this->badge;
    }

    
    /**
     * The border.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingSimpleBorderEnumObject value
     */
    public function getBorder(): ?string
    {
        return $this->border;
    }

    
    /**
     * The corner radius.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusEnumObject value
     */
    public function getCornerRadius(): ?string
    {
        return $this->cornerRadius;
    }

    
    /**
     * The property used to customize how the product image fits within merchandise thumbnails.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingObjectFitEnumObject value
     */
    public function getFit(): ?string
    {
        return $this->fit;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['badge']) && $data['badge'] !== null) {
                $instance->badge = ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailBadge::fromArray($data['badge']);
            }
            if (isset($data['border']) && $data['border'] !== null) {
                $instance->border = $data['border'];
            }
            if (isset($data['cornerRadius']) && $data['cornerRadius'] !== null) {
                $instance->cornerRadius = $data['cornerRadius'];
            }
            if (isset($data['fit']) && $data['fit'] !== null) {
                $instance->fit = $data['fit'];
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
            if ($this->badge !== null) {
                $data['badge'] = $this->badge->asArray();
            }
            if ($this->border !== null) {
                $data['border'] = $this->border;
            }
            if ($this->cornerRadius !== null) {
                $data['cornerRadius'] = $this->cornerRadius;
            }
            if ($this->fit !== null) {
                $data['fit'] = $this->fit;
            }
            return $data;
        }
}
