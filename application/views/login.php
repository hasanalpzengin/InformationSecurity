<div class="login-page">
    <div class="form">
        <?php echo form_open("/login/register", array("class"=>"register-form", "method"=>"post")); ?>
            <input type="text" placeholder="name" name="username"/>
            <input type="password" placeholder="password" name="password"/>
            <input type="text" placeholder="email address" name="email"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <?php echo form_open("/login/login", array("class"=>"login-form", "method"=>"post")); ?>
            <input type="text" placeholder="username" name="username"/>
            <input type="password" placeholder="password" name="password"/>
            <button>login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>

<script src="/js/login.js" type="text/javascript"></script>