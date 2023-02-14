{include file="header.tpl" }

<form action="register" method="post">

    <label>Email</label>
    <input name="email" type="text">

    <label>Contraseña</label>
    <input name="password" type="password">

    <label>Repetir Contraseña</label>
    <input name="password2" type="password">

    <input type="submit">

</form>




{if (isset($usuario))}
    {$usuario|upper}
{/if}

{if (isset($mensaje))}
    {$mensaje}
{/if}

{include file="footer.tpl" }