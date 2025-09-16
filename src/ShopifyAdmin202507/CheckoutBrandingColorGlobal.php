<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CheckoutBrandingColorGlobal
{
    protected $accent;
    protected $brand;
    protected $critical;
    protected $decorative;
    protected $info;
    protected $success;
    protected $warning;

    
    /**
     * @return string
     */
    public function getAccent()
    {
        return $this->accent;
    }

    
    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    
    /**
     * @return string
     */
    public function getCritical()
    {
        return $this->critical;
    }

    
    /**
     * @return string
     */
    public function getDecorative()
    {
        return $this->decorative;
    }

    
    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    
    /**
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
    }

    
    /**
     * @return string
     */
    public function getWarning()
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
