<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

  <!--Bootstrap--->
<link rel="stylesheet" href="<?php echo base_url('assets\css\bootstrap.min.css')?>" />
<!--Style--->
<link rel="stylesheet" href="<?php echo base_url('assets\css\style.css')?>" />
 <!-- font awesome -->
 <link rel="stylesheet" href="<?php echo base_url('assets\font-awesome-4.7.0\css\font-awesome.min.css')?>" />
    <!-- google fonts -->
   
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand " href="#">
          <h1>rIISPCAN</h1>
        </a>

        <!-- Toggler/collapsibe Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#myNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->

        <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
          <ul class="navbar-nav links d-md-none">
            <li class="nav-item">
              <a class="nav-link active" href="#"
                ><i class="fa fa-home text-muted mr-3"></i>Dashboard</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-list mr-3 text-muted"></i>App</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-envelope mr-3 text-muted"></i>Mailbox</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-desktop mr-3 text-muted"></i>UI Elements</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-envelope mr-3 text-muted"></i>Mailbox</a
              >
            </li>
          </ul>

          <!-- nav icons -->
          <ul class="navbar-nav icons">
            <li class="nav-item mr-4">
              <a class="nav-link" href="#"> <i class="fa fa-search"></i> </a>
            </li>
			<li class="nav-item">
              <a
                class="nav-link"
                data-toggle="modal"
                data-target="#sign-out"
                href="#"
              >
                <i class="fa fa-home"></i> Inicio
              </a>
            </li>
            
            
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="modal"
                data-target="#sign-out"
                href="#"
              >
                <i class="fa fa-sign-out"></i> Terminar Sessão
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of nav -->

    <!-- main content -->

    <div class="container-fluid">
      <div class="row">
        <nav
          class="col-md-3 col-lg-2 d-none d-md-block sidebar right-padding max-viewport"
        >
          <a class="navbar-brand py-3" href="#">
            <img
              src="<?php echo base_url('assets/img/foto1.jpg')?>"
              class="img-fluid rounded-circle img-thumbnail mr-3"
              alt="Logo"
              style="width:40px;"
            />
            Usuario
          </a>
          <hr />
          <ul class="navbar-nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#"
                ><i class="fa fa-home text-muted mr-3"></i>Painel do Administrador</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-list mr-3 text-muted"></i>Projectos</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-envelope mr-3 text-muted"></i>DPT Engenharia</a
              >
			  <ul class="content">
        
        <li><a class="nav-link " href="">Ver Detalhes</a</li>
        <li><a class="nav-link " href="">Editar</a></li>
        
				  <li><a  class="nav-link button" id="modalbtn" href="#">Adicionar Projecto</a></li>
				<div id="modalSimples" class="modal">
          <div class="content-modal">
                <div class="modal-cabecalho">
                  <span class="closebtn">&times;</span>
                  <h2>Depositar</h2>
                  
                  <div align="center">
                    <span class="step" id="step-1">DADOS DO ESTUDANTE</span>
                    <span class="step" id="step-2">PROJECTO/MONOGRAFIA</span>
                    <span class="step" id="step-3">CARREGAR MÍDIA</span>
                    <span class="step" id="step-4">LINKAR</span>
                  </div>
                </div>

              <div class="modal-body">
              <form class="formulario" action="" method="post" autocomplete="off" >
              <div class="tab" id="tab-1">
                 
                  <input type="text" name="n1" id="" placeholder="Nome Completo">
                  <input type="text" name="n2" id="" placeholder="Morada">
                  <input type="text" name="n2" id="" placeholder="BI nº">
                  <input type="text" name="n2" id="" placeholder="Data de Nascimento">
                  <input type="text" name="n2" id="" placeholder="Curso de Licenciatura">
                  <div class="index-btn-wrapper"> 
                    <div class="index-btn" onclick="executar(1, 2);">Proximo</div>
                  </div>
              </div>

              <div class="tab" id="tab-2">
              <input type="text" name="n1" id="" placeholder="Tema">
                  <input type="text" name="n2" id="" placeholder="Autor(a)">
                  <input type="text" name="n2" id="" placeholder="Orientador(a)">
                  <input type="text" name="n2" id="" placeholder="Coorientador(a)">
                  <input type="text" name="n2" id="" placeholder="Data de Criação">
    <div class="index-btn-wrapper"> 
      <div class="index-btn" onclick="executar(2, 1);">Voltar</div>
      <div class="index-btn" onclick="executar(2, 3);">Proximo</div>
    </div>
</div>

<div class="tab" id="tab-3">
    <p>PDF:</p>
    <input type="file" name="t1" id="" placeholder="Informe o numero telefonico">
    <p>IMAGEM DE CAPA:</p>
    <input type="file" name="t1" id="" placeholder="Informe o numero telefonico">
    <p>VIDEO:</p>
    <input type="file" name="t1" id="" placeholder="Informe o numero telefonico">
    <div class="index-btn-wrapper"> 
      <div class="index-btn" onclick="executar(3, 2);">Voltar</div>
      <div class="index-btn" onclick="executar(3, 4);">Proximo</div>
    </div>
</div>

<div class="tab" id="tab-4">
    <p>LINKAR PROJECTO:</p>
    <button>Github</button>
    <button>Mega</button>
    <div class="index-btn-wrapper"> 
      <div class="index-btn" onclick="executar(4, 3);">Voltar</div>
      <div class="index-btn" onclick="executar(4, 5);">Proximo</div>
    </div>
</div>


              <div class="modal-foooter">
              <div class="tab" id="tab-5">
            <div class="index-btn-wrapper"> 
              <div class="index-btn" onclick="executar(5, 4);">Voltar</div>
              <button class="index-btn" style="background: blue;" type="submit">Guardar</button>
            </div>
            </div>
    </form>
              </div>    
          </div>
        </div>
        
			  </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-desktop mr-3 text-muted"></i>DPT SAÚDE</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-envelope mr-3 text-muted"></i>DPT C.R.H</a
              >
            </li>
          </ul>
          <ul class="navbar-nav flex-column">
            <li class="nav-item text-uppercase text-muted">Conta</li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-user mr-3 text-muted"></i>Entrar</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-key mr-3 text-muted"></i>Cadastrar</a
              >
			  <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-key mr-3 text-muted"></i>Recuperar Senha</a
              >
			  <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa-key mr-3 text-muted"></i>Repôr Senha</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa- mr-3 text-muted"></i>Terminar Sessão</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"
                ><i class="fa fa- mr-3 text-muted"></i>Recomendações Futuras</a
              >
            </li>
          </ul>
        </nav>
        <!-- end of side bar -->

