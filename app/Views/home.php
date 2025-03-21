
<?= view('template/header'); ?>
<!-- Barra de links rápidos -->


<!-- Sessão para o novo tema -->
<div class="container-fluid p-0">
    <img src="<?php echo base_url('img/banner/banner.jpg'); ?>" alt="Descrição da Imagem" class="img-fluid w-100">
</div>


<!-- Sessão para o novo tema -->
<div class="container pt-5 mb-5">
    <div class="display-3 slackey-regular">
        Apoiadores
    </div>
    <div class="row"> 
        <div class="col-md-4 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/apoiadores/gleisi.jpg'); ?>" 
            alt="Gleisi Hoffman" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 300px; height: 300px; object-fit: cover;">

            <p class="fs-4 pt-sans-regular-italic">
                "Este projeto não pode parar, é o registro histórico da nossa luta por um Brasil melhor"
            </p>
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Gleisi Hoffman
            </p>
            <p class="h6" style="margin-top:-4px;">
                Presidente Nacional do PT
            </p>
        </div>

        <div class="col-md-4 col-sm-6 text-center">
            <img src="<?php echo base_url('img/apoiadores/paulobetty.jpg'); ?>" 
            alt="Paulo Betti" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 300px; height: 300px; object-fit: cover;">

            <p class="fs-4 pt-sans-regular-italic">
                "Eu gosto muito dessa ideia das Festas Lulinas, porque reforça o legado do grande líder Luís Inácio Lula da Silva"
            </p>
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Paulo Betti
            </p>
            <p class="h6" style="margin-top:-4px;">
                Ator
            </p>
        </div>
        
        <div class="col-md-4 col-sm-6 text-center">
            <img src="<?php echo base_url('img/apoiadores/kiko.jpg'); ?>" 
            alt="Kiko Celeguin" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 300px; height: 300px; object-fit: cover;">

            <p class="fs-4 pt-sans-regular-italic">
                "As Festas Lulinas são um excelente instrumento para mobilizar a militância"
            </p>
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Kiko Celeguin
            </p>
            <p class="h6" style="margin-top:-4px;">
                Presidente Estadual do PT
            </p>
        </div>
    </div>
</div>


<!-- Carrossel -->
<div class="container-fluid p-0 my-1">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('img/lulina1.jpg'); ?>" class="d-block w-100" alt="Festa Lulina 2022">
                <div class="carousel-caption">
                    <!-- <h3>Festa Lulina 2022</h3>
                    <p>A retomada da esperança!</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('img/lulina2.jpg'); ?>" class="d-block w-100" alt="Festa Lulina 2023">
                <div class="carousel-caption">
                    <!-- <h3>Festa Lulina 2023</h3>
                    <p>A consolidação da reconstrução!</p> -->
                </div>
            </div>
            <div class="carousel-item row-bgazulalpha">
                <img src="<?php echo base_url('img/lulina3.jpg'); ?>" class="d-block w-100" alt="Festa Lulina 2024">
                <div class="carousel-caption">
                    <!-- <h3>Festa Lulina 2024</h3>
                    <p>União e reconstrução em todo lugar!</p> -->
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</div>

