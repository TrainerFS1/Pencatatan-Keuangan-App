<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Node\UseItem;

class GroupUse extends Stmt {
    /**
     * @var Use_::TYPE_* Type of group use
     */
    public int $type;
    /** @var Name Prefix for uses */
    public Name $prefix;
    /** @var UseItem[] Uses */
    public array $uses;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class GroupUse extends Stmt
{
    /** @var int Type of group use */
    public $type;
    /** @var Name Prefix for uses */
    public $prefix;
    /** @var UseUse[] Uses */
    public $uses;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a group use node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Name $prefix Prefix for uses
     * @param UseItem[] $uses Uses
     * @param Use_::TYPE_* $type Type of group use
     * @param array<string, mixed> $attributes Additional attributes
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param Name     $prefix     Prefix for uses
     * @param UseUse[] $uses       Uses
     * @param int      $type       Type of group use
     * @param array    $attributes Additional attributes
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(Name $prefix, array $uses, int $type = Use_::TYPE_NORMAL, array $attributes = []) {
        $this->attributes = $attributes;
        $this->type = $type;
        $this->prefix = $prefix;
        $this->uses = $uses;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['type', 'prefix', 'uses'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['type', 'prefix', 'uses'];
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_GroupUse';
    }
}
