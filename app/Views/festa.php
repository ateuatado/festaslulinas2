<?=view('template/header'); ?>



<div class="display-3 animada">Cadastre sua Festa</div>

<p class="lead mt-5">
    Quer fazer parte do movimento das Festas Lulinas e celebrar a cultura popular brasileira, homenageando o legado do ex-presidente Lula? Cadastre aqui a sua festa e junte-se a nós!
</p>

<div class="alert alert-info">
    <h4 class="alert-heading">Atenção!</h4>
    <p>As inscrições para as Festas Lulinas de <?php echo date('Y'); ?> estarão abertas a partir de <strong>1º de março de <?php echo date('Y'); ?></strong> e vão até <strong>15 de junho de <?php echo date('Y'); ?></strong>. </p>
    <p>Fique ligado e não perca a chance de cadastrar a sua festa!</p>
</div>

<h2>Tema de <?php echo date('Y'); ?>: Lula Guerreiro Contra a Fome e a Miséria</h2>

<p>
    O tema deste ano, "Lula Guerreiro Contra a Fome e a Miséria", é um chamado à ação e à solidariedade. É um momento para celebrarmos as conquistas do passado e reafirmarmos nosso compromisso com a construção de um Brasil mais justo e igualitário, onde todos tenham acesso a alimentação digna e uma vida melhor.
</p>
<p>
    Através das Festas Lulinas, queremos relembrar a importância dos programas sociais que marcaram a era Lula, como o Fome Zero e o Bolsa Família, e que foram fundamentais para tirar milhões de brasileiros da miséria. Queremos também destacar a necessidade de continuarmos lutando contra as desigualdades sociais e por um futuro onde a fome e a miséria sejam apenas lembranças do passado.
</p>
<p>
Junte-se a nós nessa celebração da cultura popular, da solidariedade e da esperança em um Brasil melhor para todos!
</p>

<h2>Como Participar</h2>

<p>
    Quando as inscrições estiverem abertas, o processo de cadastro será simples e rápido:
</p>

<ol>
    <li>Acesse o formulário de cadastro <a href="<?= base_url('cadastre-sua-festa/formulario'); ?>">aqui</a>. (O link só estará ativo a partir de março)</li>
    <li>Preencha as informações solicitadas sobre a sua festa, incluindo:
        <ul>
            <li>Nome da festa</li>
            <li>Data e horário</li>
            <li>Local (endereço completo)</li>
            <li>Descrição da festa (comidas típicas, atrações, etc.)</li>
            <li>Dados do responsável (seu nome, e-mail e telefone)</li>
            <li>Se representa alguma instituição, preencher os dados solicitados</li>
        </ul>
    </li>
    <li>Envie o formulário.</li>
    <li>Pronto! Sua festa estará cadastrada e aparecerá na lista de Festas Lulinas do site.</li>
</ol>

<p>
    <strong >Lembre-se:</strong> As inscrições estarão abertas de 1º de março a 15 de junho de <?php echo date('Y'); ?>. Cadastre sua festa dentro do prazo e participe!
</p>

<div class="container">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfKTxQ7ZKT_6iB-7wRcCfocfGjsfO4xq0R0wEtWEj9FnVEeDQ/viewform?embedded=true" width="640" height="1184" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
</div>

<a href="<?= base_url('cadastre-sua-festa/formulario'); ?>" class="btn btn-primary btn-lg disabled">Cadastre sua Festa</a>




















<?=view('template/footer'); ?>