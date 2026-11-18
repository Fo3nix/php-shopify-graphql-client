<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutBrandingColorRoles;

/**
 * Defines the color palette specifically for button elements within checkout branding, including hover states. These color roles ensure buttons maintain proper contrast and visual hierarchy throughout the checkout experience.
 *
 * For example, a sports brand might configure bright accent colors for primary action buttons, with darker hover states and contrasting text colors that maintain accessibility standards.
 *
 * Use the `ButtonColorRoles` object to:
 * - Define button color schemes for different states
 * - Ensure proper contrast for accessibility compliance
 * - Coordinate button colors with overall brand palette
 *
 * Button color roles include background, border, text, icon, accent (for focused states), and decorative elements, plus specific hover state colors that provide clear interactive feedback to customers.
 */
class ShopifyCheckoutBrandingButtonColorRoles
{
    protected $accent;
    protected $background;
    protected $border;
    protected $decorative;
    protected $hover;
    protected $icon;
    protected $text;

    
    /**
     * The color of accented objects (links and focused state).
     *
     * @return string
     */
    public function getAccent(): ?string
    {
        return $this->accent;
    }

    
    /**
     * The color of the background.
     *
     * @return string
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    
    /**
     * The color of borders.
     *
     * @return string
     */
    public function getBorder(): ?string
    {
        return $this->border;
    }

    
    /**
     * The decorative color for highlighting specific parts of the user interface.
     *
     * @return string
     */
    public function getDecorative(): ?string
    {
        return $this->decorative;
    }

    
    /**
     * The colors of the button on hover.
     *
     * @return ShopifyCheckoutBrandingColorRoles
     */
    public function getHover(): ?ShopifyCheckoutBrandingColorRoles
    {
        return $this->hover;
    }

    
    /**
     * The color of icons.
     *
     * @return string
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    
    /**
     * The color of text.
     *
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
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
            if (isset($data['background']) && $data['background'] !== null) {
                $instance->background = $data['background'];
            }
            if (isset($data['border']) && $data['border'] !== null) {
                $instance->border = $data['border'];
            }
            if (isset($data['decorative']) && $data['decorative'] !== null) {
                $instance->decorative = $data['decorative'];
            }
            if (isset($data['hover']) && $data['hover'] !== null) {
                $instance->hover = ShopifyCheckoutBrandingColorRoles::fromArray($data['hover']);
            }
            if (isset($data['icon']) && $data['icon'] !== null) {
                $instance->icon = $data['icon'];
            }
            if (isset($data['text']) && $data['text'] !== null) {
                $instance->text = $data['text'];
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
            if ($this->background !== null) {
                $data['background'] = $this->background;
            }
            if ($this->border !== null) {
                $data['border'] = $this->border;
            }
            if ($this->decorative !== null) {
                $data['decorative'] = $this->decorative;
            }
            if ($this->hover !== null) {
                $data['hover'] = $this->hover->asArray();
            }
            if ($this->icon !== null) {
                $data['icon'] = $this->icon;
            }
            if ($this->text !== null) {
                $data['text'] = $this->text;
            }
            return $data;
        }
}