<!-- Sessão para o Outros Conteúdos -->
<div class="container mt-5 mb-3">
    <div class="d-flex align-items-center justify-content-center" >
        <div class="pt-sans-regular">
            <div class="display-1 text-center slackey-regular" style="line-height: 0.85;">
                13 de JULHO à 13 de AGOSTO, realizamos as FESTAS LULINAS
            </div>
            <div class="fs-4 m-5">
                O Comitê Popular de Luta FESTAS LULINAS nasceu para registrar e fortalecer o legado e as realizações do Presidente Lula, um festival de festas populares no Brasil e no mundo. Já contou com a adesão de várias regiões do país e também no exterior. Além de Barueri, Osasco, São Paulo e estados como Bahia, Rio de Janeiro, Mato Grosso do Sul e Pernambuco, países como Alemanha, França e Espanha também fazem parte da iniciativa. A proposta do Comitê é fazer uma festa brasileira, que respeite as características de cada região, cidade, comunidade e bairro, sejam eles dentro ou fora do Brasil.
            </div>
            <div class="fs-4 m-5">
                Esta já é a nossa quarta edição e traz o tema:
            </div>
            <div class="display-6 text-center slackey-regular m-5" style="line-height:0.99;">
                Guerreiro contra a fome e a miséria.
            </div>

            <div class="fs-4 m-5">
                Nos anos anteriores os temas foram:
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url('img/edicoes/2022.jpg'); ?>" 
            alt="O Brasil festejando de novo" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 300; height: 300; object-fit: cover;">
                    <div class=" fs-4 text-center">
                        2022 - O Brasil festejando de novo
                    </div>
                    <div class="text-center">
                        A retomada da esperança!
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('img/edicoes/2023.jpg'); ?>" 
            alt="A consolidação da reconstrução!" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 300; height: 300; object-fit: cover;">
                    <div class=" fs-4 text-center">
                        2023 - Origens 
                    </div>
                    <div class="text-center">
                        Valorização da Nossa História
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('img/edicoes/2024.jpg'); ?>" 
            alt="Orgulho de ser brasileiro" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 300; height: 300; object-fit: cover;">
                    <div class=" fs-4 text-center">
                        2024 - Orgulho de ser brasileiro
                    </div>
                    <div class="text-center">
                        União e reconstrução em todo lugar!
                    </div>
                </div>
            </div>  
            <div class="display-1 text-center slackey-regular mt-5" style="line-height: 0.85;">
                Vem com a gente, abrace essa idéia!
            </div> 
            <div class="fs-4 m-5">
                O Comitê Popular de Luta FESTAS LULINAS nasceu para registrar e fortalecer o legado e as realizações do Presidente Lula, um festival de festas populares no Brasil e no mundo.
                Já contou com a adesão de várias regiões do país e também no exterior. Além de Barueri, Osasco, São Paulo e estados como Bahia, Rio de Janeiro, Mato Grosso do Sul e Pernambuco, países como Alemanha, França e Espanha também fazem parte da iniciativa.
                A proposta do Comitê é fazer uma festa brasileira, que respeite as características de cada região, cidade, comunidade e bairro, sejam eles dentro ou fora do Brasil.

            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mt-5">
    <div class="display-3 slackey-regular">
        Idealizadores
    </div>
    <div class="row mt-5 mt-5"> 
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/idealizadores/marcelo.jpg'); ?>" 
            alt="Marcelo Carvalho" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 250px; height: 250px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Marcelo Carvalho
            </p>
            <p class="h6" style="margin-top:-4px;">
                Idealizador
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/idealizadores/sandra.jpg'); ?>" 
            alt="Sandra Barbosa" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 250px; height: 250px; object-fit: cover;">

            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Sandra Barbosa
            </p>
            <p class="h6" style="margin-top:-4px;">
                Co-Idealizadora
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/idealizadores/kp.jpg'); ?>" 
            alt="Karl Pinheiro" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 250px; height: 250px; object-fit: cover;">

            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Karl Pinheiro
            </p>
            <p class="h6" style="margin-top:-4px;">
                Co-Idealizador
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/idealizadores/lorena.jpg'); ?>" 
            alt="Lorena" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 250px; height: 250px; object-fit: cover;">

            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Lorena
            </p>
            <p class="h6" style="margin-top:-4px;">
                Co-Idealizadora
            </p>
        </div>
    </div>
<div class="container">
    <div class="display-3 slackey-regular">
        Carregadores de Piano
    </div>
    <!-- Primeira Linha Carregadores de piano -->
    <div class="row mt-5 mt-5"> 
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/idealizadores/marcelo.jpg'); ?>" 
            alt="Marcelo Carvalho" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Marcelo Carvalho
            </p>
            <p class="h6" style="margin-top:-4px;">
                Idealizador
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/piano/alexandre.jpg'); ?>" 
            alt="Alexandre Laudio" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Alexandre Cláudio
            </p>
            <p class="h6" style="margin-top:-4px;">
                Articulação Política
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/piano/leonel.jpg'); ?>" 
            alt="Leonel" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Leonel
            </p>
            <p class="h6" style="margin-top:-4px;">
                Articulação Política
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/piano/marcosantol.png'); ?>" 
            alt="Marco Santo" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Marco Santo
            </p>
            <p class="h6" style="margin-top:-4px;">
                Fotógrafo
            </p>
        </div>
    </div>

    <!-- Segunda Linha Carregadores de Piano -->

    <div class="row mt-5 mt-5"> 
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/idealizadores/lorena.jpg'); ?>" 
            alt="Lorena" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Lorena
            </p>
            <p class="h6" style="margin-top:-4px;">
                Articulação Internacional
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            
        </div>
    </div>
