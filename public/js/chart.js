let  AUDIO_STREAMS = document.querySelector(" AUDIO_STREAMS");
let white_box = document.getElementsByClassName("white_box");

var options = {
    chart: {
        height: 350,
        type: 'radialBar',
    },
    series: [70],
    labels: ['Progress'],
  }
  
  var chart = new ApexCharts(document.querySelector("#chart"), options);
  
  chart.render();
  
  var options = {
    chart: {
      height: 280,
      type: "radialBar"
    },
    
    series: [67],
    
    plotOptions: {
      radialBar: {
        hollow: {
          margin: 15,
          size: "70%"
        },
       
        dataLabels: {
          showOn: "always",
          name: {
            offsetY: -10,
            show: true,
            color: "#888",
            fontSize: "13px"
          },
          value: {
            color: "#111",
            fontSize: "30px",
            show: true
          }
        }
      }
    },
  
    stroke: {
      lineCap: "round",
    },
    labels: ["Progress"]
  };
  
  var chart = new ApexCharts(document.querySelector("#chart"), options);
  
  chart.render();
  
  