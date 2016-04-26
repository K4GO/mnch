var chsec4diarhoeadata = google.visualization.arrayToDataTable(jsonData['CHV2_DTreatmentCommodities']);

      var chsec4diarhoeaoptions = {
        width: '100%',
        height: 300,
        colors: ['green', 'red','#C6C6C6'],
        title: 'Availability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4diarhoea = new google.visualization.ColumnChart(document.getElementById('chsec4diarhoea'));
      chsec4diarhoea.draw(chsec4diarhoeadata, chsec4diarhoeaoptions);

var chsec4diarhoeadata2 = google.visualization.arrayToDataTable(jsonData['CHV2_DTreatmentAvailability']); 

      var chsec4diarhoea2options = {
      colors: ['#3366CC', '#DC3912', '#FF9900','#C6C6C6'],
        width: '100%',
        height: 300,
        title: 'Reasons for Unavailability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4diarhoea2 = new google.visualization.ColumnChart(document.getElementById('chsec4diarhoea2'));
      chsec4diarhoea2.draw(chsec4diarhoeadata2, chsec4diarhoea2options);

  function resizechsec4diarhoea () {
      
         chsec4diarhoea.draw(chsec4diarhoeadata, chsec4diarhoeaoptions);
           chsec4diarhoea2.draw(chsec4diarhoeadata2, chsec4diarhoea2options);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizechsec4diarhoea, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizechsec4diarhoea);
    }