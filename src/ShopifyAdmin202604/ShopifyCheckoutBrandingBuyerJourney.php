<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Controls the visibility settings for checkout breadcrumb navigation that shows customers their progress through the purchase journey. This simple customization allows merchants to show or hide the breadcrumb trail based on their checkout flow preferences.
 *
 * For example, a single-page checkout experience might hide breadcrumbs to create a more streamlined appearance, while multi-step checkouts can display them to help customers understand their progress.
 *
 * The visibility setting provides merchants flexibility in how they present checkout navigation to match their specific user experience strategy.
 *
 * Learn more about [checkout customization](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBranding).
 */
class ShopifyCheckoutBrandingBuyerJourney
{
    protected $visibility;

    
    /**
     * An option to display or hide the breadcrumbs that represent the buyer's journey on 3-page checkout.
     *
     * @return string A ShopifyCheckoutBrandingVisibilityEnumObject value
     */
    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['visibility']) && $data['visibility'] !== null) {
                $instance->visibility = $data['visibility'];
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
            if ($this->visibility !== null) {
                $data['visibility'] = $this->visibility;
            }
            return $data;
        }
}
