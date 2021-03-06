<?php 

class SoapServer
{
    public function __construct(?string $wsdl, array $options = [])
    {
    }
    /** @return void */
    public function fault(string $code, string $string, string $actor = "", mixed $details = null, string $name = "")
    {
    }
    /** @return void */
    public function addSoapHeader(SoapHeader $object)
    {
    }
    /** @return void */
    public function setPersistence(int $mode)
    {
    }
    /** @return void */
    public function setClass(string $class_name, mixed ...$argv)
    {
    }
    /** @return void */
    public function setObject(object $object)
    {
    }
    /** @return array */
    public function getFunctions()
    {
    }
    /**
     * @param array|string|int $functions
     * @return void
     */
    public function addFunction($functions)
    {
    }
    /** @return void */
    public function handle(?string $soap_request = null)
    {
    }
}