<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Formulário do Candidato</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f2f2f2;
        margin: 0;
        padding: 20px;
    }

    h2 {
        background: #333;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
    }

    .box {
        background: #fff;
        padding: 20px;
        margin-bottom: 25px;
        border-radius: 8px;
        box-shadow: 0 0 10px #00000020;
    }

    .aviso {
        background: #ffeb3b;
        color: #333;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-weight: bold;
        line-height: 1.5;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 15px;
    }

    input, textarea, select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
    }

    button {
        margin-top: 20px;
        padding: 12px;
        background: #333;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
        border-radius: 8px;
        width: 100%;
    }

    button:hover {
        background: #555;
    }
</style>
</head>
<body>

<h2>Formulário do Candidato</h2>

<!-- AVISO E BOAS-VINDAS -->
<div class="box aviso">
    Olá candidato! 👋<br>
    Seja muito bem-vindo! Por favor, leia atentamente:<br><br>
    ⚠️ Atenção: Peço que **não faça entrevista durante 72h** e me envie um vídeo no meu PV Discord com as informações: <strong>[ESTADO, IDADE, NOME COMPLETO]</strong>.
</div>

<form id="formCandidato" enctype="multipart/form-data">

<!-- BOAS VINDAS -->
<div class="box">
    <h3>Boas Vindas ao Candidato</h3>
    <label>Sua conta é acima do nível 7?</label>
    <input type="text" name="lv7">

    <label>Possui conta no Servidor 16?</label>
    <input type="text" name="servidor16">

    <label>Quantas contas de RP e em quais servidores?</label>
    <input type="text" name="contasRP">
</div>

<!-- TABELA DO CANDIDATO -->
<div class="box">
    <h3>Tabela do Candidato</h3>
    <label>Nome Completo</label>
    <input type="text" name="nomeCompleto">

    <label>Idade</label>
    <input type="number" name="idade">

    <label>Estado</label>
    <input type="text" name="estado">

    <label>Nome em Jogo</label>
    <input type="text" name="nomeJogo">

    <label>Nome para ADM</label>
    <input type="text" name="nomeADM">

    <label>Servidor que faz RP</label>
    <input type="text" name="servidorRP">

    <label>Horário de Turno</label>
    <input type="text" name="turno">

    <label>Servidor Escolhido</label>
    <input type="text" name="servidorEscolhido">

    <label>Servidor que será ADM</label>
    <input type="text" name="servidorADM">

    <label>Regras Acertadas</label>
    <textarea name="regrasAcertadas"></textarea>

    <label>Comunicar</label>
    <textarea name="comunicar"></textarea>
</div>

<!-- QUESTIONÁRIO -->
<div class="box">
    <h3>Questionário</h3>
    <label>1 - O que é CL? (CL / Combat Log — Sair do jogo em uma ação para se beneficiar, evitando morte, prisão ou sequestro)</label>
    <input type="text" name="cl">
    <label>❓Candidato acertou?</label>
    <select name="clAcertou"><option value="Sim">Sim</option><option value="Não">Não</option></select>

    <label>2 - O que é TK? (TK / Team Kill — Matar um membro da própria facção ou aliado sem motivo)</label>
    <input type="text" name="tk">
    <label>❓Candidato acertou?</label>
    <select name="tkAcertou"><option value="Sim">Sim</option><option value="Não">Não</option></select>

    <label>3 - O que é PG? (PG / Power Game — Ato de fazer algo impossível na vida real, forçar situações irreais ou abusar de mecânicas do jogo)</label>
    <input type="text" name="pg">
    <label>❓Candidato acertou?</label>
    <select name="pgAcertou"><option value="Sim">Sim</option><option value="Não">Não</option></select>

    <label>4 - O que é NRA? (NRA / Non Role Ambient — Utilizar armas em locais públicos como hospital, delegacia, praça, etc.)</label>
    <input type="text" name="nra">
    <label>❓Candidato acertou?</label>
    <select name="nraAcertou"><option value="Sim">Sim</option><option value="Não">Não</option></select>

    <label>5 - O que é DARK RP? (Ato de cometer assédio, discriminação, racismo, homofobia, violência moral ou qualquer prática extrema contra outro jogador)</label>
    <input type="text" name="darkrp">
    <label>❓Candidato acertou?</label>
    <select name="darkrpAcertou"><option value="Sim">Sim</option><option value="Não">Não</option></select>

    <label>6 - O que é VDM? (VDM / Vehicle Death Match — Atropelar jogadores intencionalmente para causar dano ou matar)</label>
    <input type="text" name="vdm">
    <label>❓Candidato acertou?</label>
    <select name="vdmAcertou"><option value="Sim">Sim</option><option value="Não">Não</option></select>

    <label>7 - O que é AI? (AI / Ação Irregular — Invadir ou permanecer perto de propriedades privadas, como casas ou mansões, com intenção de forçar ação)</label>
    <input type="text" name="ai">
    <label>❓Candidato acertou?</label>
    <select name="aiAcertou"><option value="Sim">Sim</option><option value="Não">Não</option></select>
</div>

<!-- ENVIO DE VÍDEO -->
<div class="box">
    <h3>Envio de Vídeo</h3>
    <label>Envie seu vídeo (MP4) com as informações: [ESTADO, IDADE, NOME COMPLETO]</label>
    <input type="file" name="video" accept="video/mp4">
</div>

<button type="submit">Enviar Dados</button>

</form>

<script>
document.getElementById("formCandidato").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch("save.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(res => alert(res.mensagem))
    .catch(err => alert("Erro ao enviar: " + err));
});
</script>

</body>
</html>
