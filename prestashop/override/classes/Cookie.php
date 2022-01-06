<?php
class Cookie extends CookieCore
{	
    /*
    * module: psf_prestapay
    * date: 2021-12-24 21:54:33
    * version: 1.9.0
    */
    protected function _setcookie($cookie = null)
    {
		if (Tools::version_compare(_PS_VERSION_, '1.7.0', '>=')) {
			return $this->encryptAndSetCookie($cookie);
		}
		
        if ($cookie) {
            $content = $this->_cipherTool->encrypt($cookie);
            $time = $this->_expire;
        } else {
            $content = 0;
            $time = 1;
        }
		
        if (PHP_VERSION_ID <= 50200) { 
            return setcookie($this->_name, $content, $time, $this->_path, $this->_domain, $this->_secure);
        }
		
		return $this->fixSetCookie($content, $time);
    }
	
	
	/*
    * module: psf_prestapay
    * date: 2021-12-24 21:54:33
    * version: 1.9.0
    */
    protected function encryptAndSetCookie($cookie = null)
    {
        $length = (ini_get('mbstring.func_overload') & 2) ? mb_strlen($cookie, ini_get('default_charset')) : strlen($cookie);
        if ($length >= 1048576) {
            return false;
        }
		
        if ($cookie) {
            $content = $this->cipherTool->encrypt($cookie);
            $time = $this->_expire;
        } else {
            $content = 0;
            $time = 1;
        }
		return $this->fixSetCookie($content, $time);
    }
	
	/*
    * module: psf_prestapay
    * date: 2021-12-24 21:54:33
    * version: 1.9.0
    */
    protected function fixSetCookie($content, $time)
	{
		if (
			Configuration::get('PS_SSL_ENABLED') == 0 || 
			strpos($_SERVER['REQUEST_URI'], 'admin') === 1
		) {
            return setcookie($this->_name, $content, $time, $this->_path, $this->_domain, $this->_secure, true);
		}
        
        if (PHP_VERSION_ID < 70300) {
            return setcookie(
                $this->_name,
                $content,
                $time,
                $this->_path,
                $this->_domain .'; SameSite=None',
                $this->_secure,
                true
            );
        }
        return setcookie(
            $this->_name,
            $content,
            [
                'expires' => $time,
                'path' => $this->_path,
                'domain' => $this->_domain,
                'secure' => $this->_secure,
                'httponly' => true,
                'samesite' => 'None',
            ]
        );
	}
	
}
