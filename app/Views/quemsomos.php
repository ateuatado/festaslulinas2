<?=view('template/header'); ?>



<h1>Quem Somos</h1>

<p class="lead">
    O site Festas Lulinas é uma plataforma dedicada a celebrar e promover as Festas Lulinas, um movimento popular, cultural e político que celebra a cultura brasileira, especialmente as tradições juninas e julinas, e homenageia o legado do ex-presidente Luiz Inácio Lula da Silva.
</p>

<h2>Nossa Missão</h2>

<p>
    Nossa missão é conectar pessoas, instituições, associações e partidos que desejam organizar e participar das Festas Lulinas em todo o Brasil. Acreditamos na força da cultura popular como ferramenta de união, resistência e transformação social. Queremos fortalecer os laços comunitários, promover a solidariedade e celebrar a alegria de viver, tudo isso sob a inspiração dos valores e conquistas do governo Lula no combate à fome e à miséria.
</p>

<h2>Nossa História</h2>

<p>
    As Festas Lulinas surgiram em [ano de surgimento, se houver] como uma forma de celebrar a cultura brasileira e, ao mesmo tempo, reafirmar o compromisso com a justiça social e a inclusão. Desde então, o movimento cresceu e se espalhou por todo o país.
</p>

<div class="row">
    <div class="col-md-4">
        <h3>Festa Lulina 2022</h3>
        <p>Em 2022, celebramos a volta da esperança com a primeira Festa Lulina, após um período difícil para a democracia brasileira. Foi um momento de reencontro e celebração da cultura popular.</p>
    </div>
    <div class="col-md-4">
        <h3>Festa Lulina 2023</h3>
        <p>Em 2023, consolidamos a reconstrução, reunindo ainda mais pessoas em festas por todo o Brasil. A alegria e a união foram as marcas dessa edição.</p>
    </div>
    <div class="col-md-4">
        <h3>Festa Lulina 2024</h3>
        <p>Em 2024, o tema "União e Reconstrução" se fez presente em cada festa, reforçando nosso compromisso com um Brasil mais justo e igualitário para todos.</p>
    </div>
</div>

<h2>Nossos Valores</h2>

<ul>
    <li><strong>Cultura Popular:</strong> Valorizamos e promovemos as tradições culturais brasileiras, especialmente as festas juninas e julinas.</li>
    <li><strong>Justiça Social:</strong> Acreditamos em um Brasil sem fome e sem miséria, onde todos tenham acesso a oportunidades e uma vida digna.</li>
    <li><strong>Solidariedade:</strong> Incentivamos a união e a colaboração entre as pessoas para a construção de uma sociedade mais justa.</li>
    <li><strong>Alegria e Celebração:</strong> Celebramos a vida e a cultura com alegria, música, dança e comidas típicas.</li>
    <li><strong>Inclusão e Diversidade:</strong>  As Festas Lulinas são abertas a todos, independentemente de origem, raça, gênero, orientação sexual ou crença.</li>
</ul>

<h2>Participe!</h2>
<p>
    Cadastre sua festa, junte-se a nós e faça parte desse movimento de celebração e transformação!
</p>

<a href="<?= base_url('cadastre-sua-festa'); ?>" class="btn btn-primary btn-lg">Cadastre sua Festa</a>
<a href="<?= base_url('apoie'); ?>" class="btn btn-secondary btn-lg">Apoie-se</a>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Nossos Colaboradores</h2>
            <p class="lead">
                Conheça as pessoas incríveis que fazem as Festas Lulinas acontecerem!
            </p>
            <p>
                Dedicação, empenho e amor pela cultura popular são apenas algumas das qualidades que definem nossos colaboradores. Cada um deles contribui de forma única para o sucesso das nossas festas, e somos imensamente gratos por seu trabalho e compromisso.
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-3 col-sm-6 text-center">
            <img src="<?php echo base_url('img/placeholder.jpg'); ?>" alt="Colaborador 1" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
            <h4 class="mt-3">Colaborador 1</h4>
            <p>Breve descrição sobre a contribuição do colaborador 1.</p>
        </div>

        <div class="col-md-3 col-sm-6 text-center">
            <img src="<?php echo base_url('img/placeholder.jpg'); ?>" alt="Colaborador 2" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
            <h4 class="mt-3">Colaborador 2</h4>
            <p>Breve descrição sobre a contribuição do colaborador 2.</p>
        </div>

        <div class="col-md-3 col-sm-6 text-center">
            <img src="<?php echo base_url('img/placeholder.jpg'); ?>" alt="Colaborador 3" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
            <h4 class="mt-3">Colaborador 3</h4>
            <p>Breve descrição sobre a contribuição do colaborador 3.</p>
        </div>

        <div class="col-md-3 col-sm-6 text-center">
            <img src="<?php echo base_url('img/placeholder.jpg'); ?>" alt="Colaborador 4" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
            <h4 class="mt-3">Colaborador 4</h4>
            <p>Breve descrição sobre a contribuição do colaborador 4.</p>
        </div>
    </div>
</div>






















<?=view('template/footer'); ?>