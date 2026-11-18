<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * An action associated to a resource alert, such as editing variants.
 */
class ShopifyResourceAlertAction
{
    protected $primary;
    protected $show;
    protected $title;
    protected $url;

    
    /**
     * Whether the action appears as a button or as a link.
     *
     * @return bool
     */
    public function getPrimary(): ?bool
    {
        return $this->primary;
    }

    
    /**
     * Resource for the action to show.
     *
     * @return string
     */
    public function getShow(): ?string
    {
        return $this->show;
    }

    
    /**
     * The text for the button in the alert. For example, _Edit variants_.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The target URL that the button links to.
     *
     * @return string
     */
    public function getUrl(): mixed
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['primary']) && $data['primary'] !== null) {
                $instance->primary = $data['primary'];
            }
            if (isset($data['show']) && $data['show'] !== null) {
                $instance->show = $data['show'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
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
            if ($this->primary !== null) {
                $data['primary'] = $this->primary;
            }
            if ($this->show !== null) {
                $data['show'] = $this->show;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
