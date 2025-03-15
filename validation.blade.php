<div class="a">
    <div class="b">
        <div class="c"><?php echo \Hyperf\Translation\trans("validation.login"); ?></div>
    </div>
    <form action="/validation/loginpost" method="post">
        <div class="e">
            < p>账号 </p >
            <input type="text" placeholder="请输入用户名" name="username"/>
            <p> 密码</p>
            <input type="password" placeholder="请输入密码" name="password"/><br/>
            <p> 邮箱</p>
            <input type="text" placeholder="请输入邮箱" name="email"/><br/>
            <input type="submit" id="subs" value="登录"/>
        </div>
    </form>
</div>
