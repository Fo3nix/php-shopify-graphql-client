<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Defines the visual styling for checkbox elements throughout the checkout interface, focusing on corner radius customization. This allows merchants to align checkbox appearance with their overall design aesthetic.
 *
 * For example, a modern minimalist brand might prefer sharp, square checkboxes while a friendly consumer brand could opt for rounded corners to create a softer, more approachable feel.
 *
 * The corner radius setting ensures checkboxes integrate seamlessly with the overall checkout design language and brand identity.
 */
class ShopifyCheckoutBrandingCheckbox
{
    protected $cornerRadius;

    
    /**
     * The corner radius used for checkboxes.
     *
     * @return string A ShopifyCheckoutBrandingCornerRadiusEnumObject value
     */
    public function getCornerRadius(): ?string
    {
        return $this->cornerRadius;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cornerRadius']) && $data['cornerRadius'] !== null) {
                $instance->cornerRadius = $data['cornerRadius'];
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
            if ($this->cornerRadius !== null) {
                $data['cornerRadius'] = $this->cornerRadius;
            }
            return $data;
        }
}
