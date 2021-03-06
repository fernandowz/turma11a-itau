<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Agencia</title>


    <!-- Chamada da biblioteca em CSS do BootStrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Chamada da biblioteca em CSS interna -->
    <link rel="stylesheet" href="css\biblioteca_estilos.css">



    <!-- Chamada da biblioteca em JS do BootStrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>


</head>

<body>
<table border="0" gainsboro;" width="100%" class="menu">
    <tr>
        <td style="text-align: center"><a href="..\trabalhofinal\agendamentocliente.html"> <img <td
                    align="center">Agendamento Atendimento Presencial</td>
        <td style="text-align: center"><a href="..\html\logingerente.html">Portal do Colaborador</a></td>
        <td align="center"></td>
        <td align="center"></td>

    </tr>

</table>

<table border="0" width="100%" class="menu">
    <tr>
        <td align="center"><a href="..\trabalhofinal\agendamentocliente.html"> <img
                    src="..\trabalhofinal\imagens\barra.png" width="100%" height="100%"> </td>
    </tr>

</table>

<body onload="carregaragencias()">
    <br>
    <div class="container">
        <BR>
        <div class="row">

            <div class="col-lg-1 col-md-1 col-sm-1 div1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 div2">
                <form>
                    <BR>
                    <div class="form-row">
                        <BR>
                        <h3 style="text-align: center;">FORMULÁRIO AGENDAMENTO</h3>
                        <div id="nomecli" class="form-group col-md-12">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome">
                        </div>
                        <div id="emailcli" class="form-group col-md-12">
                            <label for="inputEmail4">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Digite seu e-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="celcli" class="form-group col-md-12"></div>
                        <label for="inputCelular">Telefone Celular</label>
                        <input type="text" class="form-control" id="inputCelular"
                            placeholder="Digite seu telefone (xx) xxxxx-xxxx">
                    </div>
                    <div class="form-group>
                        <div id=" agcli" class="form-group col-md-6"></div>
                    <label for="inputAg">Agência</label>
                    <select id="inputAg" class="form-control">
                        <option selected>Selecione a Agência</option>
                        <option>...</option>
                    </select>
                    <BR>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group-prepend">
                                <label for="inputAg">Data</label>
                            </div>
                            <input id="dateagenda" type="date" class="form-control" aria-label="Username"
                                aria-describedby="addon-wrapping">

                        </div>
                        <div class="col-md-4">
                            <div class="input-group-prepend">
                                <label for="inputAg">Horario Início</label>
                            </div>
                            <input id="timehorainicio" type="time" class="form-control" aria-label="Username"
                                aria-describedby="addon-wrapping">
                        </div>
                        <div class="col-md-4">
                            <div class="input-group-prepend">
                                <label for="inputAg">Horario Fim</label>
                            </div>
                            <input id="timehorafim" type="time" class="form-control" aria-label="Username" <input
                                id="timehorafim" type="time" class="form-control" aria-label="Username"
                                aria-describedby="addon-wrapping">
                        </div>
                    </div>

                    <BR><BR>
                    <button onclick="gravar()" type="button" class="btn btn-primary">Confirmar Agendamento</button>
                    <BR><BR>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 div3"></div>
    </div>


</body>

</html>
