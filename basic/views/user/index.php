<html>
<head>
<title><?php echo $title?> </title>
</head>
<body>
    <form method="post" action="<?=$action?>">
        <table>
            <tr>
                <td>用户名：</td>
                <td><input type="text" name="loginname"></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>昵称：</td>
                <td><input type="text" name="nickname"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit">
                    <input type="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>