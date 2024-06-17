<?php

declare(strict_types=1);

namespace PhpParser\Builder;

use PhpParser;
use PhpParser\BuilderHelpers;
use PhpParser\Node;
use PhpParser\Node\Identifier;
use PhpParser\Node\Stmt;

<<<<<<< HEAD
<<<<<<< HEAD
class EnumCase implements PhpParser\Builder {
    /** @var Identifier|string */
    protected $name;
    /** @var ?Node\Expr */
    protected ?Node\Expr $value = null;
    /** @var array<string, mixed> */
    protected array $attributes = [];

    /** @var list<Node\AttributeGroup> */
    protected array $attributeGroups = [];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class EnumCase implements PhpParser\Builder
{
    protected $name;
    protected $value = null;
    protected $attributes = [];

    /** @var Node\AttributeGroup[] */
    protected $attributeGroups = [];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Creates an enum case builder.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|Identifier $name Name
=======
     * @param string|Identifier $name  Name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param string|Identifier $name  Name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * Sets the value.
     *
     * @param Node\Expr|string|int $value
     *
     * @return $this
     */
    public function setValue($value) {
        $this->value = BuilderHelpers::normalizeValue($value);

        return $this;
    }

    /**
     * Sets doc comment for the constant.
     *
     * @param PhpParser\Comment\Doc|string $docComment Doc comment to set
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function setDocComment($docComment) {
        $this->attributes = [
            'comments' => [BuilderHelpers::normalizeDocComment($docComment)]
        ];

        return $this;
    }

    /**
     * Adds an attribute group.
     *
     * @param Node\Attribute|Node\AttributeGroup $attribute
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addAttribute($attribute) {
        $this->attributeGroups[] = BuilderHelpers::normalizeAttribute($attribute);

        return $this;
    }

    /**
     * Returns the built enum case node.
     *
     * @return Stmt\EnumCase The built constant node
     */
    public function getNode(): PhpParser\Node {
        return new Stmt\EnumCase(
            $this->name,
            $this->value,
            $this->attributeGroups,
            $this->attributes
        );
    }
}
