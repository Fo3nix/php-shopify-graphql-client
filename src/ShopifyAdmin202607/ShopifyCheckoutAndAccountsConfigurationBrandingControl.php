<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The form controls customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingControl
{
    protected $border;
    protected $cornerRadius;
    protected $labelPosition;

    
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
     * The label position.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationBrandingLabelPositionEnumObject value
     */
    public function getLabelPosition(): ?string
    {
        return $this->labelPosition;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['border']) && $data['border'] !== null) {
                $instance->border = $data['border'];
            }
            if (isset($data['cornerRadius']) && $data['cornerRadius'] !== null) {
                $instance->cornerRadius = $data['cornerRadius'];
            }
            if (isset($data['labelPosition']) && $data['labelPosition'] !== null) {
                $instance->labelPosition = $data['labelPosition'];
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
            if ($this->border !== null) {
                $data['border'] = $this->border;
            }
            if ($this->cornerRadius !== null) {
                $data['cornerRadius'] = $this->cornerRadius;
            }
            if ($this->labelPosition !== null) {
                $data['labelPosition'] = $this->labelPosition;
            }
            return $data;
        }
}
