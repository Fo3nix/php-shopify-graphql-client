<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Defines the global color roles for checkout branding. These semantic colors maintain consistency across all checkout elements and provide the foundation for the checkout's visual design system.
 *
 * Use global colors to:
 * - Set brand colors for primary actions and buttons
 * - Define accent colors for links and interactive elements
 * - Configure semantic colors for success, warning, and error states
 * - Apply decorative colors for visual highlights
 *
 * For example, a merchant might set their brand blue for primary buttons, green for success messages, amber for warnings, and red for critical errors, creating a consistent color language throughout checkout.
 *
 * Learn more about [checkout customization](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBranding).
 */
class ShopifyCheckoutBrandingColorGlobal
{
    protected $accent;
    protected $brand;
    protected $critical;
    protected $decorative;
    protected $info;
    protected $success;
    protected $warning;

    
    /**
     * A color used for interaction, like links and focus states.
     *
     * @return string
     */
    public function getAccent(): ?string
    {
        return $this->accent;
    }

    
    /**
     * A color that's strongly associated with the merchant. Currently used for
     * primary buttons, for example **Pay now**, and secondary buttons, for example **Buy again**.
     *
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    
    /**
     * A semantic color used for components that communicate critical content. For example, a blocking error such as the requirement to enter a valid credit card number.
     *
     * @return string
     */
    public function getCritical(): ?string
    {
        return $this->critical;
    }

    
    /**
     * A color used to highlight certain areas of the user interface. For example, the [`Text`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/titles-and-text/text#textprops-propertydetail-appearance) component.
     *
     * @return string
     */
    public function getDecorative(): ?string
    {
        return $this->decorative;
    }

    
    /**
     * A semantic color used for components that communicate general, informative content.
     *
     * @return string
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    
    /**
     * A semantic color used for components that communicate successful actions or a positive state.
     *
     * @return string
     */
    public function getSuccess(): ?string
    {
        return $this->success;
    }

    
    /**
     * A semantic color used for components that display content that requires attention. For example, something that might be wrong, but not blocking.
     *
     * @return string
     */
    public function getWarning(): ?string
    {
        return $this->warning;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accent']) && $data['accent'] !== null) {
                $instance->accent = $data['accent'];
            }
            if (isset($data['brand']) && $data['brand'] !== null) {
                $instance->brand = $data['brand'];
            }
            if (isset($data['critical']) && $data['critical'] !== null) {
                $instance->critical = $data['critical'];
            }
            if (isset($data['decorative']) && $data['decorative'] !== null) {
                $instance->decorative = $data['decorative'];
            }
            if (isset($data['info']) && $data['info'] !== null) {
                $instance->info = $data['info'];
            }
            if (isset($data['success']) && $data['success'] !== null) {
                $instance->success = $data['success'];
            }
            if (isset($data['warning']) && $data['warning'] !== null) {
                $instance->warning = $data['warning'];
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
            if ($this->accent !== null) {
                $data['accent'] = $this->accent;
            }
            if ($this->brand !== null) {
                $data['brand'] = $this->brand;
            }
            if ($this->critical !== null) {
                $data['critical'] = $this->critical;
            }
            if ($this->decorative !== null) {
                $data['decorative'] = $this->decorative;
            }
            if ($this->info !== null) {
                $data['info'] = $this->info;
            }
            if ($this->success !== null) {
                $data['success'] = $this->success;
            }
            if ($this->warning !== null) {
                $data['warning'] = $this->warning;
            }
            return $data;
        }
}
