<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootReturnCalculateArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(CalculateReturnInputInputObject $calculateReturnInputInputObject)
    {
        $this->input = $calculateReturnInputInputObject;

        return $this;
    }
}
