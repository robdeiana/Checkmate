$(document).ready(function()
{
    $("#login_a").click(function()
    {
        $("#login_form").fadeIn();
        $("#username").focus();
        submitLogin();
    });
    
    $("#cancel_hide").click(function()
    {
        $("#login_form").fadeOut("normal");
        $("#shadow").fadeOut("normal");
    });
    
    function submitLogin(){
        $("#submit_login").click(function()
        {           
            var username=$('#username').val();
            var password=$('#password').val();

            if(username.length > 0 && password.length > 0)
            {
                $.ajax(
                {
                    type: "POST",
                    url: "./index.php?action=login",
                    data: "username="+username+"&password="+password,

                    success: function(html)
                    {
                        alert(html);
                        if(html)
                        {
                            $("#login_form").fadeOut("normal");
                            $("#shadow").fadeOut();
                            location.href = "./index.php?page=home";
                            return true;
                        }
                        else
                        {
                            $("#add_err").html("Wrong username or password");
                            $("#username, #password").css({'border': '1px solid red'});
                        }
                    }
                });
                return false;
            }
            else
            {
                $("#add_err").html("Wrong username or password");
                $("#username, #password").css({'border': '1px solid red'});
            }
        });
    }
    
});
