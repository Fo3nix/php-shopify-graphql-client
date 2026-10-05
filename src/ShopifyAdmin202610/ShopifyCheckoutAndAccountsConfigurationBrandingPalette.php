<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCheckoutAndAccountsConfigurationBrandingPalette
{
    protected $color1;
    protected $color10;
    protected $color11;
    protected $color12;
    protected $color13;
    protected $color14;
    protected $color15;
    protected $color16;
    protected $color17;
    protected $color18;
    protected $color19;
    protected $color2;
    protected $color20;
    protected $color3;
    protected $color4;
    protected $color5;
    protected $color6;
    protected $color7;
    protected $color8;
    protected $color9;

    
    /**
     * @return string
     */
    public function getColor1()
    {
        return $this->color1;
    }

    
    /**
     * @return string
     */
    public function getColor10()
    {
        return $this->color10;
    }

    
    /**
     * @return string
     */
    public function getColor11()
    {
        return $this->color11;
    }

    
    /**
     * @return string
     */
    public function getColor12()
    {
        return $this->color12;
    }

    
    /**
     * @return string
     */
    public function getColor13()
    {
        return $this->color13;
    }

    
    /**
     * @return string
     */
    public function getColor14()
    {
        return $this->color14;
    }

    
    /**
     * @return string
     */
    public function getColor15()
    {
        return $this->color15;
    }

    
    /**
     * @return string
     */
    public function getColor16()
    {
        return $this->color16;
    }

    
    /**
     * @return string
     */
    public function getColor17()
    {
        return $this->color17;
    }

    
    /**
     * @return string
     */
    public function getColor18()
    {
        return $this->color18;
    }

    
    /**
     * @return string
     */
    public function getColor19()
    {
        return $this->color19;
    }

    
    /**
     * @return string
     */
    public function getColor2()
    {
        return $this->color2;
    }

    
    /**
     * @return string
     */
    public function getColor20()
    {
        return $this->color20;
    }

    
    /**
     * @return string
     */
    public function getColor3()
    {
        return $this->color3;
    }

    
    /**
     * @return string
     */
    public function getColor4()
    {
        return $this->color4;
    }

    
    /**
     * @return string
     */
    public function getColor5()
    {
        return $this->color5;
    }

    
    /**
     * @return string
     */
    public function getColor6()
    {
        return $this->color6;
    }

    
    /**
     * @return string
     */
    public function getColor7()
    {
        return $this->color7;
    }

    
    /**
     * @return string
     */
    public function getColor8()
    {
        return $this->color8;
    }

    
    /**
     * @return string
     */
    public function getColor9()
    {
        return $this->color9;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['color1']) && $data['color1'] !== null) {
                $instance->color1 = $data['color1'];
            }
            if (isset($data['color10']) && $data['color10'] !== null) {
                $instance->color10 = $data['color10'];
            }
            if (isset($data['color11']) && $data['color11'] !== null) {
                $instance->color11 = $data['color11'];
            }
            if (isset($data['color12']) && $data['color12'] !== null) {
                $instance->color12 = $data['color12'];
            }
            if (isset($data['color13']) && $data['color13'] !== null) {
                $instance->color13 = $data['color13'];
            }
            if (isset($data['color14']) && $data['color14'] !== null) {
                $instance->color14 = $data['color14'];
            }
            if (isset($data['color15']) && $data['color15'] !== null) {
                $instance->color15 = $data['color15'];
            }
            if (isset($data['color16']) && $data['color16'] !== null) {
                $instance->color16 = $data['color16'];
            }
            if (isset($data['color17']) && $data['color17'] !== null) {
                $instance->color17 = $data['color17'];
            }
            if (isset($data['color18']) && $data['color18'] !== null) {
                $instance->color18 = $data['color18'];
            }
            if (isset($data['color19']) && $data['color19'] !== null) {
                $instance->color19 = $data['color19'];
            }
            if (isset($data['color2']) && $data['color2'] !== null) {
                $instance->color2 = $data['color2'];
            }
            if (isset($data['color20']) && $data['color20'] !== null) {
                $instance->color20 = $data['color20'];
            }
            if (isset($data['color3']) && $data['color3'] !== null) {
                $instance->color3 = $data['color3'];
            }
            if (isset($data['color4']) && $data['color4'] !== null) {
                $instance->color4 = $data['color4'];
            }
            if (isset($data['color5']) && $data['color5'] !== null) {
                $instance->color5 = $data['color5'];
            }
            if (isset($data['color6']) && $data['color6'] !== null) {
                $instance->color6 = $data['color6'];
            }
            if (isset($data['color7']) && $data['color7'] !== null) {
                $instance->color7 = $data['color7'];
            }
            if (isset($data['color8']) && $data['color8'] !== null) {
                $instance->color8 = $data['color8'];
            }
            if (isset($data['color9']) && $data['color9'] !== null) {
                $instance->color9 = $data['color9'];
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
            if ($this->color1 !== null) {
                $data['color1'] = $this->color1;
            }
            if ($this->color10 !== null) {
                $data['color10'] = $this->color10;
            }
            if ($this->color11 !== null) {
                $data['color11'] = $this->color11;
            }
            if ($this->color12 !== null) {
                $data['color12'] = $this->color12;
            }
            if ($this->color13 !== null) {
                $data['color13'] = $this->color13;
            }
            if ($this->color14 !== null) {
                $data['color14'] = $this->color14;
            }
            if ($this->color15 !== null) {
                $data['color15'] = $this->color15;
            }
            if ($this->color16 !== null) {
                $data['color16'] = $this->color16;
            }
            if ($this->color17 !== null) {
                $data['color17'] = $this->color17;
            }
            if ($this->color18 !== null) {
                $data['color18'] = $this->color18;
            }
            if ($this->color19 !== null) {
                $data['color19'] = $this->color19;
            }
            if ($this->color2 !== null) {
                $data['color2'] = $this->color2;
            }
            if ($this->color20 !== null) {
                $data['color20'] = $this->color20;
            }
            if ($this->color3 !== null) {
                $data['color3'] = $this->color3;
            }
            if ($this->color4 !== null) {
                $data['color4'] = $this->color4;
            }
            if ($this->color5 !== null) {
                $data['color5'] = $this->color5;
            }
            if ($this->color6 !== null) {
                $data['color6'] = $this->color6;
            }
            if ($this->color7 !== null) {
                $data['color7'] = $this->color7;
            }
            if ($this->color8 !== null) {
                $data['color8'] = $this->color8;
            }
            if ($this->color9 !== null) {
                $data['color9'] = $this->color9;
            }
            return $data;
        }
}
