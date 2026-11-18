<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutBrandingColorScheme;

/**
 * The color schemes.
 */
class ShopifyCheckoutBrandingColorSchemes
{
    protected $scheme1;
    protected $scheme2;
    protected $scheme3;
    protected $scheme4;
    protected $scheme5;
    protected $scheme6;

    
    /**
     * The primary scheme. By default, it’s used for the main area of the interface.
     *
     * @return ShopifyCheckoutBrandingColorScheme
     */
    public function getScheme1(): ?ShopifyCheckoutBrandingColorScheme
    {
        return $this->scheme1;
    }

    
    /**
     * The secondary scheme. By default, it’s used for secondary areas, like Checkout’s Order Summary.
     *
     * @return ShopifyCheckoutBrandingColorScheme
     */
    public function getScheme2(): ?ShopifyCheckoutBrandingColorScheme
    {
        return $this->scheme2;
    }

    
    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     *
     * @return ShopifyCheckoutBrandingColorScheme
     */
    public function getScheme3(): ?ShopifyCheckoutBrandingColorScheme
    {
        return $this->scheme3;
    }

    
    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     *
     * @return ShopifyCheckoutBrandingColorScheme
     */
    public function getScheme4(): ?ShopifyCheckoutBrandingColorScheme
    {
        return $this->scheme4;
    }

    
    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     *
     * @return ShopifyCheckoutBrandingColorScheme
     */
    public function getScheme5(): ?ShopifyCheckoutBrandingColorScheme
    {
        return $this->scheme5;
    }

    
    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     *
     * @return ShopifyCheckoutBrandingColorScheme
     */
    public function getScheme6(): ?ShopifyCheckoutBrandingColorScheme
    {
        return $this->scheme6;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['scheme1']) && $data['scheme1'] !== null) {
                $instance->scheme1 = ShopifyCheckoutBrandingColorScheme::fromArray($data['scheme1']);
            }
            if (isset($data['scheme2']) && $data['scheme2'] !== null) {
                $instance->scheme2 = ShopifyCheckoutBrandingColorScheme::fromArray($data['scheme2']);
            }
            if (isset($data['scheme3']) && $data['scheme3'] !== null) {
                $instance->scheme3 = ShopifyCheckoutBrandingColorScheme::fromArray($data['scheme3']);
            }
            if (isset($data['scheme4']) && $data['scheme4'] !== null) {
                $instance->scheme4 = ShopifyCheckoutBrandingColorScheme::fromArray($data['scheme4']);
            }
            if (isset($data['scheme5']) && $data['scheme5'] !== null) {
                $instance->scheme5 = ShopifyCheckoutBrandingColorScheme::fromArray($data['scheme5']);
            }
            if (isset($data['scheme6']) && $data['scheme6'] !== null) {
                $instance->scheme6 = ShopifyCheckoutBrandingColorScheme::fromArray($data['scheme6']);
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
            if ($this->scheme1 !== null) {
                $data['scheme1'] = $this->scheme1->asArray();
            }
            if ($this->scheme2 !== null) {
                $data['scheme2'] = $this->scheme2->asArray();
            }
            if ($this->scheme3 !== null) {
                $data['scheme3'] = $this->scheme3->asArray();
            }
            if ($this->scheme4 !== null) {
                $data['scheme4'] = $this->scheme4->asArray();
            }
            if ($this->scheme5 !== null) {
                $data['scheme5'] = $this->scheme5->asArray();
            }
            if ($this->scheme6 !== null) {
                $data['scheme6'] = $this->scheme6->asArray();
            }
            return $data;
        }
}
