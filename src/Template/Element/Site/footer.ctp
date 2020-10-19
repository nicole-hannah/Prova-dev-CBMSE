<script src="/webroot/js/site/jquery.min.js"></script>
<script src="/webroot/js/site/bootstrap.min.js"></script>
<script src="/webroot/js/site/propper.min.js"></script>
<script src="/webroot/js/site/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

<script>
    $(function() {
        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#forgot-form").fadeOut(100);
            $("#signup-form").fadeOut(100);
            e.preventDefault();
        });
        $('#forgot-form-link').click(function(e) {
            $("#forgot-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $("#signup-form").fadeOut(100);
            e.preventDefault();
        });
        $('#signup-form-link').click(function(e) {
            $("#signup-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $("#forgot-form").fadeOut(100);
            e.preventDefault();
        });
        $("#tipos").on('change', function (){
            if($( "#tipos option:selected" ).val()=='1'){
                $(".mascara").mask("(00) 0000-0000");
            }else if($( "#tipos option:selected" ).val()=='2'){
                $(".mascara").mask("(00) 00000-0000");
            }else{
                $(".mascara").unmask()
            }
        })
        function validacaoEmail(email){
            var atpos=email.indexOf("@");
            var dotpos=email.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
            {
                document.getElementById("msgemail").innerHTML="<font color='red'>Email inválido </font>";

            }else{
                $( "#contato" ).submit();
            }
        }
        $( "#salvar-contato" ).on('click', function( event ) {
            if($( "#tipos option:selected" ).val() =="" || $("#contato-input").val()==""){
                alert('Preencha todos os campos!')
            }else {
                if ($("#tipos option:selected").val() == '3') {
                    validacaoEmail($("#contato-input").val())
                } else {
                    $("#contato").submit();
                }
            }
        });

    });
</script>
</body>
</html>