</div>


<div class="container">
    <div class="display-3 slackey-regular">
        Festeiros
    </div>
    <!-- Primeira linha de festeiros -->
    <div class="row mt-5 mt-5"> 
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/festeiros/lucia.jpg'); ?>" 
            alt="Lucia" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Lúcia
            </p>
            <p class="h6" style="margin-top:-4px;">
                Barueri/SP
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/festeiros/gerson.jpg'); ?>" 
            alt="Gerson" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Gerson
            </p>
            <p class="h6" style="margin-top:-4px;">
                Baruei/SP
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/festeiros/meire.jpg'); ?>" 
            alt="Rosemeire" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Rosemeire
            </p>
            <p class="h6" style="margin-top:-4px;">
                Ponta Porã/MS
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/piano/leonel.jpg'); ?>" 
            alt="Leonel" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Leonel
            </p>
            <p class="h6" style="margin-top:-4px;">
                Jandira/SP
            </p>
        </div>
    </div>
    <!-- Festeiro 2 Linha -->
    <div class="row mt-5 mt-5"> 
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/piano/alexandre.jpg'); ?>" 
            alt="Alexandre Laudio" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Alexandre Cláudio
            </p>
            <p class="h6" style="margin-top:-4px;">
                São Paulo/SP
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/idealizadores/kp.jpg'); ?>" 
            alt="Karl Pinheiro" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Karl Pinheiro
            </p>
            <p class="h6" style="margin-top:-4px;">
                Baruei/SP
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">
            <img src="<?php echo base_url('img/idealizadores/sandra.jpg'); ?>" 
            alt="Sandra Barbosa" class="rounded-circle img-fluid imagem-com-borda mb-2" 
            style="width: 200px; height: 200px; object-fit: cover;">
            <p class="h5 slackey-regular" style="margin-top:-4px;">
                Sandra Barbosa
            </p>
            <p class="h6" style="margin-top:-4px;">
                Baruei/SP
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-center ">

        </div>
    </div>
</div>


<br><br><br><br>

<!-- sessão Colaboradores -->

    
<!-- 
<div class="container align-items-center justify-content-center  border border-dark rounded mt-3 mb-5">
    sessão colaboradores



    <div class="row row-bgazulalpha30 p-3 rounded">
        <div class="col-md-12 text-center row-bgazulalpha30 rounded p-2">
            <h2>Nossos Colaboradores</h2>
            <p class="lead">
                nononononono no no n hn on o n n no no no  no n n on o n on o noonononoo nn n onon on ononoo no no n onno n o no n n on nnon o nonon on no n on o nojnon o on no n on o no
            </p>
            <p>
                nononononono no no n hn on o n n no no no  no n n on o n on o noonononoo nn n onon on ononoo no no n onno n o no n n on nnon o nonon on no n on o nojnon o on no n on o no
            </p>
        </div>
    </div>
 Linha de fotinhos
    <div class="col">
        <div class="row-md-12">
            <h3>Carregadores de Piano</h3>
        </div>
    </div>
    <div class="row row-bgazulalpha30 p-3"> 
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
    </div>

Linha 2 de fotinhos 
    <div class="col">
        <div class="row-md-12">
            <h3>Colaboradores Ilustres</h3>
        </div>
    </div>
    <div class="row row-bgazulalpha30 p-3"> 
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
        <div class="col-md-2 col-sm-6 text-center">
            <img src="<?php echo base_url('img/face2.png'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 75px; height: 75px; object-fit: cover;">
            <h4 class="mt-3">Leoncio Barba</h4>
            <p>Coordenador do Movimento Vai que dá</p>
        </div>
    </div>
<div class="mb-5"></div>


</div> -->



<?=view('template/footer'); ?>