<?PHP
    function auth($login, $passwd) {
        if (!$login or !$passwd)
            return false;
        $file = "../private/passwd";
        $data = unserialize(file_get_contents($file));
        foreach($data as $i) {
            if ($i['login'] === $login && $i['passwd'] === hash('whirlpool', $passwd)) {
                return true;
            }
        }
        return false;
    }
?>