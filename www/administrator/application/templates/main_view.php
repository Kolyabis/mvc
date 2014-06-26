<?php
    $form = new Form();
    if(isset($_POST['login']) && isset($_POST['pass'])){
        $form->checkForm($_POST['login'], $_POST['pass']);
    }
?>
<div class="wrap" style="margin: 2% 35% 5% 39%;">
	<p>
        <div style="border: 1px #808080 solid; padding: 20px; width: 30%; border-radius: 5px; background-color: #255869;">
            <form method="post" action="">
                <span class="span">Логин:</span>
                    <input type="text" name="login" size="25"/><br/>
                <span class="span">Пароль:</span>
                    <input type="password" name="pass" size="25"/><br/><br/>
                <input type="submit" value="Войти"/><br/>
            </form>
        </div>
	</p>
</div>
