<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Shared color customizations for semantic and functional colors.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSharedColors
{
    protected $accent;
    protected $button;
    protected $control;
    protected $critical;
    protected $decorative;
    protected $info;
    protected $success;
    protected $warning;

    
    /**
     * The accent color for interactive elements.
     *
     * @return string
     */
    public function getAccent(): ?string
    {
        return $this->accent;
    }

    
    /**
     * The button color.
     *
     * @return string
     */
    public function getButton(): ?string
    {
        return $this->button;
    }

    
    /**
     * The form control color.
     *
     * @return string
     */
    public function getControl(): ?string
    {
        return $this->control;
    }

    
    /**
     * The critical/error color.
     *
     * @return string
     */
    public function getCritical(): ?string
    {
        return $this->critical;
    }

    
    /**
     * The decorative color.
     *
     * @return string
     */
    public function getDecorative(): ?string
    {
        return $this->decorative;
    }

    
    /**
     * The informational color.
     *
     * @return string
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    
    /**
     * The success color.
     *
     * @return string
     */
    public function getSuccess(): ?string
    {
        return $this->success;
    }

    
    /**
     * The warning color.
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
            if (isset($data['button']) && $data['button'] !== null) {
                $instance->button = $data['button'];
            }
            if (isset($data['control']) && $data['control'] !== null) {
                $instance->control = $data['control'];
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
            if ($this->button !== null) {
                $data['button'] = $this->button;
            }
            if ($this->control !== null) {
                $data['control'] = $this->control;
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
