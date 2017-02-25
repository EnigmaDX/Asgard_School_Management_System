/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    
      google.charts.load("current", {packages: ["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      
      /**
       * Draws a donutchart for the breakdown of fees
       * @returns {undefined}
       */
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Component', 'Amount (GH₵)'],
        ['Tuition', 11],
        ['Feeding',  2],
        ['Medical',  2],
        ['Watch TV', 2],
        ['Sleep',    7]
    ]);

    var options = {
      title: 'Fees Breakdown (GH₵)',
      pieHole: 0.5,
      pieStartAngle: 30,
    };

    var dchart = new google.visualization.PieChart(document.getElementById('dchart'));
    dchart.draw(data, options);
}
