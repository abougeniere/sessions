<html>
    <?php
    session_start();

    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(), '', 0, '/');
    session_regenerate_id(true);

    if (ini_get("session.use_cookies"))
        {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }

    header('Location: testb.php');
    exit;
    ?>