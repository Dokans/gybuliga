<?php


class loginAdmin
{
    public $database;
    public $template;

    public function __construct(Db $db, Smarty $template)
    {
        $this->template = $template;
        $this->database = $db;
    }

    public function showLogin($message = "")
    {
        $this->template->assign("message", $message);
        $this->template->display("entryLogin.tpl");
    }

    public function logIn($login)
    {

        $user = $this->database->queryOne("SELECT name, password FROM gybuliga_dev.users WHERE admin = 1 and name = '$login[username]'");

        if (!empty($user) and sha1($login['password']) == $user['password']) {
            $this->setUserInfo($login);
            $this->enterAdmin();
        } else {
            throw new ErrorException("Neexistující uživatel / špatné heslo");
        }
    }

    public function enterAdmin()
    {
        $controler = new controllerAdmin($this->template, $this->database);
        $controler->getAction();

    }

    public function setUserInfo($login)
    {
        $_SESSION['name'] = $login['username'];
        $_SESSION['permission'] = $this->getUserPermissions($login['username']);
        $_SESSION['lastEntry'] = date("H:i");
    }

    public function getUserPermissions($user)
    {
        return $this->database->queryAll("SELECT p.name AS \"premission\", id
                                                FROM premission AS p
                                                JOIN premissiontorole AS pr ON p.premissionID = pr.premissionID
                                                JOIN roles AS r ON pr.roleID = r.roleID
                                                JOIN users AS u ON r.roleID = u.role
                                              WHERE u.name = '$user'");
    }
}