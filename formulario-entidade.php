<form name="form" method="post" action="">
    <table class="table table-striped" >
      <tr>                  76.713.593/0001-03
        <td> CNPJ: </td>
            <td><input  class="form-control"
                        placeholder="00.000.000/0000-00" 
                        type="text" 
                        name="cnpj"                            
                        title="Exemplo: 00.000.000/0000-00" 
                        required ></td>
      </tr> 

      <tr>
        <td> Parceiro: </td>
        <td><input  type="text" 
                    name="parceiro"
                    class="form-control"
                    value="<?= $parceiro['nome']; ?>" ></td>
      </tr> 
                   
      <tr>
        <td>     
          </br>                             
          <button type="submit" 
                  name="pesquisa"
                  class="btn btn-primary" > Consultar Parceiro </button>
        </td>                
      </tr>
    </table>                   
</form>