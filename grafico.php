<html>
<head>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
//carregando modulo visualization
google.load("visualization", "1", {packages:["corechart"]});

//função de monta e desenha o gráfico
function drawChart() {
//variavel com armazenamos os dados, um array de array's
//no qual a primeira posição são os nomes das colunas
var data = google.visualization.arrayToDataTable([
['Linguagem', 'Quando gosto dela'],
['Java', 40],
['PHP', 30],
['Javascript', 25],
['C#', 5],

]);
//opções para exibição do gráfico
var options = {
title: 'Linguagens',//titulo do gráfico
is3D: true // false para 2d e true para 3d o padrão é false
};
//cria novo objeto PeiChart que recebe
//como parâmetro uma div onde o gráfico será desenhado
var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
//desenha passando os dados e as opções
chart.draw(data, options);
}
//metodo chamado após o carregamento
google.setOnLoadCallback(drawChart);
</script>
</head>
<body>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>
</html>