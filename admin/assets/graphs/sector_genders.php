<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawGenderGraphs);
      google.charts.setOnLoadCallback(drawGenderIdentityGraph);
      function drawGenderIdentityGraph() {
        var data = google.visualization.arrayToDataTable([
          ['Household', 'Responses'],
          ['Bisexual', <?php echo $numOfGenderIDBisexual ?> ],
          ['Heterosexual', <?php echo $numOfGenderIDHeterosexual ?> ],
          ['Homosexual', <?php echo $numOfGenderIDHomosexual ?> ],
          ['Prefer Not To Say', <?php echo $numOfGenderIDUnknown ?> ],
          ['Other ', <?php echo $numOfGenderIDOther ?>]
        ]);

        var options = {
          title: 'Gender Identity Stats ',
          pieHole: 0.3,
        };

        var chart = new google.visualization.PieChart(document.getElementById('gender_identity_charts'));
        chart.draw(data, options);
      }

      function drawGenderGraphs() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Cisgender', <?php echo $numOfGenderCisgender ?>],
          ['Gender Non-Conforming', <?php echo $numOfGenderNonConform ?>],
          ['Transgender', <?php echo $numOfGenderTransgender ?>],
          ['Queer / Questioning', <?php echo $numOfGenderQueer ?>],
          ['Prefer Not To Say', <?php echo $numOfGenderUnknown ?>],
          ['Other', <?php echo $numOfGenderOther ?>]
        ]);

        // Set options for Sarah's pie chart.
        var overall_totals_options = {
                      title:'',
                       width:600,
                       height:400,
                       legend: 'none',
                       colors: ['#DC3912', '#DC3932', '#DC3952', '#DC3A12']
                     };

      
        var overall_totals_barchart = new google.visualization.BarChart(document.getElementById('gender_charts'));
        overall_totals_barchart.draw(data, overall_totals_options);
      }

    </script>
  </head>
  <body>

    <table class="columns">
      <tr>
        <td>
          <div id="gender_identity_charts" style="width: 500px; height: 400px;"></div>
        </td>
        <td>
          <div id="gender_charts" style="width: 800px; height: 400px;">
        </td>                
      </tr>
    </table>
 
  </body>
</html>