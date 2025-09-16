<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CheckoutBrandingControl
{
    protected $border;
    protected $color;
    protected $cornerRadius;
    protected $labelPosition;

    
    /**
     * @return CheckoutBrandingSimpleBorderEnumObject
     */
    public function getBorder()
    {
        return $this->border;
    }

    
    /**
     * @return CheckoutBrandingColorSelectionEnumObject
     */
    public function getColor()
    {
        return $this->color;
    }

    
    /**
     * @return CheckoutBrandingCornerRadiusEnumObject
     */
    public function getCornerRadius()
    {
        return $this->cornerRadius;
    }

    
    /**
     * @return CheckoutBrandingLabelPositionEnumObject
     */
    public function getLabelPosition()
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
            if (isset($data['color']) && $data['color'] !== null) {
                $instance->color = $data['color'];
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
            if ($this->color !== null) {
                $data['color'] = $this->color;
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
