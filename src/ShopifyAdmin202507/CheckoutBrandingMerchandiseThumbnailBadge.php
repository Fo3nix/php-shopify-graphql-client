<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CheckoutBrandingMerchandiseThumbnailBadge
{
    protected $background;

    
    /**
     * @return CheckoutBrandingMerchandiseThumbnailBadgeBackgroundEnumObject
     */
    public function getBackground()
    {
        return $this->background;
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
            return $data;
        }
}
