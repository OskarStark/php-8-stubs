<?php 

/** @generate-function-entries */
class finfo
{
    /** @alias finfo_open */
    public function __construct(int $flags = FILEINFO_NONE, string $magic_database = "")
    {
    }
    /**
     * @param resource|null $context
     * @return string|false
     * @alias finfo_file
     */
    public function file(string $filename, int $flags = FILEINFO_NONE, $context = null)
    {
    }
    /**
     * @param resource|null $context
     * @return string|false
     * @alias finfo_buffer
     */
    public function buffer(string $string, int $flags = FILEINFO_NONE, $context = null)
    {
    }
    /**
     * @return bool
     * @alias finfo_set_flags
     */
    public function set_flags(int $flags)
    {
    }
}