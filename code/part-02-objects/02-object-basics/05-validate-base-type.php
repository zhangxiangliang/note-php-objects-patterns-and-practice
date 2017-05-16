<?php
class AddressManager
{
    private $addresses = ["8.8.8.8", "114.114.114.114"];

    /**
     * 输出地址列表
     * 如果 $resolve 是 true，则每个地址都会被解析为域名
     * @param  [Boolean] $resolve 是否解析地址
     */
    public function outputAddresses($resolve)
    {
        if(is_string($resolve)) {
            $resolve = (preg_match("/false|no|off/i", $resolve)) ? false : true;
        }

        foreach ($this->addresses as $address) {
            print $address;
            if($resolve) print " {" . gethostbyaddr($address) . "}";
            print "\n";
        }
    }
}

$manager = new  AddressManager();
$manager->outputAddresses("true");
