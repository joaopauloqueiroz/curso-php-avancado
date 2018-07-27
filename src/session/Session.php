<?php
class Session
{
    public function __construct($name = 'NEWNAMESS')
    {
        session_name($name);
        session_start();
    }

    public function set($field, $value)
    {
        $_SESSION[$field] = $value;
    }
    //verificar se a o campo da sessão existe
    public function has($field)
    {
        return isset($_SESSION[$field]);
    }

    //verificar se a sessão existe se sim retornar o nome dela
    public function get($field)
    {
        return $this->has($field) ? $_SESSION[$field]: null;
    }

    //setar o tempo de expiração da sessão
    public function setExpireTime($strtime)
    {
        $this->set('duration', $strtime);
        $this->set('expire', strtotime("+$strtime"));
    }

    //registrar a nossa sessão! para gravar o tempo
    public function register($duration = '5 minutes')
    {
        $this->setExpireTime($duration);
    }

    //verifica se a sessão esta expirada
    public function expired()
    {
        if (time() > $this->get('expire')) {
            return true;
        }

        $this->renew();
        return false;
    }
    //verifcar se a sessão ainda e valida
    public function valid()
    {
        if ($this->expired()) {
            $this->destroy();
            return false;
        }
        return true;
    }
    //renovar o tempo da sessão
    public function renew()
    {
        $this->setExpireTime($this->get('duration'));
    }

    //destruir a sessão
    public function destroy()
    {
        $_SESSION = array();
        session_destroy();
    }
}
