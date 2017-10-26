<?php require "modelo.php"; ?>

    <div style="margin-left:33%;padding:70px 0">
        <div class="logo">Inclusão de Bem Patrimônial</div>

        <div class="login-form-1">
            <form id="login-form" class="text-left" method="POST" action="T07in.php">
                <div style="width:500px" class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <label for="motivo" class="sr-only">Motivo</label>
                            <textarea style="height: 100px" type="text" class="form-control" id="motivo" name="motivo" placeholder="Motivo"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="selbem" class="sr-only">Bem</label>
                            <select class="form-control" id="selbem" name="selbem" title='Bem'>
                            <option value="" selected disabled hidden>Bem</option>   
                                    <option>Bem 1</option> 
                                    <option>Bem 2</option> 
                                    <option>Bem 3</option> 
                                    <option>Bem 4</option> 
                                    <option>Bem 5</option> 
                                    <option>Bem 6</option> 
                                    </select>
                        </div>

                        <div class="form-group">
                            <label for="selsalao" class="sr-only">Sala Origem</label>
                            <select class="form-control" id="selsalao" name="selsalao">
                            <option value="" selected disabled hidden>Sala Origem</option> 
                                  <option value="1">Sala 1</option>
                                  <option value="1">Sala 2</option>
                                  <option value="1">Sala 3</option>

                                </select>
                        </div>
                        <div class="form-group">
                            <label for="selsalad" class="sr-only">Sala Destino</label>
                            <select class="form-control" id="selsalad" name="selsalad">
                            <option value="" selected disabled hidden>Sala Destino</option>
                                  <option value="1">Sala 1</option>
                                  <option value="2">Sala 2</option>
                                  <option value="3">Sala 3</option>
  
                                </select>
                        </div>
                    </div>
                    <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="etc-login-form">
                    <a href="index.php">Voltar</a>
                </div>
            </form>
        </div>

    </div>

</body>

</html>
