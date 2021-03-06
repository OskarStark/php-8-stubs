<?php 

class tidy
{
    public function __construct(?string $filename = null, array|string|null $config_options = null, ?string $encoding = null, bool $use_include_path = false)
    {
    }
    /**
     * @return string|int|bool
     * @alias tidy_getopt
     */
    public function getOpt(string $option)
    {
    }
    /**
     * @return bool
     * @alias tidy_clean_repair
     */
    public function cleanRepair()
    {
    }
    /** @return bool */
    public function parseFile(string $file, array|string|null $config_options = null, ?string $encoding = null, bool $use_include_path = false)
    {
    }
    /** @return bool */
    public function parseString(string $input, array|string|null $config_options = null, ?string $encoding = null)
    {
    }
    /**
     * @return bool
     * @alias tidy_repair_string
     */
    public function repairString(string $data, array|string|null $config_options = null, ?string $encoding = null)
    {
    }
    /**
     * @return bool
     * @alias tidy_repair_file
     */
    public function repairFile(string $filename, array|string|null $config_options = null, ?string $encoding = null, bool $use_include_path = false)
    {
    }
    /**
     * @return bool
     * @alias tidy_diagnose
     */
    public function diagnose()
    {
    }
    /**
     * @return string
     * @alias tidy_get_release
     */
    public function getRelease()
    {
    }
    /**
     * @return array
     * @alias tidy_get_config
     */
    public function getConfig()
    {
    }
    /**
     * @return int
     * @alias tidy_get_status
     */
    public function getStatus()
    {
    }
    /**
     * @return int
     * @alias tidy_get_html_ver
     */
    public function getHtmlVer()
    {
    }
    #ifdef HAVE_TIDYOPTGETDOC
    /**
     * @return string|false
     * @alias tidy_get_opt_doc
     */
    public function getOptDoc(string $optname)
    {
    }
    #endif
    /**
     * @return bool
     * @alias tidy_is_xhtml
     */
    public function isXhtml()
    {
    }
    /**
     * @return bool
     * @alias tidy_is_xml
     */
    public function isXml()
    {
    }
    /**
     * @return tidyNode|null
     * @alias tidy_get_root
     */
    public function root()
    {
    }
    /**
     * @return tidyNode|null
     * @alias tidy_get_head
     */
    public function head()
    {
    }
    /**
     * @return tidyNode|null
     * @alias tidy_get_html
     */
    public function html()
    {
    }
    /**
     * @return tidyNode|null
     * @alias tidy_get_body
     */
    public function body()
    {
    }
}