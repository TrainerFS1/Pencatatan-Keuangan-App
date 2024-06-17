<?php declare(strict_types=1);

namespace PhpParser;

<<<<<<< HEAD
<<<<<<< HEAD
class Error extends \RuntimeException {
    protected string $rawMessage;
    /** @var array<string, mixed> */
    protected array $attributes;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Error extends \RuntimeException
{
    protected $rawMessage;
    protected $attributes;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Creates an Exception signifying a parse error.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $message Error message
     * @param array<string, mixed> $attributes Attributes of node/token where error occurred
     */
    public function __construct(string $message, array $attributes = []) {
        $this->rawMessage = $message;
        $this->attributes = $attributes;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string    $message    Error message
     * @param array|int $attributes Attributes of node/token where error occurred
     *                              (or start line of error -- deprecated)
     */
    public function __construct(string $message, $attributes = []) {
        $this->rawMessage = $message;
        if (is_array($attributes)) {
            $this->attributes = $attributes;
        } else {
            $this->attributes = ['startLine' => $attributes];
        }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->updateMessage();
    }

    /**
     * Gets the error message
     *
     * @return string Error message
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getRawMessage(): string {
=======
    public function getRawMessage() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getRawMessage() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->rawMessage;
    }

    /**
     * Gets the line the error starts in.
     *
     * @return int Error start line
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getStartLine(): int {
=======
    public function getStartLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStartLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->attributes['startLine'] ?? -1;
    }

    /**
     * Gets the line the error ends in.
     *
     * @return int Error end line
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getEndLine(): int {
=======
    public function getEndLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getEndLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->attributes['endLine'] ?? -1;
    }

    /**
     * Gets the attributes of the node/token the error occurred at.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, mixed>
     */
    public function getAttributes(): array {
=======
     * @return array
     */
    public function getAttributes() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @return array
     */
    public function getAttributes() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->attributes;
    }

    /**
     * Sets the attributes of the node/token the error occurred at.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $attributes
     */
    public function setAttributes(array $attributes): void {
=======
     * @param array $attributes
     */
    public function setAttributes(array $attributes) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param array $attributes
     */
    public function setAttributes(array $attributes) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->attributes = $attributes;
        $this->updateMessage();
    }

    /**
     * Sets the line of the PHP file the error occurred in.
     *
     * @param string $message Error message
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function setRawMessage(string $message): void {
=======
    public function setRawMessage(string $message) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function setRawMessage(string $message) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->rawMessage = $message;
        $this->updateMessage();
    }

    /**
     * Sets the line the error starts in.
     *
     * @param int $line Error start line
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function setStartLine(int $line): void {
=======
    public function setStartLine(int $line) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function setStartLine(int $line) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->attributes['startLine'] = $line;
        $this->updateMessage();
    }

    /**
     * Returns whether the error has start and end column information.
     *
     * For column information enable the startFilePos and endFilePos in the lexer options.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function hasColumnInfo(): bool {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function hasColumnInfo() : bool {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return isset($this->attributes['startFilePos'], $this->attributes['endFilePos']);
    }

    /**
     * Gets the start column (1-based) into the line where the error started.
     *
     * @param string $code Source code of the file
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function getStartColumn(string $code): int {
=======
     * @return int
     */
    public function getStartColumn(string $code) : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @return int
     */
    public function getStartColumn(string $code) : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!$this->hasColumnInfo()) {
            throw new \RuntimeException('Error does not have column information');
        }

        return $this->toColumn($code, $this->attributes['startFilePos']);
    }

    /**
     * Gets the end column (1-based) into the line where the error ended.
     *
     * @param string $code Source code of the file
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function getEndColumn(string $code): int {
=======
     * @return int
     */
    public function getEndColumn(string $code) : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @return int
     */
    public function getEndColumn(string $code) : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!$this->hasColumnInfo()) {
            throw new \RuntimeException('Error does not have column information');
        }

        return $this->toColumn($code, $this->attributes['endFilePos']);
    }

    /**
     * Formats message including line and column information.
     *
     * @param string $code Source code associated with the error, for calculation of the columns
     *
     * @return string Formatted message
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getMessageWithColumnInfo(string $code): string {
=======
    public function getMessageWithColumnInfo(string $code) : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getMessageWithColumnInfo(string $code) : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return sprintf(
            '%s from %d:%d to %d:%d', $this->getRawMessage(),
            $this->getStartLine(), $this->getStartColumn($code),
            $this->getEndLine(), $this->getEndColumn($code)
        );
    }

    /**
     * Converts a file offset into a column.
     *
     * @param string $code Source code that $pos indexes into
<<<<<<< HEAD
<<<<<<< HEAD
     * @param int $pos 0-based position in $code
     *
     * @return int 1-based column (relative to start of line)
     */
    private function toColumn(string $code, int $pos): int {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param int    $pos  0-based position in $code
     *
     * @return int 1-based column (relative to start of line)
     */
    private function toColumn(string $code, int $pos) : int {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($pos > strlen($code)) {
            throw new \RuntimeException('Invalid position information');
        }

        $lineStartPos = strrpos($code, "\n", $pos - strlen($code));
        if (false === $lineStartPos) {
            $lineStartPos = -1;
        }

        return $pos - $lineStartPos;
    }

    /**
     * Updates the exception message after a change to rawMessage or rawLine.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function updateMessage(): void {
=======
    protected function updateMessage() {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected function updateMessage() {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->message = $this->rawMessage;

        if (-1 === $this->getStartLine()) {
            $this->message .= ' on unknown line';
        } else {
            $this->message .= ' on line ' . $this->getStartLine();
        }
    }
}
