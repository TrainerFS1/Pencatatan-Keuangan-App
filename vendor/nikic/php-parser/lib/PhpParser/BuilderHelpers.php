<?php declare(strict_types=1);

namespace PhpParser;

use PhpParser\Node\ComplexType;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\NullableType;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

/**
 * This class defines helpers used in the implementation of builders. Don't use it directly.
 *
 * @internal
 */
<<<<<<< HEAD
<<<<<<< HEAD
final class BuilderHelpers {
=======
final class BuilderHelpers
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
final class BuilderHelpers
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * Normalizes a node: Converts builder objects to nodes.
     *
     * @param Node|Builder $node The node to normalize
     *
     * @return Node The normalized node
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function normalizeNode($node): Node {
=======
    public static function normalizeNode($node) : Node {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function normalizeNode($node) : Node {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($node instanceof Builder) {
            return $node->getNode();
        }

        if ($node instanceof Node) {
            return $node;
        }

        throw new \LogicException('Expected node or builder object');
    }

    /**
     * Normalizes a node to a statement.
     *
     * Expressions are wrapped in a Stmt\Expression node.
     *
     * @param Node|Builder $node The node to normalize
     *
     * @return Stmt The normalized statement node
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function normalizeStmt($node): Stmt {
=======
    public static function normalizeStmt($node) : Stmt {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function normalizeStmt($node) : Stmt {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $node = self::normalizeNode($node);
        if ($node instanceof Stmt) {
            return $node;
        }

        if ($node instanceof Expr) {
            return new Stmt\Expression($node);
        }

        throw new \LogicException('Expected statement or expression node');
    }

    /**
     * Normalizes strings to Identifier.
     *
     * @param string|Identifier $name The identifier to normalize
     *
     * @return Identifier The normalized identifier
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function normalizeIdentifier($name): Identifier {
=======
    public static function normalizeIdentifier($name) : Identifier {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function normalizeIdentifier($name) : Identifier {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($name instanceof Identifier) {
            return $name;
        }

        if (\is_string($name)) {
            return new Identifier($name);
        }

        throw new \LogicException('Expected string or instance of Node\Identifier');
    }

    /**
     * Normalizes strings to Identifier, also allowing expressions.
     *
     * @param string|Identifier|Expr $name The identifier to normalize
     *
     * @return Identifier|Expr The normalized identifier or expression
     */
    public static function normalizeIdentifierOrExpr($name) {
        if ($name instanceof Identifier || $name instanceof Expr) {
            return $name;
        }

        if (\is_string($name)) {
            return new Identifier($name);
        }

        throw new \LogicException('Expected string or instance of Node\Identifier or Node\Expr');
    }

    /**
     * Normalizes a name: Converts string names to Name nodes.
     *
     * @param Name|string $name The name to normalize
     *
     * @return Name The normalized name
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function normalizeName($name): Name {
=======
    public static function normalizeName($name) : Name {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function normalizeName($name) : Name {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($name instanceof Name) {
            return $name;
        }

        if (is_string($name)) {
            if (!$name) {
                throw new \LogicException('Name cannot be empty');
            }

            if ($name[0] === '\\') {
                return new Name\FullyQualified(substr($name, 1));
            }

            if (0 === strpos($name, 'namespace\\')) {
                return new Name\Relative(substr($name, strlen('namespace\\')));
            }

            return new Name($name);
        }

        throw new \LogicException('Name must be a string or an instance of Node\Name');
    }

    /**
     * Normalizes a name: Converts string names to Name nodes, while also allowing expressions.
     *
     * @param Expr|Name|string $name The name to normalize
     *
     * @return Name|Expr The normalized name or expression
     */
    public static function normalizeNameOrExpr($name) {
        if ($name instanceof Expr) {
            return $name;
        }

        if (!is_string($name) && !($name instanceof Name)) {
            throw new \LogicException(
                'Name must be a string or an instance of Node\Name or Node\Expr'
            );
        }

        return self::normalizeName($name);
    }

    /**
     * Normalizes a type: Converts plain-text type names into proper AST representation.
     *
     * In particular, builtin types become Identifiers, custom types become Names and nullables
     * are wrapped in NullableType nodes.
     *
     * @param string|Name|Identifier|ComplexType $type The type to normalize
     *
     * @return Name|Identifier|ComplexType The normalized type
     */
    public static function normalizeType($type) {
        if (!is_string($type)) {
            if (
                !$type instanceof Name && !$type instanceof Identifier &&
                !$type instanceof ComplexType
            ) {
                throw new \LogicException(
                    'Type must be a string, or an instance of Name, Identifier or ComplexType'
                );
            }
            return $type;
        }

        $nullable = false;
        if (strlen($type) > 0 && $type[0] === '?') {
            $nullable = true;
            $type = substr($type, 1);
        }

        $builtinTypes = [
            'array',
            'callable',
            'bool',
            'int',
            'float',
            'string',
            'iterable',
            'void',
            'object',
            'null',
            'false',
            'mixed',
            'never',
            'true',
        ];

        $lowerType = strtolower($type);
        if (in_array($lowerType, $builtinTypes)) {
            $type = new Identifier($lowerType);
        } else {
            $type = self::normalizeName($type);
        }

        $notNullableTypes = [
            'void', 'mixed', 'never',
        ];
        if ($nullable && in_array((string) $type, $notNullableTypes)) {
            throw new \LogicException(sprintf('%s type cannot be nullable', $type));
        }

        return $nullable ? new NullableType($type) : $type;
    }

    /**
     * Normalizes a value: Converts nulls, booleans, integers,
     * floats, strings and arrays into their respective nodes
     *
     * @param Node\Expr|bool|null|int|float|string|array $value The value to normalize
     *
     * @return Expr The normalized value
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function normalizeValue($value): Expr {
=======
    public static function normalizeValue($value) : Expr {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function normalizeValue($value) : Expr {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($value instanceof Node\Expr) {
            return $value;
        }

        if (is_null($value)) {
            return new Expr\ConstFetch(
                new Name('null')
            );
        }

        if (is_bool($value)) {
            return new Expr\ConstFetch(
                new Name($value ? 'true' : 'false')
            );
        }

        if (is_int($value)) {
<<<<<<< HEAD
<<<<<<< HEAD
            return new Scalar\Int_($value);
        }

        if (is_float($value)) {
            return new Scalar\Float_($value);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return new Scalar\LNumber($value);
        }

        if (is_float($value)) {
            return new Scalar\DNumber($value);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        if (is_string($value)) {
            return new Scalar\String_($value);
        }

        if (is_array($value)) {
            $items = [];
            $lastKey = -1;
            foreach ($value as $itemKey => $itemValue) {
                // for consecutive, numeric keys don't generate keys
                if (null !== $lastKey && ++$lastKey === $itemKey) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $items[] = new Node\ArrayItem(
=======
                    $items[] = new Expr\ArrayItem(
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $items[] = new Expr\ArrayItem(
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                        self::normalizeValue($itemValue)
                    );
                } else {
                    $lastKey = null;
<<<<<<< HEAD
<<<<<<< HEAD
                    $items[] = new Node\ArrayItem(
=======
                    $items[] = new Expr\ArrayItem(
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $items[] = new Expr\ArrayItem(
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                        self::normalizeValue($itemValue),
                        self::normalizeValue($itemKey)
                    );
                }
            }

            return new Expr\Array_($items);
        }

        throw new \LogicException('Invalid value');
    }

    /**
     * Normalizes a doc comment: Converts plain strings to PhpParser\Comment\Doc.
     *
     * @param Comment\Doc|string $docComment The doc comment to normalize
     *
     * @return Comment\Doc The normalized doc comment
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function normalizeDocComment($docComment): Comment\Doc {
=======
    public static function normalizeDocComment($docComment) : Comment\Doc {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function normalizeDocComment($docComment) : Comment\Doc {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($docComment instanceof Comment\Doc) {
            return $docComment;
        }

        if (is_string($docComment)) {
            return new Comment\Doc($docComment);
        }

        throw new \LogicException('Doc comment must be a string or an instance of PhpParser\Comment\Doc');
    }

    /**
     * Normalizes a attribute: Converts attribute to the Attribute Group if needed.
     *
     * @param Node\Attribute|Node\AttributeGroup $attribute
     *
     * @return Node\AttributeGroup The Attribute Group
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function normalizeAttribute($attribute): Node\AttributeGroup {
=======
    public static function normalizeAttribute($attribute) : Node\AttributeGroup
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function normalizeAttribute($attribute) : Node\AttributeGroup
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($attribute instanceof Node\AttributeGroup) {
            return $attribute;
        }

        if (!($attribute instanceof Node\Attribute)) {
            throw new \LogicException('Attribute must be an instance of PhpParser\Node\Attribute or PhpParser\Node\AttributeGroup');
        }

        return new Node\AttributeGroup([$attribute]);
    }

    /**
     * Adds a modifier and returns new modifier bitmask.
     *
     * @param int $modifiers Existing modifiers
<<<<<<< HEAD
<<<<<<< HEAD
     * @param int $modifier Modifier to set
     *
     * @return int New modifiers
     */
    public static function addModifier(int $modifiers, int $modifier): int {
        Modifiers::verifyModifier($modifiers, $modifier);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param int $modifier  Modifier to set
     *
     * @return int New modifiers
     */
    public static function addModifier(int $modifiers, int $modifier) : int {
        Stmt\Class_::verifyModifier($modifiers, $modifier);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $modifiers | $modifier;
    }

    /**
     * Adds a modifier and returns new modifier bitmask.
     * @return int New modifiers
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function addClassModifier(int $existingModifiers, int $modifierToSet): int {
        Modifiers::verifyClassModifier($existingModifiers, $modifierToSet);
=======
    public static function addClassModifier(int $existingModifiers, int $modifierToSet) : int {
        Stmt\Class_::verifyClassModifier($existingModifiers, $modifierToSet);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function addClassModifier(int $existingModifiers, int $modifierToSet) : int {
        Stmt\Class_::verifyClassModifier($existingModifiers, $modifierToSet);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $existingModifiers | $modifierToSet;
    }
}
