<?php require "modelo.php"; ?>
    <div style="margin-left:33%;padding:70px 0">
        <div class="logo">Inclusão de Bem Patrimônial</div>
        <div class="login-form-1">
            <form id="login-form" class="text-left" method="POST" action="T06in.php">
                <div style="width:500px" class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <label for="in_desc" class="sr-only">Descrição</label>
                            <textarea style="height: 100px" type="text" class="form-control" id="in_desc" name="in_desc" placeholder="Descrição"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="in_dataa">Data de Aquisição</label>
                            <input type="date" class="form-control" id="in_dataa" name="in_dataa">
                        </div>
                        <div class="form-group">
                            <label for="in_prazo" class="sr-only">Prazo de Garantia</label>
                            <input type="number" class="form-control" id="in_prazo" name="in_prazo" placeholder="Prazo de garantia">
                        </div>
                        <div class="form-group">
                            <label for="in_nfe" class="sr-only">Nota Fiscal</label>
                            <input type="number" class="form-control" id="in_nfe" name="in_nfe" placeholder="Nota Fiscal">
                        </div>
                        <div class="form-group">
                            <label for="in_forn" class="sr-only">Fornecedor</label>
                            <input type="text" class="form-control" id="in_forn" name="in_forn" placeholder="Fornecedor">
                        </div>
                        <div class="form-group">
                            <label for="in_valor">Valor</label>
                            <div class="input-group">
                                <span class="input-group-addon">R$</span>
				<input type="number" value="0.00" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="in_valor" name="in_valor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="in_sit" class="sr-only">Situação</label>
                            <select class="form-control" name="in_sit" id="in_sit" title='Situação'> 
                            <option value="" selected disabled hidden>Situação</option>  
                                    <option value='B'>Baixado</option>
                                    <option value='I'>Incorporado</option>
                                    </select>
                        </div>

			 <div class="form-group">
                            <label for="selsala" class="sr-only">Sala </label>
                            <select class="form-control" id="selsala" name="selsala" title='Sala'> 
                            <option value="" selected disabled hidden>Sala</option> 
                                  <option value="">Sala 1</option>
                                  <option value="">Sala 2</option>
                                  <option value="">Sala 3</option>

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
