
/*$(document).ready(function(){
   $("button").click(function(){
    $("#plot").click*/
    $(document).ready(function(){
  $.ajax({
    url : "http://localhost/stockindicator/creategraph.php",
    type : "GET",
    success : function(data){
      console.log(data);

      var gp = [];
      var rsi = [];
      var reality = [];
      var twitter = [];

      for(var i in data){
        gp.push(data[i].gp);
        rsi.push(data[i].rsi);
        reality.push(data[i].reality);
        twitter.push(data[i].twitter);
      }

      var rsichart = {
        labels: rsi,
        datasets: [
          {
            label: "RSI",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor:"rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor:"rgba(59, 89, 152, 1)",
            data: rsi
          }
        ]
      };

      var gpchart = {
        labels: gp,
        datasets: [
          {
            label: "GP",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor:"rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor:"rgba(59, 89, 152, 1)",
            data: gp
          }
        ]
      };

      var realitychart = {
        labels: reality,
        datasets: [
          {
            label: "REALITY",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor:"rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor:"rgba(59, 89, 152, 1)",
            data: reality
          }
        ]
      };

      var twitterchart = {
        labels: twitter,
        datasets: [
          {
            label: "TWITTER",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor:"rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor:"rgba(59, 89, 152, 1)",
            data: twitter
          }
        ]
      };

      var rsictx = $("#rsichart");
      var realityctx = $("#realitychart");
      var gpctx = $("#gpchart");
      var twitterctx = $("#twitterchart");

      var rsiLineGraph = new Chart(rsictx, {
        type: 'line',
        data: rsichart
      })
      var realityLineGraph = new Chart(realityctx, {
        type: 'line',
        data: realitychart
      })
      var gpLineGraph = new Chart(gpctx, {
        type: 'line',
        data: gpchart
      })
      var twitterLineGraph = new Chart(twitterctx, {
        type: 'line',
        data: twitterchart
      })

    },
    error : function(data) {

    }
  });

});
