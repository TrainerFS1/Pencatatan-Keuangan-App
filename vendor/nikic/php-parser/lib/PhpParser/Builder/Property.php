<?php declare(strict_types=1);

namespace PhpParser\Builder;

use PhpParser;
use PhpParser\BuilderHelpers;
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Modifiers;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\ComplexType;

<<<<<<< HEAD
<<<<<<< HEAD
class Property implements PhpParser\Builder {
    protected string $name;

    protected int $flags = 0;

    protected ?Node\Expr $default = null;
    /** @var array<string, mixed> */
    protected array $attributes = [];
    /** @var null|Identifier|Name|ComplexType */
    protected ?Node $type = null;
    /** @var list<Node\AttributeGroup> */
    protected array $attributeGroups = [];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Property implements PhpParser\Builder
{
    protected $name;

    protected $flags = 0;
    protected $default = null;
    protected $attributes = [];

    /** @var null|Identifier|Name|NullableType */
    protected $type;

    /** @var Node\AttributeGroup[] */
    protected $attributeGroups = [];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Creates a property builder.
     *
     * @param string $name Name of the property
     */
    public function __construct(string $name) {
        $this->name = $name;
    }

    /**
     * Makes the property public.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makePublic() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->flags = BuilderHelpers::addModifier($this->flags, Modifiers::PUBLIC);
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PUBLIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PUBLIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    /**
     * Makes the property protected.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeProtected() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->flags = BuilderHelpers::addModifier($this->flags, Modifiers::PROTECTED);
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PROTECTED);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PROTECTED);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    /**
     * Makes the property private.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makePrivate() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->flags = BuilderHelpers::addModifier($this->flags, Modifiers::PRIVATE);
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PRIVATE);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PRIVATE);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    /**
     * Makes the property static.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeStatic() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->flags = BuilderHelpers::addModifier($this->flags, Modifiers::STATIC);
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_STATIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_STATIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    /**
     * Makes the property readonly.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeReadonly() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->flags = BuilderHelpers::addModifier($this->flags, Modifiers::READONLY);
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_READONLY);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_READONLY);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    /**
     * Sets default value for the property.
     *
     * @param mixed $value Default value to use
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function setDefault($value) {
        $this->default = BuilderHelpers::normalizeValue($value);

        return $this;
    }

    /**
     * Sets doc comment for the property.
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
     * Sets the property type for PHP 7.4+.
     *
     * @param string|Name|Identifier|ComplexType $type
     *
     * @return $this
     */
    public function setType($type) {
        $this->type = BuilderHelpers::normalizeType($type);

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
     * Returns the built class node.
     *
     * @return Stmt\Property The built property node
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getNode(): PhpParser\Node {
        return new Stmt\Property(
            $this->flags !== 0 ? $this->flags : Modifiers::PUBLIC,
            [
                new Node\PropertyItem($this->name, $this->default)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getNode() : PhpParser\Node {
        return new Stmt\Property(
            $this->flags !== 0 ? $this->flags : Stmt\Class_::MODIFIER_PUBLIC,
            [
                new Stmt\PropertyProperty($this->name, $this->default)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            ],
            $this->attributes,
            $this->type,
            $this->attributeGroups
        );
    }
}
