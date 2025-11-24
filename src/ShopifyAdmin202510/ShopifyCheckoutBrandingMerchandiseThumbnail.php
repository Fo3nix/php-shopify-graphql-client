<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingMerchandiseThumbnailBadge;

class ShopifyCheckoutBrandingMerchandiseThumbnail
{
    protected $badge;
    protected $border;
    protected $cornerRadius;
    protected $fit;

    
    /**
     * @return ShopifyCheckoutBrandingMerchandiseThumbnailBadge
     */
    public function getBadge()
    {
        return $this->badge;
    }

    
    /**
     * @return ShopifyCheckoutBrandingSimpleBorderEnumObject
     */
    public function getBorder()
    {
        return $this->border;
    }

    
    /**
     * @return ShopifyCheckoutBrandingCornerRadiusEnumObject
     */
    public function getCornerRadius()
    {
        return $this->cornerRadius;
    }

    
    /**
     * @return ShopifyCheckoutBrandingObjectFitEnumObject
     */
    public function getFit()
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
                $instance->badge = ShopifyCheckoutBrandingMerchandiseThumbnailBadge::fromArray($data['badge']);
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
