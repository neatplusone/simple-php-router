<?php

namespace Pecee\Http\Input\Attributes;

use Attribute;

/**
 *
 *
 * @since 8.0
 */
#[Attribute(Attribute::TARGET_METHOD|Attribute::TARGET_FUNCTION|Attribute::IS_REPEATABLE)]
class RouteAttribute{

    /**
     * @param string $name
     * @param string $type
     * @param string|null $validator
     */
    public function __construct(
        private string $name,
        private string $type,
        private ?string $validator = null
    ){}

    /**
     * @return string
     */
    public function getName(): string{
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string{
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getValidator(): ?string{
        return $this->validator;
    }

}