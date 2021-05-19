<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" name="author" content="Thiago Borges">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thiago Borges official </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap');
        #javascript {
            font: 10pt;
            font-family: Verdana, Geneva, Tahoma, sans-serif;   
            color: yellow;
            
        }

        h1,h2 {
            font-family: Pattaya;
            color: black;
            text-align: center;

        }

        h3 {
            
            font-family: Pattaya;
            color: black;
            text-align: center;

        }

        h6 {
            
            font-family: arial;
            color: black;
            font-weight: bold;

        }
        

        body {
            background-color: white;
            font:  12pt arial;
            color: black;
            padding: 0px;
        }

        #slides {
            padding: 0;
            margin-top: 20px;
        }

        #paragrafo1 {
            background-color: whitesmoke;
            padding: 1%;
            margin-top: 10px;
            width: 100%;
        }

        #titulo {
            font-size: 60px; 
        }
        .navbar{

            padding-top: 20px;
            padding-bottom: 17px;
            font-size: 18px;
            margin-bottom: 0px;
           

        }
       #banner {
         margin-top: 0px;
         background-color: orange;
       }

       .nav-item {
         margin-right: 6px;
         margin-left: 6px;
       }

       input {
         margin-bottom: 4px;
        
       }
    </style>
</head>
<body>
    <!--BARRA DE NAVEGAÇÃO-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="img/perfil.jpg" width="75" height="75" alt="" class="rounded-circle">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sobre mim
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Bandas</a>
                <a class="dropdown-item" href="#">Discos solo</a>
                <a class="dropdown-item" href="#">Canal do Youtube</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Release</a>
              </div>
            </li>       
            <li class="nav-item active">
              <a class="nav-link" href="#titulo">Cursos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#paragrafo1">Patrocinadores</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#paragrafo1">Depoimento dos alunos</a>
            </li>                                                     
            
          </ul>
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    <div class="container-fluid" id="banner">
    <h1 id="titulo">Aqui você aprende harmonia!</h1>
    </div>

    <!--Carousel-->

    <div class="container" id="slides">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/img1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/img2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/img3.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--Continua o texto-->

    
    <div class="container" id="paragrafo1"  >
        <h3>Por quê você deveria aprender a tocar um instrumento?</h3>
        <p>
            Muita gente não sabe, mas aprender a tocar um instrumento musical não é apenas um excelente hobby. Esse tipo de prática pode gerar benefícios em diferentes aspectos da sua vida.
        </p>
        <p>
            Estudos mostram que tocar instrumentos musicais ajuda tanto nas capacidades motoras do corpo quanto em vários processos cognitivos do cérebro. Confira abaixo alguns dos pontos positivos que a atividade pode gerar. 
        </p> 
          
        <h6>1. Melhora a capacidade de memorização</h6>
        <p> 
          Uma pesquisa publicada na The Telegraph, e várias outras do meio científico, 
          mostraram que tocar um instrumento musical melhora a capacidade de memorização. 
          Segundo ela, ao tocar, os músicos estimulam áreas importantes do cérebro que não são estimuladas por pessoas que não tocam nenhum instrumento, e são regiões responsáveis pela memorização de informações. <br>
        </p> 
        <h6>2. Torna você mais produtivo</h6>
          
        <p>Esse tipo de prática age diretamente na Função Executiva do cérebro. Essa é uma área responsável por execução de tarefas, tomada de decisões, resolução de problemas e seus relacionados. Pessoas que tocam algum tipo de instrumento musical com frequência e disciplina
          conseguem melhorar essas funções e, com isso, se tornam mais produtivas.</p>
          
         <h6>3. Aumenta a coordenação motora</h6>
         <p>Tocar instrumentos musicais, principalmente os que envolvem uma quantidade maior de movimentos em conjunto como bateria, violão e piano, também aumenta a coordenação motora.  Inclusive, essa é uma prática muito recomendada para o tratamento de doenças neurológicas e neurodegenerativas. Música também é saúde!</p>
          
          4. Combate o estresse e a ansiedade
          
          Como hobby ou profissão, essa atividade também age diretamente no combate do estresse e ansiedade. Tocar ajuda a diminuir os níveis de cortisol do corpo, que é uma substância que, em grandes quantidades, gera as sensações de ansiedade, nervosismo, raiva e estresse.
          
          5. Melhora a concentração e foco
          
          As regiões da memória que são ativadas quando você toca um instrumento musical também são responsáveis pela concentração e foco. Ou seja, quando você toca consegue melhorar o seu nível de atenção e assim executar tarefas com mais exatidão e qualidade.
          6. Combate a perda da capacidade cognitiva relacionada ao envelhecimento
          
          Conforme envelhecemos é comum que nossa capacidade cognitiva seja afetada. Com isso, pessoas adultas e idosas tendem a esquecerem de informações, não pensarem em respostas rápidas, ou até mesmo têm dificuldades com tarefas do cotidiano. Ao tocar um instrumento musical é possível estimular regiões do cérebro interligadas às capacidades cognitivas, evitando ou reduzindo a perda das mesmas. 
          
          7. Estimula os hormônios de bem-estar 
          
          Por último, mas não menos importante: tocar um instrumento musical também estimula a produção dos hormônios de bem-estar, como a serotonina. É através deles que você pode sentir as sensações de bem-estar, prazer e felicidade. Por conta de todos esses benefícios, esse tipo de prática também melhora a qualidade de vida. Afinal de contas ela ajuda tanto no aspecto físico quanto no mental do ser
          humano, trazendo evolução e desenvolvimento múltiplos. 
          
          E você, qual instrumento musical você gostaria de aprender a tocar para ter todas essas vantagens no dia a dia? Deixe o seu comentário abaixo e aproveite para compartilhar esse post!
        </p>
    </div>
    
    <!--<script src= "ex4.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
?>