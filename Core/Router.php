<?php
class Router
{
    public T $_;
    private Journal $_journal;

    function __construct
    (
        string $db_hostname,
        string $db_name,
        string $db_username,
        string $db_password
    )
    {
        $this->_ = new T($db_hostname, $db_name, $db_username, $db_password);
        $this->_journal = new Journal($db_hostname, $db_name, $db_username, $db_password);
    }

    private array $_genLink_hashOptions = ['cost' => 4]; // 4 is the working minimum

    private function _preparePassword(string $secret, string $redirectTo, string $salt)
    {
        return "$secret$redirectTo$salt";
    }

    public function genLink(string $redirectTo) : string
    {
        $grain = $this->_->db->customWhereClause3('Grain', ['redirectTo' => $redirectTo])[0];
        $password = $this->_preparePassword($grain->secret, $redirectTo, $this->_->getFromSession('salt'));
        $key = password_hash($password, PASSWORD_BCRYPT, $this->_genLink_hashOptions);

        return 'Router.php?uid=' . $grain->uid . '&skey=' . base64_encode($key);
    }

    public function routeLink(string $uid, string $key)
    {
        $grain = $this->_->db->customWhereClause3('Grain', ['uid' => $uid])[0];
        $password = $this->_preparePassword($grain->secret, $grain->redirectTo, $this->_->getFromSession('salt'));
        if (password_verify($password, base64_decode($key)))
        {
            header('Location: ' . $grain->redirectTo . '?skey=' . $key);
            die();
        }
    }

    public function keyLinkValidator(string $key, string $scriptName) : bool
    {
        $grain = $this->_->db->customWhereClause3('Grain', ['redirectTo' => $scriptName])[0];
        $password = $this->_preparePassword($grain->secret, $scriptName, $this->_->getFromSession('salt'));

        return password_verify($password, base64_decode($key));
    }
}