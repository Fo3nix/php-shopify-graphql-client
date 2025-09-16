<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingColorScheme;

class CheckoutBrandingColorSchemes
{
    protected $scheme1;
    protected $scheme2;
    protected $scheme3;
    protected $scheme4;

    
    /**
     * @return CheckoutBrandingColorScheme
     */
    public function getScheme1()
    {
        return $this->scheme1;
    }

    
    /**
     * @return CheckoutBrandingColorScheme
     */
    public function getScheme2()
    {
        return $this->scheme2;
    }

    
    /**
     * @return CheckoutBrandingColorScheme
     */
    public function getScheme3()
    {
        return $this->scheme3;
    }

    
    /**
     * @return CheckoutBrandingColorScheme
     */
    public function getScheme4()
    {
        return $this->scheme4;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['scheme1']) && $data['scheme1'] !== null) {
                $instance->scheme1 = CheckoutBrandingColorScheme::fromArray($data['scheme1']);
            }
            if (isset($data['scheme2']) && $data['scheme2'] !== null) {
                $instance->scheme2 = CheckoutBrandingColorScheme::fromArray($data['scheme2']);
            }
            if (isset($data['scheme3']) && $data['scheme3'] !== null) {
                $instance->scheme3 = CheckoutBrandingColorScheme::fromArray($data['scheme3']);
            }
            if (isset($data['scheme4']) && $data['scheme4'] !== null) {
                $instance->scheme4 = CheckoutBrandingColorScheme::fromArray($data['scheme4']);
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
            return $data;
        }
}
