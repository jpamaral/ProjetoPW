<?php require "modelo.php"; ?>
<div style="margin-left:33%;padding:70px 0">
    <div class="logo">Inclusão de Salas</div>
    <div class="login-form-1">
        <form id="login-form" class="text-left" method="post" action="T05in.php">
            <div style="width:500px" class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="sl_num" class="sr-only">Numero</label>
                        <input type="number" class="form-control" id="sl_num" name="sl_num" placeholder="Número">
                    </div>
                    <div class="form-group">
                        <label for="sl_comp" class="sr-only">Comprimento</label>
                        <input type="number" class="form-control" id="sl_comp" name="sl_comp" placeholder="Comprimento">
                    </div>
                    <div class="form-group">
                        <label for="sl_larg" class="sr-only">Largura</label>
                        <input type="number" class="form-control" id="sl_larg" name="sl_larg" placeholder="Largura">
                    </div>
                    <div class="form-group">
                        <label for="sl_desc" class="sr-only">Descrição</label>
                        <textarea type="text" class="form-control" id="sl_desc" name="sl_desc" placeholder="Descrição"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sel1" class="sr-only">Prédio</label>
                        <select class="form-control" id="selpredio" name="selpredio" title='Prédio'>
                                      <option value="" selected disabled hidden>Prédio</option>              
                                      <option>Prédio 1</option>
                                      <option>Prédio 2</option>
                                      <option>Prédio 3</option>
                                    </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1" class="sr-only">Departamento</label>
                        <select class="form-control" id="seldep" name="seldep">
                                     <option value="" selected disabled hidden>Departamento</option>
                                    <option value="A">Departamento 1</option>
                                    <option value="B">Departamento 2</option>
                                    <option value="C">Departamento 3</option>

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
