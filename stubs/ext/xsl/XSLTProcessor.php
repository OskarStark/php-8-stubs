<?php 

/** @generate-function-entries */
class XSLTProcessor
{
    /** @return bool */
    public function importStylesheet(object $stylesheet)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @return DOMDocument|false
     */
    public function transformToDoc(object $document, ?string $return_class = null)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @return int
     */
    public function transformToUri(object $document, string $uri)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @return string|false|null
     */
    public function transformToXml(object $document)
    {
    }
    /** @return bool */
    public function setParameter(string $namespace, array|string $name, ?string $value = null)
    {
    }
    /** @return string|false */
    public function getParameter(string $namespace, string $name)
    {
    }
    /** @return bool */
    public function removeParameter(string $namespace, string $name)
    {
    }
    /** @return bool */
    public function hasExsltSupport()
    {
    }
    /** @return void */
    public function registerPHPFunctions(array|string|null $restrict = null)
    {
    }
    /** @return bool */
    public function setProfiling(?string $filename)
    {
    }
    /** @return int */
    public function setSecurityPrefs(int $securityPrefs)
    {
    }
    /** @return int */
    public function getSecurityPrefs()
    {
    }
}